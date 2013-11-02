<div id="login_container">
    
    <div id="login">
        <form action="index.php" method="post" id="login_form">
            <h1>Log In</h1>
            <fieldset id="inputs">
                <input type="hidden" name="action" value="check_login"/>
                <p>
                <input id="username" name="username" type="text" placeholder="Username" autofocus required>
                </p>
                <p>
                <input id="password" name="password" type="password" placeholder="Password" required>
                </p>
                <p>
                <input id="nickname" type="text" placeholder="Nickname or Full Name" required>
                </p>
            </fieldset>
            <fieldset id="submit_actions">
                <input type="submit" id="submit" value="Log in">
                <!-- <a href="">Forgot your password?</a><a href="">Register</a> -->
            </fieldset>
        </form>
    </div>

    <!-- <div id="login">
        <form action="." method="post" id="login_form">
            <input type="hidden" name="action" value="check_login" />
            <table border="0">
                <tr>
                    <td>
                        <label>Email:</label>
                    </td>
                    <td>
                        <input type="input" name="email_address" id="emailid" value="<?php if(isset($email_address)){echo "$email_address";} ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password:</label>
                    </td>
                    <td>
                        <input type="password" name="password" value="<?php if(isset($password)){echo $password;} ?>" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <?php if (isset($login_error)){ echo "$login_error"; }?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <label>&nbsp;</label>
                        <input type="submit"  value="Login" />
                    </td>
                </tr>
        </form>
        <form action="." method="post" id="register_form">
                <input type="hidden" name="action" value="join" />
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <label>&nbsp;</label>
                        <input type="submit" value="Register" />
                    </td>
                </tr>
        </form>
            </table>
    </div>
    <div id="welcome">
        <h1>Welcome to the Liquor shop!</h1>
        <p>
        <h1>Please Sign in.</h1>
    </div>
    <div id="footer">
        <p style="position: fixed; left: 46%; text-align: center"><a href=<?php echo "index.php?action=join";?>>Click here to register</a></p>
        <p class="copyright">
            &copy; <?php echo date("Y"); ?> Liquor Shop, Inc.
        </p>
    </div> -->
</div><!-- end page -->