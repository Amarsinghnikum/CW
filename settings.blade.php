@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ $module_title }} @endsection
@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ $module_title }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')

 
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Settings</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">eCommerce</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">Settings</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                    <!--begin::Filter menu-->
                    <div class="m-0">
                        <!--begin::Menu toggle-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                        <!--end::Menu toggle-->
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475e39ebe1">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475e39ebe1" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                    </div>
                    <!--end::Filter menu-->
                    <!--begin::Secondary button-->
                    <!--end::Secondary button-->
                    <!--begin::Primary button-->
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid">
                    <!--begin:::Tabs-->
                    <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_settings_general">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->General</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_store">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm004.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="currentColor" />
                                    <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="currentColor" />
                                    <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="currentColor" />
                                    <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="currentColor" />
                                    <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="currentColor" />
                                    <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="currentColor" />
                                    <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="currentColor" />
                                    <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Email</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_localization">
                            <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor" />
                                    <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Social</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_products">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm005.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M20 22H4C3.4 22 3 21.6 3 21V2H21V21C21 21.6 20.6 22 20 22Z" fill="currentColor" />
                                    <path d="M12 14C9.2 14 7 11.8 7 9V5C7 4.4 7.4 4 8 4C8.6 4 9 4.4 9 5V9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9V5C15 4.4 15.4 4 16 4C16.6 4 17 4.4 17 5V9C17 11.8 14.8 14 12 14Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Seo</a>
                        </li>
                        <!--end:::Tab item-->
                        <!--begin:::Tab item-->
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_settings_customers">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com014.svg-->
                            <span class="svg-icon svg-icon-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor" />
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor" />
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor" />
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Analytics </a>
                        </li>

                       
                        <!--end:::Tab item-->
                    </ul>
                    <!--end:::Tabs-->
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                            <!--begin::Products-->
                            <div class="card card-flush mb-5 mb-xl-8">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Title-->
                                        <h2>General</h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Form-->
                                    
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span> App Name </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="app_name" value="{{settings('app_name')}}" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                            <div class="fv-row flex-row-fluid">
                                           
                                            <div class="col-md-12">
                                                <!--begin::Input-->
                                                <label class="form-label">
                                                <span> Footer Text </span>
                                                </label>
                                                <input type="text" class="form-control form-control-solid" name="footer_text" value="{{settings('footer_text')}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>


                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                        <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-3">
                                            <span>Logo</span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allowed file types: png, jpg, jpeg." aria-label="Allowed file types: png, jpg, jpeg."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image input-->
                                            
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/img/avatars/1657105353.jpg')">
                                            <div class="image-input-wrapper w-100px h-100px" style="background-image: url('/img/avatars/1657105353.jpg')"></div>
                                            <!--begin::Preview existing avatar-->
                                                
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change Logo">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="logo" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="logo">
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel Logo">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <!--end::Remove-->
                                                </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <!--begin::Separator-->
                                                <!-- <div class="separator mb-6"></div> -->
                                                <!--end::Separator-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    
                                    <!--end::Form-->
                                </div>
                                <!--end::Card body-->
                            </div>

                            <!--end::Products-->
                        </div>


                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_settings_store" role="tabpanel">
                            <!--begin::Products-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Title-->
                                        <h2>Email</h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Form-->
                                    <form method="post" id="kt_ecommerce_settings_general_store" class="form" action="https://soumya.testmywebsite.in/admin/settings" enctype="multipart/form-data">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row flex-row-fluid">
                                           
                                            <div class="col-md-12">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                    <span> Email </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="email" value="{{settings('email')}}">
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                    </div>
                                    
                                        <!-- check box -->
                                        <div class="row fv-row mb-7">
                                            <div class="col-md-3">
                                        <div class="checkbox">
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <input type="hidden" value="0" name="show_copyright">
                                                    <input name="show_copyright" value="1" type="hidden" >
                                            </label> 
                                        </div>
                                    </div>
                                </div>
                                        <!--end::Input group-->
                                        <!--begin::Action buttons-->
                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <!--begin::Separator-->
                                                <!-- <div class="separator mb-6"></div> -->
                                                <!--end::Separator-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    
                                    <!--end::Form-->
                                </form></div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_settings_localization" role="tabpanel">
                            <!--begin::Products-->
                            <div class="card card-flush mb-5 mb-xl-8">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Title-->
                                        <h2>Social Profiles</h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Form-->
                                    
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                           
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                    <span> Facebook Page URL</span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="facebook_url" value="{{settings('facebook_url')}}" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                            <div class="fv-row flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                    <span>Twitter Profile URL </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="twitter_url" value="{{settings('twitter_url')}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span> Instagram Account URL  </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="instagram_url" value="{{settings('instagram_url')}}" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                            <div class="fv-row mb-7 flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span> LinkedIn URL </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="linkedin_url" value="{{settings('linkedin_url')}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>


                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                            
                                            <div class="col-md-6">
                                            <label class="form-label">
                                                <span>Youtube Channel URL </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="youtube_url" value="{{settings('youtube_url')}}" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                    </div>
                                    

                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                        
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <!--begin::Separator-->
                                                <!-- <div class="separator mb-6"></div> -->
                                                <!--end::Separator-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    
                                    <!--end::Form-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_settings_products" role="tabpanel">
                            <!--begin::Products-->
                            <div class="card card-flush mb-5 mb-xl-8">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Title-->
                                        <h2>Meta</h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Form-->
                                    
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                           
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                    <span> Meta Site Name</span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="meta_site_name" value="{{settings('meta_site_name')}}" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                            <div class="fv-row flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                    <span>Meta Description </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="meta_description" value="{{settings('meta_description')}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span> Meta Keyword </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="meta_keyword" value="{{settings('meta_keyword')}}" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                            <div class="fv-row flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span >Meta Twitter Creator Account </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="meta_twitter_creator" value="{{settings('meta_twitter_creator')}}" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                            
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span>Meta Facebook App Id </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="meta_fb_app_id" value="{{settings('meta_fb_app_id')}}" placeholder="Meta Facebook App Id" />
                                                <!--end::Input-->
                                            </div>
                                            </div>
                                        
                                            <div class="fv-row flex-row-fluid">
                                         
                                            <div class="col-md-12">
                                            <label class="form-label">
                                                <span>Meta Twitter Site Account </span>
                                                </label>
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" name="meta_twitter_site" value="{{settings('meta_twitter_site')}}" placeholder="Meta Twitter Site Account" />
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                    </div>

                                        <div class="d-flex flex-column flex-md-row gap-5">
                                        <div class="fv-row mb-7 flex-row-fluid">
                                        <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold mb-3">
                                            <span>Meta Image </span>
                                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg."></i>
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image input-->
                                            
                                            @if(settings('meta_image')=='')
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/img/avatars/default-avatar.jpg')">
                                            <div class="image-input-wrapper w-100px h-100px" style="background-image: url('/img/avatars/default-avatar.jpg')"></div>
                                            @else
                                            @php
                                            $imagesUrl = '/'.settings('meta_image');
                                            @endphp
                                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{$imagesUrl}}')">
                                            <div class="image-input-wrapper w-100px h-100px" style="background-image: url('{{$imagesUrl}}')"></div>
                                            @endif
                                                <!--begin::Preview existing avatar-->
                                                
                                                <!--end::Preview existing avatar-->
                                                <!--begin::Edit-->
                                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                    <i class="bi bi-pencil-fill fs-7"></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="meta_image" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="meta_image" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->
                                                <!--begin::Cancel-->
                                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                                    <i class="bi bi-x fs-2"></i>
                                                </span>
                                                <!--end::Cancel-->
                                                <!--begin::Remove-->
                                                <!--end::Remove-->
                                                </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <!--begin::Separator-->
                                                <!-- <div class="separator mb-6"></div> -->
                                                <!--end::Separator-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    
                                    <!--end::Form-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end:::Tab pane-->
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade" id="kt_ecommerce_settings_customers" role="tabpanel">
                            <!--begin::Products-->
                            <div class="card card-flush">
                                <!--begin::Card header-->
                                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <!--begin::Title-->
                                        <h2>Analytics </h2>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Form-->
                                
                                        <!--begin::Input group-->
                                    
                                    <div class="d-flex flex-column mb-10 fv-row">
                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bolder form-label mb-3">Google Analytics 
                                        <i tabindex="0" class="cursor-pointer fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-content="Add an addition invoice footer note."></i></div>
                                        <!--end::Label-->
                                        <textarea class="form-control form-control-solid rounded-3" rows="4" name="google_analytics">{{settings('google_analytics')}}</textarea>
                                    </div>
                                        
                                        <!--end::Input group-->
                                        <!--begin::Action buttons-->
                                        <div class="row">
                                            <div class="col-md-9 offset-md-3">
                                                <!--begin::Separator-->
                                                <!-- <div class="separator mb-6"></div> -->
                                                <!--end::Separator-->
                                                <div class="d-flex justify-content-end">
                                                    <!--begin::Button-->
                                                    <button type="reset" data-kt-ecommerce-settings-type="cancel" class="btn btn-light me-3">Cancel</button>
                                                    <!--end::Button-->
                                                    <!--begin::Button-->
                                                    <button type="submit" data-kt-ecommerce-settings-type="submit" class="btn btn-primary">
                                                        <span class="indicator-label">Save</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Action buttons-->
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Products-->
                        </div>
                        <!--end:::Tab pane-->
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection
