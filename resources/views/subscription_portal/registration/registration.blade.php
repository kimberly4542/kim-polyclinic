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
                                <form action="/registrationUserwithAJAX" id="wizard_with_validation" method="POST">
                                    {{ csrf_field() }}
                                    <h3>Basic Information</h3>
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
                                                    <select class="form-control show-tick spec" style="text-transform: uppercase;" name="specialization">
                                                        <option>SELECT SPECIALIZATION</option>
                                                        <option value="Urology">Urology</option>
                                                        <option value="Orthopedics">Orthopedics</option>
                                                        <option value="Dentistry">Dentistry</option>
                                                        <option value="Opthalmology">Opthalmology</option>
                                                        <option value="OBGYN">OB/GYN</option>
                                                    </select>
                                   
                                                    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js">
                                                    
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
                                    </fieldset>

                                    <h3>Please select the features you want on your hub</h3>
                                    <fieldset>
                                        <div class="row clearfix">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="row clearfix">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px; padding: 12px 0 12px 15px;">
                                                                    <h2 class="color-font col-xs-8 col-lg-10" style="color: #fff; font-size: 18px; padding: 0 0 0 0">
                                                                        Select Main Module for your hub   
                                                                    </h2>
                                                                    <h2 class="" style="color: #444; font-size: 12px;">
                                                                        <select class="form-control" title="Duration of Subscription" name="duration" id="duration" onchange="month(this)" style="width: 130px; height: 30px">
                                                                            <option value="">-- Duration --</option>
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
                                                                        </select>
                                                                    </h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($get_main_module as $data)
                                                                    <a class="js{{ $data->modlist_id }}">
                                                                        <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->module_name }}">
                                                                                    <input type="checkbox"
                                                                                        id="main{{ $data->modlist_id }}"
                                                                                        class="filled-in checkin checkbox main_module"
                                                                                        name="main_module[]"
                                                                                        data-name="{{ $data->module_name }}"
                                                                                        data-amount="{{ $data->amount }}"
                                                                                        value="{{ $data->modlist_id }}"disabled>
                                                                                    <label for="main{{ $data->modlist_id }}">
                                                                                        <p class="{{ $data->module_name }}1"
                                                                                            title="{{ $data->description }}">{{ $data->module_name }}</p>
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    @endforeach
                                                                    <script>
                                                                        
                                                                        function month(a) {
                                                                            var x = (a.value || a.options[a.selectedIndex].value);

                                                                            var duration = $('#duration').find(":selected").val();

                                                                            if(duration == '') {
                                                                                $(".main_module").prop("checked", false);
                                                                                $(".main_module").prop("disabled", true);
                                                                                $("#lvl1Profile").hide();
                                                                                $("#lvl2Patient").hide();
                                                                                $("#lvl2Clinic").hide();
                                                                                $("#lvl2Doctor").hide();
                                                                                $("#lvl2Medicine").hide();
                                                                                // $("#lvl1Queuing").hide();
                                                                                $("#lvl2Priority").hide();
                                                                                $("#lvl1Schedule").hide();
                                                                                $("#lvl2Mode").hide();
                                                                                $("#lvl1Booking").hide();
                                                                                $("#lvl1Billing").hide();
                                                                                $("#lvl1Inventory").hide();
                                                                                $("#lvl1MngReport").hide();
                                                                                $("#lvl2Financial").hide();
                                                                                $("#lvl2Inventory").hide();
                                                                                $("#lvl2MRPatient").hide();
                                                                                $("#lvl1Settings").hide();
                                                                                $('.profile').removeClass('checkStyle1');
                                                                                $('.profile2').removeClass('profile2').addClass('profile1');
                                                                                $('.queuing').removeClass('checkStyle1');
                                                                                $('.queuing2').removeClass('queuing2').addClass('queuing1');
                                                                                $('.schedule').removeClass('checkStyle1');
                                                                                $('.schedule2').removeClass('schedule2').addClass('schedule1');
                                                                                $('.booking').removeClass('checkStyle1');
                                                                                $('.booking2').removeClass('booking2').addClass('booking1');
                                                                                $('.billing').removeClass('checkStyle1');
                                                                                $('.billing2').removeClass('billing2').addClass('billing1');
                                                                                $('.inventory').removeClass('checkStyle1');
                                                                                $('.inventory2').removeClass('inventory2').addClass('inventory1');
                                                                                $('.report').removeClass('checkStyle1');
                                                                                $('.report2').removeClass('report2').addClass('report1');
                                                                                $('.settings').removeClass('checkStyle1');
                                                                                $('.settings2').removeClass('settings2').addClass('settings1');
                                                                            } else {
                                                                                $(".main_module").prop("disabled", false);
                                                                            }

                                                                            //KIM

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

                                                                        //KIM


                                                                    </script>
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" hidden id="lvl1Profile">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Level 1 Sub Modules for Main Module PROFILE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub1_patient as $data)
                                                                                    <a class="1js{{ $data->sub1_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox"
                                                                                                        id="subP{{ $data->sub1_id }}"
                                                                                                        class="filled-in" 
                                                                                                        name="lvl1[]" 
                                                                                                        value="{{ $data->sub1_id }}">
                                                                                                <label for="subP{{ $data->sub1_id }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Patient">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for Level 1 Module PATIENT</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_patient as $data)
                                                                                                    <a class="2js{{ $data->sub2_id}}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox" 
                                                                                                                        id="sub1P{{ $data->sub2_id }}" 
                                                                                                                        class="filled-in" 
                                                                                                                        name="lvl2[]" 
                                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                                <label for="sub1P{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2PPatientList">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Sub Module PATIENT LIST</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_patlist as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>

                                                                                            <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>

                                                                                             <!---KIM -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2PPersonalProfile">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for level 2 Module PERSONAL PROFILE</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_patpersonal as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                             
                                                                                            <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>
                                                                                             <!---KIM -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2PMedHistory"">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Level 2 Module MEDICAL HISTORY</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_patmh as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>

                                                                                             <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>
                                                                                             <!---KIM -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2PSchedule"">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Level 2 Module SCHEDULES</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_patsched as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                            
                                                                                             <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>
                                                                                             <!---KIM -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2PBill"">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Level 2 Module BILLS</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_patbills as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>

                                                                                             <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>
                                                                                             <!---KIM -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Clinic">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for Level 1 Module CLINIC</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_clinic as $data)
                                                                                                    <a class="2js{{ $data->sub2_id}}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox" 
                                                                                                                        id="sub1C{{ $data->sub2_id }}" 
                                                                                                                        class="filled-in" 
                                                                                                                        name="lvl2[]" 
                                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                                <label for="sub1C{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2CInformation"">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Level 2 Module Clinic INFORMATION</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_clinic_info as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>

                                                                                             <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>
                                                                                             <!---KIM -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Doctor">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for Level 1 Module DOCTORS</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_doctor as $data)
                                                                                                    <a class="2js{{ $data->sub2_id}}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox" 
                                                                                                                        id="sub1D{{ $data->sub2_id }}" 
                                                                                                                        class="filled-in" 
                                                                                                                        name="lvl2[]" 
                                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                                <label for="sub1D{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2DInformation"">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Level 2 Module Doctor INFORMATION</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_doc_info as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>

                                                                                             <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>
                                                                                            <!---KIM -->

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Medicine">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for Level 1 Module MEDICINE</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_medicine as $data)
                                                                                                    <a class="2js{{ $data->sub2_id}}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox" 
                                                                                                                        id="sub1M{{ $data->sub2_id }}" 
                                                                                                                        class="filled-in" 
                                                                                                                        name="lvl2[]" 
                                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                                <label for="sub1M{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2MInformation"">
                                                            <div class="card">
                                                                <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 15px">Features for Level 2 Module Medicine INFORMATION</h2>
                                                                </div>
                                                                <div class="body">
                                                                    <div class="row clearfix">
                                                                        @foreach($get_sub3_med_info as $data)
                                                                        <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                            <div class="card" style="border-radius: 5px">
                                                                                <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                    <h2 class="col-lg-3">
                                                                                        <input type="checkbox" 
                                                                                            id="ft{{ $data->sub3_id }}" 
                                                                                            class="filled-in {{ $data->check_identifier }}"
                                                                                            name="lvl3[]" 
                                                                                            value="{{ $data->sub3_id }}">
                                                                                        <label for="ft{{ $data->sub3_id }}"></label>
                                                                                    </h2>
                                                                                </div>
                                                                                <div class="body">
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                            <div class="col-lg-1"></div>
                                                                                            <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                                <div class="row clearfix">
                                                                                                    <img class="img-responsive img-shadow" 
                                                                                                        src="{{ $data->path }}" 
                                                                                                        style="width: 160px; height: 115px"
                                                                                                        title="{{ $data->description }}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                            <p class="img-font3 text-center"
                                                                                                title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                            <p class="img-font2 text-center">{{ $data->description }}</p>

                                                                                             <!---KIM -->
                                                                                            <p class="img-font2 text-center">As low as</p>
                                                                                            <p class="img-font2 text-center" style="margin-top: -15px">₱ {{ $data->amount }}.00</p>

                                                                                             <!---KIM -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                                $('#ft{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                                $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                            });
                                                                        </script>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Priority">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module PRIORITY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_priority as $data)
                                                                                    <a class="2js{{ $data->sub2_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                <input type="checkbox" 
                                                                                                        id="sub1Pri{{ $data->sub2_id }}" 
                                                                                                        class="filled-in" 
                                                                                                        name="lvl2[]" 
                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                <label for="sub1Pri{{ $data->sub2_id }}">
                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2QFirst"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 Module 1ST PRIORITY</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($get_sub3_queue_first as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subQF{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subQF{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subQF{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2QSecond"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 2 Module 2ND PRIORITY</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($get_sub3_queue_second as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subQF{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subQF{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subQF{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Mode">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Level 1 Module MODE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub2_mode as $data)
                                                                                    <a class="2js{{ $data->sub2_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                <input type="checkbox" 
                                                                                                        id="sub1Mode{{ $data->sub2_id }}" 
                                                                                                        class="filled-in" 
                                                                                                        name="lvl2[]" 
                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                <label for="sub1Mode{{ $data->sub2_id }}">
                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                        data-toggle="tooltip"
                                                                                                        data-placement="top"
                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2SProfile"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 Module SCHEDULE PATIENT</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_sched_pat as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSP{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSP{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSP{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2SClinic"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for level 1 Module SCHEDULE CLINIC</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_sched_cli as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Schedule">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Level 1 Sub Module for Main Module SCHEDULE</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub_schedule as $data)
                                                                                    <a class="1js{{ $data->sub1_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox"
                                                                                                        id="subS{{ $data->sub1_id }}"
                                                                                                        class="filled-in"
                                                                                                        name="lvl1[]"
                                                                                                        value="{{ $data->sub1_id }}">
                                                                                                <label for="subS{{ $data->sub1_id }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Booking">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Level 1 Sub module for Main Module BOOKING</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub_booking as $data)
                                                                                    <a class="1js{{ $data->sub1_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox"
                                                                                                        id="subB{{ $data->sub1_id }}"
                                                                                                        class="filled-in"
                                                                                                        name="lvl1[]"
                                                                                                        value="{{ $data->sub1_id }}">
                                                                                                <label for="subB{{ $data->sub1_id }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Booking"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Main Module BOOKING FUNCTION</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_book as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Billing"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Main Module BILLING FUNCTION</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_bill as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Stockin"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Main Module INVENTORY</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_stockin as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Billing">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Level 1 Sub Module for Main Module BILLING</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub_billing as $data)
                                                                                    <a class="1js{{ $data->sub1_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox" 
                                                                                                        id="subBL{{ $data->sub1_id }}" 
                                                                                                        class="filled-in" 
                                                                                                        name="lvl1[]" 
                                                                                                        value="{{ $data->sub1_id }}">
                                                                                                <label for="subBL{{ $data->sub1_id }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" hidden id="lvl1Inventory">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Level 1 Sub Modules for Main Module INVENTORY</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub_inventory as $data)
                                                                                    <a class="1js{{ $data->sub1_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox"
                                                                                                        id="subI{{ $data->sub1_id }}" 
                                                                                                        class="filled-in" 
                                                                                                        name="lvl1[]" 
                                                                                                        value="{{ $data->sub1_id }}">
                                                                                                <label for="subI{{ $data->sub1_id }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1MngReport">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Level 1 Sub Modules for Main Module MANAGE REPORT</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($get_sub_mngreport as $data)
                                                                                    <a class="1js{{ $data->sub1_id }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox"
                                                                                                        id="subMR{{ $data->sub1_id }}" 
                                                                                                        class="filled-in" 
                                                                                                        name="lvl1[]" 
                                                                                                        value="{{ $data->sub1_id }}">
                                                                                                <label for="subMR{{ $data->sub1_id }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub1_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Fstate"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Level 1 Module FINANCIAL</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_fin_report as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2InvStockin"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Level 1 Module MEDICINE INVENTORY</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_stockin_report as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2PSummary"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Level 1 Module PATIENTS</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_patsum_report as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Financial">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for sLevel 1 Module FINANCIAL</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_financial as $data)
                                                                                                    <a class="2js{{ $data->sub2_id }}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox" 
                                                                                                                        id="subF{{ $data->sub2_id }}" 
                                                                                                                        class="filled-in" 
                                                                                                                        name="lvl2[]" 
                                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                                <label for="subF{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl2Inventory">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for Level 1 Module INVENTORY</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_inventory as $data)
                                                                                                    <a class="2js{{ $data->sub2_id }}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox"
                                                                                                                    id="sub1Inv{{ $data->sub2_id }}" 
                                                                                                                    class="filled-in" 
                                                                                                                    name="lvl2[]" 
                                                                                                                    value="{{ $data->sub2_id }}">
                                                                                                                <label for="sub1Inv{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden  id="lvl2MRPatient">
                                                                                        <div class="card">
                                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Modules for Level 1 Module PATIENTS</h2>
                                                                                            </div>
                                                                                            <div class="body">
                                                                                                <div class="row clearfix">
                                                                                                    @foreach($get_sub2_patients as $data)
                                                                                                    <a class="2js{{ $data->sub2_id }}">
                                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub2_css }}">
                                                                                                                <input type="checkbox" 
                                                                                                                        id="sub1MngP{{ $data->sub2_id }}" 
                                                                                                                        class="filled-in" 
                                                                                                                        name="lvl2[]" 
                                                                                                                        value="{{ $data->sub2_id }}">
                                                                                                                <label for="sub1MngP{{ $data->sub2_id }}">
                                                                                                                    <p class="{{ $data->sub2_css }}1"
                                                                                                                        data-toggle="tooltip"
                                                                                                                        data-placement="top"
                                                                                                                        title="{{ $data->description }}">{{ $data->sub2_name }}</p>
                                                                                                                </label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </a>
                                                                                                    @endforeach
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> --}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Settings"">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub features for Main Module ACCOUNTS</h2>
                                                            </div>
                                                            <div class="body">
                                                                <div class="row clearfix">
                                                                    @foreach($sub3_my_account as $data)
                                                                    <div class="col-xs-6 col-sm-12 col-md-12 col-lg-3">
                                                                        <div class="card" style="border-radius: 5px">
                                                                            <div class="header" style="padding: 15px 0 0 0; border: none; height: 50px">
                                                                                <h2 class="col-lg-3">
                                                                                    <input type="checkbox" 
                                                                                        id="subSC{{ $data->sub3_id }}" 
                                                                                        class="filled-in {{ $data->check_identifier }}"
                                                                                        name="lvl3[]" 
                                                                                        value="{{ $data->sub3_id }}">
                                                                                    <label for="subSC{{ $data->sub3_id }}"></label>
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                        <div class="col-lg-1"></div>
                                                                                        <div class="col-lg-9" style="border-bottom: 3px solid #00D9A3; height: 145px">
                                                                                            <div class="row clearfix">
                                                                                                <img class="img-responsive img-shadow" 
                                                                                                    src="{{ $data->path }}" 
                                                                                                    style="width: 160px; height: 115px"
                                                                                                    title="{{ $data->description }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-top: -15px">
                                                                                        <p class="img-font3 text-center"
                                                                                            title="{{ $data->description }}">{{ $data->title }}</p>
                                                                                        <p class="img-font2 text-center">{{ $data->description }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        $('input.{{ $data->check_identifier }}').on('change', function() {
                                                                            $('#subSC{{ $data->sub3_id }}').addClass('chk-col-purple');
                                                                            $('input.{{ $data->check_identifier }}').not(this).prop('checked', false);
                                                                        });
                                                                    </script>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                    {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" hidden id="lvl1Settings">
                                                                        <div class="card">
                                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                                                                <h2 class="color-font" style="color: #fff; font-size: 15px">Sub feature for Main Module ACCOUNTS</h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <div class="row clearfix">
                                                                                    @foreach($sub3_my_account as $data)
                                                                                    <a class="1js{{ $data->sub_3 }}">
                                                                                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub_css }}">
                                                                                                <input type="checkbox"
                                                                                                        id="subST{{ $data->sub_3 }}" 
                                                                                                        class="filled-in" 
                                                                                                        name="lvl1[]" 
                                                                                                        value="{{ $data->sub_3 }}">
                                                                                                <label for="subST{{ $data->sub_3 }}">
                                                                                                    <p class="{{ $data->sub_css }}1"
                                                                                                        title="{{ $data->description }}">{{ $data->sub3_name }}</p>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                        <div class="legal">
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected modules will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="card">
                                                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px; padding: 12px 0 12px 15px;">
                                                                    <h2 class="color-font" style="color: #fff; font-size: 18px; padding: 0">
                                                                        Select Level 1 Sub Module for your hub   
                                                                    </h2>
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
                                                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $data->sub1_name }}">
                                                                                                    <input type="checkbox"
                                                                                                            id="subP{{ $data->sub_3 }}"
                                                                                                            class="filled-in" 
                                                                                                            name="lvl1[]" 
                                                                                                            value="{{ $data->sub1_id }}">
                                                                                                    <label for="subP{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                        <h2 class="color-font" style="color: #fff; font-size: 15px">Sub Module for Main Module QUEUING</h2>
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSQ({{ $data->sub1_id }});">
                                                                                                    <label for="subQ{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSS({{ $data->sub1_id }});">
                                                                                                    <label for="subS{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSB({{ $data->sub1_id }});">
                                                                                                    <label for="subB{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSBL({{ $data->sub1_id }});">
                                                                                                    <label for="subBL{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSI({{ $data->sub1_id }});">
                                                                                                    <label for="subI{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSMR({{ $data->sub1_id }});">
                                                                                                    <label for="subMR{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                                                            value="{{ $data->sub1_id }}"
                                                                                                            onclick="callSST({{ $data->sub1_id }});">
                                                                                                    <label for="subST{{ $data->sub1_id }}">
                                                                                                        <p class="checkFont"
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
                                                                            <small class="color color-font" style="font-size: 14px">NOTE: <small>Only the selected modules will be save into your hub...</small></small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row clearfix">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}"
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}"
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"  hidden id="lvl2Fstate">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                                                                                            name="lvl3[]" value="{{ $data->sub3_id }}">
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
                                           {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4"> --}}

                                            <!----KIM -->

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
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!----KIM -->

                                                    {{-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                                            </div>  --}}
                                        
                                        {{-- <button type="submit" class="btn btn-success btn-md">Save</button> --}}
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
                                        <small class="color color-font" style="font-size: 14px">Powered by Engtech Global Solution Inc.</small>
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


            $('.js1').click(function() {

                if($('#main1').is(':checked')) {
                    $('.profile').addClass('checkStyle1');
                    $('.profile1').removeClass('profile1').addClass('profile2');
                    $('#main1').addClass('chk-col-purple');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').show();
                    $('#lvl2Priority').hide();
                    $('#lvl1Schedule').hide();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('#main1').removeClass('chk-col-purple');
                    $('#lvl1Profile').hide();
                }
            });

            $('.js2').click(function() {

                if($('#main2').is(':checked')) {
                    $('.queuing').addClass('checkStyle1');
                    $('.queuing1').removeClass('queuing1').addClass('queuing2');
                    $('#main2').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').show();
                    $('#lvl1Schedule').hide();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('#main2').removeClass('chk-col-purple');
                    $('#lvl2Priority').hide();
                }
            });

            $('.js3').click(function() {

                if($('#main3').is(':checked')) {
                    $('.schedule').addClass('checkStyle1');
                    $('.schedule1').removeClass('schedule1').addClass('schedule2');
                    $('#main3').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').show();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('#main3').removeClass('chk-col-purple');
                    $('#lvl2Mode').hide();
                }
            });

            $('.js4').click(function() {

                if($('#main4').is(':checked')) {
                    $('.booking').addClass('checkStyle1');
                    $('.booking1').removeClass('booking1').addClass('booking2');
                    $('#main4').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Booking').show();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('#main4').removeClass('chk-col-purple');
                    $('#lvl2Booking').hide();
                }
            });

            $('.js5').click(function() {

                if($('#main5').is(':checked')) {
                    $('.billing').addClass('checkStyle1');
                    $('.billing1').removeClass('billing1').addClass('billing2');
                    $('#main5').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').show();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('#main5').removeClass('chk-col-purple');
                    $('#lvl2Billing').hide();
                }
            });

            $('.js6').click(function() {

                if($('#main6').is(':checked')) {
                    $('.inventory').addClass('checkStyle1');
                    $('.inventory1').removeClass('inventory1').addClass('inventory2');
                    $('#main6').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').show();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').hide();
                } else {
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('#main6').removeClass('chk-col-purple');
                    $('#lvl2Stockin').hide();
                }
            });

            $('.js8').click(function() {
                
                if($('#main8').is(':checked')) {
                    $('.report').addClass('checkStyle1');
                    $('.report1').removeClass('report1').addClass('report2');
                    $('#main8').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').show();
                    $('#lvl1Settings').hide();
                } else {
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('#main8').removeClass('chk-col-purple');
                    $('#lvl1MngReport').hide();
                }
            });

            $('.js9').click(function() {
                
                if($('#main9').is(':checked')) {
                    $('.settings').addClass('checkStyle1');
                    $('.settings1').removeClass('settings1').addClass('settings2');
                    $('#main9').addClass('chk-col-purple');
                    $('.profile').removeClass('checkStyle1');
                    $('.profile2').removeClass('profile2').addClass('profile1');
                    $('.queuing').removeClass('checkStyle1');
                    $('.queuing2').removeClass('queuing2').addClass('queuing1');
                    $('.schedule').removeClass('checkStyle1');
                    $('.schedule2').removeClass('schedule2').addClass('schedule1');
                    $('.booking').removeClass('checkStyle1');
                    $('.booking2').removeClass('booking2').addClass('booking1');
                    $('.billing').removeClass('checkStyle1');
                    $('.billing2').removeClass('billing2').addClass('billing1');
                    $('.inventory').removeClass('checkStyle1');
                    $('.inventory2').removeClass('inventory2').addClass('inventory1');
                    $('.report').removeClass('checkStyle1');
                    $('.report2').removeClass('report2').addClass('report1');
                    $('#lvl1Profile').hide();
                    $('#lvl2Priority').hide();
                    $('#lvl2Mode').hide();
                    $('#lvl2Booking').hide();
                    $('#lvl2Billing').hide();
                    $('#lvl2Stockin').hide();
                    $('#lvl1MngReport').hide();
                    $('#lvl1Settings').show();
                } else {
                    $('.settings').removeClass('checkStyle1');
                    $('.settings2').removeClass('settings2').addClass('settings1');
                    $('#main9').removeClass('chk-col-purple');
                    $('#lvl1Settings').hide();
                }
            });

            $('.1js1').click(function() {
                
                if($('#subP1').is(':checked')) {
                    $('.patient_patient').addClass('checkStyle1');
                    $('.patient_patient1').removeClass('patient_patient1').addClass('patient_patient2');
                    $('#subP1').addClass('chk-col-purple');
                    $('.patient_clinic').removeClass('checkStyle1');
                    $('.patient_clinic2').removeClass('patient_clinic2').addClass('patient_clinic1');
                    $('.patient_doctors').removeClass('checkStyle1');
                    $('.patient_doctors2').removeClass('patient_doctors2').addClass('patient_doctors1');
                    $('.patient_medicine').removeClass('checkStyle1');
                    $('.patient_medicine2').removeClass('patient_medicine2').addClass('patient_medicine1');
                    $('#lvl2Patient').show();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                } else {
                    $('.patient_patient').removeClass('checkStyle1');
                    $('.patient_patient2').removeClass('patient_patient2').addClass('patient_patient1');
                    $('#subP1').removeClass('chk-col-purple');
                    $('#lvl2Patient').hide();
                }
            });

            $('.1js2').click(function() {
                
                if($('#subP2').is(':checked')) {
                    $('.patient_clinic').addClass('checkStyle1');
                    $('.patient_clinic1').removeClass('patient_clinic1').addClass('patient_clinic2');
                    $('#subP2').addClass('chk-col-purple');
                    $('.patient_patient').removeClass('checkStyle1');
                    $('.patient_patient2').removeClass('patient_patient2').addClass('patient_patient1');
                    $('.patient_doctors').removeClass('checkStyle1');
                    $('.patient_doctors2').removeClass('patient_doctors2').addClass('patient_doctors1');
                    $('.patient_medicine').removeClass('checkStyle1');
                    $('.patient_medicine2').removeClass('patient_medicine2').addClass('patient_medicine1');
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').show();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').hide();
                } else {
                    $('.patient_clinic').removeClass('checkStyle1');
                    $('.patient_clinic2').removeClass('patient_clinic2').addClass('patient_clinic1');
                    $('#subP2').removeClass('chk-col-purple');
                    $('#lvl2Clinic').hide();
                }
            });

            $('.1js3').click(function() {
                
                if($('#subP3').is(':checked')) {
                    $('.patient_doctors').addClass('checkStyle1');
                    $('.patient_doctors1').removeClass('patient_doctors1').addClass('patient_doctors2');
                    $('#subP3').addClass('chk-col-purple');
                    $('.patient_patient').removeClass('checkStyle1');
                    $('.patient_patient2').removeClass('patient_patient2').addClass('patient_patient1');
                    $('.patient_clinic').removeClass('checkStyle1');
                    $('.patient_clinic2').removeClass('patient_clinic2').addClass('patient_clinic1');
                    $('.patient_medicine').removeClass('checkStyle1');
                    $('.patient_medicine2').removeClass('patient_medicine2').addClass('patient_medicine1');
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').show();
                    $('#lvl2Medicine').hide();
                } else {
                    $('.patient_doctors').removeClass('checkStyle1');
                    $('.patient_doctors2').removeClass('patient_doctors2').addClass('patient_doctors1');
                    $('#subP3').removeClass('chk-col-purple');
                    $('#lvl2Doctor').hide();
                }
            });

            $('.1js4').click(function() {
                
                if($('#subP4').is(':checked')) {
                    $('.patient_medicine').addClass('checkStyle1');
                    $('.patient_medicine1').removeClass('patient_medicine1').addClass('patient_medicine2');
                    $('#subP4').addClass('chk-col-purple');
                    $('.patient_patient').removeClass('checkStyle1');
                    $('.patient_patient2').removeClass('patient_patient2').addClass('patient_patient1');
                    $('.patient_clinic').removeClass('checkStyle1');
                    $('.patient_clinic2').removeClass('patient_clinic2').addClass('patient_clinic1');
                    $('.patient_doctors').removeClass('checkStyle1');
                    $('.patient_doctors2').removeClass('patient_doctors2').addClass('patient_doctors1');
                    $('#lvl2Patient').hide();
                    $('#lvl2Clinic').hide();
                    $('#lvl2Doctor').hide();
                    $('#lvl2Medicine').show();
                } else {
                    $('.patient_medicine').removeClass('checkStyle1');
                    $('.patient_medicine2').removeClass('patient_medicine2').addClass('patient_medicine1');
                    $('#subP4').removeClass('chk-col-purple');
                    $('#lvl2Medicine').hide();
                }
            });

            // $('.1js5').click(function() {
                
            //     if($('#subQ5').is(':checked')) {
            //         $('.queue_priority').addClass('checkStyle1');
            //         $('.queue_priority1').removeClass('queue_priority1').addClass('queue_priority2');
            //         $('#subQ5').addClass('chk-col-purple');
            //         $('#lvl2Priority').show();
            //     } else {
            //         $('.queue_priority').removeClass('checkStyle1');
            //         $('.queue_priority2').removeClass('queue_priority2').addClass('queue_priority1');
            //         $('#subQ5').removeClass('chk-col-purple');
            //         $('#lvl2Priority').hide();
            //     }
            // });

            // $('.1js6').click(function() {
                
            //     if($('#subS6').is(':checked')) {
            //         $('.schedule_mode').addClass('checkStyle1');
            //         $('.schedule_mode1').removeClass('schedule_mode1').addClass('schedule_mode2');
            //         $('#subS6').addClass('chk-col-purple');
            //     } else {
            //         $('.schedule_mode').removeClass('checkStyle1');
            //         $('.schedule_mode2').removeClass('schedule_mode2').addClass('schedule_mode1');
            //         $('#subS6').removeClass('chk-col-purple');
            //     }
            // });

            $('.1js7').click(function() {
                
                if($('#subB7').is(':checked')) {
                    $('.booking_booking').addClass('checkStyle1');
                    $('.booking_booking1').removeClass('booking_booking1').addClass('booking_booking2');
                    $('#subB7').addClass('chk-col-purple');
                } else {
                    $('.booking_booking').removeClass('checkStyle1');
                    $('.booking_booking2').removeClass('booking_booking2').addClass('booking_booking1');
                    $('#subB7').removeClass('chk-col-purple');
                }
            });

            $('.1js8').click(function() {
                
                if($('#subBL8').is(':checked')) {
                    $('.billing_billing').addClass('checkStyle1');
                    $('.billing_billing1').removeClass('billing_billing1').addClass('billing_billing2');
                    $('#subBL8').addClass('chk-col-purple');
                } else {
                    $('.billing_billing').removeClass('checkStyle1');
                    $('.billing_billing2').removeClass('billing_billing2').addClass('billing_billing1');
                    $('#subBL8').removeClass('chk-col-purple');
                }
            });

            $('.1js9').click(function() {
                
                if($('#subI9').is(':checked')) {
                    $('.inv_stockin').addClass('checkStyle1');
                    $('.inv_stockin1').removeClass('inv_stockin1').addClass('inv_stockin2');
                    $('#subI9').addClass('chk-col-purple');
                    $('.inv_stockout').removeClass('checkStyle1');
                    $('.inv_stockout2').removeClass('inv_stockout2').addClass('inv_stockout1');
                    $('.inv_solditem').removeClass('checkStyle1');
                    $('.inv_solditem2').removeClass('inv_solditem2').addClass('inv_solditem1');
                    $('.inv_returnitem').removeClass('checkStyle1');
                    $('.inv_returnitem2').removeClass('inv_returnitem2').addClass('inv_returnitem1');
                } else {
                    $('.inv_stockin').removeClass('checkStyle1');
                    $('.inv_stockin2').removeClass('inv_stockin2').addClass('inv_stockin1');
                    $('#subI9').removeClass('chk-col-purple');
                }
            });

            $('.1js10').click(function() {
                
                if($('#subI10').is(':checked')) {
                    $('.inv_stockout').addClass('checkStyle1');
                    $('.inv_stockout1').removeClass('inv_stockout1').addClass('inv_stockout2');
                    $('#subI10').addClass('chk-col-purple');
                    $('.inv_stockin').removeClass('checkStyle1');
                    $('.inv_stockin2').removeClass('inv_stockin2').addClass('inv_stockin1');
                    $('.inv_solditem').removeClass('checkStyle1');
                    $('.inv_solditem2').removeClass('inv_solditem2').addClass('inv_solditem1');
                    $('.inv_returnitem').removeClass('checkStyle1');
                    $('.inv_returnitem2').removeClass('inv_returnitem2').addClass('inv_returnitem1');
                } else {
                    $('.inv_stockout').removeClass('checkStyle1');
                    $('.inv_stockout2').removeClass('inv_stockout2').addClass('inv_stockout1');
                    $('#subI10').removeClass('chk-col-purple');
                }
            });

            $('.1js11').click(function() {
                
                if($('#subI11').is(':checked')) {
                    $('.inv_solditem').addClass('checkStyle1');
                    $('.inv_solditem1').removeClass('inv_solditem1').addClass('inv_solditem2');
                    $('#subI11').addClass('chk-col-purple');
                    $('.inv_stockin').removeClass('checkStyle1');
                    $('.inv_stockin2').removeClass('inv_stockin2').addClass('inv_stockin1');
                    $('.inv_stockout').removeClass('checkStyle1');
                    $('.inv_stockout2').removeClass('inv_stockout2').addClass('inv_stockout1');
                    $('.inv_returnitem').removeClass('checkStyle1');
                    $('.inv_returnitem2').removeClass('inv_returnitem2').addClass('inv_returnitem1');
                } else {
                    $('.inv_solditem').removeClass('checkStyle1');
                    $('.inv_solditem2').removeClass('inv_solditem2').addClass('inv_solditem1');
                    $('#subI11').removeClass('chk-col-purple');
                }
            });

            $('.1js12').click(function() {
                
                if($('#subI12').is(':checked')) {
                    $('.inv_returnitem').addClass('checkStyle1');
                    $('.inv_returnitem1').removeClass('inv_returnitem1').addClass('inv_returnitem2');
                    $('#subI12').addClass('chk-col-purple');
                    $('.inv_stockin').removeClass('checkStyle1');
                    $('.inv_stockin2').removeClass('inv_stockin2').addClass('inv_stockin1');
                    $('.inv_stockout').removeClass('checkStyle1');
                    $('.inv_stockout2').removeClass('inv_stockout2').addClass('inv_stockout1');
                    $('.inv_solditem').removeClass('checkStyle1');
                    $('.inv_solditem2').removeClass('inv_solditem2').addClass('inv_solditem1');
                } else {
                    $('.inv_returnitem').removeClass('checkStyle1');
                    $('.inv_returnitem2').removeClass('inv_returnitem2').addClass('inv_returnitem1');
                    $('#subI12').removeClass('chk-col-purple');
                }
            });

            $('.1js14').click(function() {
                
                if($('#subMR14').is(':checked')) {
                    $('.mng_financial').addClass('checkStyle1');
                    $('.mng_financial1').removeClass('mng_financial1').addClass('mng_financial2');
                    $('#subMR14').addClass('chk-col-purple');
                    $('.mng_inventory').removeClass('checkStyle1');
                    $('.mng_inventory2').removeClass('mng_inventory2').addClass('mng_inventory1');
                    $('.mng_patient').removeClass('checkStyle1');
                    $('.mng_patient2').removeClass('mng_patient2').addClass('mng_patient1');
                    $('#lvl2Fstate').show();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2PSummary').hide();
                } else {
                    $('.mng_financial').removeClass('checkStyle1');
                    $('.mng_financial2').removeClass('mng_financial2').addClass('mng_financial1');
                    $('#subMR14').removeClass('chk-col-purple');
                    $('#lvl2Fstate').hide();
                }
            });

            $('.1js15').click(function() {
                
                if($('#subMR15').is(':checked')) {
                    $('.mng_inventory').addClass('checkStyle1');
                    $('.mng_inventory1').removeClass('mng_inventory1').addClass('mng_inventory2');
                    $('#subMR15').addClass('chk-col-purple');
                    $('.mng_patient').removeClass('checkStyle1');
                    $('.mng_patient2').removeClass('mng_patient2').addClass('mng_patient1');
                    $('.mng_financial').removeClass('checkStyle1');
                    $('.mng_financial2').removeClass('mng_financial2').addClass('mng_financial1');
                    $('#lvl2InvStockin').show();
                    $('#lvl2Fstate').hide();
                    $('#lvl2PSummary').hide();
                } else {
                    $('.mng_inventory').removeClass('checkStyle1');
                    $('.mng_inventory2').removeClass('mng_inventory2').addClass('mng_inventory1');
                    $('#subMR15').removeClass('chk-col-purple');
                    $('#lvl2InvStockin').hide();
                }
            });

            $('.1js16').click(function() {
                
                if($('#subMR16').is(':checked')) {
                    $('.mng_patient').addClass('checkStyle1');
                    $('.mng_patient1').removeClass('mng_patient1').addClass('mng_patient2');
                    $('#subMR16').addClass('chk-col-purple');
                    $('.mng_financial').removeClass('checkStyle1');
                    $('.mng_financial2').removeClass('mng_financial2').addClass('mng_financial1');
                    $('.mng_inventory').removeClass('checkStyle1');
                    $('.mng_inventory2').removeClass('mng_inventory2').addClass('mng_inventory1');
                    $('#lvl2PSummary').show();
                    $('#lvl2InvStockin').hide();
                    $('#lvl2Fstate').hide();
                } else {
                    $('.mng_patient').removeClass('checkStyle1');
                    $('.mng_patient2').removeClass('mng_patient2').addClass('mng_patient1');
                    $('#subMR16').removeClass('chk-col-purple');
                    $('#lvl2PSummary').hide();
                }
            });

            $('.1js17').click(function() {
                
                if($('#subST17').is(':checked')) {
                    $('.set_myacc').addClass('checkStyle1');
                    $('.set_myacc1').removeClass('set_myacc1').addClass('set_myacc2');
                    $('#subST17').addClass('chk-col-purple');
                    $('.set_secacc').removeClass('checkStyle1');
                    $('.set_secacc2').removeClass('set_secacc2').addClass('set_secacc1');
                    $('.set_form').removeClass('checkStyle1');
                    $('.set_form2').removeClass('set_form2').addClass('set_form1');
                } else {
                    $('.set_myacc').removeClass('checkStyle1');
                    $('.set_myacc2').removeClass('set_myacc2').addClass('set_myacc1');
                    $('#subST17').removeClass('chk-col-purple');
                }
            });

            $('.1js18').click(function() {
                
                if($('#subST18').is(':checked')) {
                    $('.set_secacc').addClass('checkStyle1');
                    $('.set_secacc1').removeClass('set_secacc1').addClass('set_secacc2');
                    $('#subST18').addClass('chk-col-purple');
                    $('.set_myacc').removeClass('checkStyle1');
                    $('.set_myacc2').removeClass('set_myacc2').addClass('set_myacc1');
                    $('.set_form').removeClass('checkStyle1');
                    $('.set_form2').removeClass('set_form2').addClass('set_form1');
                } else {
                    $('.set_secacc').removeClass('checkStyle1');
                    $('.set_secacc2').removeClass('set_secacc2').addClass('set_secacc1');
                    $('#subST18').removeClass('chk-col-purple');
                }
            });

            $('.1js19').click(function() {
                
                if($('#subST19').is(':checked')) {
                    $('.set_form').addClass('checkStyle1');
                    $('.set_form1').removeClass('set_form1').addClass('set_form2');
                    $('#subST19').addClass('chk-col-purple');
                    $('.set_myacc').removeClass('checkStyle1');
                    $('.set_myacc2').removeClass('set_myacc2').addClass('set_myacc1');
                    $('.set_secacc').removeClass('checkStyle1');
                    $('.set_secacc2').removeClass('set_secacc2').addClass('set_secacc1');
                } else {
                    $('.set_form').removeClass('checkStyle1');
                    $('.set_form2').removeClass('set_form2').addClass('set_form1');
                    $('#subST19').removeClass('chk-col-purple');
                }
            });

            $('.2js1').click(function() {
                
                if($('#sub1P1').is(':checked')) {
                    $('.patient_patient_list').addClass('checkStyle1');
                    $('.patient_patient_list1').removeClass('patient_patient_list1').addClass('patient_patient_list2');
                    $('#sub1P1').addClass('chk-col-purple');
                    $('.patient_personal_profile').removeClass('checkStyle1');
                    $('.patient_personal_profile2').removeClass('patient_personal_profile2').addClass('patient_personal_profile1');
                    $('.patient_medical_history').removeClass('checkStyle1');
                    $('.patient_medical_history2').removeClass('patient_medical_history2').addClass('patient_medical_history1');
                    $('.patient_schedules').removeClass('checkStyle1');
                    $('.patient_schedules2').removeClass('patient_schedules2').addClass('patient_schedules1');
                    $('.patient_bills').removeClass('checkStyle1');
                    $('.patient_bills2').removeClass('patient_bills2').addClass('patient_bills1');
                    $('#lvl2PPatientList').show();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                } else {
                    $('.patient_patient_list').removeClass('checkStyle1');
                    $('.patient_patient_list2').removeClass('patient_patient_list2').addClass('patient_patient_list1');
                    $('#sub1P1').removeClass('chk-col-purple');
                    $('#lvl2PPatientList').hide();
                }
            });

            $('.2js2').click(function() {
                
                if($('#sub1P2').is(':checked')) {
                    $('.patient_personal_profile').addClass('checkStyle1');
                    $('.patient_personal_profile1').removeClass('patient_personal_profile1').addClass('patient_personal_profile2');
                    $('#sub1P2').addClass('chk-col-purple');
                    $('.patient_patient_list').removeClass('checkStyle1');
                    $('.patient_patient_list2').removeClass('patient_patient_list2').addClass('patient_patient_list1');
                    $('.patient_medical_history').removeClass('checkStyle1');
                    $('.patient_medical_history2').removeClass('patient_medical_history2').addClass('patient_medical_history1');
                    $('.patient_schedules').removeClass('checkStyle1');
                    $('.patient_schedules2').removeClass('patient_schedules2').addClass('patient_schedules1');
                    $('.patient_bills').removeClass('checkStyle1');
                    $('.patient_bills2').removeClass('patient_bills2').addClass('patient_bills1');
                    $('#lvl2PPersonalProfile').show();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                } else {
                    $('.patient_personal_profile').removeClass('checkStyle1');
                    $('.patient_personal_profile2').removeClass('patient_personal_profile2').addClass('patient_personal_profile1');
                    $('#sub1P2').removeClass('chk-col-purple');
                    $('#lvl2PPersonalProfile').hide();
                }
            });

            $('.2js3').click(function() {
                
                if($('#sub1P3').is(':checked')) {
                    $('.patient_medical_history').addClass('checkStyle1');
                    $('.patient_medical_history1').removeClass('patient_medical_history1').addClass('patient_medical_history2');
                    $('#sub1P3').addClass('chk-col-purple');
                    $('.patient_personal_profile').removeClass('checkStyle1');
                    $('.patient_personal_profile2').removeClass('patient_personal_profile2').addClass('patient_personal_profile1');
                    $('.patient_schedules').removeClass('checkStyle1');
                    $('.patient_schedules2').removeClass('patient_schedules2').addClass('patient_schedules1');
                    $('.patient_bills').removeClass('checkStyle1');
                    $('.patient_bills2').removeClass('patient_bills2').addClass('patient_bills1');
                    $('.patient_patient_list').removeClass('checkStyle1');
                    $('.patient_patient_list2').removeClass('patient_patient_list2').addClass('patient_patient_list1');
                    $('#lvl2PMedHistory').show();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PSchedule').hide();
                    $('#lvl2PBill').hide();
                } else {
                    $('.patient_medical_history').removeClass('checkStyle1');
                    $('.patient_medical_history2').removeClass('patient_medical_history2').addClass('patient_medical_history1');
                    $('#sub1P3').removeClass('chk-col-purple');
                    $('#lvl2PMedHistory').hide();
                }
            });

            $('.2js4').click(function() {
                
                if($('#sub1P4').is(':checked')) {
                    $('.patient_schedules').addClass('checkStyle1');
                    $('.patient_schedules1').removeClass('patient_schedules1').addClass('patient_schedules2');
                    $('#sub1P4').addClass('chk-col-purple');
                    $('.patient_bills').removeClass('checkStyle1');
                    $('.patient_bills2').removeClass('patient_bills2').addClass('patient_bills1');
                    $('.patient_patient_list').removeClass('checkStyle1');
                    $('.patient_patient_list2').removeClass('patient_patient_list2').addClass('patient_patient_list1');
                    $('.patient_personal_profile').removeClass('checkStyle1');
                    $('.patient_personal_profile2').removeClass('patient_personal_profile2').addClass('patient_personal_profile1');
                    $('.patient_medical_history').removeClass('checkStyle1');
                    $('.patient_medical_history2').removeClass('patient_medical_history2').addClass('patient_medical_history1');
                    $('#lvl2PSchedule').show();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PBill').hide();
                } else {
                    $('.patient_schedules').removeClass('checkStyle1');
                    $('.patient_schedules2').removeClass('patient_schedules2').addClass('patient_schedules1');
                    $('#sub1P4').removeClass('chk-col-purple');
                    $('#lvl2PSchedule').hide();
                }
            });

            $('.2js5').click(function() {
                
                if($('#sub1P5').is(':checked')) {
                    $('.patient_bills').addClass('checkStyle1');
                    $('.patient_bills1').removeClass('patient_bills1').addClass('patient_bills2');
                    $('#sub1P5').addClass('chk-col-purple');
                    $('.patient_patient_list').removeClass('checkStyle1');
                    $('.patient_patient_list2').removeClass('patient_patient_list2').addClass('patient_patient_list1');
                    $('.patient_personal_profile').removeClass('checkStyle1');
                    $('.patient_personal_profile2').removeClass('patient_personal_profile2').addClass('patient_personal_profile1');
                    $('.patient_medical_history').removeClass('checkStyle1');
                    $('.patient_medical_history2').removeClass('patient_medical_history2').addClass('patient_medical_history1');
                    $('.patient_schedules').removeClass('checkStyle1');
                    $('.patient_schedules2').removeClass('patient_schedules2').addClass('patient_schedules1');
                    $('#lvl2PBill').show();
                    $('#lvl2PPatientList').hide();
                    $('#lvl2PPersonalProfile').hide();
                    $('#lvl2PMedHistory').hide();
                    $('#lvl2PSchedule').hide();
                } else {
                    $('.patient_bills').removeClass('checkStyle1');
                    $('.patient_bills2').removeClass('patient_bills2').addClass('patient_bills1');
                    $('#sub1P5').removeClass('chk-col-purple');
                    $('#lvl2PBill').hide();
                }
            });

            $('.2js6').click(function() {
                
                if($('#sub1C6').is(':checked')) {
                    $('.clinic_information').addClass('checkStyle1');
                    $('.clinic_information1').removeClass('clinic_information1').addClass('clinic_information2');
                    $('#sub1C6').addClass('chk-col-purple');
                    // $('.clinic_images').removeClass('checkStyle1');
                    // $('.clinic_images2').removeClass('clinic_images2').addClass('clinic_images1');
                    // $('.clinic_schedules').removeClass('checkStyle1');
                    // $('.clinic_schedules2').removeClass('clinic_schedules2').addClass('clinic_schedules1');
                    $('#lvl2CInformation').show();
                } else {
                    $('.clinic_information').removeClass('checkStyle1');
                    $('.clinic_information2').removeClass('clinic_information2').addClass('clinic_information1');
                    $('#sub1C6').removeClass('chk-col-purple');
                    $('#lvl2CInformation').hide();
                }
            });

            // $('.2js7').click(function() {
                
            //     if($('#sub1C7').is(':checked')) {
            //         $('.clinic_images').addClass('checkStyle1');
            //         $('.clinic_images1').removeClass('clinic_images1').addClass('clinic_images2');
            //         $('#sub1C7').addClass('chk-col-purple');
            //         $('.clinic_information').removeClass('checkStyle1');
            //         $('.clinic_information2').removeClass('clinic_information2').addClass('clinic_information1');
            //         $('.clinic_schedules').removeClass('checkStyle1');
            //         $('.clinic_schedules2').removeClass('clinic_schedules2').addClass('clinic_schedules1');
            //     } else {
            //         $('.clinic_images').removeClass('checkStyle1');
            //         $('.clinic_images2').removeClass('clinic_images2').addClass('clinic_images1');
            //         $('#sub1C7').removeClass('chk-col-purple');
            //     }
            // });

            // $('.2js8').click(function() {
                
            //     if($('#sub1C8').is(':checked')) {
            //         $('.clinic_schedules').addClass('checkStyle1');
            //         $('.clinic_schedules1').removeClass('clinic_schedules1').addClass('clinic_schedules2');
            //         $('#sub1C8').addClass('chk-col-purple');
            //         $('.clinic_images').removeClass('checkStyle1');
            //         $('.clinic_images2').removeClass('clinic_images2').addClass('clinic_images1');
            //         $('.clinic_information').removeClass('checkStyle1');
            //         $('.clinic_information2').removeClass('clinic_information2').addClass('clinic_information1');
            //     } else {
            //         $('.clinic_schedules').removeClass('checkStyle1');
            //         $('.clinic_schedules2').removeClass('clinic_schedules2').addClass('clinic_schedules1');
            //         $('#sub1C8').removeClass('chk-col-purple');
            //     }
            // });

            $('.2js9').click(function() {
                
                if($('#sub1D9').is(':checked')) {
                    $('.doctor_information').addClass('checkStyle1');
                    $('.doctor_information1').removeClass('doctor_information1').addClass('doctor_information2');
                    $('#sub1D9').addClass('chk-col-purple');
                    $('#lvl2DInformation').show();
                } else {
                    $('.doctor_information').removeClass('checkStyle1');
                    $('.doctor_information2').removeClass('doctor_information2').addClass('doctor_information1');
                    $('#sub1D9').removeClass('chk-col-purple');
                    $('#lvl2DInformation').hide();
                }
            });

            $('.2js10').click(function() {
                
                if($('#sub1M10').is(':checked')) {
                    $('.medicine_information').addClass('checkStyle1');
                    $('.medicine_information1').removeClass('medicine_information1').addClass('medicine_information2');
                    $('#sub1M10').addClass('chk-col-purple');
                    $('#lvl2MInformation').show();
                } else {
                    $('.medicine_information').removeClass('checkStyle1');
                    $('.medicine_information2').removeClass('medicine_information2').addClass('medicine_information1');
                    $('#sub1M10').removeClass('chk-col-purple');
                    $('#lvl2MInformation').hide();
                }
            });

            $('.2js11').click(function() {
                
                if($('#sub1Pri11').is(':checked')) {
                    $('.priority_first').addClass('checkStyle1');
                    $('.priority_first1').removeClass('priority_first1').addClass('priority_first2');
                    $('#sub1Pri11').addClass('chk-col-purple');
                    $('.priority_second').removeClass('checkStyle1');
                    $('.priority_second2').removeClass('priority_second2').addClass('priority_second1');
                    $('#lvl2QFirst').show();
                    $('#lvl2QSecond').hide();
                } else {
                    $('.priority_first').removeClass('checkStyle1');
                    $('.priority_first2').removeClass('priority_first2').addClass('priority_first1');
                    $('#sub1Pri11').removeClass('chk-col-purple');
                    $('#lvl2QFirst').hide();
                }
            });

            $('.2js12').click(function() {
                
                if($('#sub1Pri12').is(':checked')) {
                    $('.priority_second').addClass('checkStyle1');
                    $('.priority_second1').removeClass('priority_second1').addClass('priority_second2');
                    $('#sub1Pri12').addClass('chk-col-purple');
                    $('.priority_first').removeClass('checkStyle1');
                    $('.priority_first2').removeClass('priority_first2').addClass('priority_first1');
                    $('#lvl2QSecond').show();
                    $('#lvl2QFirst').hide();
                } else {
                    $('.priority_second').removeClass('checkStyle1');
                    $('.priority_second2').removeClass('priority_second2').addClass('priority_second1');
                    $('#sub1Pri12').removeClass('chk-col-purple');
                    $('#lvl2QSecond').hide();
                }
            });

            // $('.2js13').click(function() {
                
            //     if($('#sub1Pri13').is(':checked')) {
            //         $('.priority_personal_profile').addClass('checkStyle1');
            //         $('.priority_personal_profile1').removeClass('priority_personal_profile1').addClass('priority_personal_profile2');
            //         $('#sub1Pri13').addClass('chk-col-purple');
            //         $('.priority_first').removeClass('checkStyle1');
            //         $('.priority_first2').removeClass('priority_first2').addClass('priority_first1');
            //         $('.priority_second').removeClass('checkStyle1');
            //         $('.priority_second2').removeClass('priority_second2').addClass('priority_second1');
            //         $('.priority_schedules').removeClass('checkStyle1');
            //         $('.priority_schedules2').removeClass('priority_schedules2').addClass('priority_schedules1');
            //         $('.priority_bills').removeClass('checkStyle1');
            //         $('.priority_bills2').removeClass('priority_bills2').addClass('priority_bills1');
            //         $('.priority_medical_records').removeClass('checkStyle1');
            //         $('.priority_medical_records2').removeClass('priority_medical_records2').addClass('priority_medical_records1');
            //     } else {
            //         $('.priority_personal_profile').removeClass('checkStyle1');
            //         $('.priority_personal_profile2').removeClass('priority_personal_profile2').addClass('priority_personal_profile1');
            //         $('#sub1Pri13').removeClass('chk-col-purple');
            //     }
            // });

            // $('.2js14').click(function() {
                
            //     if($('#sub1Pri14').is(':checked')) {
            //         $('.priority_schedules').addClass('checkStyle1');
            //         $('.priority_schedules1').removeClass('priority_schedules1').addClass('priority_schedules2');
            //         $('#sub1Pri14').addClass('chk-col-purple');
            //         $('.priority_first').removeClass('checkStyle1');
            //         $('.priority_first2').removeClass('priority_first2').addClass('priority_first1');
            //         $('.priority_second').removeClass('checkStyle1');
            //         $('.priority_second2').removeClass('priority_second2').addClass('priority_second1');
            //         $('.priority_personal_profile').removeClass('checkStyle1');
            //         $('.priority_personal_profile2').removeClass('priority_personal_profile2').addClass('priority_personal_profile1');
            //         $('.priority_bills').removeClass('checkStyle1');
            //         $('.priority_bills2').removeClass('priority_bills2').addClass('priority_bills1');
            //         $('.priority_medical_records').removeClass('checkStyle1');
            //         $('.priority_medical_records2').removeClass('priority_medical_records2').addClass('priority_medical_records1');
            //     } else {
            //         $('.priority_schedules').removeClass('checkStyle1');
            //         $('.priority_schedules2').removeClass('priority_schedules2').addClass('priority_schedules1');
            //         $('#sub1Pri14').removeClass('chk-col-purple');
            //     }
            // });

            // $('.2js15').click(function() {
                
            //     if($('#sub1Pri15').is(':checked')) {
            //         $('.priority_bills').addClass('checkStyle1');
            //         $('.priority_bills1').removeClass('priority_bills1').addClass('priority_bills2');
            //         $('#sub1Pri15').addClass('chk-col-purple');
            //         $('.priority_first').removeClass('checkStyle1');
            //         $('.priority_first2').removeClass('priority_first2').addClass('priority_first1');
            //         $('.priority_second').removeClass('checkStyle1');
            //         $('.priority_second2').removeClass('priority_second2').addClass('priority_second1');
            //         $('.priority_personal_profile').removeClass('checkStyle1');
            //         $('.priority_personal_profile2').removeClass('priority_personal_profile2').addClass('priority_personal_profile1');
            //         $('.priority_schedules').removeClass('checkStyle1');
            //         $('.priority_schedules2').removeClass('priority_schedules2').addClass('priority_schedules1');
            //         $('.priority_medical_records').removeClass('checkStyle1');
            //         $('.priority_medical_records2').removeClass('priority_medical_records2').addClass('priority_medical_records1');
            //     } else {
            //         $('.priority_bills').removeClass('checkStyle1');
            //         $('.priority_bills2').removeClass('priority_bills2').addClass('priority_bills1');
            //         $('#sub1Pri15').removeClass('chk-col-purple');
            //     }
            // });

            // $('.2js16').click(function() {
                
            //     if($('#sub1Pri16').is(':checked')) {
            //         $('.priority_medical_records').addClass('checkStyle1');
            //         $('.priority_medical_records1').removeClass('priority_medical_records1').addClass('priority_medical_records2');
            //         $('#sub1Pri16').addClass('chk-col-purple');
            //         $('.priority_first').removeClass('checkStyle1');
            //         $('.priority_first2').removeClass('priority_first2').addClass('priority_first1');
            //         $('.priority_second').removeClass('checkStyle1');
            //         $('.priority_second2').removeClass('priority_second2').addClass('priority_second1');
            //         $('.priority_personal_profile').removeClass('checkStyle1');
            //         $('.priority_personal_profile2').removeClass('priority_personal_profile2').addClass('priority_personal_profile1');
            //         $('.priority_schedules').removeClass('checkStyle1');
            //         $('.priority_schedules2').removeClass('priority_schedules2').addClass('priority_schedules1');
            //         $('.priority_bills').removeClass('checkStyle1');
            //         $('.priority_bills2').removeClass('priority_bills2').addClass('priority_bills1');
            //     } else {
            //         $('.priority_medical_records').removeClass('checkStyle1');
            //         $('.priority_medical_records2').removeClass('priority_medical_records2').addClass('priority_medical_records1');
            //         $('#sub1Pri16').removeClass('chk-col-purple');
            //     }
            // });

            $('.2js17').click(function() {
                
                if($('#sub1Mode17').is(':checked')) {
                    $('.mode_patient').addClass('checkStyle1');
                    $('.mode_patient1').removeClass('mode_patient1').addClass('mode_patient2');
                    $('#sub1Mode17').addClass('chk-col-purple');
                    $('.mode_clinic').removeClass('checkStyle1');
                    $('.mode_clinic2').removeClass('mode_clinic2').addClass('mode_clinic1');
                    $('#lvl2SProfile').show();
                    $('#lvl2SClinic').hide();
                } else {
                    $('.mode_patient').removeClass('checkStyle1');
                    $('.mode_patient2').removeClass('mode_patient2').addClass('mode_patient1');
                    $('#sub1Mode17').removeClass('chk-col-purple');
                    $('#lvl2SProfile').hide();
                }
            });

            $('.2js18').click(function() {
                
                if($('#sub1Mode18').is(':checked')) {
                    $('.mode_clinic').addClass('checkStyle1');
                    $('.mode_clinic1').removeClass('mode_clinic1').addClass('mode_clinic2');
                    $('#sub1Mode18').addClass('chk-col-purple');
                    $('.mode_patient').removeClass('checkStyle1');
                    $('.mode_patient2').removeClass('mode_patient2').addClass('mode_patient1');
                    $('#lvl2SClinic').show();
                    $('#lvl2SProfile').hide();
                } else {
                    $('.mode_clinic').removeClass('checkStyle1');
                    $('.mode_clinic2').removeClass('mode_clinic2').addClass('mode_clinic1');
                    $('#sub1Mode18').removeClass('chk-col-purple');
                    $('#lvl2SClinic').hide();
                }
            });

            $('.2js27').click(function() {
                
                if($('#subF27').is(':checked')) {
                    $('.finan_finan_statement').addClass('checkStyle1');
                    $('.finan_finan_statement1').removeClass('finan_finan_statement1').addClass('finan_finan_statement2');
                    $('#subF27').addClass('chk-col-purple');
                    $('.finan_free_charges').removeClass('checkStyle1');
                    $('.finan_free_charges2').removeClass('finan_free_charges2').addClass('finan_free_charges1');
                    $('.finan_compa_report').removeClass('checkStyle1');
                    $('.finan_compa_report2').removeClass('finan_compa_report2').addClass('finan_compa_report1');
                } else {
                    $('.finan_finan_statement').removeClass('checkStyle1');
                    $('.finan_finan_statement2').removeClass('finan_finan_statement2').addClass('finan_finan_statement1');
                    $('#subF27').removeClass('chk-col-purple');
                }
            });

            $('.2js28').click(function() {
                
                if($('#subF28').is(':checked')) {
                    $('.finan_free_charges').addClass('checkStyle1');
                    $('.finan_free_charges1').removeClass('finan_free_charges1').addClass('finan_free_charges2');
                    $('#subF28').addClass('chk-col-purple');
                    $('.finan_compa_report').removeClass('checkStyle1');
                    $('.finan_compa_report2').removeClass('finan_compa_report2').addClass('finan_compa_report1');
                    $('.finan_finan_statement').removeClass('checkStyle1');
                    $('.finan_finan_statement2').removeClass('finan_finan_statement2').addClass('finan_finan_statement1');
                } else {
                    $('.finan_free_charges').removeClass('checkStyle1');
                    $('.finan_free_charges2').removeClass('finan_free_charges2').addClass('finan_free_charges1');
                    $('#subF28').removeClass('chk-col-purple');
                }
            });

            $('.2js29').click(function() {
                
                if($('#subF29').is(':checked')) {
                    $('.finan_compa_report').addClass('checkStyle1');
                    $('.finan_compa_report1').removeClass('finan_compa_report1').addClass('finan_compa_report2');
                    $('#subF29').addClass('chk-col-purple');
                    $('.finan_free_charges').removeClass('checkStyle1');
                    $('.finan_free_charges2').removeClass('finan_free_charges2').addClass('finan_free_charges1');
                    $('.finan_finan_statement').removeClass('checkStyle1');
                    $('.finan_finan_statement2').removeClass('finan_finan_statement2').addClass('finan_finan_statement1');
                } else {
                    $('.finan_compa_report').removeClass('checkStyle1');
                    $('.finan_compa_report2').removeClass('finan_compa_report2').addClass('finan_compa_report1');
                    $('#subF29').removeClass('chk-col-purple');
                }
            });

            $('.2js30').click(function() {
                
                if($('#sub1Inv30').is(':checked')) {
                    $('.inv_stock_in').addClass('checkStyle1');
                    $('.inv_stock_in1').removeClass('inv_stock_in1').addClass('inv_stock_in2');
                    $('#sub1Inv30').addClass('chk-col-purple');
                    $('.inv_stock_out').removeClass('checkStyle1');
                    $('.inv_stock_out2').removeClass('inv_stock_out2').addClass('inv_stock_out1');
                    $('.inv_sold_item').removeClass('checkStyle1');
                    $('.inv_sold_item2').removeClass('inv_sold_item2').addClass('inv_sold_item1');
                    $('.inv_return_item').removeClass('checkStyle1');
                    $('.inv_return_item2').removeClass('inv_return_item2').addClass('inv_return_item1');
                    $('.inv_summary').removeClass('checkStyle1');
                    $('.inv_summary2').removeClass('inv_summary2').addClass('inv_summary1');
                } else {
                    $('.inv_stock_in').removeClass('checkStyle1');
                    $('.inv_stock_in2').removeClass('inv_stock_in2').addClass('inv_stock_in1');
                    $('#sub1Inv30').removeClass('chk-col-purple');
                }
            });

            $('.2js31').click(function() {
                
                if($('#sub1Inv31').is(':checked')) {
                    $('.inv_stock_out').addClass('checkStyle1');
                    $('.inv_stock_out1').removeClass('inv_stock_out1').addClass('inv_stock_out2');
                    $('#sub1Inv31').addClass('chk-col-purple');
                    $('.inv_stock_in').removeClass('checkStyle1');
                    $('.inv_stock_in2').removeClass('inv_stock_in2').addClass('inv_stock_in1');
                    $('.inv_sold_item').removeClass('checkStyle1');
                    $('.inv_sold_item2').removeClass('inv_sold_item2').addClass('inv_sold_item1');
                    $('.inv_return_item').removeClass('checkStyle1');
                    $('.inv_return_item2').removeClass('inv_return_item2').addClass('inv_return_item1');
                    $('.inv_summary').removeClass('checkStyle1');
                    $('.inv_summary2').removeClass('inv_summary2').addClass('inv_summary1');
                } else {
                    $('.inv_stock_out').removeClass('checkStyle1');
                    $('.inv_stock_out2').removeClass('inv_stock_out2').addClass('inv_stock_out1');
                    $('#sub1Inv31').removeClass('chk-col-purple');
                }
            });

            $('.2js32').click(function() {
                
                if($('#sub1Inv32').is(':checked')) {
                    $('.inv_sold_item').addClass('checkStyle1');
                    $('.inv_sold_item1').removeClass('inv_sold_item1').addClass('inv_sold_item2');
                    $('#sub1Inv32').addClass('chk-col-purple');
                    $('.inv_stock_in').removeClass('checkStyle1');
                    $('.inv_stock_in2').removeClass('inv_stock_in2').addClass('inv_stock_in1');
                    $('.inv_stock_out').removeClass('checkStyle1');
                    $('.inv_stock_out2').removeClass('inv_stock_out2').addClass('inv_stock_out1');
                    $('.inv_return_item').removeClass('checkStyle1');
                    $('.inv_return_item2').removeClass('inv_return_item2').addClass('inv_return_item1');
                    $('.inv_summary').removeClass('checkStyle1');
                    $('.inv_summary2').removeClass('inv_summary2').addClass('inv_summary1');
                } else {
                    $('.inv_sold_item').removeClass('checkStyle1');
                    $('.inv_sold_item2').removeClass('inv_sold_item2').addClass('inv_sold_item1');
                    $('#sub1Inv32').removeClass('chk-col-purple');
                }
            });

            $('.2js33').click(function() {
                
                if($('#sub1Inv33').is(':checked')) {
                    $('.inv_return_item').addClass('checkStyle1');
                    $('.inv_return_item1').removeClass('inv_return_item1').addClass('inv_return_item2');
                    $('#sub1Inv33').addClass('chk-col-purple');
                    $('.inv_stock_in').removeClass('checkStyle1');
                    $('.inv_stock_in2').removeClass('inv_stock_in2').addClass('inv_stock_in1');
                    $('.inv_stock_out').removeClass('checkStyle1');
                    $('.inv_stock_out2').removeClass('inv_stock_out2').addClass('inv_stock_out1');
                    $('.inv_sold_item').removeClass('checkStyle1');
                    $('.inv_sold_item2').removeClass('inv_sold_item2').addClass('inv_sold_item1');
                    $('.inv_summary').removeClass('checkStyle1');
                    $('.inv_summary2').removeClass('inv_summary2').addClass('inv_summary1');
                } else {
                    $('.inv_return_item').removeClass('checkStyle1');
                    $('.inv_return_item2').removeClass('inv_return_item2').addClass('inv_return_item1');
                    $('#sub1Inv33').removeClass('chk-col-purple');
                }
            });

            $('.2js34').click(function() {
                
                if($('#sub1Inv34').is(':checked')) {
                    $('.inv_summary').addClass('checkStyle1');
                    $('.inv_summary1').removeClass('inv_summary1').addClass('inv_summary2');
                    $('#sub1Inv34').addClass('chk-col-purple');
                    $('.inv_stock_in').removeClass('checkStyle1');
                    $('.inv_stock_in2').removeClass('inv_stock_in2').addClass('inv_stock_in1');
                    $('.inv_stock_out').removeClass('checkStyle1');
                    $('.inv_stock_out2').removeClass('inv_stock_out2').addClass('inv_stock_out1');
                    $('.inv_sold_item').removeClass('checkStyle1');
                    $('.inv_sold_item2').removeClass('inv_sold_item2').addClass('inv_sold_item1');
                    $('.inv_return_item').removeClass('checkStyle1');
                    $('.inv_return_item2').removeClass('inv_return_item2').addClass('inv_return_item1');
                } else {
                    $('.inv_summary').removeClass('checkStyle1');
                    $('.inv_summary2').removeClass('inv_summary2').addClass('inv_summary1');
                    $('#sub1Inv34').removeClass('chk-col-purple');
                }
            });

            $('.2js35').click(function() {
                
                if($('#sub1MngP35').is(':checked')) {
                    $('.patient_patient_summary').addClass('checkStyle1');
                    $('.patient_patient_summary1').removeClass('patient_patient_summary1').addClass('patient_patient_summary2');
                    $('#sub1MngP35').addClass('chk-col-purple');
                    $('.patient_consultation_summary').removeClass('checkStyle1');
                    $('.patient_consultation_summary2').removeClass('patient_consultation_summary2').addClass('patient_consultation_summary1');
                    $('.patient_schedule_summary').removeClass('checkStyle1');
                    $('.patient_schedule_summary2').removeClass('patient_schedule_summary2').addClass('patient_schedule_summary1');
                } else {
                    $('.patient_patient_summary').removeClass('checkStyle1');
                    $('.patient_patient_summary2').removeClass('patient_patient_summary2').addClass('patient_patient_summary1');
                    $('#sub1MngP35').removeClass('chk-col-purple');
                }
            });

            $('.2js36').click(function() {
                
                if($('#sub1MngP36').is(':checked')) {
                    $('.patient_consultation_summary').addClass('checkStyle1');
                    $('.patient_consultation_summary1').removeClass('patient_consultation_summary1').addClass('patient_consultation_summary2');
                    $('#sub1MngP36').addClass('chk-col-purple');
                    $('.patient_patient_summary').removeClass('checkStyle1');
                    $('.patient_patient_summary2').removeClass('patient_patient_summary2').addClass('patient_patient_summary1');
                    $('.patient_schedule_summary').removeClass('checkStyle1');
                    $('.patient_schedule_summary2').removeClass('patient_schedule_summary2').addClass('patient_schedule_summary1');
                } else {
                    $('.patient_consultation_summary').removeClass('checkStyle1');
                    $('.patient_consultation_summary2').removeClass('patient_consultation_summary2').addClass('patient_consultation_summary1');
                    $('#sub1MngP36').removeClass('chk-col-purple');
                }
            });

            $('.2js37').click(function() {
                
                if($('#sub1MngP37').is(':checked')) {
                    $('.patient_schedule_summary').addClass('checkStyle1');
                    $('.patient_schedule_summary1').removeClass('patient_schedule_summary1').addClass('patient_schedule_summary2');
                    $('#sub1MngP37').addClass('chk-col-purple');
                    $('.patient_patient_summary').removeClass('checkStyle1');
                    $('.patient_patient_summary2').removeClass('patient_patient_summary2').addClass('patient_patient_summary1');
                    $('.patient_consultation_summary').removeClass('checkStyle1');
                    $('.patient_consultation_summary2').removeClass('patient_consultation_summary2').addClass('patient_consultation_summary1');
                } else {
                    $('.patient_schedule_summary').removeClass('checkStyle1');
                    $('.patient_schedule_summary2').removeClass('patient_schedule_summary2').addClass('patient_schedule_summary1');
                    $('#sub1MngP37').removeClass('chk-col-purple');
                }
            });

            


        });
    </script>
    {{-- <script>
        
        $(document).ready(function() {
        });

        function callM(e) {
            if(e == '1') {
                if($('#main1').prop('checked')) {
                    $('#lvl1Profile').show();
                    $('#lvl1Queuing').hide();
                    $('#lvl2Mode').hide();
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
                    $('#lvl2InvStockin').hide();
                    $('#lvl2Ffree').hide();
                    $('#lvl2Fcom').hide();
                    $('#lvl2MRPatient').hide();
                    $('#lvl2Fstate').hide();
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
lvl2Financial lvl2Inventory
    </script> --}}
@endsection