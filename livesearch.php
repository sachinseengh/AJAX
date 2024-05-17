<?php

include ('config.php');



if(isset($_GET['input'])){
    $input = $_GET['input'];


    $sql ="select * from searchval where name like '{$input}%'";
    

    $result = mysqli_query($conn,$sql);
     
    if(mysqli_num_rows($result)>0){?>
       
         <table class="table table-dark table-striped-columns">
        
         <thead>
            <tr>
         <th>id</th>
         <th>name</th>
         <th>address</th>
         <th>phone</th>
         </tr>
         </thead>


         <tbody>
            
           
           <?php while($row = mysqli_fetch_assoc($result)){?>
                
              
       <tr>
            <td> <?php echo $row['id']; ?></td>
            <td> <?php echo $row['name']; ?></td>
            <td>  <?php echo $row['address']; ?></td>
            <td> <?php echo $row['phone']; ?></td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
     
 
 <?php }else{
        echo "<h2>No Data Found</h2>";
 }
}

?>