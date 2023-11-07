@extends('layout.master') @section('content')

<!--begin::App-->
<div class="d-flex flex-column flex-lg-row flex-column-fluid">
    <!--begin::Logo-->
    <a
        href="../../demo1/dist/index.html"
        class="d-block d-lg-none mx-auto py-20"
    >
        <img
            alt="Logo"
            src="assets/media/logos/default.svg"
            class="theme-light-show h-25px"
        />
        <img
            alt="Logo"
            src="assets/media/logos/default-dark.svg"
            class="theme-dark-show h-25px"
        />
    </a>
    <!--end::Logo-->
    <!--begin::Aside-->
    <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">
        <!--begin::Wrapper-->
     
               {{ $slot }}
            
           
      
        <!--end::Wrapper-->
    </div>
    <!--end::Aside-->
    <!--begin::Body-->
    <div
        class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat"
        style="background-image: url(assets/media/auth/bg11.png)"
    ></div>
</div>
<!--end::App-->

@endsection
