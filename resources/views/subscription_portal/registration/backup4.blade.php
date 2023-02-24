@extends('subscription_portal.layouts.style')

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

                                   <!--  <h3>Clinic Information</h3>
                                    <fieldset>
                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                            <div class="row clearfix">
                                                <div class="col-xs-6 col-sm-12 col-md-12 col-lg-6">
                                                    <select class="form-control show-tick spec" style="text-transform: uppercase;" name="specialization">
                                                        <option>SELECT SPECIALIZATION</option>
                                                        <option value="Urology">Urology</option>
                                                        <option value="Orthopedics">Orthopedics</option>
                                                        <option value="Dentistry">Dentistry</option>
                                                        <option value="Opthalmology">Opthalmology</option>
                                                        <option value="OBGYN">OB/GYN</option>
                                                    </select>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $('select[name="specialization"]').on('change', function(){
                                                                var spec_id = $(this).val();

                                                                if(spec_id) {
                                                                    $.ajax({
                                                                        url: '/select_ranking/'+spec_id,
                                                                        type: "GET",
                                                                        dataType: "json",
                                                                        beforeSend: function(){
                                                                            $('#loader').css("visibility", "visible");
                                                                        },

                                                                        success:function(data) {
                                                                            console.log(data)
                                                                            var tr = "";
                                                                            $.each(data, function(key, value){
                                                                                tr += '<tr>\
                                                                                        <td>'+ value.module_name +'</td>\
                                                                                        <td>'+ value.Used +'</td>\
                                                                                       </tr>';

                                                                            });
                                                                            $("#table tbody").html(tr);
                                                                        },
                                                                        complete: function(){
                                                                            $('#loader').css("visibility", "hidden");
                                                                        }
                                                                    });
                                                                } else {
                                                                }
                                                            });

                                                        });
                                                    </script>
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

                        

                                    <h3>Please select the features you want on your hub</h3>
                                    <fieldset>
                                        
                                        <select name="duration" id="duration" onchange="month(this)">
                                            <option>-- Select Duration --</option>
                                            <option value="1"> 1 Month </option>
                                            <option value="2"> 2 Months </option>
                                            <option value="3"> 3 Months </option>
                                            <option value="4"> 4 Months </option>
                                            <option value="5"> 5 Months </option>
                                            <option value="6"> 6 Months </option>
                                            <option value="7"> 7 Months </option>
                                            <option value="8"> 8 Months </option>
                                            <option value="9"> 9 Months </option>
                                            <option value="10"> 10 Months </option>
                                            <option value="11"> 11 Months </option>
                                            <option value="12"> 12 Months </option>
                                        </select><br><br>
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select Main Module for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">

                                                                    @foreach($get_main_module as $data)
                                                                        
                                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                <input type="checkbox"
                                                                                        id="main{{ $data->modlist_id }}"
                                                                                        class="filled-in checkin checkbox main_module"
                                                                                        name="main_module[]"
                                                                                        data-name="{{ $data->module_name }}"
                                                                                        data-amount="{{ $data->amount }}"
                                                                                        value="{{ $data->modlist_id }}"
                                                                                        onclick='callM({{ $data->modlist_id }});'>
                                                                                <label for="main{{ $data->modlist_id }}">
                                                                                    <p class="checkFont"
                                                                                        data-toggle="tooltip"
                                                                                        data-placement="top"
                                                                                        title="{{ $data->description }}">{{ $data->module_name }}</p>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                        <script>
                                                                            function month(a) {
                                                                                var x = (a.value || a.options[a.selectedIndex].value);
                                                                                var md = [];
                                                                                var am = [];
                                                                                var am1 = [];
                                                                                var total = 0;

                                                                                
                                                                                $('input[name="main_module[]"]').change(function() {
                                                                                    $("input[name='main_module[]']:checked").each(function() {
                                                                                        md.push($(this).data('name')+'<br>');
                                                                                        am.push($(this).data('amount')+'<br>');
                                                                                        am1.push($(this).data('amount'));
                                                                                    });
                                                                                    $('#main').html(md);
                                                                                    $('#amount').html(am);
                                                                                    for(var i in am1) {
                                                                                        total += am1[i];
                                                                                    }
                                                                                    
                                                                                    if(total){
                                                                                        var result = total * x;
                                                                                        $('#total').html(total);
                                                                                        document.getElementById('total_payable').value = result;
                                                                                    }

                                                                                    md = [];
                                                                                    am = [];
                                                                                    am1 = [];
                                                                                    total = 0;
                                                                                });
                                                                            }
                                                                        </script>
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
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select level 1 Module for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="row clearfix">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" hidden id="lvl1Profile">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Main Module PROFILE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub1_patient as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="subP{{ $data->sub1_id }}"
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSP({{ $data->sub1_id }});">
                                                                                                    <label for="subP{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Queuing">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Main Module QUEUEING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_clinic as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="subQ{{ $data->sub1_id }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSQ({{ $data->sub1_id }});">
                                                                                                    <label for="subQ{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Schedule">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Main Module SCHEDULE</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_schedule as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="subS{{ $data->sub1_id }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSS({{ $data->sub1_id }});">
                                                                                                    <label for="subS{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Booking">
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
                                                                                                            id="subB{{ $data->sub1_id }}"
                                                                                                            class="filled-in"
                                                                                                            name="lvl1[]"
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSB({{ $data->sub1_id }});">
                                                                                                    <label for="subB{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Billing">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Main Module BILLING</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_billing as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox" 
                                                                                                            id="subBL{{ $data->sub1_id }}" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSBL({{ $data->sub1_id }});">
                                                                                                    <label for="subBL{{ $data->sub1_id }}">
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
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" hidden id="lvl1Inventory">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Main Module INVENTORY</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_inventory as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="subI{{ $data->sub1_id }}" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSI({{ $data->sub1_id }});">
                                                                                                    <label for="subI{{ $data->sub1_id }}">
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
                                                                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Messaging">
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
                                                                            </div> -->
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1MngReport">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 14px">Sub Module for Main Module MANAGE REPORT</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_mngreport as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="subMR{{ $data->sub1_id }}" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSMR({{ $data->sub1_id }});">
                                                                                                    <label for="subMR{{ $data->sub1_id }}">
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
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Settings">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 14px">Sub Module for Main Module SETTINGS</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            @foreach($get_sub_settings as $data)
                                                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                                    <input type="checkbox"
                                                                                                            id="subST{{ $data->sub1_id }}" 
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->modlist_id }}|{{ $data->sub1_id }}"
                                                                                                            onclick="callSST({{ $data->sub1_id }});">
                                                                                                    <label for="subST{{ $data->sub1_id }}">
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
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select Level 2 sub Module for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Patient">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module PATIENT</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_patient as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1P{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callS1P({{ $data->sub2_id }});">
                                                                                            <label for="sub1P{{ $data->sub2_id }}">
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
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Clinic">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module CLINIC</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_clinic as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1C{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callS1C({{ $data->sub2_id }});">
                                                                                            <label for="sub1C{{ $data->sub2_id }}">
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
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Doctor">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module DOCTORS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_doctor as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1D{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]"
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callS1D({{ $data->sub2_id }});">
                                                                                            <label for="sub1D{{ $data->sub2_id }}">
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
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden  id="lvl2Medicine">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module MEDICINE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_medicine as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1M{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callS1M({{ $data->sub2_id }});">
                                                                                            <label for="sub1M{{ $data->sub2_id }}">
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
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden  id="lvl2Priority">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module PRIORITY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_priority as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1Pri{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callS1PR({{ $data->sub2_id }});">
                                                                                            <label for="sub1Pri{{ $data->sub2_id }}">
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
                                                                    <dModuleiv class="col-lg-6-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Inventory">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module INVENTORY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_inventory as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox"
                                                                                                id="sub1Inv{{ $data->sub2_id }}" 
                                                                                                class="filled-in" 
                                                                                                name="lvl2[]" 
                                                                                                value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                onclick="callS1INV({{ $data->sub2_id }});">
                                                                                            <label for="sub1Inv{{ $data->sub2_id }}">
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
                                                                    <dModuleiv class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  hidden id="lvl2Mode">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module MODE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_mode as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1Mode{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callSMode({{ $data->sub2_id }});">
                                                                                            <label for="sub1Mode{{ $data->sub2_id }}">
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
                                                                    <diModulev class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden  id="lvl2Financial">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module FINANCIAL</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_financial as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="subF{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callSF({{ $data->sub2_id }});">
                                                                                            <label for="subF{{ $data->sub2_id }}">
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
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden  id="lvl2MRPatient">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module PATIENTS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_patients as $data)
                                                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 checkStyle">
                                                                                            <input type="checkbox" 
                                                                                                    id="sub1MngP{{ $data->sub2_id }}" 
                                                                                                    class="filled-in" 
                                                                                                    name="lvl2[]" 
                                                                                                    value="{{ $data->sub1_id }}|{{ $data->sub2_id }}"
                                                                                                    onclick="callSPAT({{ $data->sub2_id }});">
                                                                                            <label for="sub1MngP{{ $data->sub2_id }}">
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
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 18px">Select lvl 3 features for your hub</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden id="lvl2PPatientList">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Level 2 Module PATIENT LIST</h2>
                                                                                    </div>
                                                                                    <div class="body">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                                <p class="img-font2">How would you like to View your Patient List ?</p>
                                                                                            </div>
                                                                                            @foreach($get_sub3_patlist as $data)
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->sub3_id }}" 
                                                                                                            class="filled-in patlist"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}"
                                                                                                            onclick="callSSPL({{ $data->sub3_id }});">
                                                                                                        <label for="{{ $data->sub3_id }}"
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
                                                                                                        <small class="img-font1" style="padding-left: 20px">{{ $data->title }}</small>
                                                                                                    </p>
                                                                                            </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2PPersonalProfile">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 Module PERSONAL PROFILE</h2>
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
                                                                                                            class="filled-in personal-img"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}"
                                                                                                            onclick="callSSPP({{ $data->sub3_id }});">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2PMedHistory">
                                                                        <div class="row clearfix">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                <div class="card">
                                                                                    <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Level 2 feature MEDICAL HISTORY</h2>
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"  hidden id="lvl2PSchedule">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2PBill">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2CInformation">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"  hidden id="lvl2CImages">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"  hidden id="lvl2CSchedule">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2DInformation">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2MInformation">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"  hidden id="lvl2QFirst">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden  id="lvl2QSecond">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2QPersonalProfile">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden  id="lvl2QSched">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2QMedical">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden id="lvl2QBill">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"   id="">
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
                                                                    </div> -->
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" hidden  id="lvl2SProfile">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"  hidden id="lvl2SClinic">
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
                                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                                                                                <p align="center" style="height: 95px;">
                                                                                                    <input type="checkbox" 
                                                                                                            id="{{ $data->title_desc }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2Booking">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2Billing">
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
                                                                                                            id="{{ $data->sub3_id }}" 
                                                                                                            class="filled-in"
                                                                                                            name="lvl3" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
                                                                                                        <label for="{{ $data->sub3_id }}"
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2Stockin">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2Stockout">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2Return">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2Solditem">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6"   id="">
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
                                                                    </div> -->
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden  id="lvl2Fstate">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2Ffree">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden  id="lvl2Fcom">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden  id="lvl2InvStockin">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2InvStockout">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2InvSolditem">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2InvReturnitem">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2InvSummary">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2PSummary">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2Pcon">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" hidden  id="lvl2PSched">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2Smyaccount">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10" hidden  id="lvl2Ssecaccount">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10"  hidden id="lvl2Smhform">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub2_id }}|{{ $data->sub3_id }}">
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
                                            <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
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
                                            </div> -->
                                        </div>
                                    </fieldset>
                                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #00D9A3">
                                                    <h4 style="color: #fff">PREVIEW OF THE FEATURES YOU SELECT</h4>
                                                </div>
                                                <div class="modal-body">
                                                <p id="payment">Total Payment: <b id="fee"></b></p>
                                                    <div class="row">
                                                        
                                                        <div class="col-sm-3">
                                                            <h3>Level 1</h3>
                                                            <b id="lvl_1"></b>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <h3>Level 2</h3>
                                                            <b id="lvl_2"></b>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <h3>Level 3</h3>
                                                            <b id="lvl_3"></b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                                                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="legal">
                                        <small class="color color-font" style="font-size: 14px">Powerder by Engtech Global Solution Inc.</small>
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
    <script>
        
        $(document).ready(function() {
        });

        function callM(e) {
            if(e == '1') {
                if($('#main1').prop('checked')) {
                    $('#lvl1Profile').show();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Profile').hide();
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $("#subP1").prop("checked", false);
                    $("#subP2").prop("checked", false);
                    $("#subP3").prop("checked", false);
                    $("#subP4").prop("checked", false);
                    $("#sub1P1").prop("checked", false);
                    $("#sub1P2").prop("checked", false);
                    $("#sub1P3").prop("checked", false);
                    $("#sub1P4").prop("checked", false);
                    $("#sub1P5").prop("checked", false);
                    $("#sub1C6").prop("checked", false);
                    $("#sub1C7").prop("checked", false);
                    $("#sub1C8").prop("checked", false);
                    $("#sub1D9").prop("checked", false);
                    $("#sub1M10").prop("checked", false);
                    $(".patlist").prop("checked", false);
                    $(".personal-img").prop("checked", false);
                    $(".personal-img1").prop("checked", false);
                    $(".personal-img2").prop("checked", false);
                    $(".mh-img1").prop("checked", false);
                    $(".mh-img").prop("checked", false);
                    $(".sched").prop("checked", false);
                    $(".bill").prop("checked", false);
                    $(".info").prop("checked", false);
                    $(".cinfo").prop("checked", false);
                    $(".csched").prop("checked", false);
                    $(".doctor-info-img").prop("checked", false);
                    $(".doctor-info-img1").prop("checked", false);
                    $(".medicine-info-img").prop("checked", false);
                    $(".medicine-info-img1").prop("checked", false);
                }
            }
            if(e == '2') {
                if($('#main2').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').show();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Queuing').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $("#sub1Pri11").prop("checked", false);
                    $("#sub1Pri12").prop("checked", false);
                    $("#sub1Pri13").prop("checked", false);
                    $("#sub1Pri14").prop("checked", false);
                    $("#sub1Pri15").prop("checked", false);
                    $("#sub1Pri16").prop("checked", false);
                    $(".first").prop("checked", false);
                    $(".second").prop("checked", false);
                    $(".qpp").prop("checked", false);
                    $(".qsched").prop("checked", false);
                    $(".qbill").prop("checked", false);
                    $(".qmed").prop("checked", false);
                    $("#subQ5").prop("checked", false);
                }
            }
            if(e == '3') {
                if($('#main3').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').show();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Schedule').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $("#sub1Mode17").prop("checked", false);
                    $("#sub1Mode18").prop("checked", false);
                    $(".schedp").prop("checked", false);
                    $(".schedc").prop("checked", false);
                    $("#subS6").prop("checked", false);
                }
            }
            if(e == '4') {
                if($('#main4').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').show();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Booking').hide();
                    $('#lvl2Booking').hide();
                    $('.book-img').prop('checked', false);
                    $('.book-img1').prop('checked', false);
                    $("#subB7").prop("checked", false);
                }
            }
            if(e == '5') {
                if($('#main5').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').show();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Billing').hide();
                    $('#lvl2Billing').hide();
                    $('.billf').prop('checked', false);
                    $("#subBL8").prop("checked", false);
                }
            }
            if(e == '6') {
                if($('#main6').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').show();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Inventory').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Return').hide();
                    $('.inv-stockout-img').prop('checked', false);
                    $('.inv-stockout-img1').prop('checked', false);
                    $('.inv-solditem-img').prop('checked', false);
                    $('.inv-return-img').prop('checked', false);
                    $('.inv-return-img1').prop('checked', false);
                    $('.inv-stockin-img').prop('checked', false);
                    $('.inv-stockin-img1').prop('checked', false);
                    $("#subI9").prop("checked", false);
                    $("#subI10").prop("checked", false);
                    $("#subI11").prop("checked", false);
                    $("#subI12").prop("checked", false);
                }
            }
            if(e == '7') {
                if($('#main7').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').show();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1Messaging').hide();
                    $('#lvl2Messaging').hide();
                    $('.msg').prop('checked', false);
                    $("#subM13").prop("checked", false);
                }
            }
            if(e == '8') {
                if($('#main8').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').show();
                    $('#lvl1Settings').hide();
                } else {
                    $('#lvl1MngReport').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Inventory').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2MRPatient').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('.mngstockin').prop('checked', false);
                    $('.mngstockout').prop('checked', false);
                    $('.mngsolditem').prop('checked', false);
                    $('.mngreturnitem').prop('checked', false);
                    $('.mngsummary').prop('checked', false);
                    $('.mh-pat-exportedtable').prop('checked', false);
                    $('.mh-con-exportedtable').prop('checked', false);
                    $('.mh-sched-exportedtable').prop('checked', false);
                    $('#sub1MngP35').prop('checked', false);
                    $('#sub1MngP36').prop('checked', false);
                    $('#sub1MngP37').prop('checked', false);
                    $('.fcom').prop('checked', false);
                    $('.ffree').prop('checked', false);
                    $('#sub1Inv30').prop('checked', false);
                    $('#sub1Inv31').prop('checked', false);
                    $('#sub1Inv32').prop('checked', false);
                    $('#sub1Inv33').prop('checked', false);
                    $('#sub1Inv34').prop('checked', false);
                    $('.fstate').prop('checked', false);
                    $("#subMR14").prop("checked", false);
                    $("#subMR15").prop("checked", false);
                    $("#subMR16").prop("checked", false);
                    $('#subF27').prop('checked', false);
                    $('#subF28').prop('checked', false);
                    $('#subF29').prop('checked', false);
                }
            }
            if(e == '9') {
                if($('#main9').prop('checked')) {
                    $('#lvl1Profile').hide();
                    $('#lvl1Queuing').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl1Booking').hide();
                    $('#lvl1Billing').hide();
                    $('#lvl1Inventory').hide();
                    $('#lvl1Messaging').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').show();
                } else {
                    $('#lvl1Settings').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                    $('.setting-my-img1').prop('checked', false);
                    $('.setting-my-img').prop('checked', false);
                    $('.setting-sec-img1').prop('checked', false);
                    $('.setting-sec-img').prop('checked', false);
                    $('.setting-mh-img1').prop('checked', false);
                    $('.setting-mh-img').prop('checked', false);
                    $("#subST17").prop("checked", false);
                    $("#subST18").prop("checked", false);
                    $("#subST19").prop("checked", false);
                }
            }
        }
        function callSP(e) {
            if(e == '1') {
                if($('#subP1').prop('checked')) {
                    $('#lvl2Patient').show();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('lvl2MRPatient').hide();
                } else {
                    $('#lvl2Patient').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $("#sub1P1").prop("checked", false);
                    $("#sub1P2").prop("checked", false);
                    $("#sub1P3").prop("checked", false);
                    $("#sub1P4").prop("checked", false);
                    $("#sub1P5").prop("checked", false);
                    $(".patlist").prop("checked", false);
                    $(".personal-img").prop("checked", false);
                    $(".personal-img1").prop("checked", false);
                    $(".personal-img2").prop("checked", false);
                    $(".mh-img1").prop("checked", false);
                    $(".mh-img").prop("checked", false);
                    $(".sched").prop("checked", false);
                    $(".bill").prop("checked", false);
                }
            }
            if(e == '2') {
                if($('#subP2').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').show();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('lvl2MRPatient').hide();
                } else {
                    $('#lvl2Clinic').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $("#sub1C6").prop("checked", false);
                    $("#sub1C7").prop("checked", false);
                    $("#sub1C8").prop("checked", false);
                    $(".info").prop("checked", false);
                    $(".cinfo").prop("checked", false);
                    $(".csched").prop("checked", false);
                }
            }
            if(e == '3') {
                if($('#subP3').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').show();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('lvl2MRPatient').hide();
                } else {
                    $('#lvl2Doctor').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $("#sub1D9").prop("checked", false);
                    $(".doctor-info-img").prop("checked", false);
                    $(".doctor-info-img1").prop("checked", false);
                }
            }
            if(e == '4') {
                if($('#subP4').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').show();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('lvl2MRPatient').hide();
                } else {
                    $('#lvl2Medicine').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $("#sub1M10").prop("checked", false);
                    $(".medicine-info-img").prop("checked", false);
                    $(".medicine-info-img1").prop("checked", false);
                }
            }
        }
        function callSQ(e) {
            if(e == '5') {
                if($('#subQ5').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').show();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('lvl2MRPatient').hide();
                } else {
                    $('#lvl2Priority').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $("#sub1Pri11").prop("checked", false);
                    $("#sub1Pri12").prop("checked", false);
                    $("#sub1Pri13").prop("checked", false);
                    $("#sub1Pri14").prop("checked", false);
                    $("#sub1Pri15").prop("checked", false);
                    $("#sub1Pri16").prop("checked", false);
                    $(".first").prop("checked", false);
                    $(".second").prop("checked", false);
                    $(".qpp").prop("checked", false);
                    $(".qsched").prop("checked", false);
                    $(".qbill").prop("checked", false);
                    $(".qmed").prop("checked", false);
                }
            }
        }
        function callSS(e) {
            if(e == '6') {
                if($('#subS6').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').show();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('lvl2MRPatient').hide();
                } else {
                    $('#lvl2Mode').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $("#sub1Mode17").prop("checked", false);
                    $("#sub1Mode18").prop("checked", false);
                    $(".schedp").prop("checked", false);
                    $(".schedc").prop("checked", false);
                }
            }
        }
        function callSB(e) {
            if(e == '7') {
                if($('#subB7').prop('checked')) {
                    $('#lvl2Booking').show();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Booking').hide();
                    $('.book-img').prop('checked', false);
                    $('.book-img1').prop('checked', false);
                }
            }
        }
        function callSBL(e) {
            if(e == '8') {
                if($('#subBL8').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').show();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Billing').hide();
                    $('.billf').prop('checked', false);
                }
            }
        }
        function callSI(e) {
            if(e == '9') {
                if($('#subI9').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').show();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Stockin').hide();
                    $('.inv-stockin-img').prop('checked', false);
                    $('.inv-stockin-img1').prop('checked', false);
                }
            }
            if(e == '10') {
                if($('#subI10').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').show();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Stockout').hide();
                    $('.inv-stockout-img').prop('checked', false);
                    $('.inv-stockout-img1').prop('checked', false);
                }
            }
            if(e == '11') {
                if($('#subI11').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').show();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Solditem').hide();
                    $('.inv-solditem-img').prop('checked', false);
                }
            }
            if(e == '12') {
                if($('#subI12').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').show();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Return').hide();
                    $('.inv-return-img').prop('checked', false);
                    $('.inv-return-img1').prop('checked', false);
                }
            }
        }
        function callSM(e) {
            if(e == '13') {
                if($('#subM13').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').show();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Messaging').hide();
                    $('.msg').prop('checked', false);
                }
            }
        }
        function callSMR(e) {
            if(e == '14') {
                if($('#subMR14').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').show();
                    $('#lvl2Inventory').hide();
                    $('#lvl2MRPatient').hide();
                } else {
                    $('#lvl2Financial').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('.fcom').prop('checked', false);
                    $('.ffree').prop('checked', false);
                    $('.fstate').prop('checked', false);
                    $('#subF27').prop('checked', false);
                    $('#subF28').prop('checked', false);
                    $('#subF29').prop('checked', false);
                }
            }
            if(e == '15') {
                if($('#subMR15').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').show();
                    $('#lvl2MRPatient').hide();
                } else {
                    $('#lvl2Inventory').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('.mngstockin').prop('checked', false);
                    $('.mngstockout').prop('checked', false);
                    $('.mngsolditem').prop('checked', false);
                    $('.mngreturnitem').prop('checked', false);
                    $('.mngsummary').prop('checked', false);
                    $('#sub1Inv30').prop('checked', false);
                    $('#sub1Inv31').prop('checked', false);
                    $('#sub1Inv32').prop('checked', false);
                    $('#sub1Inv33').prop('checked', false);
                    $('#sub1Inv34').prop('checked', false);
                }
            }
            if(e == '16') {
                if($('#subMR16').prop('checked')) {
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Financial').hide();
                    $('#lvl2Inventory').hide();
                    $('#lvl2MRPatient').show();
                } else {
                    $('#lvl2MRPatient').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('.mh-pat-exportedtable').prop('checked', false);
                    $('.mh-con-exportedtable').prop('checked', false);
                    $('.mh-sched-exportedtable').prop('checked', false);
                    $('#sub1MngP35').prop('checked', false);
                    $('#sub1MngP36').prop('checked', false);
                    $('#sub1MngP37').prop('checked', false);
                }
            }
        }
        function callSST(e) {
            if(e == '17') {
                if($('#subST17').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').show();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Smyaccount').hide();
                    $('.setting-my-img1').prop('checked', false);
                    $('.setting-my-img').prop('checked', false);
                }
            }
            if(e == '18') {
                if($('#subST18').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').show();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Ssecaccount').hide();
                    $('.setting-sec-img1').prop('checked', false);
                    $('.setting-sec-img').prop('checked', false);
                }
            }
            if(e == '19') {
                if($('#subST19').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').show();
                } else {
                    $('#lvl2Smhform').hide();
                    $('.setting-mh-img1').prop('checked', false);
                    $('.setting-mh-img').prop('checked', false);
                }
            }
        }
        function callS1P(e) {
            if(e == '1') {
                if($('#sub1P1').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').show();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PPatientList').hide();
                    $(".patlist").prop("checked", false);
                }
            }
            if(e == '2') {
                if($('#sub1P2').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').show();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PPersonalProfile').hide();
                    $(".personal-img").prop("checked", false);
                    $(".personal-img1").prop("checked", false);
                    $(".personal-img2").prop("checked", false);
                }
            }
            if(e == '3') {
                if($('#sub1P3').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').show();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PMedHistory').hide();
                    $(".mh-img1").prop("checked", false);
                    $(".mh-img").prop("checked", false);
                }
            }
            if(e == '4') {
                if($('#sub1P4').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').show();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PSchedule').hide();
                    $(".sched").prop("checked", false);
                }
            }
            if(e == '5') {
                if($('#sub1P5').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').show();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PBill').hide();
                    $(".bill").prop("checked", false);
                }
            }
        }
        function callS1C(e) {
            if(e == '6') {
                if($('#sub1C6').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').show();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2CInformation').hide();
                    $(".info").prop("checked", false);
                }
            }
            if(e == '7') {
                if($('#sub1C7').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').show();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2CImages').hide();
                    $(".cinfo").prop("checked", false);
                }
            }
            if(e == '8') {
                if($('#sub1C8').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').show();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2CSchedule').hide();
                    $(".csched").prop("checked", false);
                }
            }
        }
        function callS1D(e) {
            if(e == '9') {
                if($('#sub1D9').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').show();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2DInformation').hide();
                    $(".doctor-info-img").prop("checked", false);
                    $(".doctor-info-img1").prop("checked", false);
                }
            }
        }
        function callS1M(e) {
            if(e == '10') {
                if($('#sub1M10').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').show();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2MInformation').hide();
                    $(".medicine-info-img").prop("checked", false);
                    $(".medicine-info-img1").prop("checked", false);
                }
            }
        }
        function callS1PR(e) {
            if(e == '11') {
                if($('#sub1Pri11').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').show();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2QFirst').hide();
                }
            }
            if(e == '12') {
                if($('#sub1Pri12').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').show();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2QSecond').hide();
                }
            }
            if(e == '13') {
                if($('#sub1Pri13').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').show();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2QPersonalProfile').hide();
                }
            }
            if(e == '14') {
                if($('#sub1Pri14').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').show();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2QSched').hide();
                }
            }
            if(e == '15') {
                if($('#sub1Pri15').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').show();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2QBill').hide();
                }
            }
            if(e == '16') {
                if($('#sub1Pri16').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').show();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2QMedical').hide();
                }
            }
        }
        function callSMode(e) {
            if(e == '17') {
                if($('#sub1Mode17').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').show();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2SProfile').hide();
                    $(".schedp").prop("checked", false);
                }
            }
            if(e == '18') {
                if($('#sub1Mode18').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').show();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2SClinic').hide();
                    $(".schedc").prop("checked", false);
                }
            }
        }
        function callSF(e) {
            if(e == '27') {
                if($('#subF27').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').show();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Fstate').hide();
                    $('.fstate').prop('checked', false);
                }
            }
            if(e == '28') {
                if($('#subF28').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').show();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Ffree').hide();
                    $('.ffree').prop('checked', false);
                }
            }
            if(e == '29') {
                if($('#subF29').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').show();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Fcom').hide();
                    $('.fcom').prop('checked', false);
                }
            }
        }
        function callS1INV(e) {
            if(e == '30') {
                if($('#sub1Inv30').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').show();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2InvStockin').hide();
                    $('.mngstockin').prop('checked', false);
                }
            }
            if(e == '31') {
                if($('#sub1Inv31').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').show();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2InvStockout').hide();
                    $('.mngstockout').prop('checked', false);
                }
            }
            if(e == '32') {
                if($('#sub1Inv32').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvSolditem').show();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2InvSolditem').hide();
                    $('.mngsolditem').prop('checked', false);
                }
            }
            if(e == '33') {
                if($('#sub1Inv33').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvReturnitem').show();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2InvReturnitem').hide();
                    $('.mngreturnitem').prop('checked', false);
                }
            }
            if(e == '34') {
                if($('#sub1Inv34').prop('checked')){
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').show();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2InvSummary').hide();
                    $('.mngsummary').prop('checked', false);
                }
            }
        }
        function callSPAT(e) {
            if(e == '35') {
                if($('#sub1MngP35').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').show();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PSummary').hide();
                    $('.mh-pat-exportedtable').prop('checked', false);
                }
            }
            if(e == '36') {
                if($('#sub1MngP36').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').show();
                    $('#lvl2PSched').hide();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2Pcon').hide();
                    $('.mh-con-exportedtable').prop('checked', false);
                }
            }
            if(e == '37') {
                if($('#sub1MngP37').prop('checked')) {
                    $('#lvl2Booking').hide();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                    $('#lvl2CInformation').hide();
                    $('#lvl2CImages').hide();
                    $('#lvl2CSchedule').hide();
                    $('#lvl2DInformation').hide();
                    $('#lvl2MInformation').hide();
                    $('#lvl2QFirst').hide();
                    $('#lvl2QSecond').hide();
                    $('#lvl2QPersonalProfile').hide();
                    $('#lvl2QSched').hide();
                    $('#lvl2QMedical').hide();
                    $('#lvl2QBill').hide();
                    $('#lvl2SProfile').hide();
                    $('#lvl2SClinic').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl2Stockout').hide();
                    $('#lvl2Return').hide();
                    $('#lvl2Solditem').hide();
                    $('#lvl2Messaging').hide();
                    $('#lvl2Fstate').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2InvStockout').hide();
                    $('#lvl2InvReturnitem').hide();
                    $('#lvl2InvSolditem').hide();
                    $('#lvl2InvSummary').hide();
                    $('#lvl2PSummary').hide();
                    $('#lvl2Pcon').hide();
                    $('#lvl2PSched').show();
                    $('#lvl2Smyaccount').hide();
                    $('#lvl2Ssecaccount').hide();
                    $('#lvl2Smhform').hide();
                } else {
                    $('#lvl2PSched').hide();
                    $('.mh-sched-exportedtable').prop('checked', false);
                }
            }
        }
        function callSSPL(e) {

            $('input.patlist').on('change', function() {
                $('input.patlist').not(this).prop('checked', false);
            });
        }
        function callSSPP(e) {

            $('input.personal-img').on('change', function() {
                $('input.personal-img').not(this).prop('checked', false);
            });
            $('input.personal-img2').on('change', function() {
                $('input.personal-img2').not(this).prop('checked', false);
            });
        }
        function callMH(e) {

            $('input.mh-img').on('change', function() {
                $('input.mh-img').not(this).prop('checked', false);
            });
            $('input.mh-img1').on('change', function() {
                $('input.mh-img1').not(this).prop('checked', false);
            });
        }
        function callSCHED(e) {

            $('input.sched').on('change', function() {
                $('input.sched').not(this).prop('checked', false);
            });
        }
        function callB(e) {

            $('input.bill').on('change', function() {
                $('input.bill').not(this).prop('checked', false)
            });
        }
        function callINFO(e) {

            $('input.info').on('change', function() {
                $('input.info').not(this).prop('checked', false)
            });
        }
        function callIMG(e) {

            $('input.cinfo').on('change', function() {
                $('input.cinfo').not(this).prop('checked', false)
            });
        }
        function callCSCHED(e) {

            $('input.csched').on('change', function() {
                $('input.csched').not(this).prop('checked', false)
            });
        }
        function callDINFO(e) {

            $('input.doctor-info-img').on('change', function() {
                $('input.doctor-info-img').not(this).prop('checked', false)
            });
        }
        function callMINFO(e) {

            $('input.medicine-info-img').on('change', function() {
                $('input.medicine-info-img').not(this).prop('checked', false)
            });
        }
        function call1st(e) {

            $('input.first').on('change', function() {
                $('input.first').not(this).prop('checked', false)
            });
        }
        function call2nd(e) {

            $('input.second').on('change', function() {
                $('input.second').not(this).prop('checked', false)
            });
        }
        function callQPP(e) {

            $('input.qpp').on('change', function() {
                $('input.qpp').not(this).prop('checked', false)
            });
        }
        function callQMED(e) {

            $('input.qmed').on('change', function() {
                $('input.qmed').not(this).prop('checked', false)
            });
        }
        function callQBILL(e) {

            $('input.qbill').on('change', function() {
                $('input.qbill').not(this).prop('checked', false)
            });
        }
        function callSCHEDP(e) {

            $('input.schedp').on('change', function() {
                $('input.schedp').not(this).prop('checked', false)
            });
        }
        function callSCHEDC(e) {

            $('input.schedc').on('change', function() {
                $('input.schedc').not(this).prop('checked', false)
            });
        }
        function callBOOK(e) {

            $('input.book-img1').on('change', function() {
                $('input.book-img1').not(this).prop('checked', false)
            });
            $('input.book-img').on('change', function() {
                $('input.book-img').not(this).prop('checked', false)
            });
        }
        function callBILLF(e) {

            $('input.billf').on('change', function() {
                $('input.billf').not(this).prop('checked', false)
            });
        }
        function callINVI(e) {

            $('input.inv-stockin-img1').on('change', function() {
                $('input.inv-stockin-img1').not(this).prop('checked', false)
            });
            $('input.inv-stockin-img').on('change', function() {
                $('input.inv-stockin-img').not(this).prop('checked', false)
            });
        }
        function callINVO(e) {

            $('input.inv-stockout-img1').on('change', function() {
                $('input.inv-stockout-img1').not(this).prop('checked', false)
            });
            $('input.inv-stockout-img').on('change', function() {
                $('input.inv-stockout-img').not(this).prop('checked', false)
            });
        }

    </script>
@endsection