<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placeholder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('report.edit',$reporte->id)}}">
                    @method('PATCH')
                    @csrf
        <label for="InputData1">Fuente</label>
        <input type="text" id="fuente" name="fuente" class="form-control" required="true" value="{{$reporte->fuente}}">
        <label for="InputData1">Fecha</label>
        <input type="date" id="fecha" name="fecha" class="form-control" required="true" value="{{$reporte->fecha}}">
        @if($reporte->tema_selecto==1)

        <input type="checkbox" name="tema_selecto" value="1" checked>Tema Selecto </b>
        @else
        <input type="checkbox" name="tema_selecto" value="1">Tema Selecto </b>
        @endif

        @if($reporte->metadato==1)
        <input type="checkbox" name="metadato" value="1"checked>Metadato</b>
        @else
        <input type="checkbox" name="metadato" value="1">Metadato</b>
        @endif

        @if($reporte->evento==1)
        <input type="checkbox" name="evento" value="1" checked>Evento</b>

        @else
        <input type="checkbox" name="evento" value="1">Evento</b>
        @endif

        <br><br>
        <div>
        <label for="InputData1">Nombre de la situación</label>
        <textarea id="n_situacion" name="n_situacion" rows="5" cols="30" required= "true" value="aaaaa"  class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md"  >{{$reporte->n_situacion}}</textarea>
        </div>
        <br>
        <label for="InputData1">Transversalidad</label>
        <select class="form-control" name="transversalidad" required="true">

        @foreach($transversalidades as $transversalidad => $value )
        <option value={{$value->nombre}}>{{$value->nombre}}</option>

        @endforeach
    </select>
    <br>
    <label for="InputData1">Reseña</label>
<textarea id="reseña" name="reseña" rows="5" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$reporte->reseña}}</textarea>
<br>
<label for="InputData1">Proceso de validación</label>
<input type="text" id="proceso_validacion" name="proceso_validacion" class="form-control" required="true" value="{{$reporte->proceso_validacion}}">




<br>






            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
