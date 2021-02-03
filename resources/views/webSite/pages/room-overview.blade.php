@extends('webSite.layouts.master')

@section('css')

<link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />


@endsection

@section('content')

        <!-- ========================  Room ======================== -->

        <section class="page">

            <!-- ===  Page header === -->

            <div class="page-header" style="background-image:url({{ asset('storage/'.$roomDetail['roomTypeFile'][0]['path']) }}">
                <div class="container">
                    <h2 class="title">{{ $roomDetail->room_type_name }}</h2>
                    <p>Available from {{ $roomDetail->price_per_room }} per night</p>
                </div>
            </div>

            <div class="room">

                <!-- === Room gallery === -->

                <div class="room-gallery">
                    <div class="container">
                        <div class="owl-slider owl-theme owl-slider-gallery">
                            <!-- === slide item === -->

                            @foreach ($roomDetail->roomTypeFile as $key => $item)
                            @if ($key > 0)
                            <div class="item" style="background-image:url({{ asset('storage/'.$item['path']) }}">
                                <img src="{{ asset('storage/'.$item['path']) }}" alt="" />
                            </div>
                                
                            @endif
                            @endforeach

                        </div> <!--/owl-slider-->

                    </div>
                </div> <!--/room-gallery-->
                <!-- === Booking === -->
                <div class="text-center pt-3"> 
                    <p class="mt-3"> 
                        {!! ($roomDetail->bed_type != null)? "<i class='mdi mdi-bed-queen-outline'></i> <span> $roomDetail->bed_type  </span>": '' !!} <span  class="ml-3"></span> 
                        
                        {!! ($roomDetail->no_of_person != null)? "<i class='mdi mdi-18px mdi-account-multiple-outline' style='margin-left: 12px;'></i> <span> $roomDetail->no_of_person  </span>": '' !!} <span  class="ml-3"></span> 
  
                        {!! ($roomDetail->no_of_kids != null)? "<i class='mdi mdi-human-child' style='margin-left: 12px;'></i> <span> $roomDetail->no_of_kids  </span>": '' !!} <span  class="ml-3"></span> 
                    
                        {!! ($roomDetail->room_size != null)? "<i class='mdi mdi-tape-measure' style='margin-left: 12px;'></i> <span> $roomDetail->room_size  </span>": '' !!} <span  class="ml-3"></span> 
                        
                    </p>
                </div>
 

                <div class="room-overview">

                    <div class="container">
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                                <!-- === Room aminities === -->

                                <div class="room-block room-aminities">

                                    <h2 class="title">Room aminities</h2>

                                    <div class="row">

                                        <!--=== item ===-->
                                        @php
                                            $aminities = explode(',' , $roomDetail->aminities)
                                        @endphp

                                        @foreach ($aminities as $item)
                                        <div class="col-xs-6 col-sm-2">
                                            <figure>
                                                <figcaption>
                                                    {{-- <span class="mdi mdi-spin mdi-star"></span> --}}
                                                    <p> 
                                                        <i class="mdi mdi-spin mdi-star"></i> {{ $item}}
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        @endforeach

                                    </div>

                                </div>

                                <!-- === Room block === -->

                                <div class="room-block">
                                    <h2 class="title">Room overview</h2>
                                    <p>
                                        {{ $roomDetail->description }}
                                    </p>
                                </div>

                                <!-- === Room block === -->

                                <div class="room-block">

                                    <h2 class="title">House rules</h2>

                                    <!-- === box === -->

                                    @foreach ($roomDetail->roomPolicy as $item)

                                    <div class="box">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p><strong>{{ $item->policy_title}}</strong></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{ $item->policy_detail}}</p>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    @endforeach

                                </div>

                            </div> <!--/col-sm-10-->
                        </div> <!--/row-->
                    </div> <!--/container-->
                </div> <!--/room-overview-->
            </div>

        </section>

        <!-- ========================  Blog ======================== -->

        <section class="blog blog-widget">

            <!-- === stretcher header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Latest news <a href="blog-category.html" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
                    <p>
                        Events, place to go, tour info & more
                    </p>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <!-- === article item === -->

                    <div class="col-sm-4">
                        <a href="blog-item.html">
                            <article>
                                <div class="image">
                                    <img src="{{ ('assets/webSiteAssets/images/activity-3.jpg') }}" alt="" />
                                </div>
                                <div class="text">
                                    <div class="time">
                                        <span>22</span>
                                        <span>05</span>
                                        <span>2014</span>
                                    </div>
                                    <h2 class="h5 title">
                                        What to do when holidays go wrong
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                    <!-- === article item === -->

                    <div class="col-sm-4">
                        <a href="blog-item.html">
                            <article>
                                <div class="image">
                                    <img src="{{ ('assets/webSiteAssets/images/activity-4.jpg') }}" alt="" />
                                </div>
                                <div class="text">
                                    <div class="time">
                                        <span>22</span>
                                        <span>05</span>
                                        <span>2014</span>
                                    </div>
                                    <h2 class="h5 title">
                                        Everything you need to know about vaccinations
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                    <!-- === article item === -->

                    <div class="col-sm-4">
                        <a href="blog-item.html">
                            <article>
                                <div class="image">
                                    <img src="{{ ('assets/webSiteAssets/images/activity-5.jpg') }}" alt="" />
                                </div>
                                <div class="text">
                                    <div class="time">
                                        <span>22</span>
                                        <span>05</span>
                                        <span>2014</span>
                                    </div>
                                    <h2 class="h5 title">
                                        Six simple ways to save money on airport car parking
                                    </h2>
                                </div>
                            </article>
                        </a>
                    </div>

                </div> <!--/row-->
            </div> <!--/container-->
        </section>

        <!-- ========================  Stretcher widget ======================== -->

        <section class="stretcher-wrapper">

            <!-- === stretcher header === -->

            <div class="section-header">
                <div class="container">
                    <h2 class="title">Resort facilities <a href="facility.html" class="btn btn-sm btn-clean-dark">Explore more</a></h2>
                    <p>
                        With the best luxury spa, salon and fitness experiences
                    </p>
                </div>
            </div>

            <!-- === stretcher === -->

            <ul class="stretcher">

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ ('assets/webSiteAssets/images/services-1.jpg') }};">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h4">Spa center</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Spa center</h4>
                        <figcaption>Unparalleled devotion to luxury</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="facility.html">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ ('assets/webSiteAssets/images/services-2.jpg') }};">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h4">Gym</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Gym</h4>
                        <figcaption>Care about results</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="facility.html">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ ('assets/webSiteAssets/images/services-3.jpg') }};">
                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h4">Fitness</span>
                        </div>
                    </div>
                    <figure>
                        <h4>Fitness</h4>
                        <figcaption>Your daily activities</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="facility.html">Anchor link</a>
                </li>

                <!-- === stretcher item === -->

                <li class="stretcher-item" style="background-image:url({{ ('assets/webSiteAssets/images/services-4.jpg') }};">


                    <!--logo-item-->
                    <div class="stretcher-logo">
                        <div class="text">
                            <span class="text-intro h4">Beauty salon</span>
                        </div>
                    </div>
                    <!--main text-->
                    <figure>
                        <h4>Beauty salon</h4>
                        <figcaption>Hair salons and spas</figcaption>
                    </figure>
                    <!--anchor-->
                    <a href="facility.html">Anchor link</a>
                </li>

                <!-- === stretcher item more === -->

                <li class="stretcher-item more">
                    <div class="more-icon">
                        <span data-title-show="Show more" data-title-hide="+"></span>
                    </div>
                    <a href="facility.html">Anchor link</a>
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

                    @foreach ($roomDetail->hotel->nearByPlace[0]->nearByPlaceFile as $key => $item)
                        @if ($key == 0)
                            <div class="col-xs-12 col-md-8">
                                <figure>
                                    <figcaption style="background-image:url({{ asset('storage/'.$item->path) }}">
                                        <img src="{{ asset('storage/'.$item->path) }}" alt="" />
                                    </figcaption>
                                    <a href="#" class="btn btn-clean" onclick="">Museums</a>
                                </figure>
                            </div>
                        @else
                               <!-- === item === -->

                            <div class="col-xs-6 col-md-4">
                                <figure>
                                    <figcaption style="background-image:url({{ asset('storage/'.$item->path) }}">
                                        <img src="{{ asset('storage/'.$item->path) }}" alt="" />
                                    </figcaption>
                                    <a href="#" class="btn btn-clean">Nightlife</a>
                                </figure>
                            </div>
                        @endif
                    @endforeach


                </div> <!--/row-->

            </div> <!--/container-->
        </section>

@endsection

@section('js')

@endsection
