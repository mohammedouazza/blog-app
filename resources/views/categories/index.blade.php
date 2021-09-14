@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories <a class="btn btn-primary float-right" href="{{route("categories.create")}}">Create</a></div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item">
                                {{$category->title}} 
                                    <button class="btn btn-danger float-right" onclick="
                                    if(confirm('Confirm deletion')){
                                        var form = document.getElementById('delete_category');
                                        form.action = '{{ route('categories.destroy', $category->id) }}';
                                        form.submit();
                                    }
                                    ">Delete</button>
                                    <a class="btn btn-warning float-right mr-2" href="{{ route("categories.edit", $category->id) }}">Edit</a>
                            </li>
                        @endforeach
                    </ul>

                    <form action="" method="POST" id="delete_category">
                        @csrf
                        @method("DELETE")
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
