<ul class="sidebar-links" id="simple-bar">
    <li class="sidebar-list">
        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.index') }}" aria-expanded="false"><i
                data-feather="home"></i><span>{{ __('admin_local.Dashboard') }}</span>
        </a>
    </li>
    @if (hasPermission(['user-index', 'user-create', 'user-update', 'user-delete']))
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="user-plus"></i>
                <span class="lan-3">{{ __('admin_local.Users') }}</span>
            </a>
            <ul class="sidebar-submenu">
                <li>
                    <a href="{{ route('admin.user.index') }}" class="sidebar-link">
                        <span> {{ __('admin_local.User List') }} </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif
    @if (hasPermission([
            'role-permission-index',
            'role-permission-create',
            'role-permission-update',
            'role-permission-delete',
        ]))
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.role.index') }}"
                aria-expanded="false"><i data-feather="unlock"></i><span>
                    {{ __('admin_local.Roles And Permissions') }}</span>
            </a>
        </li>
    @endif
    @if (hasPermission([
            'homepage-slider-index',
            'project-index',
            'designexp-index',
            'counter-index',
            'homepage-video-index',
            'contact-index',
            'notification-index',
        ]))
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="book-open"></i>
                <span class="lan-3">{{ __('admin_local.Pages') }}</span>
            </a>
            <ul class="sidebar-submenu">
                @if (hasPermission([
                        'homepage-slider-index',
                        'designexp-index',
                        'counter-index',
                        'homepage-video-index',
                        'service-index',
                        'famework-index',
                        'value-index',
                        'notification-index',
                    ]))
                    <li>
                        <a class="submenu-title" href="javascript:void(0)"
                            style="margin-bottom:5px;">{{ __('admin_local.Home') }}<span class="sub-arrow"><i
                                    class="fa fa-angle-right"></i></span></a>

                        <ul class="nav-sub-childmenu submenu-content">
                            @if (hasPermission(['homepage-slider-index']))
                                <li><a
                                        href="{{ route('admin.pages.homepage.main_slider') }}">{{ __('admin_local.Slider') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['homepage-video-index']))
                                <li><a
                                        href="{{ route('admin.pages.homepage.main_video') }}">{{ __('admin_local.Video') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['counter-index']))
                                <li><a
                                        href="{{ route('admin.pages.homepage.counter.index') }}">{{ __('admin_local.Counters') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['designexp-index']))
                                <li><a
                                        href="{{ route('admin.pages.designexp.index') }}">{{ __('admin_local.Design and Expertise') }}</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (hasPermission(['service-index']))
                    <li>
                        <a class="sidebar-link"
                            href="{{ route('admin.pages.team.index') }}">{{ __('admin_local.Team Members') }}</a>
                    </li>
                @endif
                @if (hasPermission(['project-index', 'project-type-index']))
                    <li>
                        <a class="submenu-title" href="javascript:void(0)"
                            style="margin-bottom:5px;">{{ __('admin_local.Projects') }}<span class="sub-arrow"><i
                                    class="fa fa-angle-right"></i></span></a>

                        <ul class="nav-sub-childmenu submenu-content">
                            @if (hasPermission(['project-type-index']))
                                <li><a class="sidebar-link"
                                        href="{{ route('admin.pages.project-type.index') }}">{{ __('admin_local.Project Types') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['project-index']))
                                <li><a class="sidebar-link"
                                        href="{{ route('admin.pages.project.index') }}">{{ __('admin_local.Projects') }}</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (hasPermission(['blog-index']))
                    <li>
                        <a class="sidebar-link"
                            href="{{ route('admin.pages.blog.index') }}">{{ __('admin_local.Blogs') }}</a>
                    </li>
                @endif
                @if (hasPermission(['contact-index']))
                    <li>
                        <a class="sidebar-link"
                            href="{{ route('admin.pages.contactUs') }}">{{ __('admin_local.Contact') }}</a>
                    </li>
                @endif
                @if (hasPermission([
                        'aboutus-index',
                        'service-index',
                        'famework-index',
                        'value-index',
                        'sub-service-index',
                        'client-index',
                    ]))
                    <li>
                        <a class="submenu-title" href="javascript:void(0)"
                            style="margin-bottom:5px;">{{ __('admin_local.About Page') }}<span class="sub-arrow"><i
                                    class="fa fa-angle-right"></i></span></a>

                        <ul class="nav-sub-childmenu submenu-content">
                            @if (hasPermission(['aboutus-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.aboutUs') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.About Us') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['service-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.service.index') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.Services') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['sub-service-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.sub-service.index') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.Sub-Services') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['famework-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.framework.index') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.Framework') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['value-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.values.index') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.Our Values') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['partner-index']))
                                <li>
                                    <a class="sidebar-link"
                                        href="{{ route('admin.pages.partner.index') }}">{{ __('admin_local.Partners') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['client-index']))
                                <li>
                                    <a class="sidebar-link"
                                        href="{{ route('admin.pages.client.index') }}">{{ __('admin_local.Clients') }}</a>
                                </li>
                            @endif

                            @if (hasPermission(['award-index']))
                                <li>
                                    <a class="sidebar-link"
                                        href="{{ route('admin.pages.award.index') }}">{{ __('admin_local.Awards') }}</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (hasPermission(['career-index', 'job-application-index']))
                    <li>
                        <a class="submenu-title" href="javascript:void(0)"
                            style="margin-bottom:5px;">{{ __('admin_local.Career Page') }}<span class="sub-arrow"><i
                                    class="fa fa-angle-right"></i></span></a>

                        <ul class="nav-sub-childmenu submenu-content">
                            @if (hasPermission(['career-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.career.index') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.Career') }}</a>
                                </li>
                            @endif
                            @if (hasPermission(['job-application-index']))
                                <li>
                                    <a class="sidebar-link" href="{{ route('admin.pages.jobApplications') }}"
                                        style="margin-bottom:5px;">{{ __('admin_local.Applications') }}</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                @endif
                @if (hasPermission(['message-index']))
                    <li>
                        <a class="sidebar-link"
                            href="{{ route('admin.pages.contactUsMessages') }}">{{ __('admin_local.Messages') }}</a>
                    </li>
                @endif
                @if (hasPermission(['notification-index']))
                    <li>
                        <a class="sidebar-link"
                            href="{{ route('admin.pages.notification.index') }}">{{ __('admin_local.Notifications') }}</a>
                    </li>
                @endif
            </ul>
        </li>
    @endif
    @if (hasPermission(['language-index', 'language-create', 'language-update', 'language-delete', 'backend-string-index']))
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="slack"></i>
                <span class="lan-3">{{ __('admin_local.Language') }}</span>
            </a>
            <ul class="sidebar-submenu">
                @if (hasPermission(['language-index', 'language-create', 'language-update', 'language-delete']))
                    <li>
                        <a href="{{ route('admin.language.index') }}" class="sidebar-link">
                            <span> {{ __('admin_local.Language List') }} </span>
                        </a>
                    </li>
                @endif

                @if (hasPermission(['backend-string-index']))
                    <li>
                        <a href="{{ route('admin.backend.language.index') }}" class="sidebar-link">
                            <span> {{ __('admin_local.Backed Language') }} </span>
                        </a>
                    </li>
                @endif
            </ul>
        </li>
    @endif
    @if (hasPermission(['maintenance-mode-index', 'logo-index']))
        <li class="sidebar-list">
            <a class="sidebar-link sidebar-title" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="settings"></i>
                <span class="lan-3">{{ __('admin_local.Settings') }}</span>
            </a>
            <ul class="sidebar-submenu">
                @if (hasPermission(['maintenance-mode-index']))
                    <li>
                        <a href="{{ route('admin.settings.server.maintenanceMode') }}" class="sidebar-link">
                            <span> {{ __('admin_local.Maintenance Mode') }} </span>
                        </a>
                    </li>
                @endif
                @if (hasPermission(['logo-index']))
                    <li>
                        <a href="{{ route('admin.settings.logo.index') }}" class="sidebar-link">
                            <span> {{ __('admin_local.Logos and Icons') }} </span>
                        </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('admin.settings.contentIndex') }}" class="sidebar-link">
                        <span> {{ __('admin_local.Site Contents') }} </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.settings.themeIndex') }}" class="sidebar-link">
                        <span> {{ __('admin_local.Theme Setting') }} </span>
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>
