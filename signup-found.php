<?php include "db.php"; ?>
<?php include "header.php"; ?>

<?php 

    $message = "";

    if(isset( $_POST['signup'] ) ){

        $username   = $_POST['name'];
        $pass       = $_POST['password'];
        $hassedPass = sha1($pass);
        
        //prevent mqSql Injection
        $username   = stripcslashes($username);
        $hassedPass = stripcslashes($hassedPass);
        $username   = mysqli_real_escape_string($connect, $username);
        $hassedPass = mysqli_real_escape_string($connect, $hassedPass);

        // Database query fetching
        
        $sql = "INSERT INTO signup_found (username, password) VALUES ('$username', '$hassedPass')";
        
        $result = mysqli_query($connect, $sql);

        if(!$result){
            echo $username . $hassedPass;
            die("Unable to connect to Database!");
        }else{
            $message = '<div class="alert alert-success">Hello '. $username .', You have signed up successfully!</div>';
        }


    }

?>
 
 

<!--================login_part Area =================-->
<section class="login_part padding_top">
    <div class="container">
        <div class="row align-items-center">
             
            <div class="col-lg-6 col-md-6 offset-3">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                    
                    <p>if you found anything.</p>
                        <h3>Welcome ! <br>
                            Please Sign Up here</h3>
                        
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" value="" placeholder="Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group"> 
                                <button name="signup" type="submit" value="submit" class="btn_3">
                                   Sign Up
                                </button> 
                                <?php echo $message;?>
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