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
                    CHARACTERS
                </ul>
                <ul class="nav_item-selected">
                    COMICS
                </ul>
                <ul>
                    MOVIES
                </ul>
                <ul>
                    TV
                </ul>
                <ul>
                    GAMES
                </ul>
                <ul>
                    COLLECTABLES
                </ul>
                <ul>
                    VIDEOS
                </ul>
                <ul>
                    FANS
                </ul>
                <ul>
                    NEWS
                </ul>
                <ul>
                    SHOP
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

        <div class="button_wrapper d-flex justify-content-center pt-5 pb-3">

            <div class="loadMore_button bg-primary text-light fw-bold">

                LOAD MORE
    
            </div>

        </div>

        

    </main>



    <div class="actions bg-primary py-5 d-flex justify-content-center align-items-center">

        <!-- digital comics -->
        <ul>

            <div class="action_card d-flex justify-content-around align-items-center text-light">
                <div class="action_image_wrapper">
                    <img class="action_image" src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <div class="action_title ps-3">
                    DIGITAL COMICS
                </div>
            </div>

        </ul>

        <!-- DC merchandise -->
        <ul>

            <div class="action_card d-flex justify-content-around align-items-center text-light">
                <div class="action_image_wrapper">
                    <img class="action_image" src="{{ Vite::asset('/resources/img/buy-comics-merchandise.png') }}" alt="">
                </div>
                <div class="action_title ps-3">
                    DC MERCHANDISE
                </div>
            </div>

        </ul>

        <!-- subscription -->
        <ul>

            <div class="action_card d-flex justify-content-around align-items-center text-light">
                <div class="action_image_wrapper">
                    <img class="action_image" src="{{ Vite::asset('/resources/img/buy-comics-subscriptions.png') }}" alt="">
                </div>
                <div class="action_title ps-3">
                    SUBSCRIPTION
                </div>
            </div>

        </ul>

        <!-- comic shop locator -->
        <ul>

            <div class="action_card d-flex justify-content-around align-items-center text-light">
                <div class="action_image_wrapper">
                    <img class="action_image locator" src="{{ Vite::asset('/resources/img/buy-comics-shop-locator.png') }}" alt="">
                </div>
                <div class="action_title">
                    COMIC SHOP LOCATOR
                </div>
            </div>

        </ul>

        <!-- DC power visa -->
        <ul>

            <div class="action_card d-flex justify-content-around align-items-center text-light">
                <div class="action_image_wrapper">
                    <img class="action_image" src="{{ Vite::asset('/resources/img/buy-dc-power-visa.svg') }}" alt="">
                </div>
                <div class="action_title ps-3">
                    DC POWER VISA
                </div>
            </div>

        </ul>

        

    </div>

@endsection