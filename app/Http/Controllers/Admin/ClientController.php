<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Client;
use App\Models\Admin\Language;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:client-index,admin');
        $this->middleware('permission:client-store,admin')->only('store');
        $this->middleware('permission:client-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:client-delete,admin')->only('destroy');
    }
    public function index()
    {
        $clients = Client::where([['delete', 0]])->get();
        return view('backend.blade.pages.client', compact('clients'));
    }


    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {
        $data->validate([
            'client_name' => 'required',
            'client_details' => 'required',
            'client_image' => 'required|mimes:jpg,jpeg,png',
        ], [
            'client_name.required' => __('admin_local.client name required'),
            'client_details.required' => __('admin_local.client details required'),
            'client_image.required' => __('admin_local.client image required'),
            'client_image.mimes' => __('admin_local.Invalid image format. (jpeg,jpg,png)'),
        ]);


        $newclient = new Client();

        $newclient->client_name = $data->client_name;
        $newclient->client_details = $data->client_details;

        $dir = getDirectoryLink('client/client-images');
        $makeDir = createDirectory($dir);
        $allImages = [];
        if ($data->client_image) {
            $image = $data->client_image;
            $imageName = 'clientImg' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName);
            $newclient->client_image = $imageName;
        }
        $newclient->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $client_name = $lang->lang != 'en' ? 'client_name_' . $lang->lang : 'client_name';
            $client_details = $lang->lang != 'en' ? 'client_details_' . $lang->lang : 'client_details';
            if ($data->$client_name != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Client',
                    'translationable_id'    => $newclient->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'client_name',
                    'value'                 => $data->$client_name,
                    'created_at'            => Carbon::now(),
                ));
            }

            if ($data->$client_details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Client',
                    'translationable_id'    => $newclient->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'client_details',
                    'value'                 => $data->$client_details,
                    'created_at'            => Carbon::now(),
                ));
            }
        }
        Translation::insert($datas);
        /** Insert Translations End */


        return response([
            'client' => Client::findOrFail($newclient->id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Client added successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['client-update', 'client-delete']),
            'hasEditPermission' => hasPermission(['client-update']),
            'hasDeletePermission' => hasPermission(['client-delete']),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::withoutGlobalScope('translate')->findOrFail($id);
        return response($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
        $data->validate([
            'client_name' => 'required',
            'client_details' => 'required',
            'client_image' => 'mimes:jpg,jpeg,png',
        ], [
            'client_name.required' => __('admin_local.client name required'),
            'client_details.required' => __('admin_local.client details required'),
            'client_image.required' => __('admin_local.client image required'),
            'client_image.mimes' => __('admin_local.Invalid image format. (jpeg,jpg,png)'),
        ]);


        $updateclient = Client::findOrFail($id);

        $updateclient->client_name = $data->client_name;
        $updateclient->client_details = $data->client_details;

        $dir = getDirectoryLink('client/client-images');
        $makeDir = createDirectory($dir);
        if ($data->client_image) {
            $image = $data->client_image;
            $imageName = 'clientImg' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName);
            $updateclient->client_image = $imageName;
        }



        $updateclient->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $client_name = $lang->lang != 'en' ? 'client_name_' . $lang->lang : 'client_name';
            $client_details = $lang->lang != 'en' ? 'client_details_' . $lang->lang : 'client_details';

            if ($data->$client_name != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Client',
                    'translationable_id'    => $updateclient->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'client_name',
                ], [
                    'value'                 => $data->$client_name,
                    'updated_at'            => Carbon::now(),
                ]);
            }

            if ($data->$client_details != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Client',
                    'translationable_id'    => $updateclient->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'client_details',
                ], [
                    'value'                 => $data->$client_details,
                    'updated_at'            => Carbon::now(),
                ]);
            }
        }

        return response([
            'client' => Client::findOrFail($id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.client updated successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);
        $client->delete = 1;
        $client->updated_at = Carbon::now();
        $client->save();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.client deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        Client::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $client = Client::where('id', $data->id)->first();
        return $client;
    }
}
