<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Placeholder') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('detalle.edit',$detail->id)}}">
                    @method('PATCH')
                    @csrf
                    <div>
                        <label for="exampleInputEmail1">Direccion General</label>
                        <input type="text" id="direccionG" name="direccionG" class="form-control" required="true" value={{$detail->direccionG}}>
                        <input name="id" type="hidden" value= {{$id}} >
                        <label for="exampleInputEmail1">Direccion  Web General</label>
                        <input type="text" id="direccionesWebG" name="direccionesWebG" class="form-control" required="true">
                        <br>

                        <label for="exampleInputEmail1">Documento direccion   General</label>
                        {{-- <input type="file" id="documentoDG" name=  "documentoDG" class="form-control" required="true" value={{$detail->documentoDG}}> --}}
                        <br><br>
                        </div>
                        <div>
                        <label for="exampleInputEmail1">Direccion  diagnostico </label>
                        <input type="text" id="direcciones_diagnostico" name="direcciones_diagnostico" class="form-control" required="true">
                        <label for="exampleInputEmail1">Direccion  Web diagnostico </label>
                        <input type="text" id="direccionesWebD" name="direccionesWebD" class="form-control" required="true">


                            <br>
                        <label for="exampleInputEmail1">Documento direccion  diagnosistico  </label>

                        {{-- <input type="file" id="documento_dd" name="documento_dd" class="form-control" required="true"> --}}
                        </div>

                        <br>
                        <div>
                        <label for="exampleInputEmail1">Direccion Proyecto </label>
                        <input type="text" id="direccion_proyecto" name="direccion_proyecto" class="form-control" required="true">
                        <label for="exampleInputEmail1">Direccion de Proyecto Web </label>
                        <input type="text" id="direccion_web_P" name="direccion_web_P" class="form-control" required="true">

                        <br>
                        <label for="exampleInputEmail1">Documento de proyecto </label>
                        {{-- <input type="file" id="documento_DP" name="documento_DP" class="form-control" required="true"> --}}
                        </div>
                        <br>
                        <div>
                        <label for="exampleInputEmail1">Direccion de planeación  </label>
                        <input type="text" id="direccion_planeacion	" name="direccion_planeacion" class="form-control" required="true">
                        <label for="exampleInputEmail1">Direccion  de planeación Web </label>
                        <input type="text" id="	direccion_web_Pl" name="direccion_web_Pl" class="form-control" required="true">
                            <br>
                        <label for="exampleInputEmail1">Documento de planeación </label>

                        {{-- <input type="file" id="documento_P" name="documento_P" class="form-control" required="true"> --}}
                        </div>
                        <div>
                        <label for="exampleInputEmail1">Observaciones  </label>
                        <input type="text" id="observaciones" name="observaciones" class="form-control" required="true">
                        <label for="exampleInputEmail1">Tipo  </label>
                        <input type="text" id="tipo" name="tipo" class="form-control" required="true">
                        <label for="exampleInputEmail1">Reporte  </label>
                        {{-- <input type="file" id="reporte" name="reporte" class="form-control" required="true"> --}}
                        </div>
                        <br>



            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
