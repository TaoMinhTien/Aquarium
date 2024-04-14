@extends('welcome')
@section('title', 'Registration')
@section('content')

<div>
   <div class="body-quang">
      <div class="form-02-main">
         <div class="row">
            <div class="_lk_de">
               <!-- form login -->
               <form action="{{Route('register.edit')}}" method="post">
                  @csrf
                  <div class="form-main">
                     <div class="logo">
                        <img src="" alt="logo">
                     </div>
                     <div class="form-group-rg">
                        <input type="fullname" name="fullname" class="form-control " type="text" placeholder="Fullname">
                     </div>
                     <div class="form-group-rg">
                        <input type="email" name="email" class="form-control " type="text" placeholder="Email">
                     </div>
                     <div class="form-group-rg">
                        <input type="password" name="password" class="form-control" type="Password" placeholder="Password">
                     </div>
                     @error('password')
                     <div class="">
                        <span class="error-rg">{{ $message }}</span>
                     </div>
                     @enderror
                     @error('email')
                     <div class="">
                        <span class="error-rg">{{ $message }}</span>
                     </div>
                     @enderror
                     @error('fullname')
                     <div class="">
                        <span class="error-rg">{{ $message }}</span>
                     </div>
                     @enderror
                     <div class="form-group">
                        <button type="submit" class="_btn_04">
                           <div class="a-quang">Register</div>
                        </button>
                     </div>
                     <div class="form-end">
                        <div>You have account? <a href="{{Route('login')}}">Sign in</a></div>
                     </div>
                  </div>
               </form>
               <!-- end form  -->
            </div>
         </div>
      </div>
   </div>
</div>



@endsection