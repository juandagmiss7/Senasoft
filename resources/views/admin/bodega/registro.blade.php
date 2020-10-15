@extends('admin.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-lg-8">
        <div class="card card-outline card-sena elevation-2">
            <div class="card-body">
                <div class="col-12 mt-2 mb-4 text-center">
                    <h3 class="card-title">Registro Bodega</h3>
                </div>
                <form method="POST" action="" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row justify-content-center">

                            <div class="form-group col-8">
                                <input id="bodega" name="Bodega" placeholder="Bodega" type="text" class="form-control" maxlength="10" required>
                            </div>

                           <div class="form-group col-8">
                                <input id="ciudad" name="Ciudad" placeholder="Ciudad" type="text" class="form-control" maxlength="40" required>
                            </div>

                            <div class="form-group col-8">
                                <input id="direccion" name="Direccion" placeholder="Direccion" type="text" class="form-control" maxlength="40" required>
                            </div>
                            <div class="form-group col-8 mt-3">
                                <button class="btn w-100 btn-azul" type="submit">Registrar</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
