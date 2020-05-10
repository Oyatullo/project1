@extends('layouts.index')

@section('content')
    <h1 class="h1 col-md-auto">Here you can add your Products</h1>

    <form action="{{route('submitProduct')}}" method="POST" class="container">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="ProductName" placeholder="Product Name" class="form-control">
            </div>
            <div class="form-group">
                <label for="Cost">Cost</label>
                <input type="text" name="cost" id="cost" placeholder="Cost" class="form-control">
            </div>
            <div class="form-group">
                <input type="file"><span><button class="btn btn-success" >Submit</button></span>
            </div>
        </div>
    </form>

@endsection
