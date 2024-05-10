@extends('admin.dashboard')
@section('title', 'News - All')
@section('content')
<div class="px-5">
  <h2 class="text-2xl flex font-bold text-gray-900 "> Update news</h2>
  <div class="flex justify-center mt-3 w-full">
    <div class="w-full mr-5 rounded-lg border border-gray-200">
      <table class=" divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="ltr:text-left rtl:text-right">
          <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Image</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Audience</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Status</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Address</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Start date</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">End date</th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
          </tr>
        </thead>
        @foreach($events as $value)
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="text-gray-900">
              @if (isset($value->image_file_names) && count($value->image_file_names) > 0)
              <img class="w-1/2" src="{{ asset('news_img/' . $value->image_file_names[0]) }}" alt="">
              @endif
            </td>
            <td class=" px-4 py-2 text-gray-900">{{ $value -> name_event }}</td>
            <td class=" px-4 py-2 text-gray-900">{{ $value -> audience }}</td>
            <td class=" px-4 py-2 text-gray-900">{{ $value -> status }}</td>
            <td class=" px-4 py-2 text-gray-900">{{ $value -> address }}</td>
            <td class=" px-4 py-2 text-gray-900">{{ $value -> start_date }}</td>
            <td class=" px-4 py-2 text-gray-900">{{ $value -> end_date }}</td>
            <td>
              <form action="{{ route('news.delete', ['id' => $value->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Do you want to delete this news?')" type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-3 rounded-full">
                  Delete
                </button>
              </form>
            </td>
            <td>
              <form action="{{ route('news.edit', ['id' =>  $value -> id]) }}" method="GET">
                @csrf
                <button type="submit" class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-3 rounded-full">
                  Update
                </button>
              </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
  <div class="flex mb-10 justify-center mt-2">
    <div>{{ $events->links() }}</div>
  </div>
</div>
@endsection