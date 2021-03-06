<?php include "db.php"; ?>
<?php include "header.php"; ?>

<?php 

    $message = "";

    if(isset( $_POST['login'] ) ){

        $username   = $_POST['name'];
        $pass       = $_POST['password']; 
        $hassedPass = sha1($pass);
        
        //prevent mqSql Injection
        $username   = stripcslashes($username);
        $hassedPass = stripcslashes($hassedPass);
        $username   = mysqli_real_escape_string($connect, $username);
        $hassedPass = mysqli_real_escape_string($connect, $hassedPass);

        // Database query fetching
        $sql        = "SELECT * from signup_lost WHERE username = '$username' and password='$hassedPass' ";
        $result     = mysqli_query($connect, $sql);

        // Fetching rows
        $row        = mysqli_fetch_array($result);  

        if($row['username'] == $username  && $row['password'] == $hassedPass){
            echo "logged in sign-up-lost!";
        }else{
            $message = '<div class="alert alert-danger">Wrong Username or Password!</div>';
        }


    }

?>

<!--================login_part Area =================-->
<section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>Did you 'LOSE' any items?</h2>
                        <p>If you lost anything feel free to find here. You never know, you might get it back! Sign up soon! </p>
                        <a href="http://localhost/lostnfound/signup-lost.php" class="btn_3">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        <h3>Welcome Back ! <br>
                            Please Sign in now</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group">
                                 
                                <button type="submit" value="submit" class="btn_3" name="login">
                                    log in
                                </button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->




<?php include "footer.php"; ?>