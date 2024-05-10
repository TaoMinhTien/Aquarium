@extends('admin.dashboard')
@section('title', 'News - Edit')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 "> Edit news</h2>
   @if (session('success'))
   <div class="alert my-2 flex justify-center bg-white text-blue-700">
      <strong>{{ session('success') }} </strong>
   </div>
   @endif
   <div class="flex mt-2 items-center justify-center">
      <div class="w-8/12">

         <form method="post" action="{{Route('news.edit.submit')}}" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
               <label for="title_name" class="text-sm font-bold text-gray-700 tracking-wide">Title name</label>
               <input type="text" value="{{$eventEdit -> name_event}}" id="title_name" name="title_name" placeholder="Enter title name" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
            </div>
            <div class="mt-3">
               <label for="address" class="text-sm font-bold text-gray-700 tracking-wide">Address</label>
               <input type="text" value="{{$eventEdit -> address}}" id="address" name="address" placeholder="Enter address" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
            </div>
            <div class="mt-2 flex ">
               <div class="w-1/2 mr-3">
                  <label for="quantity" class="text-sm font-bold text-gray-700 tracking-wide">Ticket quantity</label>
                  @if ($ticketEdit->count() > 0 && isset($ticketEdit[0]->quantity))
                  <input type="text" value="{{ $ticketEdit[0]->quantity }}" id="quantity" name="quantity" placeholder="Ticket quantity" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800" oninput="this.value = this.value.replace(/[^0-9]/g, '')" min="0">
                  @else
                  <input type="text" id="quantity" name="quantity" placeholder="Ticket quantity" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800" oninput="this.value = this.value.replace(/[^0-9]/g, '')" min="0">
                  @endif
               </div>
               <div class="w-1/2">
                  <label for="price" class="text-sm font-bold text-gray-700 tracking-wide">Ticket price</label>
                  @if ($ticketEdit->count() > 0 && isset($ticketEdit[0]->price))
                  <input type="text" value="{{ $ticketEdit[0]->price }}" id="price" name="price" placeholder="Ticket price" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800" oninput="this.value = this.value.replace(/[^0-9]/g, '')" min="0">
                  @else
                  <input type="text" id="price" name="price" placeholder="Ticket price" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800" oninput="this.value = this.value.replace(/[^0-9]/g, '')" min="0">
                  @endif
               </div>
            </div>
            <div class="mt-2 flex ">
               <div class="w-1/2 mr-3">
                  <div class="">
                     <select id="status" for="status" name="status" class="block w-full px-3 sm:px-3 lg:px-5 pt-2 pb-1 text-sm text-grey-darker border border-grey-lighter rounded focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option hidden selected disabled>Choose a status</option>
                        <option for="status" value="Active" {{ $eventEdit->status === 'Active' ? 'selected' : '' }}>Active</option>
                        <option for="status" value="Cancelled" {{ $eventEdit->status === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                     </select>
                  </div>
               </div>
               <div class="w-1/2">
                  <div class="">
                     <select id="audience" for="audience" name="audience" class="block w-full px-3 sm:px-3 lg:px-5 pt-2 pb-1 text-sm text-grey-darker border border-grey-lighter rounded focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option hidden selected disabled>Choose a audience</option>
                        <option for="audience" value="Adolescent" {{ $eventEdit->audience === 'Adolescent' ? 'selected' : '' }}>Adolescent</option>
                        <option for="audience" value="Children" {{ $eventEdit->audience === 'Children' ? 'selected' : '' }}>Children</option>
                        <option for="audience" value="Elderly" {{ $eventEdit->audience === 'Elderly' ? 'selected' : '' }}>Elderly</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="mt-2">
               <label for="start_datetime" class="text-sm">Start day:</label>
               <input type="datetime-local" class="text-sm" id="start_datetime" name="start_datetime" value="{{ $Vouchers->start_datetime ?? '' }}">
               <br>
               <label for="end_datetime" class="text-sm">End day:</label>
               <input type="datetime-local" id="end_datetime" class="text-sm" name="end_datetime" value="{{ $Vouchers->end_datetime ?? '' }}">
               <br>
            </div>
            <div class="mt-3">
               <textarea class="w-full" name="editor" id="editor">{{ $eventEdit -> description }}</textarea>
            </div>
            @if ($errors->any())
            <div class="alert my-2 bg-white ">
               <ul class="mb-1">
                  @foreach ($errors->all() as $error)
                  <div class="mt-0  text-red-700 rounded-xl relative" role="alert">
                     <li class="block sm:inline text-xs">{{ $error }}</li>
                  </div>
                  @endforeach
               </ul>
            </div>
            @endif
            <input type="hidden" name="id" value="{{ $eventEdit -> id }}">
            <button type="submit" class="block my-4 mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
               Update
            </button>
         </form>
      </div>

   </div>
</div>
<script>
   var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
   ClassicEditor
      .create(document.querySelector('#editor'), {
         ckfinder: {
            uploadUrl: "{{ route('handle.upload.news') }}",
            headers: {
               'X-CSRF-TOKEN': csrfToken
            }
         },
         on: {
            fileUploadRequest: function(evt) {
               evt.preventDefault();
               var responseData = evt.data.responseData;
               var imageUrl = responseData.url;
               $.ajax({
                  url: "{{ route('news.handle') }}",
                  method: 'POST',
                  data: {
                     editor: editor.getData(),
                     url: imageUrl
                  },
                  headers: {
                     'X-CSRF-TOKEN': csrfToken
                  },
                  success: function(response) {
                     console.log(response);
                  },
                  error: function(xhr, status, error) {
                     console.error(xhr.responseText);
                  }
               });
            }
         }
      })
      .catch(error => {
         console.error(error);
      });
</script>
@endsection