@extends('layout.master')
@section('content')

<form action="{{ route('msg.post') }}" method="post">
    @csrf
    <div class="form-group row">
      <label for="mensaje" class="col-4 col-form-label">Mensaje</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-align-justify"></i>
            </div>
          </div>
          <input id="mensaje" name="mensaje" type="text" class="form-control" required="required">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="titulo" class="col-4 col-form-label">Titulo</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-behance-square"></i>
            </div>
          </div>
          <input id="titulo" name="titulo" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tipo" class="col-4 col-form-label">Tipo</label>
      <div class="col-8">
        <select id="tipo" name="tipo" class="custom-select" required="required">
          <option value="success">Success</option>
          <option value="info">Info</option>
          <option value="question">Question</option>
          <option value="warning">Warning</option>
          <option value="danger">Danger</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
</form>
@endsection
