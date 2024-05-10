<div class="px-5">
  <h2 class="text-2xl flex font-bold text-dark"> Upload news</h2>
  <div class="flex items-center justify-center">
    <div class="w-8/12">
      <form method="post" action="{{ route('information.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mt-4">
          <label for="title" class="form-label">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter title" class="form-control" value="{{ old('title') }}" required autofocus>
        </div>

        <div class="mt-4">
          <label for="description" class="form-label">Description</label>
          <textarea id="description" name="description" class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <div class="mt-4">
          <label for="images" class="form-label">Images</label>
          <input type="file" id="images" name="images[]" multiple>
        </div>

        <div class="flex items-center justify-end mt-4">
          <button type="submit" class="btn btn-primary ml-4">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>

