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

    <section class="nonweb-bg2">
        <div class="container">
            <form>
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
                                and talk through the day in full</p>
                        </div>
                        <div class="col-md-6">
                            <label for="bride">Bride/Spouse</label><br>
                            <input type="text" name="bride" id="bride" class="event-input" placeholder="Name" />
                        </div>
                        <div class="col-md-6">
                            <label for="groom">Groom/Spouse</label><br>
                            <input type="text" name="groom" id="groom" class="event-input" placeholder="Name" />
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Phone</label><br>
                            <input type="text" name="phone" id="phone" class="event-input" placeholder="+123456789" />
                        </div>
                        <div class="col-md-6">
                            <label for="altphone">Alternate Phone</label><br>
                            <input type="text" name="altphone" id="altphone" class="event-input"
                                placeholder="+123456789" />
                        </div>
                        <div class="col-md-6">
                            <label for="timecall">Best Time to Call</label><br>
                            <select id="timecall" class="event-input">
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
                            <label for="email">Email</label><br>
                            <input type="text" name="email" id="email" class="event-input" placeholder="Email" />
                        </div>
                        <div class="col-md-6">
                            <label for="wed-date">Wedding Date</label><br>
                            <input type="date" id="wed-date" name="wed-date" class="event-input" />
                        </div>
                        <div class="col-md-6">
                            <label for="venue-rec">Venue Reception Ballroom</label><br>
                            <input type="text" name="venue-rec" id="venue-rec" class="event-input"
                                placeholder="Venue Reception Ballroom" />
                        </div>
                        <div class="col-md-6">
                            <label for="banq-ven">Banquet Venue</label><br>
                            <input type="text" name="banq-ven" id="banq-ven" class="event-input"
                                placeholder="Banquet Venue" />
                        </div>
                        <div class="col-md-6">
                            <label for="numberguest">Number of Guests:</label><br>
                            <input type="number" name="numberguest" id="numberguest" class="event-input"
                                placeholder="100" />
                        </div>
                        <div class="col-md-6">
                            <label for="contactper">Addt'l Contact Person</label><br>
                            <input type="text" name="contactper" id="contactper" class="event-input"
                                placeholder="Name/Relationship" />
                        </div>
                        <div class="col-md-6">
                            <label for="contactph">Addt'l Contact Phone</label><br>
                            <input type="text" name="contactph" id="contactph" class="event-input"
                                placeholder="Addt'l Contact Phone" />
                        </div>
                        <div class="col-md-6">
                            <label for="vencont">Venue Contact Person</label><br>
                            <input type="text" name="vencont" id="vencont" class="event-input" placeholder="Name" />
                        </div>
                        <div class="col-md-6">
                            <label for="vencontper">Venue Contact Person Phone</label><br>
                            <input type="text" name="vencontper" id="vencontper" class="event-input"
                                placeholder="+123456789" />
                        </div>
                        <div class="col-md-6">
                            <label for="guestarr">Guest Arrival</label><br>
                            <select id="guestarr" class="event-input">
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
                            <label for="wedparty">Wedding Party Arrival</label><br>
                            <select id="wedparty" class="event-input">
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
                            <label for="photographer">Photographer</label><br>
                            <input type="text" name="photographer" id="photographer" class="event-input"
                                placeholder="Photographer" />
                        </div>
                        <div class="col-md-6">
                            <label for="videographer">Videographer</label><br>
                            <input type="text" name="videographer" id="videographer" class="event-input"
                                placeholder="Videographer" />
                        </div>
                        <div class="col-md-6">
                            <label for="setting">Setting</label><br>
                            <input type="text" name="setting" id="setting" class="event-input" placeholder="Setting" />
                        </div>
                        <div class="col-md-6">
                            <label for="elevator">Elevator</label><br>
                            <select id="elevator" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
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
                            <input type="text" name="sound" id="sound" class="event-input"
                                placeholder="Sound Choice Hosting Ceremony" />
                        </div>
                        <div class="col-md-6">
                            <label for="service">If so, which service</label><br>
                            <input type="text" name="service" id="service" class="event-input"
                                placeholder="If so, which service" />
                        </div>
                        <div class="col-md-6">
                            <label for="officiant">Name of Officiant:</label><br>
                            <input type="text" name="officiant" id="officiant" class="event-input"
                                placeholder="Name of Officiant:" />
                        </div>
                        <div class="col-md-6">
                            <label for="offphone">Officiant Phone</label><br>
                            <input type="text" name="offphone" id="offphone" class="event-input"
                                placeholder="+123456789" />
                        </div>
                        <div class="col-md-6">
                            <label for="song1">Processional Song 1</label><br>
                            <input type="text" name="song1" id="song1" class="event-input" placeholder="Song 1" />
                        </div>
                        <div class="col-md-6">
                            <label for="song2">Processional Song 2</label><br>
                            <input type="text" name="song2" id="song2" class="event-input" placeholder="Song 2" />
                        </div>
                        <div class="col-md-6">
                            <label for="song3">Processional Song 3 (optional)</label><br>
                            <input type="text" name="song3" id="song3" class="event-input" placeholder="Song 3" />
                        </div>
                        <div class="col-md-6">
                            <label for="song4">Processional Song 4 (optional)</label><br>
                            <input type="text" name="song4" id="song4" class="event-input" placeholder="Song 4" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridalsong">BRIDAL/GRAND MARCH SONG</label><br>
                            <input type="text" name="bridalsong" id="bridalsong" class="event-input"
                                placeholder="bridal/grand march song:" />
                        </div>
                        <div class="col-md-6">
                            <label for="unitysand">Unity/Sand Background Music</label><br>
                            <input type="text" name="unitysand" id="unitysand" class="event-input"
                                placeholder="Unity/Sand Background Music" />
                        </div>
                        <div class="col-md-6">
                            <label for="recmusic">Recessional Music</label><br>
                            <input type="text" name="recmusic" id="recmusic" class="event-input"
                                placeholder="Recessional Music" />
                        </div>
                        <div class="col-md-6">
                            <label for="cersetting">Ceremony Setting</label><br>
                            <input type="text" name="cersetting" id="cersetting" class="event-input"
                                placeholder="Setting" />
                        </div>
                        <div class="col-md-6">
                            <label for="client">Power provided by client/venue?:</label><br>
                            <input type="text" name="client" id="client" class="event-input"
                                placeholder="Client/Venue" />
                        </div>
                        <div class="col-md-6">
                            <label for="othercer">Other ceremony details we may need</label><br>
                            <input type="text" name="othercer" id="othercer" class="event-input"
                                placeholder="other ceremony details we may need" />
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
                            <select id="starttime" class="event-input">
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
                            <label for="endtime">End Time</label><br>
                            <select id="endtime" class="event-input">
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
                            <label for="coctail">Cocktail Hour Location</label><br>
                            <input type="text" name="coctail" id="coctail" class="event-input"
                                placeholder="Cocktail Hour Location" />
                        </div>
                        <div class="col-md-6">
                            <label for="power">Power Provided</label><br>
                            <input type="text" name="power" id="power" class="event-input"
                                placeholder="Power Provided" />
                        </div>
                        <div class="col-md-6">
                            <label for="coctailmusic">Cocktail Music Service</label><br>
                            <select id="coctailmusic" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="coctailstyle">Cocktail Music Style</label><br>
                            <select id="coctailstyle" class="event-input">
                                <option value="Pop">Pop</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Classical">Classical</option>
                                <option value="Country">Country</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="cocktaildetails">Please list any other cocktail hour details we may
                                need:</label><br>
                            <input type="text" name="cocktaildetails" id="cocktaildetails" class="event-input"
                                placeholder="Please list any other cocktail hour details we may need:" />
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
                            <select id="startingtime" class="event-input">
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
                            <label for="endingtime">Ending Time</label><br>
                            <select id="endingtime" class="event-input">
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
                            <label for="introduction">Introductions</label><br>
                            <select id="introduction" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="couple">Wedding Party Introduction Music</label><br>
                            <input type="text" name="couple" id="couple" class="event-input"
                                placeholder="If different from couple" />
                        </div>
                        <div class="col-md-6">
                            <label for="newintro">Newlywed Intro Music</label><br>
                            <input type="text" name="newintro" id="newintro" class="event-input"
                                placeholder="Newlywed Intro Music" />
                        </div>
                        <div class="col-md-6">
                            <label for="specialintro">Special Intro Instruction</label><br>
                            <input type="text" name="specialintro" id="specialintro" class="event-input"
                                placeholder="Special Intro Instruction" />
                        </div>
                        <div class="col-md-6">
                            <label for="toast">Toast</label><br>
                            <select id="toast" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="toastby">Toast By</label><br>
                            <input type="text" name="toastby" id="toastby" class="event-input" placeholder="Toast By" />
                        </div>
                        <div class="col-md-6">
                            <label for="speakeradd">Addt'l Speaker</label><br>
                            <input type="text" name="speakeradd" id="speakeradd" class="event-input"
                                placeholder="Addt'l Speaker" />
                        </div>
                        <div class="col-md-6">
                            <label for="speakeradd2">Addt'l Speaker 2</label><br>
                            <input type="text" name="speakeradd2" id="speakeradd2" class="event-input"
                                placeholder="Addt'l Speaker 2" />
                        </div>
                        <div class="col-md-6">
                            <label for="blessing">Blessing</label><br>
                            <select id="blessing" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="blessingby">Blessing By</label><br>
                            <input type="text" name="blessingby" id="blessingby" class="event-input"
                                placeholder="Blessing By" />
                        </div>
                        <div class="col-md-6">
                            <label for="dinnerstyle">Dinner Music Type</label><br>
                            <select id="dinnerstyle" class="event-input">
                                <option value="Pop">Pop</option>
                                <option value="Jazz">Jazz</option>
                                <option value="Classical">Classical</option>
                                <option value="Country">Country</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="dinnerserved">Dinner Served</label><br>
                            <select id="dinnerserved" class="event-input">
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
                            <label for="style">Style</label><br>
                            <select id="style" class="event-input">
                                <option value="buffet">Buffet</option>
                                <option value="plated">Plated</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="bridegroomdance">Bride and Groom Dance</label><br>
                            <select id="bridegroomdance" class="event-input">
                                <option value="afterintros">After Intros</option>
                                <option value="duringdinner">During Dinner</option>
                                <option value="afterdinner">After Dinner</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Bride and Groom Song</label><br>
                            <input type="text" name="birdesong" id="birdesong" class="event-input"
                                placeholder="Bride and Groom Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridefatherdance">Bride and Father Dance</label><br>
                            <select id="bridefatherdance" class="event-input">
                                <option value="afterintros">After Intros</option>
                                <option value="duringdinner">During Dinner</option>
                                <option value="afterdinner">After Dinner</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Bride and Father Song</label><br>
                            <input type="text" name="birdesong" id="birdesong" class="event-input"
                                placeholder="Bride and Groom Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="groommotherdance">Groom and Mother Dance</label><br>
                            <select id="groommotherdance" class="event-input">
                                <option value="afterintros">After Intros</option>
                                <option value="duringdinner">During Dinner</option>
                                <option value="afterdinner">After Dinner</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Groom and Mother Song</label><br>
                            <input type="text" name="birdesong" id="birdesong" class="event-input"
                                placeholder="Bride and Groom Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridalpartdance">Bridal Party Dance</label><br>
                            <select id="bridalpartdance" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Bridal Party Song</label><br>
                            <input type="text" name="birdalsong" id="birdalsong" class="event-input"
                                placeholder="Bridal Party Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="cakecutting">Cake Cutting</label><br>
                            <select id="cakecutting" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="birdesong">Cake Cutting Song</label><br>
                            <input type="text" name="cakesong" id="cakesong" class="event-input"
                                placeholder="Cake Cutting Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="bonquettoss">Bouquet Toss</label><br>
                            <select id="bonquettoss" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="banquetsong">Bouquet Toss Song</label><br>
                            <input type="text" name="banquetsong" id="banquetsong" class="event-input"
                                placeholder="Bouquet Toss Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="gartertoss">Garter Toss</label><br>
                            <select id="gartertoss" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="songgarter">Song for removing garter from brides leg:</label><br>
                            <input type="text" name="songgarter" id="songgarter" class="event-input"
                                placeholder="Song for removing garter from brides leg" />
                        </div>
                        <div class="col-md-6">
                            <label for="songgarterlad">Song for garter to be put on the ladies: </label><br>
                            <input type="text" name="songgarterlad" id="songgarterlad" class="event-input"
                                placeholder="Song for garter to be put on the ladies" />
                        </div>
                        <div class="col-md-6">
                            <label for="lastdance">Last Dance of Evening</label><br>
                            <select id="lastdance" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="lastsong">Last Dance Song: </label><br>
                            <input type="text" name="lastsong" id="lastsong" class="event-input"
                                placeholder="Last Dance Song" />
                        </div>
                        <div class="col-md-6">
                            <label for="specialityexit">Specialty Exit:</label><br>
                            <select id="specialityexit" class="event-input">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="specialexitdet">Specialty Exit Details: </label><br>
                            <input type="text" name="specialexitdet" id="specialexitdet" class="event-input"
                                placeholder="Specialty Exit Details" />
                        </div>
                        <div class="col-md-12">
                            <label for="recdetails">Please list any other reception details we may need: </label><br>
                            <input type="text" name="recdetails" id="recdetails" class="event-input"
                                placeholder="Please list any other reception details we may need" />
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
                        </div>
                        <div class="col-md-6">
                            <label for="parentsgroom">Parents of the Groom:</label><br>
                            <input type="text" name="parentsgroom" id="parentsgroom" class="event-input"
                                placeholder="Parents of the Groom" />
                        </div>
                        <div class="col-md-6">
                            <label for="usher">Usher(s):</label><br>
                            <input type="text" name="usher" id="usher" class="event-input" placeholder="Usher(s)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid">Bridesmaid & Groomsman (1):</label><br>
                            <input type="text" name="bridesmaid" id="bridesmaid" class="event-input"
                                placeholder="Bridesmaid & Groomsman (1)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid2">Bridesmaid & Groomsman (2):</label><br>
                            <input type="text" name="bridesmaid2" id="bridesmaid2" class="event-input"
                                placeholder="Bridesmaid & Groomsman (2)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid3">Bridesmaid & Groomsman (3):</label><br>
                            <input type="text" name="bridesmaid3" id="bridesmaid3" class="event-input"
                                placeholder="Bridesmaid & Groomsman (3)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid4">Bridesmaid & Groomsman (4):</label><br>
                            <input type="text" name="bridesmaid4" id="bridesmaid4" class="event-input"
                                placeholder="Bridesmaid & Groomsman (4)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid5">Bridesmaid & Groomsman (5):</label><br>
                            <input type="text" name="bridesmaid5" id="bridesmaid5" class="event-input"
                                placeholder="Bridesmaid & Groomsman (5)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid6">Bridesmaid & Groomsman (6):</label><br>
                            <input type="text" name="bridesmaid6" id="bridesmaid6" class="event-input"
                                placeholder="Bridesmaid & Groomsman (6)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid7">Bridesmaid & Groomsman (7):</label><br>
                            <input type="text" name="bridesmaid7" id="bridesmaid7" class="event-input"
                                placeholder="Bridesmaid & Groomsman (7)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid8">Bridesmaid & Groomsman (8):</label><br>
                            <input type="text" name="bridesmaid8" id="bridesmaid8" class="event-input"
                                placeholder="Bridesmaid & Groomsman (8)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid9">Bridesmaid & Groomsman (9):</label><br>
                            <input type="text" name="bridesmaid9" id="bridesmaid9" class="event-input"
                                placeholder="Bridesmaid & Groomsman (9)" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridesmaid10">Bridesmaid & Groomsman (10):</label><br>
                            <input type="text" name="bridesmaid10" id="bridesmaid10" class="event-input"
                                placeholder="Bridesmaid & Groomsman (10)" />
                        </div>
                        <div class="col-md-6">
                            <label for="mainhonor">Maid/Matron of Honor & Best Man:</label><br>
                            <input type="text" name="mainhonor" id="mainhonor" class="event-input"
                                placeholder="Maid/Matron of Honor & Best Man" />
                        </div>
                        <div class="col-md-6">
                            <label for="flowergirl">Flower Girl(s) & Ringbearer:</label><br>
                            <input type="text" name="flowergirl" id="flowergirl" class="event-input"
                                placeholder="Flower Girl(s) & Ringbearer" />
                        </div>
                        <div class="col-md-6">
                            <label for="bridegroom">Bride & Groom:</label><br>
                            <input type="text" name="bridegroom" id="bridegroom" class="event-input"
                                placeholder="Bride & Groom" />
                        </div>
                        <div class="col-md-12">
                            <label for="specialintro">Special Intro Instruction:</label><br>
                            <input type="text" name="specialintro" id="specialintro" class="event-input"
                                placeholder="ie. grandparents mentioned, other relatives etc..." />
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