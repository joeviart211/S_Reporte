<x-app-layout>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <form name="add-post-form" id="add-post-form" method="post" action="{{route('user.edit',$user->id)}}">
        @method('PATCH')
        @csrf
        <label for="InputData1">Nombre</label>
        <input type="text" id="name" name="name" class="form-control" required="true" value={{$user->name}}>
        <div>
        <label for="InputData1">Correo</label>
        <input type="email" id="email" name="email" class="form-control" required="true" value={{$user->email}}>
    </div>


<label for="InputData1">Permisos</label>
<select id="admin"name="admin">
    <option value="">--Seleciona una opcion --</option>
    <option value="1">Administrador</option>
    <option value="0">Usuario</option>

</select>




<br>
<button type="submit" class="btn btn-primary">Submit</button>
</div>
<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Button
  </button>


<style>
    .btn {
      @apply font-bold py-2 px-4 rounded;
    }
    .btn-blue {
      @apply bg-blue-500 text-white;
    }
    .btn-blue:hover {
      @apply bg-blue-700;
    }
  </style>

</x-app-layout>

