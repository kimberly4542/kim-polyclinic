@extends('layouts.admin')

@section('title', 'Reports')

@section('content')
    <div>

        <!-- Begin Table -->
        <div class="card mb-3">
            <div class="card-header">
                <h4>Disease Record</h4>
                <p>Apply filters to generate report.</p>

                {{-- Begin filter --}}
                <div class="row mb-4">
                    <div class="col-md-2">
                        <select id="filterCases" class="form-control">
                            <option value="" selected>All cases</option>
                            @foreach ($cases_options as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select id="filterLocation" class="form-control">
                            <option value="" selected>All location</option>
                            @foreach ($address_options as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <select id="filterGender" class="form-control">
                            <option value="" selected>All gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>

                    <div class="col-sm-3">
                        <input type="text" id="filterSearch" placeholder="Search here..." class="form-control">
                    </div>

                    <div class="col-sm-1">
                        <button class="btn btn-primary" id="printButton" name="print">Print</button>
                    </div>
                </div>
                {{-- End filter --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="reportsTable" width="100%">
                    </table>
                </div>
            </div>
        </div>
        <!-- End Table -->
    </div>
@endsection

@push('scripts')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/skin/bootstrap4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('AdminSB/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('AdminSB/js/pages/tables/jquery-datatable.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>


    <script>
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

        const getReport = async () => {
            const response = await fetch('/diagnosis');
            const data = await response.json();

            // Display data on dataTable
            const table = $('#reportsTable').DataTable({
                data: data,
                columnDefs: [{
                    targets: 1,
                    render: function(data, type, row, meta) {
                        if (row && row.birth_date) {
                            var birthdateParts = row.birth_date.split("-");
                            var birthdate = new Date(birthdateParts[0], birthdateParts[1] - 1,
                                birthdateParts[2]);
                            var today = new Date();
                            var age = today.getFullYear() - birthdate.getFullYear();
                            var monthDiff = today.getMonth() - birthdate.getMonth();

                            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthdate
                                    .getDate())) {
                                age--;
                            }

                            if (!isNaN(age)) {
                                return age;
                            } else {
                                return 'NAN'
                            }
                        }

                        return "";
                    }
                }],
                columns: [{
                        data: 'diagnosis',
                        title: 'Case'
                    },
                    {
                        data: 'birth_date',
                        title: 'Age'
                    },
                    {
                        data: 'address1',
                        title: 'Location'
                    },
                    {
                        data: 'gender',
                        title: 'Gender'
                    }
                ],
                buttons: [
                    'copy', 'excel', 'pdf', 'print' // Add the print button
                ],
            });


            // Add event listener to the case filter
            $('#filterCases').on('change', function() {
                const filterValue = $(this).val();
                if (filterValue === '') {
                    table.column(0).search('').draw();
                } else {
                    table.column(0).search(filterValue)
                        .draw();
                }
            });

            // Add event listener to the location filter
            $('#filterLocation').on('change', function() {
                const filterValue = $(this).val();
                if (filterValue === '') {
                    table.column(2).search('').draw();
                } else {
                    table.column(2).search('^' + filterValue + '$', true, false).draw();
                }
            });

            // Add event listener to the gender filter
            $('#filterGender').on('change', function() {
                const filterValue = $(this).val();
                if (filterValue === '') {
                    table.column(3).search('').draw();
                } else {
                    table.column(3).search('^' + filterValue + '$', true, false).draw();
                }
            });

            // search filter
            $('#filterSearch').keyup(function() {
                table.search($(this).val()).draw();
            });

            // Print button
            $('#printButton').on('click', function() {
                table.button('.buttons-print').trigger();
            });
        }

        getReport();
    </script>
@endpush
