@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <!---------------------------------------------- CARD DECK ----------------------------------------------->
    <div class="card-deck">

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h5 class="card-title">Dengue Cases</h5>
                    </div>
                    <div>
                        <span class="text-success font-14 font-weight-500">{{ $denguePercentage }}%</span>
                    </div>
                </div>
                <div>
                    <div class="text-center" style="text-align: center; margin-bottom: -25px">
                        <span class="d-block display-4 text-dark mb-5 count" style="font-weight: 400"
                            data-value="{{ $dengueCount }}">{{ $dengueCount }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h5 class="card-title">Malaria Cases</h5>
                    </div>
                    <div>
                        <span class="text-success font-14 font-weight-500">{{ $malariaPercentage }}%</span>
                    </div>
                </div>
                <div>
                    <div class="text-center" style="text-align: center; margin-bottom: -25px">
                        <span class="d-block display-4 text-dark mb-5 count" style="font-weight: 400"
                            data-value="{{ $malariaCount }}">{{ $malariaCount }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h5 class="card-title">Diabetes Cases</h5>
                    </div>
                    <div>
                        <span class="text-success font-14 font-weight-500">{{ $diabetesPercentage }}%</span>
                    </div>
                </div>
                <div>
                    <div class="text-center" style="text-align: center; margin-bottom: -25px">
                        <span class="d-block display-4 text-dark mb-5 count" style="font-weight: 400"
                            data-value="{{ $diabetesCount }}">{{ $diabetesCount }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <h5 class="card-title">Stroke Cases</h5>
                    </div>
                    <div>
                        <span class="text-success font-14 font-weight-500">{{ $strokePercentage }}%</span>
                    </div>
                </div>
                <div>
                    <div class="text-center" style="text-align: center; margin-bottom: -25px">
                        <span class="d-block display-4 text-dark mb-5 count" style="font-weight: 400"
                            data-value="{{ $strokeCount }}">{{ $strokeCount }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!---------------------------------------------- CARD DECK END ----------------------------------------------->


    <!---------------------------------------------- CHARTS OR STATS ----------------------------------------------->
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="{{ route('dashboard.update') }}" class="mb-4">
                @method('POST')
                @csrf
                <div class="input-group" style="align-items: center">
                    <label for="disease" class="mr-2">Filter by disease</label>
                    <select name="disease" id="disease" class="form-control">
                        <option value="" selected>Select disease</option>
                        <option value="Dengue" {{ $selectedDisease == 'Dengue' ? 'selected' : '' }}>Dengue</option>
                        <option value="Stroke" {{ $selectedDisease == 'Stroke' ? 'selected' : '' }}>Stroke</option>
                        <option value="Malaria" {{ $selectedDisease == 'Malaria' ? 'selected' : '' }}>Malaria</option>
                        <option value="Diabetes" {{ $selectedDisease == 'Diabetes' ? 'selected' : '' }}>Diabetes
                        </option>
                    </select>
                    <button type="submit" class="btn btn-primary ml-2">Update</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h6>{{ $selectedDisease }} Cases by Province</h6>

                <div id="address-group" style="width: 500px; height: 300px"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <h6>{{ $selectedDisease }} Cases by Age Group</h6>
                <div id="age-group" style="width: 500px; height: 300px"></div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body pa-0 ma-0">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Disease</th>
                                        @foreach ($yearlyCounts as $year => $counts)
                                            <th>{{ $year }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($yearlyCounts['2019'] as $disease => $count)
                                        <tr>
                                            <td>{{ $disease }}</td>
                                            @foreach ($yearlyCounts as $year => $counts)
                                                <td>{{ $counts[$disease] ?? 0 }}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <h6>Cases by Gender</h6>
                <div id="gender-group" style="width: 400px;"></div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.2/chart.umd.js"></script> --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        // Load Charts and the corechart package.
        google.charts.load('current', {
            'packages': ['corechart', 'bar']
        });

        // Draw pie chart for group by address dengue
        google.charts.setOnLoadCallback(drawAddressGroup);

        // Draw pie chart for age group dengue
        google.charts.setOnLoadCallback(drawAgeGroup);

        // Draw column chart for gender group
        google.charts.setOnLoadCallback(drawGenderGroup);

        function drawAddressGroup() {
            var chartwidth = $('#address-group').width();
            console.log('chartwidth', chartwidth)
            var data = google.visualization.arrayToDataTable([
                ['Province', 'Number of Cases'],
                <?php echo $chartDataAddress; ?>
            ]);

            var options = {
                width: '100%',
                height: 300,
                chartArea: {
                    width: '94%',
                    height: '75%',
                }
            };


            var chart = new google.visualization.PieChart(document.getElementById('address-group'));
            chart.draw(data, options);
        }

        function drawAgeGroup() {
            var chartwidth = $('#age-group').width();
            var data = google.visualization.arrayToDataTable([
                ['Province', 'Number of Cases'],
                <?php echo $chartDataAgeGroup; ?>
            ]);

            var options = {
                width: '100%',
                height: 300,
                chartArea: {
                    width: '94%',
                    height: '75%',
                }
            };


            var chart = new google.visualization.PieChart(document.getElementById('age-group'));
            chart.draw(data, options);
        }

        function drawGenderGroup() {
            var chartwidth = $('#gender-group').width();
            var data = google.visualization.arrayToDataTable([
                <?php echo $columnchartData; ?>
            ]);

            var options = {
                width: chartwidth,
                height: 300,
            };


            var chart = new google.charts.Bar(document.getElementById('gender-group'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
@endpush
