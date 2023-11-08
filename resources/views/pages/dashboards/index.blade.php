<x-default-layout>
    @section('title') Dashboard @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-8">
            <!--begin::Accordion-->
            <div>
                <h2>Welcome to Social Trader Tools</h2>
                <div id="">
                    <div class="">
                        Before you get stuck into the platform, please take a
                        few moments to read through the brief introduction of
                        the core components of the platform. We hope that this
                        will ease the setup process and get you up in running as
                        soon as possible.
                    </div>
                </div>
            </div>
            <div class="accordion mt-5" id="kt_accordion_1">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_1_header_1">
                        <button
                            class="accordion-button fs-4 fw-semibold collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#kt_accordion_1_body_1"
                            aria-expanded="true"
                            aria-controls="kt_accordion_1_body_1"
                        >
                            Getting help
                        </button>
                    </h2>
                    <div
                        id="kt_accordion_1_body_1"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_1_header_1"
                        data-bs-parent="#kt_accordion_1"
                    >
                        <div class="accordion-body">
                            To get started and learn about how our platform
                            works you can visit the knowledge base. Here we
                            provide in-depth explanations and guides on what
                            each feature is, their purpose and how they work.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Knowledge Base</span
                                    >
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->

                                    <!--end::Indicator progress-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="kt_accordion_2_header_2">
                        <button
                            class="accordion-button fs-4 fw-semibold collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#kt_accordion_2_body_2"
                            aria-controls="kt_accordion_2_body_2"
                        >
                            Accounts
                        </button>
                    </h2>
                    <div
                        id="kt_accordion_2_body_2"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_2_header_2"
                        data-bs-parent="#kt_accordion_2"
                    >
                        <div class="accordion-body">
                            You can add any MT4/5 broker account to the
                            platform. To add an account, you need to submit your
                            MT4 login credentials. You can use your main or
                            investor password depending on the use case. For
                            example, to receive email alerts you only need the
                            investor password but to copy trades you need full
                            trading rights via the main password.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Go to accounts</span
                                    >
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->

                                    <!--end::Indicator progress-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="kt_accordion_3_header_3">
                        <button
                            class="accordion-button fs-4 fw-semibold collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#kt_accordion_3_body_3"
                            aria-controls="kt_accordion_3_body_3"
                        >
                            Trade copiers
                        </button>
                    </h3>
                    <div
                        id="kt_accordion_3_body_3"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_3_header_3"
                        data-bs-parent="#kt_accordion_3"
                    >
                        <div class="accordion-body">
                            Any accounts that you add to the platform can be
                            setup to copy trades from your other accounts or
                            signals you have access to. You do not have
                            predefine leads/copy froms or follower/send tos, so
                            any account can send or receive trades.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Go to trade copiers</span
                                    >
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->

                                    <!--end::Indicator progress-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h4 class="accordion-header" id="kt_accordion_4_header_4">
                        <button
                            class="accordion-button fs-4 fw-semibold collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#kt_accordion_4_body_4"
                            aria-controls="kt_accordion_4_body_4"
                        >
                            Email alerts
                        </button>
                    </h4>
                    <div
                        id="kt_accordion_4_body_4"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_4_header_4"
                        data-bs-parent="#kt_accordion_4"
                    >
                        <div class="accordion-body">
                            Any accounts that you add to the platform or signals
                            you have access to, can be setup to receive real
                            time email alerts for trading events on the account.
                            Trading events can be trade open, trades closes and
                            more.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Go to email alerts</span
                                    >
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->

                                    <!--end::Indicator progress-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h4 class="accordion-header" id="kt_accordion_5_header_5">
                        <button
                            class="accordion-button fs-4 fw-semibold collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#kt_accordion_5_body_5"
                            aria-controls="kt_accordion_5_body_5"
                        >
                            Signals
                        </button>
                    </h4>
                    <div
                        id="kt_accordion_5_body_5"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_5_header_5"
                        data-bs-parent="#kt_accordion_5"
                    >
                        <div class="accordion-body">
                            You can follow trading accounts of other users
                            either by a manual share or signing up via a signal
                            page. Depending on your access rights, you can; view
                            stats, setup email alerts & trade copiers.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Go to signals</span
                                    >
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->

                                    <!--end::Indicator progress-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h4 class="accordion-header" id="kt_accordion_6_header_6">
                        <button
                            class="accordion-button fs-4 fw-semibold collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#kt_accordion_6_body_6"
                            aria-controls="kt_accordion_6_body_6"
                        >
                            Signal providers
                        </button>
                    </h4>
                    <div
                        id="kt_accordion_6_body_6"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_6_header_6"
                        data-bs-parent="#kt_accordion_6"
                    >
                        <div class="accordion-body">
                            You can grant access to your trading account to
                            other users as a signal provider. Signal providing
                            can be as simple as letting another user see the
                            stats page or full blown selling of your signals as
                            email alerts and/or a trade copiers to other users.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Go to signal providers</span
                                    >
                                    <!--end::Indicator label-->
                                    <!--begin::Indicator progress-->

                                    <!--end::Indicator progress-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Accordion-->
        </div>
    </div>
    <!--end::Col-->
    <!--end::Row-->

    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
