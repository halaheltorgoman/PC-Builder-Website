<?php include 'header.php';
include 'connection.php' ?>

        <div>
        <nav id="nv">
            <img src="media/icon.png" class="logo">
            
        <ul>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">About Us</a></li>

        </ul>
        <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook" id="fi"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram" id="ii"></i></a>

    
    </nav>
    </div>

<div class="d1">
        <h2>Select your CPU</h2>
    </div>

<?php

 
    echo "<div class=\"downg\">"; 
    $sql="SELECT * FROM CPU WHERE CPU_manufacturer = \"AMD\"";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if($queryResults > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "
            <h2>\"Choose from these CPUs that
            <div>
            <form id=\"form\" action=\"MB1.php\" method=\"_POST\">
            <button id=\"butt\" name=\"bt\" >
            ".$row['CPU_model']."<img src=\"".$row['CPU_model'].".jpg\"  width=\"100px\" height=\"90px\"  >  <p> ".$row['CPU_price']." </p><b style=\"color:red;\"> ".$row['CPU_manufacturer']."<\b> </button>
            </form>
                </div>";

            }
        }
        echo"</div>";

    ?>
    
</div>

<?php 
    echo "<div class=\"downg\">"; 
    $sql="SELECT * FROM CPU WHERE CPU_manufacturer = \"intel\"";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if($queryResults > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "<div>
            <form action=\"MB2.php\" method=\"_POST\">
            <button id=\"butt\" name=\"bt\" onclick=\"myFunction()\" value=\"".$row['CPU_model']."\">
            ".$row['CPU_model']."<img src=\"".$row['CPU_model'].".jpg\"  width=\"100px\" height=\"90px\"> <p> ".$row['CPU_price']." </p> </button>
            
            </form>
                </div>";
            }
        }


    ?>
    </div>
    
   
</html>