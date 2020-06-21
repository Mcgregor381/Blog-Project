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
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
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
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <label data-error="wrong" data-success="right" for="modalLRInput12">E-mail</label>
                <input  type="email" 
                        id="reg_email" 
                        class="form-control form-control-sm validate"
                        name="email"
                        required size="20"
                        value=""/>               
              </div>
            <!--./e-mail addr-->
            
            <!--first name-->
              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                    <label  data-error="wrong"
                            data-success="right" 
                            for="modalLRInput13">   First Name
                    
                    </label>
                <input  type="password" 
                        id="reg_firstName" 
                        class="form-control form-control-sm validate"
                        name="firstName"
                        required size="1"
                        value=""/>
              </div>
            <!--./first name--> 
             
               <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <label data-error="wrong" data-success="right" for="modalLRInput14">Surname  Name</label>
                <input  type="password"
                        id="modalLRInput14"     
                        class="form-control form-control-sm validate"
                        name="surName"
                        required size="5"
                        value=""/>  
              </div>
              
              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <label data-error="wrong" data-success="right" for="modalLRInput15">Password</label>                
                <input  type="password" 
                        id="modalLRInput15" 
                        class="form-control form-control-sm validate">

              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <label data-error="wrong" data-success="right" for="modalLRInput16">Repeat Password</label>
                <input  type="password"
                        id="modalLRInput16" 
                        class="form-control form-control-sm validate">
                
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
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