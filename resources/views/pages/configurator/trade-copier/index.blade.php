<x-default-layout>
    @section('title') Trade Copier @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-8">
            <!--begin::Accordion-->
            <div>
                <h2>No copiers have been created</h2>
                <div id="">
                    <div class="">
                        Any accounts that you add to the platform can be set up
                        to copy trades from your other accounts or signals you
                        have access to. You do not have predefine leads/copy
                        froms or followers/send tos, so any account can send or
                        receive trades.
                        <button class="btn btn-primary mt-5" type="button">
                            Create Copier
                        </button>
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
                            How do I create a copier?
                        </button>
                    </h2>
                    <div
                        id="kt_accordion_1_body_1"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_1_header_1"
                        data-bs-parent="#kt_accordion_1"
                    >
                        <div class="accordion-body">
                            Here you can find the documentation on how to create
                            a copier and configure it.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Documentation</span
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
                            You can also view the video tutorial here.
                        </button>
                    </h3>
                    <div
                        id="kt_accordion_3_body_3"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_3_header_3"
                        data-bs-parent="#kt_accordion_3"
                    >
                        <div class="accordion-body">
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Video Tutorials</span
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
        </div>
    </div>
    <!--end::Col-->
    <!--end::Row-->

    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
