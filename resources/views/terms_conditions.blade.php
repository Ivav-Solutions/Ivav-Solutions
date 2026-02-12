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
                        </p>
                        <p>
                            These Terms and Conditions (“Terms”) govern your access to and use of our website, services, and any digital products provided by us.
                        </p>
                        <p>
                            By accessing or using our website, purchasing our services, or using any of our digital products, you agree to be bound by these Terms. If you do not agree, you must discontinue use immediately.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>2. Services and Digital Products</h3>
                        <p>
                            Ivav Solutions provides professional services and digital products as described on this website.
                        </p>
                        <p>We reserve the right to:</p>
                        <ul>
                            <li>Modify, update, or discontinue any service or digital product at any time.</li>
                            <li>Refuse service where necessary to comply with applicable laws or policies.</li>
                            <li>Update descriptions, pricing, or availability without prior notice.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>3. Eligibility</h3>
                        <p>By using our website or purchasing our services or digital products, you confirm that:</p>
                        <ul>
                            <li>You are at least 18 years old or have legal capacity under applicable law.</li>
                            <li>All information you provide is accurate and complete.</li>
                            <li>You will use our website, services, and digital products only for lawful purposes.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>4. User Accounts</h3>
                        <p>Where account registration is required:</p>
                        <ul>
                            <li>You agree to provide accurate, current, and complete information.</li>
                            <li>You are responsible for safeguarding your login credentials.</li>
                            <li>You accept responsibility for all activities under your account.</li>
                            <li>We reserve the right to suspend or terminate accounts that violate these Terms or provide false information.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>5. Payments and Pricing</h3>
                        <ul>
                            <li>All payments are due upfront unless otherwise agreed in writing.</li>
                            <li>Prices for services and digital products will be displayed prior to purchase.</li>
                            <li>We reserve the right to modify pricing at any time.</li>
                            <li>Payments are processed through approved third-party payment providers.</li>
                            <li>You agree to provide valid payment details and authorize us to charge the applicable fees.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>6. Refund Policy</h3>
                        <p>
                            IVAV Solutions provides services with a commitment to quality and client satisfaction.
                        </p>
                        <p>
                            Refund requests must be submitted within 7 days of payment and will only be considered for services that have not been fully delivered or utilized. Payments for completed or customized services are non-refundable.
                        </p>
                        <p>
                            Approved refunds will be processed within 7–14 business days using the original payment method.
                        </p>
                        <p>
                            For refund requests, contact us at:<br>
                            Email: contact@ivavsolutions.com
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>7. Intellectual Property Rights</h3>
                        <p>
                            All content available on our website and within our services or digital products, including but not limited to:
                        </p>
                        <ul>
                            <li>Text</li>
                            <li>Graphics</li>
                            <li>Logos</li>
                            <li>Designs</li>
                            <li>Software</li>
                            <li>Downloads</li>
                            <li>Course materials or digital content</li>
                        </ul>
                        <p>
                            are the exclusive intellectual property of My Ivav LTD – Ivav Solutions, unless otherwise stated.
                        </p>
                        <p>
                            You may not copy, reproduce, distribute, modify, resell, or exploit any content without our prior written consent.
                        </p>
                        <p>
                            Unauthorized use may result in legal action.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>8. Acceptable Use</h3>
                        <p>You agree not to:</p>
                        <ul>
                            <li>Use our website, services, or digital products for unlawful or fraudulent purposes.</li>
                            <li>Attempt unauthorized access to our systems or data.</li>
                            <li>Reverse engineer, duplicate, or resell our digital products.</li>
                            <li>Upload or transmit malicious software or harmful content.</li>
                            <li>Infringe upon our intellectual property or the rights of other users.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>9. Disclaimer of Warranties</h3>
                        <p>
                            Our website, services, and digital products are provided “as is” and “as available” without warranties of any kind, whether express or implied.
                        </p>
                        <p>We do not guarantee:</p>
                        <ul>
                            <li>That the website will operate uninterrupted or error-free.</li>
                            <li>That services or digital products will meet specific individual expectations.</li>
                            <li>That the website will be free from viruses or harmful components.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>10. Limitation of Liability</h3>
                        <p>To the fullest extent permitted by law:</p>
                        <p>
                            My Ivav LTD – Ivav Solutions shall not be liable for:
                        </p>
                        <ul>
                            <li>Indirect, incidental, special, or consequential damages.</li>
                            <li>Loss of profits, revenue, data, or business opportunities.</li>
                            <li>Any damages arising from the use or inability to use our website, services, or digital products.</li>
                        </ul>
                        <p>
                            Our total liability for any claim shall not exceed the amount paid by you for the specific service or digital product giving rise to the claim.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>11. Third-Party Services</h3>
                        <p>
                            Our website may contain links to third-party websites or integrate third-party tools. We are not responsible for the content, policies, or practices of third-party platforms.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>12. Privacy</h3>
                        <p>
                            Your use of our website and services is also governed by our Privacy Policy, which explains how we collect, use, and protect your information.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>13. Suspension and Termination</h3>
                        <ul>
                            <li>Suspend or terminate access to our website, services, or digital products at our discretion.</li>
                            <li>Restrict access if a user violates these Terms.</li>
                        </ul>
                    </div>

                    <div class="terms-section">
                        <h3>14. Changes to These Terms</h3>
                        <p>
                            We may update these Terms at any time. Updated versions will be posted on this page with a revised effective date.
                        </p>
                        <p>
                            Your continued use of our website, services, or digital products constitutes acceptance of any changes.
                        </p>
                    </div>

                    <div class="terms-section">
                        <h3>15. Governing Law</h3>
                        <p>
                            These Terms shall be governed by and interpreted in accordance with the laws of the Federal Republic of Nigeria.
                        </p>
                        <p>
                            Any disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts of Nigeria.
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