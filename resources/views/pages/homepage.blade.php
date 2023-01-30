@extends('layouts.main-layout')

@section('body')

    <header class="bg-primary">

        <div class="d-flex justify-content-end text-light fw-bold">

            <div class="pe-5">
                DC POWER VISA
            </div>
    
            <div class="">
                ADDITIONAL DC SITES
            </div>

        </div>

    </header>



    <nav class="d-flex justify-content-between align-items-center">

        <div class="nav_container d-flex">
            <img class="dc_logo" src="{{ Vite::asset('/resources/img/dc-logo.png') }}" alt="">
        </div>

        <div class="nav_list-items d-flex">
                <ul>
                    helo
                </ul>
                <ul class="nav_item-selected">
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
                <ul>
                    helo
                </ul>
        </div>

        <div>
            search
        </div>
        

    </nav>



    <div class="jumbotron d-flex">
        <img class="jumbotron_img" src="{{ Vite::asset('/resources/img/jumbotron.jpg') }}" alt="">
    </div>
    
    

    <div>
        
    </div>

@endsection