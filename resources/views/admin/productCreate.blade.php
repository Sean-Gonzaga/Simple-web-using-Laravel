@extends('template.dashboard')

@section('content')
    
    <div class="card-body">
        
        <form action="{{url('/admin')}}" method="post">
            {!! csrf_field() !!}
            <label>Product Name</label><br>
            <input type="text" name="type" id="text" class="form-control"><br>
            <label>Description</label><br>
            <input type="text" name="desc" id="paragraph" class="form-control"><br>
            <label>Image</label><br>
            <input type="text" name="img" id="text" class="form-control"><br>
            <input type="submit" value="Save" class="btn btn-success"><br>
        </form>
    
    </div>

@endsection