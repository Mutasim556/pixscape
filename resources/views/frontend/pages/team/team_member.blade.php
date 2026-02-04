<!DOCTYPE html><!-- Last Published: Fri Jan 16 2026 12:12:39 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.pixscape-bd.com" data-wf-page="6543a9053fac558af9585fb2"
    data-wf-site="65249822a54c89915817034b" data-wf-collection="6543a9053fac558af958600b"
    data-wf-item-slug="dannielle-jenkins-b813d">
@php
    $logo = \App\Models\Admin\Logo::first();
@endphp
<head>
   <meta charset="utf-8" />
    <title>Pixscape - where tomorrows cities are engineered</title>
    <meta
        content="Pixscape - where tomorrows cities are engineered"
        name="description" />
    <meta content="Pixscape - where tomorrows cities are engineered" property="og:title" />
    <meta
        content="Pixscape - where tomorrows cities are engineered"
        property="og:description" />
    <meta
        content="{{ asset($logo->main_site_icon) }}"
        property="og:image" />
    <meta content="Pixscape - where tomorrows cities are engineered" property="twitter:title" />
    <meta
        content="Pixscape - where tomorrows cities are engineered"
        property="twitter:description" />
    <meta
        content="{{ asset($logo->main_site_icon) }}"
        property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="{{ asset('public/pixscape/css/style.css') }}" rel="stylesheet" type="text/css" />
    @php
        $theme = \App\Models\Admin\ThemeSetting::first();
    @endphp
    <style>
        :root {
            --swatch--olive-green: {{ $theme->theme_color }};
        }
    </style>
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
    <link href="{{ asset($logo->main_site_icon) }}"
        rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset($logo->main_site_icon) }}"
        rel="apple-touch-icon" />
    {{-- <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script> --}}
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
                                    <div class="page_heading-logo"><a href="{{ url('/') }}" class="w-inline-block">
                                            <div class="page_logo w-embed">
                                                <h1 style="font-weight: 500;">
                                                    {{ $aboutus ? $aboutus->company_name : '' }}
                                                </h1>
                                            </div>
                                        </a></div>
                                    <div class="page_breadcrumb-wrap"><a href="{{ url('/') }}"
                                            class="page_breadcrumb-text">Home</a>
                                        <div class="page_breadcrumb-text">/</div><a href="{{ route('frontend.team') }}"
                                            class="page_breadcrumb-text">Team</a>
                                        <div class="page_breadcrumb-text">/</div><a
                                            href="/team-member/dannielle-jenkins-b813d" aria-current="page"
                                            class="page_breadcrumb-text w--current">{{ ucwords(str_replace('-', ' ', $teamMember->team_member_name)) }}</a>
                                    </div>
                                </div>
                                <div class="vertical_1em">
                                    <h1 class="h-xl">
                                        {{ ucwords(str_replace('-', ' ', $teamMember->team_member_name)) }}</h1>
                                    <div class="page_sub-heading">{{ $teamMember->team_member_desig }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-team-member">
                            <div class="team_layout">
                                <div class="vertical_5-75em">
                                    <div class="vertical_3em is-team">
                                        <p class="page_sub-heading w-dyn-bind-empty"></p>
                                        <div class="rich-text is-team w-richtext">
                                            {!! $teamMember->team_member_about !!}
                                        </div>
                                        <div class="horizontal_1em">
                                            @if ($teamMember->team_member_facebook)
                                                <a href="{{ $teamMember->team_member_facebook }}"
                                                    class="team_link w-inline-block">
                                                    <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M20 10.0001C20 4.47723 15.5228 0 10 0C4.47723 0 0 4.47723 0 10.0001C0 14.9913 3.65686 19.1284 8.4375 19.8785V12.8907H5.89844V10.0001H8.4375V7.79698C8.4375 5.29073 9.93047 3.9063 12.2146 3.9063C13.3088 3.9063 14.4531 4.10163 14.4531 4.10163V6.5626H13.1922C11.95 6.5626 11.5625 7.33391 11.5625 8.12511V10.0001H14.3359L13.8926 12.8907H11.5625V19.8785C16.3431 19.1284 20 14.9913 20 10.0001Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            @endif
                                            @if ($teamMember->team_member_instagram)
                                                <a href="{{ $teamMember->team_member_instagram }}"
                                                    class="team_link w-inline-block">
                                                    <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10 4.86486C8.1973 4.86486 6.72973 6.33243 6.72973 8.13514C6.72973 9.93784 8.1973 11.4054 10 11.4054C11.8027 11.4054 13.2703 9.93784 13.2703 8.13514C13.2703 6.33243 11.8027 4.86486 10 4.86486Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M14.5946 0H5.40541C2.42432 0 0 2.42432 0 5.40541V14.5946C0 17.5757 2.42432 20 5.40541 20H14.5946C17.5757 20 20 17.5757 20 14.5946V5.40541C20 2.42432 17.5757 0 14.5946 0ZM10 13.5135C6.973 13.5135 4.62162 11.1622 4.62162 8.13514C4.62162 5.10811 6.973 2.75676 10 2.75676C13.027 2.75676 15.3784 5.10811 15.3784 8.13514C15.3784 11.1622 13.027 13.5135 10 13.5135ZM16.4865 4.05405C15.8378 4.05405 15.2973 3.51351 15.2973 2.86486C15.2973 2.21622 15.8378 1.67568 16.4865 1.67568C17.1351 1.67568 17.6757 2.21622 17.6757 2.86486C17.6757 3.51351 17.1351 4.05405 16.4865 4.05405Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            @endif
                                            @if ($teamMember->team_member_youtube)
                                                <a href="{{ $teamMember->team_member_youtube }}"
                                                    class="team_link w-inline-block">
                                                    <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M19.5829 5.18648C19.3556 4.3307 18.6883 3.66346 17.8325 3.43615C16.2553 3.00003 10.0001 3.00003 10.0001 3.00003C10.0001 3.00003 3.74492 3.00003 2.1677 3.43615C1.31192 3.66346 0.64468 4.3307 0.41737 5.18648C0.0000610352 6.7637 0.0000610352 10 0.0000610352 10C0.0000610352 10 0.0000610352 13.2363 0.41737 14.8135C0.64468 15.6693 1.31192 16.3365 2.1677 16.5639C3.74492 17 10.0001 17 10.0001 17C10.0001 17 16.2553 17 17.8325 16.5639C18.6883 16.3365 19.3556 15.6693 19.5829 14.8135C20.0001 13.2363 20.0001 10 20.0001 10C20.0001 10 20.0001 6.7637 19.5829 5.18648Z"
                                                                fill="currentColor" />
                                                            <path d="M8.00006 13L13.0001 10L8.00006 7V13Z"
                                                                fill="#FFFFFF" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            @endif
                                            @if ($teamMember->team_member_linkedin)
                                                <a href="{{ $teamMember->team_member_linkedin }}"
                                                    class="team_link w-inline-block">
                                                    <div class="team_link-icon is-linkedin w-embed"><svg
                                                            width="100%" style="" viewBox="0 0 20 20"
                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.65602 6.41406H0.640039C0.461804 6.41406 0.317383 6.55855 0.317383 6.73672V19.6383C0.317383 19.8166 0.461804 19.961 0.640039 19.961H4.65602C4.83425 19.961 4.97867 19.8166 4.97867 19.6383V6.73672C4.97867 6.55855 4.83425 6.41406 4.65602 6.41406Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M2.65004 0C1.1888 0 0 1.18751 0 2.64714C0 4.10742 1.1888 5.29538 2.65004 5.29538C4.11013 5.29538 5.29796 4.10735 5.29796 2.64714C5.29802 1.18751 4.11013 0 2.65004 0Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M14.8714 6.09277C13.2584 6.09277 12.0661 6.78616 11.3429 7.57403V6.73609C11.3429 6.55792 11.1985 6.41343 11.0202 6.41343H7.17422C6.99598 6.41343 6.85156 6.55792 6.85156 6.73609V19.6377C6.85156 19.8159 6.99598 19.9604 7.17422 19.9604H11.1814C11.3597 19.9604 11.5041 19.8159 11.5041 19.6377V13.2544C11.5041 11.1034 12.0883 10.2654 13.5878 10.2654C15.2208 10.2654 15.3506 11.6088 15.3506 13.3651V19.6378C15.3506 19.816 15.495 19.9604 15.6733 19.9604H19.6819C19.8602 19.9604 20.0046 19.816 20.0046 19.6378V12.561C20.0046 9.36251 19.3947 6.09277 14.8714 6.09277Z"
                                                                fill="currentColor" />
                                                        </svg></div>
                                                </a>
                                            @endif
                                            @if ($teamMember->team_member_email)
                                                <a href="mailto:dj@archipelago.com.au"
                                                    class="team_link w-inline-block">
                                                    <div class="team_link-icon is-email w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 18 14" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.7193 3.52047V1.76023L8.7193 6.14035L1.7193 1.76023V3.52047L8.7193 7.85965L15.7193 3.52047ZM15.7193 0C16.1832 0 16.5858 0.177386 16.9269 0.532164C17.268 0.886941 17.4386 1.29629 17.4386 1.76023V12.2398C17.4386 12.7037 17.268 13.1131 16.9269 13.4678C16.5858 13.8226 16.1832 14 15.7193 14H1.7193C1.25536 14 0.852828 13.8226 0.511696 13.4678C0.170564 13.1131 0 12.7037 0 12.2398V1.76023C0 1.29629 0.170564 0.886941 0.511696 0.532164C0.852828 0.177386 1.25536 0 1.7193 0H15.7193Z"
                                                                fill="currentColor" />
                                                        </svg></div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="team_expertise vertical_1-5em">
                                        <div class="page_sub-heading">Expertise</div>
                                        <div class="accordion_wrap">
                                            @php
                                                $expertises = json_decode($teamMember->team_member_expertise);
                                            @endphp
                                            @foreach ($expertises as $expertise)
                                                <div class="team_expertise-condition">
                                                    <div class="accordion_item">
                                                        <div class="accordion_toggle">
                                                            <div>{{ $expertise->expertise }}</div>
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
                                                                    <p>‍</p>

                                                                    <ul role="list">
                                                                        @foreach (explode('|', $expertise->expertise_value) as $expList)
                                                                            <li>{{ $expList }}</li>
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="team_featured-projects vertical_1-5em">
                                        <div class="page_sub-heading">Feature Projects</div>
                                        <div class="accordion_wrap">
                                            @php
                                                $featureProjects = json_decode(
                                                    $teamMember->team_member_feature_projects,
                                                );
                                            @endphp
                                            @foreach ($featureProjects as $featureProject)
                                                <div class="team_featured-project-condition">
                                                    <div class="accordion_item">
                                                        <div class="accordion_toggle">
                                                            <div>{{ $featureProject->project }}</div>
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
                                                                    <ul role="list">
                                                                        @foreach (explode('|', $featureProject->project_details) as $projList)
                                                                            <li>{{ $projList }}</li>
                                                                        @endforeach

                                                                    </ul>
                                                                    {{-- <p>* Experience prior to Archipelago</p> --}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><img alt="" loading="lazy"
                                    src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/65516f6a4d1a59b8870edd5e_Dannielle%20Jenkins%20up.webp"
                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 727.4140625px, 939.9375px"
                                    srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/65516f6a4d1a59b8870edd5e_Dannielle%20Jenkins%20up-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/65516f6a4d1a59b8870edd5e_Dannielle%20Jenkins%20up-p-800.webp 800w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/65516f6a4d1a59b8870edd5e_Dannielle%20Jenkins%20up.webp 900w"
                                    class="team_photo" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-cms-marquee-section="" class="section is-dark-tan">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="section-padding is-6-5em">
                        <div class="page-padding">
                            <h3 class="projects_sub-heading">Meet the rest of our team</h3>
                        </div>
                        <div class="cms-marquee_component has-image-link-cursor">
                            <div class="cms-marquee_row-wrapper">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cms-marquee_row-wrapper is-inverse">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cms-marquee_row-wrapper">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cms-marquee_row-wrapper is-inverse">
                                <div class="cms-marquee_row">
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                           @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="w-dyn-list">
                                        <div role="list" class="cms-marquee_list w-dyn-items">
                                            @foreach ($teams as $team)
                                                <div role="listitem" class="cms-marquee_item is-orange w-dyn-item"><a
                                                        href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                        class="cms-marquee_link w-inline-block">
                                                        <div data-dot-color="orange" class="dot"></div>
                                                        <div class="cms-marquee_text h-xl">{{ $team->team_member_name }}</div><img
                                                            src="{{ asset($team->team_member_image) }}"
                                                            alt="" width="100" height="Auto"
                                                            class="cms-marquee_cursor-img" />
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
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
            'src': 'collections/team-member.js'
        });
    </script>
</body>

</html>
