@include('common.header')
<div class="register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p>Welcome to our Freelancing Page</p>

            <a style="  
            text-decoration: blink;  
    border: none;
    border-radius: 1.5rem;
    padding: 13px;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;" href="register">Click here to register</a>
            
        </div>
        <div class="col-md-9 register-right">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Login </h3>
                    <div class="row register-form">
                        <div class="col-md-12">
                           <div class="col-md-12">
                           <div class="col-md-12 d-flex justify-content-center"  style="color:red;">
                           @if ($errors->any())
                <div >
                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    </div>
            

                         
                           <form  method="POST" action="login">
                               @csrf
                                
                           <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                           
                            <div class="form-group">
                                
                            <input name="password" type="password" class="form-control" placeholder="Password *" value=""  />
                     
                               

                            <input type="submit" class="btnRegister" value="Sign In"  />

                               
                               </div>
                    </div>
                </div>

</div>
</div>
</div>
</div>
</div>
</div>
@include('common.footer')

