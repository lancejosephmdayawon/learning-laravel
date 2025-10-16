<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">My Laravel CRUD</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('posts.create') }}">Create Post</a></li>
            </ul>
        </div>
    </div>
</nav>