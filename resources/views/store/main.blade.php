@extends('layouts.main')

@section('content')

    <div class="col-md-8">

        <h1 class="my-4">AIT Computer
            <small>Leading e-learning in Myanmar</small>
        </h1>

        <!-- Blog Post -->
        @foreach($posts as $post)

            <div class="card mb-4">
                {{--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">--}}
                {{ Html::image('/img/posts/' . $post->image, $post->title, ['style' => 'width: 728px; height: 300px;']) }}
                <div class="card-body">
                    <h2 class="card-title">{{ $post->title }}</h2>
                    <p class="card-text">{{ $post->short_desc }}</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Posted on {{ $post->created_at->diffForHumans() }} by
                    <a href="#">{{ $post->author }}</a>
                </div>
            </div>

        @endforeach

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
                <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
                <a class="page-link" href="#">Newer &rarr;</a>
            </li>
        </ul>

    </div>

@endsection