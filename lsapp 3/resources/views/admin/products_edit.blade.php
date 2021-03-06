@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Edit product with IMAGE
                        <a href="{{url('admin-products')}}" class="btn btn-danger float-right">BACK</a>
                    </h4> 
                </div> 
                <div class="card-body">
                    <form action="{{url ('update-product/'.$admin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       {{-- <div class="form-group mb-3">
                           <label for="">Name</label> 
                           <input type="text" name="name" value="{{$admin->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Email </label>
                            <input type="text" name="email" value="{{$admin->email}}" class="form-control">
                         </div>
                         <div class="form-group mb-3">
                            <label for="">Profile image</label>
                            <input type="file" name="profile_image" class="form-control">
                            <img src="{{ asset('uploads/admin/'.$admin->profile_image) }}" width="70px" height="70px" alt="Image">
                         </div>
                         <div class="form-group mb-3">
                            <button type= submit class="btn btn-primary">Update User</button>
                        </div> --}}
                         
                         
                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$admin->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="integer" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$admin->price}}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for=""class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                            <input type="file" name="image" class="form-control" required autocomplete="image">
                            <img src="{{ asset('uploads/products/'.$admin->image) }}" width="70px" height="70px" alt="Image">
                            </div>                            
                         </div> 

                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"> Update Product </button>
                            </div>
                        </div>
                    </form>
                </div>             
            </div>
        </div>
    </div>
</div>

@endsection