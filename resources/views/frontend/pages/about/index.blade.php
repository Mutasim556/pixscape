@extends('frontend.pages.shared.app')
@php
    $logo = \App\Models\Admin\Logo::first();
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
                                        <div class="page_logo w-embed"> <img src="{{ $logo->main_site_footer_logo }}" style="width:100%;" alt=""></div>
                                    </a></div>
                                <div class="page_breadcrumb-wrap"><a href="/" class="page_breadcrumb-text">Home</a>
                                    <div class="page_breadcrumb-text">/</div><a href="/practice/about-us"
                                        aria-current="page" class="page_breadcrumb-text w--current">About Us</a>
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
                                        src="https://player.vimeo.com/video/877769356?background=1"
                                        style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                        allow="autoplay; fullscreen" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <p class="page_sub-heading is-center">From concept to delivery, Archipelago offers holistic
                            expertise in architecture, urban design, landscape and strategic planning.</p>
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
                                    <p>Our thoughtful consideration of the bigger picture - including how different
                                        services interact and complement one another demonstrates our thorough
                                        understanding of industry requirements, regulations, expectations and
                                        opportunities. <br />We believe architecture does not exist in isolation, so
                                        our services and expertise don’t either.</p>
                                </div>
                            </div>
                        </div>
                        <div class="section_middle is-accordian">
                            <div class="about_services-wrap"><img class="about_left-img"
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65441a596dd9553796885668_archipelago_about-services.webp"
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture team"
                                    sizes="(max-width: 767px) 100vw, (max-width: 991px) 95vw, 940px" loading="lazy"
                                    data-animate=""
                                    srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/65441a596dd9553796885668_archipelago_about-services-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65441a596dd9553796885668_archipelago_about-services-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65441a596dd9553796885668_archipelago_about-services-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/65441a596dd9553796885668_archipelago_about-services.webp 1280w" />
                            </div>
                            <div class="about_services-wrap">
                                <div class="vertical_1-5em">
                                    <div class="accordion_heading">Our Expertise</div>
                                    <div class="accordion_wrap">
                                        <div class="accordion_item">
                                            <div class="accordion_toggle">
                                                <div>Architecture + Interiors</div>
                                                <div class="accordion_icon">
                                                    <div class="accordion_minus is-vertical w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                    <div class="accordion_minus w-embed"><svg width="100%" style=""
                                                            viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="accordion_content">
                                                <div class="accordion_content-padding">
                                                    <div class="rich-text w-richtext">
                                                        <ul role="list">
                                                            <li>Full architectural design and documentation services
                                                            </li>
                                                            <li>Site testing</li>
                                                            <li>Feasibility studies and business cases</li>
                                                            <li>Due diligence</li>
                                                            <li>Interior architecture including furniture and
                                                                finishes specification</li>
                                                            <li>Research and publications</li>
                                                            <li>3D Modelling, fly-throughs + renders +
                                                                visualisations</li>
                                                            <li>Graphic design</li>
                                                            <li>Corridor + land use strategies</li>
                                                            <li>Graphic communication – illustrative, diagrammatic +
                                                                urban sketch</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_item">
                                            <div class="accordion_toggle">
                                                <div>Urban Design</div>
                                                <div class="accordion_icon">
                                                    <div class="accordion_minus is-vertical w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                    <div class="accordion_minus w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="accordion_content">
                                                <div class="accordion_content-padding">
                                                    <div class="rich-text w-richtext">
                                                        <ul role="list">
                                                            <li>Master planning</li>
                                                            <li>Precinct / neighbourhood strategy + design</li>
                                                            <li>Feasibility studies and business cases</li>
                                                            <li>Due diligence</li>
                                                            <li>Character assessment</li>
                                                            <li>Public life analysis</li>
                                                            <li>Graphic design</li>
                                                            <li>Development guidelines</li>
                                                            <li>Built form guidelines</li>
                                                            <li>Public realm guidelines + public art guidelines</li>
                                                            <li>City wide visioning</li>
                                                            <li>Site design + precedent studies</li>
                                                            <li>Corridor + land use strategies</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_item">
                                            <div class="accordion_toggle">
                                                <div>Landscape Architecture</div>
                                                <div class="accordion_icon">
                                                    <div class="accordion_minus is-vertical w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                    <div class="accordion_minus w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="accordion_content">
                                                <div class="accordion_content-padding">
                                                    <div class="rich-text w-richtext">
                                                        <ul role="list">
                                                            <li>Full landscape architectural design and
                                                                documentation services </li>
                                                            <li>Softscape and hardscape treatments of public realm
                                                                and built form</li>
                                                            <li>Public domain strategies</li>
                                                            <li>Place activation strategies  </li>
                                                            <li>Place-scaled design</li>
                                                            <li>Integrated urban design &amp; landscape architecture
                                                                design treatment in major transport infrastructure
                                                                (roadways, bridges, rail and airports)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vertical_1-5em">
                                    <div class="accordion_heading">Supporting Services</div>
                                    <div class="accordion_wrap">
                                        <div class="accordion_item">
                                            <div class="accordion_toggle">
                                                <div>Strategic Planning + Communications</div>
                                                <div class="accordion_icon">
                                                    <div class="accordion_minus is-vertical w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                    <div class="accordion_minus w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="accordion_content">
                                                <div class="accordion_content-padding">
                                                    <div class="rich-text w-richtext">
                                                        <ul role="list">
                                                            <li>Strategic planning </li>
                                                            <li>GIS (Geographic Information Systems) studies +
                                                                analysis</li>
                                                            <li>Planning / policy, process and programmatic
                                                                recommendations</li>
                                                            <li>Graphic planning communication</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_item">
                                            <div class="accordion_toggle">
                                                <div>Consultation + Engagement</div>
                                                <div class="accordion_icon">
                                                    <div class="accordion_minus is-vertical w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                    <div class="accordion_minus w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="accordion_content">
                                                <div class="accordion_content-padding">
                                                    <div class="rich-text w-richtext">
                                                        <ul role="list">
                                                            <li>Enquiry by Design workshops utlising sketching,
                                                                mapping</li>
                                                            <li>3D printing, collage, instant graphic feedback</li>
                                                            <li>Design charettes</li>
                                                            <li>Co-design</li>
                                                            <li>Online + in person engagement </li>
                                                            <li>Creative engagement styles including Urban Sketching
                                                                and collages </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion_item">
                                            <div class="accordion_toggle">
                                                <div>Design Review</div>
                                                <div class="accordion_icon">
                                                    <div class="accordion_minus is-vertical w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                    <div class="accordion_minus w-embed"><svg width="100%"
                                                            style="" viewBox="0 0 12 2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                                            <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                            <div class="accordion_content">
                                                <div class="accordion_content-padding">
                                                    <div class="rich-text w-richtext">
                                                        <ul role="list">
                                                            <li>Design + peer review – for the State, local
                                                                government + private clients</li>
                                                            <li>Expert evidence (urban design, architecture + visual
                                                                amenity)</li>
                                                            <li>Independent design panels</li>
                                                            <li>Precinct + development modelling</li>
                                                            <li>Visual impact assessment</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <h2 class="h1">The Archipelago Framework</h2>
                        </div>
                        <div class="section_middle is-framework">
                            <p id="w-node-cd87aaec-6c01-ac6f-6c96-4531983be464-f9585fac">Our approach, driven by
                                creative ideas and grounded in evidence-based research, unveils opportunities often
                                unseen at a project&#x27;s inception. This methodology ensures we reach positive,
                                transformative outcomes. <br /><br />Our portfolio of city-shaping master plans and
                                extensive urban projects showcases our ability to harness opportunities within the
                                context. We unlock each site&#x27;s full potential, crafting public spaces and
                                respectful buildings that enhance the unique character of the neighbourhoods we
                                engage with.</p>
                            <p id="w-node-_59e720e2-a366-09ff-993e-12e52932f5ea-f9585fac">Looking widely, we are
                                able to discern opportunities, patterns, and connections. This results in improved
                                project quality and amenity, without compromising on cost-effectiveness.
                                <br /><br />The value we infuse through design benefits not only our clients but
                                also those who live, learn, work, and play in the places we shape.
                            </p>
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
                                loading="lazy" id="w-node-_377ff006-e0e2-49af-94ed-825514fe3db9-f9585fac" sizes="100vw"
                                alt=""
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
                            <div id="w-node-_33e92808-81cb-aa3a-5bfc-189235d7f126-f9585fac" class="vertical_1em">
                                <h5>People</h5>
                                <p class="p-70">People are central to our ethos. We infuse people-centric design
                                    into our entire process, from idea inception to stakeholder engagement and the
                                    ultimate user experience. <br />We value good communication, diversity,
                                    inclusivity and authentic approaches to collaboration between clients,
                                    stakeholders, and consultants, fostering shared knowledge to achieve outstanding
                                    project outcomes.</p>
                            </div>
                            <div id="w-node-_77f728b0-18ae-1f69-50bc-b84e5ef8774c-f9585fac" class="vertical_1em">
                                <h5>Cities</h5>
                                <p class="p-70">Our expanding Australian cities yield vibrant hubs for people to
                                    live, work and play. Archipelago approach each project with best-for-city
                                    outcomes in mind. Regardless of scale, each project should prioritise human
                                    experience and enduring value. We harness the interconnectedness of urban
                                    spaces, looking beyond the boundary of the site to leverage a two-way value
                                    exchange and project uplift. </p>
                            </div>
                            <div id="w-node-_933b87ae-73fa-839b-d917-0c79c2b76889-f9585fac" class="vertical_1em">
                                <h5>Design</h5>
                                <p class="p-70">The relationship between buildings, landscapes and the space
                                    between is intrinsic and essential. Working together across disciplines,
                                    Archipelago’s ability to create integrated, responsive design strategies and
                                    compelling urban propositions is at the centre of our creative practice. We
                                    immerse ourselves in understanding context, Country, culture, and community,
                                    approaching each project with curiosity and a passion for fresh ideas.</p>
                            </div>
                            <div id="w-node-a811187a-9915-f02b-186a-03a8431b2c22-f9585fac" class="vertical_1em">
                                <h5>The AND Conversation</h5>
                                <p class="p-70">At Archipelago, we embrace “the AND conversation.&quot; We adopt
                                    a city-making mindset, facilitating positive, robust discussions and strategic
                                    design thinking. We don’t settle on ideas; we forge new and exciting concepts,
                                    transforming site challenges into opportunities, while amplifying and exceeding
                                    your project&#x27;s expectations.</p>
                            </div>
                            <div id="w-node-fde42c5d-62a0-0250-c5fb-af2a4bdb47cd-f9585fac" class="vertical_1em">
                                <h5>Collaboration</h5>
                                <p class="p-70">Archipelago embodies the spirit of collaboration – our namesake
                                    is derived from a collection of islands united to form a single continent. Our
                                    team thrives on unexpected outcomes triggered through meaningful engagement with
                                    communities, stakeholders, and experts in their field. <br />‍<br />Our
                                    collaborative workshops ensure rapid stakeholder engagement, delivering
                                    results-driven solutions to complex design challenges. Peter Edwards and Peter
                                    Richards, our urban design leaders, are Queensland&#x27;s most esteemed Enquiry
                                    by Design (EBD) workshop facilitators.</p>
                            </div>
                            <div id="w-node-b782ba05-3f4a-5af0-f18e-63a34d35cbcf-f9585fac" class="vertical_1em">
                                <h5>Provocation</h5>
                                <p class="p-70">At Archipelago, we aren’t afraid to challenge the status quo, ask
                                    the tough questions and explore unconventional hidden potential in every
                                    project. We believe good design is realised through rigorous investigation and
                                    collaboration, and we take great pride in our ability to unlock new and exciting
                                    opportunities through our curated design process. </p>
                            </div>
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
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d83dc8c3d9629d3fa09fb_Transurban.svg.webp"
                                            alt="" sizes="100vw"
                                            srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d83dc8c3d9629d3fa09fb_Transurban.svg-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d83dc8c3d9629d3fa09fb_Transurban.svg.webp 568w"
                                            class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c925370b744f41925ebcd_NSW%20Gov.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c9241824c04859c8fe3eb_City%20of%20Gold%20Coast.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c923532fbbe3db6768089_DWP.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c9229824c04859c8fd060_EDQ.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c921a5f8175418a97c409_McInnes%20Wilson.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c92069438a8ab2c5dbfa6_Walker.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91fada582d545204257c_HG.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91eb441841dbbaa04937_NRF.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91dda4b57efb1d8c09f6_Georgiou.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91cdffb87556681f9b7e_DR.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91c126a9d252dae49031_stockland.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d8282c6860bf02c1e47a2_654c91b5d62511a4fd5b42a7_DGC.svg.webp"
                                            alt="" sizes="100vw"
                                            srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d8282c6860bf02c1e47a2_654c91b5d62511a4fd5b42a7_DGC.svg-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d8282c6860bf02c1e47a2_654c91b5d62511a4fd5b42a7_DGC.svg.webp 573w"
                                            class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91aad229a24e8ae1d323_WSP.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c919e8a1050afef2327bd_QUT.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91913dffee07f786d6e8_QIC.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c917f77adfcb8ec0e5b65_Grimshaw.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c917420ae49ad8fbdbe67_Architectus.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c9156d8dc806fbba3d2f6_CRRDA.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c779b6d4563a7de5b6338_Noosa%20Council.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c778fa38bb67400fe8a6e_Bundaberg.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c778021a680b8b0351cee_Qld%20Airports.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d830b728a0c541e19cf81_654c7772e6cbfb14d3d8d017_City%2Bof%2BLogan.svg.webp"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7768794fb302dae0296d_MM.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c775dd62511a4fd48e229_Stantec.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7753e94311894bc788c4_Griffith.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7748d62511a4fd48d80c_Limitless.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c773d578e1e693947a29b_lendlease.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654da43ff5bb063340f0e198_translink.webp"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c770586f3fe6aa1308e06_Qld%20Gov_Health.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76f5b6323d8e7c0c1f58_City%20Moreton%20Bay.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d844aa27da8877a0730ea_654c76e921a680b8b0349798_ARM_logo.svg.webp"
                                            alt="" sizes="100vw"
                                            srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d844aa27da8877a0730ea_654c76e921a680b8b0349798_ARM_logo.svg-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d844aa27da8877a0730ea_654c76e921a680b8b0349798_ARM_logo.svg.webp 819w"
                                            class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76ddffb87556680d078e_BGE.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76cf08a42a6827434ea7_BCC.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76b68a1050afef0f6a5c_Qld%20Gov_CHDE.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76976d4563a7de5ac51b_Qld%20Gov%202.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7683ea1f77eae3e66404_GHD.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c767477adfcb8ecfb7f0c_Qld%20Rail.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76635b00242c6dca364e_minter-logo.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="eager"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76581f8c21fd692416ac_Acciona.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                </div>
                            </div>
                            <div class="clients_marquee_list-wrapper w-dyn-list">
                                <div role="list" class="clients_marquee_list w-dyn-items">
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d83dc8c3d9629d3fa09fb_Transurban.svg.webp"
                                            alt="" sizes="100vw"
                                            srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d83dc8c3d9629d3fa09fb_Transurban.svg-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d83dc8c3d9629d3fa09fb_Transurban.svg.webp 568w"
                                            class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c925370b744f41925ebcd_NSW%20Gov.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c9241824c04859c8fe3eb_City%20of%20Gold%20Coast.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c923532fbbe3db6768089_DWP.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c9229824c04859c8fd060_EDQ.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c921a5f8175418a97c409_McInnes%20Wilson.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c92069438a8ab2c5dbfa6_Walker.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91fada582d545204257c_HG.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91eb441841dbbaa04937_NRF.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91dda4b57efb1d8c09f6_Georgiou.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91cdffb87556681f9b7e_DR.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91c126a9d252dae49031_stockland.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d8282c6860bf02c1e47a2_654c91b5d62511a4fd5b42a7_DGC.svg.webp"
                                            alt="" sizes="100vw"
                                            srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d8282c6860bf02c1e47a2_654c91b5d62511a4fd5b42a7_DGC.svg-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d8282c6860bf02c1e47a2_654c91b5d62511a4fd5b42a7_DGC.svg.webp 573w"
                                            class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91aad229a24e8ae1d323_WSP.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c919e8a1050afef2327bd_QUT.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c91913dffee07f786d6e8_QIC.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c917f77adfcb8ec0e5b65_Grimshaw.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c917420ae49ad8fbdbe67_Architectus.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c9156d8dc806fbba3d2f6_CRRDA.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c779b6d4563a7de5b6338_Noosa%20Council.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c778fa38bb67400fe8a6e_Bundaberg.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c778021a680b8b0351cee_Qld%20Airports.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d830b728a0c541e19cf81_654c7772e6cbfb14d3d8d017_City%2Bof%2BLogan.svg.webp"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7768794fb302dae0296d_MM.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c775dd62511a4fd48e229_Stantec.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7753e94311894bc788c4_Griffith.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7748d62511a4fd48d80c_Limitless.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c773d578e1e693947a29b_lendlease.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654da43ff5bb063340f0e198_translink.webp"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c770586f3fe6aa1308e06_Qld%20Gov_Health.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76f5b6323d8e7c0c1f58_City%20Moreton%20Bay.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d844aa27da8877a0730ea_654c76e921a680b8b0349798_ARM_logo.svg.webp"
                                            alt="" sizes="100vw"
                                            srcset="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d844aa27da8877a0730ea_654c76e921a680b8b0349798_ARM_logo.svg-p-500.webp 500w, https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654d844aa27da8877a0730ea_654c76e921a680b8b0349798_ARM_logo.svg.webp 819w"
                                            class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76ddffb87556680d078e_BGE.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76cf08a42a6827434ea7_BCC.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76b68a1050afef0f6a5c_Qld%20Gov_CHDE.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76976d4563a7de5ac51b_Qld%20Gov%202.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c7683ea1f77eae3e66404_GHD.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c767477adfcb8ecfb7f0c_Qld%20Rail.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76635b00242c6dca364e_minter-logo.svg"
                                            alt="" class="clients_marquee_img" /></div>
                                    <div role="listitem" class="clients_marquee_item w-dyn-item"><img loading="lazy"
                                            src="https://cdn.prod.website-files.com/6526826b6b1a6430815a209b/654c76581f8c21fd692416ac_Acciona.svg"
                                            alt="" class="clients_marquee_img" /></div>
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
                            <div id="w-node-c3ef5614-2450-0e06-946c-36b22c4ec8f8-f9585fac" class="vertical_1em">
                                <h5>We Are Inquisitive</h5>
                                <p class="p-70">Precedent-based research and benchmarking informs project
                                    analysis.</p>
                            </div>
                            <div id="w-node-_8247b9f2-3321-7bf9-f85d-c7a5e46a0c4e-f9585fac" class="vertical_1em">
                                <h5>We Are Visionary</h5>
                                <p class="p-70">Leading design thinking with big ideas and city making (best for
                                    city) outcomes in mind. </p>
                            </div>
                            <div id="w-node-_2dacb15b-6f69-77d7-d402-feae23c6c0c8-f9585fac" class="vertical_1em">
                                <h5>We Are Strategic</h5>
                                <p class="p-70">Urban context studied and leveraged to inform strategic site
                                    response and alignment with planning mechanisms.</p>
                            </div>
                            <div id="w-node-_0b872509-8259-eda9-6186-b31aee4f9be1-f9585fac" class="vertical_1em">
                                <h5>We Are Authentic</h5>
                                <p class="p-70">In our language, processes and approach.</p>
                            </div>
                            <div id="w-node-_9af1ef6e-bc46-8813-6b76-2df015c10e9f-f9585fac" class="vertical_1em">
                                <h5>We Are Engaging</h5>
                                <p class="p-70">Communication, workshop processes and stakeholder engagement is
                                    front and centre. </p>
                            </div>
                            <div id="w-node-f014cc04-f483-3c2f-0c74-13f5086f326c-f9585fac" class="vertical_1em">
                                <h5>We Are Inclusive</h5>
                                <p class="p-70">We value inclusivity and the benefits it brings to our teams and
                                    our work.</p>
                            </div>
                            <div id="w-node-c7d090c2-db33-7dcd-b7af-f659e484ca61-f9585fac" class="vertical_1em">
                                <h5>We Are Responsive</h5>
                                <p class="p-70">Project drivers / values are developed with project stakeholders
                                    to guide design direction.</p>
                            </div>
                            <div id="w-node-_30fadfab-c85e-3d1e-ca67-578010d9a712-f9585fac" class="vertical_1em">
                                <h5>We Are Integrated</h5>
                                <p class="p-70">Our team is multi-disciplinary and collaborative.</p>
                            </div>
                            <div id="w-node-f9a952dd-2c7b-5c36-1c3e-d52453c0ac25-f9585fac" class="vertical_1em">
                                <h5>We Are Rigorous</h5>
                                <p class="p-70">We work rigorously with internal, client, and consultant teams.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-6-5em">
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1">Our Sectors</h2>
                            </div>
                        </div>
                        <div class="section_middle is-sectors"><a href="/projects?sector=City+Shaping+Master+Plans"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663479176ee690074eadb_City%20shaping%20master%20plans%201.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                    class="about_sectors-img is-1" />
                                <h6>City Shaping Master Plans</h6>
                                <p class="p-70">We work with government, private sector and non-profit
                                    organisations to provide strong urban frameworks which unlock density and
                                    leverage their assets for maximum public benefit.</p>
                            </a><a href="/projects?sector=Major+Urban+Projects"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347b6791881def825b9_Major%20Urban%20Projects.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture major urban projects"
                                    class="about_sectors-img is-2" />
                                <h6>Major Urban Projects</h6>
                                <p class="p-70">Major urban projects and large-scale developments have the
                                    potential to make the greatest contribution and benefit to our cities. The
                                    creation of vibrant, connected places for people is central to any future
                                    development.</p>
                            </a><a href="/projects?sector=Olympic+Precincts+%2B+Games+Overlay"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347d7d446708ae7b01f_Frame%209279.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture plans"
                                    class="about_sectors-img is-3" />
                                <h6>Olympic Precincts + Games Overlay</h6>
                                <p class="p-70">We are subject matter experts in Athlete Villages and have
                                    proven expertise in Olympic precinct master planning, venue design and games
                                    overlay. We understand and amplify the relationship of legacy outcomes and
                                    citymaking opportunities.</p>
                            </a><a href="/projects?sector=Housing+%2B+Lifestyle"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663472845a4410ae325ee_Housing%20%2B%20Lifestyle.svg"
                                    loading="lazy" data-animate="" alt="Archipelago&#x27;s Housing and Lifestyle"
                                    class="about_sectors-img is-4" />
                                <h6>Housing + Lifestyle</h6>
                                <p class="p-70">We bring big ideas underpinned by strategic thinking to every
                                    housing project to provide innovative living solutions that support the growth
                                    of our knowledge economy and the sustainability of our future cities.</p>
                            </a><a href="/projects?sector=Public+Realm+%2B+Open+Space"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347329742981f9fa557_Public%20Realm%20%2B%20Open%20Space.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture public realm open space"
                                    class="about_sectors-img is-5" />
                                <h6>Public Realm + Open Space</h6>
                                <p class="p-70">By working together early in the design process, landscape
                                    architecture is integrated with architecture, providing high quality indoor /
                                    outdoor spaces which engage with and celebrate our subtropical climate.</p>
                            </a><a href="/projects?sector=Urban+Renewal" class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6536634731378ef64d9c5689_Urban%20Renewal.svg"
                                    loading="lazy" data-animate="" alt="Archipelago&#x27;s Urban Renewal "
                                    class="about_sectors-img is-6" />
                                <h6>Urban Renewal</h6>
                                <p class="p-70">Transformative urban renewal projects and precinct plans breathe
                                    new life into tired spaces to activate the urban experience and enhance
                                    communities and life. </p>
                            </a><a href="/projects?sector=Interiors" class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347715959ce3aff2a80_Interiors.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture Interiors"
                                    class="about_sectors-img is-4" />
                                <h6>Interiors</h6>
                                <p class="p-70">Our integrated architecture and interiors teams work together to
                                    develop the vision, select furniture and finishes and document
                                    three-dimensionally, which translates into a cohesive design strategy. </p>
                            </a><a href="/projects?sector=Transport+%2B+Infrastructure"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663473453b977e1deeb2b_Transport%20%2B%20Infrastructure.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture transport"
                                    class="about_sectors-img is-8" />
                                <h6>Transport + Infrastructure</h6>
                                <p class="p-70">We look beyond the traditional engineering and economic
                                    feasibility aspects of transport + infrastructure systems to understand the
                                    wider public realm benefits of the significant investment required in a new or
                                    existing movement system. </p>
                            </a><a href="/projects?sector=Community" class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/653663478ec5aa203fe466f7_Community.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture project"
                                    class="about_sectors-img is-9" />
                                <h6>Community</h6>
                                <p class="p-70">From youth hubs to club houses to performing arts centres, we
                                    understand the importance of community infrastructure in creating meaningful and
                                    memorable focal places which celebrate inclusivity and connectivity. </p>
                            </a><a href="/projects?sector=Commercial" class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347b6791881def82590_Commercial.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture commercial project"
                                    class="about_sectors-img is-10" />
                                <h6>Commercial</h6>
                                <p class="p-70">From transit-oriented developments, to commercial and mixed-use
                                    towers, we generate value by negotiating and unifying the operational, social,
                                    and economic imperatives of the project through shared visions that are both
                                    creative and pragmatic.</p>
                            </a><a href="/projects?sector=Health+%2B+Knowledge"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6536634744d00a50cbaa049f_Health%20%2B%20Knowledge.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture city shaping plans"
                                    class="about_sectors-img is-11" />
                                <h6>Health + Knowledge</h6>
                                <p class="p-70">Our multi-disciplinary team design buildings and campus master
                                    plans for universities, hospitals, science, research and advanced manufacturing
                                    facilities where knowledge is created, exchanged and transformed. </p>
                            </a><a href="/projects?sector=Guidelines+%2B+Advisory"
                                class="about-sectors_item w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/65366347b812e0b776de2e19_Guidelines%20%2B%20Advisory.svg"
                                    loading="lazy" data-animate=""
                                    alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture guidelines"
                                    class="about_sectors-img is-12" />
                                <h6>Guidelines + Advisory</h6>
                                <p class="p-70">We provide expert advice and design review services. As urban
                                    design leaders, we craft development guidelines which reflect planning
                                    aspirations for best practice approaches to both architecture and urban
                                    design.<br /></p>
                            </a><a id="w-node-c95772c7-9a5e-209e-58bd-39e0e3dcb31e-f9585fac" href="/projects"
                                class="button w-inline-block">
                                <div class="button_label">View All Projects</div>
                                <div class="button_arrow w-embed"><svg width="100%" style="" viewBox="0 0 23 17"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                            fill="currentColor" />
                                    </svg></div>
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-10em">
                        <div class="about_workshop-wrap">
                            <div id="w-node-d87ab7a9-b3fe-2b80-fc27-54af7e1e47bf-f9585fac"
                                class="about_workshop-card-wrap">
                                <div class="about_workshop-card-color"></div>
                                <div class="about_workshop-card">
                                    <div class="hiring_logo w-embed"><svg width="100%" style=""
                                            viewBox="0 0 51 49" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30.4866 31.0518H13.5001L21.969 8.93703L29.625 28.926V28.9185L37.4016 48.9999H43.9399V44.394L26.7432 1.00537H17.1968L0 44.394V48.9999H6.57763L10.6761 38.3116H27.6898L30.4866 31.0518Z"
                                                fill="currentColor" />
                                            <path
                                                d="M50.9284 5.1395C50.9284 4.123 50.627 3.12934 50.0623 2.28415C49.4975 1.43897 48.6948 0.780217 47.7557 0.39122C46.8166 0.00222301 45.7832 -0.0995511 44.7862 0.0987578C43.7893 0.297067 42.8735 0.78655 42.1547 1.50532C41.436 2.2241 40.9465 3.13988 40.7482 4.13684C40.5499 5.13381 40.6516 6.16718 41.0406 7.1063C41.4296 8.04543 42.0884 8.84811 42.9336 9.41284C43.7788 9.97758 44.7724 10.279 45.7889 10.279C47.152 10.279 48.4592 9.73752 49.4231 8.77368C50.3869 7.80983 50.9284 6.50258 50.9284 5.1395Z"
                                                fill="currentColor" />
                                        </svg></div>
                                    <div class="vertical_3em is-left">
                                        <div class="vertical_1em">
                                            <div class="about_workshop-heading">Book a Workshop</div>
                                            <p class="about_workshop-p">Elevate your project with
                                                Archipelago&#x27;s enquiry-by-design approach.</p>
                                        </div><a href="/contact" class="button is-small w-inline-block">
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
        <section class="section">
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
                                        the potential for excellence, regardless of scale, scope or budget, and that
                                        a thoughtful and considered design process is the key to unlocking this
                                        value.</p>
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
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>2025</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p>Logan Gold Coast Faster Rail - Landscape
                                                                    Integration Strategy</p>
                                                                <ul role="list">
                                                                    <li>Regional Achievement Award. Category:
                                                                        Regional Acheivement | AILA Queensland
                                                                        Landscape Architecture Awards</li>
                                                                    <li>Smart Shade Award. Category: Landscape
                                                                        Planning | AILA Queensland Landscape
                                                                        Architecture Awards</li>
                                                                </ul>
                                                                <p>‍</p>
                                                                <p>Logan Gold Coast Faster Rail - Precinct Planning
                                                                    Strategy</p>
                                                                <ul role="list">
                                                                    <li>Landscape Architecture Award. Category:
                                                                        Landscape Planning | AILA Queensland
                                                                        Landscape Architecture Awards</li>
                                                                    <li>Landscape Architecture Award. Category:
                                                                        Urban Design | AILA Queensland Landscape
                                                                        Architecture Awards</li>
                                                                </ul>
                                                                <p>‍</p>
                                                                <p>Pomona Place Plan Pilot</p>
                                                                <ul role="list">
                                                                    <li>Stakeholder Engagement Award. | Queensland
                                                                        Awards for Planning Excellence 2025</li>
                                                                    <li>Commendation. Strategic Planning Project |
                                                                        Queensland Awards for Planning Excellence
                                                                        2025</li>
                                                                </ul>
                                                                <p>‍</p>
                                                                <p>Underwood Social Housing</p>
                                                                <ul role="list">
                                                                    <li>Overall 2025 Winner | Logan Urban Design
                                                                        Awards 2025</li>
                                                                    <li>Commendation. Responsive and Resilient Award
                                                                        | Logan Urban Design Awards 2025</li>
                                                                </ul>
                                                                <p>‍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>2024</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p>‍</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>2023</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p>Ashgrove West Village Precinct</p>
                                                                <ul role="list">
                                                                    <li>ShadeSmart Award | Australian Institute of
                                                                        Landscape Architects (Queensland) </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>2022</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p>Moreton Bay Polycentric City Vision</p>
                                                                <ul role="list">
                                                                    <li>Award for Regional Growth | National Awards
                                                                        for Local Government </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>2021</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p>Logan Central Civic and Community Precinct Plan
                                                                </p>
                                                                <ul role="list">
                                                                    <li>National Award for Urban Design | Australian
                                                                        Institute of Landscape Architects</li>
                                                                    <li>National Awards +   State Award for Urban
                                                                        Design | Australian Institute of Landscape
                                                                        Architects (Queensland)  <br />‍</li>
                                                                </ul>
                                                                <p>The Mill Interim Activation</p>
                                                                <ul role="list">
                                                                    <li>Award for Small Projects | Australian
                                                                        Institute of Landscape Architects
                                                                        (Queensland)<br />‍</li>
                                                                </ul>
                                                                <p>HOTA Green Bridge</p>
                                                                <ul role="list">
                                                                    <li>Award for Infrastructure | Australian
                                                                        Institute of Landscape Architects
                                                                        (Queensland)<br />‍</li>
                                                                </ul>
                                                                <p>Poona Community Infrastructure Plan</p>
                                                                <ul role="list">
                                                                    <li>Award for Community Contribution |
                                                                        Australian Institute of Landscape Architects
                                                                        (Queensland)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>2020</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p>HOTA Green Bridge</p>
                                                                <ul role="list">
                                                                    <li>Commendation for Urban Design - Public
                                                                        Project | Gold Coast Urban Design Awards
                                                                    </li>
                                                                    <li>State Commendation for Urban Design |
                                                                        Australian Institute of Architects
                                                                        (Queensland Chapter) </li>
                                                                    <li>Regional Commendation for Urban Design |
                                                                        Australian Institute of Architects (Gold
                                                                        Coast Northern Rivers)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion_item">
                                                    <div class="accordion_toggle">
                                                        <div>Archive</div>
                                                        <div class="accordion_icon">
                                                            <div class="accordion_minus is-vertical w-embed"><svg
                                                                    width="100%" style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                            <div class="accordion_minus w-embed"><svg width="100%"
                                                                    style="" viewBox="0 0 12 2"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z"
                                                                        fill="currentColor" />
                                                                    <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion_content">
                                                        <div class="accordion_content-padding">
                                                            <div class="rich-text w-richtext">
                                                                <p><strong>2019</strong></p>
                                                                <p>The Urban Ground Design Guidelines </p>
                                                                <ul role="list">
                                                                    <li>Commendation for Excellence in Urban Design
                                                                        | Minister’s Awards for Urban Design
                                                                    </li>
                                                                    <li>Commendation for Urban Design | Gold Coast
                                                                        Architecture Awards</li>
                                                                    <li>Shortlisted for Leadership &amp; Research
                                                                        (City &amp; Regional Scale) | Australian
                                                                        Urban Design Awards</li>
                                                                </ul>
                                                                <p>Parklands</p>
                                                                <ul role="list">
                                                                    <li>Master Planned Development | UDIA National
                                                                        Awards for Excellence</li>
                                                                </ul>
                                                                <p>Woolgoolga to Ballina  </p>
                                                                <ul role="list">
                                                                    <li>Landscape Architecture Award -
                                                                        Infrastructure | New South Wales Landscape
                                                                        Architecture Awards    <br />‍</li>
                                                                </ul>
                                                                <p><strong>2018</strong></p>
                                                                <p>Bundaberg CBD Revitalisation</p>
                                                                <ul role="list">
                                                                    <li>Landscape Architecture Award -
                                                                        Infrastructure | Australian Institute of
                                                                        Landscape Architects (Queensland Chapter)
                                                                    </li>
                                                                </ul>
                                                                <p>Parklands</p>
                                                                <ul role="list">
                                                                    <li>Minister&#x27;s Award for Urban Design |
                                                                        Queensland Government Department of State
                                                                        Development, Manufacturing, Infrastructure,
                                                                        and Planning</li>
                                                                    <li>Karl Langer Award for Urban Design |
                                                                        Australian Institute of Architects
                                                                        (Queensland Chapter)</li>
                                                                    <li>Development of the Year - Communities |
                                                                        Urban Developer Awards</li>
                                                                </ul>
                                                                <p>Shortlisted</p>
                                                                <ul role="list">
                                                                    <li>Built Projects - City and Regional Scale |
                                                                        Planning Institute of Australia - Urban
                                                                        Design Award</li>
                                                                    <li>Development of the Year - Communities |
                                                                        Urban Developer Awards</li>
                                                                    <li>Presidents Award | UDIA Mitchell Brandtman
                                                                        Award for Excellence</li>
                                                                    <li>Master Planned Development | UDIA Mitchell
                                                                        Brandtman Award for Excellence</li>
                                                                    <li>Consultants Excellence | UDIA Mitchell
                                                                        Brandtman Award for Excellence</li>
                                                                    <li>Commendation for Great Place Award |
                                                                        Queensland Awards for Planning
                                                                        Excellence<br />‍</li>
                                                                </ul>
                                                                <p><strong>2017</strong></p>
                                                                <p>Parklands</p>
                                                                <ul role="list">
                                                                    <li>Helen Josephson Award for Urban Design
                                                                        Leadership | City of Gold Coast Urban Design
                                                                        Awards</li>
                                                                    <li>Excellence in Urban Design Award | City of
                                                                        Gold Coast Urban Design Awards</li>
                                                                    <li>Shortlisted for Multi Residential Exterior |
                                                                        Dulux Colour Awards</li>
                                                                    <li>Shortlisted for Multi Residential Interior |
                                                                        Dulux Colour Awards<br />‍</li>
                                                                </ul>
                                                                <p><strong>2015</strong> </p>
                                                                <p>Opera in the Reservoir</p>
                                                                <ul role="list">
                                                                    <li>EVENTelec Best Cultural, Arts, or Music
                                                                        Event State Winner: Queensland | National
                                                                        Trust Queensland Heritage Awards</li>
                                                                    <li>Silver: Interpretation and Promotion |
                                                                        National Trust Queensland Heritage Awards
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion_item">
                        <div class="accordion_toggle">
                            <div>Architecture</div>
                            <div class="accordion_icon">
                                <div class="accordion_minus is-vertical w-embed"><svg width="100%" style=""
                                        viewBox="0 0 12 2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                        <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                    </svg></div>
                                <div class="accordion_minus w-embed"><svg width="100%" style=""
                                        viewBox="0 0 12 2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.5 0.5H6.5V1.5H5.5V0.5Z" fill="currentColor" />
                                        <path d="M0 1.5V0.5H12V1.5H0Z" fill="currentColor" />
                                    </svg></div>
                            </div>
                        </div>
                        <div class="accordion_content">
                            <div class="accordion_content-padding">
                                <div class="rich-text w-richtext">
                                    <ul role="list">
                                        <li>Full architectural design and documentation services</li>
                                        <li>Site testing</li>
                                        <li>Feasibility studies and business cases</li>
                                        <li>Due diligence</li>
                                        <li>Interior architecture including furniture and finishes specification
                                        </li>
                                        <li>Research and publications</li>
                                        <li>3D Modelling, fly-throughs + renders + visualisationsGraphic design</li>
                                    </ul>
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
                        <div class="section_top is-5em">
                            <div class="section_heading-wrap">
                                <h2 class="h1">Team</h2>
                            </div>
                            <div class="section_content-grid">
                                <div class="section_info-wrap">
                                    <p>Meet the creative force behind Archipelago. Our teams blend of skill and
                                        passion is shaping Australia&#x27;s most inspiring
                                        spaces.<br /><br />Discover the talent that sets us apart.</p><a
                                        href="/people/team" class="button w-inline-block">
                                        <div class="button_label">Meet The Team</div>
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
                        <div class="section_bottom"><img
                                src="https://cdn.prod.website-files.com/65249822a54c89915817034b/654421a673bc0abf704a5bd5_archipelago_about-team.webp"
                                loading="lazy" sizes="100vw"
                                srcset="https://cdn.prod.website-files.com/65249822a54c89915817034b/654421a673bc0abf704a5bd5_archipelago_about-team-p-500.webp 500w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654421a673bc0abf704a5bd5_archipelago_about-team-p-800.webp 800w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654421a673bc0abf704a5bd5_archipelago_about-team-p-1080.webp 1080w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654421a673bc0abf704a5bd5_archipelago_about-team-p-1600.webp 1600w, https://cdn.prod.website-files.com/65249822a54c89915817034b/654421a673bc0abf704a5bd5_archipelago_about-team.webp 1920w"
                                alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture team"
                                class="page_hero-img" /></div>
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
                                <p class="hiring_heading">Are you a passionate city maker eager to leave your mark
                                    on the urban landscape?</p>
                                <p class="hiring_p">Join our dynamic Archipelago team and be part of crafting
                                    spaces that will shape Australia&#x27;s cities for generations to come.</p><a
                                    href="/people/careers" class="button is-hiring w-inline-block">
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
@endsection
