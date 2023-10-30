@extends('home')

@section('title', 'Login')

@section('textContent', "Login form")

@section('style')
    <style>
        @keyframes jello-horizontal {
            0% {
                transform: scale3d(1, 1, 1);
            }

            30% {
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                transform: scale3d(0.95, 1.05, 1);
            }

            75% {
                transform: scale3d(1.05, 0.95, 1);
            }

            100% {
                transform: scale3d(1, 1, 1);
            }
        }

        @media only screen and (max-width: 575px) {
            .regFormText {
                display: none;
            }
        }

        button {
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            border: 3px solid #315cfd;
            border-radius: .25rem;
            transition: all 0.3s;
            cursor: pointer;
            background: white;
            font-size: 1.2em;
            font-weight: 550;
            font-family: 'Montserrat', sans-serif;
        }

        button:hover {
            background: #315cfd;
            color: white;
            font-size: 1.5em;
        }
    </style>

@section('content')
    <div class="py-5 scol-md-7 col-lg-7 ">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="username" class="form-label text-light">Username</label>
                        <input name="username" type="text" class="form-control" id="username" required>
                    </div>
                    <div class="col-12">
                        <label for="passw" class="form-label text-light">Password</label>
                        <input name="passw" type="password" class="form-control" id="passw" placeholder="******" required>
                    </div>
                </div>
                <br>
                <button class="auth col-12" value="Submit" type="submit">
                    Sign up
                    <div class="arrow-wrapper">
                        <div class="arrow"></div>
                    </div>
                </button>
                <br>
                <div class="col-md-6 align-self-end text-light">Create
                    <a class="text-warning" href="{{ route('register') }}">account</a>
                </div>
            </form>
    </div>
@endsection
