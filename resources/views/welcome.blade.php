@extends('layouts.frontend')

@section('navbar')
@includeIf('layouts.navbar')
@endsection

@section('banner')
@includeIf('layouts.banner')
@endsection

@section('page-content')
<!-- Start Features Card -->
<div class="features-card-section pt-100 pb-70 bg-f8fbfa">
    <div class="container">
        <div class="section-title">
            <h2>Our Brands</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-cable-car'></i>
                    <h3>
                        <a href="#">IvavTravel</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                <div class="single-features-card tx-center">
                    <i class='bx bx-laptop'></i>
                    <h3>
                        <a href="#">IvavTech</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                <div class="single-features-card tx-center">
                    <i class='bx bxs-badge-check'></i>
                    <h3>
                        <a href="#">IvavTalent</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                <div class="single-features-card tx-center">
                    <i class='bx bxs-megaphone'></i>
                    <h3>
                        <a href="https://www.faofoundation.com/">FAO Foundation</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Features Card -->
@endsection