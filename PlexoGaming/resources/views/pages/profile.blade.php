@extends('layout.app')

@section('content')

<style>
    h3{
      color: azure
    }
    </style>
  
    
        <!-- Home -->
        <section id="home">
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
        <br>  
        <div class="form-group">
          <input type="submit" value="Submit" class="btn btn-outline-danger btn-block">
      </div>
          
         </div>
        </div>
            <!-- Home Content -->
            <div id="signup" class="py-3 ml-auto">
            
                <div class="loginBox1">
                    <br>
                    <br>
                    <br>
                   <br>
                    <br>
                
    <div class="rom">
      <div class="col-md-3">
                    <h2>General</h2>
                    </div>
        <div class="col-md-6">
            <h2>Profile</h2>
              </div>
    </div>
    <br>
    <br>
    <br>
    <br>
                    <form>
                        
                            <p>Platform GameTags</p>
                            <div class="col-md-6">
                              <div class="form-group">
                              
                                <input type="text" name="name" placeholder="XBOX" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" name="name" placeholder="PSN" required>
                              </div>
                            </div>
                           
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" name="name" placeholder="???"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="???"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </div>
                             </div>
    
                             
                            <p>Social Media Accounts</p>
                            <div class="col-md-6">
                              <div class="form-group">
                              
                                <input type="text" name="name" placeholder="TWITTER" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" name="name" placeholder="FACEBOOK" required>
                              </div>
                            </div>
                           
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" name="name" placeholder="TWITCH"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="YOUTUBE"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                </div>
                             </div>
                             <p>Payment Information</p>
                             <div class="col-md-6">
                               <div class="form-group">
                               
                                 <input type="text" name="name" placeholder="Paypal Email" required>
                               </div>
                             </div>
                             <div class="col-md-6">
                              
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-outline-danger btn-block">
                                </div>
                              </div>
                    </form>
                  </div>
            </div>
        </section>
        <!-- Home Ends -->
      <!-- CONTACT SECTION -->
     <br>
     <br>
     <br>
    



@endsection
