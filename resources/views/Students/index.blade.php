{{-- @extends('layouts.app')

@section('title', 'Students List')

@section('content')    , ['Title' => 'Student Sytem'] --}}


@include('partials.header')

<?php $array = array('title' => 'Student System') ;?>

<x-nav :data="$array"/>


<header>
    <a href="">
         <h1 class="text-4xl font-bold mb-6 text-center">Students List</h1>
    </a>
</header>
<section class="mt-10">
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-500 text-white">
                <tr>
                  <th scope="col" class="py-3 px-6">First Name</th>
                  <th scope="col" class="py-3 px-6">Last Name</th>
                  <th scope="col" class="py-3 px-6">Email</th>
                  <th scope="col" class="py-3 px-6">Age</th>
                  
                </tr>
              </thead>
              <tbody>
                @foreach ($students as $student )
                <tr class="bg-gray-800 border-b text-white"> 
                    <td class="py-4 px-6 ">
                        {{ $student->first_name }}
                    </td>
                    <td class="py-4 px-6 ">
                        {{ $student->last_name }}
                    </td>
                    <td class="py-4 px-6 ">
                        {{ $student->email }}
                    </td>
                    <td class="py-4 px-6 ">
                        {{ $student->age }}
                    </td>
                 </tr>
                 @endforeach
              </tbody>
        </table>
        {{ $students->links() }}
    </div>
</section>



    @include('partials.footer')

{{-- @endsection --}}

{{-- 
  
        <p class="text-lg">My name is <strong>{{ $student->first_name }} {{ $student->last_name }}</strong> and I'm {{ $student->age }} years old.</p>
    @endforeach --}}
