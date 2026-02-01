<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\SubService;
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
        $service->name_slug = Str::slug($data->sub_service_name, '-');
        $service->short_details = $data->sub_service_short_details;
        $service->details = $data->sub_service_details;
        $service->service_id = $data->service;
        $dir = getDirectoryLink('sub-services/sub-service-images');
        $makeDir = createDirectory($dir);
        if ($data->service_image) {
            $image = $data->service_image;
            $imageName = 'sub-service' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName, 100);
            $service->service_image = $imageName;
        }



        $service->save();


        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $sub_service_name = $lang->lang != 'en' ? 'sub_service_name_' . $lang->lang : 'sub_service_name';
            $sub_service_short_details = $lang->lang != 'en' ? 'sub_service_short_details_' . $lang->lang : 'sub_service_short_details';
            $sub_service_details = $lang->lang != 'en' ? 'sub_service_details_' . $lang->lang : 'sub_service_details';
            $type = $lang->lang != 'en' ? 'type_' . $lang->lang : 'type';
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
            if ($data->$service_short_details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Service',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'service_short_details',
                    'value'                 => $data->$service_short_details,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$service_details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Service',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'service_details',
                    'value'                 => $data->$service_details,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$type != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Service',
                    'translationable_id'    => $service->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'type',
                    'value'                 => $data->$type,
                    'created_at'            => Carbon::now(),
                ));
            }
        }
        Translation::insert($datas);

        return response([
            'service' => $service,
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Service create successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['service-update', 'service-delete']),
            'hasEditPermission' => hasPermission(['service-update']),
            'hasDeletePermission' => hasPermission(['service-delete']),
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
