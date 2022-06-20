<div>
 @foreach($detalles as $detalle)
 <h1>Dirección General </h1>
 <b>{{$detalle->direccionG}}</b>
 <h1>Direcciones web generales </h1>
 <b>{{$detalle->direccionesWebG}}</b>
 <h1>Documento general </h1>

 {{-- {{ url('switchinfo/'.$info->prisw.'/'.$info->secsw.'/') }} --}}
 <a href={{url("/download/documentoDG/{$detalle->id}")}}>{{$detalle->DDGname}}</a>
 {{-- <h1>Direcciones Diagnostico </h1>
 <b>{{$detalle->direcciones_diagnostico}}</b>
 <h1>Direcciones  Web diagnostico </h1>
 <b>{{$detalle->direccionesWebD}}  </b>
 <h1>Documento diagnostico </h1>
 <b>{{$detalle->docuemnto_dd}}</b>
 <h1>Direcciones Proyecto</h1>
 <b>{{$detalle->direccion_proyecto}}</b>
 <h1>Direcciones web Proyecto </h1>
 <b>{{$detalle->documento_DP}}</b>
 <h1>Direcciones planeacion </h1>
 <b>{{$detalle->direcciones_planeacion}}</b>
 <h1>Direcciones planeacion web </h1>
 <b>{{$detalle->direccion_web_PI}}</b>
 <h1>Documento de planeacion </h1>
 <b>{{$detalle->documento_P}}</b>
 <h1>Observaciones </h1>
 <b>{{$detalle->tipo}}</b>
 <h1>Reporte </h1>
 <b>{{$detalle->reporte}}</b> --}}


 @endforeach

</div>
