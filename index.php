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
<?php
$settings = require_once "core/settings.php";
$site = $settings['site'];
$navigation = $settings['navigation'];
$categories = $settings['categories'];
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?php echo $site['name'] ?> - Home</title>
    <!--Import all other Scripts here-->
    <link rel="stylesheet" type="text/css" href="assets/themes/css/style.css">
</head>
    <body>
        <h1 style="text-align: center; text-shadow: 0px 0px 5px grey;"><?php echo $site['name'] ?></h1>
        <!--Website Navigation-Menu-->
        <div class="NavigationMenu">
          <?php
              foreach($navigation as $title => $url) {
                  echo "<a href='$url'><button>$title</button></a>  ";
              }
          ?>
        </div>
        <br>
        <!--The Recently-Added Container-->
        <div>
            <!--Display every Program inside a Table(5 Programs)-->
            <table class="RecentlyAdded">
                <tr>
                    <th>Recently Added</th>
                    <th>Date Added</th>
                    <th>Developer</th>
                </tr>
                <tr>
                    <td>Program 1</td>
                    <td>1st June 2019</td>
                    <td>Dev1</td>
                </tr>
                <tr>
                    <td>Program 2</td>
                    <td>31st May 2019</td>
                    <td>Dev2</td>
                </tr>
                <tr>
                    <td>Program 3</td>
                    <td>2nd February 2019</td>
                    <td>Dev3</td>
                </tr>
                <tr>
                    <td>Program 4</td>
                    <td>5th July 2019</td>
                    <td>Dev4</td>
                </tr>
                <tr>
                    <td>Program 5</td>
                    <td>9th March 2019</td>
                    <td>Dev5</td>
                </tr>
            </table>
        </div>
        <br>
        <!--Info Container(DO NOT REMOVE)-->
        <h5 style="text-align: center;" id="info">
            Running: <?php echo $site['software'] ?> Version<?php echo $site['version'] ?>(<?php echo $site['release_date'] ?>)<br>
            <a href="<?php echo $site['software_url'] ?>"><?php echo $site['software'] ?> Website</a><br>
	    WebWareBox is Licensed under the GNU General Public License V3(GPLV3). Learn more here: <a href="https://www.gnu.org/licenses/licenses.html">GPLV3</a>
        </h5>
        <!--A Contact-Button that leads to a Contact-Page-->
        <a href="contact.php"><button id="ContactButton"><img src="assets/themes/box_icons_v1/mail.png" width="20">Contact Owners</button></a>
    </body>
</html>
