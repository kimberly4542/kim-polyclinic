@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4">
            <div class="login-logo">
                <a href="{{ url('/') }}">Polyclinic Management System</a>
                <small style="color: rgb(255, 189, 89);">City Admin Portal</small>
            </div>
            <div class="col-md-12">
                <div class="login-form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h4 class="mb-4">Log in</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text material-icons" id="basic-addon1">person</span>
                            </div>
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text material-icons" id="basic-addon2">lock</span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                aria-label="Username" aria-describedby="basic-addon2">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="citySubmit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
