@extends('home')

@section('title', 'Register')

@section('textContent', 'Registration form')

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
@endsection

@section('content')
    <main>
        <div class="row justify-content-md-center">
            <div class="col-md-7 col-lg-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label text-light">First name</label>
                            <input name="firstName" type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label text-light">Last name</label>
                            <input name="lastName" type="text" class="form-control" id="lastName" required>
                        </div>
                        <div class="col-12">
                            <label for="cellNum" class="form-label text-light">Cellphone Number</label>
                            <input name="cellNum" type="text" onkeypress="validate(event)" class="form-control"
                                id="cellNum" placeholder="09*********" min="11" maxlength="11" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="email" class="form-label text-light">Email</label>
                            <input name="email" type="email" class="form-control" id="email"
                                placeholder="you@google.com" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="username" class="form-label text-light">Username</label>
                            <input name="username" type="text" class="form-control" id="username" required>
                        </div>
                        <div class="col-12">
                            <label for="passw" class="form-label text-light">Password</label>
                            <input name="passw" type="password" class="form-control" id="passw" placeholder="******"
                                required>
                        </div>
                        <div class="col-12">
                            <label for="address" class="form-label text-light">Address</label>
                            <input name="address" type="text" class="form-control" id="address"
                                placeholder="Barangay or Street" required>
                        </div>
                    </div>
                    <br>
                    {{-- <div class="col-12"> --}}
                    <button>
                        Submit
                    </button>

                    {{-- </div> --}}
                    <br>
                    <div class="col-md-6 align-self-end text-light">already have an
                        <a class="text-warning" href="{{ route('login') }}">account</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <script>
        function validate(evt) {
            var theEvent = evt || window.event;

            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]/;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>
@endsection
