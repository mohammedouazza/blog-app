@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category: {{ $category->title }}</div>

                <div class="card-body">

                    <form method="POST" action="{{route("categories.update", $category->id)}}" class="form-group">
                        @csrf
                        @method("PUT")
                        <input type="text" class="form-control col mb-2" placeholder="Title" name="title" value="{{ $category->title }}">
                        <input title="Edit Category" type="submit" class="btn btn-warning">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
