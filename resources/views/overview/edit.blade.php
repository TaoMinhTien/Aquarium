<div class="px-5">
  <h2 class="text-2xl flex font-bold text-gray-800"> Upload news</h2>

  <div class="flex items-center justify-center mt-8">
    <div class="w-8/12">
      <form method="post" action="{{ route('overview.update', $overview) }}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="mt-4">
          <label for="title" class="block mb-1 font-bold text-gray-700">Title</label>

          <input type="text" id="title" name="title" placeholder="Enter title" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" value="{{ $banner->title }}" required autofocus>
        </div>

        <div class="mt-4">
          <label for="description" class="block mb-1 font-bold text-gray-700">Description</label>

          <textarea id="description" name="description" class="block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>{{ $banner->description }}</textarea>
        </div>

        <div class="mt-4">
          <label for="images" class="block mb-1 font-bold text-gray-700">Images</label>

          <input type="file" id="images" name="images[]" multiple>
        </div>

        <div class="flex items-center justify-end mt-4">
          <button type="submit" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>
