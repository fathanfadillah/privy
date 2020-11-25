<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privy Auth</title>

    @include('resources.style')

    <style>
    .forgot {
        color: #999999;
    }

    .forgot:hover {
        color: #999999;
    }

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
        margin-top: 0.25rem;
        padding: 0.6rem 2rem;
        text-align: center;
        text-rendering: optimizelegibility;
        text-transform: uppercase !important;
        transition: color 0.15s ease-in-out 0s, background-color 0.15s ease-in-out 0s, border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        user-select: none;
        vertical-align: middle;
    }

    .register:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: rgb(255, 255, 255);
        text-decoration: none;
    }

    .register:active {
        background-color: #dc3545;
        border-color: #dc3545;
        box-shadow: rgba(220, 53, 69, 0.5) 0px 0px 0px 0.2rem;
        color: #ffffff;
        text-decoration: none;
    }

    .register:focus {
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
        height: 51px;
        letter-spacing: 1px;
        line-height: 1.5;
        margin-top: 8rem;
        padding: 0px 1.25rem;
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
        /* -ms-transform: translateY(-50%); */
        transform: translateY(25%);
    }

    .spanRegister {
        -webkit-font-smoothing: antialiased;
        box-sizing: border-box;
        color: #777777;
        display: block !important;
        font-family: "Red Hat Text", sans-serif !important;
        font-size: 80%;
        font-weight: 400;
        margin-top: 0.5rem;
        text-rendering: optimizelegibility;
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
        font-size: 12px;
        font-weight: normal;
        letter-spacing: 0.2px;
        text-rendering: optimizelegibility;
    }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="card row h-100 justify-content-center">
            <div class="card-body text-center">
                <img class="icon mt-n5" src="{{asset('../images/privy.svg')}}" alt="" height="95" width="95">
                <h3 class="title font-weight-bold mt-n3">Forgot PrivyID or Password</h3>
                <div class="subtitle mt-5 pt-1 mb-4 font-weight-light">Please type your registered email address to
                    receive your PrivyID
                    and
                    link
                    to
                    change your password</div>
                <form action="">
                    <div class=my-1>
                        <input class="input my-2" type="text" class="form-control" id="email" placeholder="Email">

                        <input class="input my-3" type="text" class="form-control" id="konfirmasi"
                            placeholder="Confirmation Email">
                    </div>
                    <div class="">
                        <button type="submit" class="continue mt-4 font-weight-bold h-50 w-50">CONTINUE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@include('resources.script')

</html>