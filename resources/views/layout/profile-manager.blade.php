<x-default-layout>
    @section('title') Signals @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection

    <div class="row g-7">
        <!--begin::Contact groups-->
        <div class="col-lg-12 col-xl-3">
            <!--begin::Contact group wrapper-->
            <div class="card card-flush">
                <!--end::Card header-->
                <!--begin::Card body-->

                <div class="card-body pt-5">
                    <div class="d-flex flex-column gap-5">
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a
                                href="{{
                                    route('profile-manager.profile-settings')
                                }}"
                                class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary {{ request()->routeIs('profile-manager.profile-settings') ? 'active' : '' }}"
                                >Profile Settings</a
                            >
                        </div>
                        <div class="d-flex flex-stack">
                            <a
                                href="{{
                                    route('profile-manager.billing-address')
                                }}"
                                class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary {{ request()->routeIs('profile-manager.billing-address') ? 'active' : '' }}"
                                >Billing Address</a
                            >
                        </div>
                        <!--begin::Contact group-->

                        <!--begin::Contact group-->
                    </div>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contact group wrapper-->
        </div>
        <div class="col-lg-12 col-xl-9">@yield('child')</div>
        <!--end::Contact groups-->
        <!--begin::Search-->

        <!--end::Content-->
    </div>
</x-default-layout>
