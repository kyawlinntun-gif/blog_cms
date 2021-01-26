@extends('admin.main')

@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create New Category</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">View All Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/category/create') }}">Create New Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

@endsection
