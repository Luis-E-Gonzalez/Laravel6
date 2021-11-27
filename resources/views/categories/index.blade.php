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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
  <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg>
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
                        <button type='button' class="btn btn-sm btn-primary"><i class="far fa-eye"></i></button>
                        <a type="button" href="{{route('category.edit',$category->id) }}" class="btn btn-sm  btn-success" 
                          data-bs-toggle="modal" data-bs-target="#modalUpdate{{$category->id}}"><i class="fas fa-pen-square"></i></a>
                        <form action="{{ route('category.destroy', $category) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type='submit' class="btn btn-sm btn-danger"                  
                            onClick="return confirm('Se eliminara el registro')">
                            <i class="far fa-trash-alt"></i>
                          </button>           
                        </form>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
            {{$categories->links()}} 
            <!-- Modal edit  STAR-->
          <div class="modal fade" id="modalUpdate{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">  
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label=""></button>
                </div>
                <div class="modal-body">
                  <div class="container">
                  <div class="row">
                    <form action="{{ route('category.store') }}" method="POST">
                      {{-- generar el token para el envio de dato csrf --}}
                      {{ csrf_field() }} 
                        <label class= "col" for="">Nombre Categoria:</label>
                        <input class="col from-control" type="text" name="name" placeholder="Deportes" value={{$category->name}}>
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
          </div>
          </div>
        </div>
        @endsection