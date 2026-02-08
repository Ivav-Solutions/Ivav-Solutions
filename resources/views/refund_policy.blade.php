@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Refund Policy'])
@endsection

@section('footer')
@includeIf('layouts.footer')
@endsection

@section('page-content')
<!-- Start About Area -->
<section class="about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <span class="sub-title">Refund Policy</span>
                    
                    <h2>{{config('app.name')}} provides services with a commitment to quality and client satisfaction.</h2>

                    <p>Refund requests must be submitted within 7 days of payment and will only be considered for services that have not been fully delivered or utilized. Payments for completed or customized services are non-refundable.</p>

                    <p>Approved refunds will be processed within 7–14 business days using the original payment method.</p>

                    <p>For refund requests, contact us at: Email: <a href="mailto:contact@ivavsolutions.com">contact@ivavsolutions.com</a></p>

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="assets/img/refund-policy.webp" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection