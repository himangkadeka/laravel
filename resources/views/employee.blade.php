<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <!-- Tailwind CSS CDN link -->
    <link href=
"https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
          rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
        .container {
            background-color: rgb(2, 201, 118);
            color: white;
        }
  
        h2 {
            text-align: center;
        }
    </style>

<style>
table, th, td {
  border: 1px solid;
}
td{
  padding: 20px;
}
</style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    
    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif

@if(session()->has('message'))
{{ session()->get('message')}}
@endif

@if(sizeof($posts))
@foreach($posts as $key=>$post)
  <table> <tr>
    <td> {{++$key}}</td>
    <td> {{$post->firstname}}</td>
    <td> {{$post->lastname}}</td>
    <td> {{$post->designation}}</td>
    <td> {{$post->basicpay}}</td>
    <td> {{$post->password}}</td>
   </tr> 
  </table>
@endforeach
@endif
    <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('save-employee-data')}}" method="post">
  @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname">
        First Name
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="firstname" id="firstname" type="text" placeholder="Firstname">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
        Last Name
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="lastname" id="lastname" type="text">
      <p class="text-red-500 text-xs italic">Last Name</p>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
        Designation
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="designation" id="designation" type="text">
      <p class="text-red-500 text-xs italic">Designation</p>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname">
        Basic pay
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="basicpay" id="basicpay" type="text" >
      <p class="text-red-500 text-xs italic">Basic Pay</p>
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" id="password" type="password" >
      <p class="text-red-500 text-xs italic">Password</p>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
  <p class="text-center text-gray-500 text-xs">
    &copy;2020 Acme Corp. All rights reserved.
  </p>
</div>


    </body>
</html>