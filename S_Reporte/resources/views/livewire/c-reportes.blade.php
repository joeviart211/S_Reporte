<div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form name="add-post-form" id="add-post-form" method="post" action="{{url('store-report')}}">
        @csrf
        <label for="InputData1">Fuente</label>
        <input type="text" id="fuente" name="fuente" class="form-control" required="true">
        <label for="InputData1">Fecha</label>
        <input type="date" id="fecha" name="fecha" class="form-control" required="true">
        <input type="checkbox" name="tema_selecto" value="1">Tema Selecto </b>
        <input type="checkbox" name="metadato" value="1">Metadato</b>
        <input type="checkbox" name="evento" value="1">Evento</b>
        <br><br>
        <div>
        <label for="InputData1">Nombre de la situación</label>
        <textarea id="n_situacion" name="n_situacion" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>
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
    <textarea id="reseña" name="reseña" rows="5" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>
<br>
<label for="InputData1">Proceso de validación</label>
<input type="text" id="proceso_validacion" name="proceso_validacion" class="form-control" required="true">




<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
