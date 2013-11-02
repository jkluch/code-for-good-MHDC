<div id="form_head_container">
    
    <div id="form_head">
        <div style="float: left;">
            <form action="." method="post" id="home_rep_form">
                <input type="hidden" name="action" value="home_rep_form"/>
                <input type="submit" id="submit" value="Home Repair Program">
            </form>
        </div>
        <div style="float: left;">
            <form action="." method="post" id="self_help_form">
                <input type="hidden" name="action" value="self_help_form"/>
                <input type="submit" id="submit" value="Self Help">
            </form>
        </div>
        <div style="clear: both;">
            <a href=".?action=not_complete">Not Complete</a>
            <a href="">Pending Approval</a>
            <a href="">Approved</a>
            <a href="">In Progress</a>
            <a href="">Completed Project</a>
        </div>
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