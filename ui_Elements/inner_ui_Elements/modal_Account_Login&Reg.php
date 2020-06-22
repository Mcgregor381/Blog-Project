<?php
//Todo implment login system

function generate_LoginModal(){

    return <<<htmlPage
<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
  
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#tab_login" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#tab_register" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel tab_login-->
          <div class="tab-pane fade in show active" id="tab_login" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-5">
            
            <!-- E-Mail -->
                <div class="md-form form-sm mb-5">
                    <i class="fas fa-envelope prefix"></i>
                    <input type="email" id="Login-Email" class="form-control form-control-sm validate">
                    <label data-error="wrong" data-success="right" for="Login-Email">Your email</label>
                </div>
              <!--Password-->
                <div class="md-form form-sm mb-5">
                    <i class="fas fa-lock prefix"></i>
                    <input type="password" id="Login-Pass" class="form-control form-control-sm validate">
                    <label data-error="wrong" data-success="right" for="Login-Pass">Your password</label>
                </div>
                <!--Login button-->
                <div class="text-center mt-2">
                    <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
                </div>
            </div>S
            <!--Login Footer-->
            <div class="modal-footer">
                <div class="options text-center text-md-right mt-1">
                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
            
          </div>
          <!--/.Panel tab_login-->

          <!--Panel tab_register-->
          <div class="tab-pane fade" id="tab_register" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
            <!--e-mail addr-->
            <div class="md-form form-sm pb-3">
                <i class="fas fa-envelope prefix"></i>
                <input  type="email" id="reg_email" class="form-control form-control-sm validate" name="email" required size="20" value=""/>  
                <label data-error="wrong" data-success="right" for="modalLRInput12">E-mail</label> 
            </div>
            <!--./e-mail addr-->
            
            <!--first name-->
            <div class="md-form pb-3">
                <i class="fas fa-lock prefix"></i>
                <input  type="text" id="reg_firstName"  class="form-control validate" name="firstName" required size="1" value=""/>
                <label  data-error="wrong" data-success="right"  for="reg_firstName"> First Name </label>      
            </div>
            <!--./first name-->
            
            <!--Sur Name--> 
            <div class="md-form mb-5">
                <i class="fas fa-lock prefix"></i>
                <input  type="text" id="modalLRInput14" class="form-control validate" name="surName" required size="5" value=""/>  
                <label data-error="wrong" data-success="right" for="modalLRInput14">Surname  Name</label>
            </div>
            <!--./Sur Name-->
            

            <div class="md-form mb-5">
                <i class="fas fa-lock prefix"></i>
                <input  type="password" id="Form-pass1" class="form-control validate"/>
                <label  data-error="wrong" data-success="right" for="Form-pass1">Password</label>    
            </div>
            <!--./Password entry 1-->
            
            <!--Password entry 2-->
            <div class="md-form form-sm pb-3">
                <i class="fas fa-lock prefix"></i>
                <input  type="password" id="Form-pass2" class="form-control validate"/>
                <label  data-error="wrong" data-success="right" for="Form-pass2">Repeat Password</label>   
            </div>
            <!--./Password entry 2-->
            
            <!-- Sign up button -->
            <div class="text-center form-sm mt-1">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
            </div>
            <!--./Sign up button -->

            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options text-right">
                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                </div>
                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
            <!--./Footer-->
            
          </div>
          <!--/.Panel tab_register-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->

htmlPage;
}