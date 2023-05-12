@extends('layouts.admin')

@section('title', 'Patient')

@section('content')
    <!---------------------------------------------- FORM ----------------------------------------------->
    <section class="content">
        <div class="container-fluid">
            <div class="panel1">
                <div class="card col-lg-10">
                    <form action="{{ route('patients.store') }}" method="POST">
                        @csrf

                        <h4 class="mb-4">Basic Information</h4>
                        <div class="row">
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">First name</label>
                                    <input type="text" name="fname" value="{{ old('fname') }}" id="form3Example1"
                                        class="form-control" />
                                    @if ($errors->has('fname'))
                                        <span class="text-danger">{{ $errors->first('fname') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example2">Middle name</label>
                                    <input type="text" name="mname" id="form3Example2" value="{{ old('mname') }}"
                                        class="form-control" />
                                    @if ($errors->has('mname'))
                                        <span class="text-danger">{{ $errors->first('mname') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Last name</label>
                                    <input type="text" name="lname" id="form3Example1" value="{{ old('lname') }}"
                                        class="form-control" />
                                    @if ($errors->has('lname'))
                                        <span class="text-danger">{{ $errors->first('lname') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Suffix</label>
                                    <input type="text" name="suffix" id="form3Example1" class="form-control" />

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="form-label" for="">Birthdate</label>
                                    <input type="date" name="birth_date" value="{{ old('birth_date') }}"
                                        class="date-picker form-control">
                                    @if ($errors->has('birth_date'))
                                        <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Height</label>
                                    <input type="text" name="height" id="form3Example1" class="form-control" />
                                </div>



                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Weight</label>
                                    <input type="text" name="weight" id="form3Example1" class="form-control" />
                                </div>



                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Bloodtype</label>
                                    <input type="text" name="bloodtype" id="form3Example1" class="form-control" />
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">Select</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female
                                        </option>
                                    </select>
                                    @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Civil Status</label>
                                    <select class="form-control" name="civil_status">
                                        <option value="">Select</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Widowed">Widowed</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-label" for="form3Example1">Contact Number</label>
                                        <input type="text" name="contact_no" id="form3Example1"
                                            value="{{ old('contact_no') }}" class="form-control" />

                                        @if ($errors->has('contact_no'))
                                            <span class="text-danger">{{ $errors->first('contact_no') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-label" for="form3Example1">Citizenship</label>
                                        <input type="text" name="citizenship" id="form3Example1"
                                            class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="col col-lg-12">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Address</label>
                                    <input type="text" name="address1" id="form3Example1"
                                        value="{{ old('address1') }}" class="form-control" />
                                    @if ($errors->has('address1'))
                                        <span class="text-danger">{{ $errors->first('address1') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Diagnosis</label>
                                    <input type="text" name="diagnos" id="form3Example1" class="form-control" />
                                </div>
                            </div>


                        </div>
                        <br>
                        {{-- <button type="submit" class="btn btn-dark btn-block mb-4" id="btn-submit">Add Patient</button> --}}
                        <button type="submit" class="btn btn-warning form-control" id="btn-submit">Add
                            Patient</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!---------------------------------------------- FORM END----------------------------------------------->
@endsection
