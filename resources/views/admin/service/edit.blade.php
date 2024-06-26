@extends('admin.layout.app')
@section('title', 'Edit Service Page')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Service Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Service</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Service</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom justify-content-between">
                    <h3 class="card-title">Update Service </h3>
                    <a href="{{route('services.index')}}" class="btn btn-primary px-4 float-end" type="submit">All Service</a>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" action="{{route('services.update',$service->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="icon" class="col-md-3 form-label">Icon</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="icon" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img class="img-fluid" src="{{asset($service->icon)}}" alt="" width="100" height="100">
                                <span class="text-danger">{{$errors->has('icon') ? $errors->first('icon'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Service Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" required value="{{ $service->name }}" name="name" placeholder="Enter your Service name" type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description" placeholder="Enter Short Description" id="" cols="10" rows="5">{{ $service->short_description }}</textarea>
                                <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('column') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="long_description" placeholder="Enter Long Description" id="" cols="10" rows="5">{{ $service->long_description }}</textarea>
                                <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('column') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type">Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="status">
                                    <option {{ $service->status == 1 ? 'selected':'' }}  value="1">Active</option>
                                    <option {{ $service->status == 0 ? 'selected':'' }} value="0">Inactive</option>
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
