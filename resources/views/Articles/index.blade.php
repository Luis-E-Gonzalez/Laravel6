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
                <h5 class="modal-title" id="exampleModalLabel">Agregar articulo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('article.store') }}" method="POST">
                  {{ csrf_field() }}
                    <div class="col-12">
                      <label for="">Titulo:</label>
                      <input class="from" type="text" name="title" value="" placeholder="Ingresa el titulo" id="">
                    </div>
                    <div class="col-12">
                      <label for="">Imagen:</label>
                      <input class="from" type="text" name="img" value="" placeholder="URL imagen" id="">
                    </div>
                    <div class="col-12">
                      <label for="">Subtitulo:</label>
                      <input class="from" type="text" name="subtitle" value="" placeholder="Ingresa el subtitulo" id="">
                    </div>
                    <div class="col-12">
                      <label for="">Cuerpo:</label>
                      <input class="from" type="text" name="body" value="" placeholder="Ingresa tu texto" id="">
                    </div>
                    <div class="col-12">
                      <label for="">Numero de categoria:</label>
                      <input class="from" type="text" name="category_id" value="" placeholder="Ingresa el id categoria" id="">
                    </div>
                    <div class="col-12">
                      <label for="">Numero de imagen:</label>
                      <input class="from" type="text" name="img_id" value="" placeholder="Ingresa el id de imagen" id="">
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
              <h6 class="text-white text-capitalize ps-3">Lista de articulos</h6>
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
                @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>
                    <form action="{{ route('article.destroy', $article) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input 
                            type="submit"
                            value="Eliminar" 
                            class="btn btn-sm btn-danger"
                            onClick="return confirm('¿Estas seguro de eliminar el registro?')">
                        </form>
                  </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div> 
@endsection
