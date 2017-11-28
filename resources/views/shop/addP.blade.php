@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')
    <div class="row">

            <form action="{{ route('checkout') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">titulo</label>
                            <input type="text" id="titulo" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">ruta de la imagen</label>
                            <input type="text" id="imagePath" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">precio</label>
                            <input type="text" id="precio" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">descripcion</label>
                            <input type="text" id="description" class="form-control" required>
                        </div>
                    </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">añdir</button>
            </form>
        </div>
    </div>
@endsection
