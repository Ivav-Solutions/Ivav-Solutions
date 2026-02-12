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
<!-- Start Terms Area -->
<section class="terms-area ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12">
                <div class="terms-content">

                    <div class="terms-header text-center mb-5">
                        <h1>Terms and Conditions of Use</h1>
                        <p class="effective-date">
                            Effective Date: {{ date('F d, Y') }}
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>1. Introduction</h3>
                        <p>
                            Welcome to Ivav Solutions (“Company”, “we”, “our”, or “us”), operated by My Ivav LTD.
                            These Terms and Conditions (“Terms”) govern your access to and use of our website,
                            services, and digital products.
                        </p>
                        <p>
                            By accessing or using our website or purchasing our services, you agree to be bound
                            by these Terms. If you do not agree, discontinue use immediately.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>2. Services and Digital Products</h3>
                        <ul>
                            <li>We may modify, update, or discontinue services at any time.</li>
                            <li>We may refuse service to comply with applicable laws.</li>
                            <li>Pricing and availability may change without notice.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>3. Eligibility</h3>
                        <ul>
                            <li>You are at least 18 years old or legally capable.</li>
                            <li>Information provided is accurate and complete.</li>
                            <li>Use of services is for lawful purposes only.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>4. Payments and Refunds</h3>
                        <p>All payments are due upfront unless agreed otherwise in writing.</p>
                        <p>
                            Refund requests must be submitted within 7 days and apply only to
                            services not fully delivered. Completed or customized services
                            are non-refundable.
                        </p>
                        <p>
                            Approved refunds are processed within 7–14 business days
                            using the original payment method.
                        </p>
                        <p>
                            Contact: <strong>contact@ivavsolutions.com</strong>
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>5. Intellectual Property</h3>
                        <p>
                            All website content including text, graphics, logos, designs,
                            software, and digital materials are the exclusive property
                            of My Ivav LTD – Ivav Solutions unless otherwise stated.
                        </p>
                        <p>
                            Unauthorized reproduction, distribution, or resale is prohibited.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>6. Limitation of Liability</h3>
                        <p>
                            To the fullest extent permitted by law, we are not liable for
                            indirect, incidental, or consequential damages arising from
                            use of our services.
                        </p>
                        <p>
                            Our total liability shall not exceed the amount paid for the
                            service giving rise to the claim.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>7. Governing Law</h3>
                        <p>
                            These Terms are governed by the laws of the Federal Republic
                            of Nigeria. Disputes shall be subject to the exclusive
                            jurisdiction of Nigerian courts.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Terms Area -->
@endsection

<style>
    .terms-area {
        background: #f9f9f9;
    }

    .terms-content {
        background: #ffffff;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
    }

    .terms-header h1 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .terms-header .effective-date {
        color: #777;
        font-size: 14px;
    }

    .terms-section {
        margin-bottom: 40px;
    }

    .terms-section h3 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
        border-left: 4px solid #13c4a1;
        padding-left: 10px;
    }

    .terms-section p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 15px;
    }

    .terms-section ul {
        padding-left: 20px;
    }

    .terms-section ul li {
        margin-bottom: 8px;
        line-height: 1.7;
    }

    /* ========================= */
    /* 📱 MOBILE OPTIMIZATION */
    /* ========================= */

    @media (max-width: 991px) {

        .terms-area {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .terms-content {
            padding: 25px;
            border-radius: 6px;
            box-shadow: none;
        }

        .terms-header h1 {
            font-size: 26px;
            line-height: 1.3;
        }

        .terms-header .effective-date {
            font-size: 13px;
        }

        .terms-section {
            margin-bottom: 30px;
        }

        .terms-section h3 {
            font-size: 18px;
            border-left: 3px solid #13c4a1;
            padding-left: 8px;
        }

        .terms-section p,
        .terms-section ul li {
            font-size: 15px;
            line-height: 1.7;
        }

    }
</style>