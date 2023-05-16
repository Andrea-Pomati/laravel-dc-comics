@extends('layouts.main-layout')

@section('title')
   <title>Details Comics</title> 
@endsection

@section('content')
    
    <div class="blue-bar">
        <img src="https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY" alt="" class="img-details">
    </div>

    <div class="container single-comic">
        <div class="sx">
            <h1>ACTION COMICS #1000: THE DELUXE EDITION</h1>
            <div class="green-bar">
                <div>
                    <span class="light-green">U.S. Price:</span> 
                    <span class="white">&dollar;19.99</span>
                </div>
                
                <div>
                   <span class="light-green">AVAILABLE</span>
                    <span class="white availability">Check Availability</span> 
                </div>
            </div>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sed, officia nihil illo aperiam quae 
                inventore, alias nobis ab blanditiis non iste, consequatur dicta dolorum. Nihil minima voluptatibus optio 
                odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sed, officia nihil illo aperiam 
                quae inventore, alias nobis ab blanditiis non iste, consequatur dicta dolorum. Nihil minima voluptatibus 
                optio odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sed, officia nihil illo 
                aperiam quae inventore, alias nobis ab blanditiis non iste, consequatur dicta dolorum. Nihil minima 
                voluptatibus optio odio.
            </p>
        </div>
        <div>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="logo">
        </div>
    </div>
@endsection