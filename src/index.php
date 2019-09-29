<?php 
/*
 * Copyright belongs to: Oxygen-Software since <28/09/2019>
 *
 * This Program is Licensed under the OSPL(Oxygen-Software-Public-License) - V1.0.0(19/09/2019).
 * To learn more about the License, please visit: https://oxygen-software.github.io/license.html
*/
/*
 * WebBox
 * @version 0.1.0
 * @author Dan-Kode(Oxygen-Software)
*/
?>
<!DOCTYPE html>
<html>
     <head>
          <title>WebBox</title>
          <meta charset="utf-8">
          <!--Import all other Scripts here(That includes CSS and JS Files)-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/index.css"> <!--Import the specific CSS File for this Page-->
          <link rel="stylesheet" type="text/css" href="assets/theme/css/site.css"> <!--Import the Site-Wide CSS File-->
     </head>
     <body>
          <h1 style="text-align: center; color: white; text-shadow: 0px 0px 5px black;">WebBox</h1>
          <!--The Navigation-Menu for the Software. This Menu lets the User navigate through different Pages by clicking a Button.
          
          This Menu contains Buttons that link to:
          - Homepage
          - Software-Directory
          - Login
          - Register-->
          <main>
               <div class="Navigation-Menu">
                    <!--Welcome the User-->
                    <p style="font-size: 14px;">
                         Welcome to WebBox, User! Please take your time to look around, settle in and see what the Software-Directory has to offer.
                    </p>
                    <a href="index.php"><button>Home</button></a>
                    <a href="software.php"><button>Software</button></a>
                    <br>
                    <br>
               </div>
          </main>
          <!--The Footer. This Footer contains Information about:
          - The Software
          - The Software Version
          - Link to the Software's Website
          - The Software's License
          
          NOTE TO USERS OF THE SOFTWARE: PLEASE DO NOT REMOVE ANYTHING FROM THIS FOOTER. DOING SO MAY CAUSE ISSUES WITH SUPPORT(E.G. REMOVING THE VERSION-NUMBER CAN STOP
          PEOPLE FROM KNOWING WHICH VERSION YOU'RE USING AND STOPS THEM FROM BEING ABLE TO ENCOUNTER YOUR ERROR ON THAT VERSION).-->
          <main>
               <div class="Footer">
                    <footer>
                         <h5>This Website runs on WebBox | WebBox Version: 0.1.0(28/09/2019)</h5>
                         <h5>
                              <a href="https://webbox.github.io">Website</a> | 
                              WebBox is Licensed under the OSPL. Learn more here: <a href="https://oxygen-software.github.io/license.html">Oxygen-Software: License</a>
                         </h5>
                    </footer>
               </div>
          </main>
     </body>
</html>