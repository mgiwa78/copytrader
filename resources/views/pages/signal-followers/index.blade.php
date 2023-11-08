<x-default-layout>
    @section('title') Signal Followers @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
  <div class="col-8">
            <!--begin::Accordion-->
            <div>
                <h2>There are currently no users following your signal</h2>
                <div id="">
                    <div class="">
                You can offer your trading expertise out to other people by creating a signal provider page from your account.
                    </div>
                             <button
                            class="btn btn-primary mt-5"
                        >
                        Add Follower
                        </button>
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
                         Need to add a hosting package?
                        </button>
                    </h2>
                    <div
                        id="kt_accordion_1_body_1"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_1_header_1"
                        data-bs-parent="#kt_accordion_1"
                    >
                        <div class="accordion-body">
                           Before adding an account you require an account hosting package.
                            <div class="accordion-footer mt-5">
                                <a
                                    id="kt_sign_in_submit"
                                    class="btn btn-primary me-2 flex-shrink-0"
                                >
                                    <!--begin::Indicator label-->
                                    <span
                                        class="indicator-label"
                                        data-kt-translate="sign-in-submit"
                                        >Account Hosting</span
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
                           How do I manage signal followers?
                        </button>
                    </h2>
                    <div
                        id="kt_accordion_2_body_2"
                        class="accordion-collapse collapse"
                        aria-labelledby="kt_accordion_2_header_2"
                        data-bs-parent="#kt_accordion_2"
                    >
                        <div class="accordion-body">
                          Here you can find the documentation on how to add an account.
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
            
            <!--end::Accordion-->
        </div>
    </div>
    <!--end::Col-->
    <!--end::Row-->

    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
