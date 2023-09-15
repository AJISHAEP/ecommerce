@extends('layout.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Dashboard</a></li>
                        <li class="breadcrumb-item active">Products</li>


                    </ol>
                </div> --}}
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <!-- /.card-header -->
                        @if(session()->has('message')) <p class="flashMessage">{{session()->get('message')}}</p>@endif
                        <div class="card-header">

                            <h2 class="card-title">Total Products : ({{$products->total()}}) </h2>

                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <a href={{route('admin.product.create')}} class="btn btn-primary" href="">Add
                                        Product</a>

                                </ul>
                            </div>
                        </div>



                        <div class="card-body">
                            @if ($products->isEmpty())
                                <p class="text-center">Sorry, no products are available.</p>
                            @else
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">S.No</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Catagory</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Favourite</th>
                                        <th style="width: 20%">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img src="{{asset("storage/images/".$product->image)}}" width="100" alt=""></td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->catagory->name }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td>@if ($product->status==1)Active @else Inactive @endif </td>
                                            <td>@if ($product->favourite==1)Yes @else No @endif</td>
                                            <td>
                                                {{-- <a href="#"
                                                    class="btn btn-success btn-sm"><i class="fas fa-user"></i> Info</a> --}}
                                                <a href="{{route('admin.product.edit',encrypt($product->id))}}"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="far fa-edit" style="color: #ffffff; padding-right: 8px;"></i> Edit</a>
                                                <a href="{{ route('admin.product.delete', encrypt($product->id))}}"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash fa-animate-shake" style="color: white; padding-right: 8px;"></i>  Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            @endif
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{$products->links()}}
                            <ul class="pagination pagination-sm m-0 float-right">

                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
