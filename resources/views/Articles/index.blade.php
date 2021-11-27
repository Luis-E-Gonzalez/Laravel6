@extends('Layout/app')
@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Lista de articulos</h6>
            <div class="float-end">
              <a class="btn btn-primary" href="/articles/add" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-plus" viewBox="0 0 16 16">
                  <path d="M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z" />
                  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                </svg></a>
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
                    <button type='button' class="btn btn-primary"><i class="far fa-eye"></i></button>
                    <button type='button' class="btn btn-success"><i class="fas fa-pen-square"></i></button>
                    <form action="{{ route('article.destroy', $article) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type='submit' class="btn btn-sm btn-danger" onClick="return confirm('Se eliminara el registro')">
                        <i class="far fa-trash-alt"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>

            </table>
            {{$articles->links()}}
          </div>
        </div>
        @endsection