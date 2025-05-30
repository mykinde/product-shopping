@extends('layouts.apps')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">Frequently Asked Questions</h1>

    <div class="space-y-6">
        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">1. What is the purpose of this website?</h2>
            <p class="text-gray-700">
                Our website is designed to showcase our products and services, provide information to prospective clients, and serve as a reliable platform for customer interaction and engagement.
            </p>
        </div>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">2. How do I contact customer support?</h2>
            <p class="text-gray-700">
                You can contact our support team by visiting the <a href="{{ route('contact.show') }}" class="text-blue-600 hover:underline">Contact</a> page. Fill out the form, and we’ll respond promptly.
            </p>
        </div>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">3. Where can I find your terms and privacy policy?</h2>
            <p class="text-gray-700">
                Our <a href="{{ route('terms') }}" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="{{ route('privacy') }}" class="text-blue-600 hover:underline">Privacy Policy</a> pages provide detailed information on our legal agreements and how we handle your data.
            </p>
        </div>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">4. How often are the products and services updated?</h2>
            <p class="text-gray-700">
                We regularly update our catalog based on new product availability, market trends, and customer feedback. Please check the <a href="{{ route('products') }}" class="text-blue-600 hover:underline">Products</a> page for the latest listings.
            </p>
        </div>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">5. Is my information secure on your platform?</h2>
            <p class="text-gray-700">
                Absolutely. We adhere to strict security protocols and ensure all your personal data is handled in accordance with our Privacy Policy. We do not sell or share your data with third parties.
            </p>
        </div>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">6. Can I request a custom product or service?</h2>
            <p class="text-gray-700">
                Yes, we do accommodate special requests depending on availability and scope. Reach out to us through the contact form with your specific needs.
            </p>
        </div>

        <div class="bg-white shadow-md rounded p-6">
            <h2 class="text-xl font-semibold text-blue-700 mb-2">7. How do I stay updated on new offerings?</h2>
            <p class="text-gray-700">
                You can subscribe to our newsletter or follow us on social media platforms. We frequently post updates about new products, promotions, and company news.
            </p>
        </div>
    </div>
</div>
@endsection
