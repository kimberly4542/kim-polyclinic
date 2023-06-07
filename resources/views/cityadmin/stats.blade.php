@extends('layouts.admin')

@section('title', 'Analytics')

@section('content')
    <form method="POST" action="{{route('forecast')}}">
    @csrf
        <div class="card5 col-lg-11 col-md-11 col-sm-11 col-xs-11">
            <div class="row">

                <!-- <label class="form-label" for="">From: </label>
                <div class="col-md-3">
                    <div class="form-outline">

                        <input type="date" class="date-picker form-control">
                    </div>
                </div> -->

                <!-- <label class="form-label" for="">To: </label>
                <div class="col-md-3">
                    <div class="form-outline">
                        <input type="date" class="date-picker form-control">
                    </div>
                </div> -->

                <div class="col-md-2">
                    <select name="diagnosis" id="diagnosis" class="form-control" v-model="gender" @change="index">
                        <option value="" selected>Sickness</option>
                        <option value="dengue">Dengue</option>
                        <option value="diabetes">Diabetes</option>
                        <option value="malaria">Malaria</option>
                    </select>
                </div>
                

                {{-- <div class="col-md-3">
            <div class="form-outline">
                <button class="btn btn-warning form-control" >Analyze</button>
            </div>
            </div> --}}

                <div class="col-md-3">

                    <div class="form-outline">
                        {{-- <button class="btn btn-warning form-control" >Analyze</button> --}}
                        <button class="btn btn-primary" id="printButton" name="print" type="submit" >Analyze</button>
                    </div>
                </div>
  

                @if($hasImage)
                    <div><img src="{{url('image/pic3.png')}}"></div>
                    
    
                @endif
                
             

            </div>
        </div>
    </form>
@isset($csvData)
<table style="border-collapse: collapse; width: 100%; border: 1px solid #000;">
    <thead>
        <tr>
            <th style="border: 1px solid #000; padding: 8px;">R2 Score</th>
            <th style="border: 1px solid #000; padding: 8px;">Mean Absolute Error</th>
            <th style="border: 1px solid #000; padding: 8px;">Mean Squared Error</th>
            <th style="border: 1px solid #000; padding: 8px;">Root Mean Squared Error</th>
            <th style="border: 1px solid #000; padding: 8px;">Mean Absolute Percentage Error</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($csvData as $index => $row)
            @if($index === 1)
        <tr>
            <td style="border: 1px solid #000; padding: 8px;">{{$row[0]}}</td>
            <td style="border: 1px solid #000; padding: 8px;">{{$row[1]}}</td>
            <td style="border: 1px solid #000; padding: 8px;">{{$row[2]}}</td>
            <td style="border: 1px solid #000; padding: 8px;">{{$row[3]}}</td>
            <td style="border: 1px solid #000; padding: 8px;">{{$row[4]}}</td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endisset




<!-- <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST'){

//     if(isset($_POST['diagnosis'])){
//         $diagnosis = $_POST['diagnosis'];
//         $command = 'python G:\laragon\www\kim-polyclinic\python\newforecast.py'.$diagnosis;

//         exec($command);

//         echo'<div class = "card-body">';
//         echo'<div class = "table-responsive">';
//         echo'<img src="G:\laragon\www\kim-polyclinic\public\image\pic3.png" alt="Image">';
//         echo'</div>';
//         echo'</div>';
//     }

// }

?> -->
@endsection
