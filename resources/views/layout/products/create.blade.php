@extends('layout.master')
@section('content')
<link rel="stylesheet" href="{{asset('css/main.css')}}">

<section class="content-header">
    <!-- ... -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add products</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.product.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required minlength="1" maxlength="20">
                                <div id="name-error" class="text-danger"style="display: none;" >Required</div>
                            </div>
                            <script>
                                document.querySelector('[name="name"]').addEventListener('invalid', function (e) {
                                    e.preventDefault();
                                    this.nextElementSibling.style.display = 'block';
                                });
                                </script>




                            <div class="form-group">
                                <label for="price">Price <span class="required">*</span></label>
                                <input type="number" class="form-control" name="price" placeholder="Enter price" required>
                                <div class="text-danger" style="display: none;">Required</div>
                            </div>

                            <script>
                            document.querySelector('[name="price"]').addEventListener('invalid', function (e) {
                                e.preventDefault();
                                this.nextElementSibling.style.display = 'block';
                            });
                            </script>

                            <div class="form-group">
                                <label for="">Category </label>
                                <select name="catagory_id" class="form-control">
                                    <option value="">Select an Option</option>
                                    @foreach($catagories as $catagory)
                                    <option value="{{ $catagory->id }}" style="color: black">{{ $catagory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Image <span class="required">*</span></label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile" accept="image/*" required onchange="validateFileType(this)">
                                        <label class="custom-file-label" for="exampleInputFile" id="fileLabel">Choose file</label>
                                    </div>
                                </div>

                                <div id="fileTypeError" class="text-danger" style="display: none;">Please select a JPEG, PNG, or GIF file.</div>
                            </div>

                            <script>
                            function validateFileType(input) {
                                const allowedTypes = ["image/jpeg", "image/png", "image/gif"];
                                const selectedFile = input.files[0];

                                if (selectedFile && !allowedTypes.includes(selectedFile.type)) {
                                    document.getElementById("fileTypeError").style.display = "block";
                                    input.value = ""; // Clear the selected file
                                } else {
                                    document.getElementById("fileTypeError").style.display = "required";
                                    document.getElementById("fileLabel").innerText = selectedFile ? selectedFile.name : "Choose file";
                                }
                            }
                            </script>



                            <div class="form-group">
                                <label for="">Status </label>
                                <input type="radio" value="1" name="status" required> Active
                                <input type="radio" value="0" name="status" required> Inactive
                            </div>
                            <div class="form-group">
                                <label for="">Favourite</label>
                                <input type="radio" value="1" name="favourite" required> Yes
                                <input type="radio" value="0" name="favourite" required> No
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection
