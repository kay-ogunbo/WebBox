<!--This file is part of WebWareBox.

    WebWareBox is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    WebWareBox is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with WebWareBox.  If not, see <https://www.gnu.org/licenses/>.
-->
<?php require_once "views/header.php" ?>
<?php
    // Start the Session
    session_start();
?>
<html>
    <head>
        <body>
            <!--The Login-Form-->
	    <form action="login.php" method="post">
	        <br>
		<br>
	        <label>Username</label><input type="text" name="username_form"><br>
	        <label>Password</label><input type="password" name="pw_form"><br>
	        <input type="submit" value="Login">
	   </form>
	   <br>
	   <br>
	   <h4 style="text-align: center;">Not got an Account?</h4><br>
	   <p style="text-align: center;">Sign-Up here</p><br>
	   <img src="assets/themes/box_icons_v1/dashboard_user.png" style="display: block; margin: auto;">
	   <a href="register.php"><button style="margin: auto; display: block; font-size: 18px;">Register</button></a>
	</body>
    </head>
</html>
<?php require_once "views/footer.php" ?>
