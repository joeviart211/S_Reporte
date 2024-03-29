@if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Error</h2>
                    <br>
                    @foreach ($errors->all() as $error)
                    
                        @if($error=="The reporte must be a file of type: pdf.")
                        <li>  El reporte debe de ser un archivo: pdf  </li>
                        @endif

                        @if($error=="The documento d g must be a file of type: xls, xlsx, doc, pdf, pptx, ppt, docx.")
                        <li>  El documento de dirección General  debe de ser un archivo: xls,xlsx,doc,pdf,pptx,ppt,docx  </li>
                        @endif

                        @if($error=="The documento dd must be a file of type: xls, xlsx, doc, pdf, pptx, ppt, docx.")
                        <li>  El documento de dirección de diagnostico  debe de ser un archivo: xls,xlsx,doc,pdf,pptx,ppt,docx  </li>
                        @endif

                        @if($error=="")
                        <li>  El documento de dirección de diagnostico  debe de ser un archivo: xls,xlsx,doc,pdf,pptx,ppt,docx  </li>
                        @endif

                        @if($error=="The documento p must be a file of type: xls, xlsx, doc, pdf, pptx, ppt, docx.")
                        <li>  El documento de dirección de planeación debe de ser un archivo: xls,xlsx,doc,pdf,pptx,ppt,docx  </li>
                        @endif

                        <br>
                        @php
                         $fecha = substr($error,0,-11);

                        @endphp

                        @if ($fecha=="The fecha must be a date after ")
                            <li>La fecha debe de pertenecer a los ultimos 3 meses </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @endif
<div class="grid grid-cols-1 divide-y">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div>

        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Información General</h2>
        <br>
    <form name="add-post-form" id="add-post-form" method="post"  enctype="multipart/form-data" action="{{url('store-report')}}">
        @csrf
        <label for="InputData1">Fuente</label>
        {{-- <input type="text" id="fuente" name="fuente" class="form-control" required="true"> --}}
        <textarea id="fuente" name="fuente" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" required></textarea>
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

    <div class="inline-block relative w-64">
        <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="transversalidad">
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
    <textarea id="reseña" name="reseña" rows="5" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>
<br>
<label for="InputData1">Proceso de validación</label>
<select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="proceso_validacion">
    <option value="Por Validar">Por Validar</option>
    <option value="Implicito">Implicito</option>

</select>


<br>
</div>
    <div>
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Analisis de la situación</h2>
    <div class="grid grid-cols-2 gap-4">
        <div>
        <label for="InputData1">Direccion General</label><br>


        <textarea id="direccionG" name="direccionG " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>

        <label for="InputData1">Direccion  Web 1</label>
        <textarea id="direccionesWebG" name="direccionesWebG " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>

        <br>

        <label for="InputData1">Adjuntar</label>
        <input type="file" id="documentoDG" name="documentoDG" class="form-control" >
        </div>

        <div>
        <label for="InputData1">Direccion  diagnostico </label>
        {{-- <input type="text" id="direcciones_diagnostico" name="direcciones_diagnostico" class="form-control" required="true"> --}}
        <textarea id="direcciones_diagnostico" name="direccione_diagnostico " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>

        <label for="InputData1">Direccion  Web 2</label>
        {{-- <input type="text" id="direccionesWebD" name="direccionesWebD" class="form-control" required="true"> --}}
        <textarea id="direccionesWebD" name="direccionesWebD " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>


            <br>
        <label for="InputData1">Adjuntar  </label>

        <input type="file" id="documento_dd" name="documento_dd" class="form-control" >

            </div>
        <div>
        <label for="InputData1">Direccion Proyecto </label>
        {{-- <input type="text" id="direccion_proyecto" name="direccion_proyecto" class="form-control" required="true"> --}}
        <textarea id="direccion_proyecto" name="direccion_proyecto " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>

        <label for="InputData1">Direccion  Web 3 </label>
        <textarea id="direccion_web_P" name="direccion_web_P " rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>

        {{-- <input type="text" id="direccion_web_P" name="direccion_web_P" class="form-control" required="true"> --}}

        <br>
        <label for="InputData1">Documento de proyecto </label>
        <input type="file" id="documento_DP" name="documento_DP" class="form-control" >
        </div>

        <div>
            <label for="InputData1">Direccion de planeación  </label>
        {{-- <input type="text" id="direccion_planeacion	" name="direccion_planeacion" class="form-control" required="true"> --}}
        <textarea id="direccion_planeacion" name="direccion_planeacion" rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>

        <label for="InputData1">Direccion   Web 4 </label>
        {{-- <input type="text" id="	direccion_web_Pl" name="direccion_web_Pl" class="form-control" required="true"> --}}
        <textarea id="direccion_web_Pl" name="direccion_web_Pl" rows="3" cols="60" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>
        <br>
        <label for="InputData1">Documento de planeación </label>

        <input type="file" id="documento_P" name="documento_P" class="form-control" >


        </div>
            </div>
</div>
<div>

    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Resultados de analisis </h2>
    <label for="InputData1">Observaciones  </label>
    <input type="text" id="observaciones" name="observaciones" class="form-control">

    <label for="InputData1">Reporte  </label>
    <input type="file" id="reporte" name="reporte" class="form-control" required="true">
    <input type="checkbox" name="tema_selecto" value="1">Alerta</b>
    <input type="checkbox" name="metadato" value="1">Comunicado</b>
    <input type="checkbox" name="evento" value="1">Tarjeta Informatica</b>
</div>

@error('reporte')


{{-- cachar error de validación --}}

@enderror
<button type="submit"class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
   Subir reporte
  </button>
</div>
</div>
