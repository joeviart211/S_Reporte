<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href={{ url()->previous() }}>Regresar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-transv')}}">
                    @csrf
                    <label for="InputData1">Fecha</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required="true">

                    <br>
                    <label for="InputData1">Eje</label>
                    <input type="text" id="eje" name="eje" class="form-control" required="true">

                    <label for="InputData1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required="true">

                        <br>
                        <textarea id="justificacion" name="justificacion" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>



            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</x-app-layout>
