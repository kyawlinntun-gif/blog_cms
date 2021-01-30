@extends('admin.main')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit New Category</h1>

    {{-- @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success_message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif --}}

    @if (count($errors) > 0)

        @include('common.errors')

    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/categories') }}">View All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/categories/create') }}">Create New Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="panel-body">
        {{ Form::model($category, ['url' => '/categories/'. $category->id, 'method' => 'put']) }}
        {{ Form::label('name', 'Category Name') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        <br>
        {{ Form::submit('Update Category') }}
        {{ Form::close() }}
    </div>

@endsection
