@extends('admin.layout.app')
@section('title', 'Edit Client Page')
@section('body')
    <div class="page-header">
        <div>
            <h1 class="page-title">Client Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Client</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create Client</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom justify-content-between">
                    <h3 class="card-title">Update Client </h3>
                    <a href="{{route('clients.index')}}" class="btn btn-primary px-4 float-end" type="submit">All Client</a>
                </div>
                <div class="card-body">

                    @if(session('error'))
                        <p class="alert alert-danger text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">{{session('error')}}</p>
                    @endif
                    <form class="form-horizontal" action="{{route('clients.update',$client->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label for="logo" class="col-md-3 form-label">Logo</label>
                            <div class="col-md-9">
                                <input type="file" class="dropify" name="logo" data-default-file="https://laravel8.spruko.com/noa/assets/images/photos/1.jpg" data-height="200"/>
                                <img class="img-fluid" src="{{asset($client->logo)}}" alt="" width="100" height="100">
                                <span class="text-danger">{{$errors->has('logo') ? $errors->first('logo'):''}}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Client Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" required value="{{ $client->name }}" name="name" placeholder="Enter your client name" type="text">
                                <span class="text-danger">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="company_url" class="col-md-3 form-label">Company Url</label>
                            <div class="col-md-9">
                                <input class="form-control" id="company_url" required value="{{ $client->company_url }}" name="company_url" placeholder="Enter your Company Url" type="url">
                                <span class="text-danger">{{ $errors->has('company_url') ? $errors->first('company_url') : '' }}</span>
                            </div>
                        </div>
                        <div class="row mb-4 d-flex form-group">
                            <div class="col-md-3">
                                <label class="" for="type">Status</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" name="status">
                                    <option {{ $client->status == 1 ? 'selected':'' }}  value="1">Active</option>
                                    <option {{ $client->status == 0 ? 'selected':'' }} value="0">Inactive</option>
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
