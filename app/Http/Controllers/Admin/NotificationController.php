<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Language;
use App\Models\Admin\Notification;
use App\Models\Admin\Translation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:notification-index,admin');
        $this->middleware('permission:notification-store,admin')->only('store');
        $this->middleware('permission:notification-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:notification-delete,admin')->only('destroy');
    }
    public function index()
    {
        $notifications = Notification::where([['delete', 0]])->get();
        return view('backend.blade.pages.notification', compact('notifications'));
    }


    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $data)
    {
        $data->validate([
            'notification' => 'required',
            'type' => 'required',
        ], [
            'notification.required' => __('admin_local.Notification required'),
            'type.required' => __('admin_local.Notification type required'),
        ]);


        $newnotification = new Notification();

        $newnotification->notification = $data->notification;
        $newnotification->type = $data->type;
        $newnotification->position = $data->position;


        $newnotification->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $notification = $lang->lang != 'en' ? 'notification_' . $lang->lang : 'notification';
            $type = $lang->lang != 'en' ? 'type_' . $lang->lang : 'type';
            if ($data->$notification != null) {
                array_push($datas, array(
                    'translationable_type'  => 'App\Models\Admin\Notification',
                    'translationable_id'    => $newnotification->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'notification',
                    'value'                 => $data->$notification,
                    'created_at'            => Carbon::now(),
                ));
            }


        }
        Translation::insert($datas);
        /** Insert Translations End */


        return response([
            'notification' => Notification::findOrFail($newnotification->id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Notification added successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
            'hasAnyPermission' => hasPermission(['notification-update', 'notification-delete']),
            'hasEditPermission' => hasPermission(['notification-update']),
            'hasDeletePermission' => hasPermission(['notification-delete']),
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
        $notification = Notification::withoutGlobalScope('translate')->findOrFail($id);
        return response($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $data, string $id)
    {
        $data->validate([
            'notification' => 'required',
            'type' => 'required',
            'notification_image' => 'mimes:jpg,jpeg,png',
        ], [
            'notification.required' => __('admin_local.notification name required'),
            'type.required' => __('admin_local.notification details required'),
            'notification_image.required' => __('admin_local.notification image required'),
            'notification_image.mimes' => __('admin_local.Invalid image format. (jpeg,jpg,png)'),
        ]);


        $updatenotification = Notification::findOrFail($id);

        $updatenotification->notification = $data->notification;
        $updatenotification->type = $data->type;


        $updatenotification->save();

        /** Insert Translations Start */
        $languages =  Language::where([['status', 1], ['delete', 0]])->get();
        $datas = [];
        foreach ($languages as $lang) {
            $notification = $lang->lang != 'en' ? 'notification_' . $lang->lang : 'notification';
            $type = $lang->lang != 'en' ? 'type_' . $lang->lang : 'type';

            if ($data->$notification != null) {
                Translation::updateOrInsert([
                    'translationable_type'  => 'App\Models\Admin\Notification',
                    'translationable_id'    => $updatenotification->id,
                    'locale'                => $lang->lang,
                    'key'                   => 'notification',
                ], [
                    'value'                 => $data->$notification,
                    'updated_at'            => Carbon::now(),
                ]);
            }
        }

        return response([
            'notification' => Notification::findOrFail($id),
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Notification updated successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete = 1;
        $notification->updated_at = Carbon::now();
        $notification->save();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Notification deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }

    public function updateStatus(Request $data)
    {
        Notification::where('id', $data->id)->update(['status' => $data->status, 'updated_at' => Carbon::now()]);
        $notification = Notification::where('id', $data->id)->first();
        return $notification;
    }
}
