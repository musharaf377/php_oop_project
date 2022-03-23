<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/admin/login.css">
    
    <title>Document</title>
</head>
<body>
    
    <section>
        <div class="container">
            <!-- admin sing in form box -->
            <div class="row justify-content-center vh-100" id="login-form-box">
                <div class="col-lg-9 my-auto">
                    <div class="card-group">
                        <div class="card p-4 card-left">
                            <h3 class="text-center text-primary font-weight-bold">Login to your account</h3>
                            <hr class="my-3">
                            <form action="post" class="px-3" id="login-form">
                                <div class="form-group input-group-lg input-group ">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" placeholder="Enter your email" class="form-control py-3">
                                </div>
                                <div class="form-group input-group-lg input-group my-2">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="text" placeholder="Enter your password" class="form-control py-3">
                                </div>
                                <div class="form-group remember">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="rememberMe">
                                        <label for="rememberMe" class="custom-control-label mb-2">Remember me</label>
                                    </div>
                                    <div>
                                        <a href="javascript:" class="text-decoration-none" id="forgot-pass">Forgote Password?</a>
                                    </div>
                                    <!-- <div class="clear-fix"></div> -->
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Sing In" class="btn btn-primary btn-block w-100">
                                </div>
                            </form>
                        </div>
                        <div class="card p-4 justify-content-center login_content">
                        <h3 class="text-center text-light font-weight-bold">Wealcome Back!</h3>
                            <hr class="my-3 bg-light">
                            <p class="text-light text-center">Please login useing your email and password.If you haven't registerd yet,you can register for free.</p>
                            <button class="btn btn-outline-light btn-lg align-self-center" id="showSingupform">Sing Up</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- admin sing in form box end -->

            <!-- admin register form box start -->
            <div class="row justify-content-center d-none vh-100" id="register-form-box">
                <div class="col-lg-9 my-auto">
                    <div class="card-group">
                        <div class="card p-4 card-left">
                            <h3 class="text-center text-primary font-weight-bold">Create new account</h3>
                            <hr class="my-3">
                            <form action="post" class="px-3" id="login-form">
                                <div class="form-group input-group-lg input-group ">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                        <i class="fa-solid fa-circle-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" placeholder="Enter your name" class=" form-control py-3">
                                </div>
                                <div class="form-group input-group-lg input-group mt-2 ">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="email" placeholder="Enter your email" class="form-control py-3">
                                </div>
                                <div class="form-group input-group-lg input-group my-2">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" placeholder="Enter your password" class="form-control py-3">
                                </div>
                                <div class="form-group input-group-lg input-group my-2">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                            <i class="fa-solid fa-key"></i>
                                        </span>
                                    </div>
                                    <input type="password" placeholder="Enter your confirm password" class="form-control py-3">
                                </div>
                                
                                <div class="form-group my-4">
                                    <input type="submit" value="Sing Up" class="btn btn-primary btn-block w-100">
                                </div>
                            </form>
                        </div>
                        <div class="card p-4 justify-content-center login_content">
                        <h3 class="text-center text-light font-weight-bold ">Wealcome Back!</h3>
                            <hr class="my-3 bg-light">
                            <p class="text-light text-center">Please login useing your email and password.If you haven't registerd yet,you can register for free.</p>
                            <button class="btn btn-outline-light btn-lg align-self-center" id="sign_up_sign">Sing In</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- admin register form box end -->

            <!-- admin forgete password form box start -->
            <div class="row justify-content-center d-none vh-100" id="forgotten-form-box">
                <div class="col-lg-9 my-auto">
                    <div class="card-group">
                        <div class="card p-4 card-left">
                            <h3 class="text-center text-primary font-weight-bold">Reset your password</h3>
                            <hr class="my-3">
                            <form action="post" class="px-3" id="login-form">
                                <div class="form-group input-group-lg input-group ">
                                    <div class="input-group-prepend input-icon">
                                        <span class="input-group-text">
                                            <i class="fa-regular fa-envelope"></i>
                                        </span>
                                    </div>
                                    <input type="text" placeholder="Enter your email" class="form-control py-3">
                                </div>
                               
                                <div class="form-group">
                                    <input type="submit" value="Reset Password" class="btn btn-primary mt-4 btn-block w-100">
                                </div>
                            </form>
                        </div>
                        <div class="card p-4 justify-content-center login_content">
                        <h3 class="text-center text-light font-weight-bold">Wealcome Back!</h3>
                            <hr class="my-3 bg-light">
                            <p class="text-light text-center">Enter your email and check your inbox for instructions. Please also check your spam folder.</p>
                            <button class="btn btn-outline-light btn-lg align-self-center" id="back-sign">Back</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- admin forgoten password form box end -->
        </div>
    </section>



    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/admin/login.js"></script>
</body> 
</html>