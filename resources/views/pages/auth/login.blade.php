<x-auth-layout>
    <!--begin::Form-->
    <div
        class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px"
    >
        <!--begin::Header-->
        <div class="d-flex flex-stack py-2">
            <!--begin::Back link-->
            <div class="me-2"></div>
            <!--end::Back link-->
            <!--begin::Sign Up link-->
            <div class="m-0">
                <span
                    class="text-gray-400 fw-bold fs-5 me-2"
                    data-kt-translate="sign-in-head-desc"
                    >Not a Member yet?</span
                >
                <a
                    href="{{ route('register') }}"
                    class="link-primary fw-bold fs-5"
                    data-kt-translate="sign-in-head-link"
                    >Sign Up</a
                >
            </div>
            <!--end::Sign Up link=-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="py-20">
            <!--begin::Form-->
            <form
                class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate"
                id="kt_sign_in_form"
				data-kt-redirect-url="{{ route('dashboard') }}" action="{{ route('login') }}"
            >
                @csrf
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Heading-->
                    <div class="text-start mb-10">
                        <!--begin::Title-->
                        <h1
                            class="text-dark mb-3 fs-3x"
                            data-kt-translate="sign-in-title"
                        >
                            Sign In
                        </h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <div
                            class="text-gray-400 fw-semibold fs-6"
                            data-kt-translate="general-desc"
                        >
                            Get unlimited access &amp; earn money
                        </div>
                        <!--end::Link-->
                    </div>
                    <!--begin::Heading-->
                    <!--begin::Input group=-->
                    <div class="fv-row mb-8 fv-plugins-icon-container">
                        <!--begin::Email-->
                        <input
                            type="text"
                            placeholder="Email"
                            name="email"
                            autocomplete="off"
                            data-kt-translate="sign-in-input-email"
                            class="form-control form-control-solid"
                            value="gabhenryy@gmail.com"
                        />
                        <!--end::Email-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                        ></div>
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Password-->
                        <input
                            type="password"
                            placeholder="Password"
                            name="password"
                            value="123456789"
                            autocomplete="off"
                            data-kt-translate="sign-in-input-password"
                            class="form-control form-control-solid"
                        />
                        <!--end::Password-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                        ></div>
                    </div>
                    <!--end::Input group=-->
                    <!--begin::Wrapper-->
                    <div
                        class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10"
                    >
                        <div></div>
                        <!--begin::Link-->
                        <a
                            href="{{ route('password.request') }}"
                            class="link-primary"
                        >
                            Forgot Password ?
                        </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-stack">
                        <!--begin::Submit-->
                        <button
                            id="kt_sign_in_submit"
                            class="btn btn-primary me-2 flex-shrink-0"
                        >
                            <!--begin::Indicator label-->
                            <span
                                class="indicator-label"
                                data-kt-translate="sign-in-submit"
                                >Sign In</span
                            >
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                <span data-kt-translate="general-progress"
                                    >Please wait...</span
                                >
                                <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"
                                ></span>
                            </span>
                            <!--end::Indicator progress-->
                        </button>
                        <!--end::Submit-->
                        <!--begin::Social-->
                        <div class="d-flex align-items-center">
                            <div
                                class="text-gray-400 fw-semibold fs-6 me-3 me-md-6"
                                data-kt-translate="general-or"
                            >
                                Or
                            </div>
                            <!--begin::Symbol-->
                            <a
                               href="{{ url('/auth/redirect/google') }}?redirect_uri={{ url()->current() }}"
                                class="symbol symbol-circle symbol-45px w-45px bg-light me-3"
                            >
                                <img
                                    alt="Logo"
                                    src="assets/media/svg/brand-logos/google-icon.svg"
                                    class="p-4"
                                />
                            </a>
                
                            <!--end::Symbol-->
                        </div>
                        <!--end::Social-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--begin::Body-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Body-->
        <!--begin::Footer-->
        <div class="m-0">
            <!--begin::Toggle-->
            <button
                class="btn btn-flex btn-link rotate"
                data-kt-menu-trigger="click"
                data-kt-menu-placement="bottom-start"
                data-kt-menu-offset="0px, 0px"
            >
                <img
                    data-kt-element="current-lang-flag"
                    class="w-25px h-25px rounded-circle me-3"
                    src="assets/media/flags/united-states.svg"
                    alt=""
                />
                <span data-kt-element="current-lang-name" class="me-2"
                    >English</span
                >
                <i
                    class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"
                ></i>
            </button>
            <!--end::Toggle-->
            <!--begin::Menu-->
            <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4"
                data-kt-menu="true"
                id="kt_auth_lang_menu"
            >
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a
                        href="#"
                        class="menu-link d-flex px-5"
                        data-kt-lang="English"
                    >
                        <span class="symbol symbol-20px me-4">
                            <img
                                data-kt-element="lang-flag"
                                class="rounded-1"
                                src="assets/media/flags/united-states.svg"
                                alt=""
                            />
                        </span>
                        <span data-kt-element="lang-name">English</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a
                        href="#"
                        class="menu-link d-flex px-5"
                        data-kt-lang="Spanish"
                    >
                        <span class="symbol symbol-20px me-4">
                            <img
                                data-kt-element="lang-flag"
                                class="rounded-1"
                                src="assets/media/flags/spain.svg"
                                alt=""
                            />
                        </span>
                        <span data-kt-element="lang-name">Spanish</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a
                        href="#"
                        class="menu-link d-flex px-5"
                        data-kt-lang="German"
                    >
                        <span class="symbol symbol-20px me-4">
                            <img
                                data-kt-element="lang-flag"
                                class="rounded-1"
                                src="assets/media/flags/germany.svg"
                                alt=""
                            />
                        </span>
                        <span data-kt-element="lang-name">German</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a
                        href="#"
                        class="menu-link d-flex px-5"
                        data-kt-lang="Japanese"
                    >
                        <span class="symbol symbol-20px me-4">
                            <img
                                data-kt-element="lang-flag"
                                class="rounded-1"
                                src="assets/media/flags/japan.svg"
                                alt=""
                            />
                        </span>
                        <span data-kt-element="lang-name">Japanese</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a
                        href="#"
                        class="menu-link d-flex px-5"
                        data-kt-lang="French"
                    >
                        <span class="symbol symbol-20px me-4">
                            <img
                                data-kt-element="lang-flag"
                                class="rounded-1"
                                src="assets/media/flags/france.svg"
                                alt=""
                            />
                        </span>
                        <span data-kt-element="lang-name">French</span>
                    </a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Form-->
</x-auth-layout>
