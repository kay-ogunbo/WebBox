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
<br>
<html>
    <head>
    <!--Import all other Scripts here-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <body>
	    <div class="Dashboard">
	        <h1>Dashboard</h1>
	        <p>Login Successful</p><br>
	        <p>Welcome to your Dashboard</p><img src="assets/themes/box_icons_v1/dashboard_user.png" style="float: right;" width="210">
                 <!--Display the Date-->
	         <?php
	             // Get the User's Timezone
	             $user_timezone = date_default_timezone_get();
	             echo "Timezone: " . $user_timezone; // Display the Timezone
	             // Display the Calendar-Date
	             echo "<br>Date:" .date("D d M Y");
	         ?>
	         <h2>Your Programs</h2>
	         <!--Provide a breif Overview of this List.-->
	         <p>This is your Programs-List. It shows all of the Programs you've Submitted to the Site. It shows:</p>
	         <ul>
	            <li>Program Name</li>
	            <li>Submission-Date</li>
	            <li>Program Category</li>
	            <li>Program Version</li>
	        </ul>
	    </div>
        </body>
    </head>
</html>
<?php require_once "views/footer.php" ?>
