<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Career;
use App\Models\Admin\JobApplication;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutUs()
    {
        return view('frontend.pages.about.index');
    }

    public function team()
    {
        return view('frontend.pages.team.index');
    }

    public function teamMember()
    {

        if (request()->has('tmid')) {
            $teamMember = Team::where([['status', 1], ['delete', 0], ['id', request()->get('tmid')]])->first();
            $teams = \App\Models\Admin\Team::where([['status', 1], ['delete', 0]])->get();
            return view('frontend.pages.team.team_member', compact('teamMember', 'teams'));
        }
    }

    public function contact()
    {
        return view('frontend.pages.contact.index');
    }

    public function article()
    {

        return view('frontend.pages.article.index');
    }

    public function articleSingle()
    {
        if (request()->has('articleid')) {
            $article = Blog::where([['status', 1], ['delete', 0], ['id', request()->get('articleid')]])->with('team')->first();
            $articles = Blog::where([['status', 1], ['delete', 0]])->get();
            return view('frontend.pages.article.article_single', compact('article', 'articles'));
        }
    }

    public function project()
    {
        $projects = Project::where([['status', 1], ['delete', 0]])->get();

        return view('frontend.pages.project.index', compact('projects'));
    }

    public function projectSingle()
    {
        if (request()->has('projectid')) {
            $project = Project::where([['status', 1], ['delete', 0], ['id', request()->get('projectid')]])->with('team')->first();
            $projects = Project::where([['status', 1], ['delete', 0]])->get();
            return view('frontend.pages.project.project_single', compact('project', 'projects'));
        }
    }

    public function projectSearch()
    {
        if (request()->filter) {
            $search = request()->search;
            $filter = request()->items;

            $projects = Project::where([['status', 1], ['delete', 0]]);
            if ($search) {
                $projects = $projects->where('title', 'like', '%' . $search . '%');
            }
            if ($filter) {
                $projects = $projects->where(function ($q) use ($filter) {
                    foreach (explode(',', $filter) as $term) {
                        $q->orWhere('project_type_id', $term);
                    }
                });
            }

            return $projects->get();
        } else {
            $search = request()->search;

            $projects = Project::where([['status', 1], ['delete', 0], ['title', 'like', '%' . $search . '%']])->get();
            return $projects;
        }
    }

    public function workshop()
    {
        return view('frontend.pages.workshop.index');
    }

    public function careers()
    {
        $career = Career::first();
        return view('frontend.pages.careers.index',compact('career'));
    }


    public function services()
    {
        $services = Service::where([['status', 1], ['delete', 0],['type',request()->get('type')]])->get();
        $service_type = request()->get('type');
        return view('frontend.pages.services.index', compact('services','service_type'));
    }

    public function serviceSingle()
    {
        if (request()->has('serviceid')) {
            $service = Service::where([['status', 1], ['delete', 0], ['id', request()->get('serviceid')]])->first();
            $services = Service::where([['status', 1], ['delete', 0]])->get();
            return view('frontend.pages.services.services_single', compact('service', 'services'));
        }
    }

    public function serviceSearch()
    {
        if (request()->filter) {
            $search = request()->search;
            $filter = request()->items;

            $projects = Project::where([['status', 1], ['delete', 0]]);
            if ($search) {
                $projects = $projects->where('title', 'like', '%' . $search . '%');
            }
            if ($filter) {
                $projects = $projects->where(function ($q) use ($filter) {
                    foreach (explode(',', $filter) as $term) {
                        $q->orWhere('project_type_id', $term);
                    }
                });
            }

            return $projects->get();
        } else {
            $search = request()->search;

            $services = Service::where([['status', 1], ['delete', 0], ['service_name', 'like', '%' . $search . '%'],['type',request()->type]])->get();
            return $services;
        }
    }

    public function postResume(Request $data){
        $data->validate([
            'applicant_name'=>'required',
            'applicant_email'=>'required',
            'applicant_resume'=>'required|mimes:pdf|max:2000',
        ],[
            'applicant_name.required'=>'Applicant Name Required',
            'applicant_email.required'=>'Applicant Email Required',
            'applicant_resume.required'=>'Applicant Resume Required',
            'applicant_resume.mimes'=>'Applicant resume must be pdf',
        ]);

        $newResume = new JobApplication();
        $newResume->app_name = $data->applicant_name;
        $newResume->app_email = $data->applicant_email;

        $dir = getDirectoryLink('career/career-resume');
        $makeDir = createDirectory($dir);

         if ($data->hasFile('applicant_resume')) {
            $file = $data->file('applicant_resume');

            $fileName = time() . '_' . $file->getClientOriginalName();

            // storage/app/public/pdfs
            $filePath = $file->storeAs('pdf', $fileName, 'public');
        }
    }
}
