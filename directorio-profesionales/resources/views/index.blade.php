@extends('layouts.main')

@section('content')
    <div class="contenido flex-grow bg-gray-100" >
        <div class="busqueda bg-purple-700">
            <div class="mx-4 flex justify-between text-lg py-5">
                <p class=" text-2xl text-gray-200 font-semibold ">Encuentra tu trabajo</p>
                <p class=""></p>
            </div>
            <div class=" mx-4 relative  ">
                <input class=" w-full h-10 mt-2 pl-2 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-100 focus:text-gray-900" type="text" name="" id="" placeholder="Palabra clave o empresa">
                  <svg class="mt-3 pr-2 absolute  top-0 right-0  h-8 w-8 text-gray-500"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                  </svg>
            </div>
            <div class=" mx-4 relative  ">
                <input class=" w-full h-10 mt-2 pl-2 rounded-md bg-gray-200 focus:outline-none focus:bg-gray-100 focus:text-gray-900" type="text" name="" id="" placeholder="Ciudad o estado">
                  <svg class="mt-3 pr-2 absolute  top-0 right-0  h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                  </svg>
            </div>
            <div class=" mx-4 relative  " >
                <button class=" border-none w-full mt-2 mb-4 h-10 bg-purple-500 hover:bg-purple-700 text-white font-semibold rounded-md " type="submit">BUSCAR EMPLEO</button>
            </div>
        </div>
    </div>
@endsection
