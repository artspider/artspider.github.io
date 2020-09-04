@extends('experts.layouts.internal')

@section('content')

    <div class="saludos my-4 mx-4">
        <p class=" text-2xl font-bold mb-1">Hola Arturo, </p>
        <p class=" text-lg text-gray-800 ">Bienvenido de vuelta a tu tablero</p>
    </div>

    <div class="recomendacion flex bg-white rounded-lg shadow-lg mx-4 my-4">
        <div>
            <p class="recomendacion--titulo text-black font-semibold text-xl mx-4 pt-4">Recomendación</p>
            <p class=" text-justify text-gray-700 mx-4 py-4">Actualiza tu perfil para que tengas mas oportunidad de ser contratado</p>
        </div>
        <div class="w-1 bg-main-yellow"></div>
    </div>

    <div class="ordenes__pendientes flex bg-white rounded-lg shadow-lg mx-4 my-4">
        <div class="w-1 bg-main-yellow"></div>
        <div>
            <p class="ordenes--titulo text-black font-semibold text-xl mx-4 pt-4">Orden 000001</p>
            <p class="text-justify text-gray-700 mx-4 py-4">El cliente CEMEX te ha contratado para desarrollar su sitio web</p>
            <div class="flex justify-between mx-4 mb-4">
                <p>Status: abierto</p>
                <a class="btn btn--close text-sm font-semibold px-2 rounded-md" href="">cerrar</a>
            </div>

        </div>
    </div>

</div>
@endsection
