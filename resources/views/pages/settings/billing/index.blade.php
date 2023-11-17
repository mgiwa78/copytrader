<x-default-layout>
    @section('title') Dashboard @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="card mb-5 mb-xl-10 py-10">
            <div class="card-body pb-0">
                <div class="row p-5">
                    <div class="col-8">
                        <div
                            style="justify-content: space-around"
                            class="d-flex w-100"
                        >
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3"
                            >
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i
                                        class="ki-duotone ki-arrow-up fs-3 text-success me-2"
                                    >
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <div
                                        class="fs-2 fw-bold counted"
                                        data-kt-countup="true"
                                        data-kt-countup-value="4500"
                                        data-kt-countup-prefix="$"
                                        data-kt-initialized="1"
                                    >
                                        0
                                    </div>
                                </div>

                                <div class="fw-semibold fs-6 text-gray-400">
                                    My accounts
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3"
                            >
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i
                                        class="ki-duotone ki-arrow-down fs-3 text-danger me-2"
                                    >
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <div
                                        class="fs-2 fw-bold counted"
                                        data-kt-countup="true"
                                        data-kt-countup-value="80"
                                        data-kt-initialized="1"
                                    >
                                        0
                                    </div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">
                                    Whitelabel accounts
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div
                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3"
                            >
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <i
                                        class="ki-duotone ki-arrow-up fs-3 text-success me-2"
                                    >
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <div
                                        class="fs-2 fw-bold counted"
                                        data-kt-countup="true"
                                        data-kt-countup-value="60"
                                        data-kt-countup-prefix="%"
                                        data-kt-initialized="1"
                                    >
                                        0
                                    </div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-400">
                                    Max allowed
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->

                            <!--end::Wrapper-->

                            <!--end::Progress-->

                            <!--end::Info-->
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="d-flex flex-column gap-4">
                            <a
                                href="#"
                                class="btn btn-sm btn-light me-2"
                                id="kt_user_follow_button"
                            >
                                <i
                                    class="ki-duotone ki-plus fs-6 text-muted me-1"
                                >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Indicator label-->
                                <span class="indicator-label">Follow</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress"
                                    >Please wait...
                                    <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"
                                    ></span
                                ></span>
                                <!--end::Indicator progress-->
                            </a>
                            <a href="#" class="btn btn-sm btn-primary me-3">
                                <i
                                    class="ki-duotone text-white ki-switch fs-6 me-1"
                                >
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                Hire Me</a
                            >
                        </div>
                    </div>
                </div>
                <div class="row p-5">
                    <div class="card mb-10">
                        <!--begin::Card header-->
                        <div
                            class="card-header card-header-stretch border-bottom border-gray-200"
                        >
                            <!--begin::Title-->
                            <div class="card-title">
                                <h3 class="fw-bold m-0">Billing History</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Tab Content-->
                        <!--begin::Tab panel-->

                        <!--begin::Table-->
                        <table
                            class="table table-row-bordered align-middle gy-4 gs-9"
                        >
                            <thead
                                class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75"
                            >
                                <tr>
                                    <td class="min-w-150px">Allows</td>
                                    <td class="min-w-250px">Type</td>
                                    <td class="min-w-150px">Status</td>
                                    <td class="min-w-150px">Valid To</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <!--begin::Table row-->
                                <tr>
                                    <td colspan="4" class="text-center">
                                        No record
                                    </td>
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->

                                <!--end::Table row-->
                            </tbody>
                        </table>
                        <!--end::Table-->

                        <!--end::Tab panel-->

                        <!--end::Tab panel-->
                        <!--end::Tab Content-->
                    </div>
                    <div class="card">
                        <!--begin::Card header-->
                        <div
                            class="card-header card-header-stretch border-bottom border-gray-200"
                        >
                            <!--begin::Title-->
                            <div class="card-title">
                                <h3 class="fw-bold m-0">Expired Hosting</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Tab Content-->
                        <!--begin::Tab panel-->

                        <!--begin::Table-->
                        <table
                            class="table table-row-bordered align-middle gy-4 gs-9"
                        >
                            <thead
                                class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75"
                            >
                                <tr>
                                    <td class="min-w-150px">Allows</td>
                                    <td class="min-w-250px">Type</td>
                                    <td class="min-w-150px">Status</td>
                                    <td class="min-w-150px">Valid To</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <!--begin::Table row-->
                                <tr>
                                    <td colspan="4" class="text-center">
                                        No record
                                    </td>
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->

                                <!--end::Table row-->
                            </tbody>
                        </table>
                        <!--end::Table-->

                        <!--end::Tab panel-->

                        <!--end::Tab panel-->
                        <!--end::Tab Content-->
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
