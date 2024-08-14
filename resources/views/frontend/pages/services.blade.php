@extends('frontend.layouts.master')

@section('title','Services')

@section('content')
<section class="serv-bg1">
        <div class="container">
            <h2 class="no-bg1-a">SERVICES</h2>
            <p class="no-bg1-c">Biggest Music Party in the town by DJ Daniel</p>
            <a href="/contact-us" class="no-bg1-btn">Book Your Tickets</a>
        </div>
    </section>

    <section class="service-bg1">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">Corporate</button>
            <button class="tablinks" onclick="openTab(event, 'secondTab')">Wedding</button>
            <button class="tablinks" onclick="openTab(event, 'thirdTab')">Parties</button>
        </div>

        <div id="firstTab" class="tabcontent">
            <h4 class="tab-h4">Packages Begin At</h4>
            <h3 class="tab-h3">Corporate</h3>
            <h3 class="price-h3">$150</h3>
            <ul class="price-ul">
                <li>DJ And MC Services For Duration Of Event</li>
                <li>PA Speaker Setup</li>
                <li>Wireless Microphones</li>
                <li>Dancefloor Lighting (Includes Strobes, Blacklights, Color Washes And Lazers)</li>
                <li>Add-Ons: Up-Lighting – $400</li>
            </ul>
            <a href="#" class="contact-btn">Contact Now</a>
        </div>

        <div id="secondTab" class="tabcontent">
            <h4 class="tab-h4">Packages Begin At</h4>
            <h3 class="tab-h3">Wedding</h3>
            <h3 class="price-h3">$150</h3>
            <ul class="price-ul">
                <li>DJ And MC Services For Duration Of Event</li>
                <li>PA Speaker Setup</li>
                <li>Wireless Microphones</li>
                <li>Dancefloor Lighting (Includes Strobes, Blacklights, Color Washes And Lazers)</li>
                <li>Add-Ons: Up-Lighting – $400</li>
            </ul>
            <a href="#" class="contact-btn">Contact Now</a>
        </div>

        <div id="thirdTab" class="tabcontent">
            <h4 class="tab-h4">Packages Begin At</h4>
            <h3 class="tab-h3">Parties</h3>
            <h3 class="price-h3">$150</h3>
            <ul class="price-ul">
                <li>DJ And MC Services For Duration Of Event</li>
                <li>PA Speaker Setup</li>
                <li>Wireless Microphones</li>
                <li>Dancefloor Lighting (Includes Strobes, Blacklights, Color Washes And Lazers)</li>
                <li>Add-Ons: Up-Lighting – $400</li>
            </ul>
            <a href="#" class="contact-btn">Contact Now</a>
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
                        <input type="email" placeholder="Email Address" class="news-input" required />
                        <input type="submit" class="form-btn" value="SUBSCRIBE" />
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
