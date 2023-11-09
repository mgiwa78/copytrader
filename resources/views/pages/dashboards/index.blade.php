<x-default-layout> @section('title') Dashboard @endsection @section('breadcrumbs') {{ Breadcrumbs::render('dashboard')
    }} @endsection <!--begin::Row--> <!--begin::Engage widget 10-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-3 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
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
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Accounts Connected</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Accounts Inactive</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Accounts Disconnected</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
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
                    <div class="card h-lg-100">
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
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Total Equity (EUR)</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Total Balance (EUR)</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Monthly PnL (EUR)</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
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
                    <div class="card h-lg-100">
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
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Today’s Copied Orders</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Today’s Failed Orders</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Open Trades</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-danger fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>0.47%</span>
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
                    <div class="card h-lg-100">
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
                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Free Plan Accounts</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Flexible Plan Accounts</span>
                                </div>

                                <span class="fw-semibold fs-2x text-gray-800 lh-1 ls-n2">0</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0 mb-5">
                                    <span class="fw-semibold fs-6 text-gray-400">Flexible Plan Accounts</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.1%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->

            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="card card-flush mt-6 mt-xl-9">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Last Copied Orders</h3>

                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar my-1">
                    <!--begin::Select-->
                    <div class="me-6 my-1">
                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All time</option>
                            <option value="thisyear">This year</option>
                            <option value="thismonth">This month</option>
                            <option value="lastmonth">Last month</option>
                            <option value="last90days">Last 90 days</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Select-->
                    <div class="me-4 my-1">
                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All Orders</option>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                            <option value="In Progress">In Progress</option>
                            <option value="In Transit">In Transit</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                    </div>
                    <!--end::Search-->
                </div>
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
                                <th class="min-w-150px">Date</th>
                                <th class="min-w-250px">Master</th>
                                <th class="min-w-90px">Master TKT</th>
                                <th class="min-w-50px text-end">Side/Action</th>
                                <th class="min-w-50px text-end">Symbol</th>
                                <th class="min-w-50px text-end">Size</th>
                                <th class="min-w-50px text-end">Notional USD</th>
                                <th class="min-w-50px text-end">Price</th>
                                <th class="min-w-50px text-end">SL</th>
                                <th class="min-w-50px text-end">TP</th>
                                <th class="min-w-50px text-end">Copied On</th>
                                <th class="min-w-90px">Status</th>

                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>
                                <td>
                                Oct 25, 2023
                                </td>
                                <td>Henry Gabriel</td>
                                <td>$925.00</td>
                                <td>
                                    $925.00
                                </td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>
                                    <span class="badge badge-light-success fw-bold px-4 py-3">Accepted</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Card body-->
        </div>

            <div class="card card-flush mt-6 mt-xl-9">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Masters</h3>

                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar my-1">
                    <!--begin::Select-->
                    <div class="me-6 my-1">
                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All time</option>
                            <option value="thisyear">This year</option>
                            <option value="thismonth">This month</option>
                            <option value="lastmonth">Last month</option>
                            <option value="last90days">Last 90 days</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Select-->
                    <div class="me-4 my-1">
                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All Orders</option>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                            <option value="In Progress">In Progress</option>
                            <option value="In Transit">In Transit</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                    </div>
                    <!--end::Search-->
                </div>
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

                                <th class="min-w-250px">Account</th>
                                <th class="min-w-90px">Balance/Credit</th>
                                <th class="min-w-50px text-end">Free Margin</th>
                                <th class="min-w-50px text-end">Open Trades</th>
                                <th class="min-w-50px text-end">Subscription</th>
                                <th class="min-w-50px text-end">OFF/ON</th>
                                <th class="min-w-50px text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>
                                <td>Henry Gabriel</td>
                                <td>$925.00</td>
                                <td>
                                    $925.00
                                </td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>

                                <td>
                                    <span class="badge badge-light-success fw-bold px-4 py-3">Active</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--end::Card body-->
        </div>

        <div class="card card-flush mt-6 mt-xl-9">
            <!--begin::Card header-->
            <div class="card-header mt-5">
                <!--begin::Card title-->
                <div class="card-title flex-column">
                    <h3 class="fw-bold mb-1">Slaves</h3>

                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar my-1">
                    <!--begin::Select-->
                    <div class="me-6 my-1">
                        <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All time</option>
                            <option value="thisyear">This year</option>
                            <option value="thismonth">This month</option>
                            <option value="lastmonth">Last month</option>
                            <option value="last90days">Last 90 days</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Select-->
                    <div class="me-4 my-1">
                        <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                            <option value="All" selected="selected">All Orders</option>
                            <option value="Approved">Approved</option>
                            <option value="Declined">Declined</option>
                            <option value="In Progress">In Progress</option>
                            <option value="In Transit">In Transit</option>
                        </select>
                    </div>
                    <!--end::Select-->
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                    </div>
                    <!--end::Search-->
                </div>
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

                                <th class="min-w-250px">Account</th>
                                <th class="min-w-90px">Balance/Credit</th>
                                <th class="min-w-50px text-end">Free Margin</th>
                                <th class="min-w-50px text-end">Open Trades</th>
                                <th class="min-w-50px text-end">Subscription</th>
                                <th class="min-w-50px text-end">OFF/ON</th>
                                <th class="min-w-50px text-end">Status</th>
                            </tr>
                        </thead>
                        <tbody class="fs-6">
                            <tr>
                                <td>Henry Gabriel</td>
                                <td>$925.00</td>
                                <td>
                                    $925.00
                                </td>
                                <td>$925.00</td>
                                <td>$925.00</td>
                                <td>$925.00</td>

                                <td>
                                    <span class="badge badge-light-success fw-bold px-4 py-3">Active</span>
                                </td>
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
