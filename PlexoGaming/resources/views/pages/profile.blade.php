
@extends('layout.app')

@section('content')
<style>
h5{
  color: azure;
}
</style>
   <!-- Home -->
   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
   
    
    <div class="container">
      <div class="col-md-3">
         <h3 >Account Settings</h3>
   <img src="img/round.png" alt=""> 

<br>
 
   
  </div>
 </div>
   
    <!-- Home Content -->
    <div id="signup" class="py-3 ml-auto">
        
        <div class="loginBox">
   

            <h2>Profile</h2>
            <form  method="POST" action="{{ url('/addProfile') }}">
              @csrf
                <div class="row">
                  <h5>Platform GameTags</h5>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="gametag1" placeholder="e.g xbox" id="name" type="First Name" class="form-control{{ $errors->has('gametag1') ? ' is-invalid' : '' }}" name="name" value="{{ old('gametag1') }}" required autofocus>
                      
                        @if ($errors->has('gametag1'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag1') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="gametag2" id="name"  placeholder="e.g ps4" type="Last name" class="form-control{{ $errors->has('gametag2') ? ' is-invalid' : '' }}"  value="{{ old('gametag2') }}"  required >
                      
                        @if ($errors->has('gametag2'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag2') }}</strong>
                        </span>
                    @endif
                    
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="gametag3" placeholder="" id="name" type="First Name" class="form-control{{ $errors->has('gametag3') ? ' is-invalid' : '' }}" name="name" value="{{ old('gametag3') }}" required autofocus>
                      
                        @if ($errors->has('gametag3'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag3') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input  id="name" placeholder=""  type="Last name" class="form-control{{ $errors->has('gametag4') ? ' is-invalid' : '' }}" name="gametag4" value="{{ old('gametag4') }}"  required >
                      
                        @if ($errors->has('gametag4'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag4') }}</strong>
                        </span>
                    @endif
                    
                      </div>
                    </div>


                    <h5>Social Media Accounts</h5>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="gametag5" placeholder="e.g twitter" id="name" type="First Name" class="form-control{{ $errors->has('gametag5') ? ' is-invalid' : '' }}" name="name" value="{{ old('gametag5') }}" required autofocus>
                      
                        @if ($errors->has('gametag5'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag5') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input name="gametag6" placeholder="e.g facebook" id="name" type="First Name" class="form-control{{ $errors->has('gametag6') ? ' is-invalid' : '' }}" name="name" value="{{ old('gametag6') }}" required autofocus>
                        
                          @if ($errors->has('gametag6'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('gametag6') }}</strong>
                          </span>
                      @endif
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="gametag7" placeholder="" id="name" type="First Name" class="form-control{{ $errors->has('gametag7') ? ' is-invalid' : '' }}" name="name" value="{{ old('gametag7') }}" required autofocus>
                      
                        @if ($errors->has('gametag7'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag7') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input  id="name" placeholder=""  type="Last name" class="form-control{{ $errors->has('gametag8') ? ' is-invalid' : '' }}" name="gametag8" value="{{ old('gametag8') }}"  required >
                      
                        @if ($errors->has('gametag8'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag8') }}</strong>
                        </span>
                    @endif
                    
                      </div>
                    </div>

                    <h5>ID # & Paypal Email</h5>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input name="gametag9" placeholder="Enter paypal Email" id="email" type="email" class="form-control{{ $errors->has('gametag9') ? ' is-invalid' : '' }}" value="{{ old('gametag9') }}" required>
                      
                        @if ($errors->has('gametag9'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gametag9') }}</strong>
                        </span>
                    @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <input name="gametag10" placeholder="Enter id" id="email" type="email" class="form-control{{ $errors->has('gametag10') ? ' is-invalid' : '' }}" value="{{ old('gametag10') }}" required>
                        
                          @if ($errors->has('gametag10'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('gametag10') }}</strong>
                          </span>
                      @endif
                        </div>
                      </div>

                      <div class="col-md-6">
                          <div class="form-group">
                            <input name="profile_pic" placeholder="" id="email" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" value="{{ old('profile_pic') }}" required>
                          
                            @if ($errors->has('profile_pic'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('profile_pic') }}</strong>
                            </span>
                        @endif
                          </div>
                        </div>
                  
                   
                  </div>
                  
                    <div class="col-md-6">
                      
                      <div class="form-group" >
                        <div class="col-md-6 offset-md-4">
                          <button type="submit" class="btn btn-primary">
                              {{ __('submit') }}
                          </button>
                      </div>
                        </div>
                       
                    </div>
                  </div>
              
            
            </form>
          </div>
        <br>
 

    </div>
    <br>
    <br>
  </div>


</section>
  <!-- CONTACT SECTION -->
 <br>
 
    
@endsection
<!--
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                
                                  <input id="name" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus placeholder="Date of Birth" type="date" name="bday"></input>
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
-->

