<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Counter;
use App\Models\Admin\Language;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CounterController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:counter-index,admin');
        $this->middleware('permission:counter-store,admin')->only('store');
        $this->middleware('permission:counter-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:counter-delete,admin')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counters = Counter::where([['delete',0]])->get();
        return view('backend.blade.settings.homepage.counter',compact('counters'));
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
            'counter' => 'required',
            'icon' => 'required|mimes:jpg,jpeg,png',
        ], [
            'title.required' => __('admin_local.Title required'),
            'counter.required' => __('admin_local.Counter required'),
            'icon.required' => __('admin_local.Icon required'),
            'icon.mimes' => __('admin_local.Invalid icon format. (jpeg,jpg,png)'),
        ]);

        $newcounter = new Counter();

        $newcounter->title = $data->title;
        $newcounter->counter = $data->counter;

        $dir = getDirectoryLink('homepage/counter-images');
        $makeDir = createDirectory($dir);
        $allImages = [];
        if ($data->icon) {
            $image = $data->icon;
            $imageName = 'counterImg' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName,100);
            $newcounter->image = $imageName;
        }
        $newcounter->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            if ($data->$title != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Counter',
                    'translationable_id'    => $newcounter->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                    'value'                 => $data->$title,
                    'created_at'            => Carbon::now(),
                ));
            }

        }
        Translation::insert($datas);
        /** Insert Translations End */


        return response([
            'counter' => Counter::findOrFail($newcounter->id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Counter added successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['comment-update', 'comment-delete']),
            'hasEditPermission' => hasPermission(['comment-update']),
            'hasDeletePermission' => hasPermission(['comment-delete']),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function updateStatus(Request $data)
    {
        Counter::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $counter = Counter::where('id', $data->id)->first();
        return $counter;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $counter = Counter::withoutGlobalScope('translate')->findOrFail($id);
        return response($counter);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
         $data->validate([
            'title' => 'required',
            'counter' => 'required',
            'icon' => 'mimes:jpg,jpeg,png',
        ], [
            'title.required' => __('admin_local.Title required'),
            'counter.required' => __('admin_local.Counter required'),
            'icon.required' => __('admin_local.Icon required'),
            'icon.mimes' => __('admin_local.Invalid icon format. (jpeg,jpg,png)'),
        ]);


        $updatecounter = Counter::findOrFail($id);

        $updatecounter->title = $data->title;
        $updatecounter->counter = $data->counter;

        $dir = getDirectoryLink('homepage/counter-images');
        $makeDir = createDirectory($dir);
        if ($data->image) {
            $image = $data->image;
            $imageName = 'counterImg' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName,100);
            $updatecounter->image = $imageName;
        }



        $updatecounter->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            if ($data->$title != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Counter',
                    'translationable_id'    => $updatecounter->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                ], [
                    'value'                 => $data->$title,
                    'updated_at'            => Carbon::now(),
                ]);
            }


        }

        return response([
            'counter' => Counter::findOrFail($id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Counter updated successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
