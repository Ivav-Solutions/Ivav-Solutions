@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Privacy Policy'])
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
                    <span class="sub-title">Privacy Policy</span>

                    <h2>{{config('app.name')}} is committed to protecting your personal data in accordance with applicable Nigerian data protection laws.</h2>

                    <p>We collect personal and business information solely for service delivery, communication, payment processing, and legal compliance. These data are stored securely. Payments are also processed securely via third-party payment providers, and we do not store card details on our systems.</p>

                    <p>We do not sell or share personal data with unauthorized third parties.</p>

                    <p>For privacy-related inquiries, contact: <a href="mailto:contact@ivavsolutions.com">contact@ivavsolutions.com</a></p>

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="assets/img/privacy_policy.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection