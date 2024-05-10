@extends('admin.dashboard')
@section('title', 'Banners - Upload')
@section('content')
<div class="px-5">
  <h2 class="text-2xl flex font-bold text-dark"> update Banners</h2>
  <div class="flex items-center justify-center">
    <div class="flex justify-center mt-3 w-full">
      <div class="w-full mr-5 rounded-lg border border-gray-200">
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
        <table class=" divide-y-2 divide-gray-200 bg-white text-sm">
          <thead class="ltr:text-left rtl:text-right">
            <tr>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Description</th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Createe_at</th>
              <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
            </tr>
          </thead>
          @if (isset($banners))
          @foreach($banners as $value)
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class=" px-4 py-2 text-gray-900">{{ $value -> title }}</td>
              <td class=" px-4 py-2 text-gray-900">{{ $value -> description }}</td>
              <td class=" px-4 py-2 text-gray-900">{{ $value -> created_at }}</td>
              <td>
                <form action="{{ route('banner.delete', ['id' => $value->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Do you want to delete this banner?')" type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-3 rounded-full">
                    Delete
                  </button>
                </form>
              </td>
              <td>
                <form action="{{ route('banner.update.submit', ['id' =>  $value -> id]) }}" method="GET">
                  @csrf
                  <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-3 rounded-full">
                    Update
                  </button>
                </form>
              </td>
            </tr>
          </tbody>
          @endforeach
          @endif
        </table>
      </div>
    </div>
  </div>
</div>
</div>
@endsection