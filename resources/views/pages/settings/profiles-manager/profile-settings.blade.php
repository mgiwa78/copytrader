@extends('layout.profile-manager')

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
														<h2>Profile Details</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Form-->
													<form id="kt_ecommerce_settings_general_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
											
														<div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
															<!--begin::Col-->
															<div class="col">
																<!--begin::Input group-->
																<div class="fv-row mb-7 fv-plugins-icon-container">
																	<!--begin::Label-->
															<label class="fs-6 fw-semibold form-label mt-3">
																<span class="required">Name</span>
																<span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's name." data-bs-original-title="Enter the contact's name." data-kt-initialized="1">
																	<i class="ki-duotone ki-information fs-7">
																		<span class="path1"></span>
																		<span class="path2"></span>
																		<span class="path3"></span>
																	</i>
																</span>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" name="name" value="Emma Smith">
																	<!--end::Input-->
																<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
																<!--end::Input group-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Input group-->
																<div class="fv-row mb-7">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold form-label mt-3">
																		<span>Phone</span>
																		<span class="ms-1" data-bs-toggle="tooltip" aria-label="Enter the contact's phone number (optional)." data-bs-original-title="Enter the contact's phone number (optional)." data-kt-initialized="1">
																			<i class="ki-duotone ki-information fs-7">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" name="phone" value="">
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Col-->
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