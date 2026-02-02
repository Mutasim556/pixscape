<!DOCTYPE html><!-- Last Published: Wed Jan 21 2026 00:34:30 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.archipelago.com.au" data-wf-page="6543a9053fac558af9585fb1"
    data-wf-site="65249822a54c89915817034b" data-wf-collection="6543a9053fac558af9585feb"
    data-wf-item-slug="the-mill-at-moreton-bay">
@php
    $logo = \App\Models\Admin\Logo::first();
@endphp

<head>
    <meta charset="utf-8" />
    <title>Pixscape - where tomorrows cities are engineered</title>
    <meta content="Pixscape - where tomorrows cities are engineered" name="description" />
    <meta content="Pixscape - where tomorrows cities are engineered" property="og:title" />
    <meta content="Pixscape - where tomorrows cities are engineered" property="og:description" />
    <meta content="{{ asset($logo->main_site_icon) }}" property="og:image" />
    <meta content="Pixscape - where tomorrows cities are engineered" property="twitter:title" />
    <meta content="Pixscape - where tomorrows cities are engineered" property="twitter:description" />
    <meta content="{{ asset($logo->main_site_icon) }}" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="{{ asset('public/pixscape/css/style.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://use.typekit.net/qns3mjk.js" type="text/javascript"></script>
    <script type="text/javascript">
        try {
            Typekit.load();
        } catch (e) {}
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="{{ asset($logo->main_site_icon) }}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset($logo->main_site_icon) }}" rel="apple-touch-icon" />
    <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script>
    <link rel="preconnect" href="https://d25vfild7rvz0k.cloudfront.net" crossorigin />
    <link rel="dns-prefetch" href="https://d25vfild7rvz0k.cloudfront.net" />

    <style>
        /* Page wrapper opacity */
        .page-wrapper {
            opacity: 0;
            animation: pageWrapperFadeIn 1000ms linear forwards;
        }

        .page-wrapper.has-preloader {
            transition-duration: 250ms;
            animation-duration: 250ms;
        }

        .page-wrapper.has-preloader .preloader_component {
            display: block;
        }

        /*.page-wrapper.has-preloader .preloader_mid-line,
  .page-wrapper.has-preloader .home-hero_logo-mid {
  width: 0px;
  }*/

        @keyframes pageWrapperFadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        /* Lenis scroll smoothing */
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }

        /* Hide */
        .hide {
            display: none !important;
        }

        /* Show loader */
        .loader_mask {
            display: flex;
        }

        /* Split text */
        [text-split] {
            opacity: 0;
        }

        html.w-editor [text-split] {
            opacity: 1;
        }

        .line {
            overflow: hidden;
            padding-bottom: 0.1em;
            margin-bottom: -0.1em;
            transform-origin: bottom;
        }
    </style>

    <!-- <script src="http://localhost:3000/entry.js"></script> -->
    <script src="https://d25vfild7rvz0k.cloudfront.net/archipelago-webflow-site/entry.js"></script>

    <script>
        window.JS_SCRIPTS.push({
            'src': 'global.js',
            'defer': false,
        });
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WGX68N5X');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <div class="page-wrapper">
        <div class="cursor">
            <div class="cursor_move">
                <div class="cursor_dot">
                    <div class="cursor_text">Open</div><img
                        src="https://cdn.prod.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                        loading="lazy" alt="" class="cursor_image" />
                </div>
            </div>
            <div class="cursor-smaller"></div>
        </div>
        <div class="global_styles">
            <style class="global-styles_site-css">
                body {
                    font-size: 1.1111111111vw
                }

                @media screen and (min-width: 2650px) {
                    body {
                        font-size: 29.4444444444px
                    }
                }

                @media screen and (max-width: 991px) {
                    body {
                        font-size: 1em
                    }
                }

                body,
                a,
                label,
                .w-form-label,
                input[type=checkbox],
                input[type=radio] {
                    cursor: none
                }

                .w-input,
                .w-select {
                    font-size: inherit
                }

                .container {
                    max-width: 2650px
                }

                .page_wrapper {
                    overflow: clip
                }

                a {
                    color: inherit
                }

                @media(pointer: fine) {
                    body:hover .cursor {
                        opacity: 1
                    }
                }

                .cursor {
                    pointer-events: none
                }

                [hide-scrollbar] {
                    scrollbar-width: none
                }

                [hide-scrollbar]::-webkit-scrollbar {
                    display: none
                }
            </style>
            <style class="global-styles_components-css">
                .preloader_component[data-show-in-designer=false] {
                    display: none
                }

                .hero_logo-mid.is-shrunk {
                    width: 0px !important
                }

                .home-hero_featured-project_item:not(:first-child, .show) {
                    display: none
                }

                .intro_heading {
                    font-family: inherit;
                    line-height: inherit
                }

                .marquee {
                    transform: translate3d(0, 0, 0)
                }

                .cms-marquee_row,
                .cms-marquee_list {
                    width: fit-content
                }

                .cms-marquee_link .dot[data-dot-color=orange] {
                    background-color: var(--swatch--orange)
                }

                @media screen and (min-width: 992px) {
                    .projects_collection-mid-heading-wrapper {
                        grid-column: span 2
                    }
                }

                .project_info-discipline-item:not(:last-child) p:after {
                    content: attr(data-seperator);
                    margin-right: .5ch
                }

                .team_collection-list .ratio_img.is-team-photo-hover+.ratio_img.is-team-photo-main:hover {
                    opacity: 0
                }

                .link-reveal_component {
                    --transition-timer: 300ms
                }

                .link-reveal_component .link-reveal_fill {
                    transition-delay: var(--transition-timer);
                    pointer-events: none
                }

                .link-reveal_component .track-text {
                    transition-delay: 0
                }

                .link-reveal_component .link-reveal_track {
                    animation: marquee var(--marquee-speed, 15s) infinite linear;
                    animation-delay: calc(var(--transition-timer)*1.5);
                    animation-play-state: paused
                }

                .link-reveal_component:hover .link-reveal_fill {
                    transition-delay: 0
                }

                .link-reveal_component:hover .link-reveal_fill {
                    opacity: 100%
                }

                .link-reveal_component:hover .track-text {
                    transform: translateY(0%);
                    transition-delay: var(--transition-timer)
                }

                .link-reveal_component:hover .link-reveal_track {
                    animation-play-state: running
                }

                .cta_marquee {
                    width: max-content;
                    animation: marquee var(--marquee-speed, 15s) infinite linear
                }

                .clients_marquee_row {
                    width: max-content;
                    animation: marquee 120s infinite linear
                }

                .clients_marquee_gradient {
                    pointer-events: none
                }

                @keyframes marquee {
                    from {
                        transform: translateX(0%)
                    }

                    to {
                        transform: translateX(calc(-50% - 1em))
                    }
                }

                .filter_dropdown {
                    width: calc(100% + 2em)
                }

                .filter_dropdown.is-open .filter_dropdown_underline {
                    width: 100%
                }

                .filter_dropdown.is-open .accordion_minus.is-vertical {
                    transform: rotate(0deg)
                }

                .projects-list_grid {
                    grid-template-columns: [full-width-start] 5em [col1-start] minmax(0, 1fr) [col1-end col2-start] minmax(0, 1fr) [col2-end] 5em [full-width-end]
                }

                @media screen and (max-width: 991px) {
                    .projects-list_grid {
                        grid-template-columns: [full-width-start col1-start] minmax(0, 1fr) [col1-end col2-start] minmax(0, 1fr) [col2-end full-width-end]
                    }
                }

                @media screen and (max-width: 767px) {
                    .projects-list_grid {
                        grid-template-columns: [full-width-start col1-start col2-start] minmax(0, 1fr) [col1-end col2-end full-width-end]
                    }
                }

                .projects-list_item:nth-child(3n+1) {
                    grid-column: col1
                }

                .projects-list_item:nth-child(3n+2) {
                    grid-column: col2
                }

                .projects-list_item:nth-child(3n+3) {
                    grid-column: full-width
                }

                .projects-list_item:nth-child(3n+1) .img,
                .projects-list_item:nth-child(3n+2) .img {
                    aspect-ratio: 2/3
                }

                .projects-list_item:nth-child(3n+3) .img {
                    aspect-ratio: 16/9
                }

                @media screen and (max-width: 767px) {
                    .projects-list_item:nth-child(n) img.img {
                        aspect-ratio: 16/9
                    }
                }

                .nav-logo-link {
                    display: block;
                }

                .nav_logo-a {
                    width: 260px !important;
                    height: 130px !important;
                    overflow: hidden;
                }

                /* Image covers container */
                .nav_logo-a img {
                    width: 100%;
                    height: 100% !important;
                    /* object-fit: cover;
                    display: block; */
                    /* margin-left: -400px !important; */
                }

                @media (max-width: 768px) {
                    .nav_logo-a {
                        width: 260px !important;
                        height: 90px !important;
                        /* margin-left: 100px !important; */
                    }
                }
            </style>
        </div>
        @php
            $logo = \App\Models\Admin\Logo::first();
            $aboutus = \App\Models\Admin\AboutUs::first();
        @endphp
        @include('frontend.pages.shared.nav')
        <div class="page-css w-embed">
            <style>
                /* Hide accordion wrap if no accordions are to be shown */
                @supports (selector(:has(.accordion_condition))) {
                    .accordion_wrap {
                        display: none;
                    }

                    .accordion_wrap:has(.accordion_condition:not(.w-condition-invisible)) {
                        display: block;
                    }
                }

                /* Show brisbane bold project link as button */
                .rich-text a[href="https://archipelago-interactive.com.au/"] {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: .375em .5em;
                    font-weight: 500;
                    margin-top: 2em;
                    border-bottom: 1px solid;
                    font-size: var(--font-size--p-medium);
                    letter-spacing: 0.04em;
                    width: 20em;
                    max-width: 100%;
                }

                .rich-text a[href="https://archipelago-interactive.com.au/"]::after {
                    content: url("data:image/svg+xml,%3Csvg width='100%25' style='' viewBox='0 0 23 17' fill='currentColor' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z' fill='currentColor'%3E%3C/path%3E%3C/svg%3E");
                    width: 1em;
                    transition: transform 0.25s ease;
                }

                .rich-text a[href="https://archipelago-interactive.com.au/"]:hover::after {
                    display: inline-block;
                    transform: translateX(5px);
                }

                .card-container {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 20px;
                }

                .card {
                    background: #fff;
                    border-radius: 10px;
                    overflow: hidden;
                    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease;
                }

                .card:hover {
                    transform: translateY(-6px);
                }

                .card-image {
                    position: relative;
                }

                .card-image img {
                    width: 100%;
                    height: 220px;
                    object-fit: cover;
                    display: block;
                }

                .card-title {
                    position: absolute;
                    bottom: 10px;
                    left: 10px;
                    right: 10px;
                    color: #fff;
                    background: rgba(0, 0, 0, 0.6);
                    padding: 8px 12px;
                    border-radius: 5px;
                    font-size: 18px;
                }

                .card-body {
                    padding: 15px;
                }

                .card-body p {
                    font-size: 14px;
                    color: #555;
                    line-height: 1.5;
                }

                .card-container {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 20px;
                }

                @media (max-width: 992px) {
                    .card-container {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 576px) {
                    .card-container {
                        grid-template-columns: 1fr;
                    }
                }

                .card-link {
                    display: block;
                    text-decoration: none;
                    color: inherit;
                }

                .card-link:hover .card {
                    transform: translateY(-6px);
                }
            </style>
        </div>
        <div class="page-main">
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div no-gradient="" class="page_no-gradient"></div>
                        <div class="section-padding is-5em is-project-top">
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
                                        <div class="page_breadcrumb-text">/</div><a href="#"
                                            class="page_breadcrumb-text">Services</a>
                                        <div class="page_breadcrumb-text">/</div><a href="#"
                                            class="page_breadcrumb-text">{{ $service->type }}</a>
                                        <div class="page_breadcrumb-text">/</div><a href="#" aria-current="page"
                                            class="page_breadcrumb-text w--current">{{ $service->service_name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="cta_wrap">
                        <div class="cta_marquee"><a href="#" class="cta_marquee-content w-inline-block">

                                <div class="cta_marquee-text h-xl">{{ $service->service_name }}
                                </div>
                                <div class="dot is-light"></div>
                                <div class="cta_marquee-text h-xl">{{ $service->service_name }}
                                </div>
                                <div class="dot is-light"></div>
                                <div class="cta_marquee-text h-xl">{{ $service->service_name }}
                                </div>
                                <div class="dot is-light"></div>
                                <div class="cta_marquee-text h-xl">{{ $service->service_name }}
                                </div>
                                <div class="dot is-light"></div>
                                <div class="cta_marquee-text h-xl">{{ $service->service_name }}
                                </div>
                                <div class="dot is-light"></div>
                            </a></div>
                    </div>
                </div>
                <div class="img_overflow is-cta"><img loading="lazy" src="{{ asset($service->service_image) }}"
                        alt="" sizes="100vw" srcset="{{ asset($service->service_image) }}"
                        class="cta_img" /></div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-project-info">
                            <div class="project_layout">
                                {{-- <div class="vertical_1-5em is-project">
                                    <div class="project_info">
                                        @php
                                            $options = json_decode($service->option_value);
                                        @endphp
                                        @foreach ($options as $option)
                                            <div class="project_info-row">
                                                <div class="project_info-row-label">
                                                    <div>{{ $option->option }}</div>
                                                </div>
                                                <p class="p-50">{{ $option->option_value }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="project_team-collection-wrapper w-dyn-list">
                                        <div role="list" class="project_team-collection-list w-dyn-items">
                                            @php
                                                $members = json_decode($project->team_members);
                                            @endphp
                                            @foreach ($members as $member)
                                                @php
                                                    $expMember = explode('-', $member);
                                                    $team = \App\Models\Admin\Team::where('id', $expMember[0])->first();
                                                @endphp
                                                <div role="listitem" class="project_team-collection-item w-dyn-item">
                                                    <a href="/team-member/daniel-cocker-287bb"
                                                        class="project_team-collection-link w-inline-block"><img
                                                            alt="" loading="lazy"
                                                            src="{{ asset($team->team_member_image) }}"
                                                            sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 938.9722290039062px"
                                                            srcset="{{ asset($team->team_member_image) }}"
                                                            class="project_team-img" />
                                                        <div class="vertical_0-125em">
                                                            <div>{{ $expMember[1] }}</div>
                                                            <div class="p-50">{{ $expMember[2] }}</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach


                                        </div>
                                    </div>
                                </div> --}}
                                <div class="vertical_3-75em is-project">
                                    <div class="project_content-top">
                                        <p class="page_sub-heading">{{ $service->service_name }}</p>
                                        <div class="rich-text is-project w-richtext">
                                            {!! $service->service_details !!}
                                        </div>
                                    </div>
                                    {{-- <div class="vertical_1-5em">
                                        <div class="accordion_wrap">
                                            @if ($project->challenges)
                                                <div class="accordion_condition">
                                                    <div class="accordion_item">
                                                        <div class="accordion_toggle">
                                                            <p class="accordion_heading">What were the challenges?</p>
                                                            <div class="accordion_icon">
                                                                <div class="accordion_minus is-vertical w-embed"><svg
                                                                        width="100%" style=""
                                                                        viewBox="0 0 12 2" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                            fill="currentColor" />
                                                                        <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                                <div class="accordion_minus w-embed"><svg
                                                                        width="100%" style=""
                                                                        viewBox="0 0 12 2" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                            fill="currentColor" />
                                                                        <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion_content">
                                                            <div class="accordion_content-padding">
                                                                <div class="rich-text w-richtext">
                                                                    {!! $project->challenges !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($project->solutions)
                                                <div class="accordion_condition">
                                                    <div class="accordion_item">
                                                        <div class="accordion_toggle">
                                                            <p class="accordion_heading">What were our solutions?</p>
                                                            <div class="accordion_icon">
                                                                <div class="accordion_minus is-vertical w-embed"><svg
                                                                        width="100%" style=""
                                                                        viewBox="0 0 12 2" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                            fill="currentColor" />
                                                                        <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                                <div class="accordion_minus w-embed"><svg
                                                                        width="100%" style=""
                                                                        viewBox="0 0 12 2" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                            fill="currentColor" />
                                                                        <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion_content">
                                                            <div class="accordion_content-padding">
                                                                <div class="rich-text w-richtext">
                                                                    {!! $project->solutions !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if ($project->values)
                                                <div class="accordion_condition">
                                                    <div class="accordion_item">
                                                        <div class="accordion_toggle">
                                                            <p class="accordion_heading">How did we add value?</p>
                                                            <div class="accordion_icon">
                                                                <div class="accordion_minus is-vertical w-embed"><svg
                                                                        width="100%" style=""
                                                                        viewBox="0 0 12 2" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                            fill="currentColor" />
                                                                        <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                                <div class="accordion_minus w-embed"><svg
                                                                        width="100%" style=""
                                                                        viewBox="0 0 12 2" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                            fill="currentColor" />
                                                                        <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                            fill="currentColor" />
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion_content">
                                                            <div class="accordion_content-padding">
                                                                <div class="rich-text w-richtext">
                                                                    {!! $project->values !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            @php
                $content = \App\Models\Admin\Content::first();
            @endphp
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-5em is-project-images">
                            <h3 style="text-align: center">{{ $content->service_sub_service_title }}</h3>
                            <div class="card-container">
                                @foreach ($service->subServices as $subservice)
                                    {{-- {{ route('subservice.show', $subservice->id) }} --}}
                                    <a href="{{ route('frontend.subServiceSingle', \Illuminate\Support\Str::slug($subservice->name)) }}?subserviceid={{ $subservice->id }}"
                                        class="card-link">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="{{ asset($subservice->image) }}" alt="Image">
                                                <h3 class="card-title">{{ $subservice->name }}</h3>
                                            </div>
                                            <div class="card-body">
                                                <p>{{ $subservice->short_details }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section data-cms-marquee-section="" class="section is-dark-tan">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="section-padding is-6-5em">
                        <div class="page-padding">
                            <h3 class="projects_sub-heading">See our other projects</h3>
                        </div>
                        <div class="cms-marquee_component has-open-link-cursor">
                            <div class="cms-marquee_row-wrapper">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/head-to-health-kids-nerang"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Head to Health Kids, Nerang
                                                    </div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/anambah-to-branxton-rsga-enquiry-by-design-ebd"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Anambah to Branxton RSGA Enquiry
                                                        by
                                                        Design (EbD)</div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/head-to-health-kids-nerang"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Head to Health Kids, Nerang
                                                    </div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/anambah-to-branxton-rsga-enquiry-by-design-ebd"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Anambah to Branxton RSGA Enquiry
                                                        by
                                                        Design (EbD)</div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cms-marquee_row-wrapper is-inverse">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/moreton-bay-indoor-sports-centre"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Moreton Bay Indoor Sports Centre
                                                    </div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/caboolture-snakes-clubhouse"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Caboolture Snakes Clubhouse
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/moreton-bay-indoor-sports-centre"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Moreton Bay Indoor Sports Centre
                                                    </div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/caboolture-snakes-clubhouse"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Caboolture Snakes Clubhouse
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cms-marquee_row-wrapper">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/caloundra-state-high-school-master-plan"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Caloundra State High School
                                                        Master Plan
                                                    </div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/pomona-place-pilot"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Pomona Place Plan Pilot</div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/caloundra-state-high-school-master-plan"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Caloundra State High School
                                                        Master Plan
                                                    </div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/pomona-place-pilot"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Pomona Place Plan Pilot</div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cms-marquee_row-wrapper is-inverse">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/carseldine-social-affordable-housing"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Carseldine Social &amp;
                                                        Affordable
                                                        Housing</div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/scarborough-street"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Scarborough Street</div>
                                                </a></div>
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/carseldine-social-affordable-housing"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Carseldine Social &amp;
                                                        Affordable
                                                        Housing</div>
                                                </a></div>
                                            <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                    href="/project/scarborough-street"
                                                    class="cms-marquee_link w-inline-block">
                                                    <div data-dot-color="orange" class="dot"></div>
                                                    <div class="cms-marquee_text h-xl">Scarborough Street</div>
                                                </a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
        @include('frontend.pages.shared.footer')
    </div>


    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65249822a54c89915817034b"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.prod.website-files.com/65249822a54c89915817034b/js/webflow.schunk.36b8fb49256177c8.js"
        type="text/javascript" integrity="sha384-4abIlA5/v7XaW1HMXKBgnUuhnjBYJ/Z9C1OSg4OhmVw9O3QeHJ/qJqFBERCDPv7G"
        crossorigin="anonymous"></script>
    <script src="https://cdn.prod.website-files.com/65249822a54c89915817034b/js/webflow.a1efb5ce.2c11213f8d3c734f.js"
        type="text/javascript" integrity="sha384-XbiTwasTo6b0lAXOMhRAUaAyUS3a/VzAWgCjvoVaz1cOPtjcHBYHMlJjrM5B/Etc"
        crossorigin="anonymous"></script><!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WGX68N5X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script>
        window.JS_SCRIPTS.push({
            'src': 'collections/project.js'
        });
    </script>
</body>

</html>
