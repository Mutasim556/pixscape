<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\SubService;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class SubServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:sub-service-index,admin');
        $this->middleware('permission:sub-service-store,admin')->only('store');
        $this->middleware('permission:sub-service-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:sub-service-delete,admin')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subservices = SubService::where([['delete', 0]])->get();
        return view('backend.blade.pages.sub-service', compact('subservices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {
        $data->validate([
            'sub_service_name' => 'required',
            'sub_service_short_details' => 'required',
            'sub_service_details' => 'required',
            'service' => 'required',
        ], [
            'sub_service_name.required' => __('admin_local.Service name required'),
            'sub_service_short_details.required' => __('admin_local.Service short details required'),
            'sub_service_details.required' => __('admin_local.Service details required'),
            'service.required' => __('admin_local.Service required'),
        ]);

        $service = new SubService();
        $service->name = $data->sub_service_name;
        $service->short_details = $data->sub_service_short_details;
        $service->details = $data->sub_service_details;
        $service->service_id = $data->service;
        $dir = getDirectoryLink('sub-services/sub-service-images');
        $makeDir = createDirectory($dir);
        if ($data->sub_service_image) {
            $image = $data->sub_service_image;
            $imageName = 'sub-service' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName, 100);
            $service->image = $imageName;
        }



        $service->save();


        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $sub_service_name = $lang->lang != 'en' ? 'sub_service_name_' . $lang->lang : 'sub_service_name';
            $sub_service_short_details = $lang->lang != 'en' ? 'sub_service_short_details_' . $lang->lang : 'sub_service_short_details';
            $sub_service_details = $lang->lang != 'en' ? 'sub_service_details_' . $lang->lang : 'sub_service_details';
            if ($data->$sub_service_name != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\SubService',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'name',
                    'value'                 => $data->$sub_service_name,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$sub_service_short_details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\SubService',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'short_details',
                    'value'                 => $data->$sub_service_short_details,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$sub_service_details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\SubService',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'details',
                    'value'                 => $data->$sub_service_details,
                    'created_at'            => Carbon::now(),
                ));
            }
        }
        Translation::insert($datas);

        return response([
            'service' => $service,
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Sub-Service create successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['sub-service-update', 'sub-service-delete']),
            'hasEditPermission' => hasPermission(['sub-service-update']),
            'hasDeletePermission' => hasPermission(['sub-service-delete']),
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
        $service = SubService::withoutGlobalScope('translate')->findOrFail($id);
        return response($service);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
        $data->validate([
            'sub_service_name' => 'required',
            'sub_service_short_details' => 'required',
            'sub_service_details' => 'required',
            'service' => 'required',
        ], [
            'sub_service_name.required' => __('admin_local.Service name required'),
            'sub_service_short_details.required' => __('admin_local.Service short details required'),
            'sub_service_details.required' => __('admin_local.Service details required'),
            'service.required' => __('admin_local.Service required'),
        ]);

        $service = SubService::findOrFail($id);
        $service->name = $data->sub_service_name;
        $service->short_details = $data->sub_service_short_details;
        $service->details = $data->sub_service_details;
        $service->service_id = $data->service;
        $dir = getDirectoryLink('sub-services/sub-service-images');
        $makeDir = createDirectory($dir);
        if ($data->sub_service_image) {
            $image = $data->sub_service_image;
            $imageName = 'sub-service' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName, 100);
            $service->image = $imageName;
        }



        $service->save();

        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        foreach ($languages as $lang) {
            $sub_service_name = $lang->lang != 'en' ? 'sub_service_name_' . $lang->lang : 'sub_service_name';
            $sub_service_short_details = $lang->lang != 'en' ? 'sub_service_short_details_' . $lang->lang : 'sub_service_short_details';
            $sub_service_details = $lang->lang != 'en' ? 'sub_service_details_' . $lang->lang : 'sub_service_details';
            if ($data->$sub_service_name != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\SubService',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'name',
                ], [
                    'value'                 => $data->$sub_service_name,
                    'updated_at'            => Carbon::now(),
                ]);
            }
            if ($data->$sub_service_short_details != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\SubService',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'short_details',
                ], [
                    'value'                 => $data->$sub_service_short_details,
                    'updated_at'            => Carbon::now(),
                ]);
            }
            if ($data->$sub_service_details != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\SubService',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'details',
                ], [
                    'value'                 => $data->$sub_service_details,
                    'updated_at'            => Carbon::now(),
                ]);
            }

        }
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Sub-Service updated successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = SubService::findOrFail($id);
        $service->delete = 1;
        $service->updated_at = Carbon::now();
        $service->save();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Sub-Service deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        SubService::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $service = SubService::where('id', $data->id)->first();
        return $service;
    }
}
