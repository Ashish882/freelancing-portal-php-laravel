
 @include('common.header')
<div class="register" style="padding-top:80px;">
    <div class="row">

        <div class="col-md-3 register-left">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS96qJPx-TucFWrrAux4IlepfxxHehmGSrDmQ&usqp=CAU" alt="" />
            <h3>Welcome</h3>
            <p>You are few steps away from earning your own money!</p>
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
    cursor: pointer;" href="login">Click here to login</a>
        </div>
        <div class="col-md-9 register-right" >

    <div class="col-6" style="padding-top:40px;      left: 280px;">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </div>
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist"  >
                <li class="nav-item" >
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Hirer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Freelancer</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Hirer</h3>
                    <div class="row register-form">
                        <div class="col-md-10">
                        <form  method="POST" action="register">
                          @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Full Name *" value="" />
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>

                            <input type="hidden" name="login_type" value="emp">

                        </div>
                        <div class="col-md-10">
                            <input type="submit" class="btnRegister" value="Click To Register" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply as a freelancer</h3>
                    <div class="row register-form">
                        <div class="col-md-10">
                        <form  method="POST" action="register">
                          @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Full Name *" value="" />
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password *" value="" />
                            </div>
                            <div class="form-group">
                                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password *" value="" />
                            </div>

                            <input type="hidden" name="login_type" value="free">

                        </div>
                        <div class="col-md-10">
                            <input type="submit" class="btnRegister" value="Click To Register" />
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('common.footer')
