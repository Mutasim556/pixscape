@extends('backend.shared.layouts.admin')
@push('title')
    {{ __('admin_local.Front-end Conhtents') }}
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/css/custom.css') }}">
@endpush
@push('page_css')
    <style>
        .loader-box {
            height: auto;
            padding: 10px 0px;
        }

        .loader-box .loader-35:after {
            height: 20px;
            width: 10px;
        }

        .loader-box .loader-35:before {
            width: 20px;
            height: 10px;
        }
    </style>
@endpush
@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 mx-auto">
                <div class="card">
                    <div class="card-header py-3" style="border-bottom: 2px dashed gray">
                        <h3 class="card-title mb-0 text-center">{{ __('admin_local.Front-end Contents') }}</h3>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.settings.contentUpdate',1) }}" enctype="multipart/form-data" method="POST">
                            @method('PUT')
                            @csrf
                            <h4 class="text-center"><u>Home Page</u></h4>
                            <div class="row">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Counter Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_counter_title" id="" cols="20" rows="2">{{ $content->home_counter_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Counter Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_counter_short_details" id="" cols="20" rows="2">{{ $content->home_counter_short_details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Counter Button Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_counter_btn_text" id="" cols="20" rows="2">{{ $content->home_counter_btn_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Work Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_work_title" id="" cols="20" rows="2">{{ $content->home_work_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Work Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_work_short_details" id="" cols="20" rows="2">{{ $content->home_work_short_details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Work Button Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_work_btn_text" id="" cols="20" rows="2">{{ $content->home_work_btn_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Current Work Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_work_current_text" id="" cols="20" rows="2">{{ $content->home_work_current_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Work Contact Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="home_work_contact_text" id="" cols="20" rows="2">{{ $content->home_work_contact_text }}</textarea>
                                </div>
                            </div>
                             <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Home Page Work Contact Image') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="home_work_contact_image" id="home_work_contact_image" onchange="document.getElementById('prev_home_work_contact_image').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->home_work_contact_image) }}" id="prev_home_work_contact_image" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>About Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_title" id="" cols="20" rows="2">{{ $content->about_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Service Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_service_title" id="" cols="20" rows="2">{{ $content->about_service_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Service Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_service_short_details" id="" cols="20" rows="2">{{ $content->about_service_short_details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_title" id="" cols="20" rows="2">{{ $content->about_framwork_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Details 1') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_details1" id="" cols="20" rows="2">{{ $content->about_framwork_details1 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Details 2') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_details2" id="" cols="20" rows="2">{{ $content->about_framwork_details2 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Details 3') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_details3" id="" cols="20" rows="2">{{ $content->about_framwork_details3 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Details 4') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_details4" id="" cols="20" rows="2">{{ $content->about_framwork_details4 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image 1') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="about_framwork_image1" id="about_framwork_image1" onchange="document.getElementById('prev_about_framwork_image1').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->about_framwork_image1) }}" id="prev_about_framwork_image1" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image Text 1') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_image_text1" id="" cols="20" rows="2">{{ $content->about_framwork_image_text1 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image 2') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="about_framwork_image2" id="about_framwork_image2" onchange="document.getElementById('prev_about_framwork_image2').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->about_framwork_image2) }}" id="prev_about_framwork_image2" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image Text 2') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_image_text2" id="" cols="20" rows="2">{{ $content->about_framwork_image_text2 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image 3') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="about_framwork_image3" id="about_framwork_image3" onchange="document.getElementById('prev_about_framwork_image3').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->about_framwork_image3) }}" id="prev_about_framwork_image3" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image Text 3') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_image_text3" id="" cols="20" rows="2">{{ $content->about_framwork_image_text3 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image 4') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="about_framwork_image4" id="about_framwork_image4" onchange="document.getElementById('prev_about_framwork_image4').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->about_framwork_image4) }}" id="prev_about_framwork_image4" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image Text 4') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_image_text4" id="" cols="20" rows="2">{{ $content->about_framwork_image_text4 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image 5') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="about_framwork_image5" id="about_framwork_image5" onchange="document.getElementById('prev_about_framwork_image5').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->about_framwork_image5) }}" id="prev_about_framwork_image5" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Framework Image Text 5') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_framwork_image_text5" id="" cols="20" rows="2">{{ $content->about_framwork_image_text5 }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Our Framework Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_oframework_title" id="" cols="20" rows="2">{{ $content->about_oframework_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Our Framework Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_oframework_short_details" id="" cols="20" rows="2">{{ $content->about_oframework_short_details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Our Framework Image') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="about_oframwork_image" id="about_oframwork_image" onchange="document.getElementById('prev_about_oframwork_image').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->about_oframwork_image) }}" id="prev_about_oframwork_image" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Client Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_client_title" id="" cols="20" rows="2">{{ $content->about_client_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Values Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_values_title" id="" cols="20" rows="2">{{ $content->about_values_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Appoinment Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_app_title" id="" cols="20" rows="2">{{ $content->about_app_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Appoinment Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_app_short_details" id="" cols="20" rows="2">{{ $content->about_app_short_details }}</textarea>
                                </div>
                            </div>
                             <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Appoinment Button Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_app_btn_text" id="" cols="20" rows="2">{{ $content->about_app_btn_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Career Headline') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_career_headline" id="" cols="20" rows="2">{{ $content->about_career_headline }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Career Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_career_title" id="" cols="20" rows="2">{{ $content->about_career_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Career Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_career_short_details" id="" cols="20" rows="2">{{ $content->about_career_short_details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.About Page Career Button Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="about_career_btn_text" id="" cols="20" rows="2">{{ $content->about_career_btn_text }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Team Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="team_title" id="" cols="20" rows="2">{{ $content->team_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Career Headline') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="team_career_headline" id="" cols="20" rows="2">{{ $content->team_career_headline }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Career Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="team_career_title" id="" cols="20" rows="2">{{ $content->team_career_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Career Image') }}</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="file" class="form-control" name="team_career_image" id="team_career_image" onchange="document.getElementById('prev_team_career_image').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="col-md-4">
                                    <img src="{{ asset($content->team_career_image) }}" id="prev_team_career_image" style="float: right;width:100%" alt="">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Career Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="team_career_short_details" id="" cols="20" rows="2">{{ $content->team_career_short_details }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Career Button Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="team_career_btn_text" id="" cols="20" rows="2">{{ $content->team_career_btn_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Team Page Single Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="team_single_footer_title" id="" cols="20" rows="2">{{ $content->team_single_footer_title }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Service Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Service Sub Service Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="service_sub_service_title" id="" cols="20" rows="2">{{ $content->service_sub_service_title }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Work Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Work Page Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="work_title" id="" cols="20" rows="2">{{ $content->work_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Work Page Filter Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="work_filter_text" id="" cols="20" rows="2">{{ $content->work_filter_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Work Page Search Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="work_search_text" id="" cols="20" rows="2">{{ $content->work_search_text }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Career Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Career Page Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="career_title" id="" cols="20" rows="2">{{ $content->career_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Career Page Join Us Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="career_join_text" id="" cols="20" rows="2">{{ $content->career_join_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Career Page Resume Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="career_resume_text" id="" cols="20" rows="2">{{ $content->career_resume_text }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Career Page Resume Short Details') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="career_resume_short_details" id="" cols="20" rows="2">{{ $content->career_resume_short_details }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Article Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Article Page Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="article_title" id="" cols="20" rows="2">{{ $content->article_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Article Page Search Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="article_search_text" id="" cols="20" rows="2">{{ $content->article_search_text }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Contact Page</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Contact Page Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="contact_title" id="" cols="20" rows="2">{{ $content->contact_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Contact Page Form Title') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="contact_form_title" id="" cols="20" rows="2">{{ $content->contact_form_title }}</textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Contact Page Form Button Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="contact_form_btn_text" id="" cols="20" rows="2">{{ $content->contact_form_btn_text }}</textarea>
                                </div>
                            </div>
                            <h4 class="text-center my-3"><u>Main Site Footer</u></h4>
                            <div class="row mt-2">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Footer Subscribe Text') }}</label>
                                </div>
                                <div class="col-md-7">
                                    <textarea class="form-control" name="footer_subscribe_text" id="" cols="20" rows="2">{{ $content->footer_subscribe_text }}</textarea>
                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-5 py-2">
                                    <label for="">{{ __('admin_local.Admin Panel Mobile Logo') }} (193px X 46px PNG)</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="file" class="form-control" name="admin_panel_mobile_logo" id="admin_panel_mobile_logo" value="">
                                </div>
                                <div class="col-md-3">
                                    <img src="" style="float: right;" alt="" height="46px" width="193px">
                                </div>
                            </div> --}}

                            <div class="row mt-3">
                                <div class="col-md-10 py-2">

                                </div>
                                <div class="col-md-2">
                                    <button type="submit" style="float:right" class="btn btn-primary">{{ __('admin_local.Update') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- Row -->
    </div>
@endsection
@push('js')
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/assets/js/select2/select2.full.min.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/assets/js/select2/select2-custom.js') }}"></script> --}}
    <script>
        $('[data-toggle="switchery"]').each(function(idx, obj) {
            new Switchery($(this)[0], $(this).data());
        });
        $('.js-example-basic-single').select2({
            dropdownParent: $('#add-slider-modal')
        });
        $('.js-example-basic-single1').select2({
            dropdownParent: $('#edit-slider-modal')
        });
        $(document).on('select2:open', () => {
            document.querySelector('.select2-search__field').focus();
        });
        var oTable = $("#basic-1").DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "{{ __('admin_local.No size available in table') }}",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "infoEmpty": "Showing 0 to 0 of 0 entries",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Show _MENU_ entries",
                "loadingRecords": "Loading...",
                "processing": "",
                "search": "Search:",
                "zeroRecords": "No matching records found",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "Next",
                    "previous": "Previous"
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });
        var submit_btn_after = `{{ __('admin_local.Submitting') }}`;
        var submit_btn_before = `{{ __('admin_local.Submit') }}`;
        var no_permission_mgs = `{{ __('admin_local.No Permission') }}`;
        var base_url = '{{ URL::to("/") }}';
        var asset_url = '{{ URL::to("/")."/".env("ASSET_DIRECTORY")."/" }}';


        var delete_swal_title = `{{ __('admin_local.Are you sure?') }}`;
        var delete_swal_text =
            `{{ __('admin_local.Once deleted, you will not be able to recover this size data') }}`;
        var delete_swal_cancel_text = `{{ __('admin_local.Delete request canceld successfully') }}`;
        var no_file = `{{ __('admin_local.No file') }}`;
    </script>
    <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'admin/custom/settings/slider.js') }}"></script>
    {{-- <script src="{{ asset(env('ASSET_DIRECTORY').'/'.'inventory/custom/user/user_list.js') }}"></script> --}}
@endpush
