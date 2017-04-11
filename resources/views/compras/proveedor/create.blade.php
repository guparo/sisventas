@extends('layouts.admin')
@section('contenido')
<h1>create</h1>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Proveedor</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
   </div>     

            {!!Form::open(array('url'=>'compras/proveedor', 'method'=>'POST', 'autocomplete'=>'off','files'=>'true' ))!!}
            {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <lavel for="nombre">Nombre</lavel>
                <input type="text" name="nombre" required value="{{old('nombre')}}"class="form-control" placeholder="Nombre...">
            </div> 
        </div>
       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">            
            <div class="form-group">
                <lavel for="nombre">Direccion</lavel>
                <input type="text" name="direccion" value="{{old('direccion')}}"class="form-control" placeholder="Direccion...">
            </div>          
        </div>        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <lavel>Documento</lavel>
                <select name="tipo_documento" class="form-control">
                        <option value="DNI">DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="PAS">PAS</option>
                </select>
            </div>
        </div>        
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
                <lavel for="num_documento">Numero Documento</lavel>
                <input type="text" name="num_documento"  value="{{old('num_documento')}}"class="form-control" placeholder="Numero de documento...">            
            </div>
        </div>

         
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"> 
            <div class="form-group">
                <lavel for="telefono">Telefono</lavel>
                <input type="text" name="telefono" value="{{old('telefono')}}"class="form-control" placeholder="Telefono...">
            </div>  
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">        
            <div class="form-group">
                <lavel for="email">Email</lavel>
                <input type="text" name="email" value="{{old('email')}}"class="form-control" placeholder="Email...">        
            </div> 
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">          
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>    
            </div>              
        </div>
    </div>
            {!!Form::close()!!}
@endsection