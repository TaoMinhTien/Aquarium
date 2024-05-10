@extends('admin.dashboard')
@section('title', 'Animals - Edit')
@section('content')
<div class="px-5">
   <h2 class="text-2xl flex font-bold text-gray-900 ">Animals edit</h2>
   <div class="flex items-center justify-center">
      <div class="w-8/12">
         <form method="post" action="{{Route('news.edit.submit')}}" enctype="multipart/form-data">
            @csrf
            <div class="mt-3">
               <label for="title_name" class="text-sm font-bold text-gray-700 tracking-wide">Title name</label>
               <input value="{{$animals -> title}}" type="text" id="title_name" name="title_name" placeholder="Enter title name" class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
            </div>
            <div class="mt-3">
               <label for="description" class="text-sm font-bold text-gray-700 tracking-wide">Description</label>
               <input type="text" value="{{$animals -> description}}" id="description" name="description" placeholder="Enter description..." class="w-full text-sm py-2 border-b border-gray-300 focus:outline-none focus:border-gray-800">
            </div>
            <div class="mt-3">
               <textarea class="w-full" name="editor" id="editor">{{$animalInforInfor -> description}}</textarea>
            </div>
            @if (session('success'))
            <div class="alert mt-2 bg-white text-blue-700 ">
               <strong>{{ session('success') }} </strong>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert mt-2 bg-white ">
               <ul class="mb-1">
                  @foreach ($errors->all() as $error)
                  <div class="mt-0  text-red-700 rounded-xl relative" role="alert">
                     <li class="block sm:inline text-xs">{{ $error }}</li>
                  </div>
                  @endforeach
               </ul>
            </div>
            @endif
            <input type="hidden" value="{{$animals -> id}}" name="animal_infor_id">
            <button type="submit" class="block my-4 mr-2 rounded-xl bg-gray-800 px-8 py-2 text-sm text-white transition hover:bg-black">
               Upload
            </button>
         </form>
      </div>

   </div>
   <script>
      var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
      ClassicEditor
         .create(document.querySelector('#editor'), {
            ckfinder: {
               uploadUrl: "{{ route('handle.upload.animals') }}",
               headers: {
                  'X-CSRF-TOKEN': csrfToken
               }
            },
            on: {
               fileUploadRequest: function(evt) {
                  evt.preventDefault();
                  var responseData = evt.data.responseData;
                  var imageUrl = responseData.url;
                  console.log(imageUrl, responseData);
                  $.ajax({
                     url: "{{ route('animals.handle') }}",
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

</div>
@endsection