@extends('backend.layouts.app')

@section('title')  @endsection
@section('breadcrumbs')

@endsection

@section('content')

<style>
    body {
    font-size: 20px;
    }
</style>
<style>
 .bordercss {
    border: 1px solid #000;
    }
.tableresponsive {
    margin-top:-270%;
    }
.paragraphcss {
    padding: 5px;
    margin-top: -13px;
}
.systemresponsive {
    margin-top:-250%;
}
.ulcss {
    margin-bottom: 7px;
}
.bcss{
    background-color:#EA2027;
    color:white;
}
</style>
<div class="toolbar">
<!--begin::Container-->
<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
    <!--begin::Page title-->
    <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
        <!--begin::Title-->
        <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">System Information</h1>
        
        <!-- <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
            <li class="breadcrumb-item text-muted">
                <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
            </li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-300 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-muted">eCommerce</li>
            <li class="breadcrumb-item">
                <span class="bullet bg-gray-300 w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item text-dark">Settings</li>
        </ul> -->
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <!-- <div class="d-flex align-items-center gap-2 gap-lg-3">
        
        <div class="m-0">
            
            <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
       
            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
                </svg>
            </span>
           Filter</a>
           
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475e39ebe1">
               
                <div class="px-7 py-5">
                    <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                </div>
                
                <div class="separator border-gray-200"></div>
               
                <div class="px-7 py-5">
                   
                    <div class="mb-10">
                    
                        <label class="form-label fw-bold">Status:</label>
                       
                        <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475e39ebe1" data-allow-clear="true">
                                <option></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                            </select>
                        </div>
                        
                    </div>
                   
                    <div class="mb-10">
                       
                        <label class="form-label fw-bold">Member Type:</label>
                        
                        <div class="d-flex">
                            
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1" />
                                <span class="form-check-label">Author</span>
                            </label>
                           
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                <span class="form-check-label">Customer</span>
                            </label>
                          
                        </div>
                 
                    </div>
                    
                    <div class="mb-10">
                       
                        <label class="form-label fw-bold">Notifications:</label>
                        
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                            <label class="form-check-label">Enabled</label>
                        </div>
                       
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    
                </div>
              
            </div>
          
        </div>
        
        <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a>
  
    </div> -->
  
</div>

</div>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
<!--begin::Toolbar container-->
<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <!-- <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Website Analytics</h1> -->
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
            <!--begin::Item-->
            <li class="breadcrumb-item text-muted">
                <!-- <a href="/metronic8/demo1/../demo1/index.html" class="text-muted text-hover-primary">Home</a> -->
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
                <!-- <span class="bullet bg-gray-400 w-5px h-2px"></span> -->
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <!-- <li class="breadcrumb-item text-muted">Dashboards</li> -->
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
        <!-- <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary d-flex align-items-center px-4" data-kt-initialized="1"> -->
            <!--begin::Display range-->
            <!-- <div class="text-gray-600 fw-bold">12 Jun 2022 - 11 Jul 2022</div> -->
            <!--end::Display range-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
            <!-- <span class="svg-icon svg-icon-1 ms-2 me-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor"></path>
                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor"></path>
                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor"></path>
                </svg>
            </span> -->
            <!--end::Svg Icon-->
        <!-- </div> -->
        <!--end::Daterangepicker-->
        <!--begin::Secondary button-->
        <!--end::Secondary button-->
        <!--begin::Primary button-->
        <!-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a> -->
        <!--end::Primary button-->
    </div>
    <!--end::Actions-->
</div>
<!--end::Toolbar container-->
</div>

<div id="kt_app_content_container" class="app-container container-xxl">
<div class="row gx-5 gx-xl-10">
<!--begin::Col-->
<div class="col-xxl-4 mb-5 mb-xl-10">
    <!--begin::List widget 9-->
    <div class="card card-flush h-xl-100">
        <!--begin::Header-->
        <div class="card-header py-7">
            <!--begin::Statistics-->
            <div class="m-0">
                <!--begin::Heading-->
                <div class="d-flex align-items-center mb-2">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Installed Composer Packages</span>
                        <span class="text-muted mt-1 fw-semibold fs-7"></span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Label-->
                    
                    <!--end::Label-->
                </div>
                <!--end::Heading-->
                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-400"></span>
                <!--end::Description-->
            </div>
            <!--end::Statistics-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
            <!--begin::Item-->
            @foreach($settingArray->require as $key => $req)
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
       
                <!--end::Flag-->
                <!--begin::Section-->
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    
                    <div class="me-5">
                        <!--begin::Title-->
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">{{ $key }}</a>
                        <!--end::Title-->
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Wrapper-->                                                      
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                       
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="badge badge-light-danger fs-base">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                            
                            <!--end::Svg Icon-->{{$req}}</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                  
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>
            <!--begin::Separator-->
            <div class="separator separator-dashed my-3"></div>
            @endforeach
            <!--end::Separator-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::List widget 9-->
</div>
<!--end::Col-->

<div class="col-xxl-4 mb-5 mb-xl-10">
    <!--begin::List widget 9-->
    <div class="card card-flush">
        <!--begin::Header-->
        <div class="card-header py-7">
            <!--begin::Statistics-->
            <div class="m-0">
                <!--begin::Heading-->
                <div class="d-flex align-items-center mb-2">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Required PHP Extensions</span>
                        <span class="text-muted mt-1 fw-semibold fs-7"></span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Label-->
                    
                    <!--end::Label-->
                </div>
                <!--end::Heading-->
                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-400"></span>
                <!--end::Description-->
            </div>
            <!--end::Statistics-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
            <!--begin::Item-->
            
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
           
                <!--end::Flag-->
                <!--begin::Section-->
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    
                    <div class="me-5">
                        <!--begin::Title-->
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Curl Ext:</a>
                        <!--end::Title-->
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                       
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="fs-base">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->

                            <!--end::Svg Icon-->
                            <?php 
                                $DataArrayd = get_loaded_extensions();
                                //   echo "<pre>";
                                //     print_r($DataArrayd);echo "<p>CURL &nbsp;&nbsp; &#x274C;</p>";
                                //   echo "<pre/>";
                                if(in_array('curl',$DataArrayd)){
                                echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>

            <!--begin::Separator-->
            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
                <!--begin::Flag-->
             
                <!--end::Flag-->
                <!--begin::Section-->
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <!--begin::Content-->
                    
                    <div class="me-5">
                        <!--begin::Title-->
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Zip Ext:</a>
                        <!--end::Title-->
                        <!--end::Desc-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Wrapper-->
                    <div class="d-flex align-items-center">
                        <!--begin::Number-->
                       
                        <!--end::Number-->
                        <!--begin::Info-->
                        <div class="m-0">
                            <!--begin::Label-->
                            <span class="fs-base">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->

                            <!--end::Svg Icon-->
                            <?php 
                                if(in_array('zip',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                            <!--end::Label-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Section-->
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
            
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Gd Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('gd',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
             
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Libxml Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('libxml',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
            
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">SimpleXML Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('SimpleXML',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
           
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Mongodb Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('mongodb',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
               
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">PDO Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('PDO',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
               
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Exif Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('exif',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
       
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">File info Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('fileinfo',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
           
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Tokenizer Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('tokenizer',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">

               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">OpenSSL Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('openssl',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
              
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Mbstring Ext:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if(in_array('tokenizer',$DataArrayd)){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
    <!--end::List widget 9-->


    
    <div class="col-xxl-4 mb-5 mb-xl-10">
    <!--begin::List widget 9-->
    <div class="card card-flush">
        <!--begin::Header-->
        <div class="card-header py-7">
            <!--begin::Statistics-->
            <div class="m-0">
                <!--begin::Heading-->
                <div class="d-flex align-items-center mb-2">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Server Environment</span>
                        <span class="text-muted mt-1 fw-semibold fs-7"></span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Label-->
                    
                    <!--end::Label-->
                </div>
                <!--end::Heading-->
                <!--begin::Description-->
                <span class="fs-6 fw-semibold text-gray-400"></span>
                <!--end::Description-->
            </div>
            <!--end::Statistics-->
            <!--begin::Toolbar-->
            <div class="card-toolbar">
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
            <!--begin::Item-->
            
            <div class="d-flex flex-stack">
            
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">PHP Version:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge badge-light-danger fs-base">
                         
                            <!--end::Svg Icon-->{{phpversion()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>

            <div class="d-flex flex-stack">
                
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Laravel Version:</a>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            @foreach($settingArray->require as $key => $required)
                            @if($key == 'laravel/framework')
                            <span class="badge badge-light-danger fs-base">
                            
                            <!--end::Svg Icon-->{{$required}}</span>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>


        <div class="d-flex flex-stack">
         
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Database Mysql:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge badge-light-danger fs-base">
                            <?php
                                $output = shell_exec('mysql -V'); 
                                preg_match('@[0-9]+\.[0-9]+\.[0-9]+@', $output, $version); 
                                echo "<b>.$version[0]</b>";
                                ?>
                                
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>


        <div class="d-flex flex-stack">
               
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Server Software:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge badge-light-danger fs-base">
                            <?php
                                $ServerSoftware = $_SERVER['SERVER_SOFTWARE'];
                                printf("%s<br>", $ServerSoftware);
                            ?> 
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>


        <div class="d-flex flex-stack">
          
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Server OS:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge-light-danger fs-base">
                            <b>{{php_uname()}}</b>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>

            <!-- <div class="d-flex flex-stack">
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">CMS Version:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            //
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div> -->

            <div class="d-flex flex-stack">
                
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Timezone:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                           <span class="badge-light-danger fs-base">
                          <b>
                           <?php
                                echo (env('Timezone'));
                            ?>
                            </b>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>

            <div class="d-flex flex-stack">
  
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Debug Mode:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                                if (env('APP_DEBUG') == true){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>

            <div class="d-flex flex-stack">
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Storage Dir Writable:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php 
                              $data = check_writable(base_path('storage'));
                              if($data == true){
                                        echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                    }else{
                                    echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                    }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed my-3"></div>

            <div class="d-flex flex-stack">
          
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">storage/framework/cache:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class='fs-base'>
                            <?php 
                              $data = check_writable(base_path('storage/framework/cache'));
                              if($data == true){
                                echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                            ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
              
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">xml_split:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php
                                 if(shell_exec('command -v xml_split')){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">
              
               
                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">xml_grep:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="fs-base">
                            <?php
                                 if(shell_exec('command -v xml_grep')){
                                    echo "<span class='badge badge-light-success fs-base'> Enabled</span>";
                                }else{
                                echo "<span class='badge badge-light-danger fs-base'> Disabled</span>";
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">

                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">App Root Directory:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge badge-light-success fs-base">
                                 <?php echo base_path(); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">

                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">App Size:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge badge-light-success fs-base">
                                 <?php echo shell_exec('du -sh /var/www/cwmodularweb/'); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="separator separator-dashed my-3"></div>
            <div class="d-flex flex-stack">

                <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                    <div class="me-5">
                        <a class="text-gray-800 fw-bold text-hover-primary fs-6">Free Disk Space:</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <span class="badge badge-light-success fs-base">
                                 <?php echo round(disk_free_space("/") / 1024 / 1024 / 1024).' GB' ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
    <!--end::List widget 9-->

</div>     
</div>                            
 
@endsection
