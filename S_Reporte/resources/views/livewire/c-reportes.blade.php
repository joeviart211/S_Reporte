<div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-report')}}">
        @csrf
        <label for="exampleInputEmail1">Fuente</label>
        <input type="text" id="fuente" name="fuente" class="form-control" required="true">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="date" id="fecha" name="fecha" class="form-control" required="true"><br><br>
        <label for="exampleInputEmail1">Nombre de la situación</label>
        <input type="text" id="n_situacion" name="n_situacion" class="form-control" required="true">
        <label for="exampleInputEmail1">Transversalidad</label>
        <input type="text" id="transversalidad" name="transversalidad" class="form-control" required="true">
        
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
