@extends('component.layout')
@section('content')
<div class=" flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-lg flex max-w-4xl">
        <!-- Image Section -->
        <div class="w-1/2">
            <img src="https://i.pinimg.com/originals/23/05/5a/23055aecf5abdc1fc686b62c3087243a.jpg" alt="Login Image" class="w-full h-full object-cover rounded-l-lg">
        </div>

        <!-- Form Section -->
        <div class="w-1/2 p-8 flex flex-col justify-center">
            <h2 class="text-2xl font-bold mb-6 text-gray-700">Login</h2>
            <form>
                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your email">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" placeholder="Enter your password">
                </div>

                <!-- Login Button -->
                <div class="mb-4">
                    <a href="contact" class="btn w-full bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Login</a>
                </div>
            </form>

            <!-- Register Link -->
            <div class="text-sm text-center">
                <p>Don't have an account? <a href="/register" class="text-blue-500 hover:underline">Register</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
