<footer data-light-nav="" class="footer">
    @php
        $contact = \App\Models\Admin\Contact::first();
        $logo = \App\Models\Admin\Logo::first();
    @endphp
    <style>
        @media(min-width:991px){
            .footer_social-wrapper{
                margin-left:225px !important;
            }
            .footer_heading{
                line-height:.5
            }
            #footer_info_wrap{
                margin-top: 30px;
            }
        }
         @media(max-width:990px){
             .footer_social-wrapper{
                margin-left:0px !important;
            }
         }
    </style>
    <div class="page-padding">
        <div class="footer_wrap">
            <div class="footer_top">
                <a aria-label="Pixscape Homepage" href="{{ url('/') }}" aria-current="page"
                    class="footer_home-link w-inline-block w--current">
                    <div class="logo_footer w-embed" style="">
                        <img src="{{ asset($logo->main_site_footer_logo) }}" alt="">
                    </div>
                </a>
                <div class="footer_horizontal is-nav-links">
                    <div class="footer_nav-contain" s><a href="{{ url('/') }}" class="footer_nav-link">Home</a>
                    </div>
                    <div class="footer_nav-contain"><a href="{{ route('frontend.aboutUs') }}"
                            class="footer_nav-link">About Us</a>
                    </div>
                    <div class="footer_nav-contain"><a href="{{ route('frontend.team') }}"
                            class="footer_nav-link">Team</a></div>

                    <div class="footer_nav-contain">
                        <a href="{{ route('frontend.services') }}?type=Our Expertise"
                            class="footer_nav-link">Our
                            Expertise</a>
                    </div>
                    <div class="footer_nav-contain"><a href="{{ route('frontend.services') }}?type=Supporting Service"
                            class="footer_nav-link">Supproting
                            Services</a>

                    </div>
                    <div class="footer_nav-contain"><a href="{{ route('frontend.project') }}"
                            class="footer_nav-link">Works</a>
                    </div>
                    <div class="footer_nav-contain"><a href="{{ route('frontend.careers') }}"
                            class="footer_nav-link">Career</a>
                    </div>
                    {{-- <div class="footer_nav-contain"><a href="{{ route('frontend.article') }}"
                            class="footer_nav-link">Articles</a>
                    </div> --}}
                    <div class="footer_nav-contain"><a href="{{ route('frontend.contact') }}"
                            class="footer_nav-link">Contact</a>
                    </div>

                </div>


            </div>
            <div class="footer_top2">
                <div class="footer_horizontal">
                    <div class="footer_info-wrap">
                        <div class="footer_heading">Office</div>
                        <a href="{{ $contact ? $contact->location : '' }}" target="_blank"
                            class="footer_a w-inline-block">
                            <p>{{ $contact ? $contact->address : '' }}</p>
                        </a>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3651.049011123834!2d90.416021!3d23.781268999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDQ2JzUyLjYiTiA5MMKwMjQnNTcuNyJF!5e0!3m2!1sen!2sbd!4v1770534480601!5m2!1sen!2sbd"
                            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="footer_info-wrap">
                        <div class="footer_social-wrapper">

                            <div class="footer_heading">Phone</div><a href="tel:+{{ $contact ? $contact->phone : '' }}"
                                class="footer_a">{{ $contact ? $contact->phone : '' }}</a>
                            <div class="footer_heading is-space">Email</div><a
                                href="mailto:{{ $contact ? $contact->email : '' }}"
                                class="footer_a is-email">{{ $contact ? $contact->email : '' }}</a>
                            <div class="footer_heading" style="margin-top: 30px;margin-bottom:10px;">Social</div>
                            @if ($contact && $contact->facebook)
                                <a href="{{ $contact->facebook }}" target="_blank" class="footer_heading"
                                    style="font-size: 18px;">Facebook</a>
                            @endif

                            @if ($contact && $contact->linkedin)
                                <a href="{{ $contact->linkedin }}" target="_blank" class="footer_heading"
                                    style="font-size: 18px;">Linkedin</a>
                            @endif

                            <div class="footer_info-wrap" id="footer_info_wrap">
                                <div class="footer_heading">Subscribe</div>
                                <div>Our strategy, thinking and insights. Shared with you.</div>
                            </div>
                            <div class="form w-form">
                                <form method="post" class="submit-form"
                                    action="{{ route('frontend.subscribePost') }}">
                                    @csrf
                                    <div class="submit-form recaptcha">
                                        <input class="submit-field is-footer-email w-input" maxlength="256"
                                            name="email" placeholder="Enter Your Email" type="email"
                                            required="" />
                                        <input type="submit"title="Submit" class="submit-button w-button"
                                            value="" />
                                    </div>
                                </form>
                                @if (session()->has('success'))
                                    <div class="form_success">
                                        <div>Thank you! Your submission has been received!</div>
                                    </div>
                                @endif
                                @error('email')
                                    <div class="form_error">
                                        <div>{{ $message }}</div>
                                    </div>
                                @enderror

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="footer_top2">
                <div class="footer_horizontal">
                    <div class="footer_info-wrap">
                        <div class="footer_heading">Office</div>
                        <a href="{{ $contact ? $contact->location : '' }}" target="_blank"
                            class="footer_a w-inline-block">
                            <p>{{ $contact ? $contact->address : '' }}</p>
                        </a>
                        <div class="footer_social-wrapper">
                            @if ($contact && $contact->facebook)
                                <a href="{{ $contact->facebook }}" target="_blank" class="footer_heading"
                                    style="font-size: 18px;">Facebook</a>
                            @endif

                            @if ($contact && $contact->linkedin)
                                <a href="{{ $contact->linkedin }}" target="_blank" class="footer_heading"
                                    style="font-size: 18px;">Linkedin</a>
                            @endif
                        </div>
                    </div>
                    <div class="footer_info-wrap">
                        <div class="footer_heading">Phone</div><a href="tel:+{{ $contact ? $contact->phone : '' }}"
                            class="footer_a">{{ $contact ? $contact->phone : '' }}</a>
                        <div class="footer_heading is-space">Email</div><a
                            href="mailto:{{ $contact ? $contact->email : '' }}"
                            class="footer_a is-email">{{ $contact ? $contact->email : '' }}</a>
                    </div>
                </div>
                <div id="w-node-_3707be7f-7d62-d0fa-61da-a90f397b754c-397b751f" class="vertical_1-5em">
                    <div class="footer_info-wrap">
                        <div class="footer_heading">Subscribe</div>
                        <div>Our strategy, thinking and insights. Shared with you.</div>
                    </div>
                    <div class="form w-form">
                        <form method="post" class="submit-form" action="{{ route('frontend.subscribePost') }}">
                            @csrf
                            <div class="submit-form recaptcha">
                                <input class="submit-field is-footer-email w-input" maxlength="256" name="email"
                                    placeholder="Enter Your Email" type="email" required="" />
                                <input type="submit"title="Submit" class="submit-button w-button" value="" />
                            </div>
                        </form>
                        @if (session()->has('success'))
                            <div class="form_success">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                        @endif
                        @error('email')
                            <div class="form_error">
                                <div>{{ $message }}</div>
                            </div>
                        @enderror

                    </div>
                </div>
            </div> --}}
            <div class="footer_divider"></div>
            <div class="footer_bottom">
                {{-- <div class="footer_horizontal">
                            <div class="vertical_1-5em">
                                <div class="footer_info-wrap">
                                    <div class="footer_flag-wrap">
                                        <div class="flag w-embed"><svg width="100%" style=""
                                                viewBox="0 0 39 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M39 0H0V12H39V0Z" fill="black" />
                                                <path d="M39 12H0V24H39V12Z" fill="#FF0000" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M25.8603 11.9104C25.8679 12.7437 25.7092 13.5701 25.3936 14.3421C25.078 15.114 24.6116 15.8162 24.0214 16.4081C23.4312 16.9999 22.7288 17.4697 21.9549 17.7903C21.181 18.1109 20.3508 18.276 19.5123 18.276C18.6738 18.276 17.8437 18.1109 17.0697 17.7903C16.2958 17.4697 15.5935 16.9999 15.0033 16.4081C14.413 15.8162 13.9466 15.114 13.631 14.3421C13.3154 13.5701 13.1568 12.7437 13.1643 11.9104C13.1568 11.0772 13.3154 10.2508 13.631 9.47881C13.9466 8.70685 14.413 8.00468 15.0033 7.41283C15.5935 6.82099 16.2958 6.3512 17.0697 6.03059C17.8437 5.70999 18.6738 5.54492 19.5123 5.54492C20.3508 5.54492 21.181 5.70999 21.9549 6.03059C22.7288 6.3512 23.4312 6.82099 24.0214 7.41283C24.6116 8.00468 25.078 8.70685 25.3936 9.47881C25.7092 10.2508 25.8679 11.0772 25.8603 11.9104V11.9104Z"
                                                    fill="#FFFF00" />
                                            </svg></div>
                                        <div class="flag w-embed"><svg width="100%" style=""
                                                viewBox="0 0 39 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M39 0H0V24H39V0Z" fill="#00CA00" />
                                                <path d="M39 5.53809H0V19.3842H39V5.53809Z" fill="#272520" />
                                                <path d="M39 6.46191H0V18.4619H39V6.46191Z" fill="#0001FD" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.3984 17.1558L16.1577 15.2704C16.1577 15.2704 14.9263 13.5558 14.9263 11.3274C14.9263 9.09891 16.6855 7.38477 18.7968 7.38477L19.6767 8.75589L20.556 7.38477C22.3158 7.38477 24.4271 8.75589 24.4271 11.1561C24.4271 13.5558 23.1951 15.2704 23.1951 15.2704L25.1307 17.3276L21.4359 16.4703V10.9848C21.4359 10.6418 20.7323 9.95623 19.6767 9.95623C18.7968 9.95623 18.0932 10.6418 18.0932 10.9848V16.299L14.3984 17.1558V17.1558Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M18.9601 13.1703L19.2128 12.3831L18.543 11.8785L19.3896 11.8693L19.6751 11.0928L19.9457 11.8741L20.7918 11.8988L20.1125 12.3908L20.3504 13.1828L19.6597 12.7053L18.9601 13.1703V13.1703Z"
                                                    fill="white" />
                                            </svg></div>
                                    </div>
                                    <div class="footer_p-tiny">Archipelago® acknowledges the Traditional Custodians of
                                        the land on which
                                        we work, the Yuggera and Turrbal peoples. We pay our respects to all Elders,
                                        past, present and
                                        emerging.</div>
                                </div>
                            </div>
                            <div class="vertical_1-5em">
                                <div class="footer_info-wrap">
                                    <div class="footer_flag-wrap">
                                        <div class="flag w-embed"><svg width="100%" style=""
                                                viewBox="0 0 39 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#ProgressPrideFlag11-stripe-2018-_clip0-5438-35577)">
                                                    <path d="M0 0H39V24H0V0Z" fill="#750787" />
                                                    <path d="M0 0H39V20H0V0Z" fill="#004DFF" />
                                                    <path d="M0 0H39V16H0V0Z" fill="#008026" />
                                                    <path d="M0 0H39V12H0V0Z" fill="#FFED00" />
                                                    <path d="M0 0H39V8H0V0Z" fill="#FF8C00" />
                                                    <path d="M0 0H39V4H0V0Z" fill="#E40303" />
                                                    <path
                                                        d="M-0.00585938 6.04688L6.17564 11.9996L-0.00585938 17.9524V6.04688Z"
                                                        fill="white" />
                                                    <path
                                                        d="M-0.00585938 6.04706V3.02344L9.23064 11.9998L-0.00585938 20.9762V17.9526L6.17564 11.9998L-0.00585938 6.04706Z"
                                                        fill="#FFAFC8" />
                                                    <path
                                                        d="M-0.00585938 3.02362V0L12.4286 12L-0.00585938 24V20.9764L9.23064 12L-0.00585938 3.02362Z"
                                                        fill="#74D7EE" />
                                                    <path
                                                        d="M-0.00585938 0L12.4286 12L-0.00585938 24H3.12064L15.4966 12L3.12064 0H-0.00585938Z"
                                                        fill="#613915" />
                                                    <path
                                                        d="M3.11914 0H6.23914L18.6151 12L6.23914 24H3.11914L15.4951 12L3.11914 0Z"
                                                        fill="black" />
                                                </g>
                                                <defs>
                                                    <clipPath id="ProgressPrideFlag11-stripe-2018-_clip0-5438-35577">
                                                        <rect width="39" height="24" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg></div>
                                    </div>
                                    <div class="footer_p-tiny">Archipelago® is a proudly inclusive organisation and an
                                        ally of LGBTIQ+
                                        community and the movement toward equality.</div>
                                </div>
                            </div>
                        </div> --}}
                <div class="footer_horizontal is-right">
                    <div class="footer_legal">
                        <div>© {{ env('COMPANY_NAME') }} <span data-copyright-year=""></span></div><a href="#"
                            target="_blank">Website by Md. Mutasim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
