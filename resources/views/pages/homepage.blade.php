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
    
    

    <main>

        <div class="section_title bg-primary p-3 text-light fw-bold">

            CURRENT SERIES

        </div>

        <div class="comix_library pt-5 px-3 text-light">

            <!-- Action comics -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/action_comics.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    ACTION COMICS

                </div>
            </div>

            <!-- American vampire -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/american_vampire.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    AMERICAN VAMPIRE 1976

                </div>
            </div>

            <!-- Aquaman -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/aquaman.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    AQUAMAN

                </div>
            </div>

            <!-- Batgirl -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batgirl.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATGIRL

                </div>
            </div>

            <!-- Batman -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN

                </div>
            </div>

            <!-- Batman Bayond -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_beyond.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN BEYOND

                </div>
            </div>

            <!-- Batman/Superman -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_superman.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN/SUPERMAN

                </div>
            </div>

            <!-- Batman/Superman -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/Batman_Superman_Annual.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN/SUPERMAN ANNUAL

                </div>
            </div>

            <!-- Batman: The joker war zone -->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_joker_warzone.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN: THE JOKER WAR ZONE

                </div>
            </div>

            <!-- Batman: Three Jokers-->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_3_jokers.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN: THREE JOKERS

                </div>
            </div>

            <!-- Batman: white knight presents: harley queen-->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_harley.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUEEN

                </div>
            </div>

            <!-- Catwoman-->
            <div class="comic_card d-flex flex-column">
                <div class="cover">
                    <img class="comic_cover" src="{{ Vite::asset('/resources/img/catwoman.jpg') }}" alt="">
                </div>
                <div class="comic_title">
                    CATWOMAN

                </div>
            </div>

        </div>

        <div class="loadMore_button">

        </div>

    </main>

@endsection