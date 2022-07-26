<div class="input-group">
<form action="{{ route('reporte.search', )}}" method="get">




<label for="filtro">Filtro</label>
<select name="filter" id="filter" required="true">
	<option value="">Escoge una opción </option>
	<option value="fuente">Fuente</option>
	<option value="fecha">Fecha</option>
	<option value="n_situacion">Nombre de situación</option>
    <option value="transversalidad">Transversalidad</option>
</select>

<label for="tipo">Tipo</label>
<select name="tipo" id="tipo">
	<option value="all">Todas</option>
	<option value="metadato">Metadato</option>
	<option value="tema_selecto">Tema Selecto</option>
	<option value="evento">Evento</option>

</select>
<input type="text" name="search" id="search" class="form-control rounded" placeholder="Buscar" aria-label="Search" aria-describedby="search-addon" />
<button type="submit" class="btn btn-outline-primary">Buscar</button>
</form>

</div>


<div>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <table class="table">

    <thead>
      <tr>
        <th scope="col">Fuente</th>
        <th scope="col">Fecha</th>
        <th scope="col">Nombre de la situación </th>
        <th scope="col">Transversalidad</th>
        <th scope="col">Detalles</th>
        <th scope="col"> Opciones</th>
      </tr>
    </thead>
    <tbody>

    <tr>
        @foreach($reportes as $reporte)
        <th>
            {{ $reporte -> fuente }}
        </th>
        <th>

                {{$reporte -> fecha}}
        </th>
        <th>
            {{$reporte ->n_situacion}}
        </th>
        <th>
            {{$reporte -> transversalidad}}

        </th>
        <th>
            <a href="detalles/{{$reporte->id}}" target="_blank">Info</a>
        </th>
        <th>
            <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog relative w-auto pointer-events-none">
<div
class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
<div
  class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
  <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Modal title</h5>
  <button type="button"
    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
    data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body relative p-4">
 
</div>
<div
  class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
  <button type="button" class="px-6
    py-2.5
    bg-purple-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md
    hover:bg-purple-700 hover:shadow-lg
    focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-purple-800 active:shadow-lg
    transition
    duration-150
    ease-in-out" data-bs-dismiss="modal">Close</button>
  <button type="button" class="px-6
py-2.5
bg-blue-600
text-white
font-medium
text-xs
leading-tight
uppercase
rounded
shadow-md
hover:bg-blue-700 hover:shadow-lg
focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
active:bg-blue-800 active:shadow-lg
transition
duration-150
ease-in-out
ml-1">Save changes</button>
</div>
</div>
</div>
</div>

            <a href="{{ route('report.update',$reporte->id)}}">Editar</a>
              <br>
              <form action="{{ route('reporte.destroy', $reporte->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Borrar</button>
              </form>
        </th>
    </tr>
        @endforeach



    </tbody>

  </table>

  </div>
