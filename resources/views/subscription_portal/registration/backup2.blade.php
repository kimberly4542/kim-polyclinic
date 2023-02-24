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
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="profile"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="1">
                                                                            <label for="profile">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for profiling data">PROFILE</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="queuing"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="2">
                                                                            <label for="queuing">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is to queue the patients">QUEUING</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="schedule"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="3">
                                                                            <label for="schedule">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for creating schedules">SCHEDULE</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="booking"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="4">
                                                                            <label for="booking">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for booking the patients">booking</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="billing"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="5">
                                                                            <label for="billing">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for billing the patients">billing</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="inventory"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="6">
                                                                            <label for="inventory">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for medicines inventory">inventory</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="messaging"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="7">
                                                                            <label for="messaging">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for messaging">messaging</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="mngreport"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="8">
                                                                            <label for="mngreport">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This feature is for generating reports">manange report</p>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                            <input type="checkbox"
                                                                                    id="settings"
                                                                                    class="filled-in"
                                                                                    name="main_module[]"
                                                                                    value="9">
                                                                            <label for="settings">
                                                                                <p class="checkFont"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="top"
                                                                                    title="This features is for account settings">settings</p>
                                                                            </label>
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
                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 1 feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile1 ">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature PROFILE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="patient"
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]" 
                                                                                                    value="1">
                                                                                            <label for="patient">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for profiling the patients">patient</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="clinic"
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]" 
                                                                                                    value="2">
                                                                                            <label for="clinic">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for profiling your clinic">clinic</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="doctor"
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]" 
                                                                                                    value="3">
                                                                                            <label for="doctor">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for profiling your information">doctor</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="medicine"
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]" 
                                                                                                    value="4">
                                                                                            <label for="medicine">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for  profiling your medicine">medicine</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 queue1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature QUEUING</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="priority" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]" 
                                                                                                    value="9">
                                                                                            <label for="priority">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for setting patient priority">priority</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 schedule1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature SCHEDULE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="mode"
                                                                                                    class="filled-in"
                                                                                                    name="lvl1[]"
                                                                                                    value="10">
                                                                                            <label for="mode">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for your schedule mode">mode</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for main feature BOOKING</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="booking1"
                                                                                                    class="filled-in"
                                                                                                    name="lvl1[]"
                                                                                                    value="11">
                                                                                            <label for="booking1">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for booking">booking</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 billing1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature BILLING</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="billing1" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="12">
                                                                                            <label for="billing1">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for billing">billing</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 inventory1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature INVENTORY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="stockin" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="13">
                                                                                            <label for="stockin">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for medicine stock - in">stock - in</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="stockout" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="14">
                                                                                            <label for="stockout">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for medicine stock - out">stock - out</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="solditem" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="15">
                                                                                            <label for="solditem">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for sold medicine">Sold items</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="returnitem" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="16">
                                                                                            <label for="returnitem">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for returned medicine">return items</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 messaging1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature MESSAGING</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="msg" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="17">
                                                                                            <label for="msg">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for messaging">messaging</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mngreport1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature MANAGE REPORT</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="financial" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="18">
                                                                                            <label for="financial">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for financial reports">financial</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="mng-inv" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="19">
                                                                                            <label for="mng-inv">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for inventory reports">inventory</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="mng-report" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="20">
                                                                                            <label for="mng-report">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient reports">patients</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 setting1 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 14px">Sub features for main feature SETTINGS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="myaccount" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="21">
                                                                                            <label for="myaccount">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for your account settings">my account</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="secaccount" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="22">
                                                                                            <label for="secaccount">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for your sec. account settings">sec. account</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                    id="mhform" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl1[]"
                                                                                                    value="23">
                                                                                            <label for="mhform">
                                                                                                <p class="checkFont"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for medicine history form">mh. form</p>
                                                                                            </label>
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
                                                </div>
                                            </div>
                                            <!-- <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 2 sub feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 patient2 ">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PATIENT</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="patlist" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="1">
                                                                                            <label for="patlist">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient list">patient list</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="perprofile" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="2">
                                                                                            <label for="perprofile">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient personal profile">personal profile</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="medhis" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="3">
                                                                                            <label for="medhis">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient medical history">medical history</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="patient-sched" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="4">
                                                                                            <label for="patient-sched">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for schedule">schedules</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="bill" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="5">
                                                                                            <label for="bill">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient bills">bills</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clinic2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature CLINIC</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="clinic-information" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="6">
                                                                                            <label for="clinic-information">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for clinic information">information</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="clini-images" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="7">
                                                                                            <label for="clini-images">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for clinic images">Images</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="clinic-sched" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="8">
                                                                                            <label for="clinic-sched">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for clinic schedules">schedules</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 doctor2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature DOCTOR</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                id="doc-information" 
                                                                                                class="filled-in" 
                                                                                                name="lvl2[]" 
                                                                                                value="9">
                                                                                            <label for="doc-information">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for doctor information">information</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 medicine2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature MEDICINE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                id="med-information" 
                                                                                                class="filled-in" 
                                                                                                name="lvl2[]" 
                                                                                                value="10">
                                                                                            <label for="med-information">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for medicine information">information</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 priority2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PRIORITY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="first" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="11">
                                                                                            <label for="first">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for  1st priority queue">1st priority</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="second" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="12">
                                                                                            <label for="second">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for 2nd priority queue">2nd priority</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mode2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature MODE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sched-patient" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="13">
                                                                                            <label for="sched-patient">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient schedule">patient</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sched-clinic" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="14">
                                                                                            <label for="sched-clinic">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for clinic schedule">clinic</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mng-financial2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature FINANCIAL</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="fin-statement" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="15">
                                                                                            <label for="fin-statement">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for financial report">Financial Statement</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="fin-charges" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="16">
                                                                                            <label for="fin-charges">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for free of charges">free of charges</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="com-report" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="17">
                                                                                            <label for="com-report">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for comparison report">comparison report</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mng-inventory2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature INVENTORY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="mng-stockin" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="18">
                                                                                            <label for="mng-stockin">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for stock - in reports">stock - in</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="mng-stockout" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="19">
                                                                                            <label for="mng-stockout">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for stock - out reports">stock - out</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="mng-solditems" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="20">
                                                                                            <label for="mng-solditems">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for sold item reports">sold items</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="mng-returnitem" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="21">
                                                                                            <label for="mng-returnitem">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for return item reports">return items</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="mng-summary" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="22">
                                                                                            <label for="mng-summary">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for summary reports">summary</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mng-patient2 hidden">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 feature PATIENTS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="pat-summary" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="23">
                                                                                            <label for="pat-summary">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for patient summary reports">patient summary</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="cons-summary" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="24">
                                                                                            <label for="cons-summary">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for consultation reports">consultation summary</p>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sched-summary" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="25">
                                                                                            <label for="sched-summary">
                                                                                                <p class="checkFont1"
                                                                                                    data-toggle="tooltip"
                                                                                                    data-placement="top"
                                                                                                    title="This feature is for schedule reports">schedule summary</p>
                                                                                            </label>
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
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 3 feutures for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 patient-list3 hidden">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature PATIENT LIST</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patients List ?</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="patient-basictable" 
                                                                                                            class="filled-in patient-basictable"
                                                                                                            value="1">
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
                                                                                                    <p align="center" style="padding: 0;">
                                                                                                        <small class="img-font1" 
                                                                                                                style="padding-left: 60px;">Basic Table
                                                                                                        </small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="patient-stripedtable" 
                                                                                                            class="filled-in patient-stripedtable"
                                                                                                            value="2">
                                                                                                        <label for="patient-stripedtable"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="Add zebra-striping to any table row">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="image/stripedtable.fw.png" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0;">
                                                                                                        <small class="img-font1" 
                                                                                                                style="padding-left: 60px;">Striped Table
                                                                                                        </small>
                                                                                                    </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 patient-personal3 hidden">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature PERSONAL PROFILE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to input your Patient Personal Profile ?</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="personal-basicinput" 
                                                                                                                class="filled-in personal-basicinput"
                                                                                                                value="3">
                                                                                                            <label for="personal-basicinput"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic inputs without any additional modification classes">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/basicinput.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Basic Input
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="personal-advanceinput" 
                                                                                                                class="filled-in personal-advanceinput"
                                                                                                                value="4">
                                                                                                            <label for="personal-advanceinput"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Applied simple animation during clicking the text fields with floating labels">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/advanceinput.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Advance Input
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="personal-patientimage" 
                                                                                                                class="filled-in personal-patientimage"
                                                                                                                value="5">
                                                                                                            <label for="personal-patientimage"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="This function can allow you to upload patients Image">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/patientimage.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Patient Image
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patients Personal Profile ?</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="personal-hovertable" 
                                                                                                                class="filled-in personal-hovertable"
                                                                                                                value="6">
                                                                                                            <label for="personal-hovertable"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic without any addtional modification classes">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/hovertable.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Hover Table
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="personal-exportedtable" 
                                                                                                                class="filled-in personal-exportedtable"
                                                                                                                value="7">
                                                                                                            <label for="personal-exportedtable"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Can Export to any File Type, Search, Previous/Next">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/exportedtable.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Exported Table
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="personal-basictable" 
                                                                                                                class="filled-in personal-basictable"
                                                                                                                value="8">
                                                                                                            <label for="personal-basictable"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic without any addition modification classes">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/basictable.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Basic Table
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 patient-mh3 hidden">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature MEDICAL HISTORY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patient Medical History ?</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="mh-basictable" 
                                                                                                                class="filled-in mh-basictable"
                                                                                                                value="9">
                                                                                                            <label for="mh-basictable"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic without any addition modification classes">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/basictable.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Basic Table
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="mh-exportedtable" 
                                                                                                                class="filled-in mh-exportedtable"
                                                                                                                value="10">
                                                                                                            <label for="mh-exportedtable"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Applied simple animation during clicking the text fields with floating labels">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/exportedtable.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 55px;">Exported Table
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">You can also have other features for your Patients Diagnosis</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="mh-image" 
                                                                                                                class="filled-in mh-image"
                                                                                                                value="11">
                                                                                                            <label for="mh-image"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="This function allows the user to upload image or take picture for Patients Diagnosis">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/image.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Image
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="mh-imagecollage" 
                                                                                                                class="filled-in mh-imagecollage"
                                                                                                                value="12">
                                                                                                            <label for="mh-imagecollage"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="This function allows the user to create collage from an uploaded image or take pictures">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/imagecollage.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 55px;">Image Collage
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="mh-imagecustomize" 
                                                                                                                class="filled-in mh-imagecustomize"
                                                                                                                value="13">
                                                                                                            <label for="mh-imagecustomize"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="This function allows the user to write or draw create collage from an uploaded image or take pictures">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/imagecustomize.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 43px;">Customize Image
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 patient-sched3 hidden">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature SCHEDULES</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patients Medical Schedules ?</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="sched-basictable" 
                                                                                                            class="filled-in sched-basictable"
                                                                                                            value="14">
                                                                                                        <label for="sched-basictable"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="Basic without any addtional modification classes">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="image/basictable.fw.png" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0;">
                                                                                                        <small class="img-font1" 
                                                                                                                style="padding-left: 60px;">Basic Table
                                                                                                        </small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="sched-calendar" 
                                                                                                            class="filled-in sched-calendar"
                                                                                                            value="15">
                                                                                                        <label for="sched-calendar"
                                                                                                                data-toggle="tooltip"
                                                                                                                data-placement="top"
                                                                                                                title="Information will be displayed on calendar form ">
                                                                                                            <img class="img-responsive img-shadow" 
                                                                                                                src="image/stripedtable.fw.png" 
                                                                                                                width="150" 
                                                                                                                heigth="150">
                                                                                                        </label>
                                                                                                </p>
                                                                                                    <p align="center" style="padding: 0;">
                                                                                                        <small class="img-font1" 
                                                                                                                style="padding-left: 60px;">Calender
                                                                                                        </small>
                                                                                                    </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 patient-bill3 ">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 feature BILLS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patient Bill ?</p>
                                                                                            </div>
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="bill-basictable" 
                                                                                                                class="filled-in bill-basictable"
                                                                                                                value="16">
                                                                                                            <label for="bill-basictable"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic without any additional modification classes">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/basictable.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 60px;">Basic Table
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="bill-tablewithtext" 
                                                                                                                class="filled-in bill-tablewithtext"
                                                                                                                value="17">
                                                                                                            <label for="bill-tablewithtext"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic table will be activated with textboxes for double clicking specific data">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/tablewithtext.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 27px;">Basic Table w/ Text Box
                                                                                                            </small>
                                                                                                        </p>
                                                                                                </div>
                                                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                                                                                    <p align="center" style="height: 95px;">
                                                                                                        <input type="checkbox" 
                                                                                                                id="mh-imagecustomize" 
                                                                                                                class="filled-in mh-imagecustomize"
                                                                                                                value="18">
                                                                                                            <label for="mh-imagecustomize"
                                                                                                                    data-toggle="tooltip"
                                                                                                                    data-placement="top"
                                                                                                                    title="Basic table will be activated with modal view for textboxes after double clicking a specific data">
                                                                                                                <img class="img-responsive img-shadow" 
                                                                                                                    src="image/imagecustomize.fw.png" 
                                                                                                                    width="150" 
                                                                                                                    heigth="150">
                                                                                                            </label>
                                                                                                    </p>
                                                                                                        <p align="center" style="padding: 0;">
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 35px">Basic Table w/ Modal
                                                                                                            <small class="img-font1" 
                                                                                                                    style="padding-left: 70px">Text Box
                                                                                                            </small></small>
                                                                                                        </p>
                                                                                                </div>
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
                                                </div>
                                            </div>
                                        </div> -->
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

@section('myScripts')
    <!-- <script>
        $(function(){

            $('#profile').click(function() {
                $('.profile1').removeClass('hidden');
                $('.queue1').addClass('hidden');
            });

            $('#queuing').click(function() {
                $('.profile1').addClass('hidden');
                $('.queue1').removeClass('hidden');
            });
        })
    </script> -->
@endsection