@extends('frontend.layouts.master')
@section('content')
<style>
        input.error {
            border: 2px solid red;
            background-color: #ffe6e6; /* Light red background to indicate error */
            animation: shake 0.3s; /* Shake effect when error occurs */
        }

        /* Shake animation */
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }

        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
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

    <section class="nonweb-bg2">
        <div class="container">
            <form id="wed-form">
                @csrf
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">PLANNING QUESTIONNAIRE</h4>
                            <p class="wed1-b">congratulations on your upcoming event! please provide your selections for
                                the
                                event details and specific music choices here. if there are any categories you are
                                unsure
                                about or would like to discuss or hear some recommendations, feel free to say so on the
                                form. once i’ve received this form, i’ll schedule a meeting with you to review the
                                details
                                and talk through the day in full
                            </p>
                        </div>
                        <div class="col-md-6">
                            <label for="bride">Bride/Spouse</label><br>
                            <input type="text" name="bride" id="bride" class="event-input" placeholder="Name" />
                            <div class="error-message" id="bride-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="groom">Groom/Spouse</label><br>
                            <input type="text" name="groom" id="groom" class="event-input" placeholder="Name" />
                            <div class="error-message" id="groom-error"></div>

                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone</label><br>
                            <input type="text" name="phone" id="phone" class="event-input" placeholder="+123456789" />
                            <div class="error-message" id="phone-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="altphone">Alternate Phone</label><br>
                            <input type="text" name="altphone" id="altphone" class="event-input"
                                placeholder="+123456789" />
                            <div class="error-message" id="altphone-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="timecall">Best Time to Call</label><br>
                            <select id="timecall" name="timecall" class="event-input">
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
                            <div class="error-message" id="timecall-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" class="event-input" placeholder="Email" />
                            <div class="error-message" id="email-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="wed-date">Wedding Date</label><br>
                            <input type="date" id="wed-date" name="wed_date" class="event-input" />
                            <div class="error-message" id="wed_date-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="venue-rec">Venue Reception Ballroom</label><br>
                            <input type="text" name="venue_rec" id="venue-rec" class="event-input"
                                placeholder="Venue Reception Ballroom" />
                            <div class="error-message" id="venue_rec-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="banq-ven">Banquet Venue</label><br>
                            <input type="text" name="banq_ven" id="banq_ven" class="event-input"
                                placeholder="Banquet Venue" />
                                <div class="error-message" id="banq_ven-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="numberguest">Number of Guests:</label><br>
                            <input type="number" name="numberguest" id="numberguest" class="event-input"
                                placeholder="100" />
                                <div class="error-message" id="numberguest-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="contactper">Addt'l Contact Person</label><br>
                            <input type="text" name="contact_persom" id="contactper" class="event-input"
                                placeholder="Name/Relationship" />
                                <div class="error-message" id="contact_persom-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="contactph">Addt'l Contact Phone</label><br>
                            <input type="text" name="contact_phone" id="contactph" class="event-input"
                                placeholder="Addt'l Contact Phone" />
                                <div class="error-message" id="contact_phone-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="vencont">Venue Contact Person</label><br>
                            <input type="text" name="ven_contact" id="vencont" class="event-input" placeholder="Name" />
                            <div class="error-message" id="ven_contact-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="vencontper">Venue Contact Person Phone</label><br>
                            <input type="text" name="ven_cont_person" id="vencontper" class="event-input"
                                placeholder="+123456789" />
                                <div class="error-message" id="ven_cont_person-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="guestarr">Guest Arrival</label><br>
                            <select id="guestarr" name="guest_arrival" class="event-input">
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
                            <div class="error-message" id="guest_arrival-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="wedparty">Wedding Party Arrival</label><br>
                            <select id="wedparty" name="wed_party" class="event-input">
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
                            <div class="error-message" id="wed_party-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="photographer">Photographer</label><br>
                            <input type="text" name="photographer" id="photographer" class="event-input"
                                placeholder="Photographer" />
                                <div class="error-message" id="photographer-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="videographer">Videographer</label><br>
                            <input type="text" name="videographer" id="videographer" class="event-input"
                                placeholder="Videographer" />
                                <div class="error-message" id="videographer-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="setting">Setting</label><br>
                            <input type="text" name="setting" id="setting" class="event-input" placeholder="Setting" />
                            <div class="error-message" id="setting-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="elevator">Elevator</label><br>
                            <select id="elevator" name="elevator" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="elevator-error"></div>
                        </div>
                    </div>
                </div>
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">CEREMONY DETAILS</h4>
                        </div>
                        <div class="col-md-6">
                            <label for="sound">Sound Choice Hosting Ceremony</label><br>
                            <input type="text" name="sound" id="sound" class="event-input" placeholder="Sound Choice Hosting Ceremony" />
                            <div class="error-message" id="sound-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="service">If so, which service</label><br>
                            <input type="text" name="service" id="service" class="event-input" placeholder="If so, which service" />
                            <div class="error-message" id="service-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="officiantname">Name of Officiant:</label><br>
                            <input type="text" name="officiantname" id="officiantname" class="event-input" placeholder="Name of Officiant:" />
                            <div class="error-message" id="officiantname-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="offphone">Officiant Phone</label><br>
                            <input type="text" name="officiantphone" id="officiantphone" class="event-input" placeholder="+123456789" />
                            <div class="error-message" id="officiantphone-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="processionalsong">Processional Song 1</label><br>
                            <input type="text" name="processionalsong" id="processionalsong" class="event-input" placeholder="Song 1" />
                            <div class="error-message" id="processionalsong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="processionalsong2">Processional Song 2</label><br>
                            <input type="text" name="processionalsong2" id="song2" class="event-input" placeholder="Song 2" />
                            <div class="error-message" id="processionalsong2-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="song3">Processional Song 3 (optional)</label><br>
                            <input type="text" name="song3" id="song3" class="event-input" placeholder="Song 3" />
                        </div>
                        <div class="col-md-6">
                            <label for="recessionalsong">Recessional Song 1</label><br>
                            <input type="text" name="recessionalsong" id="recessionalsong" class="event-input" placeholder="Song 1" />
                            <div class="error-message" id="recessionalsong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="recessionalsong2">Recessional Song 2</label><br>
                            <input type="text" name="recessionalsong2" id="recessionalsong2" class="event-input" placeholder="Song 2" />
                            <div class="error-message" id="recessionalsong2-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="recessionalsong3">Recessional Song 3 (optional)</label><br>
                            <input type="text" name="recessionalsong3" id="recessionalsong3" class="event-input" placeholder="Song 3" />
                        </div>
                        <div class="col-md-6">
                            <label for="prelude">Prelude Song</label><br>
                            <input type="text" name="prelude" id="prelude" class="event-input" placeholder="Prelude Song" />
                            <div class="error-message" id="prelude-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="postlude">Postlude Song</label><br>
                            <input type="text" name="postlude" id="postlude" class="event-input" placeholder="Postlude Song" />
                            <div class="error-message" id="postlude-error"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="ceremony">Additional Ceremony Details</label><br>
                            <textarea name="ceremony" id="ceremony" class="event-input" placeholder="Additional Ceremony Details"></textarea>
                            <div class="error-message" id="ceremony-error"></div>
                        </div>
                    </div>
                </div>
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">COCKTAIL HOUR HIGHLIGHTS</h4>
                        </div>
                        <div class="col-md-6">
                            <label for="starttime">Start Time</label><br>
                            <select id="starttime" name="starttime" class="event-input">
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
                            <div class="error-message" id="starttime-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="endtime">End Time</label><br>
                            <select id="endtime" name="endtime" class="event-input">
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
                            <div class="error-message" id="endtime-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="coctail">Cocktail Hour Location</label><br>
                            <input type="text" name="coctail" id="coctail" class="event-input"
                                placeholder="Cocktail Hour Location" />
                                <div class="error-message" id="coctail-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="power">Power Provided</label><br>
                            <input type="text" name="power" id="power" class="event-input"
                                placeholder="Power Provided" />
                                <div class="error-message" id="power-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="coctailmusic">Cocktail Music Service</label><br>
                            <select id="coctailmusic" name="coctailmusic" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="coctailmusic-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="coctailstyle">Cocktail Music Style</label><br>
                            <select id="coctailstyle" name="coctailstyle" class="event-input">
                                <option value="Pop">Pop</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Classical">Classical</option>
                                <option value="Country">Country</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="error-message" id="coctailstyle-error"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="cocktaildetails">Please list any other cocktail hour details we may
                                need:</label><br>
                            <input type="text" name="cocktaildetails" id="cocktaildetails" class="event-input"
                                placeholder="Please list any other cocktail hour details we may need:" />
                                <div class="error-message" id="cocktaildetails-error"></div>
                        </div>

                    </div>
                </div>
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">RECEPTION</h4>
                        </div>
                        <div class="col-md-6">
                            <label for="startingtime">Starting Time</label><br>
                            <select id="startingtime" name="recstartingtime" class="event-input">
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
                            <div class="error-message" id="recstartingtime-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="endingtime">Ending Time</label><br>
                            <select id="endingtime" name="recendingtime" class="event-input">
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
                            <div class="error-message" id="recendingtime-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="introduction">Introductions</label><br>
                            <select id="introduction" name="introduction" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="introduction-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="couple">Wedding Party Introduction Music</label><br>
                            <input type="text" name="couple" id="couple" class="event-input"
                                placeholder="If different from couple" />
                                <div class="error-message" id="couple-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="newintro">Newlywed Intro Music</label><br>
                            <input type="text" name="newintro" id="newintro" class="event-input"
                                placeholder="Newlywed Intro Music" />
                                <div class="error-message" id="newintro-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="specialintro">Special Intro Instruction</label><br>
                            <input type="text" name="specialintro" id="specialintro" class="event-input"
                                placeholder="Special Intro Instruction" />
                                <div class="error-message" id="specialintro-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="toast">Toast</label><br>
                            <select id="toast" name="toast" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="toast-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="toastby">Toast By</label><br>
                            <input type="text" name="toastby" id="toastby" class="event-input" placeholder="Toast By" />
                            <div class="error-message" id="toastby-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="speakeradd">Addt'l Speaker</label><br>
                            <input type="text" name="speakeradd" id="speakeradd" class="event-input"
                                placeholder="Addt'l Speaker" />
                                <div class="error-message" id="speakeradd-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="speakeradd2">Addt'l Speaker 2</label><br>
                            <input type="text" name="speakeradd2" id="speakeradd2" class="event-input"
                                placeholder="Addt'l Speaker 2" />
                                <div class="error-message" id="speakeradd2-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="blessing">Blessing</label><br>
                            <select id="blessing" name="blessing" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="blessing-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="blessingby">Blessing By</label><br>
                            <input type="text" name="blessingby" id="blessingby" class="event-input"
                                placeholder="Blessing By" />
                                <div class="error-message" id="blessingby-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="dinnerstyle">Dinner Music Type</label><br>
                            <select id="dinnerstyle" name="dinnerstyle" class="event-input">
                                <option value="Pop">Pop</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Classical">Classical</option>
                                <option value="Country">Country</option>
                                <option value="Other">Other</option>
                            </select>
                            <div class="error-message" id="dinnerstyle-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="dinnerserved">Dinner Served</label><br>
                            <select id="dinnerserved" name="dinnerserved" class="event-input">
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
                            <div class="error-message" id="dinnerserved-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="style">Style</label><br>
                            <select id="style" name="style" class="event-input">
                                <option value="buffet">Buffet</option>
                                <option value="plated">Plated</option>
                            </select>
                            <div class="error-message" id="style-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridegroomdance">Bride and Groom Dance</label><br>
                            <select id="bridegroomdance" name="bridegroomdance" class="event-input">
                                <option value="afterintros">After Intros</option>
                                <option value="duringdinner">During Dinner</option>
                                <option value="afterdinner">After Dinner</option>
                            </select>
                            <div class="error-message" id="bridegroomdance-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Bride and Groom Song</label><br>
                            <input type="text" name="birdegroomsong" id="birdegroomsong" class="event-input"
                                placeholder="Bride and Groom Song" />
                                <div class="error-message" id="birdegroomsong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridefatherdance">Bride and Father Dance</label><br>
                            <select id="bridefatherdance" name="bridefatherdance" class="event-input">
                                <option value="afterintros">After Intros</option>
                                <option value="duringdinner">During Dinner</option>
                                <option value="afterdinner">After Dinner</option>
                            </select>
                            <div class="error-message" id="bridefatherdance-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Bride and Father Song</label><br>
                            <input type="text" name="birdefathersong" id="birdefathersong" class="event-input"
                                placeholder="Bride and Groom Song" />
                            <div class="error-message" id="birdefathersong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="groommotherdance">Groom and Mother Dance</label><br>
                            <select id="groommotherdance" name="groommotherdance" class="event-input">
                                <option value="afterintros">After Intros</option>
                                <option value="duringdinner">During Dinner</option>
                                <option value="afterdinner">After Dinner</option>
                            </select>
                            <div class="error-message" id="groommotherdance-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Groom and Mother Song</label><br>
                            <input type="text" name="birdemothersong" id="birdemothersong" class="event-input"
                                placeholder="Bride and Groom Song" />
                                <div class="error-message" id="birdemothersong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridalpartdance">Bridal Party Dance</label><br>
                            <select id="bridalpartdance" name="bridalpartdance" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="bridalpartdance-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Bridal Party Song</label><br>
                            <input type="text" name="birdalparysong" id="birdalparysong" class="event-input"
                                placeholder="Bridal Party Song" />
                                <div class="error-message" id="birdalparysong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="cakecutting">Cake Cutting</label><br>
                            <select id="cakecutting" name="cakecutting" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="cakecutting-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Cake Cutting Song</label><br>
                            <input type="text" name="cakesong" id="cakesong" class="event-input"
                                placeholder="Cake Cutting Song" />
                            <div class="error-message" id="cakesong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bonquettoss">Bouquet Toss</label><br>
                            <select id="bonquettoss" name="bonquettoss" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="bonquettoss-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="banquetsong">Bouquet Toss Song</label><br>
                            <input type="text" name="banquetsong" id="banquetsong" class="event-input"
                                placeholder="Bouquet Toss Song" />
                            <div class="error-message" id="banquetsong-error"></div>

                        </div>
                        <div class="col-md-6">
                            <label for="gartertoss">Garter Toss</label><br>
                            <select id="gartertoss" name="gartertoss" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="gartertoss-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="songgarter">Song for removing garter from brides leg:</label><br>
                            <input type="text" name="songgarter" id="songgarter" class="event-input"
                                placeholder="Song for removing garter from brides leg" />
                                <div class="error-message" id="songgarter-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="songgarterlad">Song for garter to be put on the ladies: </label><br>
                            <input type="text" name="songgarterlad" id="songgarterlad" class="event-input"
                                placeholder="Song for garter to be put on the ladies" />
                                <div class="error-message" id="songgarterlad-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="lastdance">Last Dance of Evening</label><br>
                            <select id="lastdance" name="lastdance" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="lastdance-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="lastsong">Last Dance Song: </label><br>
                            <input type="text" name="lastsong" id="lastsong" class="event-input"
                                placeholder="Last Dance Song" />
                                <div class="error-message" id="lastsong-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="specialityexit">Specialty Exit:</label><br>
                            <select id="specialityexit" name="specialityexit" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                            <div class="error-message" id="specialityexit-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="specialexitdet">Specialty Exit Details: </label><br>
                            <input type="text" name="specialexitdet" id="specialexitdet" class="event-input"
                                placeholder="Specialty Exit Details" />
                                <div class="error-message" id="specialexitdet-error"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="recdetails">Please list any other reception details we may need: </label><br>
                            <input type="text" name="recdetails" id="recdetails" class="event-input"
                                placeholder="Please list any other reception details we may need" />
                                <div class="error-message" id="recdetails-error"></div>
                        </div>

                    </div>
                </div>
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">BRIDAL PARTY INTRODUCTIONS</h4>
                            <p class="wed1-b">This is the list I will be reading off of during introductions. Please be
                                sure the guests are in the correct order for that purpose!</p>
                        </div>
                        <div class="col-md-6">
                            <label for="parentsbride">Parents of the Bride:</label><br>
                            <input type="text" name="parentsbride" id="parentsbride" class="event-input"
                                placeholder="Parents of the Bride" />
                                <div class="error-message" id="parentsbride-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="parentsgroom">Parents of the Groom:</label><br>
                            <input type="text" name="parentsgroom" id="parentsgroom" class="event-input"
                                placeholder="Parents of the Groom" />
                                <div class="error-message" id="parentsgroom-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="usher">Usher(s):</label><br>
                            <input type="text" name="usher" id="usher" class="event-input" placeholder="Usher(s)" />
                            <div class="error-message" id="usher-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid">Bridesmaid & Groomsman (1):</label><br>
                            <input type="text" name="bridesmaid" id="bridesmaid" class="event-input"
                                placeholder="Bridesmaid & Groomsman (1)" />
                                <div class="error-message" id="bridesmaid-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid2">Bridesmaid & Groomsman (2):</label><br>
                            <input type="text" name="bridesmaid2" id="bridesmaid2" class="event-input"
                                placeholder="Bridesmaid & Groomsman (2)" />
                                <div class="error-message" id="bridesmaid2-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid3">Bridesmaid & Groomsman (3):</label><br>
                            <input type="text" name="bridesmaid3" id="bridesmaid3" class="event-input"
                                placeholder="Bridesmaid & Groomsman (3)" />
                                <div class="error-message" id="bridesmaid3-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid4">Bridesmaid & Groomsman (4):</label><br>
                            <input type="text" name="bridesmaid4" id="bridesmaid4" class="event-input"
                                placeholder="Bridesmaid & Groomsman (4)" />
                                <div class="error-message" id="bridesmaid4-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid5">Bridesmaid & Groomsman (5):</label><br>
                            <input type="text" name="bridesmaid5" id="bridesmaid5" class="event-input"
                                placeholder="Bridesmaid & Groomsman (5)" />
                                <div class="error-message" id="email-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid6">Bridesmaid & Groomsman (6):</label><br>
                            <input type="text" name="bridesmaid6" id="bridesmaid6" class="event-input"
                                placeholder="Bridesmaid & Groomsman (6)" />
                                <div class="error-message" id="bridesmaid6-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid7">Bridesmaid & Groomsman (7):</label><br>
                            <input type="text" name="bridesmaid7" id="bridesmaid7" class="event-input"
                                placeholder="Bridesmaid & Groomsman (7)" />
                                <div class="error-message" id="bridesmaid7-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid8">Bridesmaid & Groomsman (8):</label><br>
                            <input type="text" name="bridesmaid8" id="bridesmaid8" class="event-input"
                                placeholder="Bridesmaid & Groomsman (8)" />
                                <div class="error-message" id="bridesmaid8-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid9">Bridesmaid & Groomsman (9):</label><br>
                            <input type="text" name="bridesmaid9" id="bridesmaid9" class="event-input"
                                placeholder="Bridesmaid & Groomsman (9)" />
                                <div class="error-message" id="bridesmaid9-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid10">Bridesmaid & Groomsman (10):</label><br>
                            <input type="text" name="bridesmaid10" id="bridesmaid10" class="event-input"
                                placeholder="Bridesmaid & Groomsman (10)" />
                                <div class="error-message" id="bridesmaid10-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="mainhonor">Maid/Matron of Honor & Best Man:</label><br>
                            <input type="text" name="mainhonor" id="mainhonor" class="event-input"
                                placeholder="Maid/Matron of Honor & Best Man" />
                                <div class="error-message" id="mainhonor-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="flowergirl">Flower Girl(s) & Ringbearer:</label><br>
                            <input type="text" name="flowergirl" id="flowergirl" class="event-input"
                                placeholder="Flower Girl(s) & Ringbearer" />
                                <div class="error-message" id="flowergirl-error"></div>
                        </div>
                        <div class="col-md-6">
                            <label for="bridegroom">Bride & Groom:</label><br>
                            <input type="text" name="bridegroom" id="bridegroom" class="event-input"
                                placeholder="Bride & Groom" />
                                <div class="error-message" id="bridegroom-error"></div>
                        </div>
                        <div class="col-md-12">
                            <label for="specialintro">Special Intro Instruction:</label><br>
                            <input type="text" name="bridal_pary_specialintro" id="bridal_pary_specialintro" class="event-input"
                                placeholder="ie. grandparents mentioned, other relatives etc..." />
                                <div class="error-message" id="bridal_pary_specialintro-error"></div>
                        </div>

                    </div>
                </div>
                <div class="form-div mb-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">DO NOT PLAY LIST</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="songsnot">Any songs/artists not to be played:</label><br>
                            <textarea rows="4" id="songsnot" name="songsnot" class="song-text w-100"
                                placeholder="Any songs/artists not to be played"></textarea>
                                <div class="error-message" id="songsnot-error"></div>
                        </div>
                    </div>
                </div>
                <div class="form-div">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="wed1-a">SONG REQUESTS (TITLE/ARTIST)</h4>
                        </div>
                        <div class="col-md-12">
                            <label for="songtobe">Please list 5-20 songs you would like to be played:</label><br>
                            <textarea rows="8" id="songtobe" name="songtobe" class="song-text w-100"
                                placeholder="These will also help determine the direction of the rest of the selections"></textarea>
                                <div class="error-message" id="songtobe-error"></div>
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