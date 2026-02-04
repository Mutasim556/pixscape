<!DOCTYPE html>
<html data-wf-domain="www.pixscape-bd.com" data-wf-page="6543a9053fac558af9585fa4" data-wf-site="65249822a54c89915817034b">
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
    @php
        $theme = \App\Models\Admin\ThemeSetting::first();
    @endphp
    <style>
        :root {
            --swatch--olive-green: {{ $theme->theme_color }};
        }
    </style>
    @stack('css')
    <link rel="icon" href="{{ asset($logo->main_site_icon) }}" type="image/png">
    <link href="{{ asset($logo->main_site_icon) }}" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset($logo->main_site_icon) }}" rel="apple-touch-icon" />

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
        })(window, document, 'script', 'dataLayer', 'GTM-PB4VWGH2');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Structured Data for Google (Organization) -->
    @verbatim
        <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Pixscape BD",
        "url": "https://pixscape-bd.com",
        "logo": "https://pixscape-bd.com/favicon.ico",
        "sameAs": [
            "https://www.facebook.com/pixscapebd",
            "https://www.linkedin.com/company/pixscapebd"
        ]
        }
    </script>
    @endverbatim

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

</head>

<body>
    <div class="page-wrapper has-preloader">
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
                    /* background-color: var(--swatch--orange) */
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



                .reveal_logomark {
                    height: 250px;
                    width: 250px;
                }

                /* .reveal_wrap {
                    background: rgba(255, 0, 0, 0.05);
                } */

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
        <div data-show-in-designer="false" class="preloader_component">
            <div class="preloader_flexbox page-padding">
                <div class="preloader_content">
                    <div class="preloader_logo-wrap">
                        <div class="preloader_logo">
                            <div class="preloader_logo-a w-embed">
                                <img src="{{ asset($logo ? $logo->main_site_header_logo : '') }}" alt="Logo"
                                    style="width: auto; height: 100%;" />
                            </div>
                            <div class="preloader_mid-line">
                                <div class="preloader_logo-rchipelago w-embed"></div>
                            </div>

                        </div>
                    </div>
                    <div class="preloader_tagline-wrapper">
                        <div class="preloader_tagline is-1">Cities.</div>
                        <div class="preloader_tagline is-2"> People.</div>
                        <div class="preloader_tagline is-3">Design.</div>
                    </div>
                    <div class="preloader_para-wrap">
                        <div class="loader_acknowledge-p">Pixscape acknowledges the Turrbal and Yuggera people as the
                            Traditional
                            Custodians of the land on which our office is located, where we are privileged to design and
                            create. We
                            pay our respects to Elders past, present, and emerging.</div>
                    </div>
                </div>
                <div class="preloader_image-wrapper">
                    <div class="preloader_image-shaded-mask"><img
                            src="https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd624c6129fd928ad45ff_Citscape4shaded.webp"
                            loading="eager" sizes="100vw"
                            srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd624c6129fd928ad45ff_Citscape4shaded-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd624c6129fd928ad45ff_Citscape4shaded-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd624c6129fd928ad45ff_Citscape4shaded.webp 1200w"
                            alt="" class="preloader_image-shaded" /></div>
                    <div class="preloader_image-unshaded-mask"><img
                            src="https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd5fa16c68ced7a706dad_Citscape3unshaded.webp"
                            loading="eager" sizes="100vw"
                            srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd5fa16c68ced7a706dad_Citscape3unshaded-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd5fa16c68ced7a706dad_Citscape3unshaded-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654dd5fa16c68ced7a706dad_Citscape3unshaded.webp 1200w"
                            alt="" class="preloader_image-unshaded" /></div>
                </div>
            </div>
        </div>

        @include('frontend.pages.shared.nav')
        @yield('content')
        @include('frontend.pages.shared.footer')
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=65249822a54c89915817034b"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/pixscape/js/script.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/pixscape/js/app.js') }}" type="text/javascript"></script>
    @stack('js')
    <!-- Google Tag Manager (noscript) -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PB4VWGH2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <script>
        window.JS_SCRIPTS.push({
            'src': 'pages/home/index.js'
        });
    </script>
</body>

</html>
