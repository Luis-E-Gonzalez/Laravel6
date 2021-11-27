@extends('Layout/app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <form method="post" action=" autocomplete="off" class="form-horizontal">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Crear artículo</h4>
                        <!-- <p class="card-category">User information</p> -->
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label for="title" class="col-sm-2 col-form-label">Título</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="name" name="title" id="title" type="text" placeholder="Título" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label for="subtitle" class="col-sm-2 col-form-label">Subtítulo</label>
                            <div class="col-sm-7">
                                <div class="form-group bmd-form-group is-filled">
                                    <input class="form-control" name="name" name="subtitle" id="subtitle" type="text" placeholder="Subtítulo" required aria-required="true">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <textarea class="content" id="body" name="body"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4">
            <div class="card-footer ml-auto mr-auto">
                <button type="button" id="btn-guardar" class="btn btn-primary">guardar</button>
            </div>
            <div class="card-footer ml-auto mr-auto">
            <input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple />
            </div>
        </div>
    </div>
</div> 
@endsection
