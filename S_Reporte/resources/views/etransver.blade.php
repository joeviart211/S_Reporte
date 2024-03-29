<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placeholder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('transversalidad.edit',$transversalidad->eje)}}">
                    @method('PATCH')
                    @csrf
                    {{-- <label>Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required="true" value="{{$transversalidad->nombre}}"> --}}
                    <label for="InputData1">Fecha</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" required="true" value="{{$transversalidad->fecha}}">

                    <br>
                    

                    <label for="InputData1">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required="true" value="{{$transversalidad->nombre}}"  >

                        <br>
                        <textarea id="justificacion" name="justificacion" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md"  > {{$transversalidad->justificacion}} </textarea>
                    <br>



            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
