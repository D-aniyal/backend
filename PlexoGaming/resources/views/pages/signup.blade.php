@extends('layout.app')

@section('content')

   <!-- Home -->
   <section id="home">

    <!-- Background Video -->
    <video id="home-bg-video" poster="video/solo.jpg" autoplay loop muted>
        <source src="video/RAGE 2.mp4" type="video/mp4">
        <source src="video/RAGE 2.mp4" type="video/ogg">
        <source src="video/RAGE 2.mp4" type="video/webm">
    </video>
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
    <!-- Overlay -->
    <div id="home-overlay"></div>

    <!-- Home Content -->
    <div id="signup" class="py-3">
        
        <div class="loginBox">
   

            <h2>SIGNUP</h2>
            <form>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="First Name" name="name" placeholder="First Name" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="Last Name" name="name" placeholder="Last Name" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" name="email" placeholder="Enter Email" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="password" name="password" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        
                      <div class="form-group">
                            Date of Birth:
                       <input class="form-control" placeholder="Date of Birth" type="date" name="bday"></input>
                      </div>
                    </div>
                    <div class="col-md-12">
                      
                      <div class="form-group" >
                          <a href="/PlexoGaming/public/mockedlogin" class="btn btn-info" role="button">SIGNUP</a>
                    <!--
                          <input type="submit"  value="SIGNUP" class="btn btn-outline-danger btn-block">
                        -->
                        </div>
                       
                    </div>
                  </div>
              
              <a href="/PlexoGaming/public/login">Already have an account?   <u>LOGIN</u></a>
            </form>
          </div>
        <br>
      

    </div>

    

</section>
  <!-- CONTACT SECTION -->
 <br>
 
    
@endsection