<nav class="nav" style="">
    <style>
        .marquee-box {
            background: rgb(118, 21, 21);
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            padding: 1px 0;
        }

        .marquee-track {
            display: flex;
            width: max-content;
            transform: translateX(0);
            animation: marquee 30s linear infinite;
        }

        .marquee-track span {
            color: #fff;
            font-size: 16px;
            padding-right: 0;
            /* no gap */
            color: white !important;
        }

        @keyframes marquee {
            0% {
                transform: translateX(60%);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* .nav,
        .nav_menu,
        .nav_dropdown,
        .nav_dropdown-links, */
        .expertise-dropdown {
            overflow: visible !important;
        }

        /* Positioning */
        .expertise-dropdown {
            position: relative;
        }

        /* Dropdown menu */
        .dropdown-menu {
            position: absolute;
            top: 100%;
            /* left: -10%; */
            width: 350px;
            background: #fff;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            padding: 8px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.25s ease;
            z-index: 999999;
        }

        /* Dropdown items */
        .dropdown-menu a {
            display: block;
            padding: 12px 18px;
            color: #111;
            text-decoration: none;
        }

        .dropdown-menu a:hover {
            background: #f5f5f5;
        }

        /* SHOW ON HOVER */
        .expertise-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .mobile-menu-nav-link {
            display: none;
        }

        @media (max-width: 450px) {

            /* styles here */
            .desktop-menu-nav-link {
                display: none;
            }

            .mobile-menu-nav-link {
                display: block;
            }
        }
    </style>
    <div class="w-layout-blockcontainer container w-container">
        <div class="marquee-box">
            <div class="marquee-track">
                <span>Pixscap is under construction — something amazing is coming soon 🚧</span>
                <span>Pixscap is under construction — something amazing is coming soon 🚧</span>
                <span>Pixscap is under construction — something amazing is coming soon 🚧</span>
                <span>Pixscap is under construction — something amazing is coming soon 🚧</span>
                <span>Pixscap is under construction — something amazing is coming soon 🚧</span>
                <span>Pixscap is under construction — something amazing is coming soon 🚧</span>
            </div>
        </div>
        <div class="page-padding">
            <div class="nav_mobile">
                <div class="nav_logo">
                    <div class="nav_logo-crop">
                        <div class="nav_logo-rchipelago w-embed"><img
                                src="{{ asset($logo ? $logo->main_site_header_logo : '') }}" alt="">
                        </div>
                    </div>
                    <div class="nav_logo-dot w-embed" style="width: 70px !important;">

                        <a href="{{ url('/') }}"> <img style="width:300px;"
                                src="{{ asset($logo ? $logo->main_site_logo3 : '') }}" alt=""></a>
                    </div>
                </div>
                <div class="nav_hamburger">
                    <div class="nav_hamburger-icon w-embed"><svg width="100%" style="" viewBox="0 0 32 32"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 24H28V21.3333H4V24ZM4 17.3333H28V14.6667H4V17.3333ZM4 8V10.6667H28V8H4Z"
                                fill="currentColor" />
                        </svg></div>
                </div>
            </div>

            <div class="nav_menu">
                <div class="nav_link-wrap" style="width: 100px;border-right: 1px solid black"><a href="{{ url('/') }}" class="nav_link"
                        style="color: black !important">Home</a>
                    <div class="nav_link-underline"></div>
                </div>
                <div class="nav_link-wrap" style="width: 120px;border-right: 1px solid black"><a href="{{ route('frontend.aboutUs') }}" class="nav_link"
                        style="color: black !important">About Us</a>
                    <div class="nav_link-underline"></div>
                </div>
                <div class="nav_link-wrap" style="width: 100px;border-right: 1px solid black"><a href="{{ route('frontend.team') }}" class="nav_link"
                        style="color: black !important">Team</a>
                    <div class="nav_link-underline"></div>
                </div>
                
                @php
                    $services = \App\Models\Admin\Service::where([['status', 1], ['delete', 0]])->get();
                @endphp
                <div class="nav_dropdown">
                    <div class="nav_dropdown-label" style="width: 200px;border-right: 1px solid black">
                        <div class="nav_link is-label" >Our Services</div>
                        <div class="nav_chevron w-embed"><svg width="100%" style="" viewBox="0 0 21 11"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.65625 0.86316L1.34399 0.137207L10.5001 8.81143L19.6562 0.137207L20.344 0.86316L10.5001 10.1889L0.65625 0.86316Z"
                                    fill="currentColor" />
                            </svg></div>
                    </div>
                    <div class="nav_dropdown-links">
                        <div class="nav_link-wrap"><a href="{{ route('frontend.services') }}?type=Our Expertise"
                                class="nav_link is-dropdown"> Our Expertise</a>
                            <div class="nav_link-underline"></div>


                        </div>
                        <ul style="list-style: none;margin: 0;padding:0;">
                            @foreach ($services as $service)
                                @if ($service->type == 'Our Expertise')
                                    <li> <a style="text-transform: capitalize !important;" href="{{ route('frontend.serviceSingle', \Illuminate\Support\Str::slug($service->service_name)) }}?serviceid={{ $service->id }}">{{ \Illuminate\Support\Str::title($service->service_name) }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="nav_dropdown">
                    <div class="nav_dropdown-label" style="width: 290px;border-right: 1px solid black">
                        <div class="nav_link is-label">Supporting Services</div>
                        <div class="nav_chevron w-embed"><svg width="100%" style="" viewBox="0 0 21 11"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.65625 0.86316L1.34399 0.137207L10.5001 8.81143L19.6562 0.137207L20.344 0.86316L10.5001 10.1889L0.65625 0.86316Z"
                                    fill="currentColor" />
                            </svg></div>
                    </div>
                    <div class="nav_dropdown-links">
                        <div class="nav_link-wrap"><a href="{{ route('frontend.services') }}?type=Supporting Service"
                                class="nav_link is-dropdown"> Other Services</a>
                            <div class="nav_link-underline"></div>
                        </div>
                        <ul style="list-style: none;margin: 0;padding:0">
                            @foreach ($services as $service)
                                @if ($service->type == 'Supporting Service')
                                    <li><a href="{{ route('frontend.serviceSingle', \Illuminate\Support\Str::slug($service->service_name)) }}?serviceid={{ $service->id }}">{{ \Illuminate\Support\Str::title($service->service_name) }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="nav_link-wrap"  style="width: 100px;border-right: 1px solid black"><a
                        href="{{ route('frontend.project') }}" class="nav_link" >Works</a>
                    <div class="nav_link-underline"></div>
                </div>
                <div class="nav_link-wrap" style="width: 100px;border-right: 1px solid black"><a href="{{ route('frontend.careers') }}" class="nav_link"
                        style="color: black !important">Career</a>
                    <div class="nav_link-underline"></div>
                </div>
                {{-- <div class="nav_dropdown">
                    <div class="nav_dropdown-label">
                        <div class="nav_link is-label">People</div>
                        <div class="nav_chevron w-embed"><svg width="100%" style="" viewBox="0 0 21 11"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.65625 0.86316L1.34399 0.137207L10.5001 8.81143L19.6562 0.137207L20.344 0.86316L10.5001 10.1889L0.65625 0.86316Z"
                                    fill="currentColor" />
                            </svg></div>
                    </div>
                    <div class="nav_dropdown-links">

                        <div class="nav_link-wrap"><a href="{{ route('frontend.careers') }}" class="nav_link is-dropdown">Careers</a>
                            <div class="nav_link-underline"></div>
                        </div>
                    </div>
                </div> --}}

                <div class="nav_link-wrap" style="width: 100px;border-right: 1px solid black"><a href="{{ route('frontend.article') }}" class="nav_link"
                        style="color: black !important">Articles</a>
                    <div class="nav_link-underline"></div>
                </div>
                <div class="nav_link-wrap" ><a href="{{ route('frontend.contact') }}" class="nav_link">Contact</a>
                    <div class="nav_link-underline"></div>
                </div>
            </div>
            <div class="nav_reveal">
                <div class="nav_bottom">
                    <div class="nav_logo is-desktop">
                        <a aria-label="Archipelago Homepage" href="{{ url('/') }}" aria-current="page"
                            class="w-inline-block w--current">
                            <div class="nav_logo-a">
                                <img src="{{ asset($logo ? $logo->main_site_logo2 : '') }}" alt="Logo">
                            </div>
                        </a>
                        <div class="nav_logo-crop">
                            <div class="nav_logo-rchipelago w-embed">
                            </div>
                        </div>
                    </div>
                    <form action="/search" class="search_form w-form"><input class="submit-field is-search w-input"
                            maxlength="256" name="query" placeholder="Search…" type="search" id="search-3"
                            required="" /><input type="submit" title="Search"
                            class="submit-button is-search w-button" value="" /></form>
                </div>
            </div>
        </div>
    </div>
    <div class="nav_gradient"></div>
</nav>
