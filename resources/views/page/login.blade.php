@extends('template.sign')
@section('main')
    <form action="/login" method="POST">
        @csrf
        <p class="font-semibold text-4xl">Greetings! Welcome to luxury gift shop.</p>
        <div class="w-full mt-8 flex flex-col gap-4">
            <div>
                @if (session()->has('message'))
                    <div class="text-red-600 mb-2">
                        {{ session('message') }}
                    </div>
                @endif
                <input type="text" name="email" placeholder="email"
                    class="w-full p-2 outline outline-black outline-1 focus:outline-blue-500" required autofocus
                    value="{{ old('email') }}">
                @error('email')
                    <div class="text-red-600 mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="password" name="password" placeholder="password"
                class="w-full p-2 outline outline-black outline-1 focus:outline-blue-500" required>
            <button type="submit" class="w-full bg-black text-white py-2">Login</button>
        </div>
        <div class="mt-8 text-center border-t border-customBlack pt-8">
            <p>or login with</p>
            <div class="flex justify-center mt-4">
                <a href="/auth/google">
                    <img src="assets/icons/google.png" alt="">
                </a>
            </div>
        </div>
    </form>
@endsection
