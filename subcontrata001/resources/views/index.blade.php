@extends('layouts.main')

@section('content')
<main class="main__body h-screen  " style=" background-image: url('img/bg-main-subcon.jpg') ">
    <div class="container h-full mx-auto flex flex-col justify-center ">
        <div class="lg:h-48 flex-shrink-0"></div>
        <div class="main__title flex-initial w-1/2 xl:w-1/3 ml-4 xl:ml-0 mr-10  text-black text-5xl font-bold leading-tight">
            Haz realidad todos tus proyectos.
        </div>
        <div class="flex flex-col flex-shrink lg:ml-0 md:justify-start lg:pb-20">
            <p class="main__info pl-4 md:w-1/2 xl:w-1/3 lg:text-xl xl:mx-0 lg:text-gray-800 font-medium  mt-8 mb-6 mx-4 bg-white xl:bg-transparent bg-opacity-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quaerat quibusdam modi delectus vero itaque? </p>
            <a class="btn btn--primary md:w-1/2 xl:w-1/3 lg:py-4 lg:text-xl xl:mx-0 text-center font-bold rounded-md mx-4 px-4 py-4 text-sm" href="#">Contrata a uno de nuestros expertos</a>
        </div>
    </div>
</main>

<div
    class="como__funciona container mx-auto my-16"
    id = "como__funciona"
    x-data =  "{ option: 1 }"
>
    <p class="text-black text-center mx-4  text-3xl lg:text-5xl font-bold mb-8 xl:mb-16">¿Cómo funciona?</p>

    <div class="como--seleccion flex justify-between mx-4 xl:mx-0 mb-8 xl:mb-16">
        <a
            class="btn--registro btn rounded-md text-xs lg:text-base tracking-tight lg:tracking-wide text-center font-bold py-4 lg:py-8 mr-1 lg:mr-8" href="#"
            @click = "option = 1"
            @click.prevent
            :class = "{ 'bg-black text-white': option==1, 'bg-main-yellow text-black': option==2 }"
        >
        Busco profesionista
        </a>
        <a
            class="btn--registro btn rounded-md text-xs lg:text-base tracking-tight lg:tracking-wide text-center font-bold py-4 lg:py-8 ml-1 lg:ml-8" href="#"
            @click="option = 2"
            @click.prevent
            :class = "{ 'bg-main-yellow text-black': option==1, 'bg-black text-white': option==2 }"
        >
            Soy un experto
        </a>

        {{-- <a class="btn btn--primary   xl:h-20 rounded-md text-sm xl:text-base text-center font-bold flex-grow mr-2 xl:mr-0 max-w-xl py-4 xl:pt-8" href="#">Busco profesionista</a>
             <a class="btn btn--secondary xl:h-20 rounded-md text-sm xl:text-base text-center font-bold flex-grow ml-2 xl:ml-0 max-w-xl py-4 xl:pt-8" href="#">Soy un experto</a> --}}
    </div>

    <p class="mb-8 mx-4 xl:mx-0 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsa molestias qui adipisci ex id!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quaerat quam atque, vel voluptatum molestias.</p>
    <div
        class="pasos__profesionista flex flex-wrap xl:w-1/2 justify-center mx-auto font-semibold"
        :class = "{'flex': option==1, 'hidden' : option==2 }"
    >
        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/busco_paso1.png" alt="">
            <p class="text-xs md:text-base absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:pr-2 mt-6 md:pt-12 xl:mt-16">Registrate y llena todos los campos del formulario de usuario</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 lg:mb-16 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/busco_paso2.png" alt="">
            <p class="text-xs md:text-base absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:pr-2 mt-6 md:pt-12 xl:mt-16">Selecciona el perfil del profesionista que necesitas</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/busco_paso3.png" alt="">
            <p class="text-xs md:text-base absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:pr-2 mt-6 md:pt-12 xl:mt-16">Contacta al profesionista para elaborar tu proyecto</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/busco_paso4.png" alt="">
            <p class="text-xs md:text-base absolute top-0 left-0 ml-8 md:pl-8 lg:pl-8 mr-8 md:pr-6 lg:mr-40 xl:pr-2 mt-6 md:pt-12 xl:mt-16">Califica tu experiencia con el profesionista</p>
        </div>

        {{-- <img class="pasos--get-pro w-64 h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg" src="./img/busco_paso2.png" alt="">
        <img class="pasos--get-pro w-64 h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg" src="./img/busco_paso3.png" alt="">
        <img class="pasos--get-pro w-64 h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg" src="./img/busco_paso4.png" alt=""> --}}
    </div>

    <div
        class="pasos__experto flex-wrap xl:w-1/2 justify-center mx-auto font-semibold"
        :class = "{'hidden': option==1, 'flex' : option==2 }"
    >
        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/experto_paso1.png" alt="">
            <p class="text-xs lg:text-base absolute top-0 left-0 ml-8 lg:pl-4 mr-8 lg:mr-4 mt-6 lg:mt-16">Registrate y llena todos los campos del formulario de profesionista</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/experto_paso2.png" alt="">
            <p class="text-xs lg:text-base absolute top-0 left-0 ml-8 lg:pl-4 mr-8 lg:pr-4 mt-6 lg:mt-16">Selecciona tus habilidades, así te encontrarán mas facilmente</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/experto_paso3.png" alt="">
            <div class="text-xs lg:text-base absolute top-0 left-0 ml-8 lg:ml-12 mr-8 lg:mr-4 mt-6 lg:mt-16">
                <p class="mb-1">Suscribete:</p>
                <a class=" cursor-pointer text-gray-600" href="">Consulta nuestros planes y precios</a>
            </div>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/experto_paso4.png" alt="">
            <p class="text-xs lg:text-base absolute top-0 left-0 ml-8 lg:pl-4 mr-8 lg:pr-4 mt-6 lg:mt-16">Revisa y contesta los mensajes de tus clientes lo mas rápido posible</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/experto_paso5.png" alt="">
            <p class="text-xs lg:text-base absolute top-0 left-0 ml-8 lg:pl-4 mr-8 lg:pr-4 mt-6 lg:mt-16">Entrega tu trabajo en tiempo y forma para recibir una excelente reseña</p>
        </div>

        <div class="pasos--get-pro relative lg:w-64 lg:h-56 flex-grow-0 flex-shrink my-0 mx-0 rounded-lg">
            <img class="" src="./img/experto_paso6.png" alt="">
            <p class="text-xs lg:text-base absolute top-0 left-0 ml-8 lg:pl-4 mr-8 lg:pr-4 mt-6 lg:mt-16">Los costos, pagos y recibos los negocias con tu cliente</p>
        </div>

    </div>
</div>

<div class="expertos container bg-light-back mb-16 mx-auto" id = "nuestros__expertos">
    <div class="expertos--header flex justify-start mx-4 xl:mx-0 mb-6">
        <svg class=" w-8 h-12 lg:w-12 lg:h-16 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 246 353">
            <image id="Capa_1" data-name="Capa 1"  xlink:href="data:img/png;base64,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"/>
        </svg>
        <p class="text-black text-center text-3xl xl:text-5xl tracking-tight font-bold ml-2">Nuestros expertos</p>
    </div>
    <div class="expertos-cards flex justify-evenly ">

        <div class="card1 bg-gray-200 mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
            <div class="header--card1 flex my-6 ">
                <img class="h-24 w-24 mt-4 ml-6" src="./img/avatar1.png" alt="avatar1">
                <div class="info--header-card1 text-sm ml-2 mt-4">
                    <p class="nombre font-semibold">Luis Fernando Flores</p>
                    <p class="carrera font-semibold">Ingeniero en Sistemas</p>
                    <p class="cedula font-semibold">Cédula Prof. 09825772</p>

                    <div class="pills-cards hidden md:flex flex-wrap px-2 py-2">
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#photography</span>
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#travel</span>
                    </div>

                </div>
            </div>
            <p class="descripcion--expertos-cards text-justify font-semibold mx-6 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde qui dicta ipsum, quo inventore cum maxime dolores non quia nihil.</p>
            <div class="mx-6">
                <button class="contactar--expertos-card btn btn--secondary text-sm font-bold w-full rounded-md py-6 mb-6">Contactar</button>
            </div>
        </div>

        <div class="card1 hidden xl:block bg-gray-200 mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
            <div class="header--card1 flex my-6 ">
                <img class="h-24 w-24 mt-4 ml-6" src="./img/avatar1.png" alt="avatar1">
                <div class="info--header-card1 text-sm ml-2 mt-4">
                    <p class="nombre font-semibold">Luis Fernando Flores</p>
                    <p class="carrera font-semibold">Ingeniero en Sistemas</p>
                    <p class="cedula font-semibold">Cédula Prof. 09825772</p>

                    <div class="pills-cards hidden md:flex flex-wrap px-2 py-2">
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#photography</span>
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#travel</span>
                    </div>

                </div>
            </div>
            <p class="descripcion--expertos-cards text-justify font-semibold mx-6 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde qui dicta ipsum, quo inventore cum maxime dolores non quia nihil.</p>
            <div class="mx-6">
                <button class="contactar--expertos-card btn btn--secondary text-sm font-bold w-full rounded-md py-6 mb-6">Contactar</button>
            </div>
        </div>


    </div>
</div>

{{-- !!!Rgister form --}}
<livewire:signup-form />
{{-- End of Register form --}}

@endsection
