@extends('layouts.app')

@section('title', 'Login')


@section('content')
    <style>
        .animated-div {
            opacity: 0;
            position: relative;
            top: 50px;
            transition: opacity 1s, top 1s;
        }

        .visible {
            opacity: 1;
            top: 0;
        }

        .gradient-background {
            background: linear-gradient(270deg, #ff007a32, #ff00ff32, #007aff32);
            background-size: 200% 200%;
            animation: gradientFlow 15s ease infinite;
        }

        @keyframes gradientFlow {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }
    </style>
    <div class="fixed h-screen w-full gradient-background">
        <div class="flex justify-center pt-20 ">
            <div class=" bg-gradient-to-r from-blue-100 to-red-500/[0.3] p-8 rounded shadow-md w-full max-w-md">
                <h2 class="text-2xl font-bold mb-6 text-gray-800">Login</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" required>
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" name="password" type="password" required>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
