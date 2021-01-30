@extends('admin.main')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Category Control</h1>

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

    <div class="panel panel-default">

        <div class="panel panel-heading">
            All Categories
        </div>

        <div class="panel panel-body">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)    
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td><a href="{{ url('/categories/' . $category->id . '/edit') }}">Edit</a></td>
                            <td><button class="btn btn-danger" onclick="categoryDelete({{ $category }})">Delete</button></td>
                            {{ Form::open(['url' => '/categories/' . $category->id, 'method' => 'delete', 'class' => 'category-' . $category->id]) }}
                            {{ Form::close() }}
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

@endsection

@section('jquery')

    <script>
        function categoryDelete($category)
        {
            event.preventDefault();
            $('.category-' + $category.id).submit();
        }
    </script>

@endsection
