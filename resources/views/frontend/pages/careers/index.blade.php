@extends('frontend.pages.shared.app')
@php
    $logo = \App\Models\Admin\Logo::first();
    $aboutus = \App\Models\Admin\AboutUs::first();
    $contact = \App\Models\Admin\Contact::first();
@endphp
@php
    $content = \App\Models\Admin\Content::first();
@endphp
@push('css')
    <style>
        .app-wrapper {
            max-width: 420px;
            margin: 80px auto;
        }

        .app-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .field-group {
            margin-bottom: 16px;
        }

        .field-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #212529;
        }

        .text-input,
        .file-input {
            width: 100%;
            padding: 10px 12px;
            font-size: 14px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            transition: border-color .15s ease, box-shadow .15s ease;
        }

        .text-input:focus,
        .file-input:focus {
            outline: none;
            border-color: #0d6efd;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, .25);
        }

        .helper-text {
            font-size: 12px;
            color: #6c757d;
            margin-top: 4px;
        }

        .primary-btn {
            width: 100%;
            padding: 10px;
            font-size: 15px;
            font-weight: 500;
            color: #ffffff;
            background-color: #891e14;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color .15s ease;
        }

        .primary-btn:hover {
            background-color: #651912;
        }
    </style>
@endpush
@section('content')
    <div class="page-main">
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div no-gradient="" class="page_no-gradient"></div>
                    <div class="section-padding is-5em is-page">
                        <div class="page_top">
                            <div class="page_heading-wrap">
                                <div class="page_heading-logo"><a href="/" class="w-inline-block">
                                        <div class="page_logo w-embed">
                                            <h1 style="font-weight: 500;">
                                                {{ $aboutus ? $aboutus->company_name : '' }}
                                            </h1>
                                        </div>
                                    </a></div>
                                <div class="page_breadcrumb-wrap"><a href="{{ url('/') }}"
                                        class="page_breadcrumb-text">Home</a>
                                    <div class="page_breadcrumb-text">/</div><a href="/people/careers" aria-current="page"
                                        class="page_breadcrumb-text w--current">{{ $content->career_title }}</a>
                                </div>
                            </div>
                            <h1 class="h-xl">{{ $content->career_title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="about_hero">
                        <p class="page_sub-heading is-center">{{ $career->title }}</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-opportunity">
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1" style="text-align: center;">{{ $content->career_join_text }}</h2>
                            </div>
                        </div>
                        <div class="section-padding is-5em">
                            <div class="section_middle">
                                <div data-animate="" class="vertical_0-5em">
                                    {!! $career->details !!}
                                </div>
                            </div>
                        </div>
                        <div class="section-padding is-5em">
                            <div class="section_middle">
                                <div data-animate="" class="vertical_0-5em">
                                    <div class="img_overflow"><img src="{{ $career->image }}" loading="lazy" alt=""
                                            class="img is-wide" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section is-dark-tan">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-7-5em is-careers">
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1" style="text-align: center">{{ $content->career_resume_text }}</h2>
                            </div>
                            <div class="section_content-grid is-2" id="applicant_form">
                                <div class="">
                                    <p class="p-large">{{ $content->career_resume_short_details }}</p>
                                </div>
                                <div>
                                    @if (session()->has('success'))
                                        <div
                                            style="width: 100%;padding:10px; background:#3f8639;text-align: center;color:white">
                                            <span style="text-align: center">{{ session()->get('success') }}</span>
                                        </div>
                                    @endif
                                    <form method="POST" enctype="multipart/form-data"
                                        action="{{ route('frontend.postResume') }}">
                                        @csrf
                                        <div class="field-group">
                                            <label class="field-label">Applicant Name *</label>
                                            <input type="text" class="text-input" name="applicant_name"
                                                placeholder="Name" required>
                                            @error('applicant_name')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror

                                        </div>
                                        <div class="field-group">
                                            <label class="field-label">Email address *</label>
                                            <input type="email" class="text-input" name="applicant_email"
                                                placeholder="name@example.com" required>
                                            @error('applicant_email')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="field-group">
                                            <label class="field-label">Post *</label>
                                            <select class="text-input" name="job_post" required>
                                                <option value="" selected disabled>Select Please</option>
                                                @php
                                                    $career = \App\Models\Admin\Career::first();
                                                @endphp
                                                @foreach (explode('|',$career->job_post) as $post)
                                                        <option value="{{ $post }}">{{ $post }}</option>
                                                @endforeach
                                                
                                            </select>
                                            @error('job_post')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="field-group">
                                            <label class="field-label">Upload PDF *</label>
                                            <input type="file" name="applicant_resume" class="file-input"
                                                accept="application/pdf" required>
                                            @error('applicant_resume')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button type="submit" class="primary-btn">
                                            Submit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
