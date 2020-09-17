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
        $sql        = "SELECT * from signup_found WHERE username = '$username' and password='$hassedPass' ";
        $result     = mysqli_query($connect, $sql);

        // Fetching rows
        $row        = mysqli_fetch_array($result);  

        if($row['username'] == $username  && $row['password'] == $hassedPass){
            header('Location: items.php');
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
                        <h2>Did you 'FIND' anything?</h2>
                        <p>Do you want the owners to get their lost items back? Sign up here soon!</p>
                        <a href="http://localhost/lostnfound/signup-found.php" class="btn_3">Create an Account</a>
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
                                <!-- <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="selector">
                                    <label for="f-option">Remember me</label>
                                </div> -->
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