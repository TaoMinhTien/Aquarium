@extends('admin.dashboard')
@section('title', 'Overview - Upload')
@section('content')
<div class="px-5">
  <h2 class="text-2xl flex font-bold text-dark"> Upload Overviews</h2>
  <div class="flex items-center justify-center">
    <div class="w-8/12">
      <form method="post" action="{{ route('overview.store') }}" enctype="multipart/form-data">
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
        @if (session('success'))
        <div class="alert text-blue-600 alert-success">
          <strong>{{ session('success') }} </strong>
        </div>
        @endif
        @if (session('error'))
        <div class="mt-1 text-xs text-red-700 rounded-xl">
          {{ session('error') }}
        </div>
        @endif
        @if ($errors->any())
        <div class="mt-1 text-xs text-red-700 rounded-xl">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="flex items-center justify-end mt-4">
          <button type="submit" class="btn btn-primary ml-4">Create</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection


