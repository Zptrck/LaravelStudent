@include('partials.header')
<x-nav/>
<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-Black text-center mt-3">Student Log-in</h1>
    </a>

</header>

<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center">
            Welcome to Student System
        </h3>
       
    </section>
    <section class="mt-10">
        <form action="/login/process" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3" value={{ old('email') }}>
                 @error('email')
                 <p class="text-red-500 text-xs mb-5">
                     email or password incorrect!
                 </p>
                 @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3">
                 @error('password')
                 <p class="text-red-500 text-xs mb-5">
                     {{ $message }}
                 </p>
                 @enderror
            </div>
            <button class="bg-purple-500 hover:purple-900 text-white font-bold  py-2 rounded shadow-lg 
            hover:shadow-xl transition duration-200" type="submit">Login</button>
            <p class="text-gray-600 pt-2 text-center"> Sign up <a href="register" class="text-purple-500 font-bold">here</a></p>
        </form>
    </section>
</main>

@include('partials.footer')