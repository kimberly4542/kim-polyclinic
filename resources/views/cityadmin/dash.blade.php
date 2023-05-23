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
            <canvas id="age-group"></canvas>
        </div>
    </div>
    <br>
    <div class="card3">
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
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"
        integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.1.2/chart.umd.js"></script>


    <script>
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).data('value')
            }, {
                duration: 1000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(this.Counter.toFixed(0));
                }
            });
        });

        var chartData = {!! json_encode($chartData) !!};

        console.log('chartData', chartData)

        var labels = chartData.map(function(item) {
            return item.age;
        });

        var data = chartData.map(function(item) {
            var percentage = Object.values(item.data).map(function(dataItem) {
                return dataItem.percentage;
            });

            return percentage;
        }).flat();

        var backgroundColors = chartData.map(function(item) {
            return Object.values(item.data).map(function(dataItem) {
                return dataItem.color;
            });
        }).flat();

        new Chart($('#age-group'), {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: backgroundColors,
                }],
            }
        });
    </script>
@endpush
