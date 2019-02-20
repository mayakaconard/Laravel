@extends('products.master')
@section('content')

    <h1>Edit Product</h1>

    <div class="uper">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div><br />
    @endif
    <form method="post" action="{{ route('products.update', $product->id) }}" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('name')?'has-error':''}}">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('descritpion')?'has-error':''}}">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{$product->description}}" class="form-control" placeholder="Description">
                    <span class="text-danger">{{$errors->first('description')}}</span>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group{{$errors->has('price')?'has-error':''}}">
                    <strong>Price:</strong>
                    <input type="text" name="price" id="price" value="{{$product->price}}" class="form-control" placeholder="Price">
                    <span class="text-danger">{{$errors->first('price')}}</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>

@endsection