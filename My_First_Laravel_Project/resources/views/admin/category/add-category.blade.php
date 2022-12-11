@extends('admin.master')

@section('body')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Add Category</h1>
                            <p class="text-center text-success">{{Session::get('message')}}</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('createCategory')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Category Name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1">Published</label>
                                        <label for=""><input  type="radio" name="status" value="0">Unpublished</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Category Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control"  />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-5"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success " value="Add Category" />
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

