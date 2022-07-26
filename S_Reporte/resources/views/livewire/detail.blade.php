<div>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                @csrf

                <div class="py-12">
                    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <form name="add-blog-post-form" id="add-blog-post-form" method="post"  enctype="multipart/form-data" action="{{route('report.edit',$detalle->id)}}">

                                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div>
                    <label for="InputData1">Fuente</label>

                    <textarea readonly id="fuente" name="fuente rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->fuente}}</textarea>
                    </div>
                    <div>
                    <label for="InputData1">Fecha</label>
                    <input type="text" id="fecha" name="fecha" class="form-control" required="true" value={{$detalle->fecha}}>
                    <div>
                        <h1>Tipo</h1>
                    @if ($detalle->tema_selecto==1){
                    <h3>Tema Selecto</h3>
                    @else

                    @endif

                    @if ($detalle->metadato==1)
                    <h3>metadato</h3>
                    @else


                    @endif
                    @if ($detalle->evento==1)
                    <h3>Evento</h3>
                    @endif
                    </div>

                    <br><br>
                    </div>

                    <div>
                    <label for="InputData1">Nombre de la situación</label>
                    <textarea readonly id="n_situacion" name="n_situacion" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->n_situacion}}</textarea>
                    </div>

                    </div>
                    <br>
                    <label for="InputData1">Transversalidad</label>

                <div class="inline-block relative w-64">

                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                  </div>
                <br>
                <label for="InputData1">Reseña</label>
                <textarea readonly id="reseña" name="reseña" rows="5" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->reseña}}</textarea>
            <br>

            <label for="InputData1">Proceso de validación</label>
            <textarea readonly id="proceso_validacion" name="proceso_validacion" rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->proceso_validacion}}</textarea>




            <br>


            <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Analisis de la situación</h2>

            <div class="grid grid-cols-2 gap-4">
            <div>
            <label for="InputData1">Direccion General</label><br>


            <textarea readonly id="direccionG" name="direccionG " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccionG}}</textarea>

            <label for="InputData1">Direccion  Web 1</label>
            <textarea readonly id="direccionesWebG" name="direccionesWebG " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccionesWebG}}</textarea>

            <br>


            <a href={{url("/download/documentoDG/{$detalle->id}")}}>{{$detalle->documentoDG}}</a>
            </div>

            <div>
            <label for="InputData1">Direccion  diagnostico </label>
            {{-- <input type="text" id="direcciones_diagnostico" name="direcciones_diagnostico" class="form-control" required="true"> --}}
            <textarea readonly id="direcciones_diagnostico" name="direccione_diagnostico " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direcciones_diagnostico}}</textarea>

            <label for="InputData1">Direccion  Web 2</label>
            {{-- <input type="text" id="direccionesWebD" name="direccionesWebD" class="form-control" required="true"> --}}
            <textarea readonly id="direccionesWebD" name="direccionesWebD " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccionesWebD}}</textarea>


                <br>

                <a href={{url("/download/documento_dd/{$detalle->id}")}}>{{$detalle->documento_dd}}</a>

                </div>
            <div>
            <label for="InputData1">Direccion Proyecto </label>
            {{-- <input type="text" id="direccion_proyecto" name="direccion_proyecto" class="form-control" required="true"> --}}
            <textarea readonly id="direccion_proyecto" name="direccion_proyecto " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccion_proyecto}}</textarea>

            <label for="InputData1">Direccion  Web 3 </label>
            <textarea readonly id="direccion_web_P" name="direccion_web_P " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccion_web_P}}</textarea>

            {{-- <input type="text" id="direccion_web_P" name="direccion_web_P" class="form-control" required="true"> --}}

            <br>

            <a href={{url("/download/documento_DP/{$detalle->id}")}}>{{$detalle->documento_DP}}</a>
            </div>

            <div>
                <label for="InputData1">Direccion de planeación  </label>
            {{-- <input type="text" id="direccion_planeacion	" name="direccion_planeacion" class="form-control" required="true"> --}}
            <textarea readonly id="direccion_planeacion" name="direccion_planeacion" rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccion_planeacion}}</textarea>

            <label for="InputData1">Direccion   Web 4 </label>
            {{-- <input type="text" id="	direccion_web_Pl" name="direccion_web_Pl" class="form-control" required="true"> --}}
            <textarea readonly id="direccion_web_Pl" name="direccion_web_Pl" rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->direccion_web_Pl}}</textarea>
            <br>

            <a href={{url("/download/documento_P/{$detalle->id}")}}>{{$detalle->documento_P}}</a>

            </div>
                </div>




                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Resultados de analisis </h2>

            <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="InputData1">Observaciones  </label>
                {{-- <input type="text" id="observaciones" name="observaciones" class="form-control" required="true"> --}}
                <textarea id="observaciones" name="observaciones" rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" >{{$detalle->observaciones}}</textarea>
            </div><div>


            {{-- @if ($detalle->Comunicado)
            <input type="checkbox" name="Comunicado" value="1"checked>Comunicado</b>
            @else
            <input type="checkbox" name="Comunicado" value="1">Comunicado</b>
            @endif
            @if ($detalle->Alerta)
            <input type="checkbox" name="Alerta" value="1"checked>Alerta</b>
            @else
            <input type="checkbox" name="Alerta" value="1">Alerta</b>

            @endif
            @if ($detalle->Tarjeta_informativa)
            <input type="checkbox" name="Tarjeta_Informativa" value="1"checked>Tarjeta Informativa</b>

            @else
            <input type="checkbox" name="Tarjeta_Informativa" value="1">Tarjeta Informativa</b>

            @endif --}}

                </div>
                <div>
                    <label for="InputData1">Reporte </label>
                    <a href={{url("/download/reporte/{$detalle->id}")}}>{{$detalle->reporte}}</a>



            </div>

            @error('reporte')




            @enderror









            </div>

            </div>


</div>
