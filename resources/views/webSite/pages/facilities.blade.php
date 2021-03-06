@extends('webSite.layouts.master')

@section('css')

@endsection

@section('content')

        <!-- ========================  Facility ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('assets/webSiteAssets/images/header-1.jpg') }})">
                <div class="container text-center">
                    <h2 class="title">Resurant</h2>
                    <p>Restaurants & In-Room Dining</p>
                </div>
            </div>

            <div class="facility">

                <div class="container">
                    <div class="facility-gallery">
                        <div class="owl-slider owl-theme owl-slider-gallery">

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url({{ asset('assets/webSiteAssets/images/item-2.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/item-2.jpg') }}" alt="" />
                            </div>

                            <!-- === slide item === -->

                            <div class="item" style="background-image:url({{ asset('assets/webSiteAssets/images/item-1.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/item-1.jpg') }}" alt="" />
                            </div>

                        </div> <!--/owl-slider-->

                    </div> <!--/facilty-gallery-->

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">

                            <!-- === facility-info === -->

                            <div class="facility-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Restaurants</h2>
                                        <p>
                                            The Resturant is the Colina Resort's iconic dining venue, serving breakfast, afternoon tea and an evening service complimented by
                                            the recent addition of a bar and craft cocktail program.
                                        </p>
                                        <!--<p>
                                    Enjoy the world’s finest wines, champagnes, caviar and other indulgences while
                                    overlooking Fifth Avenue and the famous Pulitzer Fountain.
                                </p>-->
                                    </div>
                                    <div class="col-md-6">
                                        <h2>In-room dining</h2>
                                        <p>
                                            A private meal in the comfort of your room or suite is one of the great pleasures of staying at The Plaza.  Enjoy our celebrated cuisine in the comfort of your own room 24-hours a day.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- === facility-addons === -->

                            <div class="facility-addons">

                                <!-- === nav-tabs === -->

                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#menus" aria-controls="menus" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-kitchen"></i>
                                            <span class="visible-md visible-lg">Menus</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#chefs" aria-controls="chefs" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-guestbook"></i>
                                            <span class="visible-md visible-lg">Chefs</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#events" aria-controls="events" role="tab" data-toggle="tab">
                                            <i class="hotelicon hotelicon-clock"></i>
                                            <span class="visible-md visible-lg">Events</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- === tab-panes === -->

                                <div class="tab-content">

                                    <!-- ============ tab #1 ============ -->

                                    <div role="tabpanel" class="tab-pane active" id="menus">
                                        <div class="content">

                                            <div class="cards">

                                                <div class="row">

                                                    <!-- === item === -->

                                                    <div class="col-xs-12 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/food-1.jpg') }})">
                                                                <img src="{{ asset('assets/webSiteAssets/images/food-1.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean" onclick="">Breakfast</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/food-2.jpg') }})">
                                                                <img src="{{ asset('assets/webSiteAssets/images/food-2.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Lunch</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/food-3.jpg') }})">
                                                                <img src="{{ asset('assets/webSiteAssets/images/food-3.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">Dinner</a>
                                                        </figure>
                                                    </div>

                                                    <!-- === item === -->

                                                    <div class="col-xs-6 col-md-6">
                                                        <figure>
                                                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/food-4.jpg') }})">
                                                                <img src="{{ asset('assets/webSiteAssets/images/food-4.jpg') }}" alt="" />
                                                            </figcaption>
                                                            <a href="#" class="btn btn-clean">In-room</a>
                                                        </figure>
                                                    </div>

                                                </div> <!--/row-->

                                            </div> <!--/cards-->

                                        </div>
                                    </div>

                                    <!-- ============ tab #2 ============ -->

                                    <div role="tabpanel" class="tab-pane" id="chefs">
                                        <div class="content">

                                            <div class="image-blocks image-blocks-category">

                                                <!--=== item block === -->

                                                <div class="blocks blocks-left">
                                                    <div class="item">
                                                        <div class="text">
                                                            <h2 class="title">John Mike Doe <small>Executive pastry chef</small></h2>
                                                            <p>Gubergren eros stet est sit et et magna no praesent nam duo duo dolore dolore hendrerit takimata dolore duo gubergren stet sit commodo eleifend duo</p>
                                                            <p>Vero sed quis euismod et erat dolore elitr elitr invidunt facilisis amet labore nonumy sea at labore erat et iriure et stet sit dolore justo consetetur id dolor sed diam</p>
                                                            <p>Et no odio ipsum est eirmod lorem at accusam sit sea eros at sit justo sed suscipit doming sadipscing dolore aliquyam et no accusam dolores</p>
                                                        </div>
                                                    </div>
                                                    <div class="image" style="background-image:url({{ asset('assets/webSiteAssets/images/user-1.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/user-1.jpg') }}" alt="" />
                                                    </div>
                                                </div>

                                                <!--=== item block === -->

                                                <div class="blocks blocks-right">
                                                    <div class="item">
                                                        <div class="text">
                                                            <h2 class="title">John Mike Doe <small>Lead chef</small></h2>
                                                            <p>Gubergren eros stet est sit et et magna no praesent nam duo duo dolore dolore hendrerit takimata dolore duo gubergren stet sit commodo eleifend duo</p>
                                                            <p>Vero sed quis euismod et erat dolore elitr elitr invidunt facilisis amet labore nonumy sea at labore erat et iriure et stet sit dolore justo consetetur id dolor sed diam</p>
                                                            <p>Et no odio ipsum est eirmod lorem at accusam sit sea eros at sit justo sed suscipit doming sadipscing dolore aliquyam et no accusam dolores</p>
                                                        </div>
                                                    </div>
                                                    <div class="image" style="background-image:url({{ asset('assets/webSiteAssets/images/user-2.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/user-2.jpg') }}" alt="" />
                                                    </div>
                                                </div>

                                            </div> <!--/image-blocks-->
                                        </div> <!--/content-->
                                    </div>

                                    <!-- ============ tab #3 ============ -->

                                    <div role="tabpanel" class="tab-pane" id="events">
                                        <div class="content">

                                            <div class="image-blocks image-blocks-category">

                                                <!--=== item block === -->

                                                <div class="blocks blocks-left">
                                                    <div class="item">
                                                        <div class="text">

                                                            <!--=== events ===-->

                                                            <div class="events">

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>28</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Newly renovated by Master Architect Thierry Despont
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>22</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Ideal venue for cocktail style rehearsal dinners
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                            </div> <!--/events-->

                                                        </div> <!--/text-->
                                                    </div> <!--/item-->
                                                    <div class="image" style="background-image:url({{ asset('assets/webSiteAssets/images/event-1.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/event-1.jpg') }}" alt="" />
                                                    </div>
                                                </div> <!--/blocks-->
                                                <!--=== item block === -->

                                                <div class="blocks blocks-right">
                                                    <div class="item">
                                                        <div class="text">
                                                            <div class="events">

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>28</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Newly renovated by Master Architect Thierry Despont
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                                <!--=== event item ===-->

                                                                <a href="#">
                                                                    <div class="event">
                                                                        <div class="date">
                                                                            <div class="date-card">
                                                                                <span>Sep</span>
                                                                                <strong>22</strong>
                                                                            </div>
                                                                        </div>
                                                                        <div class="caption">
                                                                            Ideal venue for cocktail style rehearsal dinners
                                                                        </div>
                                                                    </div>
                                                                </a>

                                                            </div> <!--/events-->
                                                        </div>
                                                    </div>
                                                    <div class="image" style="background-image:url({{ asset('assets/webSiteAssets/images/event-2.jpg') }})">
                                                        <img src="{{ asset('assets/webSiteAssets/images/event-2.jpg') }}" alt="" />
                                                    </div>
                                                </div>

                                            </div> <!--/image-blocks-->

                                        </div> <!--/content-->
                                    </div>

                                </div> <!--/tab-content-->

                            </div> <!--/facility-addons-->
                        </div> <!--/col-md-10-->
                    </div> <!--/row-->

                </div> <!--/container-->
            </div>



        </section>


        <!-- ========================  Stretcher widget ======================== -->

        <section class="stretcher-wrapper stretcher-wrapper-noheader">

            <!-- === stretcher header === -->

            <div class="section-header hidden">
                <div class="container">
                    <h2 class="title">Wellness & spa <a href="#" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
                    <p>
                        With the best luxury spa, salon and fitness experiences
                    </p>
                </div>
            </div>

            <!-- === stretcher === -->

            <ul class="stretcher">

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ asset('assets/webSiteAssets/images/services-1.jpg') }});">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h2">Spa center</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Spa center</h4>
                        <figcaption>Unparalleled devotion to luxury</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="#">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ asset('assets/webSiteAssets/images/services-2.jpg') }});">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h2">Gym</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Gym</h4>
                        <figcaption>Care about results</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="#">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ asset('assets/webSiteAssets/images/services-3.jpg') }});">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h2">Fitness</span>
                        </div>
                    </div>
                    <figure>
                        <h4>Fitness</h4>
                        <figcaption>Your daily activities</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="#">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ asset('assets/webSiteAssets/images/services-4.jpg') }});">


                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h2">Beauty salon</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Beauty salon</h4>
                        <figcaption>Hair salons and spas</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="#">Anchor link</a>
                </li>

                <!-- === stretcher item more === -->

                <li class="stretcher-item more">
                    <div class="more-icon">
                        <span data-title-show="Show more" data-title-hide="+"></span>
                    </div>
                    <a href="#"></a>
                </li>

            </ul>
        </section>

        <!-- ========================  Cards ======================== -->

        <section class="cards">

            <!-- === cards header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Near by <a href="#" class="btn btn-sm btn-clean-dark">View all</a></h2>
                    <p>Here's a selection of ionic sites related to art, fashion and design.</p>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- === item === -->

                    <div class="col-xs-12 col-md-8">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-1.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/activity-1.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean" onclick="">Museums</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-2.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/activity-2.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Nightlife</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-3.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/activity-3.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Food & drink</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-4.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/activity-4.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">Shopping</a>
                        </figure>
                    </div>

                    <!-- === item === -->

                    <div class="col-xs-6 col-md-4">
                        <figure>
                            <figcaption style="background-image:url({{ asset('assets/webSiteAssets/images/activity-5.jpg') }})">
                                <img src="{{ asset('assets/webSiteAssets/images/activity-5.jpg') }}" alt="" />
                            </figcaption>
                            <a href="#" class="btn btn-clean">The City</a>
                        </figure>
                    </div>

                </div> <!--/row-->

            </div> <!--/container-->
        </section>


@endsection

@section('js')

@endsection
