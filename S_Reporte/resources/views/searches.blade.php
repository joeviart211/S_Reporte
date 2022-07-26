
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-jet-nav-link href="{{ route('creportes') }}" :active="request()->routeIs('dashboard')">
                {{ __('Subir reporte') }}
            </x-jet-nav-link>
        </h2>
    </x-slot>
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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
                          @foreach($searches as $reporte)
                          <th>
                              {{ $reporte ->fuente }}
                          </th>
                          <th>
                              {{$reporte ->fecha}}
                          </th>
                          <th>
                              {{$reporte ->n_situacion}}
                          </th>
                          <th>

                              {{$reporte ->transversalidad}}

                          </th>
                          <th>
                              <a href="detalles/{{$reporte->id}}" target="_blank">Info</a>
                          </th>
                          <th>
                              {{-- <a href="{{ route('transversalidad.update',$transversalidad->id)}}" class="btn btn-primary">Edit</a> --}}
                              <a href="{{ route('report.update',$reporte->id)}}"">Editar</a>
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

                {{-- <livewire:search, $searches/> --}}
            </div>
        </div>
    </div>
</x-app-layout>
