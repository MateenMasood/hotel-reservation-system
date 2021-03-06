@extends('webSite.layouts.master')

@section('css')

@endsection

@section('content')

    <!-- ===  Page header === -->

    <div class="page-header" style="background-image:url({{ asset ('assets/webSiteAssets/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Confirm your reservation</h2>
            <p>Guest information</p>
        </div>
    </div>

    <!-- ===  Checkout steps === -->

    <div class="step-wrapper">
        <div class="container">
            <div class="stepper">
                <ul class="row">
                    <li class="col-md-4 active">
                        <a href="{{ url('/room-overview/rooms-list')}}"><span data-text="Room & rates"></span></a>
                    </li>
                    <li class="col-md-4 active">
                        <a href="{{ url('/reservation/create')}}"><span data-text="Reservation"></span></a>
                    </li>
                    <li class="col-md-4 active">
                        <a href="{{ url('/reservation-checkout')}}"><span data-text="Checkout"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


                <!-- ===  Checkout === -->

                <div class="checkout">

                    <div class="container">

                        <div class="clearfix">

                            <!-- ========================  Note block ======================== -->

                            <div class="cart-wrapper">

                                <div class="note-block">

                                    <div class="row">
                                        <!-- === left content === -->

                                        <div class="col-md-6">

                                            <div class="white-block">

                                                <div class="h4">Guest information</div>

                                                <hr />

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Name</strong> <br />
                                                            <span>John Doe</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Email</strong><br />
                                                            <span>johndoe@company.com</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Phone</strong><br />
                                                            <span>+122 523 352</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Zip</strong><br />
                                                            <span>94107</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>City</strong><br />
                                                            <span>San Francisco, California</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Address</strong><br />
                                                            <span>795 Folsom Ave, Suite 600</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Company name</strong><br />
                                                            <span>Your company name</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Company phone</strong><br />
                                                            <span>+122 333 6665</span>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div> <!--/col-md-6-->

                                        </div>

                                        <!-- === right content === -->

                                        <div class="col-md-6">
                                            <div class="white-block">

                                                <div class="h4">Reservation details</div>

                                                <hr />

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Order no.</strong> <br />
                                                            <span>52522-63259226</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Transaction ID</strong> <br />
                                                            <span>2265996</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Order date</strong> <br />
                                                            <span>06/30/2017</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Shipping arrival</strong> <br />
                                                            <span>07/30/2017</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="h4">Payment details</div>

                                                <hr />

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Transaction time</strong> <br />
                                                            <span>06/30/2017 at 00:59</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Amount</strong><br />
                                                            <span>$ 1259,00</span>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Cart details</strong><br />
                                                            <span>**** **** **** 5446</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <strong>Reservation type</strong><br />
                                                            <span>Luxury appartment</span>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- ========================  Cart wrapper ======================== -->

                            <div class="cart-wrapper">

                                <!--cart header -->

                                <div class="cart-block cart-block-header clearfix">
                                    <div>
                                        <span>Room type</span>
                                    </div>
                                    <div class="text-right">
                                        <span>Price</span>
                                    </div>
                                </div>

                                <!--cart items-->

                                <div class="clearfix">

                                    <div class="cart-block cart-block-item clearfix">
                                        <div class="image">
                                            <a href="room-overview.html"><img src="{{ asset('assets/webSiteAssets/images/room-4.jpg') }}" alt="" /></a>
                                        </div>
                                        <div class="title">
                                            <div class="h2"><a href="room-overview.html">Luxury appartment</a></div>
                                            <div>
                                                <strong>Arrival date</strong> <a href="#">(September 22, 2017)</a>
                                            </div>
                                            <div>
                                                <strong>Guests</strong> 2 Adults, 1 Child
                                            </div>
                                            <div>
                                                <strong>Nights</strong> 7
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span class="final h3">$ 1.998</span>
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
                                            Promo code included!
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
                                            <a href="reservation-1.html" class="btn btn-clean-dark">Back</a>
                                        </div>
                                        <div>
                                            <a onclick="window.print()" class="btn btn-main">Print <span class="icon icon-printer"></span></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!--/container-->
                </div> <!--/checkout-->


@endsection

@section('js')

@endsection
