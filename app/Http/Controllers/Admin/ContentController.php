<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Content;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::first();
        if (!$content) {
            $content = new Content();

            $content->save();
        }
        return view('backend.blade.pages.content', compact('content'));
    }

    public function update(Request $data, string $id)
    {
        $content = Content::findOrFail($id);
        $content->home_counter_title = $data->home_counter_title;
        $content->home_counter_short_details = $data->home_counter_short_details;
        $content->home_counter_btn_text = $data->home_counter_btn_text;
        $content->home_work_title = $data->home_work_title;
        $content->home_work_short_details = $data->home_work_short_details;
        $content->home_work_btn_text = $data->home_work_btn_text;
        $content->home_work_current_text = $data->home_work_current_text;

        $dir = getDirectoryLink('content/content-images');
        $makeDir = createDirectory($dir);

        if ($data->home_work_contact_image) {
            $image = $data->home_work_contact_image;
            $imageName = 'homeContactImage' . time() . '.' . $image->getClientOriginalExtension();
            $manager = new ImageManager(new Driver());
            $imageName  =  $dir . '/' . $imageName;
            $manager->read($image)->save($imageName, 100);
            $content->home_work_contact_image = $imageName;
        }

        $content->home_work_contact_text = $data->home_work_contact_text;
        $content->about_title = $data->about_title;
        $content->about_service_title = $data->about_service_title;
        $content->about_service_short_details = $data->about_service_short_details;
        $content->about_framwork_title = $data->about_framwork_title;
        $content->about_framwork_details1 = $data->about_framwork_details1;
        // $content->about_framwork_details1 = $data->about_framwork_details1;
        $content->about_framwork_details2 = $data->about_framwork_details2;
        $content->about_framwork_details3 = $data->about_framwork_details3;
        $content->about_framwork_details4 = $data->about_framwork_details4;


        if ($data->about_framwork_image1) {
            $image = $data->about_framwork_image1;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'frameworkImage1' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->about_framwork_image1 = $imageName;
        }
        if ($data->about_framwork_image2) {
            $image = $data->about_framwork_image2;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'frameworkImage2' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->about_framwork_image2 = $imageName;
        }
        if ($data->about_framwork_image3) {
            $image = $data->about_framwork_image3;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'frameworkImage3' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->about_framwork_image3 = $imageName;
        }
        if ($data->about_framwork_image4) {
            $image = $data->about_framwork_image4;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'frameworkImage4' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->about_framwork_image4 = $imageName;
        }
        if ($data->about_framwork_image5) {
            $image = $data->about_framwork_image5;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'frameworkImage5' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->about_framwork_image5 = $imageName;
        }


        $content->about_framwork_image_text1 = $data->about_framwork_image_text1;
        $content->about_framwork_image_text2 = $data->about_framwork_image_text2;
        $content->about_framwork_image_text3 = $data->about_framwork_image_text3;
        $content->about_framwork_image_text4 = $data->about_framwork_image_text4;
        $content->about_framwork_image_text5 = $data->about_framwork_image_text5;
        $content->about_oframework_title = $data->about_oframework_title;

        if ($data->about_oframwork_image) {
            $image = $data->about_oframwork_image;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'oframeworkImage' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->about_oframwork_image = $imageName;
        }


        $content->about_oframework_short_details = $data->about_oframework_short_details;
        $content->about_client_title = $data->about_client_title;
        $content->about_values_title = $data->about_values_title;
        $content->about_app_title = $data->about_app_title;
        $content->about_app_short_details = $data->about_app_short_details;
        $content->about_app_btn_text = $data->about_app_btn_text;
        $content->about_career_headline = $data->about_career_headline;
        $content->about_career_title = $data->about_career_title;
        $content->about_career_short_details = $data->about_career_short_details;
        $content->about_career_btn_text = $data->about_career_btn_text;
        $content->team_title = $data->team_title;
        $content->team_career_headline = $data->team_career_headline;
        $content->team_career_title = $data->team_career_title;
        $content->team_career_short_details = $data->team_career_short_details;
        $content->team_career_btn_text = $data->team_career_btn_text;

        if ($data->team_career_image) {
            $image = $data->team_career_image;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'teamCareerImage' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            } else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
            $imageName  =  $dir . '/' . $imageName;
            $content->team_career_image = $imageName;
        }
        $content->team_single_footer_title = $data->team_single_footer_title;
        $content->service_sub_service_title = $data->service_sub_service_title;
        $content->work_title = $data->work_title;
        $content->work_filter_text = $data->work_filter_text;
        $content->work_search_text = $data->work_search_text;
        $content->career_title = $data->career_title;
        $content->career_join_text = $data->career_join_text;
        $content->career_resume_text = $data->career_resume_text;
        $content->career_resume_short_details = $data->career_resume_short_details;
        $content->article_title = $data->article_title;
        $content->article_search_text = $data->article_search_text;
        $content->contact_title = $data->contact_title;
        $content->contact_form_title = $data->contact_form_title;
        $content->contact_form_btn_text = $data->contact_form_btn_text;
        $content->footer_subscribe_text = $data->footer_subscribe_text;

        $content->save();

        return back();
    }
}
