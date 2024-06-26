@extends('admin.layout.app')
@section('title', 'Add Blog Page')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Blog Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Blog</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom justify-content-between">
                    <h3 class="card-title">Create Blog</h3>
                    <a href="{{route('blogs.index')}}" class="btn btn-primary px-4 float-end" type="submit">All Blog</a>
                </div>
                <div class="card-body">

                    <form class="form-horizontal" action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="image" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <span class="text-danger">{{$errors->has('image') ? $errors->first('image'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="title" class="col-md-3 form-label">Blog Title <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" id="title" required value="{{ old('title') }}" name="title" placeholder="Enter your Service name" type="text">
                                <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4" hidden>
                            <label for="author" class="col-md-3 form-label">Blog Author</label>
                            <div class="col-md-9">
                                <input class="form-control" id="author" required value="{{ auth()->user()->first_name.' '.auth()->user()->last_name }}" name="author" placeholder="Enter your Blog Author" type="text">
                                <span class="text-danger">{{ $errors->has('author') ? $errors->first('author') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="short_description" placeholder="Enter Short Description" id="" cols="30" rows="10">{{old('short_description')}}</textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('column') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="long_description" placeholder="Enter Long Description" id="summernote" cols="30" rows="10">{{old('long_description')}}</textarea>
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('column') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="meta_title" class="col-md-3 form-label">Meta Title</label>
                            <div class="col-md-9">
                                <input class="form-control" id="meta_title" required value="{{ old('meta_title') }}" name="meta_title" placeholder="Enter your Meta Title" type="text">
                                <span class="text-danger">{{ $errors->has('meta_title') ? $errors->first('meta_title') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="meta_description" class="col-md-3 form-label">Meta Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="meta_description" placeholder="Enter Short Description" id="" cols="30" rows="10">{{old('meta_description')}}</textarea>
                                <span class="text-danger">{{ $errors->has('meta_description') ? $errors->first('meta_description') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="meta_tags" class="col-md-3 form-label">Meta Tags</label>
                            <div class="col-md-9">
                                <input class="form-control" data-role="tagsinput" id="meta_tags" required value="{{ old('meta_tags') }}" name="meta_tags" placeholder="type tag then enter again type tags" type="text">
                                <span class="text-danger">{{ $errors->has('meta_tags') ? $errors->first('meta_tags') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type"> Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="status">
                                    <option selected value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type"></label>
                            </div>
                            <div class="col-md-9">
                                <button class="btn btn-primary px-5" type="submit">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
