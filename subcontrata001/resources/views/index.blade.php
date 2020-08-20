@extends('layouts.main')

@section('content')
<main class="main__body pt-16 pb-16 h-auto lg:h-500" style=" background-image: url('img/bg-main-subcon.jpg') ">
    <div class="container mx-auto ">
        <div class="main__title  w-1/2 ml-4 xl:ml-0 md:mt-20 mr-10  text-black text-5xl md:text-6xl font-bold leading-tight">Haz realidad todos tus proyectos.</div>
            <p class="main__info md:w-1/2 xl:w-1/3 lg:text-xl xl:mx-0 lg:text-gray-800 font-medium  mt-8 mb-6 mx-4 bg-white xl:bg-transparent bg-opacity-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quaerat quibusdam modi delectus vero itaque? </p>
        <div class=" lg:ml-0 lg:flex md:justify-start">
            <a class="btn btn--primary md:w-1/2 xl:w-1/3 lg:py-4 lg:text-xl xl:mx-0 text-center font-bold rounded-md mx-4 px-4 py-4 text-sm" href="#">Contrata a uno de nuestros expertos</a>
        </div>
    </div>
</main>

<div class="como__funciona container mx-auto my-8" >
    <p class="text-black text-center mx-4 text-3xl lg:text-5xl font-bold ">¿Cómo funciona?</p>
    <div class="como--seleccion flex justify-between mx-4 my-8">
        <a class="btn btn--primary   rounded-md text-sm xl:text-base text-center font-bold flex-grow mr-2 max-w-xl py-4 xl:py-6" href="#">Busco profesionista</a>
        <a class="btn btn--secondary rounded-md text-sm xl:text-base text-center font-bold flex-grow ml-2 max-w-xl py-4 xl:py-6" href="#">Soy un experto</a>
    </div>
    <p class="mb-8 mx-4 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ipsa molestias qui adipisci ex id!  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quaerat quam atque, vel voluptatum molestias.</p>
    <div class="pasos__profesionista flex flex-wrap xl:flex-no-wrap justify-center">
        <img class="pasos--get-pro flex-grow-0 flex-shrink  my-0 mx-0 rounded-lg" src="./img/busco_paso1.png" alt="">
        <img class="pasos--get-pro flex-grow-0 flex-shrink my-0 mx-0 rounded-lg" src="./img/busco_paso2.png" alt="">
        <img class="pasos--get-pro flex-grow-0 flex-shrink my-0 mx-0 rounded-lg" src="./img/busco_paso3.png" alt="">
        <img class="pasos--get-pro flex-grow-0 flex-shrink my-0 mx-0 rounded-lg" src="./img/busco_paso4.png" alt="">
    </div>
    <div class="pasos__experto"></div>
</div>

<div class="expertos container bg-light-back mb-4 mx-auto">
    <div class="expertos--header flex justify-start mx-4 mb-8">
        <svg class=" w-8 h-12 lg:w-12 lg:h-16 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 246 353">
            <image id="Capa_1" data-name="Capa 1"  xlink:href="data:img/png;base64,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"/>
        </svg>
        <p class="text-black text-center text-3xl xl:text-5xl tracking-tight font-bold ml-2">Nuestros expertos</p>
    </div>
    <div class="expertos-cards flex justify-evenly ">

        <div class="card1 bg-gray-200 mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
            <div class="header--card1 flex mb-2 ">
                <img class="h-24 w-24 mt-4 ml-2" src="./img/avatar1.png" alt="avatar1">
                <div class="info--header-card1 text-sm ml-2 mt-4">
                    <p class="nombre font-semibold">Luis Fernando Flores</p>
                    <p class="carrera font-semibold">Ingeniero en Sistemas</p>
                    <p class="cedula font-semibold">Cédula Prof. 09825772</p>

                    <div class="pills-cards hidden md:flex flex-wrap px-2 py-2">
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#photography</span>
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#travel</span>
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100">#winter</span>
                      </div>

                </div>
            </div>
            <p class="descripcion--expertos-cards text-justify font-semibold mx-2 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde qui dicta ipsum, quo inventore cum maxime dolores non quia nihil.</p>
            <div class="mx-2">
                <button class="contactar--expertos-card btn btn--secondary text-sm font-bold w-full rounded-md py-4 mb-4">Contactar</button>
            </div>
        </div>

        <div class="card1 hidden xl:block  bg-gray-200 my-4 rounded-lg shadow-lg xl:w-2/5">
            <div class="header--card1 flex mb-2 ">
                <img class="h-24 w-24 mt-4 ml-2" src="./img/avatar1.png" alt="avatar1">
                <div class="info--header-card1 text-sm ml-2 mt-4">
                    <p class="nombre font-semibold">Luis Fernando Flores</p>
                    <p class="carrera font-semibold">Ingeniero en Sistemas</p>
                    <p class="cedula font-semibold">Cédula Prof. 09825772</p>

                    <div class="pills-cards hidden md:flex flex-wrap px-2 py-2">
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#photography</span>
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100 mr-1 mb-1">#travel</span>
                        <span class="inline-block bg-black rounded-full px-2 py-2 text-sm font-semibold text-gray-100">#winter</span>
                      </div>

                </div>
            </div>
            <p class="descripcion--expertos-cards text-justify font-semibold mx-2 mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde qui dicta ipsum, quo inventore cum maxime dolores non quia nihil.</p>
            <div class="mx-2">
                <button class="contactar--expertos-card btn btn--secondary text-sm font-bold w-full rounded-md py-4 mb-4">Contactar</button>
            </div>
        </div>
    </div>
</div>

<div class="registro container  mt-4 mb-2 mx-auto">
    <div class="registro--header flex justify-start mb-4 pt-4 pl-2">
        <svg class="w-8 h-12 lg:w-12 lg:h-16 " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 246 353">
            <image id="Capa_1" data-name="Capa 1"  xlink:href="data:img/png;base64,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"/>
        </svg>
        <p class="text-black text-center text-3xl xl:text-5xl font-bold ml-2">Registro</p>
    </div>

    <div class="registro--seleccion bg-white rounded-lg shadow-lg w-11/12 max-w-screen-xl mx-auto py-2">
        <form action="/">
        <!-- <a class="btn--registro btn btn--primary   rounded-md text-xs tracking-tight text-center font-bold py-4 mr-1" href="#">Busco profesionista</a>
        <a class="btn--registro btn btn--secondary rounded-md text-xs tracking-tight text-center font-bold py-4 ml-1" href="#">Soy un experto</a>    </div> -->

        <div class="tipo-cuenta flex">
            <input type="radio" value="patron" id="patron" name="tipoCuenta" checked>
            <label class="radio text-sm" for="patron"> Busco profesionista </label>

            <input type="radio" value="experto" id="experto" name="tipoCuenta">
            <label class="radio text-sm" for="experto"> Soy un experto </label>
        </div>
        <div class="datos flex flex-col items-center">
            <span class="flex justify-center items-center w-full my-2">
                <label class="w-12 h-10 text-center bg-main-yellow rounded-l-lg shadow-lg border border-solid border-gray-500 py-2" id="icon" for="name"><i class="icon-envelope "></i></label>
                <input class="w-64 h-10             bg-red-step    rounded-r-lg shadow-lg border border-solid border-gray-500 pl-2" type="text" name="name" id="name" placeholder="Email" required/>
            </span>
            <span class="flex justify-center items-center w-full my-2">
                <label class="w-12 h-10 text-center bg-main-yellow rounded-l-lg shadow-lg border border-solid border-gray-500 py-2" id="icon" for="name"><i class="icon-user"></i></label>
                <input class="w-64 h-10             bg-red-step    rounded-r-lg shadow-lg border border-solid border-gray-500 pl-2" type="text" name="name" id="name" placeholder="Name" required/>
            </span>
            <span class="flex justify-center items-center w-full my-2">
                <label class="w-12 h-10 text-center bg-main-yellow rounded-l-lg shadow-lg border border-solid border-gray-500 py-2" id="icon" for="name"><i class="icon-shield"></i></label>
                <input class="w-64 h-10             bg-red-step    rounded-r-lg shadow-lg border border-solid border-gray-500 pl-2" type="password" name="name" id="name" placeholder="Password" required/>
            </span>
            <span class="flex justify-center items-center w-full my-2">
                <p class="w-48 text-sm font-semibold">By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
                <a href="#" class="btn btn--primary rounded-md text-sm text-center font-bold px-2 py-2 ">Registrar</a>
            </span>
        </div>
        </form>

    </div>

    <hr>
</div>

@endsection
