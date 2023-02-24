<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Polyclinic Management System</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	<link rel="stylesheet" type="text/css" href="{{asset('Main_portal/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Main_portal/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Main_portal/css/style.css')}}">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	@include('main_portal.layout.banner')
	@include('main_portal.layout.service')
	@include('main_portal.layout.ultimate_dream')
	@include('main_portal.layout.specializations')
	@include('main_portal.layout.contact_us')
	@include('main_portal.layout.footer')

	<script src="{{ asset('Main_portal/js/jquery.min.js') }}"></script>
	<script src="{{ asset('Main_portal/js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset('Main_portal/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('Main_portal/js/custom.js') }}"></script>
	<script src="{{ asset('Main_portal/contactform/contactform.js') }}"></script>
	@yield('script')
	<script>
			$(document).ready(function() {
				// $('#findDoctor').on('change', function() {
				// 	var e = document.getElementById("findDoctor");
				// 	var strUser = e.options[e.selectedIndex].getAttribute('data-name');
					

				// 	$('#doctor').html(strUser);
				// });
				$('select[name="specialization"]').on('change', function(){
					var spec_id = $(this).val();

					if(spec_id) {
						$.ajax({
			                url: '/get_specialization/'+spec_id,
			                type: "GET",
			                dataType: "json",
			                beforeSend: function(){
			                    $('#loader').css("visibility", "visible");
			                },

			                success:function(data) {

			                    $('select[name="doctors"]').empty();

			                    $.each(data, function(key, value){

			                        $('select[name="doctors"]').append('<option value="'+ value +'">' + value + '</option>');

			                    });
			                },
			                complete: function(){
			                    $('#loader').css("visibility", "hidden");
			                }
			            });
					} else {
			            $('select[name="doctors"]').empty();
			        }
				});

				$('select[name="doctors"]').on('change', function(){
					var doc_id = $(this).val();


					if(doc_id) {
						$.ajax({
			                url: '/get_sched/'+doc_id,
			                type: "GET",
			                dataType: "json",
			                beforeSend: function(){
			                    $('#loader').css("visibility", "visible");
			                },

			                success:function(data) {

			                    $('select[name="clinicSched"]').empty();

			                    $.each(data, function(key, value){

			                        $('select[name="clinicSched"]').append('<option value="'+ value.clinic_id +'">' + value.day + ' ' + value.time_in + '-' + value.time_out + '</option>');

			                    });
			                },
			                complete: function(){
			                    $('#loader').css("visibility", "hidden");
			                }
			            });
					} else {
			            $('select[name="clinicSched"]').empty();
			        }
				});
			});
		</script>

</body>

</html>
