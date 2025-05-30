@extends('layouts.apps')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Terms and Conditions</h1>

    <p class="text-center text-gray-600 mb-12 text-lg">Effective Date: {{ date('F d, Y') }}</p>

    <div class="space-y-8 text-gray-700 leading-relaxed">
        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">1. Acceptance of Terms</h2>
            <p>
                By accessing or using our website and services, you agree to be bound by these Terms and Conditions. If you do not agree, please do not use our site or services.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">2. Use of the Website</h2>
            <p>
                You agree to use the website only for lawful purposes. You must not use the site in any way that causes, or may cause, damage to the website or restricts other users from enjoying the site.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">3. Intellectual Property</h2>
            <p>
                All content on this site—including text, graphics, logos, icons, and software—is the property of our company or its content suppliers and is protected by applicable copyright and intellectual property laws.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">4. User Accounts</h2>
            <p>
                You may be required to create an account to access certain services. You are responsible for maintaining the confidentiality of your login credentials and for all activities that occur under your account.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">5. Third-Party Links</h2>
            <p>
                Our website may contain links to third-party websites. We are not responsible for the content, policies, or practices of any third-party sites or services.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">6. Limitation of Liability</h2>
            <p>
                We are not liable for any damages arising out of your use of this website. This includes, without limitation, direct, indirect, incidental, or consequential damages.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">7. Termination</h2>
            <p>
                We reserve the right to suspend or terminate your access to the site at any time, with or without cause or notice.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">8. Changes to These Terms</h2>
            <p>
                We may update these Terms and Conditions from time to time. Continued use of the site after changes are posted constitutes your acceptance of the revised terms.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">9. Governing Law</h2>
            <p>
                These terms are governed by and construed in accordance with the laws of [Your Country/State]. Any disputes shall be resolved in the appropriate jurisdiction.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-600 mb-2">10. Contact Us</h2>
            <p>
                If you have any questions or concerns about these Terms and Conditions, please contact us at:
            </p>
            <p class="mt-2">
                Email: <a href="mailto:support@example.com" class="text-blue-600 hover:underline">support@example.com</a><br>
                Phone: +123-456-7890
            </p>
        </section>
    </div>
</div>
@endsection
