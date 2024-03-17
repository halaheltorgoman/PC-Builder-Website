<?php include 'header.php'; ?>
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
        <h2>Select your Power-Supply </h2>
    </div>

<div>

<?php 
echo "<div class=\"downg\">"; 
    $sql="SELECT * FROM powersupply WHERE max_output > 600";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if($queryResults > 0) {
        while($row = mysqli_fetch_assoc($result)){
            echo "<div>
            <form action=\"storage.php\" method=\"_POST\">
            <button id=\"butt\" name=\"bt\" onclick=\"myFunction()\" value=\"".$row['ps_model']."\">
            ".$row['ps_model']."<img src=\"".$row['ps_model'].".jpg\"  width=\"110px\" height=\"90px\"> <p> ".$row['ps_price']." </p></button>
            </form>
                </div>";
            }
        }

    ?>
    
</div>