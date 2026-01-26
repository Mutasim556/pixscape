<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Career;
use App\Models\Admin\JobApplication;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $career = Career::first();
        if(!$career){
            $car = new Career();
            $car->save();
            $career = Career::first();
        }
        return view('backend.blade.pages.career',compact('career'));
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
    public function store(Request $request)
    {
        //
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
    public function update(Request $data, string $id)
    {
        $update = Career::find($id);
        $update->title = $data->title;
        $update->details = $data->details;

        $dir = getDirectoryLink('career/career-images');
        $makeDir = createDirectory($dir);
        if ($data->image) {
            $image = $data->image;
            $imageName = 'career' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName, 100);
            $update->image = $imageName;
        }

        $update->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function jobApplications(){

        $applications = JobApplication::query();
        if(request()->start_date){
            $applications = $applications->where('created_at','>=',request()->start_date);
        }
        if(request()->send_date){
            $applications = $applications->where('created_at','<=',request()->end_date);
        }
        if(!request()->start_date && !request()->send_date){
            $applications = $applications->orderBy('id','DESC')->limit(10);
        }
        $applications = $applications->get();
        return view('backend.blade.pages.job_application',compact('applications'));
    }

    public function jobApplicationsDelete(string $id){
        $ja = JobApplication::where('id',$id)->first();
        unlink($ja->app_resume);
        $delete = JobApplication::where('id',$id)->delete();
        return back();
    }
}
