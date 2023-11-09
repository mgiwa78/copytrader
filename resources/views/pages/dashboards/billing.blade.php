<x-default-layout>
    @section('title') Billing @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('billing')
    }}
    @endsection
    <!--begin::Row-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100" style="height: 85%!important;">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="ki-duotone ki-compass fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column  mb-5">
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">My Accounts</span>
                                </div>
                                <!--begin::Number-->
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->

                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->

                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100" style="height: 85%!important;">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="ki-duotone ki-chart-simple fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column mb-5">

                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Whitelabel Accounts</span>
                                </div>
                                <!--begin::Number-->
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->


                            </div>
                            <!--end::Section-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100" style="height: 85%!important;">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="ki-duotone ki-abstract-39 fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column mb-5">
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Max Allowed</span>
                                </div>
                                <!--begin::Number-->
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->



                            </div>
                            <!--end::Section-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100" style="height: 85%!important;">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <i class="ki-duotone ki-map fs-2hx text-gray-600">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->

                                <div class="m-0 mb-5">
                                    <a
                                        id="kt_sign_in_submit"
                                        class="btn btn-success me-2 flex-shrink-0"
                                    >
                                        <!--begin::Indicator label-->
                                        <span
                                            class="indicator-label"
                                            data-kt-translate="sign-in-submit"
                                            >Add Hosting</span
                                        >
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->

                                        <!--end::Indicator progress-->
                                    </a>
                                </div>

                                <div class="m-0 mb-5">
                                    <a
                                        id="kt_sign_in_submit"
                                        class="btn btn-primary me-2 flex-shrink-0"
                                    >
                                        <!--begin::Indicator label-->
                                        <span
                                            class="indicator-label"
                                            data-kt-translate="sign-in-submit"
                                            >Auto Upgrade</span
                                        >
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->

                                        <!--end::Indicator progress-->
                                    </a>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->

                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
    <!--end::Col-->
    <!--end::Row-->
    <div class="card card-flush mt-6 mt-xl-9">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Active Hosting</h3>

                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->

                <!--begin::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                        <thead class="fs-7 text-gray-400 text-uppercase">
                            <tr>
                                <th class="min-w-150px">Allows</th>
                                <th class="min-w-250px">Type</th>
                                <th class="min-w-90px">Status</th>
                                <th class="min-w-50px text-end">Valid To</th>


                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>

                            </tr>

                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Card body-->
        </div>
    <!--begin::Row-->
    <!--end::Row-->

    <div class="card card-flush mt-6 mt-xl-9">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Expired Hosting</h3>

                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->

                <!--begin::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                        <thead class="fs-7 text-gray-400 text-uppercase">
                            <tr>
                                <th class="min-w-150px">Allows</th>
                                <th class="min-w-250px">Type</th>
                                <th class="min-w-90px">Status</th>
                                <th class="min-w-50px text-end">Expired</th>


                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>

                            </tr>

                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Card body-->
        </div>
</x-default-layout>
