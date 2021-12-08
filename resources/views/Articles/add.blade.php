@extends('Layout/app')
    @section('content')
    <div class="container-fluid py-4">
        <div class="row">
          <div class="col-9">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Alta De Articulos</h6>
                </div>
                              {{-- star colum article  --}}
              <div class="row">
                <div class="col">
                  <div class="row">
                    <div class="col-12">
                      <label class="form-label" for="">Agrega Titulo Aqui</label>
                      <input type="text" class="col-12 inputborder" placeholder="introduce el titulo aqui">
                    </div>
                  </div>
                  <br>
                      <div class="row">
                        <div class="col">
                          <!-- Create the editor container -->
                          <div id="editor">.
                          </div>
                          <br>
                          {{-- <textarea cols="10" class="col-12 inputborder" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
              </div>
              <div class="col-3">
                  <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                      <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Ajustes De Publicación</h6>
                      </div>
                      <br>
                      <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-12 col-sm col-xs">
                                <button class="btn btn-sm btn-primary">Guardar</button>
                              </div>
                              <div class="col-12 col-sm col-xs">
                                <button class="btn btn-sm btn-primary">v.Previa</button>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="row">
                  <div class="col-9">
                    <div class="card my-4">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">Configuracion SEO</h6>
                        </div>
                      </div>
                      <div class="container">
                        <div class="row">
                          <div class="col-12">
                            <label>Igresar tu keyword aqui :</label>
                            <br>
                            <input type="text" class="col-12 inputborder">
                          </div>
                          <div class="col-12">
                            <label for="">Descripción Seo</label>
                            <textarea class="col-12"name="" id="" cols="30" rows="10"></textarea>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="card my-4">
                      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                          <h6 class="text-white text-capitalize ps-3">Agrega Categoria</h6>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col">
                                  <select class="form-select" aria-label="Default select example">
                                    @foreach ($categories as $category)
                                    <option name="name" value="">{{$category->name}}</option>
                                    @endforeach
                                  </select>
                                  <br>
                                </div>   
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Imagen Destacada</h6>
                          </div>
                          <br>
                          <div class="container">
                              <div class="row justify-content-center">
                                  <div class="col">
                                    <div id="wrapper">
                                      <input type="file" accept="image/*" onchange="preview_image(event)">
                                      <img id="output_image"/>
                                     </div>                                    <br>
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