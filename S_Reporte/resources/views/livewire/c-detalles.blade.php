<div>



    <form name="add-blog-post-form" id="add-blog-post-form" method="post" enctype="multipart/form-data"action="{{url('store-detail')}}">
        {{ csrf_field() }}
        <div>
        <label for="InputData1">Direccion General</label>
        <input type="text" id="direccionG" name="direccionG" class="form-control" required="true">
        <input name="id" type="hidden" value= {{$id}} >
        <label for="InputData1">Direccion  Web General</label>
        <input type="text" id="direccionesWebG" name="direccionesWebG" class="form-control" required="true">
        <br>

        <label for="InputData1">Documento direccion   General</label>
        <input type="file" id="documentoDG" name="documentoDG" class="form-control" required="true">
        <br><br>
        </div>
        <div>
        <label for="InputData1">Direccion  diagnostico </label>
        <input type="text" id="direcciones_diagnostico" name="direcciones_diagnostico" class="form-control" required="true">
        <label for="InputData1">Direccion  Web diagnostico </label>
        <input type="text" id="direccionesWebD" name="direccionesWebD" class="form-control" required="true">


            <br>
        <label for="InputData1">Documento direccion  diagnosistico  </label>

        <input type="file" id="documento_dd" name="documento_dd" class="form-control" required="true">
        </div>

        <br>
        <div>
        <label for="InputData1">Direccion Proyecto </label>
        <input type="text" id="direccion_proyecto" name="direccion_proyecto" class="form-control" required="true">
        <label for="InputData1">Direccion de Proyecto Web </label>
        <input type="text" id="direccion_web_P" name="direccion_web_P" class="form-control" required="true">

        <br>
        <label for="InputData1">Documento de proyecto </label>
        <input type="file" id="documento_DP" name="documento_DP" class="form-control" required="true">
        </div>
        <br>
        <div>
        <label for="InputData1">Direccion de planeación  </label>
        <input type="text" id="direccion_planeacion	" name="direccion_planeacion" class="form-control" required="true">
        <label for="InputData1">Direccion  de planeación Web </label>
        <input type="text" id="	direccion_web_Pl" name="direccion_web_Pl" class="form-control" required="true">
            <br>
        <label for="InputData1">Documento de planeación </label>

        <input type="file" id="documento_P" name="documento_P" class="form-control" required="true">
        </div>
        <div>
        <label for="InputData1">Observaciones  </label>
        <input type="text" id="observaciones" name="observaciones" class="form-control" required="true">
        <label for="InputData1">Tipo  </label>
        <input type="text" id="tipo" name="tipo" class="form-control" required="true">
        <label for="InputData1">Reporte  </label>
        <input type="file" id="reporte" name="reporte" class="form-control" required="true">
        </div>
        <br>
        @error('reporte')


        {{-- cachar error de validación --}}

        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
