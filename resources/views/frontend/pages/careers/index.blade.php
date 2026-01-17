@extends('frontend.pages.shared.app')
@php
    $logo = \App\Models\Admin\Logo::first();
    $aboutus = \App\Models\Admin\AboutUs::first();
    $contact = \App\Models\Admin\Contact::first();
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
                                <div class="page_breadcrumb-wrap"><a href="{{ url('/') }}" class="page_breadcrumb-text">Home</a>
                                    <div class="page_breadcrumb-text">/</div><a href="/people/careers" aria-current="page"
                                        class="page_breadcrumb-text w--current">Careers</a>
                                </div>
                            </div>
                            <h1 class="h-xl">Careers</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="about_hero">
                        <p class="page_sub-heading is-center">At Archipelago, we&#x27;re a passionate, close-knit team
                            fostering a
                            respectful and open culture of design thinking. Enjoy a flexible, positive work environment in
                            our
                            heritage-listed Brisbane studio.</p>
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
                                <h2 class="h1">The Opportunity</h2>
                            </div>
                            <div class="section_content-grid is-2">
                                <div id="w-node-_1bedce97-c488-3257-35e9-f6ebe9457569-f9585fae" class="section_info-wrap">
                                    <p class="page_sub-heading">We are seeking expressions of interest from passionate city
                                        makers to
                                        join our growing team!</p>
                                    <p class="p-70">Our multi-talented team excels in city making through architecture,
                                        urban design,
                                        landscape architecture, and planning. From intricate master plans to impactful urban
                                        projects and
                                        interiors, we serve a broad range of public and private sectors. Our work aims for
                                        lasting,
                                        positive impact on communities.<br /><br />We&#x27;re based in a light filled modern
                                        office,
                                        interconnected with a stunning heritage-listed building in central Brisbane, steps
                                        away from the
                                        Queen Street Mall. With easy access to public transport and great dining options,
                                        our location is
                                        as vibrant as our work culture. We&#x27;re proud of our award winning success so far
                                        and are
                                        geared up for an even more impactful future.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section-padding is-5em">
                            <div class="section_middle">
                                <div data-animate="" class="vertical_0-5em">
                                    <div class="img_overflow"><img
                                            src="https://cdn.prod.website-files.com/65249822a54c89915817034b/69685a45d12f90844c96d9e3_Archipelago-6890Final.webp"
                                            loading="lazy" alt="" class="img is-wide" /></div>
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
                    <div class="section-padding is-5em is-why">
                        <div class="section_heading-wrap">
                            <h2 class="h1">Why Archipelago</h2>
                        </div>
                        <div class="section_content-grid is-2">
                            <div id="w-node-fdfc8a19-ae3c-0b67-98e9-65f340e90f01-f9585fae"
                                class="section_info-wrap is-careers">
                                <p>People are at the heart of everything we do. We celebrate diversity—whether it&#x27;s
                                    ethnic,
                                    cultural, social, or gender—and invite people from all walks of life to join our team.
                                    Our flexible
                                    work environment includes competitive pay, a 9-day full-time work fortnight, and options
                                    to work
                                    from home.<br /><br /></p>
                            </div>
                            <div class="section_info-wrap is-job">
                                <p class="p-large">We&#x27;re not just passionate about the work we do with our clients;
                                    we&#x27;re
                                    equally dedicated to creating a workplace where everyone loves what they do.</p>
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
                                <h2 class="h1">Job Openings</h2>
                            </div>
                            <div class="section_content-grid is-2">
                                <div id="w-node-_3d1a6dcd-c6c1-c633-6421-785543301ff8-f9585fae"
                                    class="section_info-wrap is-careers">
                                    <p>Senior Leadership Role<br />‍<br />Are you a forward thinking, industry-leading
                                        architect keen to
                                        live, work, design and deliver in the River City? With exciting new opportunities
                                        across a range
                                        of scales and sectors, we are looking to strengthen the talented and energetic
                                        Archipelago team
                                        with a <strong>practice design and delivery leader. </strong>Working
                                        alongside<strong> </strong>leading architects and urban designers Peter Edwards and
                                        Peter
                                        Richards, apply your passion, drive, and design leadership skills to collaboratively
                                        shape our
                                        growth into the future. If this is you, let’s start a conversation!<br />‍<br />At
                                        Archipelago, we
                                        blend expertise in architecture, landscape and urban design with a passion for
                                        city-making.
                                        We&#x27;re situated in a light-filled modern studio in Brisbane&#x27;s vibrant CBD,
                                        the perfect
                                        backdrop for innovation. We pride ourselves on a work culture that&#x27;s as diverse
                                        and inclusive
                                        as it is professionally rewarding. <br /> <br /><br /><strong
                                            class="bold-text">‍<br /><br />Why
                                            Archipelago?<br />People are central to both our work and our practice. We value
                                            ethnic,
                                            cultural, social, and gender diversity, and encourage people from all
                                            backgrounds to apply.  We
                                            work strategically, diligently, and passionately with our clients to create
                                            places people want
                                            to occupy, but we also work hard together because we love what we
                                            do.<br /><br />Building the
                                            right team with the right people is important to us – all our team members are
                                            people we respect
                                            and care for.  We offer competitive remuneration packages and a highly flexible
                                            and desirable
                                            workplace culture.<br /><br />How to Apply<br />Please forward all expressions
                                            of interest
                                            to recruitment@archipelago.com.au.  All applications will be treated
                                            confidentially. We thank
                                            you for your time and efforts in applying to Archipelago, but advise that only
                                            those candidates
                                            shortlisted for an interview will be contacted.</strong><br /><br /></p><a
                                        href="mailto:recruitment@archipelago.com.au?subject=Hey%2C%20Archipelago!%20%F0%9F%91%8B"
                                        class="button w-inline-block">
                                        <div class="button_label">Send Us Your Resume</div>
                                        <div class="button_arrow w-embed"><svg width="100%" style=""
                                                viewBox="0 0 23 17" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                    fill="currentColor" />
                                            </svg></div>
                                    </a>
                                </div>
                                <div class="section_info-wrap is-job">
                                    <p class="p-large">We are seeking expressions of interest from passionate individuals to
                                        join our
                                        great team!</p>
                                </div>
                            </div>
                        </div>
                        <div class="section_middle"><img class="careers_city-img"
                                src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653871397e1136fb05d51386_archipelago_citycape.webp"
                                alt="" sizes="100vw" loading="lazy" data-animate=""
                                srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/653871397e1136fb05d51386_archipelago_citycape-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/653871397e1136fb05d51386_archipelago_citycape-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/653871397e1136fb05d51386_archipelago_citycape-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/653871397e1136fb05d51386_archipelago_citycape.webp 1200w" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
