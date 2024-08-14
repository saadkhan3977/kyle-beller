@extends('frontend.layouts.master')
@section('content')
    <section class="no-bg1">
        <div class="container">
            <h2 class="no-bg1-a">WELCOME!</h2>
            <h3 class="no-bg1-b">GET STARTED WITH THE INTRO VIDEO</h3>
            <p class="no-bg1-c">Biggest Music Party in the town by DJ Daniel</p>
            <a href="./contact-us.html" class="no-bg1-btn">Book Your Tickets</a>
        </div>
    </section>

    <section class="non-bg1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="non-bg1-inner">
                        <div class="non-bg1a">
                            <h3 class="non1-a">JUNE 8</h3>
                            <h4 class="non1-b">FRIDAY NIGHT</h4>
                        </div>
                        <div class="non-bg1a">
                            <h3 class="non1-a">JUNE 10</h3>
                            <h4 class="non1-b">COCKTAIL PARTY</h4>
                        </div>
                        <div class="non-bg1a">
                            <h3 class="non1-a">JUNE 15</h3>
                            <h4 class="non1-b">BLACK BEACH</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#" class="play-btn"><i class="fa-regular fa-circle-play"></i> Play intro</a>
                </div>
            </div>
        </div>
    </section>

    <section class="non-bg2">
        <div class="container">
            <!-- <form>
                <div class="row">
                    <div class="col-md-6">
                        <label for="event">Event Type</label><br>
                        <input type="text" name="event-type" class="event-input" placeholder="Event Type" required />
                    </div>
                    <div class="col-md-6">
                        <label for="event-date">Event Date</label><br>
                        <input type="date" id="event-date" name="event-date" class="event-input" />
                    </div>
                    <div class="col-md-6">
                        <label for="event">Event Venue</label><br>
                        <input type="text" name="event-venue" id="event" class="event-input" placeholder="Event Venue"
                            required />
                    </div>
                    <div class="col-md-6">
                        <label for="event-start">Event Start Time</label><br>
                        <select id="event-start" class="event-input">
                            <option value="12am">12am</option>
                            <option value="1am">1am</option>
                            <option value="2am">2am</option>
                            <option value="3am">3am</option>
                            <option value="4am">4am</option>
                            <option value="5am">5am</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                            <option value="12pm">12pm</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>
                            <option value="10pm">10pm</option>
                            <option value="11pm">11pm</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="contact">Contact Person Name</label><br>
                        <input type="text" name="contact-name" id="contact" class="event-input"
                            placeholder="Contact Person Name" required />
                    </div>
                    <div class="col-md-6">
                        <label for="event-start">Event End Time</label><br>
                        <select id="event-start" class="event-input">
                            <option value="12am">12am</option>
                            <option value="1am">1am</option>
                            <option value="2am">2am</option>
                            <option value="3am">3am</option>
                            <option value="4am">4am</option>
                            <option value="5am">5am</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                            <option value="12pm">12pm</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>
                            <option value="10pm">10pm</option>
                            <option value="11pm">11pm</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="contact">Contact Person Phone Number</label><br>
                        <input type="text" name="contact-name" id="contact" class="event-input" placeholder="+123456789"
                            required />
                    </div>
                    <div class="col-md-6">
                        <label for="contact-number">Expected Number of Guests:</label><br>
                        <input type="number" name="contact-number" id="contact-number" class="event-input"
                            placeholder="100" required />
                    </div>
                    <div class="col-md-6">
                        <label>Microphones Needed</label><br>
                        <input type="radio" id="microphones" name="microphones" value="Yes">
                        <label for="microphones">Yes</label><br>
                        <input type="radio" id="microphones-no" name="microphones" value="No">
                        <label for="microphones-no">No</label>
                    </div>
                    <div class="col-md-6">
                        <label for="marital">Marital Status</label><br>
                        <input type="text" name="marital" id="marital" class="event-input" placeholder="Single"
                            required />
                    </div>
                    <div class="col-md-6">
                        <label for="speaker-name">Speaker Name(s)</label><br>
                        <input type="text" name="speaker-name" id="speaker-name" class="event-input" placeholder="Name"
                            required />
                    </div>
                    <div class="col-md-6">
                        <label for="speech-time">Speech Time(s)</label><br>
                        <select id="speech-time" class="event-input">
                            <option value="12am">12am</option>
                            <option value="1am">1am</option>
                            <option value="2am">2am</option>
                            <option value="3am">3am</option>
                            <option value="4am">4am</option>
                            <option value="5am">5am</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                            <option value="12pm">12pm</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>
                            <option value="10pm">10pm</option>
                            <option value="11pm">11pm</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="music-style">Music Style Preference</label><br>
                        <input type="text" name="music-style" id="music-style" class="event-input"
                            placeholder="Music Style Preference" required />
                    </div>
                    <div class="col-md-12">
                        <label for="song-req">Specific Song Requests:</label><br>
                        <textarea rows="4" id="song-req" name="song-req" class="song-text w-100"
                            placeholder="Specific Song Requests:"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="song-details">Any additional details or specifics:</label><br>
                        <textarea rows="8" id="song-details" name="song-details" class="song-text w-100"
                            placeholder="Any additional details or specifics:"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="submit-btn" value="Submit" />
                    </div>
                </div>
            </form> -->
            <form id="event-form">
                @csrf
                <div class="row">
                    <!-- Event Type -->
                    <div class="col-md-6">
                        <label for="event">Event Type</label><br>
                        <input type="text" name="type" class="event-input" placeholder="Event Type" required />
                    </div>
                    <!-- Event Date -->
                    <div class="col-md-6">
                        <label for="event-date">Event Date</label><br>
                        <input type="date" id="event-date" name="event_date" class="event-input" />
                    </div>
                    <!-- Event Venue -->
                    <div class="col-md-6">
                        <label for="event">Event Venue</label><br>
                        <input type="text" name="venue" id="event" class="event-input" placeholder="Event Venue" required />
                    </div>
                    <!-- Event Start Time -->
                    <div class="col-md-6">
                        <label for="event-start">Event Start Time</label><br>
                        <select name="start_time" id="event-start" class="event-input">
                            <option value="12am">12am</option>
                            <option value="1am">1am</option>
                            <option value="2am">2am</option>
                            <option value="3am">3am</option>
                            <option value="4am">4am</option>
                            <option value="5am">5am</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                            <option value="12pm">12pm</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>
                            <option value="10pm">10pm</option>
                            <option value="11pm">11pm</option>
                        </select>
                    </div>
                    <!-- Contact Person Name -->
                    <div class="col-md-6">
                        <label for="contact">Contact Person Name</label><br>
                        <input type="text" name="contact_person_name" id="contact" class="event-input" placeholder="Contact Person Name" required />
                    </div>
                    <!-- Event End Time -->
                    <div class="col-md-6">
                        <label for="event-end">Event End Time</label><br>
                        <select name="end_time" id="event-end" class="event-input">
                        <option value="12am">12am</option>
                            <option value="1am">1am</option>
                            <option value="2am">2am</option>
                            <option value="3am">3am</option>
                            <option value="4am">4am</option>
                            <option value="5am">5am</option>
                            <option value="6am">6am</option>
                            <option value="7am">7am</option>
                            <option value="8am">8am</option>
                            <option value="9am">9am</option>
                            <option value="10am">10am</option>
                            <option value="11am">11am</option>
                            <option value="12pm">12pm</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                            <option value="6pm">6pm</option>
                            <option value="7pm">7pm</option>
                            <option value="8pm">8pm</option>
                            <option value="9pm">9pm</option>
                            <option value="10pm">10pm</option>
                            <option value="11pm">11pm</option>
                        </select>
                    </div>
                    <!-- Contact Person Phone Number -->
                    <div class="col-md-6">
                        <label for="contact-number">Contact Person Phone Number</label><br>
                        <input type="text" name="contact" id="contact-number" class="event-input" placeholder="+123456789" required />
                    </div>
                    <!-- Expected Number of Guests -->
                    <div class="col-md-6">
                        <label for="guest-count">Expected Number of Guests</label><br>
                        <input type="number" name="no_of_guest" id="guest-count" class="event-input" placeholder="100" required />
                    </div>
                    <!-- Microphones Needed -->
                    <div class="col-md-6">
                        <label>Microphones Needed</label><br>
                        <input type="radio" id="microphones-yes" name="microphone" value="Yes">
                        <label for="microphones-yes">Yes</label><br>
                        <input type="radio" id="microphones-no" name="microphone" value="No">
                        <label for="microphones-no">No</label>
                    </div>
                    <!-- Marital Status -->
                    <div class="col-md-6">
                        <label for="marital">Marital Status</label><br>
                        <input type="text" name="marital_status" id="marital" class="event-input" placeholder="Single" required />
                    </div>
                    <!-- Speaker Name(s) -->
                    <div class="col-md-6">
                        <label for="speaker-name">Speaker Name(s)</label><br>
                        <input type="text" name="speaker_name" id="speaker-name" class="event-input" placeholder="Name" required />
                    </div>
                    <!-- Speech Time(s) -->
                    <div class="col-md-6">
                        <label for="speech-time">Speech Time(s)</label><br>
                        <select name="speach_time" id="speech-time" class="event-input">
                            <!-- Time options -->
                            <option value="12am">12am</option>
                            <!-- ... other time options ... -->
                            <option value="11pm">11pm</option>
                        </select>
                    </div>
                    <!-- Music Style Preference -->
                    <div class="col-md-12">
                        <label for="music-style">Music Style Preference</label><br>
                        <input type="text" name="music_style" id="music-style" class="event-input" placeholder="Music Style Preference" required />
                    </div>
                    <!-- Specific Song Requests -->
                    <div class="col-md-12">
                        <label for="song-req">Specific Song Requests:</label><br>
                        <textarea rows="4" id="song-req" name="song_requests" class="song-text w-100" placeholder="Specific Song Requests:"></textarea>
                    </div>
                    <!-- Additional Details or Specifics -->
                    <div class="col-md-12">
                        <label for="song-details">Any additional details or specifics:</label><br>
                        <textarea rows="8" id="song-details" name="additional_details" class="song-text w-100" placeholder="Any additional details or specifics:"></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="col-md-12">
                        <input type="submit" class="submit-btn" value="Submit" />
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
                        <input type="email" placeholder="Email Address" class="news-input" required />
                        <input type="submit" class="form-btn" value="SUBSCRIBE" />
                    </form>
                </div>
            </div>
        </div>
    </section>
    

@endsection