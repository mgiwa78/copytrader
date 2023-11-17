@extends('layout.user-settings')

@section('child')
<div class="card card-flush h-lg-100" id="kt_contacts_main">
												<!--begin::Card header-->
												<div class="card-header pt-7" id="kt_chat_contacts_header">
													<!--begin::Card title-->
													<div class="card-title">
														<i class="ki-duotone ki-badge fs-1 me-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
														</i>
														<h2>Password</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
											<div class="row mb-1">
																<div class="col-lg-4">
																	<div class="fv-row mb-0 fv-plugins-icon-container">
																		<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
																		<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword">
																	<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																</div>
																<div class="col-lg-4">
																	<div class="fv-row mb-0 fv-plugins-icon-container">
																		<label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
																		<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword">
																	<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																</div>
																<div class="col-lg-4">
																	<div class="fv-row mb-0 fv-plugins-icon-container">
																		<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
																		<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword">
																	<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																</div>
															</div>
													
														<!--end::Row-->
														<!--begin::Row-->
													
														<!--end::Row-->
														<!--begin::Input group-->
												
														<!--end::Input group-->
														<!--begin::Separator-->
														<div class="separator mb-6"></div>
														<!--end::Separator-->
														<!--begin::Action buttons-->
														<div class="d-flex justify-content-end">
															<!--begin::Button-->
															<button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
															<!--end::Button-->
															<!--begin::Button-->
															<button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
																<span class="indicator-label">Update</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
															<!--end::Button-->
														</div>
														<!--end::Action buttons-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Card body-->
											</div>

@endsection