@extends('layouts.admin')

@section('title', 'Analytics')

@section('content')
    <form method="POST" action="{{route('forecast')}}">
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
                        <option value="Dengue">Dengue</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="Diabetes">Malaria</option>
                    </select>
                </div>
                

                {{-- <div class="col-md-3">
            <div class="form-outline">
                <button class="btn btn-warning form-control" style="">Analyze</button>
            </div>
            </div> --}}

                <div class="col-md-3">

                    <div class="form-outline">
                        {{-- <button class="btn btn-warning form-control" style="">Analyze</button> --}}
                        <button class="btn btn-primary" id="printButton" name="print" type="submit" >Analyze</button>
                    </div>
                </div>
                
                

            </div>
        </div>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['diagnosis'])){
        $diagnosis = $_POST['diagnosis'];
        $command = 'python G:\laragon\www\kim-polyclinic\python\newforecast.py'.$diagnosis;
        exec($command);

        echo'<div class = "card-body">';
        echo'<div class = "table-responsive">';
        echo'<img src="G:\laragon\www\kim-polyclinic\python\pic.png" alt="Image">';
        echo'</div>';
        echo'</div>';
    }

}

?>
@endsection
