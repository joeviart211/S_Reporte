
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
                    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


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
                              <a href="{{ route('report.update',$reporte->id)}}">Editar</a>
                                <br>
                                <button type="button" class="focus:outline-none openModal text-white text-sm py-2.5 px-1.5 mt-5 mx-2.5  rounded-md bg-red-500 hover:bg-green-600 hover:shadow-lg">Borrar</button>
              <!-- This example requires Tailwind CSS v2.0+ -->
              <div class="fixed z-10 inset-0 invisible overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="interestModal">
                  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
                          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                              <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                  <div class="sm:flex sm:items-start">
                                      <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                          <svg @click="toggleModal" class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                          </svg>
                                      </div>
                                      <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                          <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                            Borrar este registro
                                          </h3>
                                      <div class="mt-2">
                                          <p class="text-sm text-gray-500">
                                             ¿ Seguro que desea borrar este registro? <br> Una vez completado no se podrá deshacer esta accion
                                          </p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                             <form action="{{ route('reporte.destroy', $reporte->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                              <button type="button" class="closeModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                  Cancelar
                              </button>
                          </div>
                      </div>
                          </th>
                      </tr>
                          @endforeach



                      </tbody>
                      {{-- {{ $searches->links('pagination::tailwind') }} --}}

                    </table>

                    </div>

                {{-- <livewire:search, $searches/> --}}
            </div>
        </div>
    </div>
</x-app-layout>
