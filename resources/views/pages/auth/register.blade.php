<x-auth-layout>
    <div
        class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px"
    >
        <div class="d-flex flex-stack py-2">
            <div class="me-2">
                <a href="/login" class="btn btn-icon bg-light rounded-circle">
                    <i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
                </a>
            </div>
            <div class="m-0">
                <span
                    class="text-gray-400 fw-bold fs-5 me-2"
                    data-kt-translate="sign-up-head-desc"
                    >Already a member ?</span
                >
                <a
                    href="/login"
                    class="link-primary fw-bold fs-5"
                    data-kt-translate="sign-up-head-link"
                    >Sign In</a
                >
            </div>
        </div>
        <div class="py-20">
            <form
                class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate"
                id="kt_sign_up_form"
                data-kt-redirect-url="{{ route('login') }}"
                action="{{ route('register') }}"
            >
                <div class="text-start mb-10">
                    <h1
                        class="text-dark mb-3 fs-3x"
                        data-kt-translate="sign-up-title"
                    >
                        Create an Account
                    </h1>
                    <div
                        class="text-gray-400 fw-semibold fs-6"
                        data-kt-translate="general-desc"
                    >
                        Get unlimited access &amp; earn money
                    </div>
                </div>
                <div class="row fv-row mb-7 fv-plugins-icon-container">
                    <div class="col-xl-6">
                        <input
                            class="form-control form-control-lg form-control-solid"
                            type="text"
                            placeholder="First Name"
                            name="first-name"
                            autocomplete="off"
                            data-kt-translate="sign-up-input-first-name"
                        />
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                        ></div>
                    </div>
                    <div class="col-xl-6">
                        <input
                            class="form-control form-control-lg form-control-solid"
                            type="text"
                            placeholder="Last Name"
                            name="last-name"
                            autocomplete="off"
                            data-kt-translate="sign-up-input-last-name"
                        />
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                        ></div>
                    </div>
                </div>
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <input
                        class="form-control form-control-lg form-control-solid"
                        type="email"
                        placeholder="Email"
                        name="email"
                        autocomplete="off"
                        data-kt-translate="sign-up-input-email"
                    />
                    <div
                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                    ></div>
                </div>
                <div
                    class="fv-row mb-10 fv-plugins-icon-container"
                    data-kt-password-meter="true"
                >
                    <div class="mb-1">
                        <div class="position-relative mb-3">
                            <input
                                class="form-control form-control-lg form-control-solid"
                                type="password"
                                placeholder="Password"
                                name="password"
                                autocomplete="off"
                                data-kt-translate="sign-up-input-password"
                            />
                            <span
                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                data-kt-password-meter-control="visibility"
                            >
                                <i class="ki-duotone ki-eye-slash fs-2"></i>
                                <i class="ki-duotone ki-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div
                            class="d-flex align-items-center mb-3"
                            data-kt-password-meter-control="highlight"
                        >
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"
                            ></div>
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"
                            ></div>
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"
                            ></div>
                            <div
                                class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"
                            ></div>
                        </div>
                    </div>
                    <div class="text-muted" data-kt-translate="sign-up-hint">
                        Use 8 or more characters with a mix of letters, numbers
                        &amp; symbols.
                    </div>
                    <div
                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                    ></div>
                </div>
                <div class="fv-row mb-10 fv-plugins-icon-container">
                    <input
                        class="form-control form-control-lg form-control-solid"
                        type="password"
                        placeholder="Confirm Password"
                        name="confirm-password"
                        autocomplete="off"
                        data-kt-translate="sign-up-input-confirm-password"
                    />
                    <div
                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                    ></div>
                </div>
                <div class="d-flex flex-stack">
                    <button
                        type="submit"
                        id="kt_sign_up_submit"
                        class="btn btn-primary"
                    >
                        @include('partials/general/_button-indicator', ['label'
                        => 'Sign Up'])
                    </button>
                    <div class="d-flex align-items-center">
                        <div class="text-gray-400 fw-semibold fs-6 me-6">
                            Or
                        </div>
                        <a
                            href="#"
                            class="symbol symbol-circle symbol-45px w-45px bg-light me-3"
                        >
                            <img
                                alt="Logo"
                                src="assets/media/svg/brand-logos/google-icon.svg"
                                class="p-4"
                            />
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="m-0">
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
            <div
                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4"
                data-kt-menu="true"
                id="kt_auth_lang_menu"
            >
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
            </div>
        </div>
    </div>
</x-auth-layout>
