<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Career;
use App\Models\Admin\JobApplication;
use App\Models\Admin\Message;
use App\Models\Admin\Project;
use App\Models\Admin\Service;
use App\Models\Admin\SubService;
use App\Models\Admin\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mews\Purifier\Facades\Purifier;

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

    public function messagePost(Request $data)
    {
        $data->merge([
            'phone' => Purifier::clean(preg_replace('/\D/', '', $data->phone), [
                'HTML.Allowed' => ''
            ]),
            'email' =>  Purifier::clean(strtolower(trim($data->email)), [
                'HTML.Allowed' => ''
            ]),
            'name' => Purifier::clean($data->name, [
                'HTML.Allowed' => ''
            ]),
            'message' => Purifier::clean($data->message, [
                'HTML.Allowed' => ''
            ]),
            'type' => Purifier::clean($data->type, [
                'HTML.Allowed' => ''
            ]),
        ]);
        $data->validate([
            'name' => 'required|max:49',
            'email' => 'email|max:49',
            'phone' => 'required|digits_between:10,15',
            'message' => 'required',
        ], [
            'name.required' => 'Name field is required',
            'name.max' => 'Maximum 49 letters are allowed',
            'email.required' => 'Email field is required',
            'email.email' => 'Invalid email',
            'email.max' => 'Email shoul not greater then 49 letters',
            'phone.required' => 'Phone number is required',
            'phone.digits_between' => 'The phone field must be between 10 and 15 digits',
            'message.required' => 'Message is required',
        ]);

        $message = new Message();
        $message->name = $data->name;
        $message->email = $data->email;
        $message->phone = $data->phone;
        $message->type = $data->type;
        $message->message = $data->message;
        $message->subscription = 0;

        if ($message->save()) {
            return redirect()->to(url()->previous() . '#message_form')
                ->with('success', 'Thanks for messaging. We will contact you within a short time');
        }
    }

    public function subscribePost(Request $data)
    {
        $data->merge([
            'email' =>  Purifier::clean(strtolower(trim($data->email)), [
                'HTML.Allowed' => ''
            ]),
        ]);
        $validator = Validator::make($data->all(), [
            'email' => 'required|email|max:49|unique:messages,email',
        ], [
            'name.required' => 'Name field is required',
            'name.max' => 'Maximum 49 letters are allowed',
            'email.required' => 'Email field is required',
            'email.unique' => 'Email already used',
            'email.email' => 'Invalid email',
            'email.max' => 'Email should not be greater than 49 letters',
            'phone.required' => 'Phone number is required',
            'phone.digits_between' => 'The phone field must be between 10 and 15 digits',
            'message.required' => 'Message is required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->to(url()->previous() . '#message_form')
                ->withErrors($validator)
                ->withInput();
        }

        $message = new Message();
        $message->email = $data->email;
        if ($message->save()) {
            return redirect()->to(url()->previous() . '#message_form')
                ->with('success', 'Thanks for messaging. We will contact you within a short time');
        }
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
        return view('frontend.pages.careers.index', compact('career'));
    }


    public function services()
    {
        $services = Service::where([['status', 1], ['delete', 0], ['type', request()->get('type')]])->get();
        $service_type = request()->get('type');
        return view('frontend.pages.services.index', compact('services', 'service_type'));
    }

    public function serviceSingle()
    {
        if (request()->has('serviceid')) {
            $service = Service::with('subServices')->where([['status', 1], ['delete', 0], ['id', request()->get('serviceid')]])->first();
            $services = Service::where([['status', 1], ['delete', 0]])->get();
            return view('frontend.pages.services.services_single', compact('service', 'services'));
        }
    }

    public function subServiceSingle(){
        if (request()->has('subserviceid')) {
            $subservice = SubService::with('service')->where([['status', 1], ['delete', 0], ['id', request()->get('subserviceid')]])->first();
            return view('frontend.pages.services.sub_services_single', compact('subservice'));
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

            $services = Service::where([['status', 1], ['delete', 0], ['service_name', 'like', '%' . $search . '%'], ['type', request()->type]])->get();
            return $services;
        }
    }

    public function postResume(Request $data)
    {
        
         $validator = Validator::make($data->all(), [
            'applicant_name' => 'required',
            'applicant_email' => 'required',
            'applicant_resume' => 'required|mimes:pdf|max:2480',
        ], [
            'applicant_name.required' => 'Applicant Name Required',
            'applicant_email.required' => 'Applicant Email Required',
            'applicant_resume.required' => 'Applicant Resume Required',
            'applicant_resume.mimes' => 'Applicant resume must be pdf',
            'applicant_resume.max' => 'File size not more then 2 MB',
        ]);
        if ($validator->fails()) {
            return redirect()
                ->to(url()->previous() . '#applicant_form')
                ->withErrors($validator)
                ->withInput();
        }

        $newResume = new JobApplication();
        $newResume->app_name = $data->applicant_name;
        $newResume->app_email = $data->applicant_email;
        $newResume->job_post = $data->job_post;

        $dir = getDirectoryLink('career/career-resume');
        $makeDir = createDirectory($dir);

        if ($data->hasFile('applicant_resume')) {

            $pdf = $data->file('applicant_resume');

            $fileName = time() . '_' . $pdf->getClientOriginalName();

            // Move PDF to directory
            $pdf->move($dir, $fileName);
        }

        $newResume->app_resume = $dir . "/" . $fileName;

        $newResume->save();

        return redirect()->back()->with('success', 'Application submitted successfully!')->withFragment('applicant_form');
    }
}
