<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Project;
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
                    foreach (explode(',',$filter) as $term) {
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
        return view('frontend.pages.careers.index');
    }
}
