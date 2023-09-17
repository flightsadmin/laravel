<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Create a New Post</h2>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="createPost">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input wire:model="title" type="text" id="title" name="title" class="form-control">
                        @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input wire:model="slug" type="text" id="slug" name="slug" class="form-control">
                        @error('slug') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="body" class="form-label">Content</label>
                        <textarea wire:model="body" id="body" name="body" class="form-control"></textarea>
                        @error('body') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input wire:model="image" type="file" id="image" name="image" class="form-control">
                        @error('image') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="published_at" class="form-label">Published At</label>
                        <input wire:model="published_at" type="datetime-local" id="published_at" name="published_at" class="form-control">
                        @error('published_at') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3 form-check align-content-center">
                        <input wire:model="featured" type="checkbox" id="featured" name="featured" class="form-check-input">
                        <label class="form-check-label" for="featured">Featured</label>
                        @error('featured') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Create Post</button>
                    </div>
                </div>
            </form>
            <h2 class="mt-4">Blog Posts</h2>
            <ul class="list-group">
                @foreach ($posts as $post)
                    <li class="list-group-item d-flex">
                        <div>
                            <strong>Title:</strong> {{ $post->title }}<br>
                            <strong>Slug:</strong> {{ $post->slug }}<br>
                            <strong>Content:</strong> {{ $post->body }}<br>
                            <strong>Published At:</strong> {{ $post->published_at }}<br>
                            <strong>Featured:</strong> {{ $post->featured ? 'Yes' : 'No' }}<br>
                            <strong>Created By:</strong> {{ $post->user->name }}<br>
                        </div>
                        <div>
                            <img class="mb-2 float-end" src="{{ $post->image }}"  style="height:200px; width:200px;"  alt="{{ $post->id }}">
                        </div>
                    </li>
                @endforeach
                <div class="float-end">{{ $posts->links() }}</div>
            </ul>
        </div>
    </div>
</div>