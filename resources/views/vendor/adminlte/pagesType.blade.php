   @extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')

<div class="container-fluid spark-screen">
        <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">INGRESE TIPOS DE CARROS</h3>
            </div>
             <form role="form" action="{{url('saveType')}}" method="post">
             	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">
                <div class="form-group">
                  <label>Tipo Carro</label>
                  <input type="text" class="form-control" placeholder="Ingrese el tipo de carro" name="type">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
              </div>
            </form>
    </div>
 </div>

 <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Tabla Tipos de Carro</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Tipo de carro</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->type}}</td>
                          <td><a class="btn btn-primary" href=" {{url('deleteType',[$item->id])}} ">Eliminar</a><a class="btn btn-primary" href="{{url('editType',[$item->id])}}">Editar</a></td>
                       </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Tipo de carro</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
  </div>

 @endsection
