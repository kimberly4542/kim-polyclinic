@extends('layouts.style')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="border-radius: 4px">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                    <p style="color: #00D9A3; font-size: 35px;"></p>
                                    <p style="color: #00D9A3; font-size: 35px;">Please fill-up the Registration Form</p>
                                </div>
                                <img class="img-responsive" width="150" height="150" src="{{asset('image/icon.fw.png')}}" style="float: right">
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <form action="/registrationUser" id="wizard_with_validation" method="POST">
                                    {{ csrf_field() }}
                                <!--  <h3>Basic Information</h3>
                                    <fieldset>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="firstname" required>
                                                    <label class="form-label">First Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="username" required>
                                                    <label class="form-label">Username</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="middlename">
                                                    <label class="form-label">Middle Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" name="password" required>
                                                    <label class="form-label">Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="lastname" required>
                                                    <label class="form-label">Last Name</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" name="email" required>
                                                    <label class="form-label">E-Mail</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <h3>Clinic Information</h3>
                                    <fieldset>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="row clearfix">
                                                <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                                    <select class="form-control show-tick" style="text-transform: uppercase;" name="specialization">
                                                        <option>SELECT SPECIALIZATION</option>
                                                        @foreach($get_specialization as $data)
                                                        <option value="{{ $data->spec_id }}" style="text-transform: uppercase;">{{ $data->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="clinic_name" class="form-control" required>
                                                    <label class="form-label">Clinic Name</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <textarea name="clinic_address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                                    <label class="form-label">Clinic Address</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="form-group form-float m-t-20">
                                                <div class="form-line">
                                                    <input type="text" name="day" class="form-control" required>
                                                    <label class="form-label">Days</label>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <label style="color: #ccc">Time Open</label>
                                                            <input type="time" name="time_in" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <label style="color: #ccc">Time Close</label>
                                                            <input type="time" name="time_out" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>  -->

                        

                                    <h3>Please select the features you want on your hub</h3>
                                    <fieldset>
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select main features for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($get_main_module as $data)
                                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                <input type="checkbox"
                                                                                        id="main{{ $data->modlist_id }}"
                                                                                        class="filled-in checkin"
                                                                                        name="main_module[]"
                                                                                        value="{{ $data->modlist_id }}"
                                                                                        onclick="callF({{ $data->modlist_id }});">
                                                                                <label for="main{{ $data->modlist_id }}">
                                                                                    <p class="checkFont"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="{{ $data->description }}">{{ $data->module_name }}</p>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected features will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 1 features for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  id="main_sub1">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature PROFILE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub1_patient as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="lvl{{ $data->sub1_id }}"
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callS({{ $data->sub1_id }});">
                                                                                                    <label for="lvl{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  id="main_sub2">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature QUEUEING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_clinic as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="lvl{{ $data->sub1_id }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}">
                                                                                                    <label for="lvl{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="main_sub3">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature SCHEDULE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_schedule as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="{{ $data->sub1_id }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="main_sub4">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature BOOKING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_booking as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="{{ $data->sub1_id }}1"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_id }}1">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="main_sub5">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature BILLING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_billing as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->sub1_id }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_id }}1">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" hidden id="main_sub6">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature INVENTORY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_inventory as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="{{ $data->sub1_id }}" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="main_sub7">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature MESSAGING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_messaging as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="{{ $data->sub1_id }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_id }}1">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="main_sub8">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature MANAGE REPORT</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_mngreport as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="{{ $data->sub1_id }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_id }}1">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="main_sub9">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature SETTINGS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_settings as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="{{ $data->sub1_name }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="9|{{ $data->sub1_id }}"
                                                                                                            >
                                                                                                    <label for="{{ $data->sub1_name }}1">
                                                                                                        <p class="checkFont"
                                                                                                            data-toggle="tooltip"
                                                                                                            data-placement="top"
                                                                                                            title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected features will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 2 sub features for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  id="sub_sub1">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PATIENT</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_patient as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="subs{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}"
                                                                                                    onclick="subS({{ $data->sub1_id }});">
                                                                                            <label for="subs{{ $data->sub2_id }}">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  id="sub_sub2">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature CLINIC</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_clinic as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="{{ $data->sub2_name }}2" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}2">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub3">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature DOCTORS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_doctor as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="{{ $data->sub2_name }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub4">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature MEDICINE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_medicine as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="{{ $data->sub2_name }}1" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}1">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub5">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PRIORITY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_priority as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="lvl{{ $data->sub2_name }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="lvl{{ $data->sub2_name }}">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub1">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature INVENTORY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_inventory as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                id="{{ $data->sub2_name }}1" 
                                                                                                class="filled-in" 
                                                                                                name="lvl2[]" 
                                                                                                value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}1">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub1">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature MODE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_mode as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="{{ $data->sub2_name }}1" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}1">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub1">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature FINANCIAL</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_financial as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="{{ $data->sub2_name }}1" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}1">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="sub_sub1">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PATIENTS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_patients as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="{{ $data->sub2_name }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub2_id }}">
                                                                                            <label for="{{ $data->sub2_name }}">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected features will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select lvl 3 features for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  id="sub1_sub1">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature PATIENT LIST</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patient List ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_patlist as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="sub1_sub2">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature PERSONAL PROFILE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select your own input type and view for your Patient Personal Profile</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_patpersonal as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="sub1_sub3">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature MEDICAL HISTORY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can also have other features for your Patients Diagnosis and view Patient Med.History</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_patmh as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SCHEDULES</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patient Medical Schedules ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_patsched as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature BILLS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view your Patient Medical History ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_patbills as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature INFORMATION</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view your Clinic Information ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_clinic_info as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature IMAGES</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features for your clinic  images</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_clinic_img as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SCHEDULES</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Clinic Schedules ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_clinic_sched as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature INFORMATION</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features to upload your image and view your Information List</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_doc_info as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature INFORMATION</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features to upload your image and view your Information List</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_med_info as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature 1ST PRIORITY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to function your Patient Queue List ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_queue_first as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature 2ND PRIORITY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to function your Patient Queue List ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_queue_second as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature QUEUE PERSONAL PROFILE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to input your Patients ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_queue_per as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature QUEUE SCHEDULE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you view your Patient Schedule ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_queuesched as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature QUEUE MEDICAL HISTORY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can also have other features for your Patient Diagnosis ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_queue_img as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature QUEUE BILL</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view your Patient Bill ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_queue_bill as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature QUEUE BILL</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view your Patient Bill ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_queue_bill as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SCHEDULE PATIENT</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view your Patient Calendar ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_sched_pat as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SCHEDULE CLINIC</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view your Patient Calendar ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_sched_cli as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature BOOKING FUNCTION</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to input and view patient in booking function ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_book as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature BILLING FUNCTION</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to function your billing ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_bill as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature INVENTORY STOCK IN</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features to view Stock - in and input Item for Stock - in</p>
                                                                                            </div>
                                                                                            @foreach($sub3_stockin as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature INVENTORY STOCK OUT</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features to view Stock - out and input Item for Stock - out</p>
                                                                                            </div>
                                                                                            @foreach($sub3_stockout as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature INVENTORY RETURN ITEMS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features to view Return Items and input Item for Return Items</p>
                                                                                            </div>
                                                                                            @foreach($sub3_return as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature INVENTORY SOLD ITEMS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can select features to view Return Items and input Item for Return Items</p>
                                                                                            </div>
                                                                                            @foreach($sub3_solditem as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature Messaging</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can put additional features for Messaging</p>
                                                                                            </div>
                                                                                            @foreach($sub3_msg as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature FINANCIAL STATEMENT</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_fin_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature FREE OF CHARGES</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_free_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature COMPARISON REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_com_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature STOCK - IN REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_stockin_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature STOCK - OUT REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_stockout_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SOLD ITEMS REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_solditem_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature RETURN ITEMS REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_return_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SUMMARY REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_sum_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature PATIENT SUMMARY REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_patsum_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature CONSULATION SUMMARY REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_con_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SCHEDULE SUMMARY REPORTS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Report ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_sched_report as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 60px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature SETTINGS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view and inputs for My Account?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_my_account as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature SETTINGS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view and inputs for Secretary Account?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_sec_account as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature SETTINGS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to view and inputs for MH. FORM ?</p>
                                                                                            </div>
                                                                                            @foreach($sub3_mh_form as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->title_desc }}"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="{{ $data->description }}">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="{{ $data->path }}" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1" style="padding-left: 50px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected features will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Main Features</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="clearfix">
                                                                    <div class="col-lg-12">
                                                                        <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                                                        <p align="center">PROFILE</p>
                                                                    </div>
                                                                    <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                                                        <p align="center">QUEUE</p>
                                                                    </div>
                                                                    <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                                                        <p align="center">SCHEDULE</p>
                                                                    </div>
                                                                    <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                                                        <p align="center">BOOKING</p>
                                                                    </div>
                                                                    <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                                                        <p align="center">SETTINGS</p>
                                                                    </div>
                                                                    <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                                                        <p align="center">BILLING</p>
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <button class="btn btn-success waves-effect btn-block">USE</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Level 1 Features</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Level 2 Features</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Level 3 Features</h2>
                                                            </div>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div> -->
                                    </fieldset>
                                <button type="submit" class="btn btn-success waves-effect m-l-5 right" style="margin-right: 20px;">Save</button>
                                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#largeModal">MODAL - LARGE SIZE</button>
                                </form>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="legal">
                                        <small class="color color-font" style="font-size: 14px">Powerder by Engtech Global Solution Inc.    </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #00D9A3">
                            <h4 style="color: #fff">PREVIEW OF THE FEATURES YOU SELECT</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            
    </section>
@endsection

@section('myScripts')
    <!-- <style type="text/css">
        a[href="#finish"] {
            margin-right: 200px;
        }
    </style> -->
    <script type="text/javascript">
        $(document).ready(function() {
            
        });

        function callF(e) {
            if(e == '1') {
                if($('#main1').prop("checked")) {
                    $('#main_sub1').show();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                }
                 else {
                    $('#main_sub1').hide();
                }
            }

            if(e == '2') {
                if($('#main2').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').show();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub2').hide();
                }
            }

            if(e == '3') {
                if($('#main3').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').show();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub3').hide();
                }
            }

            if(e == '4') {
                if($('#main4').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').hide();
                    $('#main_sub4').show();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub4').hide();
                }
            }

            if(e == '5') {
                if($('#main5').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').show();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub5').hide();
                }
            }

            if(e == '6') {
                if($('#main6').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').show();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub6').hide();
                }
            }

            if(e == '7') {
                if($('#main7').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').show();
                    $('#main_sub8').hide();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub7').hide();
                }
            }

            if(e == '8') {
                if($('#main8').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').show();
                    $('#main_sub9').hide();
                } else {
                    $('#main_sub8').hide();
                }
            }

            if(e == '9') {
                if($('#main9').prop("checked")) {
                    $('#main_sub1').hide();
                    $('#main_sub2').hide();
                    $('#main_sub3').hide();
                    $('#main_sub4').hide();
                    $('#main_sub5').hide();
                    $('#main_sub6').hide();
                    $('#main_sub7').hide();
                    $('#main_sub8').hide();
                    $('#main_sub9').show();
                } else {
                    $('#main_sub9').hide();
                }
            }    
        }

        function callS(e) {
            if(e == '1') {
                if($('#lvl1').prop("checked")) {
                    $('#sub_sub1').show();
                    $('#sub_sub2').hide();
                    $('#sub_sub3').hide();
                    $('#sub_sub4').hide();
                }
                else {
                    $('#sub_sub1').hide();
                }
            }
            if(e == '2') {
                if($('#lvl2').prop("checked")) {
                    $('#sub_sub2').show();
                    $('#sub_sub1').hide();
                    $('#sub_sub3').hide();
                    $('#sub_sub4').hide();
                }
                else {
                    $('#sub_sub2').hide();
                }
            }
            if(e == '3') {
                if($('#lvl3').prop("checked")) {
                    $('#sub_sub3').show();
                    $('#sub_sub1').hide();
                    $('#sub_sub2').hide();
                    $('#sub_sub4').hide();
                }
                else {
                    $('#sub_sub3').hide();
                }
            }
            if(e == '4') {
                if($('#lvl4').prop("checked")) {
                    $('#sub_sub4').show();
                    $('#sub_sub1').hide();
                    $('#sub_sub2').hide();
                    $('#sub_sub3').hide();
                }
                else {
                    $('#sub_sub4').hide();
                }
            }
            
        }

    </script>
@endsection