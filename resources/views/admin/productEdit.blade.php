@extends('template.dashboard')

@section('content')
    <div class="card">
        <div class="card-body">
            
            <form action="{{url('/admin/'.$product_info->id)}}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$product_info -> id}}" id="id"/>
                <label>Product Name</label><br>
                <input type="text" name="type" id="name" value="{{$product_info -> type}}" class="form-control"><br>
                <label>Description</label><br>
                <input type="text" name="desc" id="paragraph" value="{{$product_info -> desc}}" class="form-control"><br>
                <label>Image</label><br>
                <input type="text" name="img" id="image" value="{{$product_info -> img}}" class="form-control"><br>
                <input type="submit" value="Update" class="btn btn-success"><br>
            </form>
        
        </div>
    </div>
@endsection