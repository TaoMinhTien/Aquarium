<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   </script>
   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="{{ asset('asset/css/theme-quang.css') }}">
</head>
<body>
   <div class="bg-gray-100">
      <div class="flex items-center h-full w-full justify-center">
         <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 bg-white  form_login">
            <div class="mx-auto max-w-lg">
               <h1 class="text-center text-2xl font-bold text-indigo-600 sm:text-3xl">Get started today</h1>
               <div class="flex mt-3 justify-center">
                  <ul class="flex text-sm text-gray-500">
                     <li><a class="underline" href="{{"/"}}">Home</a></li>
                     <li class="px-2">/</li>
                     <li> <a class="underline" href="/register">Sign up</a></li>
                  </ul>
               </div>
               <form action="{{route('register.edit')}}" method="post" class="mb-0 mt-2 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8">
                  @csrf
                  <p class="text-center text-lg font-medium">Sign up</p>
                  <div>
                     <div class="relative">
                        <input  name="fullname" type="text" class="w-full  rounded-lg border-gray-300 p-4 pe-12 text-sm shadow-sm" placeholder="Enter your name" />
                     </div>
                  </div>
                  <div>
                     <div class="relative">
                        <input  name="email" type="email" class="w-full  rounded-lg border-gray-300 p-4 pe-12 text-sm shadow-sm" placeholder="Enter email" />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                           <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div>
                     <div class="relative">
                        <input  type="password" name="password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Enter password" />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                           <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                           </svg>
                        </span>
                     </div>
                  </div>
                  <div>
                     <div class="relative">
                        <input  type="text" name="confirm_password" class="w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm" placeholder="Confirm password" />
                        <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                           <svg xmlns="http://www.w3.org/2000/svg" class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                           </svg>
                        </span>
                     </div>
                  </div>
                  @error('fullname')
                  <div class="">
                     <span class="error-rg">{{ $message }}</span>
                  </div>
                  @enderror
                  @error('email')
                  <div class="">
                     <span class="error-rg">{{ $message }}</span>
                  </div>
                  @enderror
                  @error('password')
                  <div class="">
                     <span class="error-rg">{{ $message }}</span>
                  </div>
                  @enderror
                  @error('confirm_password')
                  <div class="">
                     <span class="error-rg">{{ $message }}</span>
                  </div>
                  @enderror
                  @if(Session::has('error'))
                  <div class="alert alert-danger">
                     {{ Session::get('error') }}
                  </div>
                  @endif
                  <button type="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                     Sign up
                  </button>
                  <p class="text-center text-sm text-gray-500">
                     already have an account?
                     <a class="underline" href="{{Route('login')}}">Sign in</a>
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>