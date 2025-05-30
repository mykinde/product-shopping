@extends('layouts.apps')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">About Us</h1>

    <p class="text-lg text-gray-700 mb-8 text-center max-w-3xl mx-auto">
        We are a passionate team dedicated to providing innovative and reliable solutions to individuals, businesses, and communities. Our goal is to simplify processes, deliver value, and inspire growth through quality products and excellent service.
    </p>

    <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Our Mission</h2>
            <p class="text-gray-700 leading-relaxed">
                Our mission is to deliver trusted solutions that empower people and transform businesses. We strive to be a dependable partner in your journey—offering products, tools, and services that meet real needs with integrity and excellence.
            </p>
        </div>
        <div>
            <img src="https://source.unsplash.com/600x400/?business,teamwork" alt="Our Mission" class="rounded-lg shadow-md">
        </div>
    </div>

    <div class="mt-12 grid md:grid-cols-2 gap-8 items-center">
        <div class="order-2 md:order-1">
            <img src="https://source.unsplash.com/600x400/?technology,innovation" alt="Our Vision" class="rounded-lg shadow-md">
        </div>
        <div class="order-1 md:order-2">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Our Vision</h2>
            <p class="text-gray-700 leading-relaxed">
                To become a globally respected brand known for empowering people through cutting-edge technology, dependable services, and a relentless focus on customer satisfaction. We aim to inspire innovation and create impact—one solution at a time.
            </p>
        </div>
    </div>

    <div class="mt-12 text-center">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Our Core Values</h2>
        <ul class="text-gray-700 text-lg space-y-2">
            <li>✅ Integrity – We do what is right, not what is easy.</li>
            <li>✅ Excellence – We deliver beyond expectations.</li>
            <li>✅ Innovation – We embrace new ideas and smart solutions.</li>
            <li>✅ Customer Commitment – We put our clients at the center of all we do.</li>
            <li>✅ Growth – We grow with our customers, our team, and our impact.</li>
        </ul>
    </div>

    <div class="mt-16 text-center">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Let’s Build the Future Together</h2>
        <p class="text-gray-700 text-lg mb-6">
            Whether you're a customer, a partner, or a curious visitor—thank you for taking time to learn about us. We’re excited about what’s ahead, and we invite you to be part of our journey.
        </p>
        <a href="{{ url('/contact') }}" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition duration-200">
            Contact Us
        </a>
    </div>
</div>
@endsection
