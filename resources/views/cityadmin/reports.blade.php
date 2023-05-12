@extends('layouts.admin')

@section('title', 'Reports')

@section('content')
    <!---------------------------------------------- FILTERS ----------------------------------------------->
    <div class="card5 col-lg-11 col-md-11 col-sm-11 col-xs-11">

        <div class="row">
            <div class="col-md-2">
                <select name="" id="cases" class="form-control" v-model="diagnos" @change="index">
                    <option value="" selected>Cases</option>
                    {{-- <option v-for="item in diagnosis" :value="item.diagnos" >@{{ item.diagnos }}</option> --}}
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
                <select name="" id="location" class="form-control" v-model="location" @change="index">
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


                    {{-- <option v-for="item in locations" :value="item.address1">@{{ item.address1 }}</option> --}}
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
                <select name="" id="gender" class="form-control" v-model="gender" @change="index">
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
                <button onclick="window.print()" class="btn btn-warning form-control" id="print" name="print"
                    style="">Print</button>
            </div>

        </div>

        <!---------------------------------------------- FILTERS END ----------------------------------------------->
    </div>


    <!---------------------------------------------- TABLE ----------------------------------------------->

    <section id="app" class="content">
        <div class="card col-lg-11 col-md-11 col-sm-11 col-xs-11">
            <div class="container-fluid">
                <div class="">
                    <div class="header">
                        <h2 style="padding: 10px;">
                            <h5 class="hk-sec-title">Disease Record</h5>
                            <p class="mb-40">Apply filters to generate report.</p>
                        </h2>
                    </div>
                    <div class="body">

                        <div id="table-container"></div>


                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                id="data-table">
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
											<td>@{{ result.diagnos }}</td>
											<td>@{{ getAge(result.birth_date) }}</td>
											<td>@{{ result.address1 }}</td>
											<td>@{{ result.gender }}</td>
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

    <!---------------------------------------------- FILTERS END ----------------------------------------------->

@endsection


@section('scripts')
    <script>
        let tableBody = document.querySelector("#data-table tbody");
        let genderDropdown = document.querySelector("#gender");
        let casesDropdown = document.querySelector("#cases");
        let locDropdown = document.querySelector("#location");
        let searchInput = document.querySelector("#search");
        let searchAge = document.querySelector("#search_age");

        // let pageSize = 5;
        // let pageNumber = 1;

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
                    filteredDiagnos.forEach((item) => {
                        let row = document.createElement("tr");
                        row.innerHTML = `
                            <td>${item.diagnos}</td>
                            <td>${calculateAge(item.birth_date)}</td>
                            <td>${item.address1}</td>
                            <td>${item.gender}</td>
                            `;
                        tableBody.appendChild(row);
                    });
                }



                function calculateAge(dateString) {
                    var birthDate = new Date(dateString);
                    var now = new Date();
                    var age = now.getFullYear() - birthDate.getFullYear();
                    if (now.getMonth() < birthDate.getMonth() || (now.getMonth() == birthDate.getMonth() && now
                        .getDate() < birthDate.getDate())) {
                        age--;
                    }
                    return age;
                }

                // OLD CODE
                filterData();
            });


        window.onload = function() {
            var print = document.querySelector('button');
            print.style.display = 'block';
        };
    </script>

@endsection


