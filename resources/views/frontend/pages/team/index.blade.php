@extends('frontend.pages.shared.app')
@php
    $logo = \App\Models\Admin\Logo::first();
    $aboutus = \App\Models\Admin\AboutUs::first();
    $teams = \App\Models\Admin\Team::where([['status', 1], ['delete', 0]])->get();
@endphp
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
                                <div class="page_breadcrumb-wrap"><a href="/" class="page_breadcrumb-text">Home</a>
                                    <div class="page_breadcrumb-text">/</div><a href="/people/team" aria-current="page"
                                        class="page_breadcrumb-text w--current">Team</a>
                                </div>
                            </div>
                            <h1 class="h-xl">Team</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-page">
                        <div class="page_team-wrap">
                            <div class="team_collection-wrapper w-dyn-list">
                                <div role="list" class="team_collection-list w-dyn-items">
                                    @foreach ($teams as $team)
                                        <div role="listitem" class="team_collection-item w-dyn-item"><a
                                                href="{{ route('frontend.teamMember',\Illuminate\Support\Str::slug( $team->team_member_name) ) }}?tmid={{ $team->id }}"
                                                class="team_collection-link w-inline-block">
                                                <div class="team_photo-ratio"><img alt="" loading="lazy"
                                                        src="{{ asset($team->team_member_image) }}"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 939.53125px"
                                                        srcset="{{ asset($team->team_member_image) }}"
                                                        class="ratio_img is-team-photo-hover" /><img alt=""
                                                        loading="lazy"
                                                        src="{{ asset($team->team_member_image) }}"
                                                        sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 939.53125px"
                                                        srcset="{{ asset($team->team_member_image) }}"
                                                        class="ratio_img is-team-photo-main" />
                                                    <div class="ratio_img-placeholder"></div>
                                                </div>
                                                <div class="team_item-info">
                                                    <div class="team_item-name">{{ $team->team_member_name }}</div>
                                                    <div class="team_item-position">{{ $team->team_member_desig }}</div>
                                                </div>
                                            </a>
                                            <div class="team_director-identifier"></div>
                                        </div>
                                    @endforeach
                                </div>
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
                        <div id="w-node-cfb97ec3-8808-cc9d-a022-0136105c2366-105c2362" class="hiring_img-ratio"><img
                                src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table.webp"
                                loading="lazy"
                                sizes="(max-width: 767px) 100vw, (max-width: 991px) 727.9921875px, 939.9921875px, 100vw"
                                srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table-p-1600.webp 1600w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65540f3105b0d57b256f81b0_Two%20Archipelago%20team%20members%20having%20a%20conversation%20at%20a%20table.webp 2003w"
                                alt="" class="ratio_img" /></div>
                        <div id="w-node-cfb97ec3-8808-cc9d-a022-0136105c2368-105c2362" class="hiring_info-wrap">
                            <div class="hiring_logo w-embed"><svg width="100%" style="" viewBox="0 0 51 49"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30.4866 31.0518H13.5001L21.969 8.93703L29.625 28.926V28.9185L37.4016 48.9999H43.9399V44.394L26.7432 1.00537H17.1968L0 44.394V48.9999H6.57763L10.6761 38.3116H27.6898L30.4866 31.0518Z"
                                        fill="currentColor" />
                                    <path
                                        d="M50.9284 5.1395C50.9284 4.123 50.627 3.12934 50.0623 2.28415C49.4975 1.43897 48.6948 0.780217 47.7557 0.39122C46.8166 0.00222301 45.7832 -0.0995511 44.7862 0.0987578C43.7893 0.297067 42.8735 0.78655 42.1547 1.50532C41.436 2.2241 40.9465 3.13988 40.7482 4.13684C40.5499 5.13381 40.6516 6.16718 41.0406 7.1063C41.4296 8.04543 42.0884 8.84811 42.9336 9.41284C43.7788 9.97758 44.7724 10.279 45.7889 10.279C47.152 10.279 48.4592 9.73752 49.4231 8.77368C50.3869 7.80983 50.9284 6.50258 50.9284 5.1395Z"
                                        fill="currentColor" />
                                </svg></div>
                            <div class="hiring_info-contain">
                                <div class="hiring_callout">We’re hiring!</div>
                                <p class="hiring_heading">Are you a passionate city maker eager to leave your mark on the
                                    urban
                                    landscape?</p>
                                <p class="hiring_p">Join our dynamic Archipelago team and be part of crafting spaces that
                                    will shape
                                    Australia&#x27;s cities for generations to come.</p><a href="/people/careers"
                                    class="button is-hiring w-inline-block">
                                    <div class="button_label">Join The Team</div>
                                    <div class="button_arrow w-embed"><svg width="100%" style="" viewBox="0 0 23 17"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
@endsection
