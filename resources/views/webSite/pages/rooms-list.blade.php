@extends('webSite.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset ('assets/webSiteAssets/customCss/pages/rooms-list.css') }}">

@endsection

@section('content')

<section class="page">

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset ('assets/webSiteAssets/images/header-1.jpg') }}">
        <div class="container">
            <h2 class="title">Make a reservation</h2>
        </div>
    </div>

    {{--*********************************** make reservation ***********  --}}

		
        <div class="container" >
            <div class="booking-form" style="z-index: 1">
                <form class="check-availability-form" method="get" action="/room-overview/rooms-list">
                    <div class="row no-margin">
                        <div class="col-md-3">
                            <div class="form-group ">
                                <span class="form-label">Destination</span>
                                <input class="form-control" id="destination" type="text"  placeholder="city..." style="color: white;" data-value="{{ $bookingInitialInformation['hotelId']  }}" value=" {{$currentSelectedHotel->city }}">
                                <input type="hidden" name="hotelId" id="hotelId" value="{{ $bookingInitialInformation['hotelId']  }}">
                                <div class="row disply-hotel-list" id="hotelsList">
                                    <div class="col-4 hotel-items-list">
                                        <div class="list-group" id="list-tab" role="tablist">

                                            @foreach ($listOfHotels as $hotel)
                                                <a
                                                class="list-group-item list-group-item-action "
                                                {{-- id="list-home-list" --}}
                                                data-mdb-toggle="list"
                                                href=" javascript:void(0) "
                                                role="tab"
                                                {{-- aria-controls="home" --}}
                                                onclick="getVal('{{ $hotel->city }}' , '{{ $hotel->id }} ')">{{ $hotel->city }}</a
                                                >
                                            @endforeach
                                        
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row no-margin">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <span class="form-label">Check In</span>
                                        <input class="form-control" type="date" name="arrivalDate" required style="color: white;" value="{{ date('Y-m-d' , strtotime($bookingInitialInformation['checkIn'])) }}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <span class="form-label">Check out</span>
                                        <input class="form-control" type="date" style="color: white;" name="departureDate" required value="{{ date('Y-m-d' , strtotime($bookingInitialInformation['checkOut'])) }}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <span class="form-label">Guests</span>
                                        <select class="form-control" style="color: white;" name="guests">
                                            <option value="{{ $bookingInitialInformation['noOfGuest'] }}">{{ $bookingInitialInformation['noOfGuest'] }}</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-btn">
                                <button class="submit-btn">Check availability</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    




    {{-- ******************** end *************************************** --}}


    @if ( count ($allRoomTypes) > 0)

        <!-- ===  Checkout steps === -->

        <div class="step-wrapper">
            <div class="container">
                <div class="stepper">
                    <ul class="row">
                        <li class="col-md-4 active">
                            <a href="{{ url('/room-overview/rooms-list')}}"><span data-text="Room & rates"></span></a>
                        </li>
                        <li class="col-md-4">
                            <a href="javascript:void(0)"><span data-text="Reservation"></span></a>
                        </li>
                        <li class="col-md-4">
                            <a href="javascript:void(0)"><span data-text="Checkout"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    @foreach ($allRoomTypes[0]['roomType'] as $key=> $roomType)

    {{-- {{ $roomType['roomTypeFile'][0]['size'] }} --}}
    <div class="checkout" id="root">

        <div class="container">

            <div class="clearfix">

                <!-- ========================  Cart wrapper ======================== -->

                <div class="cart-wrapper">

                    <!--cart header -->

                    {{-- <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Room type</span>
                        </div>
                        <div class="text-right">
                            <span>Price</span>
                        </div>
                    </div> --}}

                    <!--cart items-->

                    <div class="clearfix">

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="{{ url('/room-overview/'.$roomType->id)}}"><img src="{{ asset ('storage/'.$roomType['roomTypeFile'][0]['path']) }}" alt="" /></a>
                            </div>
                            <div class="title">
                                <div class="h2"><a href="{{ url('/room-overview/'.$roomType->id)}}"> {{ $roomType->room_type_name }}  </a></div>
                                <p>
                                    <strong>Check In</strong> <br /> <a href="#">( {{ date('jS F Y' , strtotime($bookingInitialInformation['checkIn'])) }} )</a>
                                </p>
                                <p>
                                    <strong>Check Out</strong> <br /> <a href="#">( {{ date('jS F Y', strtotime($bookingInitialInformation['checkOut'])) }} )</a>
                                </p>
                                <p>
                                    <strong>Guests</strong> <br />  {{ $bookingInitialInformation['noOfGuest'] }}
                                </p>
                                <p>
                                    <strong>Nights</strong> <br /> {{ $bookingInitialInformation['noOfNightStay'] }}
                                </p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                            <strong>Rooms</strong> <br /> <span id="setRoomNumber" >1</span>

                                        </p>

                                    </div>
                                    <div class="col-md-8 text-right">
                                        <select class="text-cnter" style=" margin-left: -40px;height: 20px; width: 100px; text-indent: 5px;"  id="noOfRooms" >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>

                                    </div>

                                </div>
                            </div>
                            <div class="price">
                                <span class="final h3">{{ $roomType->price_per_room }} PKR </span>
                                <span class="discount">$ 2.666</span>

                            </div>
                            <!--delete-this-item-->
                            <span class="icon icon-cross icon-delete"></span>
                        </div>

                    </div>

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 159,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>TAX</strong>
                            </div>
                            <div>
                                <span>$ 59,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <span class="checkbox">
                                    <input type="checkbox" id="couponCodeID">
                                    <label for="couponCodeID">Promo code</label>
                                    <input type="text" class="form-control form-coupon" value="" placeholder="Enter your coupon code" />
                                </span>
                            </div>
                            <div>
                                <div class="h2 title">$ 1259,00</div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                {{-- <a href="#" class="btn btn-clean-dark">Change</a> --}}
                            </div>
                            <div>
                                <a href="{{ url('/reservation/create')}}" class="btn btn-main">Reservation <span class="icon icon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!--/container-->
    </div> <!--/checkout-->

        
    @endforeach

    @else


        {{-- {{ $roomType['roomTypeFile'][0]['size'] }} --}}
        <div class="checkout" id="root">

            <div class="container">
    
                <div class="clearfix">
    
                    <!-- ========================  Cart wrapper ======================== -->
    
                    <div class="cart-wrapper">
    
 
    
                        <!--cart prices -->
    
                        <div class="clearfix">
                            <div class="cart-block cart-block-footer clearfix">
                                <div>
                                    <strong>Search Results</strong>
                                </div>
                                <div>
                                    <span>No results found! Please update your search and try again</span>
                                </div>
                            </div>
    
                        </div>
    
    
                    </div>
                </div>
    
            </div> <!--/container-->
        </div> <!--/checkout-->
    
        
    @endif




</section>

@endsection

@section('js')
<script src="{{ asset ('assets/webSiteAssets/customJs/pages/rooms-list.js') }}"></script>


@endsection
