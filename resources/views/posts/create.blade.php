@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">

                    <form method="POST" action="{{route("posts.store")}}" class="form-group">
                        @csrf
                        <input type="text" class="form-control col mb-2" placeholder="Title" name="title">
                        @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <input title="Add Post" type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
