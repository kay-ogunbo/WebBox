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
<head>
    <!--Import all other Scripts here-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</div>
    <div class="News_Area">
        <h2>News</h2>
    <!--NOTE FOR SITE-OWNER

    This is an example News-Post. You may modify it, add your own stuff to it or re-write it entirely. You may also
    add more News-Posts after this one. Again, this one below is just an example.-->
	<article>
	    <h3>Welcome To My WebWare-Site</h3>
	    <?php
	        // Display the Calendar-Date
	        echo "<br>Date:" .date("D d M Y");
	    ?>
	    <p>Welcome to my WebWare-Site! It's powered by the WebWareBox Software.<br><br>
	    You can add your Software or any other sort of Files to this Site. If you're not a Developer then you can
	    download Programs made by other Users.<br><br>
	    If you are a Developer then you must need an Account to submit your Programs. It's easy to set-up an Account. It's also
	    free and costs nothing. It's free for both the Account and submitting Programs.<br><br>
	    Enjoy!<br><br></p>
	    <h5>Written by: Site-Owner</h5>
	</article>
    </div>
<?php require_once "views/footer.php" ?>
