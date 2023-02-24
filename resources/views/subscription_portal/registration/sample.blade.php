@extends('layouts.style')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="row clearfix">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Main Features</h2>
                            </div>
                            <div class="body">
                                <div class="clearfix">
                                    <div class="col-lg-12">
                                        @foreach($information as $data)
                                        <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                            <p align="center">{{ $data->main_module }}</p>
                                        </div>
                                        <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                            <p align="center">{{ $data->lvl1 }}</p>
                                        </div>
                                        <div class="center" style="border:1px solid #ccc; padding: 10px;border-radius: 4px;">
                                            <p align="center">{{ $data->lvl2 }}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-success waves-effect btn-block">USE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Level 1 Features</h2>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Level 2 Features</h2>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="header" style="background-color: #00D9A3; border-top-right-radius: 4px; border-top-left-radius: 4px;">
                                <h2 class="color-font" style="color: #fff; font-size: 18px">Most use feature in Level 3 Features</h2>
                            </div>
                        </div>
                    </div> -->                                                
                </div>
            </div>
        </div>
    </section>
@endsection

@section('myScripts')
    
@endsection