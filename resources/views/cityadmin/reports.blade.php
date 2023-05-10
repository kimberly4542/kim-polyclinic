@extends('cityadmin.layouts.master2')

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>Reports - City Admin Portal</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	<!-- Favicon-->
	<link rel="stylesheet" href="{{ URL::asset('AdminSB/favicon.ico') }}">
	<!-- Bootstrap Core Css -->
	{{-- <link href="{{ URL::asset('AdminSB/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"> --}}

  <!---Fontawesome----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <!-- NEW ADDED -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Waves Effect Css -->
	<link href="{{ URL::asset('AdminSB/plugins/node-waves/waves.css') }}" rel="stylesheet">
	<!-- Animation Css -->
	 <link href="{{ URL::asset('AdminSB/plugins/animate-css/animate.css') }}" rel="stylesheet">
	<!-- Custom Css -->
	<link href="{{ URL::asset('AdminSB/css/style2.css') }}" rel="stylesheet">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
{{-- 
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> --}}
 

 
</head>  

<body class="container-fluid">

  <!---------------------------------------------- NAVBAR ----------------------------------------------->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          {{-- <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="15"
            alt="MDB Logo"
            loading="lazy"
          /> --}}
          <small><strong>Polyclinic Management System</strong></small>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="patient">Patient</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="analytics">Analytics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports" id="reports">Reports</a>
          </li>
          
        </ul>

      </div>
      <div class="d-flex align-items-center">
        <ul class="navbar-nav ">
          <li class="nav-item"">
              <a class="nav-link" href="">City Admin</a>
          </li>
        </ul>

        <i class="fa fa-chevron-down" aria-hidden="true"></i>
      </div>
    </div>
  </nav>
  <!---------------------------------------------- NAVBAR END ----------------------------------------------->
  <br><br><br><br><br>


  <!---------------------------------------------- FILTERS ----------------------------------------------->
    <div class="card5 col-lg-11 col-md-11 col-sm-11 col-xs-11">

      <div class="row">
          <div class="col-md-2">
            <select name="" id="cases" class="form-control" v-model="diagnos" @change="index">
									<option value="" selected>Cases</option>										
									{{-- <option v-for="item in diagnosis" :value="item.diagnos" >@{{item.diagnos}}</option> --}}
                  <option value="Dengue">Dengue</option>
                  <option value="Diabetes">Diabetes</option>
                  <option value="Malaria">Malaria</option>
						</select>
            {{-- <select name="cases" id="cases" class="form-control">
              <option value selected="selected">Cases</option>
              <option value="Diagnosis">Dengue</option>
              <option value="Diagnosis">Diabetes</option>
              <option value="Diagnosis">Malaria</option>
            </select> --}}
          </div>

          <div class="col-sm-2">
            <input type="text" id="search_age" placeholder="Age" class="form-control">
          </div>
          
          <div class="col-md-2">
            <select name="" id="location" class="form-control" v-model="location"  @change="index">
									<option value="" selected>Location</option>
                  <option value="Region 1">Region 1</option>
                  <option value="Region 2">Region 2</option>
                  <option value="Region 3">Region 3</option>
                  <option value="Region 4">Region 4</option>
                  <option value="Region 5">Region 5</option>
                  <option value="Region 6">Region 6</option>
                  <option value="Region 7">Region 7</option>
                  <option value="Region 8">Region 8</option>
                  <option value="Region 9">Region 9</option>
                  <option value="Region 10">Region 10</option>
                  <option value="Region 11">Region 11</option>
                  <option value="Region 12">Region 12</option>
                  <option value="Region 13">Region 13</option>
                  <option value="Region 14">Region 14</option>
                  <option value="Region 15">Region 15</option>
                  <option value="Region 17">Region 17</option>
                  <option value="Region 18">Region 18</option>

                  
									{{-- <option v-for="item in locations" :value="item.address1">@{{item.address1}}</option> --}}
						</select>
            {{-- <select name="region" id="region" class="form-control">
              <option value selected="selected">Location</option>
              <option value="Region 1">Region 1</option>
              <option value="Region 2">Region 2</option>
              <option value="Region 3">Region 3</option>
              <option value="Region 4">Region 4</option>
              <option value="Region 5">Region 5</option>
              <option value="Region 6">Region 6</option>
            </select> --}}
          </div>

          <div class="col-md-2">
            <select name="" id="gender" class="form-control" v-model="gender"  @change="index">
									<option value="" selected>Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
						</select>
            {{-- <select name="gender" id="gender" class="form-control">
              <option value selected="selected">Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select> --}}
          </div>

          <div class="col-sm-3">
            <input type="text" id="search" placeholder="Search" class="form-control">
          </div>

          <div class="col-sm-1">
            <button class="btn btn-warning form-control" style="">Print</button>
          </div>

      </div>

    <!---------------------------------------------- FILTERS END ----------------------------------------------->

    <br><br>
    {{-- <div class="card col-lg-12">
          
      <div class="container-fluid">

        <section class="hk-sec-wrapper">
                                <h5 class="hk-sec-title">Disease Record</h5>
                                <p class="mb-40"><small>Apply filters to generate report. </small></p>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Cases</th>
                                                            <th>Age</th>
                                                            <th>Location</th>
                                                            <th>Gender</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 1</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 2</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Dengue </td>
                                                            <td>15</td>
                                                            <td>Region 3</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 4</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Dengue </td>
                                                            <td>15</td>
                                                            <td>Region 5</td>
                                                            <td>Female</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Dengue</td>
                                                            <td>15</td>
                                                            <td>Region 6</td>
                                                            <td>Female</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


      </div>
    </div> --}}
    </div>


  <!---------------------------------------------- TABLE ----------------------------------------------->

  <section id="app" class="content">
    <div class="card col-lg-11 col-md-11 col-sm-11 col-xs-11">
		<div class="container-fluid">
			{{-- <div class="row clearfix"> --}}

					<div class="">
						<div class="header">
							<h2 style="padding: 10px;">
                <h5 class="hk-sec-title">Disease Record</h5>
                <p class="mb-40">Apply filters to generate report.</p>
							</h2>
						</div>
						<div class="body">

              <div id="table-container"></div>

							{{-- <div class="row">
								<div class="col-md-3">
									<select name="" id="" class="form-control" v-model="diagnos" @change="index">
										<option value="" selected>Diagnosis</option>									
										
										<option v-for="item in diagnosis" :value="item.diagnos" >@{{item.diagnos}}</option>
									</select>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control" placeholder="Age">
								</div>
								<div class="col-md-3">
									<select name="" id="" class="form-control" v-model="location"  @change="index">
										<option value="" selected>Location</option>
										
										<option v-for="item in locations" :value="item.address1">@{{item.address1}}</option>
									</select>
								</div>
								<div class="col-md-3">
									<select name="" id="" class="form-control" v-model="gender"  @change="index">
										<option value="" selected>Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div> --}}
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="data-table">
									<thead>
										<tr>
											<th>Cases</th>
											<th>Age</th>
											<th>Location</th>											
											<th>Gender</th>
										</tr>
									</thead>
									<tbody>
										{{-- <tr v-for="result in results">
											<td>@{{result.diagnos}}</td>
											<td>@{{getAge(result.birth_date)}}</td>
											<td>@{{result.address1}}</td>
											<td>@{{result.gender}}</td>
										</tr> --}}
									</tbody>
								</table>
							</div>
						</div>
						{{-- <div class="card-footer">
						<pagination :next_page_url=next_page_url :prev_page_url=prev_page_url :current_page_url=current_page_url :current_page=current_page @paginate="paginatedData"></pagination>
						</div> --}}
					</div>
				</div>
			</div>	
		</div>
		
            {{-- <div class="card-footer">
						<pagination :next_page_url=next_page_url :prev_page_url=prev_page_url :current_page_url=current_page_url :current_page=current_page @paginate="paginatedData"></pagination>
	</div> --}}
  
	</section>
  <div class="row">
    <div class="pagination">
    <div class="col-sm-1">
      <button class="btn btn-warning form-control" id="previous-page" style="">Back</button>
    </div>

    <div class="col-sm-1">
      <button class="btn btn-warning form-control" id="next-page" style="">Next</button>
    </div>
  </div>
  </div>
  
  <!---------------------------------------------- FILTERS END ----------------------------------------------->



  {{-- <script src="{{mix('js/medical_report.js')}}"></script> --}}


{{-- CUSTOM JS
<script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js')}}"></script>  --}}

 {{-- <script>
    let tableBody = document.querySelector("#data-table tbody");

    fetch("/diagnos")
      .then((response) => response.json())
      .then((diagnos) => {
        diagnos.forEach((item) => {
          let row = document.createElement("tr");
          row.innerHTML = `
                    <td>${item.diagnos}</td>
                    <td>${item.age}</td>
                    <td>${item.address1}</td>
                    <td>${item.gender}</td>
                `;
          tableBody.appendChild(row);
        });
      });

  </script> --}}



<script>
let tableBody = document.querySelector("#data-table tbody");
let genderDropdown = document.querySelector("#gender");
let casesDropdown = document.querySelector("#cases");
let locDropdown = document.querySelector("#location");
let searchInput = document.querySelector("#search");
let searchAge = document.querySelector("#search_age");

let pageSize = 5;
let pageNumber = 1;

fetch("/diagnos")
  .then((response) => response.json())
  .then((diagnos) => {
    genderDropdown.addEventListener("change", (event) => {
      filterData();
    });

    casesDropdown.addEventListener("change", (event) => {
      filterData();
    });

    locDropdown.addEventListener("change", (event) => {
      filterData();
    });

    searchInput.addEventListener("input", (event) => {
      filterData();
    });

    searchAge.addEventListener("input", (event) => {
      filterData();
    });

    function filterData() {
      let filteredDiagnos = diagnos;
      if (genderDropdown.value !== "") {
        filteredDiagnos = filteredDiagnos.filter(
          (item) => item.gender === genderDropdown.value
        );
      }
      if (casesDropdown.value !== "") {
        filteredDiagnos = filteredDiagnos.filter(
          (item) => item.diagnos === casesDropdown.value
        );
      }
      if (locDropdown.value !== "") {
        filteredDiagnos = filteredDiagnos.filter(
          (item) => item.address1 === locDropdown.value
        );
      }
      if (searchAge.value !== "") {
        filteredDiagnos = filteredDiagnos.filter(
          (item) => calculateAge(item.birth_date) === parseInt(searchAge.value)
        );
      }
      let searchQuery = searchInput.value.trim().toLowerCase();
      if (searchQuery !== "") {
        filteredDiagnos = filteredDiagnos.filter((item) =>
          item.diagnos.toLowerCase().includes(searchQuery)
        );
      }

      tableBody.innerHTML = "";
      let startIndex = (pageNumber - 1) * pageSize;
      let endIndex = startIndex + pageSize;
      let pageEntries = filteredDiagnos.slice(startIndex, endIndex);
      pageEntries.forEach((item) => {
        let row = document.createElement("tr");
        row.innerHTML = `
                    <td>${item.diagnos}</td>
                    <td>${calculateAge(item.birth_date)}</td>
                    <td>${item.address1}</td>
                    <td>${item.gender}</td>
                `;
        tableBody.appendChild(row);
      });


      // tableBody.innerHTML = "";
      // filteredDiagnos.forEach((item) => {
      //   let row = document.createElement("tr");
      //   row.innerHTML = `
      //     <td>${item.diagnos}</td>
      //     <td>${calculateAge(item.birth_date)}</td>
      //     <td>${item.address1}</td>
      //     <td>${item.gender}</td>
      //   `;
      //   tableBody.appendChild(row);
      // });
    // }

    //NEW CODE
     // Pagination
      let paginationDiv = document.querySelector("#pagination");
      paginationDiv.innerHTML = "";
      let totalPages = Math.ceil(filteredDiagnos.length / pageSize);
      for (let i = 1; i <= totalPages; i++) {
        let pageButton = document.createElement("button");
        pageButton.innerHTML = i;
        if (i === pageNumber) {
          pageButton.disabled = true;
        }
        pageButton.addEventListener("click", (event) => {
          pageNumber = i;
          filterData();
        });
        paginationDiv.appendChild(pageButton);
      }
      //NEW CODE
      // Next Button
      let nextButton = document.querySelector("#next-button");
      if (pageNumber === totalPages) {
        nextButton.disabled = true;
      } else {
        nextButton.disabled = false;
        nextButton.addEventListener("click", (event) => {
          pageNumber++;
          filterData();
        });
      }
    }
    //NEW CODE
    // }

    filterData();
  });
    //NEW CODE

    function calculateAge(dateString) {
      var birthDate = new Date(dateString);
      var now = new Date();
      var age = now.getFullYear() - birthDate.getFullYear();
      if (now.getMonth() < birthDate.getMonth() || (now.getMonth() == birthDate.getMonth() && now.getDate() < birthDate.getDate())) {
        age--;
      }
      return age;
    }
    
    // OLD CODE
    //  filterData();

    // let nextPageButton = document.querySelector("#next-page");
    // let previousPageButton = document.querySelector("#previous-page");

    // nextPageButton.addEventListener("click", (event) => {
    //   offset += limit;
    //   page += 1;
    //   fetch(`/diagnos?limit=${limit}&offset=${offset}`)
    //     .then((response) => response.json())
    //     .then((diagnos) => {
    //       filterData();
    //     });
    // });

    // previousPageButton.addEventListener("click", (event) => {
    //   offset -= limit;
    //   page -= 1;
    //   fetch(`/diagnos?limit=${limit}&offset=${offset}`)
    //     .then((response) => response.json())
    //     .then((diagnos) => {
    //       filterData();
    //     });
    // });
  // });
  



    //   tableBody.innerHTML = "";
    //   filteredDiagnos.forEach((item) => {
    //     function calculateAge(dateString) {
    //       var birthDate = new Date(dateString);
    //       var now = new Date();
    //       var age = now.getFullYear() - birthDate.getFullYear();
    //       if (
    //         now.getMonth() < birthDate.getMonth() ||
    //         (now.getMonth() == birthDate.getMonth() &&
    //           now.getDate() < birthDate.getDate())
    //       ) {
    //         age--;
    //       }
    //       return age;
    //     }

    //     var age = calculateAge(item.birth_date);
    //     let row = document.createElement("tr");
    //     row.innerHTML = `
    //                 <td>${item.diagnos}</td>
    //                 <td>${age}</td>
    //                 <td>${item.address1}</td>
    //                 <td>${item.gender}</td>
    //             `;
    //     tableBody.appendChild(row);
    //   });
    // }

    // Initial data population
   




//   let tableBody = document.querySelector("#data-table tbody");
//   let filterDropdown = document.querySelector("#gender");
//   let filterDropdown2 = document.querySelector("#gender");

// fetch("/diagnos")
//   .then((response) => response.json())
//   .then((diagnos) => {
//     filterDropdown.addEventListener("change", (event) => {
//       let filteredDiagnos = diagnos;
//       if (event.target.value !== "") {
//         filteredDiagnos = diagnos.filter(
//           (item) => item.gender === event.target.value
//         );
//       }
//       tableBody.innerHTML = "";
//       filteredDiagnos.forEach((item) => {
//         function calculateAge(dateString) {
//           var birthDate = new Date(dateString);
//           var now = new Date();
//           var age = now.getFullYear() - birthDate.getFullYear();
//           if (
//             now.getMonth() < birthDate.getMonth() ||
//             (now.getMonth() == birthDate.getMonth() &&
//               now.getDate() < birthDate.getDate())
//           ) {
//             age--;
//           }
//           return age;
//         }

//         var age = calculateAge(item.birth_date);
//         let row = document.createElement("tr");
//         row.innerHTML = `
//                     <td>${item.diagnos}</td>
//                     <td>${age}</td>
//                     <td>${item.address1}</td>
//                     <td>${item.gender}</td>
//                 `;
//         tableBody.appendChild(row);
//       });
//     });

//     // Initial data population
//     diagnos.forEach((item) => {
//       function calculateAge(dateString) {
//         var birthDate = new Date(dateString);
//         var now = new Date();
//         var age = now.getFullYear() - birthDate.getFullYear();
//         if (
//           now.getMonth() < birthDate.getMonth() ||
//           (now.getMonth() == birthDate.getMonth() &&
//             now.getDate() < birthDate.getDate())
//         ) {
//           age--;
//         }
//         return age;
//       }

//       var age = calculateAge(item.birth_date);
//       let row = document.createElement("tr");
//       row.innerHTML = `
//                 <td>${item.diagnos}</td>
//                 <td>${age}</td>
//                 <td>${item.address1}</td>
//                 <td>${item.gender}</td>
//             `;
//       tableBody.appendChild(row);
//     });
//   });





    // let tableBody = document.querySelector("#data-table tbody");
    // let filterDropdown = document.querySelector("#filter-dropdown");

    // fetch("/diagnos")
    //   .then((response) => response.json())
    //   .then((diagnos) => {
    //     diagnos.forEach((item) => {
          

    //       function calculateAge(dateString) {
    //       var birthDate = new Date(dateString);
    //       var now = new Date();
    //       var age = now.getFullYear() - birthDate.getFullYear();
    //       if (now.getMonth() < birthDate.getMonth() || (now.getMonth() == birthDate.getMonth() && now.getDate() < birthDate.getDate())) {
    //         age--;
    //       }
    //       return age;
    //     }

    //       var age = calculateAge(item.birth_date);
    //       let row = document.createElement("tr");
    //       row.innerHTML = `
    //                 <td>${item.diagnos}</td>
    //                 <td>${age}</td>
    //                 <td>${item.address1}</td>
    //                 <td>${item.gender}</td>
    //             `;
    //       tableBody.appendChild(row);

    //     });
    //   });

      
</script>
    {{-- // function calculateAge(dateString) {
    //   var birthDate = new Date(dateString);
    //   var now = new Date();
    //   var age = now.getFullYear() - birthDate.getFullYear();
    //   if (now.getMonth() < birthDate.getMonth() || (now.getMonth() == birthDate.getMonth() && now.getDate() < birthDate.getDate())) {
    //     age--;
    //   }
    //   return age;
    // }
    // $(document).ready(function() {
    //     $.ajax({
    //         url: "/users",
    //         type: "GET",
    //         dataType: "json",
    //         success: function(data) {
    //           data.forEach(function(item) {
    //             var age = calculateAge(item.date_of_birth);
    //             var row = "<tr><td>" + item.diagnos + "</td><td>" + item.birth_date + "</td><td>" + age + "</td></tr>";
    //             $("#data-table").append(row);
    //     }); --}}




  <script src="{{ asset('js/bootstrap.min.js') }}"></script>

  <script src="{{ URL::asset('AdminSB/plugins/jquery/jquery.min.js') }}"></script>
	<!-- Bootstrap Core Js -->
	{{-- <script src="{{ URL::asset('AdminSB/plugins/bootstrap/js/bootstrap.js') }}"></script> --}}
	<!-- Waves Effect Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/node-waves/waves.js') }}"></script>
	<!-- Validation Plugin Js -->
	<script src="{{ URL::asset('AdminSB/plugins/jquery-validation/jquery.validate.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ URL::asset('AdminSB/js/admin.js') }}"></script>
	<script src="{{ URL::asset('AdminSB/js/pages/examples/sign-in.js') }}"></script>

</body>


</html> 

