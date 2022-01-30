
<nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">

        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
       <a href="{{route('home')}}">
           <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
       </a>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow flex  justify-center">
            <a class="inline-block text-sm px-4 py-2 leading-none text-white" href="{{route('posts')}}">
                Посты
            </a>

            @auth("web")
            <a class="inline-block text-sm px-4 py-2 leading-none text-white" href="{{route('contactForm')}}">
                Нам 10 лет
            </a>
            @endauth
        </div>
        @auth("web")
            <p class="inline-block text-sm px-4 py-2 leading-none text-white ">
                {{ Auth::user()->name }}
            </p>

            <a class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white rounded shadow-lg" href="{{route('logout')}}">
                Выйти
            </a>
            @endauth
        @guest("web")
            <div>
                <a href="{{route('signIn')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Sign In</a>
                <a href="{{route('signUp')}}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Sign Up</a>
            </div>
        @endguest

    </div>
</nav>
