<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Create New Post</h4>
        </div>

        <div class="card-body">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary mb-3">
                Back
            </a>

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Enter description"></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    Save Post
                </button>
            </form>
        </div>
    </div>

</body>
</html>
