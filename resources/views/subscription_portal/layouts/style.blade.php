<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('Subscription_Portal/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <!-- <link href="plugins/node-waves/waves.css" rel="stylesheet" /> -->

    <!-- Animation Css -->
    <!-- <link href="plugins/animate-css/animate.css" rel="stylesheet" /> -->

    <!-- Morris Chart Css-->
    <!-- <link href="plugins/morrisjs/morris.css" rel="stylesheet" /> -->
    <!-- <link href="{{asset('Subscription_Portal/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" /> -->
    <!-- Custom Css -->
    <link href="{{asset('Subscription_Portal/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('Subscription_Portal/css/themes/all-themes.css')}}" rel="stylesheet" />
    <!-- Jquery Core Js -->
    <script src="{{asset('Subscription_Portal/plugins/jquery/jquery.min.js')}}"></script>
    <style>
        .color {

            color: #00D9A3;
        }

        .wizard .steps .current a {

            border-radius: 4px;
            background-color: #00D9A3;
        }

        .wizard .steps .current a:active,
        .wizard .steps .current a:focus,
        .wizard .steps .current a:hover {

            background-color: #00D9A3;
        }

        .wizard .steps .done a {

            background-color: #00D9A3;
        }

        .wizard .steps .done a:hover,
        .wizard .steps .done a:active,
        .wizard .steps .done a:focus {

            background-color: #00D9A3; 
        }

        .wizard .steps a {

            border-radius: 4px;
        }

        .wizard > .actions a {

            background: #00D9A3;
        }

        .form-group .form-line:after {

            border-bottom: 2px solid #00D9A3;
        }

        .btn-success,
        .btn-success:hover,
        .btn-success:active,
        .btn-success:focus {
            background-color: #00D9A3 !important;
        }

        .profile,   .patient_patient,   .patient_patient_list,
                                        .patient_personal_profile,
                                        .patient_medical_history,
                                        .patient_schedules,
                                        .patient_bills,
                    .patient_clinic,    .clinic_information,
                                        .clinic_images,
                                        .clinic_schedules,
                    .patient_doctors,   .doctor_information,
                    .patient_medicine,  .medicine_information,
        .queuing,   .queue_priority,    .priority_first,
                                        .priority_second,
                                        .priority_personal_profile,
                                        .priority_schedules,
                                        .priority_bills,
                                        .priority_medical_records,
        .schedule,  .schedule_mode,     .mode_patient,
                                        .mode_clinic,
        .booking,   .booking_booking,
        .billing,   .billing_billing,
        .inventory, .inv_stockin,
                    .inv_stockout,
                    .inv_solditem,
                    .inv_returnitem,
        .report,    .mng_financial,     .finan_finan_statement,
                                        .finan_free_charges,
                                        .finan_compa_report,
                    .mng_inventory,     .inv_stock_in,
                                        .inv_stock_out,
                                        .inv_sold_item,
                                        .inv_return_item,
                                        .inv_summary,
                    .mng_patient,       .patient_patient_summary,
                                        .patient_consultation_summary,
                                        .patient_schedule_summary,
        .settings,  .set_myacc,
                    .set_secacc,
                    .set_form {
            border: 1px solid #00D9A3;
            border-radius: 4px; 
            padding: 9px 0 0 10px;
            cursor: pointer;
        }
        .checkStyle1 {
            border-radius: 4px; 
            padding: 9px 0 0 10px;
            background-color: #00D9A3;
            color: white;
        }

        .profile1,  .patient_patient1,  .patient_patient_list1,
                                        .patient_personal_profile1,
                                        .patient_medical_history1,
                                        .patient_schedules1,
                                        .patient_bills1,
                    .patient_clinic1,   .clinic_information1,
                                        .clinic_images1,
                                        .clinic_schedules1,
                    .patient_doctors1,  .doctor_information1,
                    .patient_medicine1, .medicine_information1,
        .queuing1,  .queue_priority1,   .priority_first1,
                                        .priority_second1,
                                        .priority_personal_profile1,
                                        .priority_schedules1,
                                        .priority_bills1,
                                        .priority_medical_records1,
        .schedule1, .schedule_mode1,    .mode_patient1,
                                        .mode_clinic1,
        .booking1,  .booking_booking1,
        .billing1,  .billing_billing1,
        .inventory1,.inv_stockin1,
                    .inv_stockout1,
                    .inv_solditem1,
                    .inv_returnitem1,

        .report1,   .mng_financial1,    .finan_finan_statement1,
                                        .finan_free_charges1,
                                        .finan_compa_report1,
                    .mng_inventory1,    .inv_stock_in1,
                                        .inv_stock_out1,
                                        .inv_sold_item1,
                                        .inv_return_item1,
                                        .inv_summary1,
                    .mng_patient1,      .patient_patient_summary1,
                                        .patient_consultation_summary1,
                                        .patient_schedule_summary1,
        .settings1, .set_myacc1,
                    .set_secacc1,
                    .set_form1 {
            color: #00D9A3;
            font-family: Century Gothic; 
            font-size: 14px;
            text-transform: uppercase;
        }

        .profile2,  .patient_patient2,  .patient_patient_list2,
                                        .patient_personal_profile2,
                                        .patient_medical_history2,
                                        .patient_schedules2,
                                        .patient_bills2,
                    .patient_clinic2,   .clinic_information2,
                                        .clinic_images2,
                                        .clinic_schedules2,
                    .patient_doctors2,  .doctor_information2,
                    .patient_medicine2, .medicine_information2,
        .queuing2,  .queue_priority2,   .priority_first2,
                                        .priority_second2,
                                        .priority_personal_profile2,
                                        .priority_schedules2,
                                        .priority_bills2,
                                        .priority_medical_records2,
        .schedule2, .schedule_mode2,    .mode_patient2,
                                        .mode_clinic2,
        .booking2,  .booking_booking2,
        .billing2,  .billing_billing2,
        .inventory2,.inv_stockin2,
                    .inv_stockout2,
                    .inv_solditem2,
                    .inv_returnitem2,
        .report2,   .mng_financial2,    .finan_finan_statement2,
                                        .finan_free_charges2,
                                        .finan_compa_report2,
                    .mng_inventory2,    .inv_stock_in2,
                                        .inv_stock_out2,
                                        .inv_sold_item2,
                                        .inv_return_item2,
                                        .inv_summary2,
                    .mng_patient2,      .patient_patient_summary2,
                                        .patient_consultation_summary2,
                                        .patient_schedule_summary2,
        .settings2, .set_myacc2,
                    .set_secacc2,
                    .set_form2 {
            color: #fff;
            font-family: Century Gothic; 
            font-size: 14px;
            text-transform: uppercase;
        }

        .checkFont1 {
            color: #00D9A3;
            font-family: Century Gothic; 
            font-size: 11px;
            text-transform: uppercase;
        }

        .color-font {
            font-family: Century Gothic;

        }

        img.img-shadow:hover {
            box-shadow: 2px 2px 20px 5px rgba(0,0,0,0.2);
        }

        .img-shadow{
            transition: .5s ease;
        }

        .img-font1 {
            color: #888888;
            font-size: 14px;
        }

        .img-font2 {
            color: #888888;
            font-size: 14px;
            font-family: Century Gothic; 
        }

        .img-font3 {
            color: #888888;
            font-size: 17px;
            font-family: Century Gothic; 
        }
    </style>
</head>

<body class="theme-red">

    @yield('content')
    

    <!-- Bootstrap Core Js -->
    <script src="{{asset('Subscription_Portal/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="{{asset('Subscription_Portal/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script> -->

    <!-- Slimscroll Plugin Js -->
    <script src="{{asset('Subscription_Portal/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('Subscription_Portal/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{asset('Subscription_Portal/plugins/jquery-steps/jquery.steps.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('Subscription_Portal/plugins/node-waves/waves.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('Subscription_Portal/js/admin.js')}}"></script>
    <script src="{{asset('Subscription_Portal/js/pages/forms/form-wizard.js')}}"></script>
    <script src="{{asset('Subscription_Portal/js/pages/ui/tooltips-popovers.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{asset('Subscription_Portal/js/demo.js')}}"></script>


    @yield('myScripts')
</body>

</html>
