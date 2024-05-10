@extends('admin.dashboard')
@section('title', 'Contact')
@section('content')
@extends('admin.dashboard')
@section('title', 'News - All')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">Contact</h2>
   <div class="flex justify-center mt-3 w-full">
      <div class="w-full mr-5 rounded-lg border border-gray-200">
         <table class=" divide-y-2 divide-gray-200 bg-white text-sm">
            <thead class="ltr:text-left rtl:text-right">
               <tr>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Phone</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Gender</th>
                  <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Description</th>
               </tr>
            </thead>
            
            @foreach($contact as $value)
            <tbody class="divide-y divide-gray-200">
               <tr>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> name }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> phone }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> email }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> gender }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> description }}</td>
                  <td class=" px-4 py-2 text-gray-900">{{ $value -> created_at }}</td>
               </tr>
            </tbody>
            @endforeach
         </table>
      </div>
   </div>
   <div class="flex justify-center mt-4">
      <div>{{ $contact->links() }}</div>
   </div>
</div>
@endsection
@endsection