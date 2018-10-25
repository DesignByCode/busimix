@extends('layouts.app')

@section('content')

    <div class="section__1 text-align-center">
        <div class="wrapper">
            <div class="row">
                <div class="md-col-4 section__1__block">
                    <img class="section__1__images" src="{{ asset('/img/circle-truck.svg') }}" alt="{{ config('app.name') }} circles">
                    <h2>Lorem ipsum dolor.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, eveniet maiores impedit hic minima similique, asperiores repudiandae blanditiis dicta. Delectus.</p>
                    <a href="#" class="btn btn--round btn--lg btn--primary">view services</a>
                </div>
                <div class="md-col-4 section__1__block">
                    <img class="section__1__images" src="{{ asset('/img/circle-arrow.svg') }}" alt="{{ config('app.name') }} circles">
                    <h2>Lorem ipsum dolor.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex tenetur nam nesciunt fugit nostrum, voluptatem minima deleniti ipsum cum voluptates.</p>
                    <a href="#" class="btn btn--round btn--lg btn--primary">view routes</a>
                </div>
                <div class="md-col-4 section__1__block">
                    <img class="section__1__images" src="{{ asset('/img/circle-contact.svg') }}" alt="{{ config('app.name') }} circles">
                    <h2>Lorem ipsum dolor.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus beatae nisi eos architecto, excepturi doloremque fuga eveniet, porro odio. Sapiente!</p>
                    <a href="#" class="btn btn--round btn--lg btn--primary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>


@endsection
