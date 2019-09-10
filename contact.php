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

    <br><br>
    <!--A Notice-Board for when the User is about to Contact the Owner-->
    <div class="contact_notice">
     <h3>NOTICE</h3>
	 <p><b>PLEASE READ BEFORE SENDING AN EMAIL</b><br><br>
	 When sending an Email to the Site-Owner, please keep the following in mind:</p>
	 <ul>
	    <li>Do not Spam the Site-Owner with Emails.</li>
	    <li>Do not Troll the Site-Owner with Emails.</li>
	    <li>Do not send the Site-Owner, fake Information about something.</li>
	    <li>Do not write in All-Caps.</li>
	    <li>Make sure you're Email is written in good English.</li>
	    <li>Make sure that what you're sending is correct and all Information supplied is also correct.</li>
	 </ul>
	 <p>Following everything above makes everything easier for the Site-Owner. It also means that you won't have to
	 deal with any arguments or be asked for extra Information.</p>
    </div>
    <div class="contact">
	<form>
	    <br>
	    <br>
	    <img src="assets/themes/box_icons_v1/mail2.png" style="margin: auto; display: block;">
	    <br>
	    <label>Subject:</label> <input type="text" name="Subject" id="Subject_box" placeholder="(E.g. Submisson-Button is Broken)"><br><br>
	    <!--The Text-Area in which the Details will be written in.-->
	    <label>Body:</label><br> <textarea name="Subject_body" id="Body_box" rows="20" cols="70"
	    placeholder="(E.g. I have recently discovered a Bug on your Site that stops the Program-Submission Button from working.
            I would suggest fixing it as people will not be able to upload their Programs if it's not fixed. Thanks.)"></textarea>
        </form>
    </div>
<?php require_once "views/footer.php" ?>
