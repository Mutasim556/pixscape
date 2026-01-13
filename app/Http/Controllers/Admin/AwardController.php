<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Award;
use App\Models\Admin\Language;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:award-index,admin');
        $this->middleware('permission:award-store,admin')->only('store');
        $this->middleware('permission:award-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:award-delete,admin')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::where([['delete', 0]])->get();
        return view('backend.blade.pages.award', compact('awards'));
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

        $award = new award();
        $award->title = $data->title;
        $award->details = $data->details;

        $award->save();


        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $details = $lang->lang != 'en' ? 'details_' . $lang->lang : 'details';
            if ($data->$title != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Award',
                    'translationable_id'    => $award->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                    'value'                 => $data->$title,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Award',
                    'translationable_id'    => $award->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'details',
                    'value'                 => $data->$details,
                    'created_at'            => Carbon::now(),
                ));
            }
        }
        Translation::insert($datas);

        return response([
            'award' => $award,
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Award create successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['award-update', 'award-delete']),
            'hasEditPermission' => hasPermission(['award-update']),
            'hasDeletePermission' => hasPermission(['award-delete']),
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
        $award = Award::withoutGlobalScope('translate')->findOrFail($id);
        // dd(app()->getLocale());
        return response($award);
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

        $award = Award::findOrFail($id);
        $award->title = $data->title;
        $award->details = $data->details;

        $award->save();
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $details = $lang->lang != 'en' ? 'details_' . $lang->lang : 'details';
            if ($data->$title != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Award',
                    'translationable_id'    => $award->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                ], [
                    'value'                 => $data->$title,
                    'updated_at'            => Carbon::now(),
                ]);
            }
            if ($data->$details != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Award',
                    'translationable_id'    => $award->id,
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
        $award = Award::findOrFail($id);
        $award->delete = 1;
        $award->updated_at = Carbon::now();
        $award->save();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        Award::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $award = Award::where('id', $data->id)->first();
        return $award;
    }
}
