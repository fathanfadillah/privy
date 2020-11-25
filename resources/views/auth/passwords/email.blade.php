@extends('layouts.app')
@section('style')
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

    .subtitle {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
        color: #999999;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 11px;
        font-weight: lighter;
        letter-spacing: 0.2px;
        margin: 0.5rem 0rem 2rem;
        text-rendering: optimizelegibility;
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card my-auto">
               
                <div class="card-body mt-n5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img class="icon" src="{{asset('../images/privy.svg')}}" alt="" height="95" width="95">
                    <h3 class="title font-weight-bold mt-n3">Forgot PrivyID or Password</h3>
                <div class="subtitle mt-5 pt-1 mb-4">Please type your registered email address to
                    receive your PrivyID
                    and
                    link
                    to
                    change your password</div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row mt-n1 mb-5">
                            <div class="mx-auto">
                                <input placeholder="Email" id="email" type="email" class="input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-5">
                            <div class="mx-auto">
                                <button type="submit" class="continue font-weight-bold">
                                    CONTINUE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
