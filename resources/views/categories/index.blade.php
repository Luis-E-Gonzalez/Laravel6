@extends('Layout/app')
    @section('content')
      @if (session('mesage'))
        <div class="alert alert-info alert-dismissible text-white" role="alert">
        <span class="text-sm"> <a href="javascript:;" class="alert-link text-white">Excelente</a>. {{ session('mesage') }}.</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
      @endif

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('category.store') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="col-12">
                      <label for="">Nombre Categoria:</label>
                      <input class="from" type="text" name="name" value="" placeholder="Ingresa el nombre" id="">
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                      </div>
                </form>
              </div>
            </div>
        </div>
      </div>

    <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Lista de categorias</h6>
                <div class="float-end">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    [+]
                  </button>
                </div>
            </div>
          </div>


          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">    
              <thead>
                  <tr>
                  <th>Clave</th>
                  <th>nombre</th>
                  <th>Opciones</th>
                  </tr>  
              </thead>
              <tbody>
                  @foreach($categories as $category)
                  <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input 
                            type="submit"
                            value="Eliminar" 
                            class="btn btn-sm btn-danger"
                            onClick="return confirm('estas seguro  a eliminar el registro?')">
                        </form>
                    </td>
                  </tr>
                  @endforeach
              </tbody>

          </table>
      </div>
  </div> 
    @endsection
  

  