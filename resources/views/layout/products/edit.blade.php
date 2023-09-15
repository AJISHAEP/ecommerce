@extends('layout.master')
             @section('content')
                    <section class="content-header">
                        <div class="container-fluid">
                          <div class="row mb-2">
                            <div class="col-sm-6">

                            </div>
                            {{-- <div class="col-sm-6">
                              <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                              </ol>
                            </div> --}}
                          </div>
                        </div><!-- /.container-fluid -->
                      </section>

                      <!-- Main content -->
                      <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-10">
                              <!-- general form elements -->
                              <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Edit products</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <form action="{{route('admin.product.update')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="product_id"value="{{encrypt($products->id)}}">
                                  <div class="card-body">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$products->name}}" placeholder="Enter name" required minlength="1" maxlength="20">
                                    </div>

                                    <div class="form-group">
                                      <label for="">Price</label>
                                      <input type="number" class="form-control" name="price" value="{{$products->price}}" placeholder="Enter price" required minlength="1" maxlength="20">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Catagory</label>
                                       <select name="catagory_id" class="form-control">
                                        <option value="Select an Option"> </option>
                                        @foreach($catagories as $catagory)
                                        <option {{ $catagory->id == $products->catagory_id ? 'selected' : '' }} value="{{ $catagory->id }}">{{ $catagory->name }}</option> value="{{$catagory->id}}">{{$catagory->name}}</option>
                                        @endforeach
                                       </select>
                                      </div>

                                    <div class="form-group">
                                      <label class="required">Image</label>
                                      <div class="input-group">
                                        <div class="custom-file">
                                          <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        {{-- <div class="input-group-append">
                                          <span class="input-group-text">Upload</span>
                                        </div> --}}
                                      </div>
                                      <img src={{asset("storage/images/".$products->image)}} width="100" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <input type="radio" {{ $products->status == 1 ? 'checked' : '' }} value="1" name="status"/> Active

                                        <input type="radio" {{ $products->status == 0 ? 'checked' : '' }} value="0" name="status"/> Inactive
                                      </div>
                                  <div class="form-group">
                                    <label for="">Favourite</label>
                                    <input type="radio" {{ $products->favourite == 1 ? 'checked' : '' }} value="1" name="favourite"/> Yes

                                    <input type="radio" {{ $products->favourite == 0 ? 'checked' : '' }} value="0" name="favourite"/> No

                                  </div>
                              </div>
                                  <!-- /.card-body -->

                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                  </div>
                                </form>
                              </div>
                              <!-- /.card -->

                              <!-- general form elements -->

                              <!-- /.card -->

                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->

                            <!--/.col (right) -->
                          </div>
                          <!-- /.row -->
                        </div><!-- /.container-fluid -->
                      </section>

                    @endsection
