@extends('products.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Laravel CRUD Operations</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('products.create')}}" class="btn btn-success">Create new Producs</a>
            </div>
        </div>
    </div>


    {{--Display Success Message --}}

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>

            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>


                <td>
                    <form action="{{route('products.destroy',$product->id)}}" method="post" role="form">
                        <a href="{{route('products.show',$product->id)}}" class="btn btn-info">Show</a>
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


    @endsection