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
            foreach($navigation as $title => $url){
              echo "<a href='$url'><button>$title</button></a>  ";
            }
          ?>
        </div>
