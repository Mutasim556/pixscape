<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\ProjectType;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProjectTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:project-type-index,admin');
        $this->middleware('permission:project-type-store,admin')->only('store');
        $this->middleware('permission:project-type-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:project-type-delete,admin')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectTypes = ProjectType::where('delete', 0)->get();
        return view('backend.blade.pages.project-type', compact('projectTypes'));
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
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ], [
            'title.required' => __('admin_local.Title required'),
            'short_description.required' => __('admin_local.Short description required'),
            'image.required' => __('admin_local.Image required'),
            'image.mimes' => __('admin_local.Invalid image format. (jpeg,jpg,png)'),
        ]);


        $newprojecttype = new ProjectType();

        $newprojecttype->title = $data->title;
        $newprojecttype->short_description = $data->short_description;

        $dir = getDirectoryLink('project/projecttype');
        $makeDir = createDirectory($dir);
        $allImages = [];
        if ($data->image) {
            $image = $data->image;
            $imageName = 'projecttypeImg' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName,100);
            $newprojecttype->image = $imageName;
        }
        $newprojecttype->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $short_description = $lang->lang != 'en' ? 'short_description_' . $lang->lang : 'short_description';
            if ($data->$title != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\ProjectType',
                    'translationable_id'    => $newprojecttype->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                    'value'                 => $data->$title,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$short_description != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\ProjectType',
                    'translationable_id'    => $newprojecttype->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'short_description',
                    'value'                 => $data->$short_description,
                    'created_at'            => Carbon::now(),
                ));
            }

        }
        Translation::insert($datas);
        /** Insert Translations End */


        return response([
            'projecttype' => ProjectType::findOrFail($newprojecttype->id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Added successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['project-type-update', 'project-type-delete']),
            'hasEditPermission' => hasPermission(['project-type-update']),
            'hasDeletePermission' => hasPermission(['project-type-delete']),
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
        $projecttype = ProjectType::withoutGlobalScope('translate')->findOrFail($id);
        return response($projecttype);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
        $data->validate([
            'title' => 'required',
            'short_description' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ], [
            'title.required' => __('admin_local.Title required'),
            'short_description.required' => __('admin_local.Short description required'),
            'image.required' => __('admin_local.Image required'),
            'image.mimes' => __('admin_local.Invalid image format. (jpeg,jpg,png)'),
        ]);


        $updateprojecttype = ProjectType::findOrFail($id);

        $updateprojecttype->title = $data->title;
        $updateprojecttype->short_description = $data->short_description;

        $dir = getDirectoryLink('project/projecttype');
        $makeDir = createDirectory($dir);
        if ($data->image) {
            $image = $data->image;
            $imageName = 'projecttypeImg' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName);
            $updateprojecttype->image = $imageName;
        }



        $updateprojecttype->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $short_description = $lang->lang != 'en' ? 'short_description_' . $lang->lang : 'short_description';
            if ($data->$title != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\ProjectType',
                    'translationable_id'    => $updateprojecttype->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                ], [
                    'value'                 => $data->$title,
                    'updated_at'            => Carbon::now(),
                ]);
            }
            if ($data->$short_description != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\ProjectType',
                    'translationable_id'    => $updateprojecttype->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'short_description',
                ], [
                    'value'                 => $data->$short_description,
                    'updated_at'            => Carbon::now(),
                ]);
            }

        }

        return response([
            'projecttype' => ProjectType::findOrFail($id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Updated successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $projecttype = ProjectType::findOrFail($id);
        $projecttype->delete=1;
        $projecttype->updated_at=Carbon::now();
        $projecttype->save();
        return response([
            'title'=>__('admin_local.Congratulations !'),
            'text'=>__('admin_local.Deleted successfully.'),
            'confirmButtonText'=>__('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        ProjectType::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $projecttype = ProjectType::where('id', $data->id)->first();
        return $projecttype;
    }
}
