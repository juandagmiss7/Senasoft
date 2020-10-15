@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 col-lg-5 offset-lg-3">
        <h3 class="card-title mb-4">Gestionar Programas de Formación</h3>
    </div>
    <div class="col-8 offset-1 col-lg-4 offset-lg-0">
        <form class="form form-inline float-lg-right" action="" method="POST">
            @csrf
            <input type="text" class="form-control" name="buscar_programa" placeholder="Código Programa" maxlength="10">
            <button class="btn" type="submit">
                <i class="fas fa-search" data-toggle="tooltip" title="Click aquí para buscar" id="icono-v"></i>
            </button>
        </form>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12">
            <div class="card card-outline card-sena elevation-2">
                <div class="card-body">
                    <!-- Tabla de registros -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>N°</th>
                                    <th class="text-center">Código</th>
                                    <th>Programa Formación</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                    <tr>
                                        <th scope="row"></th>
                                        <td class="text-center"></td>
                                        <td></td>

                                        <td class="text-center align-middle">
                                            <div class="row justify-content-center text-center">
                                                <div class="col-6">
                                                    <a href="" type="button">
                                                        <i class="fas fa-edit" data-toggle="tooltip" title="Actualizar Programa"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <div class="float-right">
                        </div>
                    </div>
                </div>
            </div>

	        <h4 class="mt-5 text-center">No hay programas de formación registrados</h4>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
