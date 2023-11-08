<x-default-layout>
    @section('title') Equity Monitor @endsection @section('breadcrumbs')
    {{ Breadcrumbs::render('dashboard')
    }}
    @endsection
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <div class="col-8">
             <div>
                <h2>There are currently no equity monitors set up</h2>
                <div id="">
                    <div class="">
                    You can create equity monitors for each of your account. Set to a value or percentage greater or less than your current equity to send an alert, stop copiers and close trades.
                        
                    </div>
                    <button
                           class="btn btn-primary  mt-5"
                            type="button"
                        >
                            Create Monitor
                        </button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Col-->
    <!--end::Row-->

    <!--begin::Row-->
    <!--end::Row-->
</x-default-layout>
