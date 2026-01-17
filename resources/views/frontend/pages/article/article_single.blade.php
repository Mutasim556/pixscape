@extends('frontend.pages.shared.app')
@php
    $logo = \App\Models\Admin\Logo::first();
    $aboutus = \App\Models\Admin\AboutUs::first();
@endphp
@section('content')
    <div class="page-main">
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div no-gradient="" class="page_no-gradient"></div>
                    <div class="section-padding is-5em is-page is-blog">
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
                                    <div class="page_breadcrumb-text">/</div><a href="{{ route('frontend.article') }}"
                                        class="page_breadcrumb-text">Articles</a>
                                    <div class="page_breadcrumb-text">/</div><a href="#" aria-current="page"
                                        class="page_breadcrumb-text w--current">{{ $article->title }}</a>
                                </div>
                            </div>
                            <div class="section_heading-wrap">
                                <h1 class="h1">{{ $article->title }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-blog">
                        <div class="blog_layout">
                            <div class="blog_sticky-wrap">
                                <div class="blog_sticky-top">
                                    <div class="vertical_3em is-blog">
                                        <div class="vertical_1-5em">
                                            <div class="blog_author-wrap"><img alt="" loading="lazy" src=""
                                                    class="project_team-img w-dyn-bind-empty" />
                                                <div class="vertical_0-125em">
                                                    <div class="blog_author-wrap">
                                                        <img alt="" loading="lazy"
                                                            src="{{ asset($article->team->team_member_image) }}"
                                                            class="project_team-img">
                                                        <div class="vertical_0-125em">
                                                            <div>{{ $article->team->team_member_name }}</div>
                                                            <div class="p-50">{{ $article->team->team_member_desig }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="horizontal_1em">
                                                @if ($article->team->team_member_facebook)
                                                    <a href="{{ $article->team->team_member_facebook }}"
                                                        class="team_link w-inline-block">
                                                        <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M20 10.0001C20 4.47723 15.5228 0 10 0C4.47723 0 0 4.47723 0 10.0001C0 14.9913 3.65686 19.1284 8.4375 19.8785V12.8907H5.89844V10.0001H8.4375V7.79698C8.4375 5.29073 9.93047 3.9063 12.2146 3.9063C13.3088 3.9063 14.4531 4.10163 14.4531 4.10163V6.5626H13.1922C11.95 6.5626 11.5625 7.33391 11.5625 8.12511V10.0001H14.3359L13.8926 12.8907H11.5625V19.8785C16.3431 19.1284 20 14.9913 20 10.0001Z"
                                                                    fill="currentColor" />
                                                            </svg></div>
                                                    </a>
                                                @endif
                                                @if ($article->team->team_member_linkedin)
                                                    <a href="{{ $article->team->team_member_linkedin }}"
                                                        class="team_link w-inline-block">
                                                        <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
                                                                style="" viewBox="0 0 20 20" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
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
                                                @if ($article->team->team_member_instagram)
                                                    <a href="{{ $article->team->team_member_instagram }}"
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
                                                            </svg></div>
                                                    </a>
                                                @endif
                                                @if ($article->team->team_member_youtube)
                                                    <a href="{{ $article->team->team_member_youtube }}"
                                                        class="team_link w-inline-block">
                                                        <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M19.5829 5.18648C19.3556 4.3307 18.6883 3.66346 17.8325 3.43615C16.2553 3.00003 10.0001 3.00003 10.0001 3.00003C10.0001 3.00003 3.74492 3.00003 2.1677 3.43615C1.31192 3.66346 0.64468 4.3307 0.41737 5.18648C0.0000610352 6.7637 0.0000610352 10 0.0000610352 10C0.0000610352 10 0.0000610352 13.2363 0.41737 14.8135C0.64468 15.6693 1.31192 16.3365 2.1677 16.5639C3.74492 17 10.0001 17 10.0001 17C10.0001 17 16.2553 17 17.8325 16.5639C18.6883 16.3365 19.3556 15.6693 19.5829 14.8135C20.0001 13.2363 20.0001 10 20.0001 10C20.0001 10 20.0001 6.7637 19.5829 5.18648Z"
                                                                    fill="currentColor" />
                                                                <path d="M8.00006 13L13.0001 10L8.00006 7V13Z"
                                                                    fill="#FFFFFF" />
                                                            </svg></div>
                                                    </a>
                                                @endif
                                                @if ($article->team->team_member_email)
                                                    <a href="mailto:{{ $article->team->team_member_email }}"
                                                        class="team_link w-inline-block">
                                                        <div class="team_link-icon is-linkedin w-embed"><svg width="100%"
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
                                        <div class="project_info">
                                            <div class="blog_info-row">
                                                <div class="project_info-row-label">
                                                    <div>Published</div>
                                                </div>
                                                <div class="blog_published-date">
                                                    <p class="p-50">17</p>
                                                    <p class="p-50">November 2023</p>
                                                </div>
                                            </div>
                                            <div class="blog_info-row">
                                                <div class="project_info-row-label">
                                                    <div>Category</div>
                                                </div>
                                                <p class="p-50">Article</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vertical_1em">
                                <div class="blog_rich-text w-richtext">
                                    {!! $article->details !!}
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
                    <div class="section-padding is-5em">
                        <div class="section_heading-wrap">
                            <h1 class="h1">Relevant Articles</h1>
                        </div>
                        <div class="w-dyn-list">
                            <div role="list" class="blog_relevant-collection-list w-dyn-items">
                                @foreach ($articles as $artcl)
                                    @php
                                        $articleImgs = json_decode($artcl->images);
                                    @endphp
                                    <div role="listitem" class="blog_relevant-collection-item w-dyn-item"><a
                                            href="{{ route('frontend.articleSingle', \Illuminate\Support\Str::slug($artcl->title)) }}?articleid={{ $artcl->id }}"
                                            class="blog_link w-inline-block">
                                            <div class="img_overflow"><img alt="" loading="lazy"
                                                    src="{{ asset($articleImgs[0]) }}"
                                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 940px"
                                                    srcset="{{ asset($articleImgs[0]) }}"
                                                    class="blog_item-img" /></div>
                                            <div class="blog_card-content">
                                                {!! \Illuminate\Support\Str::limit(strip_tags($artcl->details), 200) !!}
                                            </div>
                                        </a></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
