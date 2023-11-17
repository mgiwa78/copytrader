<x-default-layout> @section('title') Dashboard @endsection @section('breadcrumbs') {{ Breadcrumbs::render('dashboard')
    }} @endsection


    <!--begin::Row--> <!--begin::Engage widget 10-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="col-xl-12 flex-column-fluid">
        <!--begin::List Widget 6-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title fw-bolder text-dark">Getting Started</h3>

            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0">
                <!--begin::Item-->
                <div class="row">
                <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7 col-xl-3 col-sm-4">
                    <a>
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-warning me-5">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_master">ADD MASTER</a>

                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <!--end::Lable-->
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7 col-xl-3 col-sm-4">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-success me-5">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_slave">ADD SLAVE</a>

                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7 col-xl-3 col-sm-4">
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-danger me-5">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">DEFINE COPY SETTINGS</a>

                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <!--end::Lable-->
                </div>

                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5 mb-7 col-xl-3 col-sm-4" >
                    <!--begin::Icon-->
                    <span class="svg-icon svg-icon-info me-5">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">COPY YOUR TRADE</a>

                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->

                    <!--end::Lable-->
                </div>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 6-->
    </div>

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

        <!--begin::Modal - New Target-->
        <div class="modal fade" id="kt_modal_new_master" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">{!! getIcon('cross', 'fs-1') !!}</div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                        <form id="kt_modal_new_master_form" class="form" action="{{ route('master-accounts.store') }}" method="post">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">Master Details</h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->

                            <div class="col-md-12 fv-row mb-8">
                                <label class="required fs-6 fw-semibold mb-2">Broker/Technology</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Broker/Technology" name="broker_technology">
                                    <option value="">Select broker/technology...</option>
                                    <option value="1">MT4</option>
                                    <option value="2">MT5</option>

                                </select>
                            </div>

                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="d-flex flex-column  fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Login ID</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Login ID" name="login_id" />
                                </div>
                                <!--end::Input group-->
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="d-flex flex-column  fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Password </span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Password" name="password" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Server</span>
                                    @include('partials/general/_form-tooltip-hint')
                                </label>
                                <!--end::Label-->
                                <input class="form-control form-control-solid" value="" name="server" />
                            </div>
                            <!--end::Input group-->
                            <div class="col-md-12 fv-row mb-8">
                                <label class="required fs-6 fw-semibold mb-2">Subscription</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Subscription" name="subscription">
                                    <option value="">Select broker/technology...</option>
                                    <option value="1">None</option>
                                    <option value="2">Lifetime</option>

                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_master_cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_new_master_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Target-->

        <div class="modal fade" id="kt_modal_new_slave" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-650px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">{!! getIcon('cross', 'fs-1') !!}</div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                        <form id="kt_modal_new_slave_form" class="form" action="{{ route('slave-accounts.store') }}" method="post">
                            @csrf
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">Slave Details</h1>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->

                            <div class="col-md-12 fv-row mb-8">
                                <label class="required fs-6 fw-semibold mb-2">Broker/Technology</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Broker/Technology" name="broker_technology">
                                    <option value="">Select broker/technology...</option>
                                    <option value="1">MT4</option>
                                    <option value="2">MT5</option>

                                </select>
                            </div>

                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="d-flex flex-column  fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Login ID</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Login ID" name="login_id" />
                                </div>
                                <!--end::Input group-->
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="d-flex flex-column  fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Password </span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="Password" name="password" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Server</span>
                                    @include('partials/general/_form-tooltip-hint')
                                </label>
                                <!--end::Label-->
                                <input class="form-control form-control-solid" value="" name="server" />
                            </div>
                            <!--end::Input group-->
                            <div class="col-md-12 fv-row mb-8">
                                <label class="required fs-6 fw-semibold mb-2">Subscription</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Subscription" name="subscription">
                                    <option value="">Select broker/technology...</option>
                                    <option value="1">None</option>
                                    <option value="2">Lifetime</option>

                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_slave_cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_new_slave_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - New Target-->
    </x-default-layout>
