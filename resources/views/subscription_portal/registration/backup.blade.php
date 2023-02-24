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
                                    <!-- <h3>Basic Information</h3>
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
                                    </fieldset> -->

                                    <!-- <h3>Clinic Information</h3>
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
                                    </fieldset> -->


                                    <h3>Please select the feutures you want on your hub</h3>
                                    <fieldset>
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select main feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($get_main_module as $data)
                                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                <input type="checkbox"
                                                                                        id="{{ $data->module_name }}"
                                                                                        class="filled-in"
                                                                                        name="main_module[]"
                                                                                        value="{{ $data->modlist_id }}">
                                                                                <label for="{{ $data->module_name }}">
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
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected feutures will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                        <a type="btn" class="btn1">add</a>
                                                                        <a type="btn" class="btn2">remove</a>

                                                                        <h1 class="font1">WEWEWEW</h1>
                                                                        <h2 class="font2">wawawa</h2>

                                                                        <script>
                                                                            $(function) {

                                                                                $('.btn1').click(function() {
                                                                                    alert('asdasd');
                                                                                })
                                                                            }
                                                                        </script>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card-style card-mainHeight">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 17px">Most used feutures for main feutures</h2>
                                                            </div>
                                                            <div class="m-t-20"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card-style card-mainHeight">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 17px">Most used feutures for level 1 feutures</h2>
                                                            </div>
                                                            <div class="m-t-20"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card-style card-mainHeight">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 17px">Most used feutures for level 2 feutures</h2>
                                                            </div>
                                                            <div class="m-t-20"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 1 feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 display1">
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
                                                                                                            id="{{ $data->sub1_name }}"
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_name }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 display2 ">
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
                                                                                                            value="{{ $data->sub1_id }}">
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
                                                                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                                                                            id="{{ $data->sub1_name }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_name }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                                                                            id="{{ $data->sub1_name }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_name }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                                                                            id="{{ $data->sub1_name }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
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
                                                                            </div> -->
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                                                                                            id="{{ $data->sub1_name }}" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="{{ $data->sub1_name }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                                                                            id="{{ $data->sub1_name }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                                                                            id="{{ $data->sub1_name }}1"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                                                                            id="{{ $data->sub1_name }}1" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
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
                                                                    </div> -->
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected feutures will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 2 sub feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
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
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected feutures will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select main feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature QUEUEING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" id="patient-basictable" class="filled-in patlist">
                                                                                                        <label for="patient-basictable"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="Basic without any addtional modification classes">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="image/basictable.fw.png" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0">
                                                                                                        <small class="img-font1">Basic</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected feutures will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card-style card-mainHeight">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 2 sub feutures for your hub</h2>
                                                            </div>
                                                            <div class="m-t-20"></div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-style card-subLvl2Height">
                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PATIENT</h2>
                                                                    </div>
                                                                    <div class="m-t-20"></div>
                                                                    @foreach($get_sub2_patient as $data)
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox" id="{{ $data->sub2_name }}" class="filled-in" name="main_module[]" value="1">
                                                                            <label for="{{ $data->sub2_name }}"><p class="checkFont1">{{ $data->sub2_name }}</p></label>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-style card-subProfileHeight">
                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature CLINIC</h2>
                                                                    </div>
                                                                    <div class="m-t-20"></div>
                                                                    @foreach($get_sub2_clinic as $data)
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox" id="{{ $data->sub2_name }}" class="filled-in" name="main_module[]" value="1">
                                                                            <label for="{{ $data->sub2_name }}"><p class="checkFont1">{{ $data->sub2_name }}</p></label>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-style card-subProfileHeight1">
                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature DOCTORS</h2>
                                                                    </div>
                                                                    <div class="m-t-20"></div>
                                                                    @foreach($get_sub2_doctor as $data)
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox" id="{{ $data->sub2_name }}1" class="filled-in" name="main_module[]" value="1">
                                                                            <label for="{{ $data->sub2_name }}1"><p class="checkFont">{{ $data->sub2_name }}</p></label>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="card-style card-subProfileHeight1">
                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature MEDICINE</h2>
                                                                    </div>
                                                                    <div class="m-t-20"></div>
                                                                    @foreach($get_sub2_medicine as $data)
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox" id="{{ $data->sub2_name }}1" class="filled-in" name="main_module[]" value="1">
                                                                            <label for="{{ $data->sub2_name }}1"><p class="checkFont">{{ $data->sub2_name }}</p></label>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-success waves-effect m-l-5">Save</button>
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
    </section>

@endsection