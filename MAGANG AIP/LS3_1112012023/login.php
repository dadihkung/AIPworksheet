
<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login UserCreation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg">
        <div class="continer-ld col-md-6 rounded-5 position-absolute bottom-0 start-0 bg-dark bg-gradient" style="height: 570px; width: 550px; margin-left: 80px; margin-bottom: 45px;">
            <div class="row">
                <!-- Text Logo Pinterestnya -->
                <div class="col">
                    <img src="../LS3_1112012023/image/R.png" alt="" class="thumbnail" style="width: 40%; margin-left: 30%; margin-top: 5%; margin-bottom: 7%;">
                </div>
            </div>
        <div class="content-register">
            <div>
                <p class="register">LOGIN</p>
            </div>
                <!-- Untuk Input Username User -->
                <div class="container-ld mt-none">
                    <div class="col-sm mb-2">
                        <label class="mb-none-username mb-none"  style="margin-left: 54px;">Username :</label>
                        <input type="text" class="form-control" placeholder="Username" style="height: 40px; width: 440px; border-radius: 15px; margin-left: 54px;">
                    </div>
                    <!-- Untuk Input Email User -->
                    <div class="col-sm mb-2">
                        <label class="mb-none-email mb-none" style="margin-left: 54px;">Password :</label>
                        <input type="password" class="form-control" placeholder="Password" style="height: 40px; border-radius: 15px; width: 440px; margin-left: 54px;">
                    </div>
                    <div class="button-save mt-4">
                        <!-- Button Untuk Save Login -->
                        <button type="submit" style="width: 440px; background-color: white; color: black; border-color: white; margin-left: 54px; background-color: red; border-color: red; color: white;" class="btn active/.,mb-3" name="login">Login</button>
                    </div>
                    <br>
                <div><p class="line-or">______________________________ or ____________________________</p></div>
                <div class="button-save mt-4">
                    <!-- Button Untuk Save Login lewat Google -->
                    <button type="submit" style="width: 240px; background-color: white; color: black; border-color: white; margin-left: 160px; background-color: white; border-color: white; color: black;" class="btn active/.,mb-3" data-bs-toggle="button" aria-pressed="true"><img src="../LS3_1112012023/image/google.png" alt=""> Login Via. Google</button>
                </div>
                <br>
                <div class="link container-ld mb-2">
                    <a href="../LS3_11012023/Registrasi.html" class="link-register">Register Now</a> 
                    <a href="" class="link-forgot-password">Forgot Your Password?</a> 
                </div>
            </div>
        </div>
            
            
        </div>
    </div>
      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>