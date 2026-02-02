<!DOCTYPE html><!-- Last Published: Thu Jan 15 2026 03:09:54 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.archipelago.com.au" data-wf-page="6543a9053fac558af9585fac"
    data-wf-site="65249822a54c89915817034b">
@php
    $logo = \App\Models\Admin\Logo::first();
@endphp

<head>
    <meta charset="utf-8" />
    <title>About Pixscape - where tomorrows cities are engineered</title>
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
                                        <div class="page_breadcrumb-text">/</div><a href="#" aria-current="page"
                                            class="page_breadcrumb-text w--current">About Us</a>
                                    </div>
                                </div>
                                <h1 class="h-xl">About Us</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="about_hero">
                            <div class="career_vid">
                                <div class="career_vid-background"></div>
                                <div class="reveal_embed w-embed w-iframe">
                                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe
                                            src="https://player.vimeo.com/video/{{ $aboutus ? $aboutus->video_link : '' }}?background=1"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;"
                                            frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            <p class="page_sub-heading is-center">{{ $aboutus ? $aboutus->short_details : '' }}</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-10em is-about">
                            <div class="section_top is-5em">
                                <div class="section_heading-wrap">
                                    <h2 class="h1">Our Services</h2>
                                </div>
                                <div class="section_content-grid">
                                    <div class="section_info-wrap">
                                        <p>We always look at the bigger picture—how different services work together and
                                            support each other—which shows our strong understanding of industry needs,
                                            regulations, and opportunities. We believe creative work is interconnected,
                                            and our services and expertise are designed with that same mindset.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="section_middle is-accordian">
                                <div class="about_services-wrap"><img class="about_left-img"
                                        src="{{ asset('public/static_image/about_page_service.png') }}"
                                        alt="Pixscape&#x27;s Architecture, Urban Design, Landscape Architecture team"
                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 940px" loading="lazy"
                                        data-animate=""
                                        srcset="{{ asset('public/static_image/about_page_service.png') }}" />
                                </div>
                                <div class="about_services-wrap">
                                    @php
                                        $services = \App\Models\Admin\Service::where([['status', 1], ['delete', 0]])
                                            ->get()
                                            ->groupBy('type');
                                    @endphp
                                    @foreach ($services as $type => $allservice)
                                        <div class="vertical_1-5em">
                                            <div class="accordion_heading">{{ $type }}</div>
                                            <div class="accordion_wrap">
                                                @foreach ($allservice as $service)
                                                    <div class="accordion_item">
                                                        <div class="accordion_toggle">
                                                            <div>{{ $service->service_name }}</div>
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
                                                                    {!! $service->service_details !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-light-nav="" class="section is-olive">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-5em">
                            <div class="section_top is-right-padding">
                                <h2 class="h1">The PIXSCAPE Framework</h2>
                            </div>
                            <div class="section_middle is-framework">
                                <p id="w-node-cd87aaec-6c01-ac6f-6c96-4531983be464-f9585fac">We use creative ideas
                                    supported by research to reveal opportunities that aren’t always apparent at the
                                    beginning of a project, ensuring outcomes that create real and lasting change.
                                    <br><br>
                                    Our portfolio of work in master planning and urban development reveals a commitment
                                    to shaping cities through context-driven design. We realize the full potential of
                                    every site, creating public spaces and thoughtfully designed buildings that
                                    strengthen the unique identity of the neighborhoods we work in.
                                </p>
                                <p id="w-node-_59e720e2-a366-09ff-993e-12e52932f5ea-f9585fac">Seeing the bigger picture
                                    enables us to recognize valuable connections and opportunities, delivering improved
                                    quality and amenity with a balanced, cost-conscious approach. <br><br>
                                    We design with people in mind, creating places that support life in all its
                                    forms—learning, working, resting, and connecting.</p>
                            </div>
                            <div hide-scrollbar="" data-lenis-prevent="" class="section_bottom is-about-framework">
                                <div id="w-node-_2029f510-8504-e3f0-c696-9f89819280ee-f9585fac" class="vertical_3em">
                                    <img src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641f56e334d11c63b64f6_archipelago-room.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                        class="about_framework-image" />
                                    <div>Room</div>
                                </div>
                                <div id="w-node-c86a692a-b097-ca1a-8dd6-fedf146adbb8-f9585fac" class="vertical_3em">
                                    <img src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641f5f181ce66f663c589_archipelago-site.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                        class="about_framework-image" />
                                    <div>Site</div>
                                </div>
                                <div id="w-node-b5350664-35a2-deee-dbd2-cd374e136e7a-f9585fac" class="vertical_3em">
                                    <img src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641f55ba2403cb38111f3_archipelago-neighbourhood.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                        class="about_framework-image" />
                                    <div>Neighbourhood</div>
                                </div>
                                <div id="w-node-_38225d05-807c-215a-f3d0-8cf4b037b0b2-f9585fac" class="vertical_3em">
                                    <img src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641f6d6ca1fc34347d66b_archipelago-city.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design City"
                                        class="about_framework-image" />
                                    <div>City</div>
                                </div>
                                <div id="w-node-_311b4da9-19b3-5a7a-3e4a-1999c71d52a4-f9585fac" class="vertical_3em">
                                    <img src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641f591e3fde39e6a4911_archipelago-region.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                        class="about_framework-image" />
                                    <div>Region</div>
                                </div><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641efb55fc64b2d631992_archipelago-framework-line.webp"
                                    loading="lazy" id="w-node-_377ff006-e0e2-49af-94ed-825514fe3db9-f9585fac"
                                    sizes="100vw" alt=""
                                    srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/653641efb55fc64b2d631992_archipelago-framework-line-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/653641efb55fc64b2d631992_archipelago-framework-line.webp 2411w"
                                    class="about_framework-line" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section is-dark-tan">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-6-5em">
                            <div class="section_top is-5em">
                                <div class="section_heading-wrap">
                                    <h2 class="h1">Our Framework</h2>
                                </div>
                            </div>
                            <div class="section_middle is-service"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6536524d0580816a6a399f95_archipelago_our-approach.svg"
                                    loading="lazy" data-animate="" alt="" class="about_service-img" />
                                <p class="about_service-hero">Our Approach to <br />Delivering Enduring Value</p>
                            </div>
                            <div class="section_bottom is-service">
                                @php
                                    $frameworks = \App\Models\Admin\Framework::where([
                                        ['status', 1],
                                        ['delete', 0],
                                    ])->get();
                                @endphp
                                @foreach ($frameworks as $framework)
                                    <div id="w-node-_33e92808-81cb-aa3a-5bfc-189235d7f126-f9585fac"
                                        class="vertical_1em">
                                        <h5>{{ $framework->title }}</h5>
                                        {!! $framework->details !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="about_clients_component">
                        <div class="page-padding">
                            <div class="about_sub-heading">Clients &amp; collaborators.</div>
                        </div>
                        <div class="clients_marquee_component">
                            <div class="clients_marquee_row">
                                <div class="clients_marquee_list-wrapper w-dyn-list">
                                    <div role="list" class="clients_marquee_list w-dyn-items">
                                        @php
                                            $partners = \App\Models\Admin\Partner::where([
                                                ['status', 1],
                                                ['delete', 0],
                                            ])->get();
                                        @endphp
                                        @foreach ($partners as $partner)
                                            <div role="listitem" class="clients_marquee_item w-dyn-item"><img
                                                    loading="eager" src="{{ asset($partner->partner_image) }}"
                                                    alt="" sizes="100vw"
                                                    srcset="{{ asset($partner->partner_image) }}"
                                                    class="clients_marquee_img" /></div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="clients_marquee_list-wrapper w-dyn-list">
                                    <div role="list" class="clients_marquee_list w-dyn-items">
                                        @php
                                            $partners = \App\Models\Admin\Partner::where([
                                                ['status', 1],
                                                ['delete', 0],
                                            ])->get();
                                        @endphp
                                        @foreach ($partners as $partner)
                                            <div role="listitem" class="clients_marquee_item w-dyn-item"><img
                                                    loading="eager" src="{{ asset($partner->partner_image) }}"
                                                    alt="" sizes="100vw"
                                                    srcset="{{ asset($partner->partner_image) }}"
                                                    class="clients_marquee_img" /></div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="clients_marquee_gradient"></div>
                            <div class="clients_marquee_gradient is-right"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-10em">
                            <div class="section_top is-5em">
                                <div class="section_heading-wrap">
                                    <h2 class="h1">Our Values</h2>
                                </div>
                            </div>
                            <div class="section_middle is-values">
                                @php
                                    $values = \App\Models\Admin\Value::where([['status', 1], ['delete', 0]])->get();
                                @endphp
                                @foreach ($values as $value)
                                    <div id="w-node-c3ef5614-2450-0e06-946c-36b22c4ec8f8-f9585fac"
                                        class="vertical_1em">
                                        <h5>{{ $value->title }}</h5>
                                        {!! $value->details !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-6-5em">
                            <div class="section_top is-5em">
                                <div class="section_heading-wrap">
                                    <h2 class="h1">Our Sectors</h2>
                                </div>
                            </div>
                            <div class="section_middle is-sectors"><a
                                    href="/projects?sector=City+Shaping+Master+Plans"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663479176ee690074eadb_City%20shaping%20master%20plans%201.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                        class="about_sectors-img is-1" />
                                    <h6>City Shaping Master Plans</h6>
                                    <p class="p-70">We work with government, private sector and non-profit
                                        organisations to provide strong
                                        urban frameworks which unlock density and leverage their assets for maximum
                                        public benefit.</p>
                                </a><a href="/projects?sector=Major+Urban+Projects"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347b6791881def825b9_Major%20Urban%20Projects.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture major urban projects"
                                        class="about_sectors-img is-2" />
                                    <h6>Major Urban Projects</h6>
                                    <p class="p-70">Major urban projects and large-scale developments have the
                                        potential to make the
                                        greatest contribution and benefit to our cities. The creation of vibrant,
                                        connected places for
                                        people is central to any future development.</p>
                                </a><a href="/projects?sector=Olympic+Precincts+%2B+Games+Overlay"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347d7d446708ae7b01f_Frame%209279.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture plans"
                                        class="about_sectors-img is-3" />
                                    <h6>Olympic Precincts + Games Overlay</h6>
                                    <p class="p-70">We are subject matter experts in Athlete Villages and have
                                        proven expertise in Olympic
                                        precinct master planning, venue design and games overlay. We understand and
                                        amplify the relationship
                                        of legacy outcomes and citymaking opportunities.</p>
                                </a><a href="/projects?sector=Housing+%2B+Lifestyle"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663472845a4410ae325ee_Housing%20%2B%20Lifestyle.svg"
                                        loading="lazy" data-animate="" alt="Archipelago&#x27;s Housing and Lifestyle"
                                        class="about_sectors-img is-4" />
                                    <h6>Housing + Lifestyle</h6>
                                    <p class="p-70">We bring big ideas underpinned by strategic thinking to every
                                        housing project to
                                        provide innovative living solutions that support the growth of our knowledge
                                        economy and the
                                        sustainability of our future cities.</p>
                                </a><a href="/projects?sector=Public+Realm+%2B+Open+Space"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347329742981f9fa557_Public%20Realm%20%2B%20Open%20Space.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture public realm open space"
                                        class="about_sectors-img is-5" />
                                    <h6>Public Realm + Open Space</h6>
                                    <p class="p-70">By working together early in the design process, landscape
                                        architecture is integrated
                                        with architecture, providing high quality indoor / outdoor spaces which engage
                                        with and celebrate
                                        our subtropical climate.</p>
                                </a><a href="/projects?sector=Urban+Renewal"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6536634731378ef64d9c5689_Urban%20Renewal.svg"
                                        loading="lazy" data-animate="" alt="Archipelago&#x27;s Urban Renewal "
                                        class="about_sectors-img is-6" />
                                    <h6>Urban Renewal</h6>
                                    <p class="p-70">Transformative urban renewal projects and precinct plans breathe
                                        new life into tired
                                        spaces to activate the urban experience and enhance communities and life. </p>
                                </a><a href="/projects?sector=Interiors"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347715959ce3aff2a80_Interiors.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture Interiors"
                                        class="about_sectors-img is-4" />
                                    <h6>Interiors</h6>
                                    <p class="p-70">Our integrated architecture and interiors teams work together to
                                        develop the vision,
                                        select furniture and finishes and document three-dimensionally, which translates
                                        into a cohesive
                                        design strategy. </p>
                                </a><a href="/projects?sector=Transport+%2B+Infrastructure"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663473453b977e1deeb2b_Transport%20%2B%20Infrastructure.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture transport"
                                        class="about_sectors-img is-8" />
                                    <h6>Transport + Infrastructure</h6>
                                    <p class="p-70">We look beyond the traditional engineering and economic
                                        feasibility aspects of
                                        transport + infrastructure systems to understand the wider public realm benefits
                                        of the significant
                                        investment required in a new or existing movement system. </p>
                                </a><a href="/projects?sector=Community"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663478ec5aa203fe466f7_Community.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture project"
                                        class="about_sectors-img is-9" />
                                    <h6>Community</h6>
                                    <p class="p-70">From youth hubs to club houses to performing arts centres, we
                                        understand the
                                        importance of community infrastructure in creating meaningful and memorable
                                        focal places which
                                        celebrate inclusivity and connectivity. </p>
                                </a><a href="/projects?sector=Commercial"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347b6791881def82590_Commercial.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture commercial project"
                                        class="about_sectors-img is-10" />
                                    <h6>Commercial</h6>
                                    <p class="p-70">From transit-oriented developments, to commercial and mixed-use
                                        towers, we generate
                                        value by negotiating and unifying the operational, social, and economic
                                        imperatives of the project
                                        through shared visions that are both creative and pragmatic.</p>
                                </a><a href="/projects?sector=Health+%2B+Knowledge"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6536634744d00a50cbaa049f_Health%20%2B%20Knowledge.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                        class="about_sectors-img is-11" />
                                    <h6>Health + Knowledge</h6>
                                    <p class="p-70">Our multi-disciplinary team design buildings and campus master
                                        plans for universities,
                                        hospitals, science, research and advanced manufacturing facilities where
                                        knowledge is created,
                                        exchanged and transformed. </p>
                                </a><a href="/projects?sector=Guidelines+%2B+Advisory"
                                    class="about-sectors_item w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347b812e0b776de2e19_Guidelines%20%2B%20Advisory.svg"
                                        loading="lazy" data-animate=""
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture guidelines"
                                        class="about_sectors-img is-12" />
                                    <h6>Guidelines + Advisory</h6>
                                    <p class="p-70">We provide expert advice and design review services. As urban
                                        design leaders, we craft
                                        development guidelines which reflect planning aspirations for best practice
                                        approaches to both
                                        architecture and urban design.<br /></p>
                                </a><a id="w-node-c95772c7-9a5e-209e-58bd-39e0e3dcb31e-f9585fac" href="/projects"
                                    class="button w-inline-block">
                                    <div class="button_label">View All Projects</div>
                                    <div class="button_arrow w-embed"><svg width="100%" style=""
                                            viewBox="0 0 23 17" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                fill="currentColor" />
                                        </svg></div>
                                </a></div>
                        </div>
                    </div>
                </div>
            </section> --}}
            @php
                $contact = \App\Models\Admin\Contact::first();
                $logo = \App\Models\Admin\Logo::first();
            @endphp
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-10em">
                            <div class="about_workshop-wrap">
                                <div id="w-node-d87ab7a9-b3fe-2b80-fc27-54af7e1e47bf-f9585fac"
                                    class="about_workshop-card-wrap">
                                    <div class="about_workshop-card-color"></div>
                                    <div class="about_workshop-card">
                                        <div class="hiring_logo w-embed" style="width: 10em"><img
                                                src="{{ asset($logo->main_site_footer_logo) }}" alt=""></div>
                                        <div class="vertical_3em is-left">
                                            <div class="vertical_1em">
                                                <div class="about_workshop-heading">Book an Appointment </div>
                                                <p class="about_workshop-p">Ready to take the next step with
                                                    confidence? Let’s bring your vision to life—connect with Pixscape
                                                    and book a friendly project consultation today.</p>
                                            </div><a href="{{ route('frontend.contact') }}#message_form"
                                                class="button is-small w-inline-block">
                                                <div class="button_label">Book Now</div>
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
                                <div id="w-node-_6b374d3c-c69e-9ce0-7165-38d0ca9ed274-f9585fac"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65441b82f26fa41b25cb34e6_archipelago_about-workshop.webp"
                                        loading="lazy" sizes="100vw"
                                        srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/65441b82f26fa41b25cb34e6_archipelago_about-workshop-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65441b82f26fa41b25cb34e6_archipelago_about-workshop-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65441b82f26fa41b25cb34e6_archipelago_about-workshop-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65441b82f26fa41b25cb34e6_archipelago_about-workshop.webp 1271w"
                                        alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture workshop"
                                        class="about_workshop-img" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-7-5em">
                            <div class="section_top is-5em">
                                <div class="section_heading-wrap">
                                    <h2 class="h1">Awards</h2>
                                </div>
                                <div class="section_content-grid">
                                    <div class="section_info-wrap">
                                        <p>Archipelago are award-winning designers. We believe that all projects have
                                            the potential for
                                            excellence, regardless of scale, scope or budget, and that a thoughtful and
                                            considered design
                                            process is the key to unlocking this value.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="section_middle">
                                <div class="about_services-wrap"><img
                                        src="https://cdn.prod.website-files.com/65249822a54c89915817034b/654c7a51da582d5452f3fec4_DSC_2268.webp"
                                        loading="lazy" sizes="100vw"
                                        srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/654c7a51da582d5452f3fec4_DSC_2268-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654c7a51da582d5452f3fec4_DSC_2268-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654c7a51da582d5452f3fec4_DSC_2268-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654c7a51da582d5452f3fec4_DSC_2268.webp 1152w"
                                        alt="Archipelago&#x27;s Architecture team at work" class="about_left-img" />
                                </div>
                                <div class="about_services-wrap is-right">
                                    <div class="vertical_1-5em">
                                        <div>
                                            <div class="accordion_wrap">
                                                <div class="display-contents">
                                                    @php
                                                        $awards = \App\Models\Admin\Award::where([
                                                            ['status', 1],
                                                            ['delete', 0],
                                                        ])->get();
                                                    @endphp
                                                    @foreach ($awards as $award)
                                                        <div class="accordion_item">
                                                            <div class="accordion_toggle">
                                                                <div>{{ $award->title }}</div>
                                                                <div class="accordion_icon">
                                                                    <div class="accordion_minus is-vertical w-embed">
                                                                        <svg width="100%" style=""
                                                                            viewBox="0 0 12 2" fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                                fill="currentColor" />
                                                                            <path d="M0 1.5V0.5H12V1.5H0Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </div>
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
                                                                        {!! $award->details !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section> --}}
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
                                        <a href="{{ route('frontend.team') }}" class="button w-inline-block">
                                            <div class="button_label">{{ $teaminfo ? $teaminfo->button_text : '' }}
                                            </div>
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

            <section class="section is-dark-tan">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding is-hiring">
                        <div class="hiring_wrap">
                            <div id="w-node-cfb97ec3-8808-cc9d-a022-0136105c2366-105c2362" class="hiring_img-ratio">
                                <img src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table.webp"
                                    loading="lazy" sizes="100vw"
                                    srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-1600.webp 1600w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table.webp 2003w"
                                    alt="" class="ratio_img" />
                            </div>
                            <div id="w-node-cfb97ec3-8808-cc9d-a022-0136105c2368-105c2362" class="hiring_info-wrap">
                                <div class="hiring_logo w-embed" style="width: 10em"><img
                                        src="{{ asset($logo->main_site_logo3) }}" alt=""></div>
                                <div class="hiring_info-contain">
                                    <div class="hiring_callout">We’re hiring!</div>
                                    <p class="hiring_heading">Do you have a passion for shaping cities and creating
                                        impactful urban environments? Join PIXSCAPE and make your mark on the future of
                                        city living! </p>
                                    <p class="hiring_p">Join the dynamic PIXSCAPE team and help design the spaces where
                                        tomorrow’s cities are engineered.</p><a href="{{ route('frontend.careers') }}"
                                        class="button is-hiring w-inline-block">
                                        <div class="button_label">Join The Team</div>
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
            </section>
        </div>
        @php
            $contact = \App\Models\Admin\Contact::first();
        @endphp
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
            'src': 'pages/about.js'
        });
    </script>
</body>

</html>
