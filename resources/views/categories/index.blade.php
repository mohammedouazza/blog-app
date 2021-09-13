@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories <a class="btn btn-primary float-right" href="{{route("categories.create")}}">Create</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item">
                                {{$category->title}} 
                                    <button class="btn btn-danger float-right">Delete</button>
                                    <button class="btn btn-warning float-right mr-2">Edit</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
