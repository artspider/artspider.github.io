@extends('experts.layouts.internal')

@section('content')

    <div class="saludos mt-20 mb-4 mx-4">
        <p class=" text-2xl font-bold mb-1">Hola {{ auth()->user()->name }}, </p>
        <p class=" text-lg font-semibold text-gray-800 ">Bienvenido de vuelta a tu tablero</p>
    </div>

    <div class="ordenes block lg:flex ">

      <div class="ordenes--notification bg-red-100 border-l-4 border-red-500 flex rounded-lg shadow-lg mx-4 my-4 py-2">
        <div class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
            <p class=" font-semibold ">Orden 00001</p>
            <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >25</span>AGO</div>
        </div>
        <div class="notification w-full mx-6">
            <p class="text-lg font-bold">Azure</p>
            <p class="text-sm mb-4 mt-2">El cliente CEMEX te ha contratado para desarrollar su sitio web.</p>
            <div class="flex justify-end">
              <p>Status: abierto</p>
          </div>
        </div>
      </div>

      <div class="ordenes--notification bg-cool-gray-100 border-r-4 border-cool-gray-500 flex rounded-lg shadow-lg mx-4 my-4 py-2">
        <div class="orden__date flex flex-col justify-center items-center ml-4 pr-4 border-r-2 border-gray-400">
            <p class=" font-semibold ">Orden 00001</p>
            <div class="date text-black text-xl tracking-tighter mb-2"><span class="text-gray-400" >25</span>AGO</div>
        </div>
        <div class="notification w-full mx-6">
            <p class="text-lg font-bold">Cemex</p>
            <p class="text-sm mb-4 mt-2">El cliente AZURE te ha contratado para el diseño de su logo.</p>
            <div class="flex justify-end">
              <p>Status: abierto</p>
          </div>
        </div>
      </div>
    </div>


</div>
@endsection
