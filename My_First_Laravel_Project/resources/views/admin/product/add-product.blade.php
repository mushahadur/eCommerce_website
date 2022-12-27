
@extends('admin.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add Product</h1>
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('createProduct')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name" />
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Select Category Name</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="category_id" id="categoryId">
                                            <option disabled> -- Select a Category -- </option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}"> {{$category->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Select a Sub Category Name</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="sub_category_id">
                                            <option disabled> -- Select Sub Category -- </option>
                                            @foreach($subCategories as $subCategorie)
                                                <option value="{{$subCategorie->id}}"> {{$subCategorie->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Select a Brand Name</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="brand_id">
                                            <option disabled> -- Select a Brand -- </option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}"> {{$brand->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Select a Unit Name</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" name="unit_id">
                                            <option disabled> -- Select a Unit -- </option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}"> {{$unit->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-md-4">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <label class="col-form-label col-md-4 ">Price</label>
                                    <div class="col-md-8">
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label class="">Regular Price</label>
                                                <input type="text" class="form-control" name="regular_price">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="">Selling Price</label>
                                                <input type="text" class="form-control" name="selling_price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Product Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio"  name="status" value="1">Published</label>
                                        <label for=""><input  type="radio" name="status" value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Other Product Images</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image[]" class="form-control"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-5"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-primary " value="Add New Product" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('admin-js')
    <script>
        $(document).on('change', '#categoryId', function () {

        var categoryId = $(this).val();
            $.ajax({
                url:"/get-sub-category-by-category-id"+categoryId,
                method: 'GET',
                dataType: 'JSON',
                data: {},
                success: function (res) {
                    var option = '';
                    option += '<option value="" disabled Selected>Select a sub category</option>';
                    $.each(res, function (key, value) {
                        option += 'option value "'+value.id+'">'+value.name+'</option>';
                    })
                    $('#subCategoryId').empty().append(option);
                },
                error: function (e) {
                    console.log(e);
                }
            })
        })
    </script>

    @endsection









