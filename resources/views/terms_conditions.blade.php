@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Terms & Conditions'])
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
                    <span class="sub-title">Terms and Conditions of Use</span>

                    <h2>{{config('app.name')}} provides professional services as described on this website. All payments are due upfront unless otherwise agreed.</h2>

                    <p>Users agree to provide accurate information and to use the website lawfully. All website content is the intellectual property of My Ivav LTD - Ivav Solutions.</p>

                    <p>These Terms are governed by the laws of the Federal Republic of Nigeria.</p>

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-image">
                    <img src="assets/img/terms-conditions.jpg" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection