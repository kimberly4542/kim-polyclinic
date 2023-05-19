@extends('layouts.admin')

@section('title', 'Patient')

@section('content')
    <!---------------------------------------------- FORM ----------------------------------------------->
    <section>
        <div class="panel1">
            <div class="card col-lg-10">
                <h6>Please select csv file to import</h6>
                <form method="POST" action="{{ route('patients.import') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="file" name="csv_file" class="form-control-file" id="csv_file" accept=".csv">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>

                <hr class="mb-4">
                <h6>Or input a single patient</h6>
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
                                    <small class="text-danger">{{ $errors->first('fname') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="form3Example2">Middle name</label>
                                <input type="text" name="mname" id="form3Example2" value="{{ old('mname') }}"
                                    class="form-control" />
                                @if ($errors->has('mname'))
                                    <small class="text-danger">{{ $errors->first('mname') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="form-group">
                                <label class="form-label" for="form3Example1">Last name</label>
                                <input type="text" name="lname" id="form3Example1" value="{{ old('lname') }}"
                                    class="form-control" />
                                @if ($errors->has('lname'))
                                    <small class="text-danger">{{ $errors->first('lname') }}</small>
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
                                <input id="birthdate" name="birth_date" autocomplete="off" value="{{ old('birth_date') }}"
                                    class="date-picker form-control">
                                @if ($errors->has('birth_date'))
                                    <small class="text-danger">{{ $errors->first('birth_date') }}</small>
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
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                    </option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                                @if ($errors->has('gender'))
                                    <small class="text-danger">{{ $errors->first('gender') }}</small>
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
                                        <small class="text-danger">{{ $errors->first('contact_no') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label class="form-label" for="form3Example1">Citizenship</label>
                                    <input type="text" name="citizenship" id="form3Example1" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-12">
                            <div class="form-group">
                                <label class="form-label" for="form3Example1">Address</label>
                                <input type="text" name="address1" id="form3Example1" value="{{ old('address1') }}"
                                    class="form-control" />
                                @if ($errors->has('address1'))
                                    <small class="text-danger">{{ $errors->first('address1') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="form3Example1">Diagnosis</label>
                                <input type="text" name="diagnosis" id="form3Example1"
                                    value="{{ old('diagnosis') }}" class="form-control" />
                                @if ($errors->has('diagnosis'))
                                    <small class="text-danger">{{ $errors->first('diagnosis') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="form3Example1">Date Diagnosed</label>
                                <input id="diagnosed-date" autocomplete="off" name="diagnosed_date"
                                    value="{{ old('diagnosed_date') }}" class="date-picker form-control">
                                @if ($errors->has('diagnosed_date'))
                                    <small class="text-danger">{{ $errors->first('diagnosed_date') }}</small>
                                @endif
                            </div>
                        </div>

                    </div>
                    {{-- <button type="submit" class="btn btn-dark btn-block mb-4" id="btn-submit">Add Patient</button> --}}
                    <button type="submit" class="btn btn-primary form-control btn-lg" id="btn-submit">Add
                        Patient</button>
                </form>
            </div>
        </div>
    </section>
    <!---------------------------------------------- FORM END----------------------------------------------->
@endsection

@push('scripts')
    <script>
        $('#birthdate').datepicker({
            dateFormat: "yy-mm-dd",
            maxDate: 0, // Restrict selecting future dates
            changeYear: true, // Display year dropdown
            yearRange: "-100:+0", // Set the range of selectable years
            changeMonth: true // Display month dropdown
        });

        $('#diagnosed-date').datepicker({
            dateFormat: "yy-mm-dd",
            maxDate: 0, // Restrict selecting future dates
            changeYear: true, // Display year dropdown
            yearRange: "-100:+0", // Set the range of selectable years
            changeMonth: true // Display month dropdown
        });
    </script>
@endpush
