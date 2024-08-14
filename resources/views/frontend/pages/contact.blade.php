@extends('frontend.layouts.master')

@section('content')
<section class="no-bg1">
        <div class="container">
            <h2 class="no-bg1-a">CONTACT US</h2>
            <p class="no-bg1-c">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae felis imperdiet,
                interdum odio congue, dapibus leo. Vivamus vel odio sit amet elit imperdiet laoreet.</p>
            <a href="./contact-us.html" class="no-bg1-btn">Book Your Tickets</a>
        </div>
    </section>

    <section class="nonweb-bg2">
        <div class="container">
            <form>
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Enter Your First Name</label><br>
                            <input type="text" name="firstname" id="firstname" class="event-input"
                                placeholder="Your First Name" />
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Enter Your Last Name</label><br>
                            <input type="text" name="lastname" id="lastname" class="event-input"
                                placeholder="Your Last Name" />
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Enter Your Phone Number</label><br>
                            <input type="text" name="phone" id="phone" class="event-input" placeholder="+123456789" />
                        </div>
                        <div class="col-md-6">
                            <label for="email">Enter Your Email Address</label><br>
                            <input type="text" name="email" id="email" class="event-input"
                                placeholder="Your Email Address" />
                        </div>
                        <div class="col-md-12">
                            <label for="yourmsg">Enter Your Message</label><br>
                            <textarea rows="8" id="yourmsg" name="yourmsg" class="song-text w-100"
                                placeholder="Your Message"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="submit-btn" value="Submit" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="newsletter">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h4 class="news-a">Want the latest party news?</h4>
                    <h4 class="news-b">STAY INFORMED OF ALL NEWS</h4>
                </div>
                <div class="col-md-6">
                    <form>
                        <input type="email" placeholder="Email Address" class="news-input" />
                        <input type="submit" class="form-btn" value="SUBSCRIBE" />
                    </form>
                </div>
            </div>
        </div>
    </section>  
@endsection
