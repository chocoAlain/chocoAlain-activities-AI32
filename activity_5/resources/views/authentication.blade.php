@extends('home')

@section('title', env('APP_NAME'))

@section('textContent', 'Welcome')

@section('style')
    <style>
        a {
            text-decoration: none;
            color: inherit;
            background-color: transparent;
            border: none;
            padding: 0;
            margin: 0;
            font-weight: inherit;
            font-style: inherit;
        }

        a:hover {
            text-decoration: none;
            color: inherit;
            background-color: transparent;
            border: none;
            padding: 0;
            margin: 0;
            font-weight: inherit;
            font-style: inherit;
        }

        .button {
            margin: 0;
            height: auto;
            background: transparent;
            padding: 0;
            border: none;
            cursor: pointer;
        }

        .button {
            --border-right: 6px;
            --text-stroke-color: rgba(255, 255, 255, 0.6);
            --animation-color: #37FF8B;
            --fs-size: 2em;
            letter-spacing: 3px;
            text-decoration: none;
            font-size: var(--fs-size);
            font-family: "Arial";
            position: relative;
            text-transform: uppercase;
            color: transparent;
            -webkit-text-stroke: 1px var(--text-stroke-color);
        }

        .hover-text {
            position: absolute;
            box-sizing: border-box;
            content: attr(data-text);
            color: var(--animation-color);
            width: 0%;
            inset: 0;
            border-right: var(--border-right) solid var(--animation-color);
            overflow: hidden;
            transition: 0.5s;
            -webkit-text-stroke: 1px var(--animation-color);
        }

        .button:hover .hover-text {
            width: 100%;
            filter: drop-shadow(0 0 23px var(--animation-color))
        }
    </style>
@endsection

@section('content')
    <div class="row justify-content-center align-items-center g-5">
        <div class="col-12">
            <button class="button" data-text="Awesome">
                <a href="/login">
                    <span class="actual-text">&nbsp;Login&nbsp;</span>
                    <span aria-hidden="true" class="hover-text">&nbsp;Login&nbsp;</span>
                </a>
            </button>
        </div>
        <div class="col-12">
            <button class="button" data-text="Awesome">
                <a href="/register">
                    <span class="actual-text">&nbsp;Register&nbsp;</span>
                    <span aria-hidden="true" class="hover-text">&nbsp;Register&nbsp;</span>
                </a>
            </button>
        </div>
        
    </div>
    


@endsection
