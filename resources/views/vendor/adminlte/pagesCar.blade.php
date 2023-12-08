@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">INGRESE CARRO</h3>
            </div>
             <form role="form" action=" {{url('saveCar')}} " method="post">
             	<input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="box-body">

                <?php
                date_default_timezone_set('America/Guayaquil');
                $fecha_actual=date("Y-m-d H:i:s");
                ?>

                <div class="form-group">
                  <label>Propietario</label>
                  <input type="text" class="form-control" placeholder="Ingrese propietario" name="owner">
                  <label>Placa</label>
                  <input type="text" class="form-control" placeholder="Ingrese la placa " name="plate">
                  <label>Chasis</label>
                  <input type="text" class="form-control" placeholder="Ingrese el chasis" name="chassis">
                  <label>Fecha Actual</label>
                  <input type="datetime" class="form-control"  value="<?=$fecha_actual?>" name="date">
                </div>

                 <div class="form-group">
                      <label>Tipo de Carro</label>
                    <select name="type_id">
                      @foreach($data as $cars)
                            <option  value=" {{$cars->id}} "> {{$cars->type}} </option>
                      @endforeach
                    </select>
                  </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Registrar</button>
              </div>
              </div>
            </form>
    </div>

    <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Datos de Carro</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Propietario</th>
                  <th>Placa</th>
                  <th>Chasis</th>
                  <th>Fecha Actual</th>
                  <th>Tipo de Carro</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($cardinality as $item)
                      <tr>
                          <td>{{$item->id}}</td>
                          <td>{{$item->owner}}</td>
                          <td>{{$item->plate}}</td>
                          <td>{{$item->chassis}}</td>
                          <td>{{$item->date}}</td>
                          <td>{{$item->typeCardinality->type}}</td>
                          <td><a class="btn btn-primary" href=" {{url('deleteCar',[$item->id])}} ">Eliminar</a><a class="btn btn-primary" href=" {{url('editCar',[$item->id])}} ">Editar</a> </td>
                       </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Propietario</th>
                  <th>Placa</th>
                  <th>Chasis</th>
                  <th>Fecha Actual</th>
                  <th>Tipo de Carro</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
</div>

	</div>
@endsection
