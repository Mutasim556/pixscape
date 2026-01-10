<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Framework;
use App\Models\Admin\Language;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrameworkController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:framework-index,admin');
        $this->middleware('permission:framework-store,admin')->only('store');
        $this->middleware('permission:framework-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:framework-delete,admin')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frameworks = Framework::where([['delete', 0]])->get();
        return view('backend.blade.pages.framework', compact('frameworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $data)
    {
        $data->validate([
            'title' => 'required',
            'details' => 'required',
        ], [
            'tile.required' => __('admin_local.Title required'),
            'details.required' => __('admin_local.Details required'),
        ]);

        $framework = new Framework();
        $framework->title = $data->title;
        $framework->details = $data->details;

        $framework->save();


        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $details = $lang->lang != 'en' ? 'details_' . $lang->lang : 'details';
            if ($data->$title != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Framework',
                    'translationable_id'    => $framework->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                    'value'                 => $data->$title,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Framework',
                    'translationable_id'    => $framework->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'details',
                    'value'                 => $data->$details,
                    'created_at'            => Carbon::now(),
                ));
            }
        }
        Translation::insert($datas);

        return response([
            'framework' => $framework,
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Framework option create successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['framework-update', 'framework-delete']),
            'hasEditPermission' => hasPermission(['framework-update']),
            'hasDeletePermission' => hasPermission(['framework-delete']),
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
        $framework = Framework::withoutGlobalScope('translate')->findOrFail($id);
        // dd(app()->getLocale());
        return response($framework);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
        // dd($data->service_image);
        $data->validate([
            'title' => 'required',
            'details' => 'required',
        ], [
            'tile.required' => __('admin_local.Title required'),
            'details.required' => __('admin_local.Details required'),
        ]);

        $framework = Framework::findOrFail($id);
        $framework->title = $data->title;
        $framework->details = $data->details;

        $framework->save();
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $details = $lang->lang != 'en' ? 'details_' . $lang->lang : 'details';
            if ($data->$title != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Framework',
                    'translationable_id'    => $framework->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                ], [
                    'value'                 => $data->$title,
                    'updated_at'            => Carbon::now(),
                ]);
            }
            if ($data->$details != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Framework',
                    'translationable_id'    => $framework->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'details',
                ], [
                    'value'                 => $data->$details,
                    'updated_at'            => Carbon::now(),
                ]);
            }

        }
        return response([
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
        $framework = Framework::findOrFail($id);
        $framework->delete = 1;
        $framework->updated_at = Carbon::now();
        $framework->save();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        Framework::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $framework = Framework::where('id', $data->id)->first();
        return $framework;
    }
}
