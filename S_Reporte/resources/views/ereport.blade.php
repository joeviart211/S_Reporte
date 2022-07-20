<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placeholder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('report.edit',$reporte->id)}}">
                    @method('PATCH')
                    @csrf

                    <label for="InputData1">Fuente</label>
        <input type="text" id="fuente" name="fuente" class="form-control" required="true" value= {{$reporte->fuente}}>
        <label for="InputData1">Fecha</label>
        <input type="text" id="fecha" name="fecha" class="form-control" required="true" value={{$reporte->fecha}}>
        @if ($reporte->tema_selecto==1)
        <input type="checkbox" name="tema_selecto" value="1" checked>Tema Selecto </b>
        @else
       <input type="checkbox" name="tema_selecto" value="1">Tema Selecto </b>
        @endif


        @if ($reporte->metadato==1)
        <input type="checkbox" name="metadato" value="1" checked>Metadato</b>

        @else
        <input type="checkbox" name="metadato" value="1">Metadato</b>

        @endif
        @if ($reporte->evento==1)

        <input type="checkbox" name="evento" value="1"checked>Evento</b>

        @else
        <input type="checkbox" name="evento" value="1">Evento</b>

        @endif

        <br><br>
        <div>
        <label for="InputData1">Nombre de la situación</label>
        <textarea id="n_situacion" name="n_situacion" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$reporte->n_situacion}}</textarea>
        </div>
        <br>
        <label for="InputData1">Transversalidad</label>

    <div class="inline-block relative w-64">
        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="transversalidad">
            <option value={{$reporte->transversalidad}}>{{$reporte->transversalidad}}</option>
            @foreach($transversalidades as $transversalidad => $value )

            <option value={{$value->eje}}>{{$value->eje}}</option>

            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    <br>
    <label for="InputData1">Reseña</label>
    <textarea id="reseña" name="reseña" rows="5" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$reporte->reseña}}</textarea>
<br>

<label for="InputData1">Proceso de validación</label>
<textarea id="proceso_validacion" name="proceso_validacion " rows="1" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$reporte->proceso_validacion}}</textarea>




<br>


<h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Analisis de la situación</h2>

<div class="grid grid-cols-2 gap-2">
    <div>01</div>

    <div>09</div>
  </div>



{{-- <label for="InputData1">Direccion General</label>
<textarea id="direccionG" name="direccionG " rows="1" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$reporte->direccionG}}</textarea>

<label for="InputData1">Direccion  Web 1</label>
<textarea id="direccionesWebG" name="direccionesWebG " rows="1" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$reporte->direccionesWebG}}</textarea>

<br>

<label for="InputData1">Adjuntar</label>
<input type="file" id="documentoDG" name="documentoDG" class="form-control" >
<br><br>
</div>


<label for="InputData1">Direccion  diagnostico </label>
<input type="text" id="direcciones_diagnostico" name="direcciones_diagnostico" class="form-control" required="true">
<label for="InputData1">Direccion  Web 2</label>
<input type="text" id="direccionesWebD" name="direccionesWebD" class="form-control" required="true">


    <br>
<label for="InputData1">Adjuntar  </label>

<input type="file" id="documento_dd" name="documento_dd" class="form-control" >

</div>

<br>
<div>
<label for="InputData1">Direccion Proyecto </label>
<input type="text" id="direccion_proyecto" name="direccion_proyecto" class="form-control" required="true">
<label for="InputData1">Direccion  Web 3 </label>
<input type="text" id="direccion_web_P" name="direccion_web_P" class="form-control" required="true">

<br>
<label for="InputData1">Documento de proyecto </label>
<input type="file" id="documento_DP" name="documento_DP" class="form-control" required="true">
</div>
<br>
<div>
<label for="InputData1">Direccion de planeación  </label>
<input type="text" id="direccion_planeacion	" name="direccion_planeacion" class="form-control" required="true">
<label for="InputData1">Direccion   Web 4 </label>
<input type="text" id="	direccion_web_Pl" name="direccion_web_Pl" class="form-control" required="true">
    <br>
<label for="InputData1">Documento de planeación </label>

<input type="file" id="documento_P" name="documento_P" class="form-control" required="true">
</div>
<div>

</div>
<br>

<div>

    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Resultados de analisis </h2>
    <label for="InputData1">Observaciones  </label>
    <input type="text" id="observaciones" name="observaciones" class="form-control" required="true">

    <label for="InputData1">Reporte  </label>
    <input type="file" id="reporte" name="reporte" class="form-control" required="true">
    <input type="checkbox" name="tema_selecto" value="1">Alerta</b>
    <input type="checkbox" name="metadato" value="1">Comunicado</b>
    <input type="checkbox" name="evento" value="1">Tarjeta Informatica</b>
</div>

@error('reporte')




@enderror






            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
</div> --}}
</x-app-layout>
