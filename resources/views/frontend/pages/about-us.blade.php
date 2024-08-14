@extends('frontend.layouts.master')

@section('title','Roy || About Us')

@section('content')
<section class="serv-bg1">
        <div class="container">
            <h2 class="no-bg1-a">ABOUT DJ</h2>
            <p class="no-bg1-c">Biggest Music Party in the town by DJ Daniel</p>
            <a href="./contact-us.html" class="no-bg1-btn">Book Your Tickets</a>
        </div>
    </section>

    <section class="bg2">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <h3 class="bg2-a">ABOUT US</h3>
                    <div class="about-div">
                        <h4 class="bg2-b">EMMA WATSON</h4>
                        <p class="bg2-c">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet consequat
                            nisi vel rutrum. Nulla quis blandit nulla. Vivamus nisl massa, facilisis consectetur nunc a,
                            pretium malesuada quam. Phasellus rutrum efficitur neque, in viverra nibh dictum sed.
                            Suspendisse potenti. Aliquam dictum semper sapien sit amet faucibus. Vestibulum nulla
                            tortor, elementum eu ipsum pulvina.</p>
                        <div class="star-div">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="/frontend/assets/images/about-img.webp" class="bg2a-img" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg4">
        <div class="container-fluid">
            <h3 class="bg4-a">TESTIMONIALS</h3>
            <h4 class="bg4-b">DISCOVER OUR CLIENT REVIEWS</h4>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="/frontend/assets/images/testimonial-img.png" class="testimonial-img" />
                    <h3 class="bg4-c">EMMA WATSON</h3>
                    <p class="bg4-d">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet consequat
                        nisi vel rutrum. Nulla quis blandit nulla. Vivamus nisl massa, facilisis consectetur nunc a,
                        pretium malesuada quam. Phasellus rutrum efficitur neque, in viverra nibh dictum sed.
                        Suspendisse potenti. Aliquam.</p>
                    <div class="star-div">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="item">
                    <img src="/frontend/assets/images/testimonial-img.png" class="testimonial-img" />
                    <h3 class="bg4-c">EMMA WATSON</h3>
                    <p class="bg4-d">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet consequat
                        nisi vel rutrum. Nulla quis blandit nulla. Vivamus nisl massa, facilisis consectetur nunc a,
                        pretium malesuada quam. Phasellus rutrum efficitur neque, in viverra nibh dictum sed.
                        Suspendisse potenti. Aliquam.</p>
                    <div class="star-div">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="item">
                    <img src="/frontend/assets/images/testimonial-img.png" class="testimonial-img" />
                    <h3 class="bg4-c">EMMA WATSON</h3>
                    <p class="bg4-d">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc laoreet consequat
                        nisi vel rutrum. Nulla quis blandit nulla. Vivamus nisl massa, facilisis consectetur nunc a,
                        pretium malesuada quam. Phasellus rutrum efficitur neque, in viverra nibh dictum sed.
                        Suspendisse potenti. Aliquam.</p>
                    <div class="star-div">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
