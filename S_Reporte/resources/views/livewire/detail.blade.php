<div>

 <h1>Dirección General </h1>
 <b>{{$detalle->direccionG}}</b>
 <h1>Direcciones web generales </h1>
 <b>{{$detalle->direccionesWebG}}</b>
 <h1>Documento general </h1>
 <a href={{url("/download/documentoDG/{$detalle->id}")}}>{{$detalle->DDGname}}</a>
  <h1>Direcciones Diagnostico </h1>
 <b>{{$detalle->direcciones_diagnostico}}</b>
 <h1>Direcciones  Web diagnostico </h1>
 <b>{{$detalle->direccionesWebD}}  </b>
 <h1>Documento diagnostico </h1>
<a href={{url("/download/documento_dd/{$detalle->id}")}}>{{$detalle->DDDname}}</a>

 <h1>Direcciones Proyecto</h1>
 <b>{{$detalle->direccion_proyecto}}</b>
 <h1>Documento direccion proyecto</h1>
 <a href={{url("/download/documento_DP/{$detalle->id}")}}>{{$detalle->DDPname}}</a>
 <h1>Direcciones web Proyecto </h1>
 <b>{{$detalle->direccion_web_P}}</b>
 <h1>Direcciones planeacion </h1>
 <b>{{$detalle->direccion_planeacion}}</b>
 <h1>Direcciones planeacion web </h1>
 <b>{{$detalle->direccion_web_Pl}}</b>
 <h1>Documento de planeacion </h1>
 <a href={{url("/download/documento_P/{$detalle->id}")}}>{{$detalle->DPname}}</a>
 <h1>Observaciones </h1>

 <h1>Reporte </h1>
 <a href={{url("/download/reporte/{$detalle->id}")}}>{{$detalle->Rname}}</a>




</div>
