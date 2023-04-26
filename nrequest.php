<!DOCTYPE html>
 <html lang="en" title="Feed India">
 
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
             <h1>Requests</h1>
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
                         <th> Ngo Name<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Address<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Director<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Phone No<span class="icon-arrow">&UpArrow;</span></th>
                         <th> Email<span class="icon-arrow">&UpArrow;</span></th>

                         
                         <th>Status<span class="icon-arrow">&UpArrow;</span></th>
                     </tr>
</thead>
                     <?php
                     include("connection.php");
                    $sql = "SELECT  NGO.NID AS NID,NGO.LOCALITY AS LOC,NGO.NNAME AS NNAME,NGO.FNAME AS FNAME,NGO.DPHN AS DPHN, NGO.EMAIL AS MAIL
                    FROM  NGO,HOTEL,REQUEST
                    WHERE HOTEL.RID=REQUEST.RID and NGO.NID=REQUEST.NID";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo "<tbody>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row['NID']."</td><td>".$row['NNAME']."</td><td>".$row['FNAME']."</td><td>".$row['LOC']."</td><td>".$row['DPHN']."</td><td>".$row['MAIL']."</td>";
                           
                            echo "<td><button type='button' class='accept' >ACCEPT</button>";
                            echo "<button type='button' class='reject' >REJECT</button></td>";
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

     <img src="img/logo4.png" id="menuIcon">

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

     </script>
 </body>
 
 </html>