@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts <a class="btn btn-primary float-right" href="{{route("posts.create")}}">Create</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                        @if(!sizeof($posts))
                            <li class="list-group-item">
                                No posts yet.
                            </li>
                        @endif
                        @foreach($posts as $post)
                            <li class="list-group-item">
                                {{$post->title}} 
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
