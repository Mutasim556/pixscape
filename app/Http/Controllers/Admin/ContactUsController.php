<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contact;
use App\Models\Admin\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
     public function contactUs(){
        $contactinfo = Contact::first();
        if(!$contactinfo){
            $contactinfo = new Contact();
            $contactinfo->phone = null;
            $contactinfo->email = null;
            $contactinfo->address =null;
            $contactinfo->location =null;
            $contactinfo->facebook = null;
            $contactinfo->twitter = null;
            $contactinfo->youtube = null;
            $contactinfo->linkedin = null;

            $contactinfo->save();
        }
        return view('backend.blade.pages.contact',compact('contactinfo'));
    }

    public function updateContactUs(Request $data){
        // dd($data->all());
        $contactinfo = Contact::findOrFail(1);
        $contactinfo->phone = $data->phone;
        $contactinfo->email = $data->email;
        $contactinfo->address = $data->address;
        $contactinfo->location = $data->location;
        $contactinfo->facebook = $data->facebook;
        $contactinfo->twitter = $data->twitter;
        $contactinfo->youtube = $data->youtube;
        $contactinfo->linkedin = $data->linkedin;
        $contactinfo->instagram = $data->instagram;

        $contactinfo->save();
        return back();
    }


    public function contactUsMessages(){
        $messages = Message::get();
        return view('backend.blade.pages.messages',compact('messages'));
    }

    public function updateMessageStatus(Request $data){
        Message::where('id', $data->id)->update(['reply_status' => $data->status, 'updated_at' => Carbon::now()]);
        $Message = Message::where('id', $data->id)->first();
        return $Message;
    }


    public function deleteMessage(string $id){
        $message = Message::findOrFail($id);
        $message->delete();
        return response([
            'title' => __('admin_local.Congratulations !'),
            'text' => __('admin_local.Message deleted successfully.'),
            'confirmButtonText' => __('admin_local.Ok'),
        ]);
    }
}
