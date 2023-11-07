<!--begin::sidebar menu-->
<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
    <!--begin::Menu wrapper-->
    <div
        id="kt_app_sidebar_menu_wrapper"
        class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
        data-kt-scroll="true"
        data-kt-scroll-activate="true"
        data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_sidebar_logo,
	#kt_app_sidebar_footer"
        data-kt-scroll-wrappers="#kt_app_sidebar_menu"
        data-kt-scroll-offset="5px"
        data-kt-scroll-save-state="true"
    >
        <!--begin::Menu-->
        <div
            class="menu menu-column menu-rounded menu-sub-indention px-3 fw-semibold fs-6"
            id="#kt_app_sidebar_menu"
            data-kt-menu="true"
            data-kt-menu-expand="false"
        >
            <!--begin:Menu item-->
            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('dashboard') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <a
                    class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                    href="{{ route('dashboard') }}"
                >
                    <span class="menu-link">
                        <span class="menu-icon"
                            >{!! getIcon('element-11', 'fs-2') !!}</span
                        >
                        <span class="menu-title">Dashboards</span>
                    </span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu sub-->

                <!--end:Menu sub-->
            </div>

            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('signals') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <a
                    class="menu-link {{ request()->routeIs('signals') ? 'active' : '' }}"
                    href="{{ route('signals') }}"
                >
                    <span class="menu-link">
                        <span class="menu-icon"
                            >{!! getIcon('tech-wifi', 'fs-2') !!}</span
                        >
                        <span class="menu-title">Signals</span>
                    </span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu sub-->

                <!--end:Menu sub-->
            </div>

            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('configurator.*') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon"
                        >{!! getIcon('setting-3', 'fs-2') !!}</span
                    >
                    <span class="menu-title">Configurator</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->  
                        <a
                            class="menu-link {{ request()->routeIs('configurator.accounts') ? 'active' : '' }}"
                            href="{{ route('configurator.accounts') }}"
                        >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Accounts</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a
                            class="menu-link {{ request()->routeIs('configurator.trade-copier.*') ? 'active' : '' }}"
                            href="{{ route('configurator.trade-copier.index') }}"
                        >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Trade Copier</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a
                            class="menu-link {{ request()->routeIs('configurator.equity-monitor.*') ? 'active' : '' }}"
                            href="{{
                                route('configurator.equity-monitor.index')
                            }}"
                        >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Equity Monitor</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a
                            class="menu-link {{ request()->routeIs('configurator.email-alerts.*') ? 'active' : '' }}"
                            href="{{
                                route('configurator.email-alerts.index')
                            }}"
                        >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Email Alerts</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('analysis') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <a
                    class="menu-link {{ request()->routeIs('analysis') ? 'active' : '' }}"
                    href="{{ route('analysis') }}"
                >
                    <span class="menu-link">
                        <span class="menu-icon"
                            >{!! getIcon('graph-4', 'fs-2') !!}</span
                        >
                        <span class="menu-title">Analysis</span>
                    </span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu sub-->

                <!--end:Menu sub-->
            </div>
            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('signal-followers') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <a
                    class="menu-link {{ request()->routeIs('signal-followers') ? 'active' : '' }}"
                    href="{{ route('signal-followers') }}"
                >
                    <span class="menu-link">
                        <span class="menu-icon"
                            >{!! getIcon('people', 'fs-2') !!}</span
                        >
                        <span class="menu-title">Signal Followers</span>
                    </span>
                </a>
                <!--end:Menu link-->
                <!--begin:Menu sub-->

                <!--end:Menu sub-->
            </div>

            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('signal-provider.*') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon"
                        >{!! getIcon('electricity', 'fs-2') !!}</span
                    >
                    <span class="menu-title">Signal Provider</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a
                            class="menu-link {{ request()->routeIs('signal-provider.manage.*') ? 'active' : '' }}"
                            href="{{ route('signal-provider.manage.index') }}"
                        >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Manage</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->

                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('whitelabel.*') ? 'here show' : '' }}"
            >
                <!--begin:Menu link-->
                <span class="menu-link">
                    <span class="menu-icon"
                        >{!! getIcon('cheque', 'fs-2') !!}</span
                    >
                    <span class="menu-title">Whitelabel</span>
                    <span class="menu-arrow"></span>
                </span>
                <!--end:Menu link-->
                <!--begin:Menu sub-->
                <div class="menu-sub menu-sub-accordion">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a
                            class="menu-link {{ request()->routeIs('whitelabel.setup.*') ? 'active' : '' }}"
                            href="{{ route('whitelabel.setup.index') }}"
                        >
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Setup</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->

                    <!--end:Menu item-->
                </div>
                <!--end:Menu sub-->
            </div>

        
            <div
                data-kt-menu-trigger="click"
                class="menu-item menu-accordion {{ request()->routeIs('whitelabel.*') ? 'here show' : '' }}"
            >
            <!--begin:Menu link-->
            <span class="menu-link">
                <span class="menu-icon"
                    >{!! getIcon('question', 'fs-2') !!}</span
                >
                <span class="menu-title">Help Center</span>
                <span class="menu-arrow"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a
                        class="menu-link {{ request()->routeIs('help-center.knowledge-base.*') ? 'active' : '' }}"
                        href="{{ route('help-center.knowledge-base.index') }}"
                    >
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Knowledge Base</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a
                        class="menu-link {{ request()->routeIs('help-center.faq.*') ? 'active' : '' }}"
                        href="{{ route('help-center.faq.index') }}"
                    >
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">FAQ</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a
                        class="menu-link {{ request()->routeIs('help-center.contact-support.*') ? 'active' : '' }}"
                        href="{{ route('help-center.contact-support.index') }}"
                    >
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Contact Support</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <!--end:Menu item-->
            </div>
        </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->

        <!--end:Menu item-->
    </div>
    <!--end::Menu-->
</div>
<!--end::Menu wrapper-->
<!--end::sidebar menu-->
