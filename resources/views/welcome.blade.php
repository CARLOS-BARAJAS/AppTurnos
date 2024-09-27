@extends('layouts.config-app')


<body id="inicio" class="min-h-screen flex flex-col bg-cover bg-[url({{ asset('images/textura.jpg') }})]">
    <!-- Barra de navegación -->
    <nav class="bg-neutral-900 p-4 opacity-75 fixed top-0 left-0 w-full">
        <div class="container mx-auto h-10 lg:w-1/2 lg:h-12 ">

            <div class="grid grid-cols-1 md:grid-cols-2  lg:grid-cols-2 gap-6">
                <div class="flex justify-center  md:justify-start">

                    <img src="{{ asset('images/logo_negocio.png') }}" class="h-12 ml-4"> <!-- Logo -->

                </div>
                <div class="flex justify-end space-x-4 items-center mr-10">

                    <a href="#inicio"
                        class="invisible md:visible text-gray-300 hover:text-yellow-300 text-lg font-semibold">Inicio</a>
                    <a href="#menu"
                        class="invisible md:visible text-gray-300 hover:text-yellow-300 text-lg font-semibold">Menu</a>
                    <a href="#recomendados"
                        class="invisible  md:visible text-gray-300 hover:text-yellow-300 text-lg font-semibold">Recomendaciones</a>
                    <a href="#footer"
                        class="invisible  md:visible text-gray-300 hover:text-yellow-300 text-lg font-semibold">Contacto</a>

                </div>
            </div>


        </div>
    </nav>
    <div class="container mx-auto lg:w-1/2 flex-grow">
        <section class="p-4">
            <img src="{{ asset('images/imagen_presentacion.jpg') }}" alt="Imagen Restaurante"
                class="w-full h-64 object-cover border-4 rounded mt-24">
        </section>
        <!-- Menú principal -->
        <section id="menu" class="py-8 ">
            <h2 class="text-4xl font-bold text-left text-yellow-300  w-6 h-6 mb-10">Hamburguesas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 xs:grid-cols-1 gap-4 max-w-4xl mx-auto mt-4">
                <!-- Recomendación 1 -->
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div data-modal-target="default-modal" data-modal-toggle="default-modal" class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">11Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div data-modal-target="default-modal" data-modal-toggle="default-modal" class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
                <div
                    class="p-4 rounded flex items-center justify-between shadow-md shadow-orange-300 cursor-pointer transition ease-in-out delay-150 bg-neutral-50 hover:-translate-y-1 hover:scale-105 hover:bg-neutral-300 duration-300">
                    <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-20 h-20 bg-cover rounded">
                    <div class="ml-4 flex-1">
                        <h3 class="font-bold">Title</h3>
                        <p class="font-sans">Carne con salsa a la bbq con acompañantes de ensalada y papa frita.</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Main modal -->
        <div id="default-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-4xl font-semibold text-gray-900 dark:text-white">
                            Carne llanera
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-gray-300 hover:bg-red-400 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="default-modal">
                            <i class="fa fa-close"></i>
                           
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5 space-y-4">
                        <img src="{{ asset('images/comida.jpg') }}" alt="Comida" class="w-full h-120 bg-cover rounded">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            With less than a month to go before the European Union enacts new consumer privacy laws for
                            its citizens, companies around the world are updating their terms of service agreements to
                            comply.
                        </p>
                        <p class="leading-relaxed text-neutral-900 text-4xl font-bold">
                            $ 90.000
                        </p>
                    </div>
                    <!-- Modal footer -->
                    <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button data-modal-hide="default-modal" type="button"
                            class="text-white bg-neutral-600 hover:bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Pie de página -->

    </div>
    <!-- Imagen principal -->

    <footer id="footer" class="bg-neutral-900 text-white py-8 bottom-0">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-justify">
            <div>
                <h3 class="font-bold mt-3">CONTACTO</h3>
                <p class="mt-3">3202589562</p>
                <p class="mt-3">info23@hotmail.com</p>
            </div>
            <div>
                <h3 class="font-bold mt-3">DIRECCION</h3>
                <p class="mt-3">Calle 14 # 12-15 Tejeditos</p>
                <p class="mt-3">611245, Colombia, Santander</p>
            </div>
            <div>
                <h3 class="font-bold mt-3">HORARIOS TRABAJO</h3>
                <p class=" mt-3">Lunes - Vier: 8:00 am - 12:00 pm</p>
                <p class="mt-3">Sábados: 8:00 am - 12:00 pm</p>
                <p class="mt-3">Domingos: 1:00 pm - 3:00 am</p>
            </div>
        </div>
        <p class="text-center text-sm mt-4 font-bold">&copy;2024, creador por Grisoft</p>
    </footer>



</body>

</html>
