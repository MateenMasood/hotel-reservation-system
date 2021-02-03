@extends('webSite.layouts.master')

@section('css')

@endsection

@section('content')

        <!-- ======================== About ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('assets/webSiteAssets/images/header-1.jpg') }})">
                <div class="container">
                    <h2 class="title">The hotel</h2>
                    <p>The place, our services & our team</p>
                </div>
            </div>

            <div class="image-blocks image-blocks-category">

                <div class="container">
                    <div class="about">

                        <!--text-block-->

                        <div class="text-block">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="text">
                                        <h2>About Colina Hotel</h2>

                                        <!-- ===  Gallery === -->

                                        <div class="gallery">

                                            <div class="owl-slider owl-slider-gallery">

                                                <!-- === slide item === -->

                                                <div class="item" style="background-image:url({{ asset('assets/webSiteAssets/images/slide-2.jpg') }})"></div>

                                                <!-- === slide item === -->

                                                <div class="item" style="background-image:url({{ asset('assets/webSiteAssets/images/room-3.jpg') }})"></div>


                                                <!-- === slide item === -->

                                                <div class="item" style="background-image:url({{ asset('assets/webSiteAssets/images/slide-3.jpg') }})"></div>


                                            </div> <!--/owl-slider-->

                                        </div>

                                        <p><strong class="text-center">The begining</strong></p>
                                        <p>
                                            The intimate side of our 19-room hotel enables us to provide personal customer service so we can help you during
                                            stay in Paris and ensure you have a great experience.
                                        </p>
                                        <p>
                                            We are delighted that 97.9% of our guests were happy with our service in 2015 (source – customer survey
                                            This is what has made Hôtel La Tamise such a popular place among our guests who have ranked us top out of
                                            1809 hotels in Paris on Trip Advisor.
                                        </p>

                                        <p>
                                            <img src="{{ asset('assets/webSiteAssets/images/room-2.jpg') }}" alt="Colina Hotel - Resort & accommodation" />
                                        </p>

                                        <p><strong class="text-center">Facilities</strong></p>
                                        <p>
                                            A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a
                                            modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a fridge and
                                            other kitchen facilities, upholstered chairs, a flatscreen television and en-suite bathrooms. Small, lower-priced
                                            hotels may offer only the most basic guest services and facilities.
                                        </p>

                                        <p>
                                            Larger, higher-priced hotels may provide additional guest facilities such as a swimming pool, business centre
                                            (with computers, printers and other office equipment), childcare, conference and event facilities, tennis or basketball
                                            courts, gymnasium, restaurants, day spa and social function services.
                                            Hotel rooms are usually numbered (or named in some smaller hotels and B&Bs) to allow guests to
                                            identify their room. Some boutique, high-end hotels have custom decorated rooms. Some hotels offer meals as part of
                                            a room and board arrangement. In the United Kingdom, a hotel is required by law to serve food and drinks to all guests
                                            within certain stated hours. In Japan, capsule hotels provide a tiny room suitable only for sleeping and shared
                                            bathroom facilities.
                                        </p>
                                        <p><strong class="text-center">A bit of history</strong></p>
                                        <p>
                                            The precursor to the modern hotel was the inn of medieval Europe. For a period of about 200 years from the mid-17th
                                            century, coaching inns served as a place for lodging for coach travelers. Inns began to cater to richer clients in
                                            the mid-18th century. One of the first hotels in a modern sense was opened in Exeter in 1768. Hotels proliferated
                                            throughout Western Europe and North America in the early 19th century, and luxury hotels began to spring up in the
                                            later part of the 19th century.
                                        </p>
                                    </div>

                                    <h2>Meet our team</h2>

                                    <p>
                                        Our architects and designers constantly and carefully monitor the environment, they accept and develop changes, research fashion and architectural, as well as sociological, changes and transform them into unique design.
                                    </p>
                                    <!-- === Our team === -->

                                    <div class="team">

                                        <div class="row">

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">Lea Nils</h4>
                                                            <h6 class="title">Director</h6>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="{{ asset('assets/webSiteAssets/images/user-5.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        <div class="inner">
                                                            <a href="#"><i class="fa fa-phone"></i></a>
                                                            <a href="#"><i class="fa fa-envelope"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">Nora Star</h4>
                                                            <h6 class="title">Architect</h6>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="{{ asset('assets/webSiteAssets/images/user-4.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        <div class="inner">
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">Jenna Hale</h4>
                                                            <h6 class="title">Quality director</h6>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="{{ asset('assets/webSiteAssets/images/user-3.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        <div class="inner">
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>

                                            <!-- === team member === -->

                                            <div class="col-sm-3">
                                                <article>
                                                    <div class="details details-text">
                                                        <div class="inner">
                                                            <h4 class="title">Glen Jordan</h4>
                                                            <h6 class="title">Supervisor</h6>
                                                        </div>
                                                    </div>
                                                    <div class="image">
                                                        <img src="{{ asset('assets/webSiteAssets/images/user-4.jpg') }}" alt="" />
                                                    </div>
                                                    <div class="details details-social">
                                                        <div class="inner">
                                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>

                                        </div> <!--/row-->

                                    </div> <!--/team-->
                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>


                        <!--=== item block === -->

                        <div class="blocks blocks-left">
                            <div class="item">
                                <div class="text">
                                    <div class="h2">Hotel information</div>
                                    <ul>
                                        <li>Check-in Time: 3 PM</li>
                                        <li>Check-out Time: 12 PM</li>
                                        <li>Complimentary WiFi for All Members</li>
                                        <li>Valet Parking $65-$75/day</li>
                                        <li>Pets Welcome (fee)</li>
                                        <li>Early Check-In Available</li>
                                        <li>Best Prices Guaranteed</li>
                                        <li>Free parking for All Inclusive package</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image" style="background-image:url({{ asset('assets/webSiteAssets/images/slide-1.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/slide-1.jpg') }}" alt="">
                            </div>
                        </div>

                        <!--=== item block === -->

                        <div class="blocks blocks-right">
                            <div class="item">
                                <div class="text">
                                    <div class="h2">Hotel features</div>
                                    <ul>
                                        <li>FIT ® Gym & Fitness</li>
                                        <li>Wired Business Center</li>
                                        <li>All Inclusive ® Service</li>
                                        <li>Bliss & Spa</li>
                                        <li>SPG Keyless</li>
                                        <li>Resturant & lounge bar</li>
                                        <li>Private rooms</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="image" style="background-image:url({{ asset('assets/webSiteAssets/images/services-4.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/services-4.jpg') }}" alt="" />
                            </div>
                        </div>

                        <!-- === text-card === -->

                        <div class="text-block">
                            <div class="row">
                                <div class="col-md-8 col-lg-offset-2">
                                    <h2>Luxury</h2>
                                    <p>
                                        Timeshare and destination clubs are a form of property ownership involving ownership of an individual unit
                                        of accommodation for seasonal usage. A motel is a small-sized low-rise lodging with direct access to individual
                                        rooms from the car park. Boutique hotels are typically hotels with a unique environment or intimate setting.
                                        A number of hotels have entered the public consciousness through popular culture, such as the Ritz Hotel in London.
                                    </p>
                                    <h2>Near by</h2>
                                    <p>
                                        Some hotels are built specifically as a destination in itself, for example at casinos and holiday resorts.
                                        Most hotel establishments are run by a General Manager who serves as the head executive (often referred to as
                                        the "Hotel Manager"), department heads who oversee various departments within a hotel (e.g., food service),
                                        middle managers, administrative staff, and line-level supervisors. The organizational chart and volume
                                        of job positions and hierarchy varies by hotel size, function and class, and is often determined by hotel
                                        ownership and managing companies.
                                    </p>

                                    <div class="cards cards-block">

                                        <div class="row">

                                            <!-- === item === -->

                                            <div class="col-xs-12 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-1.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/activity-1.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean" onclick="">Museums</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-2.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/activity-2.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Nightlife</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-12">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-3.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/activity-3.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Food & drink</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-4.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/activity-4.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">Shopping</a>
                                                </figure>
                                            </div>

                                            <!-- === item === -->

                                            <div class="col-xs-6 col-md-6">
                                                <figure>
                                                    <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-5.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/activity-5.jpg') }}" alt="" />
                                                    </figcaption>
                                                    <a href="#" class="btn btn-clean">The City</a>
                                                </figure>
                                            </div>

                                        </div> <!--/row-->

                                    </div> <!--/cards-->

                                </div> <!--/col-->
                            </div> <!--/row-->
                        </div>

                    </div> <!--/container-->

                </div>
            </div>
        </section>



@endsection

@section('js')

@endsection