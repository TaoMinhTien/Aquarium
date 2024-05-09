@extends('admin.dashboard')
@section('title', 'Animals - Update')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 "> Update animals</h2>
   <div class="flex justify-center mt-3 w-full">
      <div class="w-fit mr-5 rounded-lg border border-gray-200">
         <table class=" divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
               <tr>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Image</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Description</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
               </tr>
            </thead>
            @if (isset($animals))
            @foreach($animals as $value)
            <tbody class="divide-y divide-gray-200">
               <tr>
                  <td class="text-gray-900 w-3/12">
                     <img class="w-full" src="{{ asset('news_img/' . $value->image) }}" alt="">
                  </td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value ->title }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> description }}</td>
                  <td>
                     <form action="{{ route('animals.infor.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="animals_infor_id" value="{{ $value -> id }}">
                        <button onclick="return confirm('Do you want to delete this animals?')" type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-3 rounded-full">
                           Delete
                        </button>
                     </form>
                  </td>
                  <td>
                     <form action="{{ route('animal.infor.edit' ,['id' => $value -> id ]) }}" method="get">
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
@endsection