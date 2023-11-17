@extends('layout.profile-manager') @section('child')
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
            <h2>Billing address</h2>
        </div>
        <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-5">
        <!--begin::Form-->
        <form
            id="kt_ecommerce_settings_general_form"
            class="form fv-plugins-bootstrap5 fv-plugins-framework"
            action="#"
        >
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Company Name</span>
                    <span
                        class="ms-1"
                        data-bs-toggle="tooltip"
                        aria-label="Enter the contact's company name (optional)."
                        data-bs-original-title="Enter the contact's company name (optional)."
                        data-kt-initialized="1"
                    >
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <input
                    type="text"
                    placeholder="Company name"
                    class="form-control form-control-solid"
                    name="company_name"
                    value=""
                />
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Address Line 1</span>
                    <span
                        class="ms-1"
                        data-bs-toggle="tooltip"
                        aria-label="Enter any additional notes about the contact (optional)."
                        data-bs-original-title="Enter any additional notes about the contact (optional)."
                        data-kt-initialized="1"
                    >
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <textarea
                    class="form-control form-control-solid"
                    name="address_line_1"
                    placeholder="Address Line 1"
                ></textarea>
                <!--end::Input-->
            </div>
            <div class="fv-row mb-7">
                <!--begin::Label-->
                <label class="fs-6 fw-semibold form-label mt-3">
                    <span>Address Line 2</span>
                    <span
                        class="ms-1"
                        data-bs-toggle="tooltip"
                        aria-label="Enter any additional notes about the contact (optional)."
                        data-bs-original-title="Enter any additional notes about the contact (optional)."
                        data-kt-initialized="1"
                    >
                        <i class="ki-duotone ki-information fs-7">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <textarea
                    class="form-control form-control-solid"
                    name="address_line_2"
                    placeholder="Address Line 2"
                ></textarea>
                <!--end::Input-->
            </div>
            <div
                class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2"
            >
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required">State/Province/Region</span>
                            <span
                                class="ms-1"
                                data-bs-toggle="tooltip"
                                aria-label="Enter the contact's email."
                                data-bs-original-title="Enter the contact's email."
                                data-kt-initialized="1"
                            >
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input
                            type="email"
                            class="form-control form-control-solid"
                            name="email"
                            placeholder="Enter email here"
                        />
                        <!--end::Input-->
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                        ></div>
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span>Postcode/Zipcode</span>
                            <span
                                class="ms-1"
                                data-bs-toggle="tooltip"
                                aria-label="Enter the contact's phone number (optional)."
                                data-bs-original-title="Enter the contact's phone number (optional)."
                                data-kt-initialized="1"
                            >
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input
                            placeholder="Enter Postcode/Zipcode here"
                            type="text"
                            class="form-control form-control-solid"
                            name="postcode/zipcode"
                        />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Col-->
            </div>
            <div
                class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2"
                data-select2-id="select2-data-121-sgby"
            >
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span>City</span>
                            <span
                                class="ms-1"
                                data-bs-toggle="tooltip"
                                aria-label="Enter the contact's city of residence (optional)."
                                data-bs-original-title="Enter the contact's city of residence (optional)."
                                data-kt-initialized="1"
                            >
                                <i class="ki-duotone ki-information fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                            </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input
                            type="text"
                            class="form-control form-control-solid"
                            name="city"
                            placeholder="Enter city here"
                        />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col" data-select2-id="select2-data-120-wz1q">
                    <!--begin::Input group-->
                    <div class="fv-row mb-7 fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="fs-6 fw-semibold form-label mt-3">
                            <span class="required">Country</span>
                        </label>
                        <!--end::Label-->
                        <div class="w-100">
                            <!--begin::Select2-->
                            <select
                                id="kt_ecommerce_select2_country"
                                class="form-select form-select-solid select2-hidden-accessible"
                                name="country"
                                data-kt-ecommerce-settings-type="select2_flags"
                                data-placeholder="Select a country"
                                data-select2-id="select2-data-kt_ecommerce_select2_country"
                                tabindex="-1"
                                aria-hidden="true"
                            >
                                <option
                                    data-select2-id="select2-data-118-r7pq"
                                ></option>
                                <option
                                    value="AF"
                                    data-kt-select2-country="assets/media/flags/afghanistan.svg"
                                    data-select2-id="select2-data-126-nhps"
                                >
                                    Afghanistan
                                </option>
                                <option
                                    value="AX"
                                    data-kt-select2-country="assets/media/flags/aland-islands.svg"
                                    data-select2-id="select2-data-127-vr33"
                                >
                                    Aland Islands
                                </option>
                                <option
                                    value="AL"
                                    data-kt-select2-country="assets/media/flags/albania.svg"
                                    data-select2-id="select2-data-128-47wf"
                                >
                                    Albania
                                </option>
                                <option
                                    value="DZ"
                                    data-kt-select2-country="assets/media/flags/algeria.svg"
                                    data-select2-id="select2-data-129-ihw1"
                                >
                                    Algeria
                                </option>
                                <option
                                    value="AS"
                                    data-kt-select2-country="assets/media/flags/american-samoa.svg"
                                    data-select2-id="select2-data-130-kct9"
                                >
                                    American Samoa
                                </option>
                                <option
                                    value="AD"
                                    data-kt-select2-country="assets/media/flags/andorra.svg"
                                    data-select2-id="select2-data-131-5pho"
                                >
                                    Andorra
                                </option>
                                <option
                                    value="AO"
                                    data-kt-select2-country="assets/media/flags/angola.svg"
                                    data-select2-id="select2-data-132-z9vn"
                                >
                                    Angola
                                </option>
                                <option
                                    value="AI"
                                    data-kt-select2-country="assets/media/flags/anguilla.svg"
                                    data-select2-id="select2-data-133-cnig"
                                >
                                    Anguilla
                                </option>
                                <option
                                    value="AG"
                                    data-kt-select2-country="assets/media/flags/antigua-and-barbuda.svg"
                                    data-select2-id="select2-data-134-u97f"
                                >
                                    Antigua and Barbuda
                                </option>
                                <option
                                    value="AR"
                                    data-kt-select2-country="assets/media/flags/argentina.svg"
                                    data-select2-id="select2-data-135-bvg9"
                                >
                                    Argentina
                                </option>
                                <option
                                    value="AM"
                                    data-kt-select2-country="assets/media/flags/armenia.svg"
                                    data-select2-id="select2-data-136-0gfe"
                                >
                                    Armenia
                                </option>
                                <option
                                    value="AW"
                                    data-kt-select2-country="assets/media/flags/aruba.svg"
                                    data-select2-id="select2-data-137-skc8"
                                >
                                    Aruba
                                </option>
                                <option
                                    value="AU"
                                    data-kt-select2-country="assets/media/flags/australia.svg"
                                    data-select2-id="select2-data-138-lmxk"
                                >
                                    Australia
                                </option>
                                <option
                                    value="AT"
                                    data-kt-select2-country="assets/media/flags/austria.svg"
                                    data-select2-id="select2-data-139-mhcg"
                                >
                                    Austria
                                </option>
                                <option
                                    value="AZ"
                                    data-kt-select2-country="assets/media/flags/azerbaijan.svg"
                                    data-select2-id="select2-data-140-56bj"
                                >
                                    Azerbaijan
                                </option>
                                <option
                                    value="BS"
                                    data-kt-select2-country="assets/media/flags/bahamas.svg"
                                    data-select2-id="select2-data-141-dvos"
                                >
                                    Bahamas
                                </option>
                                <option
                                    value="BH"
                                    data-kt-select2-country="assets/media/flags/bahrain.svg"
                                    data-select2-id="select2-data-142-jgnp"
                                >
                                    Bahrain
                                </option>
                                <option
                                    value="BD"
                                    data-kt-select2-country="assets/media/flags/bangladesh.svg"
                                    data-select2-id="select2-data-143-9o1b"
                                >
                                    Bangladesh
                                </option>
                                <option
                                    value="BB"
                                    data-kt-select2-country="assets/media/flags/barbados.svg"
                                    data-select2-id="select2-data-144-l2vl"
                                >
                                    Barbados
                                </option>
                                <option
                                    value="BY"
                                    data-kt-select2-country="assets/media/flags/belarus.svg"
                                    data-select2-id="select2-data-145-bhhf"
                                >
                                    Belarus
                                </option>
                                <option
                                    value="BE"
                                    data-kt-select2-country="assets/media/flags/belgium.svg"
                                    data-select2-id="select2-data-146-42jf"
                                >
                                    Belgium
                                </option>
                                <option
                                    value="BZ"
                                    data-kt-select2-country="assets/media/flags/belize.svg"
                                    data-select2-id="select2-data-147-kji6"
                                >
                                    Belize
                                </option>
                                <option
                                    value="BJ"
                                    data-kt-select2-country="assets/media/flags/benin.svg"
                                    data-select2-id="select2-data-148-04lt"
                                >
                                    Benin
                                </option>
                                <option
                                    value="BM"
                                    data-kt-select2-country="assets/media/flags/bermuda.svg"
                                    data-select2-id="select2-data-149-q5ks"
                                >
                                    Bermuda
                                </option>
                                <option
                                    value="BT"
                                    data-kt-select2-country="assets/media/flags/bhutan.svg"
                                    data-select2-id="select2-data-150-vndf"
                                >
                                    Bhutan
                                </option>
                                <option
                                    value="BO"
                                    data-kt-select2-country="assets/media/flags/bolivia.svg"
                                    data-select2-id="select2-data-151-etrd"
                                >
                                    Bolivia, Plurinational State of
                                </option>
                                <option
                                    value="BQ"
                                    data-kt-select2-country="assets/media/flags/bonaire.svg"
                                    data-select2-id="select2-data-152-9cp9"
                                >
                                    Bonaire, Sint Eustatius and Saba
                                </option>
                                <option
                                    value="BA"
                                    data-kt-select2-country="assets/media/flags/bosnia-and-herzegovina.svg"
                                    data-select2-id="select2-data-153-wxmi"
                                >
                                    Bosnia and Herzegovina
                                </option>
                                <option
                                    value="BW"
                                    data-kt-select2-country="assets/media/flags/botswana.svg"
                                    data-select2-id="select2-data-154-mr68"
                                >
                                    Botswana
                                </option>
                                <option
                                    value="BR"
                                    data-kt-select2-country="assets/media/flags/brazil.svg"
                                    data-select2-id="select2-data-155-5j5s"
                                >
                                    Brazil
                                </option>
                                <option
                                    value="IO"
                                    data-kt-select2-country="assets/media/flags/british-indian-ocean-territory.svg"
                                    data-select2-id="select2-data-156-m4yh"
                                >
                                    British Indian Ocean Territory
                                </option>
                                <option
                                    value="BN"
                                    data-kt-select2-country="assets/media/flags/brunei.svg"
                                    data-select2-id="select2-data-157-hatp"
                                >
                                    Brunei Darussalam
                                </option>
                                <option
                                    value="BG"
                                    data-kt-select2-country="assets/media/flags/bulgaria.svg"
                                    data-select2-id="select2-data-158-vjo5"
                                >
                                    Bulgaria
                                </option>
                                <option
                                    value="BF"
                                    data-kt-select2-country="assets/media/flags/burkina-faso.svg"
                                    data-select2-id="select2-data-159-8tsz"
                                >
                                    Burkina Faso
                                </option>
                                <option
                                    value="BI"
                                    data-kt-select2-country="assets/media/flags/burundi.svg"
                                    data-select2-id="select2-data-160-4g6o"
                                >
                                    Burundi
                                </option>
                                <option
                                    value="KH"
                                    data-kt-select2-country="assets/media/flags/cambodia.svg"
                                    data-select2-id="select2-data-161-09zs"
                                >
                                    Cambodia
                                </option>
                                <option
                                    value="CM"
                                    data-kt-select2-country="assets/media/flags/cameroon.svg"
                                    data-select2-id="select2-data-162-xhjx"
                                >
                                    Cameroon
                                </option>
                                <option
                                    value="CA"
                                    data-kt-select2-country="assets/media/flags/canada.svg"
                                    data-select2-id="select2-data-163-qd4o"
                                >
                                    Canada
                                </option>
                                <option
                                    value="CV"
                                    data-kt-select2-country="assets/media/flags/cape-verde.svg"
                                    data-select2-id="select2-data-164-aash"
                                >
                                    Cape Verde
                                </option>
                                <option
                                    value="KY"
                                    data-kt-select2-country="assets/media/flags/cayman-islands.svg"
                                    data-select2-id="select2-data-165-kv3b"
                                >
                                    Cayman Islands
                                </option>
                                <option
                                    value="CF"
                                    data-kt-select2-country="assets/media/flags/central-african-republic.svg"
                                    data-select2-id="select2-data-166-pwkh"
                                >
                                    Central African Republic
                                </option>
                                <option
                                    value="TD"
                                    data-kt-select2-country="assets/media/flags/chad.svg"
                                    data-select2-id="select2-data-167-rp34"
                                >
                                    Chad
                                </option>
                                <option
                                    value="CL"
                                    data-kt-select2-country="assets/media/flags/chile.svg"
                                    data-select2-id="select2-data-168-zmpn"
                                >
                                    Chile
                                </option>
                                <option
                                    value="CN"
                                    data-kt-select2-country="assets/media/flags/china.svg"
                                    data-select2-id="select2-data-169-fjor"
                                >
                                    China
                                </option>
                                <option
                                    value="CX"
                                    data-kt-select2-country="assets/media/flags/christmas-island.svg"
                                    data-select2-id="select2-data-170-ys74"
                                >
                                    Christmas Island
                                </option>
                                <option
                                    value="CC"
                                    data-kt-select2-country="assets/media/flags/cocos-island.svg"
                                    data-select2-id="select2-data-171-hij0"
                                >
                                    Cocos (Keeling) Islands
                                </option>
                                <option
                                    value="CO"
                                    data-kt-select2-country="assets/media/flags/colombia.svg"
                                    data-select2-id="select2-data-172-4yg7"
                                >
                                    Colombia
                                </option>
                                <option
                                    value="KM"
                                    data-kt-select2-country="assets/media/flags/comoros.svg"
                                    data-select2-id="select2-data-173-yck7"
                                >
                                    Comoros
                                </option>
                                <option
                                    value="CK"
                                    data-kt-select2-country="assets/media/flags/cook-islands.svg"
                                    data-select2-id="select2-data-174-lh35"
                                >
                                    Cook Islands
                                </option>
                                <option
                                    value="CR"
                                    data-kt-select2-country="assets/media/flags/costa-rica.svg"
                                    data-select2-id="select2-data-175-jyd8"
                                >
                                    Costa Rica
                                </option>
                                <option
                                    value="CI"
                                    data-kt-select2-country="assets/media/flags/ivory-coast.svg"
                                    data-select2-id="select2-data-176-q3x0"
                                >
                                    Côte d'Ivoire
                                </option>
                                <option
                                    value="HR"
                                    data-kt-select2-country="assets/media/flags/croatia.svg"
                                    data-select2-id="select2-data-177-sfix"
                                >
                                    Croatia
                                </option>
                                <option
                                    value="CU"
                                    data-kt-select2-country="assets/media/flags/cuba.svg"
                                    data-select2-id="select2-data-178-gh5f"
                                >
                                    Cuba
                                </option>
                                <option
                                    value="CW"
                                    data-kt-select2-country="assets/media/flags/curacao.svg"
                                    data-select2-id="select2-data-179-94g4"
                                >
                                    Curaçao
                                </option>
                                <option
                                    value="CZ"
                                    data-kt-select2-country="assets/media/flags/czech-republic.svg"
                                    data-select2-id="select2-data-180-c8wd"
                                >
                                    Czech Republic
                                </option>
                                <option
                                    value="DK"
                                    data-kt-select2-country="assets/media/flags/denmark.svg"
                                    data-select2-id="select2-data-181-8lvr"
                                >
                                    Denmark
                                </option>
                                <option
                                    value="DJ"
                                    data-kt-select2-country="assets/media/flags/djibouti.svg"
                                    data-select2-id="select2-data-182-oatj"
                                >
                                    Djibouti
                                </option>
                                <option
                                    value="DM"
                                    data-kt-select2-country="assets/media/flags/dominica.svg"
                                    data-select2-id="select2-data-183-kmti"
                                >
                                    Dominica
                                </option>
                                <option
                                    value="DO"
                                    data-kt-select2-country="assets/media/flags/dominican-republic.svg"
                                    data-select2-id="select2-data-184-q2jg"
                                >
                                    Dominican Republic
                                </option>
                                <option
                                    value="EC"
                                    data-kt-select2-country="assets/media/flags/ecuador.svg"
                                    data-select2-id="select2-data-185-dqyc"
                                >
                                    Ecuador
                                </option>
                                <option
                                    value="EG"
                                    data-kt-select2-country="assets/media/flags/egypt.svg"
                                    data-select2-id="select2-data-186-snzl"
                                >
                                    Egypt
                                </option>
                                <option
                                    value="SV"
                                    data-kt-select2-country="assets/media/flags/el-salvador.svg"
                                    data-select2-id="select2-data-187-e89c"
                                >
                                    El Salvador
                                </option>
                                <option
                                    value="GQ"
                                    data-kt-select2-country="assets/media/flags/equatorial-guinea.svg"
                                    data-select2-id="select2-data-188-mzje"
                                >
                                    Equatorial Guinea
                                </option>
                                <option
                                    value="ER"
                                    data-kt-select2-country="assets/media/flags/eritrea.svg"
                                    data-select2-id="select2-data-189-gy8y"
                                >
                                    Eritrea
                                </option>
                                <option
                                    value="EE"
                                    data-kt-select2-country="assets/media/flags/estonia.svg"
                                    data-select2-id="select2-data-190-x7k5"
                                >
                                    Estonia
                                </option>
                                <option
                                    value="ET"
                                    data-kt-select2-country="assets/media/flags/ethiopia.svg"
                                    data-select2-id="select2-data-191-s7b9"
                                >
                                    Ethiopia
                                </option>
                                <option
                                    value="FK"
                                    data-kt-select2-country="assets/media/flags/falkland-islands.svg"
                                    data-select2-id="select2-data-192-fwif"
                                >
                                    Falkland Islands (Malvinas)
                                </option>
                                <option
                                    value="FJ"
                                    data-kt-select2-country="assets/media/flags/fiji.svg"
                                    data-select2-id="select2-data-193-8etd"
                                >
                                    Fiji
                                </option>
                                <option
                                    value="FI"
                                    data-kt-select2-country="assets/media/flags/finland.svg"
                                    data-select2-id="select2-data-194-vatz"
                                >
                                    Finland
                                </option>
                                <option
                                    value="FR"
                                    data-kt-select2-country="assets/media/flags/france.svg"
                                    data-select2-id="select2-data-195-comh"
                                >
                                    France
                                </option>
                                <option
                                    value="PF"
                                    data-kt-select2-country="assets/media/flags/french-polynesia.svg"
                                    data-select2-id="select2-data-196-fth2"
                                >
                                    French Polynesia
                                </option>
                                <option
                                    value="GA"
                                    data-kt-select2-country="assets/media/flags/gabon.svg"
                                    data-select2-id="select2-data-197-qsfu"
                                >
                                    Gabon
                                </option>
                                <option
                                    value="GM"
                                    data-kt-select2-country="assets/media/flags/gambia.svg"
                                    data-select2-id="select2-data-198-wrxo"
                                >
                                    Gambia
                                </option>
                                <option
                                    value="GE"
                                    data-kt-select2-country="assets/media/flags/georgia.svg"
                                    data-select2-id="select2-data-199-ges5"
                                >
                                    Georgia
                                </option>
                                <option
                                    value="DE"
                                    data-kt-select2-country="assets/media/flags/germany.svg"
                                    data-select2-id="select2-data-200-unxl"
                                >
                                    Germany
                                </option>
                                <option
                                    value="GH"
                                    data-kt-select2-country="assets/media/flags/ghana.svg"
                                    data-select2-id="select2-data-201-vgmd"
                                >
                                    Ghana
                                </option>
                                <option
                                    value="GI"
                                    data-kt-select2-country="assets/media/flags/gibraltar.svg"
                                    data-select2-id="select2-data-202-91qs"
                                >
                                    Gibraltar
                                </option>
                                <option
                                    value="GR"
                                    data-kt-select2-country="assets/media/flags/greece.svg"
                                    data-select2-id="select2-data-203-ic7x"
                                >
                                    Greece
                                </option>
                                <option
                                    value="GL"
                                    data-kt-select2-country="assets/media/flags/greenland.svg"
                                    data-select2-id="select2-data-204-tsc2"
                                >
                                    Greenland
                                </option>
                                <option
                                    value="GD"
                                    data-kt-select2-country="assets/media/flags/grenada.svg"
                                    data-select2-id="select2-data-205-txuk"
                                >
                                    Grenada
                                </option>
                                <option
                                    value="GU"
                                    data-kt-select2-country="assets/media/flags/guam.svg"
                                    data-select2-id="select2-data-206-q2to"
                                >
                                    Guam
                                </option>
                                <option
                                    value="GT"
                                    data-kt-select2-country="assets/media/flags/guatemala.svg"
                                    data-select2-id="select2-data-207-oh97"
                                >
                                    Guatemala
                                </option>
                                <option
                                    value="GG"
                                    data-kt-select2-country="assets/media/flags/guernsey.svg"
                                    data-select2-id="select2-data-208-ism9"
                                >
                                    Guernsey
                                </option>
                                <option
                                    value="GN"
                                    data-kt-select2-country="assets/media/flags/guinea.svg"
                                    data-select2-id="select2-data-209-nvvh"
                                >
                                    Guinea
                                </option>
                                <option
                                    value="GW"
                                    data-kt-select2-country="assets/media/flags/guinea-bissau.svg"
                                    data-select2-id="select2-data-210-1t9z"
                                >
                                    Guinea-Bissau
                                </option>
                                <option
                                    value="HT"
                                    data-kt-select2-country="assets/media/flags/haiti.svg"
                                    data-select2-id="select2-data-211-w440"
                                >
                                    Haiti
                                </option>
                                <option
                                    value="VA"
                                    data-kt-select2-country="assets/media/flags/vatican-city.svg"
                                    data-select2-id="select2-data-212-nblj"
                                >
                                    Holy See (Vatican City State)
                                </option>
                                <option
                                    value="HN"
                                    data-kt-select2-country="assets/media/flags/honduras.svg"
                                    data-select2-id="select2-data-213-2csh"
                                >
                                    Honduras
                                </option>
                                <option
                                    value="HK"
                                    data-kt-select2-country="assets/media/flags/hong-kong.svg"
                                    data-select2-id="select2-data-214-rjlx"
                                >
                                    Hong Kong
                                </option>
                                <option
                                    value="HU"
                                    data-kt-select2-country="assets/media/flags/hungary.svg"
                                    data-select2-id="select2-data-215-k8mk"
                                >
                                    Hungary
                                </option>
                                <option
                                    value="IS"
                                    data-kt-select2-country="assets/media/flags/iceland.svg"
                                    data-select2-id="select2-data-216-7bp3"
                                >
                                    Iceland
                                </option>
                                <option
                                    value="IN"
                                    data-kt-select2-country="assets/media/flags/india.svg"
                                    data-select2-id="select2-data-217-bh4i"
                                >
                                    India
                                </option>
                                <option
                                    value="ID"
                                    data-kt-select2-country="assets/media/flags/indonesia.svg"
                                    data-select2-id="select2-data-218-c6vd"
                                >
                                    Indonesia
                                </option>
                                <option
                                    value="IR"
                                    data-kt-select2-country="assets/media/flags/iran.svg"
                                    data-select2-id="select2-data-219-pl0f"
                                >
                                    Iran, Islamic Republic of
                                </option>
                                <option
                                    value="IQ"
                                    data-kt-select2-country="assets/media/flags/iraq.svg"
                                    data-select2-id="select2-data-220-vl3e"
                                >
                                    Iraq
                                </option>
                                <option
                                    value="IE"
                                    data-kt-select2-country="assets/media/flags/ireland.svg"
                                    data-select2-id="select2-data-221-66rc"
                                >
                                    Ireland
                                </option>
                                <option
                                    value="IM"
                                    data-kt-select2-country="assets/media/flags/isle-of-man.svg"
                                    data-select2-id="select2-data-222-kp2h"
                                >
                                    Isle of Man
                                </option>
                                <option
                                    value="IL"
                                    data-kt-select2-country="assets/media/flags/israel.svg"
                                    data-select2-id="select2-data-223-us7m"
                                >
                                    Israel
                                </option>
                                <option
                                    value="IT"
                                    data-kt-select2-country="assets/media/flags/italy.svg"
                                    data-select2-id="select2-data-224-uizk"
                                >
                                    Italy
                                </option>
                                <option
                                    value="JM"
                                    data-kt-select2-country="assets/media/flags/jamaica.svg"
                                    data-select2-id="select2-data-225-qzwr"
                                >
                                    Jamaica
                                </option>
                                <option
                                    value="JP"
                                    data-kt-select2-country="assets/media/flags/japan.svg"
                                    data-select2-id="select2-data-226-7ao5"
                                >
                                    Japan
                                </option>
                                <option
                                    value="JE"
                                    data-kt-select2-country="assets/media/flags/jersey.svg"
                                    data-select2-id="select2-data-227-ptg5"
                                >
                                    Jersey
                                </option>
                                <option
                                    value="JO"
                                    data-kt-select2-country="assets/media/flags/jordan.svg"
                                    data-select2-id="select2-data-228-ptde"
                                >
                                    Jordan
                                </option>
                                <option
                                    value="KZ"
                                    data-kt-select2-country="assets/media/flags/kazakhstan.svg"
                                    data-select2-id="select2-data-229-kh48"
                                >
                                    Kazakhstan
                                </option>
                                <option
                                    value="KE"
                                    data-kt-select2-country="assets/media/flags/kenya.svg"
                                    data-select2-id="select2-data-230-e6bz"
                                >
                                    Kenya
                                </option>
                                <option
                                    value="KI"
                                    data-kt-select2-country="assets/media/flags/kiribati.svg"
                                    data-select2-id="select2-data-231-a96h"
                                >
                                    Kiribati
                                </option>
                                <option
                                    value="KP"
                                    data-kt-select2-country="assets/media/flags/north-korea.svg"
                                    data-select2-id="select2-data-232-lsaw"
                                >
                                    Korea, Democratic People's Republic of
                                </option>
                                <option
                                    value="KW"
                                    data-kt-select2-country="assets/media/flags/kuwait.svg"
                                    data-select2-id="select2-data-233-l8st"
                                >
                                    Kuwait
                                </option>
                                <option
                                    value="KG"
                                    data-kt-select2-country="assets/media/flags/kyrgyzstan.svg"
                                    data-select2-id="select2-data-234-6bon"
                                >
                                    Kyrgyzstan
                                </option>
                                <option
                                    value="LA"
                                    data-kt-select2-country="assets/media/flags/laos.svg"
                                    data-select2-id="select2-data-235-x1xa"
                                >
                                    Lao People's Democratic Republic
                                </option>
                                <option
                                    value="LV"
                                    data-kt-select2-country="assets/media/flags/latvia.svg"
                                    data-select2-id="select2-data-236-0ek7"
                                >
                                    Latvia
                                </option>
                                <option
                                    value="LB"
                                    data-kt-select2-country="assets/media/flags/lebanon.svg"
                                    data-select2-id="select2-data-237-d2xl"
                                >
                                    Lebanon
                                </option>
                                <option
                                    value="LS"
                                    data-kt-select2-country="assets/media/flags/lesotho.svg"
                                    data-select2-id="select2-data-238-fhje"
                                >
                                    Lesotho
                                </option>
                                <option
                                    value="LR"
                                    data-kt-select2-country="assets/media/flags/liberia.svg"
                                    data-select2-id="select2-data-239-5dbe"
                                >
                                    Liberia
                                </option>
                                <option
                                    value="LY"
                                    data-kt-select2-country="assets/media/flags/libya.svg"
                                    data-select2-id="select2-data-240-mtxv"
                                >
                                    Libya
                                </option>
                                <option
                                    value="LI"
                                    data-kt-select2-country="assets/media/flags/liechtenstein.svg"
                                    data-select2-id="select2-data-241-fhlk"
                                >
                                    Liechtenstein
                                </option>
                                <option
                                    value="LT"
                                    data-kt-select2-country="assets/media/flags/lithuania.svg"
                                    data-select2-id="select2-data-242-eb6v"
                                >
                                    Lithuania
                                </option>
                                <option
                                    value="LU"
                                    data-kt-select2-country="assets/media/flags/luxembourg.svg"
                                    data-select2-id="select2-data-243-x82a"
                                >
                                    Luxembourg
                                </option>
                                <option
                                    value="MO"
                                    data-kt-select2-country="assets/media/flags/macao.svg"
                                    data-select2-id="select2-data-244-mygn"
                                >
                                    Macao
                                </option>
                                <option
                                    value="MG"
                                    data-kt-select2-country="assets/media/flags/madagascar.svg"
                                    data-select2-id="select2-data-245-ygkq"
                                >
                                    Madagascar
                                </option>
                                <option
                                    value="MW"
                                    data-kt-select2-country="assets/media/flags/malawi.svg"
                                    data-select2-id="select2-data-246-hfpz"
                                >
                                    Malawi
                                </option>
                                <option
                                    value="MY"
                                    data-kt-select2-country="assets/media/flags/malaysia.svg"
                                    data-select2-id="select2-data-247-ihgv"
                                >
                                    Malaysia
                                </option>
                                <option
                                    value="MV"
                                    data-kt-select2-country="assets/media/flags/maldives.svg"
                                    data-select2-id="select2-data-248-1dwp"
                                >
                                    Maldives
                                </option>
                                <option
                                    value="ML"
                                    data-kt-select2-country="assets/media/flags/mali.svg"
                                    data-select2-id="select2-data-249-xjsh"
                                >
                                    Mali
                                </option>
                                <option
                                    value="MT"
                                    data-kt-select2-country="assets/media/flags/malta.svg"
                                    data-select2-id="select2-data-250-lmt0"
                                >
                                    Malta
                                </option>
                                <option
                                    value="MH"
                                    data-kt-select2-country="assets/media/flags/marshall-island.svg"
                                    data-select2-id="select2-data-251-pnq2"
                                >
                                    Marshall Islands
                                </option>
                                <option
                                    value="MQ"
                                    data-kt-select2-country="assets/media/flags/martinique.svg"
                                    data-select2-id="select2-data-252-iseg"
                                >
                                    Martinique
                                </option>
                                <option
                                    value="MR"
                                    data-kt-select2-country="assets/media/flags/mauritania.svg"
                                    data-select2-id="select2-data-253-besl"
                                >
                                    Mauritania
                                </option>
                                <option
                                    value="MU"
                                    data-kt-select2-country="assets/media/flags/mauritius.svg"
                                    data-select2-id="select2-data-254-ziwu"
                                >
                                    Mauritius
                                </option>
                                <option
                                    value="MX"
                                    data-kt-select2-country="assets/media/flags/mexico.svg"
                                    data-select2-id="select2-data-255-hsqa"
                                >
                                    Mexico
                                </option>
                                <option
                                    value="FM"
                                    data-kt-select2-country="assets/media/flags/micronesia.svg"
                                    data-select2-id="select2-data-256-xton"
                                >
                                    Micronesia, Federated States of
                                </option>
                                <option
                                    value="MD"
                                    data-kt-select2-country="assets/media/flags/moldova.svg"
                                    data-select2-id="select2-data-257-dyw6"
                                >
                                    Moldova, Republic of
                                </option>
                                <option
                                    value="MC"
                                    data-kt-select2-country="assets/media/flags/monaco.svg"
                                    data-select2-id="select2-data-258-hzrv"
                                >
                                    Monaco
                                </option>
                                <option
                                    value="MN"
                                    data-kt-select2-country="assets/media/flags/mongolia.svg"
                                    data-select2-id="select2-data-259-1py5"
                                >
                                    Mongolia
                                </option>
                                <option
                                    value="ME"
                                    data-kt-select2-country="assets/media/flags/montenegro.svg"
                                    data-select2-id="select2-data-260-r3is"
                                >
                                    Montenegro
                                </option>
                                <option
                                    value="MS"
                                    data-kt-select2-country="assets/media/flags/montserrat.svg"
                                    data-select2-id="select2-data-261-ssng"
                                >
                                    Montserrat
                                </option>
                                <option
                                    value="MA"
                                    data-kt-select2-country="assets/media/flags/morocco.svg"
                                    data-select2-id="select2-data-262-0hab"
                                >
                                    Morocco
                                </option>
                                <option
                                    value="MZ"
                                    data-kt-select2-country="assets/media/flags/mozambique.svg"
                                    data-select2-id="select2-data-263-7zux"
                                >
                                    Mozambique
                                </option>
                                <option
                                    value="MM"
                                    data-kt-select2-country="assets/media/flags/myanmar.svg"
                                    data-select2-id="select2-data-264-6h9g"
                                >
                                    Myanmar
                                </option>
                                <option
                                    value="NA"
                                    data-kt-select2-country="assets/media/flags/namibia.svg"
                                    data-select2-id="select2-data-265-t95t"
                                >
                                    Namibia
                                </option>
                                <option
                                    value="NR"
                                    data-kt-select2-country="assets/media/flags/nauru.svg"
                                    data-select2-id="select2-data-266-cli8"
                                >
                                    Nauru
                                </option>
                                <option
                                    value="NP"
                                    data-kt-select2-country="assets/media/flags/nepal.svg"
                                    data-select2-id="select2-data-267-xjqx"
                                >
                                    Nepal
                                </option>
                                <option
                                    value="NL"
                                    data-kt-select2-country="assets/media/flags/netherlands.svg"
                                    data-select2-id="select2-data-268-dzep"
                                >
                                    Netherlands
                                </option>
                                <option
                                    value="NZ"
                                    data-kt-select2-country="assets/media/flags/new-zealand.svg"
                                    data-select2-id="select2-data-269-09nb"
                                >
                                    New Zealand
                                </option>
                                <option
                                    value="NI"
                                    data-kt-select2-country="assets/media/flags/nicaragua.svg"
                                    data-select2-id="select2-data-270-wn8b"
                                >
                                    Nicaragua
                                </option>
                                <option
                                    value="NE"
                                    data-kt-select2-country="assets/media/flags/niger.svg"
                                    data-select2-id="select2-data-271-4y13"
                                >
                                    Niger
                                </option>
                                <option
                                    value="NG"
                                    data-kt-select2-country="assets/media/flags/nigeria.svg"
                                    data-select2-id="select2-data-272-kquw"
                                >
                                    Nigeria
                                </option>
                                <option
                                    value="NU"
                                    data-kt-select2-country="assets/media/flags/niue.svg"
                                    data-select2-id="select2-data-273-ko8l"
                                >
                                    Niue
                                </option>
                                <option
                                    value="NF"
                                    data-kt-select2-country="assets/media/flags/norfolk-island.svg"
                                    data-select2-id="select2-data-274-4ifh"
                                >
                                    Norfolk Island
                                </option>
                                <option
                                    value="MP"
                                    data-kt-select2-country="assets/media/flags/northern-mariana-islands.svg"
                                    data-select2-id="select2-data-275-e0w5"
                                >
                                    Northern Mariana Islands
                                </option>
                                <option
                                    value="NO"
                                    data-kt-select2-country="assets/media/flags/norway.svg"
                                    data-select2-id="select2-data-276-kh8k"
                                >
                                    Norway
                                </option>
                                <option
                                    value="OM"
                                    data-kt-select2-country="assets/media/flags/oman.svg"
                                    data-select2-id="select2-data-277-wh3i"
                                >
                                    Oman
                                </option>
                                <option
                                    value="PK"
                                    data-kt-select2-country="assets/media/flags/pakistan.svg"
                                    data-select2-id="select2-data-278-r0lp"
                                >
                                    Pakistan
                                </option>
                                <option
                                    value="PW"
                                    data-kt-select2-country="assets/media/flags/palau.svg"
                                    data-select2-id="select2-data-279-iytq"
                                >
                                    Palau
                                </option>
                                <option
                                    value="PS"
                                    data-kt-select2-country="assets/media/flags/palestine.svg"
                                    data-select2-id="select2-data-280-013c"
                                >
                                    Palestinian Territory, Occupied
                                </option>
                                <option
                                    value="PA"
                                    data-kt-select2-country="assets/media/flags/panama.svg"
                                    data-select2-id="select2-data-281-u2k5"
                                >
                                    Panama
                                </option>
                                <option
                                    value="PG"
                                    data-kt-select2-country="assets/media/flags/papua-new-guinea.svg"
                                    data-select2-id="select2-data-282-4c4l"
                                >
                                    Papua New Guinea
                                </option>
                                <option
                                    value="PY"
                                    data-kt-select2-country="assets/media/flags/paraguay.svg"
                                    data-select2-id="select2-data-283-wcm2"
                                >
                                    Paraguay
                                </option>
                                <option
                                    value="PE"
                                    data-kt-select2-country="assets/media/flags/peru.svg"
                                    data-select2-id="select2-data-284-30nt"
                                >
                                    Peru
                                </option>
                                <option
                                    value="PH"
                                    data-kt-select2-country="assets/media/flags/philippines.svg"
                                    data-select2-id="select2-data-285-hswz"
                                >
                                    Philippines
                                </option>
                                <option
                                    value="PL"
                                    data-kt-select2-country="assets/media/flags/poland.svg"
                                    data-select2-id="select2-data-286-c98s"
                                >
                                    Poland
                                </option>
                                <option
                                    value="PT"
                                    data-kt-select2-country="assets/media/flags/portugal.svg"
                                    data-select2-id="select2-data-287-15l7"
                                >
                                    Portugal
                                </option>
                                <option
                                    value="PR"
                                    data-kt-select2-country="assets/media/flags/puerto-rico.svg"
                                    data-select2-id="select2-data-288-iffn"
                                >
                                    Puerto Rico
                                </option>
                                <option
                                    value="QA"
                                    data-kt-select2-country="assets/media/flags/qatar.svg"
                                    data-select2-id="select2-data-289-op1n"
                                >
                                    Qatar
                                </option>
                                <option
                                    value="RO"
                                    data-kt-select2-country="assets/media/flags/romania.svg"
                                    data-select2-id="select2-data-290-kg5a"
                                >
                                    Romania
                                </option>
                                <option
                                    value="RU"
                                    data-kt-select2-country="assets/media/flags/russia.svg"
                                    data-select2-id="select2-data-291-mrce"
                                >
                                    Russian Federation
                                </option>
                                <option
                                    value="RW"
                                    data-kt-select2-country="assets/media/flags/rwanda.svg"
                                    data-select2-id="select2-data-292-wzqt"
                                >
                                    Rwanda
                                </option>
                                <option
                                    value="BL"
                                    data-kt-select2-country="assets/media/flags/st-barts.svg"
                                    data-select2-id="select2-data-293-dbo3"
                                >
                                    Saint Barthélemy
                                </option>
                                <option
                                    value="KN"
                                    data-kt-select2-country="assets/media/flags/saint-kitts-and-nevis.svg"
                                    data-select2-id="select2-data-294-oi6s"
                                >
                                    Saint Kitts and Nevis
                                </option>
                                <option
                                    value="LC"
                                    data-kt-select2-country="assets/media/flags/st-lucia.svg"
                                    data-select2-id="select2-data-295-t99x"
                                >
                                    Saint Lucia
                                </option>
                                <option
                                    value="MF"
                                    data-kt-select2-country="assets/media/flags/sint-maarten.svg"
                                    data-select2-id="select2-data-296-pr2o"
                                >
                                    Saint Martin (French part)
                                </option>
                                <option
                                    value="VC"
                                    data-kt-select2-country="assets/media/flags/st-vincent-and-the-grenadines.svg"
                                    data-select2-id="select2-data-297-h2ol"
                                >
                                    Saint Vincent and the Grenadines
                                </option>
                                <option
                                    value="WS"
                                    data-kt-select2-country="assets/media/flags/samoa.svg"
                                    data-select2-id="select2-data-298-112w"
                                >
                                    Samoa
                                </option>
                                <option
                                    value="SM"
                                    data-kt-select2-country="assets/media/flags/san-marino.svg"
                                    data-select2-id="select2-data-299-eqvo"
                                >
                                    San Marino
                                </option>
                                <option
                                    value="ST"
                                    data-kt-select2-country="assets/media/flags/sao-tome-and-prince.svg"
                                    data-select2-id="select2-data-300-mrie"
                                >
                                    Sao Tome and Principe
                                </option>
                                <option
                                    value="SA"
                                    data-kt-select2-country="assets/media/flags/saudi-arabia.svg"
                                    data-select2-id="select2-data-301-tkmp"
                                >
                                    Saudi Arabia
                                </option>
                                <option
                                    value="SN"
                                    data-kt-select2-country="assets/media/flags/senegal.svg"
                                    data-select2-id="select2-data-302-7te5"
                                >
                                    Senegal
                                </option>
                                <option
                                    value="RS"
                                    data-kt-select2-country="assets/media/flags/serbia.svg"
                                    data-select2-id="select2-data-303-2eqw"
                                >
                                    Serbia
                                </option>
                                <option
                                    value="SC"
                                    data-kt-select2-country="assets/media/flags/seychelles.svg"
                                    data-select2-id="select2-data-304-37es"
                                >
                                    Seychelles
                                </option>
                                <option
                                    value="SL"
                                    data-kt-select2-country="assets/media/flags/sierra-leone.svg"
                                    data-select2-id="select2-data-305-54n4"
                                >
                                    Sierra Leone
                                </option>
                                <option
                                    value="SG"
                                    data-kt-select2-country="assets/media/flags/singapore.svg"
                                    data-select2-id="select2-data-306-z2kf"
                                >
                                    Singapore
                                </option>
                                <option
                                    value="SX"
                                    data-kt-select2-country="assets/media/flags/sint-maarten.svg"
                                    data-select2-id="select2-data-307-uwdm"
                                >
                                    Sint Maarten (Dutch part)
                                </option>
                                <option
                                    value="SK"
                                    data-kt-select2-country="assets/media/flags/slovakia.svg"
                                    data-select2-id="select2-data-308-et9c"
                                >
                                    Slovakia
                                </option>
                                <option
                                    value="SI"
                                    data-kt-select2-country="assets/media/flags/slovenia.svg"
                                    data-select2-id="select2-data-309-hvo6"
                                >
                                    Slovenia
                                </option>
                                <option
                                    value="SB"
                                    data-kt-select2-country="assets/media/flags/solomon-islands.svg"
                                    data-select2-id="select2-data-310-apxk"
                                >
                                    Solomon Islands
                                </option>
                                <option
                                    value="SO"
                                    data-kt-select2-country="assets/media/flags/somalia.svg"
                                    data-select2-id="select2-data-311-fvkz"
                                >
                                    Somalia
                                </option>
                                <option
                                    value="ZA"
                                    data-kt-select2-country="assets/media/flags/south-africa.svg"
                                    data-select2-id="select2-data-312-3nc9"
                                >
                                    South Africa
                                </option>
                                <option
                                    value="KR"
                                    data-kt-select2-country="assets/media/flags/south-korea.svg"
                                    data-select2-id="select2-data-313-yfd1"
                                >
                                    South Korea
                                </option>
                                <option
                                    value="SS"
                                    data-kt-select2-country="assets/media/flags/south-sudan.svg"
                                    data-select2-id="select2-data-314-7l14"
                                >
                                    South Sudan
                                </option>
                                <option
                                    value="ES"
                                    data-kt-select2-country="assets/media/flags/spain.svg"
                                    data-select2-id="select2-data-315-iztm"
                                >
                                    Spain
                                </option>
                                <option
                                    value="LK"
                                    data-kt-select2-country="assets/media/flags/sri-lanka.svg"
                                    data-select2-id="select2-data-316-s4ya"
                                >
                                    Sri Lanka
                                </option>
                                <option
                                    value="SD"
                                    data-kt-select2-country="assets/media/flags/sudan.svg"
                                    data-select2-id="select2-data-317-lt9v"
                                >
                                    Sudan
                                </option>
                                <option
                                    value="SR"
                                    data-kt-select2-country="assets/media/flags/suriname.svg"
                                    data-select2-id="select2-data-318-36qr"
                                >
                                    Suriname
                                </option>
                                <option
                                    value="SZ"
                                    data-kt-select2-country="assets/media/flags/swaziland.svg"
                                    data-select2-id="select2-data-319-fink"
                                >
                                    Swaziland
                                </option>
                                <option
                                    value="SE"
                                    data-kt-select2-country="assets/media/flags/sweden.svg"
                                    data-select2-id="select2-data-320-btxb"
                                >
                                    Sweden
                                </option>
                                <option
                                    value="CH"
                                    data-kt-select2-country="assets/media/flags/switzerland.svg"
                                    data-select2-id="select2-data-321-rhvv"
                                >
                                    Switzerland
                                </option>
                                <option
                                    value="SY"
                                    data-kt-select2-country="assets/media/flags/syria.svg"
                                    data-select2-id="select2-data-322-a9qh"
                                >
                                    Syrian Arab Republic
                                </option>
                                <option
                                    value="TW"
                                    data-kt-select2-country="assets/media/flags/taiwan.svg"
                                    data-select2-id="select2-data-323-8m6o"
                                >
                                    Taiwan, Province of China
                                </option>
                                <option
                                    value="TJ"
                                    data-kt-select2-country="assets/media/flags/tajikistan.svg"
                                    data-select2-id="select2-data-324-ah3u"
                                >
                                    Tajikistan
                                </option>
                                <option
                                    value="TZ"
                                    data-kt-select2-country="assets/media/flags/tanzania.svg"
                                    data-select2-id="select2-data-325-zc42"
                                >
                                    Tanzania, United Republic of
                                </option>
                                <option
                                    value="TH"
                                    data-kt-select2-country="assets/media/flags/thailand.svg"
                                    data-select2-id="select2-data-326-k82n"
                                >
                                    Thailand
                                </option>
                                <option
                                    value="TG"
                                    data-kt-select2-country="assets/media/flags/togo.svg"
                                    data-select2-id="select2-data-327-wvhv"
                                >
                                    Togo
                                </option>
                                <option
                                    value="TK"
                                    data-kt-select2-country="assets/media/flags/tokelau.svg"
                                    data-select2-id="select2-data-328-v0hz"
                                >
                                    Tokelau
                                </option>
                                <option
                                    value="TO"
                                    data-kt-select2-country="assets/media/flags/tonga.svg"
                                    data-select2-id="select2-data-329-7k9p"
                                >
                                    Tonga
                                </option>
                                <option
                                    value="TT"
                                    data-kt-select2-country="assets/media/flags/trinidad-and-tobago.svg"
                                    data-select2-id="select2-data-330-epor"
                                >
                                    Trinidad and Tobago
                                </option>
                                <option
                                    value="TN"
                                    data-kt-select2-country="assets/media/flags/tunisia.svg"
                                    data-select2-id="select2-data-331-07e3"
                                >
                                    Tunisia
                                </option>
                                <option
                                    value="TR"
                                    data-kt-select2-country="assets/media/flags/turkey.svg"
                                    data-select2-id="select2-data-332-vzjn"
                                >
                                    Turkey
                                </option>
                                <option
                                    value="TM"
                                    data-kt-select2-country="assets/media/flags/turkmenistan.svg"
                                    data-select2-id="select2-data-333-7naf"
                                >
                                    Turkmenistan
                                </option>
                                <option
                                    value="TC"
                                    data-kt-select2-country="assets/media/flags/turks-and-caicos.svg"
                                    data-select2-id="select2-data-334-pzo3"
                                >
                                    Turks and Caicos Islands
                                </option>
                                <option
                                    value="TV"
                                    data-kt-select2-country="assets/media/flags/tuvalu.svg"
                                    data-select2-id="select2-data-335-gx1r"
                                >
                                    Tuvalu
                                </option>
                                <option
                                    value="UG"
                                    data-kt-select2-country="assets/media/flags/uganda.svg"
                                    data-select2-id="select2-data-336-o01r"
                                >
                                    Uganda
                                </option>
                                <option
                                    value="UA"
                                    data-kt-select2-country="assets/media/flags/ukraine.svg"
                                    data-select2-id="select2-data-337-t3vc"
                                >
                                    Ukraine
                                </option>
                                <option
                                    value="AE"
                                    data-kt-select2-country="assets/media/flags/united-arab-emirates.svg"
                                    data-select2-id="select2-data-338-f8ae"
                                >
                                    United Arab Emirates
                                </option>
                                <option
                                    value="GB"
                                    data-kt-select2-country="assets/media/flags/united-kingdom.svg"
                                    data-select2-id="select2-data-339-5zdb"
                                >
                                    United Kingdom
                                </option>
                                <option
                                    value="US"
                                    data-kt-select2-country="assets/media/flags/united-states.svg"
                                    data-select2-id="select2-data-340-xep7"
                                >
                                    United States
                                </option>
                                <option
                                    value="UY"
                                    data-kt-select2-country="assets/media/flags/uruguay.svg"
                                    data-select2-id="select2-data-341-xrok"
                                >
                                    Uruguay
                                </option>
                                <option
                                    value="UZ"
                                    data-kt-select2-country="assets/media/flags/uzbekistan.svg"
                                    data-select2-id="select2-data-342-snk7"
                                >
                                    Uzbekistan
                                </option>
                                <option
                                    value="VU"
                                    data-kt-select2-country="assets/media/flags/vanuatu.svg"
                                    data-select2-id="select2-data-343-1d6l"
                                >
                                    Vanuatu
                                </option>
                                <option
                                    value="VE"
                                    data-kt-select2-country="assets/media/flags/venezuela.svg"
                                    data-select2-id="select2-data-344-bawx"
                                >
                                    Venezuela, Bolivarian Republic of
                                </option>
                                <option
                                    value="VN"
                                    data-kt-select2-country="assets/media/flags/vietnam.svg"
                                    data-select2-id="select2-data-345-ildd"
                                >
                                    Vietnam
                                </option>
                                <option
                                    value="VI"
                                    data-kt-select2-country="assets/media/flags/virgin-islands.svg"
                                    data-select2-id="select2-data-346-7qnz"
                                >
                                    Virgin Islands
                                </option>
                                <option
                                    value="YE"
                                    data-kt-select2-country="assets/media/flags/yemen.svg"
                                    data-select2-id="select2-data-347-g2l7"
                                >
                                    Yemen
                                </option>
                                <option
                                    value="ZM"
                                    data-kt-select2-country="assets/media/flags/zambia.svg"
                                    data-select2-id="select2-data-348-bkyw"
                                >
                                    Zambia
                                </option>
                                <option
                                    value="ZW"
                                    data-kt-select2-country="assets/media/flags/zimbabwe.svg"
                                    data-select2-id="select2-data-349-e7kl"
                                >
                                    Zimbabwe
                                </option></select
                            ><span
                                class="select2 select2-container select2-container--bootstrap5 select2-container--above"
                                dir="ltr"
                                data-select2-id="select2-data-117-0t6z"
                                style="width: 100%"
                                ><span class="selection"
                                    ><span
                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                        role="combobox"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        tabindex="0"
                                        aria-disabled="false"
                                        aria-labelledby="select2-kt_ecommerce_select2_country-container"
                                        aria-controls="select2-kt_ecommerce_select2_country-container"
                                        ><span
                                            class="select2-selection__rendered"
                                            id="select2-kt_ecommerce_select2_country-container"
                                            role="textbox"
                                            aria-readonly="true"
                                            title="Select a country"
                                            ><span
                                                class="select2-selection__placeholder"
                                                >Select a country</span
                                            ></span
                                        ><span
                                            class="select2-selection__arrow"
                                            role="presentation"
                                            ><b
                                                role="presentation"
                                            ></b></span></span></span
                                ><span
                                    class="dropdown-wrapper"
                                    aria-hidden="true"
                                ></span
                            ></span>
                            <!--end::Select2-->
                        </div>
                        <div
                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"
                        ></div>
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
                <button
                    type="reset"
                    data-kt-contacts-type="cancel"
                    class="btn btn-light me-3"
                >
                    Cancel
                </button>
                <!--end::Button-->
                <!--begin::Button-->
                <button
                    type="submit"
                    data-kt-contacts-type="submit"
                    class="btn btn-primary"
                >
                    <span class="indicator-label">Update</span>
                    <span class="indicator-progress"
                        >Please wait...
                        <span
                            class="spinner-border spinner-border-sm align-middle ms-2"
                        ></span
                    ></span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Action buttons-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card body-->
</div>

<script src="{{ asset('assets/js/custom/apps/contacts/edit-contact.js')}}"></script>
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js')}} "></script>
@endsection
