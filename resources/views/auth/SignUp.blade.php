@extends('layouts.layout')
@section('content')
    <div class="w-full h-screen flex items-center justify-center">
        <form method="POST" action="{{ route("signUp_process") }}" class="w-full md:w-1/3 bg-white rounded-lg">
            @csrf
            <div class="flex font-bold justify-center mt-6">
                <img class="h-20 w-20"
                     src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
            </div>
            <h2 class="text-3xl text-center text-gray-700 mb-4">Register Form</h2>
            <div class="px-12 pb-10">
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                        <input name="name" type="text" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none @error('name') border-red-500  @enderror" placeholder="Name" />
                        @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                        <input name="email" type="text" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none @error('email') border-red-500  @enderror" placeholder="Email" />
                        @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                        <input name="password" type='password' placeholder="Password"
                               class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none @error('password') border-red-500 @enderror" />
                        @error('password')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                        <input name="password_confirmation" type='password' placeholder="Repeat Password"
                               class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none @error('password_confirmation') border-red-500 @enderror" />
                        @error('password_confirmation')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <a href="{{ route("signIn") }}" class="text-xs text-gray-500 float-right mb-4">Есть аккаунт?</a>
                <button type="submit"
                        class="w-full py-2 rounded-full bg-green-600 text-gray-100  focus:outline-none">Зарегистрироваться</button>
            </div>
        </form>
    </div>
@endsection
