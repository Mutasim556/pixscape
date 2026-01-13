<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\Translation;
use App\Models\Admin\Value;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ValuesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:value-index,admin');
        $this->middleware('permission:value-store,admin')->only('store');
        $this->middleware('permission:value-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:value-delete,admin')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $values = Value::where([['delete', 0]])->get();
        return view('backend.blade.pages.value', compact('values'));
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

        $value = new Value();
        $value->title = $data->title;
        $value->details = $data->details;

        $value->save();


        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $details = $lang->lang != 'en' ? 'details_' . $lang->lang : 'details';
            if ($data->$title != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Value',
                    'translationable_id'    => $value->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                    'value'                 => $data->$title,
                    'created_at'            => Carbon::now(),
                ));
            }
            if ($data->$details != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Value',
                    'translationable_id'    => $value->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'details',
                    'value'                 => $data->$details,
                    'created_at'            => Carbon::now(),
                ));
            }
        }
        Translation::insert($datas);

        return response([
            'value' => $value,
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.value option create successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['value-update', 'value-delete']),
            'hasEditPermission' => hasPermission(['value-update']),
            'hasDeletePermission' => hasPermission(['value-delete']),
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
        $value = Value::withoutGlobalScope('translate')->findOrFail($id);
        // dd(app()->getLocale());
        return response($value);
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

        $value = Value::findOrFail($id);
        $value->title = $data->title;
        $value->details = $data->details;

        $value->save();
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        foreach ($languages as $lang) {
            $title = $lang->lang != 'en' ? 'title_' . $lang->lang : 'title';
            $details = $lang->lang != 'en' ? 'details_' . $lang->lang : 'details';
            if ($data->$title != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Value',
                    'translationable_id'    => $value->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'title',
                ], [
                    'value'                 => $data->$title,
                    'updated_at'            => Carbon::now(),
                ]);
            }
            if ($data->$details != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Value',
                    'translationable_id'    => $value->id,
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
        $value = Value::findOrFail($id);
        $value->delete = 1;
        $value->updated_at = Carbon::now();
        $value->save();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        Value::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $value = Value::where('id', $data->id)->first();
        return $value;
    }
}
