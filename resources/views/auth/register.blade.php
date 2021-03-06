@extends('layouts.app')
@section('style')
<title>Privy Register</title>
<style>
    .continue {
        -webkit-font-smoothing: antialiased;
        appearance: button;
        background-color: #dc3545;
        border: 1px solid transparent;
        border-color: #dc3545;
        border-radius: 2rem;
        box-shadow: rgb(228, 46, 44) 0px 8px 13px -8px;
        box-sizing: border-box;
        color: #ffffff;
        cursor: pointer;
        display: inline-block;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 0.75rem;
        font-weight: 500;
        letter-spacing: 0.03rem;
        line-height: 1.5;
        padding: 0.6rem 2rem;
        text-align: center;
        text-rendering: optimizelegibility;
        transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        user-select: none;
        vertical-align: middle;
    }

    .continue:hover {
        background-color: #c82333;
        border-color: #bd2130;
        color: #ffffff;
        text-decoration: none;
    }

    .continue:active {
        background-color: #c82333;
        border-color: #bd2130;
        color: #ffffff;
        text-decoration: none;
    }

    .continue:focus {
        box-shadow: rgba(225, 83, 97, 0.5) 0px 0px 0px 0.2rem;
    }

    .register {
        -webkit-font-smoothing: antialiased;
        background-color: transparent;
        border: 1px solid transparent;
        border-color: #dc3545;
        border-radius: 2rem;
        box-shadow: rgb(228, 46, 44) 0px 8px 13px -8px;
        box-sizing: border-box;
        color: rgb(220, 53, 69);
        display: inline-block;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 0.75rem;
        font-weight: 500;
        letter-spacing: 0.03rem;
        line-height: 1.5;
        margin-top: 0.25rem !important;
        padding: 0.6rem 2rem;
        text-align: center;
        text-rendering: optimizelegibility;
        text-transform: uppercase !important;
        transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        user-select: none;
        vertical-align: middle;
    }

    .login:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: rgb(255, 255, 255);
        text-decoration: none;
    }

    .login:active {
        background-color: #dc3545;
        border-color: #dc3545;
        box-shadow: rgba(220, 53, 69, 0.5) 0px 0px 0px 0.2rem;
        color: #ffffff;
        text-decoration: none;
    }

    .login:focus {
        box-shadow: rgba(220, 53, 69, 0.5) 0px 0px 0px 0.2rem;
        color: rgb(167, 29, 42) !important;
        text-decoration: none;
    }

    .input {
        -webkit-font-smoothing: antialiased;
        background-clip: padding-box;
        background-color: #ffffff;
        border: 1px solid rgb(206, 212, 218);
        border-color: rgb(238, 238, 238) !important;
        border-radius: 1.5rem !important;
        box-sizing: border-box;
        color: #777777;
        display: block;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 1rem;
        font-weight: 400;
        letter-spacing: 1px;
        line-height: 1.5;
        text-rendering: optimizelegibility;
        transition: all 0.2s ease-in-out 0s;
        width: 100%;
    }

    .input:hover {
        background-color: #ffffff;
        border: 1px solid rgb(204, 204, 204);
        border-color: #80bdff;
        box-shadow: rgb(165, 173, 179) 0px 10px 20px -10px;
        color: #495057;
        outline: 0px;
    }

    .card {
        -webkit-font-smoothing: antialiased;
        background-color: #ffffff;
        border: 1px solid rgb(239, 239, 239);
        border-radius: 18px;
        box-shadow: rgba(161, 188, 208, 0.5) 0px 20px 40px -15px;
        box-sizing: border-box;
        color: #777777;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 16px;
        margin: auto;
        padding: 2rem 1.75rem;
        text-align: center;
        text-rendering: optimizelegibility;
        width: 400px;
    }

    .title {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
        color: rgb(220, 53, 69) !important;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 20px;
        letter-spacing: 0.2px;
        text-rendering: optimizelegibility;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center mt-2">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body mx-auto mt-n4">
                    <img class="icon mt-n4" src="{{asset('/images/privy.svg')}}" alt="" height="95" width="95">
                    <h3 class="title font-weight-bold mt-n3 mb-4 pb-4">Register</h3>
                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="">
                                <input placeholder="Username" id="name" type="text" class="input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="">
                                <input placeholder="Email" id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="">
                                <input placeholder="Password" id="password" type="password" class="input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="">
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mx-auto">
                                <button type="submit" class="continue">
                                    REGISTER
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="mx-auto">
                            <div class="my-1">
                                <a href="{{ route('login') }}" class="text-danger">
                                    You have an account
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
