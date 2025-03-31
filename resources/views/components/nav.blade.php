<nav x-data="{open : false}" class="bg-gray-300 border-gray-200 px-2 sm:px-4 py-2.5 "> 
    {{--  fixed w-full z-20 top-15 left-0 --}}
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                Student System
            </span>
        </a>
        <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path
                 d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </button>
        <div x-show="open" class=" w-full md:block md:w-auto" id="navbar-main">
           
            <x-items/> 

        </div>
        <div class="hidden w-full md:block md:w-auto" id="navbar-main">
            <x-items/> 
            {{-- <ul class="flex flex-col md:flex-row px-4">
                <li>
                    <a href="#" class="block py-2 pr4 pl-3"> Sign in</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr4 pl-3"> Sign up</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr4 pl-3"> Logout</a>
                </li>
            </ul> --}}
        </div>
    </div>
</nav>