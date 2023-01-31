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

        <div class="adv_text_wrapper">

            <div class="adv_text text-end">
                ADVERTISEMENT
            </div>

            <div class="adv d-flex justify-content-center"></div>

        </div>
        
        

    </div>

    <div class="talent_specs_wrapper d-flex justify-content-between">

        <div class="ts">

            <div class="title_ts py-5">
                Talent
            </div>

            <div class="table_ts">

                <div class="table_row d-flex py-2">
                    <div class="table_row_title">
                        Art by:
                    </div>
                    <div class="table_row_descr">
                        <a href="">Josè Luis Garcia-Lopez</a>, <a href="">Clay Mann</a>, <a href="">Rafael Albuquerque</a>, <a href="">Partick Gleason</a>,
                        <a href="">Dan Jurgens</a>, <a href="">Joe Shuster</a>, <a href="">Neal Adams</a>, <a href="">Curt Swan</a>, <a href="">John Cassaday</a>, 
                        <a href="">Oliver Coipel</a>, <a href="">Jim Lee</a>
                    </div>
                </div>
                <div class="table_row d-flex py-2">
                    <div class="table_row_title">
                        Written by:
                    </div>
                    <div class="table_row_descr">
                        <a href="">Brad Meltzer</a>, <a href="">Tom King</a>, <a href="">Scott Snyder</a>, <a href="">Geoff Johns</a>,
                        <a href="">Brian Michael Bendis</a>, <a href="">Paul Dini</a>, <a href="">Louise Simonson</a>, <a href="">Richard Donner</a>, 
                        <a href="">Mary Wolfman</a>, <a href="">Peter J. Tommasi</a>, <a href="">Dan Jurgens</a>, <a href="">Jerry Siegel</a>, <a href="">Paul Levitz</a>
                    </div>
                </div>

            </div>

        </div>

        <div class="ts">

            <div class="title_ts py-5">
                Specs
            </div>
    
            <div class="table_ts">

                <div class="table_row d-flex py-2">
                    <div class="table_row_title">
                        Series:
                    </div>
                    <div class="table_row_descr">
                        <a href="">ACTION COMICS</a>
                    </div>
                </div>
                <div class="table_row d-flex py-2">
                    <div class="table_row_title">
                        U.S. Price:
                    </div>
                    <div class="table_row_descr">
                        $19.99
                    </div>
                </div>
                <div class="table_row d-flex py-2">
                    <div class="table_row_title">
                        On Sale Date:
                    </div>
                    <div class="table_row_descr">
                        Oct 02 2018
                    </div>
                </div>

            </div>
    
            </div>

        </div>

    </div>

    
@endsection