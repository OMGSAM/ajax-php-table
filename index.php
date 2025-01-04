<?php 
if (isset($_POST['input'])) {
    $con = mysqli_connect("localhost", "root", "", "your_database");
    $input=$_POST['input'];
    $sql="select * from user where nom like '%{$input}%'" ;
    $query=mysqli_query($con,$sql);

    if (mysqli_num_rows($query) > 0) {

        echo '<table border="1">
         <tr>   <th>ID</th>   <th>NOM</th>   <th>CITY</th> </tr>';

         while ($data=mysqli_fetch_assoc($query)) {

           echo' <tr>   <th>'.$data['id'].'</th>   <th>'.$data['nom'].'</th>   <th>'.$data['city'].'</th> </tr>' ;
         }
    }
      
    else {
       echo "<h3>NO DATA FOUND </h3>";
    }
}
?>


*$*$$*$*$*$*$



<?php 
if (isset($_POST['input'])) {
    $con = mysqli_connect("localhost", "root", "", "your_database");
    $input=$_POST['input'];
    $sql="select * from user where nom like '%{$input}%'" ;
    $query=mysqli_query($con,$sql);

    if (mysqli_num_rows($query) > 0) {  ?>
     <table border="1">
     <tr>   <th>ID</th>   <th>NOM</th>   <th>CITY</th> </tr>

     <?php
        while ($data=mysqli_fetch_assoc($query)) {  ?>

            <tr>   <th><?=$data['id']?></th>   <th><?=$data['nom']?></th>   <th><?=$data['city']?></th> </tr>

                <?php } ?>
    </table>     
                    
     <?php   
    }  
       
    else {
       echo "<h3>NO DATA FOUND </h3>";
    }
}
?>


