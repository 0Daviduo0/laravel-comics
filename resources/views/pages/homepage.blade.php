@extends('layouts.main-layout')

@section('body')

    <main>

        <div class="section_title bg-primary p-3 text-light fw-bold">

            CURRENT SERIES

        </div>

        <div class="comix_library pt-5 px-3 text-light">

            <!-- Action comics -->
            <a href="/details">
            
                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/action_comics.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        ACTION COMICS

                    </div>
                </div>

            </a>

            <!-- American vampire -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/american_vampire.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        AMERICAN VAMPIRE 1976

                    </div>
                </div>
            
            </a>

            <!-- Aquaman -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/aquaman.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        AQUAMAN

                    </div>
                </div>
            
            </a>

            <!-- Batgirl -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batgirl.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATGIRL

                    </div>
                </div>

            </a>

            <!-- Batman -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN

                    </div>
                </div>

            </a>

            <!-- Batman Bayond -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_beyond.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN BEYOND

                    </div>
                </div>

            </a>

            <!-- Batman/Superman -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_superman.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN/SUPERMAN

                    </div>
                </div>

            </a>

            <!-- Batman/Superman -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/Batman_Superman_Annual.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN/SUPERMAN ANNUAL

                    </div>
                </div>

            </a>

            <!-- Batman: The joker war zone -->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_joker_warzone.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN: THE JOKER WAR ZONE

                    </div>
                </div>

            </a>

            <!-- Batman: Three Jokers-->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_3_jokers.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN: THREE JOKERS

                    </div>
                </div>

            </a>

            <!-- Batman: white knight presents: harley queen-->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/batman_harley.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUEEN

                    </div>
                </div>

            </a>

            <!-- Catwoman-->
            <a href="/details">

                <div class="comic_card d-flex flex-column">
                    <div class="cover">
                        <img class="comic_cover" src="{{ Vite::asset('/resources/img/catwoman.jpg') }}" alt="">
                    </div>
                    <div class="comic_title">
                        CATWOMAN

                    </div>
                </div>

            </a>

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
                <div class="action_title ps-3">
                    DIGITAL COMICS
                </div>
                <div class="action_image_wrapper">
                    <img class="action_image" src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
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