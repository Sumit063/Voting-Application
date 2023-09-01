<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Votes Da Fav</title>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
</head>
<style>
    @media (min-width: 700px) {
        .form-outline {
            width: 70%;
            margin: auto;
        }
    }
    @media (min-width: 900px) {
        .form-outline {
            width: 50%;
            margin: auto;
        }
        .container {
            width: 70%;
            margin: auto;
        }
    }
</style>
<body style="background-color: #f7f7f7;">
    <div class="container my-5 p-5" style="background-color: #ffffff;">

        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
        <!-- Pills navs -->
        
        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form action="./actions/login.php" method="POST">
                <div class="text-center mb-3">
                    <p>Sign in with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
                
                <p class="text-center">or:</p>
                
            
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="loginName" value="guest@gmail.com" class="form-control" required />
                        <label class="form-label" for="loginName">Email</label>
                    </div>
                    
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password"  name="password" id="loginPassword" value="guestishere" class="form-control" required />
                    <label class="form-label" for="loginPassword">Password</label>
                </div>
          
            
                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                    </div>
                    
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>
                
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4 mx-auto" style="width:200px;">Sign in</button>
                
                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? Register for free!</a></p>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <form action="./actions/register.php" method="POST" enctype="multipart/form-data">
                <div class="text-center mb-3">
                    <p>Sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>
                    
                    <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
                
                <p class="text-center">or:</p>
                
                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" id="registerUsername" class="form-control" />
                    <label class="form-label" for="registerUsername">Username</label>
                </div>

                <!-- Mobile Number -->
                <div class="form-outline mb-4">
                    <input type="text" id="registerMobile" class="form-control" name="mobile" required maxlength="10" minlength="10"/>
                    <label class="form-label" for="registerMobile">Mobile</label>
                </div>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="registerEmail" class="form-control" name="email" required/>
                    <label class="form-label" for="registerEmail">Email</label>
                </div>
                
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="registerPassword" class="form-control" name="pass" required/>
                    <label class="form-label" for="registerPassword">Password</label>
                </div>
                
                <!-- Repeat Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="registerRepeatPassword" class="form-control" name="pass2" required/>
                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                </div>
                <!-- Profile Picture -->
                <div class="form-outline mb-4">
                    <input type="file" id="registerPicture" class="form-control" name="picture" required/>
                </div>

                <!-- Category -->
                <div class="form-outline mb-4">
                    <select name ="std" id="registerStd" class="form-select">
                        <option value="voter">Voter</option>
                        <option value="group">Group</option>
                    </select>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                    aria-describedby="registerCheckHelpText" required />
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>
                
                <!-- Submit button -->
                <input type="submit" value="Register" style="width:200px;" class="btn btn-primary btn-block mb-3 mx-auto"></input>
            </form>
        </div>
    </div>
    <!-- Pills content -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
    
</div>
</body>

</html>