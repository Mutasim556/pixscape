<!DOCTYPE html><!-- Last Published: Fri Jan 16 2026 12:12:39 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="www.archipelago.com.au" data-wf-page="6543a9053fac558af9585fad"
    data-wf-site="65249822a54c89915817034b">
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
    <!-- End Google Tag Manager --><!-- [Attributes by Finsweet] CMS Nest -->
    <script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsnest@1/cmsnest.js"></script>
    <!-- [Attributes by Finsweet] CMS Filter -->
    <script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsfilter@1/cmsfilter.js"></script>
    <!-- [Attributes by Finsweet] CMS Load -->
    <script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsload@1/cmsload.js"></script>
    <!-- [Attributes by Finsweet] CMS Static -->
    <script async src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsstatic@1/cmsstatic.js"></script>
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

        <style class="articles-css">
            @media(min-width: 992px) {
                :root {
                    --gap: 0.75em
                }

                .blog_collection-wrapper {
                    width: calc(100% + var(--gap)*2);
                    margin-left: calc(var(--gap)*-1)
                }

                .blog-grid_collection-item[data-blog-featured=yes i] {
                    grid-column: span 3
                }

                .blog-grid_collection-item[data-blog-featured=yes i] .blog_card-content {
                    padding-left: calc(33.3333333333% + var(--gap));
                    padding-right: 8.5em;
                    width: 100%;
                    gap: 1em
                }

                .blog-grid_collection-item[data-blog-featured=yes i] .blog_card-heading {
                    font-size: var(--font-size--h2)
                }

                .blog-grid_collection-item[data-blog-featured=yes i] .blog_card-p {
                    width: calc(33.3333333333vw - var(--gap)*6)
                }

                .articles_sticky_component {
                    grid-row-end: span 3;
                    grid-column: 1/span 1
                }
            }
        </style>
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
                                            class="page_breadcrumb-text w--current">Articles</a>
                                    </div>
                                </div>
                                <div fs-cmsload-element="scroll-anchor" class="filter_wrap">
                                    <h1 class="h-xl">Articles</h1>
                                    <div class="form w-form">
                                        <form id="wf-form-Blog-Filter-Form" name="wf-form-Blog-Filter-Form"
                                            data-name="Blog Filter Form" method="get" fs-cmsfilter-element="filters"
                                            class="form" data-wf-page-id="6543a9053fac558af9585fad"
                                            data-wf-element-id="efd395c3-e7a0-72fd-e800-5875b0744baf">
                                            <div class="filter_ui-wrap">
                                                <div class="submit-form is-filter"><input
                                                        class="submit-field is-filter w-input" maxlength="256"
                                                        name="field" fs-cmsfilter-field="*" data-name="Field"
                                                        placeholder="Search" type="text" id="field"
                                                        required="" /></div>
                                                {{-- <div class="filter_ui-contain">
                                                    <div class="filter_dropdown">
                                                        <div class="filter_dropdown_underline-contain">
                                                            <div class="filter_dropdown-button">
                                                                <div class="filter_dropdown-label">Filter by Sector
                                                                </div>
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
                                                            <div class="filter_dropdown_underline"></div>
                                                        </div>
                                                        <div class="filter_dropdown-wrapper w-dyn-list">
                                                            <div role="list"
                                                                class="filter_dropdown-options w-dyn-items">
                                                                @php
                                                                    $articles = \App\Models\Admin\Blog::where(
                                                                        'status',
                                                                        1,
                                                                    )
                                                                        ->where('delete', 0)
                                                                        ->select('filter_by')
                                                                        ->distinct()
                                                                        ->get();
                                                                @endphp
                                                                @foreach ($articles as $article)
                                                                    <div role="listitem" class="w-dyn-item"><label
                                                                            class="w-checkbox filter_dropdown-item">
                                                                            <div
                                                                                class="w-checkbox-input w-checkbox-input--inputType-custom filter_radio">
                                                                            </div><input type="checkbox"
                                                                                id="sector[]-2" name="sector[]-2"
                                                                                data-name="Sector 2"
                                                                                style="opacity:0;position:absolute;z-index:-1" /><span
                                                                                fs-cmsfilter-field="sector"
                                                                                class="filter_option-label w-form-label"
                                                                                for="sector[]-2">{{ $article->filter_by }}</span>
                                                                        </label></div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </form>
                                        <div class="w-form-done">
                                            <div>Thank you! Your submission has been received!</div>
                                        </div>
                                        <div class="w-form-fail">
                                            <div>Oops! Something went wrong while submitting the form.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="w-layout-blockcontainer container w-container">
                    <div class="page-padding">
                        <div class="section-padding is-5em is-articles">
                            <div class="blog-grid_collection-wrapper w-dyn-list">
                                <div fs-cmsstatic-element="list" fs-cmsfilter-element="list"
                                    fs-cmsload-element="list" fs-cmsload-mode="pagination" fs-cmsnest-element="list"
                                    role="list" class="blog-grid_collection-list w-dyn-items">
                                    @php
                                        $articles = \App\Models\Admin\Blog::where([
                                            ['status', 1],
                                            ['delete', 0],
                                        ])->get();
                                    @endphp
                                    @foreach ($articles as $key => $article)
                                        @if ($key < 2)
                                            @php
                                                $articleImgs = json_decode($article->images);
                                            @endphp
                                            <div data-blog-featured="yes" role="listitem"
                                                class="blog-grid_collection-item w-dyn-item"><a
                                                    href="{{ route('frontend.articleSingle',\Illuminate\Support\Str::slug( $article->title) ) }}?articleid={{ $article->id }}"
                                                    class="blog_link w-inline-block">
                                                    <div class="img_overflow"><img alt="" loading="lazy"
                                                            src="{{ $articleImgs[0] }}" class="blog_item-img" /></div>
                                                    <div class="blog_card-content">
                                                        <h3 fs-cmsfilter-field="title" class="blog_card-heading">
                                                            {{ $article->title }}</h3>
                                                        <p fs-cmsfilter-field="summary" class="blog_card-p">
                                                            {!! \Illuminate\Support\Str::limit(strip_tags($article->details), 200) !!}</p>
                                                    </div>
                                                    <div fs-cmsfilter-field="category"
                                                        class="filter_hidden-identifier-wrapper">
                                                        Article</div>
                                                </a>
                                                <div class="filter_hidden-identifier-wrapper">
                                                    <div fs-cmsnest-collection="sector"
                                                        fs-cmsnest-element="nest-target"
                                                        class="filter_cms-nest_target"></div>
                                                </div>
                                            </div>
                                        @else
                                            @php
                                                $articleImgs = json_decode($article->images);
                                            @endphp
                                            <div data-blog-featured="" role="listitem"
                                                class="blog-grid_collection-item w-dyn-item"><a
                                                    href="/blog/urban-pedestrianisation-how-prioritising-pedestrians-can-transform-urban-spaces"
                                                    class="blog_link w-inline-block">
                                                    <div class="img_overflow"><img alt="" loading="lazy"
                                                            src="{{ $articleImgs[0] }}"
                                                            sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px"
                                                            srcset="{{ $articleImgs[0] }}" class="blog_item-img" />
                                                    </div>
                                                    <div class="blog_card-content">
                                                        <h3 fs-cmsfilter-field="title" class="blog_card-heading">
                                                            {{ $article->title }}</h3>
                                                        <p fs-cmsfilter-field="summary" class="blog_card-p">
                                                            {!! \Illuminate\Support\Str::limit(strip_tags($article->details), 200) !!}
                                                        </p>
                                                    </div>
                                                    <div fs-cmsfilter-field="category"
                                                        class="filter_hidden-identifier-wrapper">
                                                        Article</div>
                                                </a>
                                                <div class="filter_hidden-identifier-wrapper">
                                                    <div fs-cmsnest-collection="sector"
                                                        fs-cmsnest-element="nest-target"
                                                        class="filter_cms-nest_target"></div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <div role="navigation" aria-label="List"
                                    class="w-pagination-wrapper blog-grid_pagination"></div>
                            </div>
                            <div class="cms_nest-hidden-wrapper">
                                <div class="projects_nest-collection w-dyn-list">
                                    <div fs-cmsnest-collection="sector" fs-cmsnest-element="nest-source"
                                        role="list" class="projects_nest-list w-dyn-items">
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/workplace-interiors"
                                                class="projects_nest-item-hidden-link">Workplace + Interiors</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/complex-master-plans"
                                                class="projects_nest-item-hidden-link">Complex master plans</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/education-science"
                                                class="projects_nest-item-hidden-link">Education + Science</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector" href="/project-blog-sectors/commercial"
                                                class="projects_nest-item-hidden-link">Commercial</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/city-shaping-master-plans"
                                                class="projects_nest-item-hidden-link">City Shaping Master Plans</a>
                                        </div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/major-urban-projects"
                                                class="projects_nest-item-hidden-link">Major Urban Projects</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/olympic-precincts-games-overlay"
                                                class="projects_nest-item-hidden-link">Olympic Precincts + Games
                                                Overlay</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/housing-lifestyle"
                                                class="projects_nest-item-hidden-link">Housing + Lifestyle</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/public-realm-open-space"
                                                class="projects_nest-item-hidden-link">Public Realm + Open Space</a>
                                        </div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector" href="/project-blog-sectors/urban-renewal"
                                                class="projects_nest-item-hidden-link">Urban Renewal</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector" href="/project-blog-sectors/interiors"
                                                class="projects_nest-item-hidden-link">Interiors</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/transport-infrastructure"
                                                class="projects_nest-item-hidden-link">Transport + Infrastructure</a>
                                        </div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector" href="/project-blog-sectors/community"
                                                class="projects_nest-item-hidden-link">Community</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/health-knowledge"
                                                class="projects_nest-item-hidden-link">Health + Knowledge</a></div>
                                        <div role="listitem" class="projects_nest-item w-dyn-item"><a
                                                fs-cmsfilter-field="sector"
                                                href="/project-blog-sectors/guidelines-advisory"
                                                class="projects_nest-item-hidden-link">Guidelines + Advisory</a></div>
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
            'src': 'pages/articles.js'
        });
    </script>
</body>

</html>
