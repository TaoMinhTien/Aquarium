@extends('admin.dashboard')
@section('title', 'User')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">User</h2>
   <div class="flex justify-center mt-3 w-full">
      <div class="w-full mr-5 rounded-lg border border-gray-200">
         <table class=" divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
               <tr>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">User name</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Action</th>
               </tr>
            </thead>
            @if (isset($user))
            @foreach($user as $value)
            <tbody class="divide-y divide-gray-200">
               <tr>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> name }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> email }}</td>
                  <td>
                     <form action="{{ route('user.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $value -> id }}">
                        <button onclick="return confirm('Do you want to delete this user?')" type="submit" class="bg-red-600 hover:bg-red-800 text-white font-bold py-2 px-3 rounded-full">
                           Delete
                        </button>
                     </form>
                  </td>
                  <td>
                     <form action="{{ route('user.edit') }}" method="get">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $value -> id }}">
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