@extends('layouts.apps')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Privacy Policy</h1>

    <p>Effective Date: {{ date('F d, Y') }}</p>

    <p>
        At <strong>YourCompany</strong>, we are committed to protecting your personal information and your right to privacy. This Privacy Policy explains what information we collect, how we use it, and what rights you have in relation to it. If you have any questions or concerns, please contact us at <a href="mailto:privacy@yourcompany.com">privacy@yourcompany.com</a>.
    </p>

    <h3 class="mt-4">1. Information We Collect</h3>
    <p>We collect personal information that you voluntarily provide to us when you:</p>
    <ul>
        <li>Register on our website</li>
        <li>Place an order or subscribe to our services</li>
        <li>Contact us via forms, email, or phone</li>
    </ul>
    <p>This information may include your name, email address, phone number, billing address, and other details necessary for us to provide our services.</p>

    <h3 class="mt-4">2. How We Use Your Information</h3>
    <p>We use the information we collect for the following purposes:</p>
    <ul>
        <li>To deliver and manage our services</li>
        <li>To improve our website and services</li>
        <li>To communicate with you about your account or transactions</li>
        <li>To send promotional emails (only if you opt in)</li>
        <li>To comply with legal obligations</li>
    </ul>

    <h3 class="mt-4">3. Sharing Your Information</h3>
    <p>We do not sell, trade, or rent your personal data. However, we may share your information with:</p>
    <ul>
        <li>Service providers and partners who help us operate our business (e.g., payment processors, hosting providers)</li>
        <li>Law enforcement or regulators when legally required</li>
    </ul>

    <h3 class="mt-4">4. Data Security</h3>
    <p>We implement appropriate security measures to protect your personal data from unauthorized access, alteration, disclosure, or destruction. However, no internet-based service is 100% secure, and we cannot guarantee absolute security.</p>

    <h3 class="mt-4">5. Your Data Rights</h3>
    <p>You have the right to:</p>
    <ul>
        <li>Access the personal data we hold about you</li>
        <li>Request corrections to inaccurate data</li>
        <li>Request deletion of your data (subject to legal exceptions)</li>
        <li>Withdraw consent at any time (for marketing or optional data)</li>
    </ul>

    <h3 class="mt-4">6. Cookies & Tracking</h3>
    <p>Our website uses cookies and similar technologies to enhance your browsing experience. You can choose to disable cookies via your browser settings, but this may affect the functionality of the site.</p>

    <h3 class="mt-4">7. International Data Transfers</h3>
    <p>If you are accessing our services from outside Nigeria, your data may be transferred to and processed in Nigeria or other countries. We ensure adequate safeguards are in place for such transfers.</p>

    <h3 class="mt-4">8. Third-Party Services</h3>
    <p>We may include links to third-party websites. We are not responsible for their privacy practices. Please review their policies before submitting personal data.</p>

    <h3 class="mt-4">9. Policy Updates</h3>
    <p>We may update this Privacy Policy from time to time. Changes will be posted on this page with a revised effective date. We encourage you to review this policy regularly.</p>

    <h3 class="mt-4">10. Contact Us</h3>
    <p>
        If you have any questions or concerns about this Privacy Policy, please contact us at:<br>
        <strong>YourCompany Ltd.</strong><br>
        123 Digital Innovation Hub, Lagos, Nigeria<br>
        Email: <a href="mailto:privacy@yourcompany.com">privacy@yourcompany.com</a><br>
        Phone: +234 801 234 5678
    </p>
</div>
@endsection
