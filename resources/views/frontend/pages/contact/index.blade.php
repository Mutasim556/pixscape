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
                                <div class="page_breadcrumb-wrap"><a href="{{ url('/') }}"
                                        class="page_breadcrumb-text">Home</a>
                                    <div class="page_breadcrumb-text">/</div><a href="#" aria-current="page"
                                        class="page_breadcrumb-text w--current">Contact</a>
                                </div>
                            </div>
                            <h1 class="h-xl">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-contact">
                        <div class="section_content-grid is-2 is-line">
                            <p class="page_sub-heading">Office</p>
                            <div id="w-node-c18e94ab-be36-286a-7d9c-577e32c398af-f9585faf" class="section_info-wrap">
                                <p class="p-70">{{ $contact ? $contact->address : '' }}</p><a
                                    href="{{ $contact ? $contact->location : '' }}" target="_blank"
                                    class="button w-inline-block">
                                    <div class="button_label">Google Maps</div>
                                    <div class="button_arrow w-embed"><svg width="100%" style="" viewBox="0 0 23 17"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                fill="currentColor" />
                                        </svg></div>
                                </a>
                            </div>
                        </div>
                        <div class="section_content-grid is-2 is-line">
                            <p class="page_sub-heading">Phone</p>
                            <div id="w-node-_0a7b3e8b-406b-1056-6df7-099951c39d92-f9585faf" class="section_info-wrap"><a
                                    href="tel:{{ $contact ? $contact->phone : '' }}"
                                    class="p-70 is-link">{{ $contact ? $contact->phone : '' }}</a></div>
                        </div>
                        <div class="section_content-grid is-2">
                            <p class="page_sub-heading">Email</p>
                            <div id="w-node-_15f62356-251d-9400-c962-8c9c826aed66-f9585faf" class="section_info-wrap"><a
                                    href="mailto:{{ $contact ? $contact->email : '' }}?subject=Hey%2C%20Pixscape%20%F0%9F%91%8B"
                                    class="p-70 is-link">{{ $contact ? $contact->email : '' }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-light-nav="" class="section" id="message_form">
            <div class="w-layout-blockcontainer container w-container">
                <div class="page-padding">
                    <div class="section-padding is-100svh">
                        <div class="contact_wrap">
                            <div class="section_content-grid is-2 is-light">
                                <p class="page_sub-heading " style="color: white">Contact Pixscape</p>
                                <div class="section_info-wrap">
                                    <div class="form w-form">
                                        @if (session()->has('success'))
                                            <div style="width: 100%;padding:10px; background:#3f8639;text-align: center;color:white">
                                                <span style="text-align: center">{{ session()->get('success') }}</span>
                                            </div>
                                        @endif
                                        <form method="post" class="contact_form" style="margin-top: 15px;"
                                            action="{{ route('frontend.messagePost') }}">
                                            @csrf
                                            <input class="contact_input w-input" maxlength="256" name="name"
                                                placeholder="Full Name" type="text" id="name" required="" />
                                            <input class="contact_input w-input" maxlength="256" name="email"
                                                placeholder="Email" type="email" id="email" required="" />
                                            <input class="contact_input w-input" maxlength="256" name="phone"
                                                placeholder="Phone" type="tel" />
                                            <select name="type" data-name="Enquiry type" required=""
                                                class="contact_select-field w-select">
                                                <option value="">Enquiry Type</option>
                                                <option value="Let&#x27;s chat about a new project">Let&#x27;s chat about a
                                                    new project
                                                </option>
                                                <option value="Book a workshop">Book a workshop</option>
                                                <option value="Media enquiry">Media enquiry</option>
                                                <option value="Recruitment">Recruitment</option>
                                                <option value="General enquiry">General enquiry</option>
                                            </select>
                                            <textarea name="message" maxlength="5000" placeholder="Type your message..." required=""
                                                class="contact_input is-text-area w-input"></textarea>

                                            <div class="button is-white"
                                                style="color: white;border-bottom:1px solid white"><input type="submit"
                                                    data-wait="Please wait..." class="contact_submit-button w-button"
                                                    value="Send Enquiry" />
                                                <div class="button_label">Send Enquiry</div>
                                                <div class="button_arrow w-embed" style="color: white"><svg
                                                        width="100%" style="" viewBox="0 0 23 17"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M23.0001 8.22269L14.7774 0L14.0703 0.707107L21.1005 7.7373H0.28125V8.7373H21.0713L14.0703 15.7383L14.7774 16.4454L23.0001 8.22269Z"
                                                            fill="currentColor" />
                                                    </svg></div>
                                            </div>
                                        </form>
                                        <div class="form_success background-color-green w-form-done">
                                            <div>Thank you! Your submission has been received!</div>
                                        </div>
                                        <div class="form_error w-form-fail">
                                            <div>Oops! Something went wrong while submitting the form.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img_overflow is-full"><img
                    src="https://cdn.prod.website-files.com/65249822a54c89915817034b/6539a3ba2f702b9c883f39cf_archipelago_contact.webp"
                    loading="lazy" alt="Archipelago&#x27;s Architecture, Urban Design, Landscape Architecture office"
                    class="full-img" /></div>
        </section>
    </div>
@endsection
