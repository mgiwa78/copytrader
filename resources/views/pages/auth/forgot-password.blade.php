<x-auth-layout>

    <!--begin::Form-->
<div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
						<!--begin::Header-->
						<div class="d-flex flex-stack py-2">
							<!--begin::Back link-->
							<div class="me-2">
								<a href="../../demo1/dist/authentication/layouts/fancy/sign-in.html" class="btn btn-icon bg-light rounded-circle">
									<i class="ki-duotone ki-black-left fs-2 text-gray-800"></i>
								</a>
							</div>
							<!--end::Back link-->
							<!--begin::Sign Up link-->
							<div class="m-0">
								<span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="password-reset-head-desc">Already a member ?</span>
								<a href="../../demo1/dist/authentication/layouts/fancy/sign-in.html" class="link-primary fw-bold fs-5" data-kt-translate="password-reset-head-link">Sign In</a>
							</div>
							<!--end::Sign Up link=-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="py-20">
							<!--begin::Form-->
							<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_password_reset_form"  data-kt-redirect-url="{{ route('login') }}" action="{{ route('password.request') }}" >
								<!--begin::Heading-->
								<div class="text-start mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3 fs-3x" data-kt-translate="password-reset-title">Forgot Password ?</h1>
									<!--end::Title-->
									<!--begin::Text-->
									<div class="text-gray-400 fw-semibold fs-6" data-kt-translate="password-reset-desc">Enter your email to reset your password.</div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10 fv-plugins-icon-container">
									<input class="form-control form-control-solid" type="email" placeholder="Email" name="email" autocomplete="off" data-kt-translate="password-reset-input-email">
								<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack">
									<!--begin::Link-->
									<div class="m-0">
  <button type="button" id="kt_password_reset_submit" class="btn btn-primary me-4">
                @include('partials/general/_button-indicator', ['label' => 'Submit'])
            </button>
										<a  href="{{ route('login') }}" class="btn btn-light">Cancel</a>
									</div>
									<!--end::Link-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="m-0">
							<!--begin::Toggle-->
							<button class="btn btn-flex btn-link rotate" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-25px h-25px rounded-circle me-3" src="assets/media/flags/united-states.svg" alt="">
								<span data-kt-element="current-lang-name" class="me-2">English</span>
								<i class="ki-duotone ki-down fs-2 text-muted rotate-180 m-0"></i>
							</button>
							<!--end::Toggle-->
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4" data-kt-menu="true" id="kt_auth_lang_menu">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/united-states.svg" alt="">
										</span>
										<span data-kt-element="lang-name">English</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/spain.svg" alt="">
										</span>
										<span data-kt-element="lang-name">Spanish</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/germany.svg" alt="">
										</span>
										<span data-kt-element="lang-name">German</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/japan.svg" alt="">
										</span>
										<span data-kt-element="lang-name">Japanese</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="assets/media/flags/france.svg" alt="">
										</span>
										<span data-kt-element="lang-name">French</span>
									</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Footer-->
					</div>
    <!--end::Form-->

</x-auth-layout>
