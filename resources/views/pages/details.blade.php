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

    <div class="description_adv d-flex">

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
    
            </div>
           
        </div>
        

    </div>

    
@endsection