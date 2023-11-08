<x-default-layout>
    @section('title') Accounts @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
      <div class="col-8">
            <!--begin::Accordion-->
            <div>
                <h2>No accounts have been added</h2>
                <div id="">
                    <div class="">
                  You can add any MT4/5 broker account to the platform. To add an account, you need to submit your MT4 login credentials. You can use your main or investor password depending on the use case. For example, to receive email alerts you only need the investor password but to copy trades you need full trading rights via the main password.
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
                           How do I add an account?
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
            <!--end::Accordion-->
        </div>
    </div>
    <!--end::Col-->
    <!--end::Row-->

    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
