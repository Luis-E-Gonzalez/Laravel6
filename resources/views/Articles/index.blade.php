@extends('Layout/app')
@section('content')
<div class="panel-body">
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Lista De Articles</h6>
                  <div class="float-end">  
                    {{-- Button del article add --}}                
                      <a type="button" href="article/add" class="btn btn-primary">
                        <i class="fas fa-plus-circle"></i>
                      </a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
<div class="container">
    <div class="row">
        <table class="class="table align-items-center mb-0"">
            <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Clave</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nombre</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opciones</th>
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
                        <button type='submit' class="btn btn-danger"
                        onClick="return confirm('estas seguro  a eliminar el registro?')"><i class="far fa-trash-alt"></i></button>
                       {{--  <input 
                          type="submit"
                          value="Eliminar" 
                          class="btn btn-sm btn-danger"
                          onClick="return confirm('estas seguro  a eliminar el registro?')">
                           --}}
                  </td>
                </tr>
                @endforeach
            </tbody>

        </table>
         </div>
    </div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
@endsection
