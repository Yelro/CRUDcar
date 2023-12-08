@extends('adminlte::layouts.app')

@section('htmlheader_title')
  {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
  <div class="container-fluid spark-screen">
    <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">EDITAR CARRO</h3>
            </div>
             <form role="form" action=" {{url('updateCar',[$car->id])}} " method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="box-body">

                <?php
                date_default_timezone_set('America/Guayaquil');
                $fecha_actual=date("Y-m-d H:i:s");
                ?>

                 <div class="form-group">
                  <label>Propietario</label>
                  <input type="text" class="form-control" placeholder="Ingrese propietario" value="{{$car->owner}}" name="owner">
                  <label>Placa</label>
                  <input type="text" class="form-control" placeholder="Ingrese placa " value="{{$car->plate}}" name="plate">
                  <label>Chasis</label>
                  <input type="text" class="form-control" placeholder="Ingrese chasis" value="{{$car->chassis}}" name="chassis">
                  <label>Fecha Actual</label>
                  <input type="datetime" class="form-control"  value="<?=$fecha_actual?>" name="date">
                  </div>

                  <div>
                      <label>Tipo Carro</label>
                    <select name="type_id">
                      @foreach($types as $cars)
                            <option  value=" {{$cars->id}} "> {{$cars->type}} </option>
                      @endforeach
                    </select>
                  </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
              </div>
              </div>
            </form>
    </div>
  </div>
@endsection
