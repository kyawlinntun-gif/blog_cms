<div class="alert alert-danger">
    <div><strong>Something is wrong!</strong></div>

    <ol>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ol>
</div>
