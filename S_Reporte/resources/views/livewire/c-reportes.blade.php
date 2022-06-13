<div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-report')}}">
        @csrf
        <label for="exampleInputEmail1">Fuente</label>
        <input type="text" id="fuente" name="fuente" class="form-control" required="true">
        <label for="exampleInputEmail1">Fecha</label>
        <input type="date" id="fecha" name="fecha" class="form-control" required="true"><br><br>
        <div>
        <label for="exampleInputEmail1">Nombre de la situación</label>
        <textarea id="n_situacion" name="n_situacion" rows="5" cols="30" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block  sm:text-sm border border-gray-300 rounded-md" ></textarea>
        </div>
        <br>

        <select class="form-control" name="transversalidad">
        <option selected>Transversalidad</option>
        @foreach($transversalidades as $transversalidad => $value )
        <option value="$value->nombre">{{$value->nombre}}</option>

        @endforeach
    </select>

<br>
<br>


<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
