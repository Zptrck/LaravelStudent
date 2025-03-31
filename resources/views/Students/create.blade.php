@include('partials.header')
<x-nav/>
<header class="max-w-lg mx-auto">
    <a href="#">
        {{-- <h1 class="text-4xl font-bold text-Black text-center mt-3">Student Log-in</h1> --}}
    </a>

</header>

<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center">
            Add New Student
        </h3>
       
    </section>
    <section class="mt-10">
        <form action="/add/student" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="first_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
                <input type="text" name="first_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3"  autocomplete="off" value={{ old('first_name') }}>
                 @error('first_name')
                 <p class="text-red-500 text-xs mb-5">
                    {{$message}}
                 </p>
                 @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="last_name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                <input type="text" name="last_name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3" autocomplete="off" value={{ old('last_name') }}>
                 @error('last_name')
                 <p class="text-red-500 text-xs mb-5">
                    {{$message}}
                 </p>
                 @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                <select name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3"> 
                 <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            @error('gender')
            <p class="text-red-500 text-xs mb-5">
               {{$message}}
            </p>
            @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3 value={{ old('age') }}">
                 @error('age')
                 <p class="text-red-500 text-xs mb-5">
                    {{$message}}
                 </p>
                 @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none
                 border-b-4 border-gray-400 px-3" value={{ old('email') }}>
                 @error('email')
                 <p class="text-red-500 text-xs mb-5">
                    {{$message}}
                 </p>
                 @enderror
            </div>
          
            <button class="bg-purple-500 hover:purple-900 text-white font-bold  py-2 rounded shadow-lg 
            hover:shadow-xl transition duration-200" type="submit">Add</button>
            <p class="text-gray-600 pt-2 text-center"> Sign up <a href="register" class="text-purple-500 font-bold">here</a></p>
        </form>
    </section>
</main>

@include('partials.footer')