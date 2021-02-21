@extends('admin.main')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Post</h1>

    @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success_message') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (count($errors) > 0)

        @include('common.errors')

    @endif

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/posts') }}">View All Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/posts/create') }}">Create New Posts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="panel-body">
        {{ Form::model($post, ['url' => '/posts/'. $post->id, 'method' => 'put', 'enctype' => 'multipart/form-data']) }}

        {{ Form::label('category_id', 'Category Name') }} <br>
        {{ Form::select('category_id', $categories, ['class' => 'form-control']) }}
        <br><br>

        {{ Form::label('title', 'Post Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control']) }}
        <br>

        {{ Form::label('author', 'Author') }}
        {{ Form::text('author', $post->author, ['class' => 'form-control']) }}
        <br>

        {{ Form::label('image', 'Image') }} <br>
        {{ Form::file('image', null, ['class' => 'form-control']) }}
        <br><br>

        {{ Form::label('short_desc', 'Short Description') }}
        {{ Form::text('short_desc', $post->short_desc, ['class' => 'form-control']) }}
        <br>

        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', $post->description, ['class' => 'form-control']) }}

        <br>
        {{ Form::submit('Create Post') }}
        {{ Form::close() }}
    </div>

@endsection
