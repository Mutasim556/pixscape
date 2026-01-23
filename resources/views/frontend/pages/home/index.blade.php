@extends('frontend.pages.shared.app')
@php
    $logo = \App\Models\Admin\Logo::first();
@endphp
@section('content')
    <main class="page-main">
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div data-light-nav="" no-gradient="" class="home-hero_wrap">
                    <div class="page-padding is-loader">
                        <div class="home-hero_logo-wrap">
                            <div class="home-hero-logo">
                                <div class="preloader_logo-a w-embed">
                                    <img src="{{ asset($logo ? $logo->main_site_header_logo : '') }}" alt="Logo"
                                        style="width: auto; height: 100%;" />
                                </div>
                                <div class="home-hero_logo-mid">
                                </div>
                                <div class="preloader_logo-dot w-embed">

                                </div>
                            </div>
                        </div>
                    </div><a data-lenis-toggle="" href="#" class="nav_link scroll">Projects</a>
                </div>
            </div>
            <div class="home-hero_featured-project_component w-dyn-list">
                <div role="list" class="w-dyn-items">
                    @php
                        $slider = App\Models\Admin\HomepageSilder::where([['status', 1], ['delete', 0]])
                            ->inRandomOrder()
                            ->first();
                    @endphp
                    <div role="listitem" class="home-hero_featured-project_item w-dyn-item">
                        <div class="img_overflow is-full"><img alt=""
                                src="{{ asset('public/' . $slider->slider_image) }}" sizes="100vw" class="full-img" />
                        </div>
                        <div class="home-hero_indicators page-padding">
                            <div class="hero_text" style="color:white">Scroll Down</div>
                            <div class="hero_text is-mobile-centered w-embed"><a href="/project/halcyon-blu"
                                    style="color:white">{{ $slider->slider_title }}</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        @php
            $video = \App\Models\Admin\HomepageVideo::first();
        @endphp
        <section class="section is-dark-tan">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="intro_wrap">
                        <div class="intro_sticky">
                            <div scrub-each-word="" text-split="" class="intro_paragraph">
                                {{-- <h1 class="intro_text">Archipelago is a distinguished Australian city-making
                                        practice. </h1> --}}
                                <p class="intro_text">{{ $video ? $video->description : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="reveal_section">
            <div class="reveal_sticky">
                <div class="reveal_path"><img src="{{ asset('public/back.svg') }}" loading="lazy" alt=""
                        class="reveal_logo-img" /></div>
                <div class="reveal_wrap">
                    <div class="reveal_logomark-wrap">
                        <img src="{{ asset($logo ? $logo->main_site_header_logo : '') }}" loading="lazy" alt=""
                            class="reveal_logomark" />
                    </div>
                </div>
                <div class="reveal_embed-wrap">
                    <div class="reveal_embed-contain">
                        <div class="reveal_embed w-embed w-iframe">
                            <div style="padding:56.25% 0 0 0;position:relative;">
                                <iframe
                                    src="https://player.vimeo.com/video/{{ $video ? $video->video_link : '' }}?background=1"
                                    loading="lazy" style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                    frameborder="0" allow="autoplay; fullscreen" allowfullscreen>
                                </iframe>
                                {{--
                               <iframe src="https://player.vimeo.com/video/1154338273?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="1920" height="1080" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write; encrypted-media; web-share" referrerpolicy="strict-origin-when-cross-origin" title="WhatsApp Video 2026-01-14 at 7.39.54 PM"></iframe> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
            $expertise = \App\Models\Admin\DesignExpertise::first();
        @endphp
        <section class="section is-dark-tan">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-5em">
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1">Design Expertise</h2>
                            </div>
                            <div class="section_content-grid">
                                <div class="section_info-wrap">
                                    <p>{{ $expertise ? $expertise->short_description : '' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="section_middle">
                            <div class="about_content"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/652690e72bd83a63a1d3c2c3_archipelago-design-expertise.svg"
                                    loading="lazy" alt="" class="about_diagram" /></div>
                            <div class="about_content is-left-padding">
                                <p class="h5">{{ $expertise ? $expertise->title : '' }}</p>
                                <a href="/practice/about-us" class="button w-inline-block">
                                    <div class="button_label">{{ $expertise ? $expertise->button_text : '' }}</div>
                                    <div class="button_arrow w-embed"><svg width="100%" style="" viewBox="0 0 23 17"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                fill="currentColor" />
                                        </svg></div>
                                </a>
                            </div>
                        </div>
                        <div class="section_bottom is-about">
                            @php
                                $projectTypes = \App\Models\Admin\ProjectType::where([
                                    ['status', 1],
                                    ['delete', 0],
                                ])->get();
                            @endphp
                            @foreach ($projectTypes as $projectType)
                                <a data-animate="" href="/projects?discipline=Architecture"
                                    class="about_card w-inline-block">
                                    <div class="img_overflow"><img src="{{ $projectType->image }}" loading="lazy"
                                            alt="" class="about_img" />
                                        <div class="about_card-label" style="color:white">{{ $projectType->title }}</div>
                                    </div>
                                    <p>{{ $projectType->short_description }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-light-nav="" class="section is-olive">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-5em">
                        <div class="section_top ">
                            <h2 class="h1">We&#x27;re City Making Design Leaders</h2>
                        </div>
                        <div class="section_middle">
                            <div class="section_content-grid">
                                <div class="section_info-wrap">
                                    <p>From health and knowledge precincts to club houses...</p>
                                    <a href="/practice/about-us" class="button is-light w-inline-block">
                                        <div class="button_label">Discover Our Process</div>
                                        <div class="button_arrow w-embed"><svg width="100%" style=""
                                                viewBox="0 0 23 17" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                    fill="currentColor" />
                                            </svg></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="section_bottom">
                            <div class="section_bottom is-call-out">
                                @php
                                    $counters = \App\Models\Admin\Counter::where([['delete', 0], ['status', 1]])->get();
                                @endphp
                                @foreach ($counters as $counter)
                                    <div id="w-node-_4b76f278-a6fe-147c-4a15-adc1cf470d1b-f9585fa4" class="call-out_wrap">
                                        <div id="w-node-_7a6add67-4f18-df75-9166-3e37a2566f49-f9585fa4"
                                            class="h-xl is-call-out"><span
                                                class="counter">{{ $counter->counter }}</span>+</div>
                                        <p id="w-node-_87801875-707b-373d-8432-4101b570e374-f9585fa4" class="call-out_p">
                                            {{ $counter->title }}
                                        </p>
                                        <div id="w-node-ad91baad-964f-256b-aa05-c068d794fc67-f9585fa4"
                                            class="call-out_illustration-contain"><img src="{{ $counter->image }}"
                                                loading="lazy" alt=""
                                                class="call-out_illustration is-workshops" /></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-5em">
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1">Featured Projects</h2>
                            </div>
                            <div class="section_content-grid">
                                <div class="section_info-wrap">
                                    <p>Pixscape&#x27;s portfolio of city making projects, from expansive urban
                                        renewal to intimate
                                        residential spaces, showcases our innovative and people-centric approach to
                                        city making.</p>
                                    <a href="/projects" class="button w-inline-block">
                                        <div class="button_label">View All Projects</div>
                                        <div class="button_arrow w-embed"><svg width="100%" style=""
                                                viewBox="0 0 23 17" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                    fill="currentColor" />
                                            </svg></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="projects-list_component">
                            <div class="projects-list_grid-wrapper w-dyn-list">
                                <div role="list" class="projects-list_grid w-dyn-items">
                                    @php
                                        $projects = \App\Models\Admin\Project::where([
                                            ['delete', 0],
                                            ['status', 1],
                                        ])->get();
                                    @endphp
                                    @foreach ($projects as $project)
                                        <div role="listitem" class="projects-list_item w-dyn-item">
                                            <a data-animate="" href="/project/the-mill-at-moreton-bay"
                                                class="vertical_0-5em w-inline-block">
                                                @php
                                                    $pimages = json_decode($project->images);
                                                @endphp
                                                <div class="img_overflow"><img src="{{ $pimages[0] }}" loading="lazy"
                                                        alt=""
                                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px"
                                                        srcset="{{ $pimages[0] }}" class="img" />
                                                    <div class="link-reveal_component">
                                                        <div class="link-reveal_fill-wrapper">
                                                            <div class="link-reveal_fill"></div>
                                                            <div class="link-reveal_marquee">
                                                                <div class="link-reveal_track">
                                                                    <p class="track-text h-l">{{ $project->title }}
                                                                    </p>
                                                                    <p class="track-text h-l">{{ $project->title }}
                                                                    </p>
                                                                    <p class="track-text h-l">
                                                                        {{ $project->title }}
                                                                    </p>
                                                                    <p class="track-text h-l">
                                                                        {{ $project->title }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>{{ $project->title }}</p>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div>
                                <div data-wf--block-button-group--position="center" class="button_group">
                                    <div class="display-contents">
                                        <div class="spacer-2"></div>
                                        <a href="/projects" class="button w-inline-block">
                                            <div class="button_label">View All Projects</div>
                                            <div class="button_arrow w-embed"><svg width="100%" style=""
                                                    viewBox="0 0 23 17" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                        fill="currentColor" />
                                                </svg></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section data-cms-marquee-section="" data-light-nav="" class="section is-olive">
            <div class="w-layout-blockcontainer container w-container">
                <div class="section-padding is-6-5em">
                    <div class="page-padding">
                        <h3 class="projects_sub-heading">What we&#x27;re currently working on</h3>
                    </div>
                    <div class="cms-marquee_component">
                        <div class="cms-marquee_row-wrapper is-no-hover-pause">
                            <div class="cms-marquee_row">
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Logan Gold Coast Faster Rail
                                                </div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Ipswich Hospital</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Logan Gold Coast Faster Rail
                                                </div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Ipswich Hospital</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-marquee_row-wrapper is-inverse is-no-hover-pause">
                            <div class="cms-marquee_row">
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Coomera Connector North and
                                                    South</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Future Medical Facility</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Coomera Connector North and
                                                    South</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Future Medical Facility</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-marquee_row-wrapper is-no-hover-pause">
                            <div class="cms-marquee_row">
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Yeronga Community Centre is
                                                    under construction</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Pomona Placemaking Pilot</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Yeronga Community Centre is
                                                    under construction</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Pomona Placemaking Pilot</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-marquee_row-wrapper is-inverse is-no-hover-pause">
                            <div class="cms-marquee_row">
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Halycon Blu</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Redlands Performing Arts Centre
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Halycon Blu</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Redlands Performing Arts Centre
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-marquee_row-wrapper is-no-hover-pause">
                            <div class="cms-marquee_row">
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Aura Central Urban Village</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Logan Shared Ring Road is under
                                                    construction</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-dyn-list">
                                    <div role="list" class="cms-marquee_list w-dyn-items">
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Aura Central Urban Village</div>
                                            </a>
                                        </div>
                                        <div role="listitem" class="cms-marquee_item w-dyn-item">
                                            <a href="#" class="cms-marquee_link w-inline-block">
                                                <div data-dot-color="light-tan" class="dot"></div>
                                                <div class="cms-marquee_text h-xl">Logan Shared Ring Road is under
                                                    construction</div>
                                            </a>
                                        </div>
                                    </div>
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
                    <div class="section-padding is-5em">
                        <div class="section_heading-wrap">
                            <h2 class="h1">Recent Articles</h2>
                        </div>
                        <div class="blog_collection-wrapper w-dyn-list">
                            <div role="list" class="blog_collection-list w-dyn-items">
                                @php
                                    $blogs = \App\Models\Admin\Blog::where([['status', 1], ['delete', 0]])->get();
                                @endphp
                                @foreach ($blogs as $blog)
                                    <div data-animate="" role="listitem" class="blog_collection-item w-dyn-item">
                                        <a href="/blog/victoria-park-a-vision-realised-a-legacy-secured"
                                            class="blog_link w-inline-block">
                                            <div class="img_overflow"><img alt="" loading="lazy"
                                                    src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop.webp"
                                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 727.0700073242188px, 939.0899658203125px"
                                                    srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop-p-800.webp 800w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop-p-1080.webp 1080w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop-p-1600.webp 1600w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop-p-2000.webp 2000w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/67e5f0a64fa2ffda85681fe6_BOLD_hero_01_stadium%20crop.webp 2500w"
                                                    class="blog_item-img" /></div>
                                            <div class="blog_card-content">
                                                <h3 class="blog_card-heading">{{ $blog->title }}</h3>
                                                <p class="blog_card-p">{!! \Illuminate\Support\Str::limit(strip_tags($blog->details), 200) !!}</p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="section_content-grid">
                            <div id="w-node-bc9b4950-63c8-df04-627c-835b2b42fc1b-f9585fa4" class="section_info-wrap">
                                <a href="/resources/articles" class="button w-inline-block">
                                    <div class="button_label">View All Articles</div>
                                    <div class="button_arrow w-embed"><svg width="100%" style=""
                                            viewBox="0 0 23 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                fill="currentColor" />
                                        </svg></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @php
            $teaminfo = \App\Models\Admin\TeamInfo::first();
        @endphp
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-5em">
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1">Team</h2>
                            </div>
                            <div class="section_content-grid">
                                <div class="section_info-wrap">
                                    <p>{{ $teaminfo ? $teaminfo->short_description : '' }}</p>
                                    <a href="/people/team" class="button w-inline-block">
                                        <div class="button_label">{{ $teaminfo ? $teaminfo->button_text : '' }}</div>
                                        <div class="button_arrow w-embed"><svg width="100%" style=""
                                                viewBox="0 0 23 17" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                    fill="currentColor" />
                                            </svg></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="section_bottom">
                            <div class="vertical_0-5em"><img src="{{ $teaminfo ? $teaminfo->team_image : '' }}"
                                    loading="lazy"
                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 727.989990234375px, 939.989990234375px"
                                    alt="" class="img_wide" />
                                <p>The Pixscape Team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-light-nav="" class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="cta_wrap">
                    <div class="cta_marquee">
                        <a href="/contact" class="cta_marquee-content w-inline-block">
                            <div class="cta_marquee-text h-xl">Contact Archipelago</div>
                            <div class="dot is-light"></div>
                            <div aria-hidden="true" class="cta_marquee-text h-xl">Contact Archipelago</div>
                            <div class="dot is-light"></div>
                            <div aria-hidden="true" class="cta_marquee-text h-xl">Contact Archipelago</div>
                            <div class="dot is-light"></div>
                            <div aria-hidden="true" class="cta_marquee-text h-xl">Contact Archipelago</div>
                            <div class="dot is-light"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="img_overflow is-cta"><img
                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6540b552a3e7657917ef0f73_Riverpoint%20Apartments%20452_1.webp"
                    loading="lazy" sizes="(max-width: 1920px) 100vw, 1920px"
                    srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/6540b552a3e7657917ef0f73_Riverpoint%20Apartments%20452_1-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/6540b552a3e7657917ef0f73_Riverpoint%20Apartments%20452_1-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/6540b552a3e7657917ef0f73_Riverpoint%20Apartments%20452_1-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/6540b552a3e7657917ef0f73_Riverpoint%20Apartments%20452_1-p-1600.webp 1600w, https://cdn.prod.website-files.com/65249822a54c89915817034b/6540b552a3e7657917ef0f73_Riverpoint%20Apartments%20452_1.webp 1920w"
                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture project" class="cta_img" />
            </div>
        </section>
    </main>
@endsection
