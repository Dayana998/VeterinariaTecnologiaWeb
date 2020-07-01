@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div class="card-group">
      <div class="card">
        <img src="/img/m.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title">Juguete Errático para perros</h5>
          <p class="card-text">Su superficie facetada masajea las encías, crea un rebote divertido y errático, su cámara interna de fácil limpieza guarda mantequilla de cacahuate o golosinas grandes para hacerlo aun más interesantes.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Obtener Producto</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Producto Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Dueño Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </small>
        </div>
      </div>
      <div class="card">
        <img src="/img/mm.jpg" class="card-img-top" alt="Card image" height="250">
        <div class="card-body">
          <h5 class="card-title">Juguete KONG EXTREME</h5>
          <p class="card-text">KONG EXTREME es para los perros más destructores y para morder, aventar, rebotar, jugar, entretenerlo y mantenerlo ocupado.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Obtener Producto</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Producto Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Dueño Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </small>
        </div>
      </div>
      <div class="card">
        <img src="/img/mmm.jpg" class="card-img-top" alt="Card image" height="250">
        <div class="card-body">
          <h5 class="card-title">Vaca de Juguete con Sonido Wiggi de Kong
</h5>
          <p class="card-text">Una variedad de texturas y un sonido muy divertido tendran a tu perro sumamente entretenido. </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Obtener Producto</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Producto Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Dueño Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </small>
        </div>
      </div>
    </div>
<br>
    <div class="card-group">
      <div class="card">
        <img src="/img/r.jpg" class="card-img-top" alt="Card image">
        <div class="card-body">
          <h5 class="card-title"> Ropa Con Capucha Pequeño</h5>
          <p class="card-text">Las ropas con capucha para perros es la prenda de vestir mas solicitada debido a su diseño, es ideal para días lluviosos o con frío.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Obtener Producto</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Producto Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Dueño Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </small>
        </div>
      </div>
      <div class="card">
        <img src="/img/r1.png" class="card-img-top" alt="Card image" height="380">
        <div class="card-body">
          <h5 class="card-title">Chaqueta De Estilo Japonés</h5>
          <p class="card-text">Las camisas para perros es la prenda de vestir mas solicitada debido a su diseño, ligereza, y aunque no es ideal para días lluviosos o con frío.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Obtener Producto</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Producto Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Dueño Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </small>
        </div>
      </div>
      <div class="card">
        <img src="/img/r2.jpg" class="card-img-top" alt="Card image" height="380">
        <div class="card-body">
          <h5 class="card-title">Camisas Para Perros
</h5>
          <p class="card-text">Las camisas para perros es la prenda de vestir mas solicitada debido a su diseño, ligereza, y aunque no es ideal para días lluviosos o con frío. </p>
        </div>
        <div class="card-footer">
          <small class="text-muted">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Obtener Producto</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Compra de Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                        <div class="row">
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Producto Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="col">
                            <label for="recipient-name" class="col-form-label">Dueño Id:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Cantidad:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Precio Total:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Comprar</button>
                  </div>
                </div>
              </div>
            </div>
          </small>
        </div>
      </div>
    </div>


  </div>
</div>

@endsection