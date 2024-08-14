@extends('frontend.layouts.master')
@section('title')
Home
@endsection
@section('content')
<section class="bg1">
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
                    <img src="/frontend/assets/images/bg2-a.png" class="bg2a-img" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg3">
        <div class="container">
            <div class="service-div">
                <div class="img-box">
                    <img src="/frontend/assets/images/img-1.png" />
                    <div class="img-title">
                        <h3 class="imgtitle-a">Parties</h3>
                        <p class="imgtitle-b">lorem ipsum dolor sit amet, consectetur adipiscing elit. nullam vel
                            eleifend</p>
                        <a href="#" class="check-btn">Chek Availabilities</a>
                    </div>
                </div>
                <div class="img-box">
                    <img src="/frontend/assets/images/img-1.png" />
                    <div class="img-title">
                        <h3 class="imgtitle-a">Wedding</h3>
                        <p class="imgtitle-b">lorem ipsum dolor sit amet, consectetur adipiscing elit. nullam vel
                            eleifend</p>
                        <a href="#" class="check-btn">Chek Availabilities</a>
                    </div>
                </div>
                <div class="img-box">
                    <img src="/frontend/assets/images/img-3.png" />
                    <div class="img-title">
                        <h3 class="imgtitle-a">Corporate</h3>
                        <p class="imgtitle-b">lorem ipsum dolor sit amet, consectetur adipiscing elit. nullam vel
                            eleifend</p>
                        <a href="#" class="check-btn">Chek Availabilities</a>
                    </div>
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