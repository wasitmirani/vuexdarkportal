@extends('layouts.backend.masterpayment')


@section('content')
<div class="col-xl-10 col-lg-10 col-sm-12 col-12 fxt-bg-color">
    <div class="fxt-content">
        <div class="fxt-header">
            <a href="#" class="fxt-logo"><img src="{{asset('/payment/img/logo-21.png')}}" alt="Logo"></a>
            {{-- <p>Payment Details</p> --}}
            <h5><strong>Secure Payments. Globally!</strong>
            <br>
            <small class="float-right text-danger">Comodo Secure Server</small>
            </h5>
        </div>
        <div class="fxt-form">
            <form method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">

                                <input class='form-control'  placeholder="Card Name" type='text' name="name_card" required>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <input autocomplete='off' class='form-control card-number'  placeholder="Card Number" size='20' type='text'>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">

                                <input class='form-control'  placeholder="CVC" type='text' name="cvc" required>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">

                                <input class='form-control card-expiry-month' placeholder='MM' size='2'
                                type='text'>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">

                                <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                type='text'>

                            </div>
                        </div>
                    </div>



                </div>


                <div class="form-group">
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <button type="submit" class="fxt-btn-fill">Pay $55</button>
                    </div>
                </div>
            </form>
        </div>


        <div class="row justify-content-center">
            <img src="{{asset('/payment/img/payment_methods.png')}}" alt="" srcset="">
         </div>
    </div>
</div>


@endsection
