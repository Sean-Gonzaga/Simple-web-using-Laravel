@extends('template.dashboard')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
            <li class="breadcrumb-item active">Products</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Product Table
                <a href="{{url('admin/create')}}">
                    <button class="btn btn-success">Add new</button>    
                </a>
            </div>
            <div class="card-body">
                
                <table id="datatablesSimple">
                    
                    <thead>

                        <tr>
                            <th>Id</th>
                            <th>Product Title</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_info as $list)
                            <tr>
                                <td>{{ $list ['id']}}</td>
                                <td>{{ $list ['type']}}</td>
                                <td>{{ $list ['img']}}</td>
                                <td>{{ $list ['desc']}}</td>
                                <td>
                                    <a class="btn btn-warning" style="margin-bottom: 2px" href="{{url('/admin/'.$list->id.'/edit')}}"><i class="material-icons">&#xE254;</i></a>
                                    
                                    <form action="{{url('/admin/'.$list->id)}}" method="post">
                                        {{method_field('DELETE')}}
                                        {{ csrf_field() }}
                                        <button onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger"><i class="material-icons">&#xE872;</i></button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach    
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection

