@extends('layouts.main-layout')

@section('body')

    <div class="product_wrapper">

        <div class="show_product bg-primary">
            <img class="product_image" src="{{ Vite::asset('/resources/img/action_comics.jpg') }}" alt="">
    
            
        </div>
    
        <div class="product_title text-light">
            COMIC BOOK
        </div>
    
        <div class="product_gallery text-light text-center">
            VIEW GALLERY
        </div>

    </div>

    <div class="description_adv d-flex justify-content-between">

        <div class="product_descr_wrapper">

            <div class="product_description">

                <div class="title_big">
                    ACTION COMICS #1000: THE DELUXE EDITION
                </div>
        
                <div class="buy_check d-flex pt-3 pb-2">
            
                    <div class="price_availability d-flex justify-content-between p-3">
            
                        <div class="price text-light">

                            <span class="green_text">
                                U.S. Price: 
                            </span>
                            $19.99
            
                        </div>
            
                        <div class="availability green_text">
            
                            AVAILABLE

                        </div>
            
                    </div>
            
                    <div class="check_availability d-flex justify-content-center p-3 text-light">

                        Check availability
            
                    </div>

                </div>
    
                <div class="descr_text">
                    The celebration of 1,000 Issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in
                    April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the action
                    Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman's new look, scripts for the stories, 
                    the original art from the lost story featuring art by Curt Swan and morel Plus: a complete reprint of the stories that started it all-the Superman stories 
                    Action Comics #1 and 2 from 19381
                </div>

            </div>
           
        </div>

        <div class="adv d-flex justify-content-center"></div>
        

    </div>

    
@endsection