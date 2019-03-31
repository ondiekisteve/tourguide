<?php
session_start();
/**
 * Created by IntelliJ IDEA.
 * User: Vondieki27gmail.com
 * Date: 4/22/2018
 * Time: 7:56 PM
 */
include 'header.php';
include 'includes/db-connection.php';
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $enc_pwd = md5($pwd);
    $login = "SELECT * FROM members WHERE email='$username' AND pwd='$enc_pwd'";
    $result = mysqli_query($connect, $login);
    if (mysqli_num_rows($result) > 0) {
//        $validate_user="SELECT active FROM users_table WHERE email='$username' AND pwd='$pwd'";
//        $active_result=mysql_query($validate_user,$connect);
//        $data_returned=mysql_fetch_array($active_result);
//        $active_id=$data_returned['active'];
//        if($active_id=="0")
//        {
//            echo "<div>Account not verified check your email</div>";
//        }
//        else
//        {
        $getUserid = "SELECT id FROM members WHERE email='$username'";
        $result = mysqli_query($connect, $getUserid);
        while ($row = mysqli_fetch_array($result)) {
            $userId = $row['id'];
            $_SESSION['userId'] = $userId;
        echo "<script>window.open('user.php','_self')</script>";
        }
    }
    else
        {
            echo "Incorrect Username and password";
        }
}
?>
    <div class="row">
        <div class="col-sm-3">

        </div><!--End of col-sm-4-->
        <div class="col-sm-6 well">
            <div style="padding: 20px auto;box-shadow: 2px 3px 4px 4px grey;">
                <div class="panel-heading"style="background-color: teal;border-radius: 5px;position: relative;top: -30px;">
                    <h4 style="text-align: center;padding: 10px;color: white;font-family: 'Lucida Bright';">Welcome User Please login</h4>
                </div><!--End of panel heading-->
                <div class="panel-body">
                    <form method="POST"action="login.php">
                        <div class="form-group">
                            <label for="username"class="control-label">Username</label>
                            <input type="text"name="username"class="form-control"/>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <label for="password"class="control-label">Password</label>
                            <input type="password"name="pwd"class="form-control"/>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <input type="checkbox"value="remember"name="remember"/> Remember Me
                            <span class="form-helper"><br /><a href="#"style="color: teal;">Forgot your password?</a></span>
                        </div><!--End of form group-->
                        <div class="form-group">
                            <input type="submit"name="login"value="LOGIN"class="btn pull-right"style="background-color: teal;padding: 15px 30px;color: white;margin-right: 20px;"/>
                        </div><!--End of form group-->
                    </form>
                </div><!--End of panel body-->
            </div><!--End of div-->
        </div><!--End of col-sm-4-->
    </div><!--End of row-->
<?php include 'footer.php';?>