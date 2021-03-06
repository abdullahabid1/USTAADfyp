<html><head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script><style>.register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    background-image: url({{ asset('assets/education/images/grey.jpg') }});
    margin-top: 1%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #BCB3B2;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}</style></head>
<body><div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="">
                        <h3>Welcome</h3>
                        <p>Login Form</p>
                        <form action = "{{url('/')}}" method  = "get"><input type="submit" class = "" name="" value="Back"></form><br>
                    </div>
                    
                    <div class="col-md-8 register-right">
                       <center>
                                <h3 class="register-heading">Login</h3>
								<form action = "{{url('/login/process')}}" method = "post">
                                @csrf
                                <div class="row register-form">
                                    <div class="col-md-7">
                                        <center>
                                        
										<div class="form-group"><center>
                                            <input type="email" class="form-control" name = "email" placeholder="Your Email *" value="" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control" name = "password" placeholder="Password *" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="loginAs" value="Admin" checked="">
                                                    <span> Admin </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="loginAs" value="Tutor">
                                                    <span>Tutor </span> 
                                                </label>
                                                
                                                <label class="radio inline"> 
                                                    <input type="radio" name="loginAs" value="Student">
                                                    <span>Student </span> 
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                    


                                    <div class="col-md-6">
                                        

                                        <input type="submit" class="btnRegister" value="Login">
                                        
                                    </div>
                                </div>
                                </form>
                                <div class='col-lg-12 forgot_pw'>
      
    </div>
								</center>
							</div>

             <script type="text/javascript"></script></center></body></html>