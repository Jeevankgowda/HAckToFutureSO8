<?php
include("connection.php");?>


<!DOCTYPE html>
 <html lang="en" title="Coding design">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Responsive HTML Table With Pure CSS - Web Design/UI Design</title>
     <link rel="stylesheet" href="ngo.css">
     <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
 </head>
 
 <body>
     <main class="table">
         <section class="table__header">
             <h1>Food Available</h1>
             <div class="input-group">
                 <input type="search" placeholder="Search Data...">
                 <img src="search.svg" alt="">
             </div>
             </div>
         </section>
         <section class="table__body">
             <table>
                 <thead>
                     <tr>
                         <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Doner<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Restraunt<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Location <span class="icon-arrow">&UpArrow;</span></th>
                         <th> FoodType<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Serves <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Date <span class="icon-arrow">&UpArrow;</span></th>
                         <th> Time<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Status <span class="icon-arrow">&UpArrow;</span></th>
                     </tr>
                  </thead>

                  <?php
            
            $sql = "SELECT  HOTEL.RID,HOTEL.FNAME,HOTEL.RNAME,HOTEL.LOCALITY,DONATE.DESCPT,DONATE.SERVECOUNT,DONATE.TDATE,DONATE.TCLOSE,DONATE.STATUS
            FROM  HOTEL,DONATE
            WHERE HOTEL.RID=DONATE.RID";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row['RID']."</td><td>".$row['FNAME']."</td><td>".$row['RNAME']."</td><td>".$row['LOCALITY']."</td><td>".$row['DESCPT']."</td><td>".$row['SERVECOUNT']."</td><td>".$row['TDATE']."</td><td>".$row['TCLOSE']."</td><td>";
                    if ($row['STATUS'] == 'requested') {
                        echo "<button class='requested'>Requested</button>";
                    } else if ($row['STATUS'] == 'accepted') {
                        echo "<button class='accepted'>Accepted</button>";
                    } else if ($row['STATUS'] == 'request') {
                        echo "<button type='button' class='request' data-restaurant-ID='" . $row['RID'] . "'>Request</button>";

                    } else {
                        echo "No status";
                    }
                    echo "</td></tr>";
                }
                echo "</tbody>";
            } else {
                echo "No results found.";
            }
            ?>
                
               </table>
         </section>
     </main>
     <div class="container"></div>

     <img src="logo4.png" id="menuIcon" alt="">

     <div class="menu-box" id="menuBox">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="index.html#contact">CONTACT</a></li>
            <li><a href="index.html#services-container">ABOUT US</a></li>
            <li><a href="login.html">LOG OUT</a></li>
            
        </ul>
     </div>
     <script>
        let menuBox=document.getElementById("menuBox");
        let menuIcon=document.getElementById("menuIcon");

        menuIcon.onclick=function(){
            menuBox.classList.toggle("open-menu");   
        }

        // Add an event listener to the "Request" button
document.addEventListener('click', function(event) {
  if (event.target.classList.contains('request')) {
    // Get the restaurant ID from the "data-restaurant-id" attribute
    var restaurantID = event.target.getAttribute('data-restaurant-ID');
    console.log(restaurantID);
    if(restaurantID){
        alert("Your request sent successfully");
    }
    
    //Send an AJAX request to the server to save the data
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "send.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        alert(this.responseText);
      }
    };
    
    xhttp.send("rid=" + restaurantID);
  }
});



     </script>
 </body>
 
 </html>