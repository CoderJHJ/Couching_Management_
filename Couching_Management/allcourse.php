<?php
include "header.php";
?>
<div id="main-content">
    <h2>ALL COURSE DATA</h2>
    <?php 
   $db = mysqli_connect("localhost","root"," ","coaching") or die("Ops! Wrong");
   $insert = "SELECT * FROM course INNER JOIN trainer ON course.c_trainer = trainer.t_id";
    $result = mysqli_query($db,$insert) or die("Ops! Wrong");
    if (mysqli_num_rows($result)>0) {
        # code...
   

    ?>
     
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Course</th>
         <th>Price</th>
        <th>Trainer</th>
        </thead>
        <tbody>
            <?php
            $bdt ="Tk";
            while($course = mysqli_fetch_assoc($result)){

            
            ?>
             
            <tr>
                <td><?php echo $course["c_id"] ?></td>

                <td><?php echo $course["c_name"] ?></td>
                <td><?php echo $course["c_price"].$bdt ?></td>
                <td><?php echo $course["t_name"] ?> </td>
            </tr>
            <?php
            }
            ?>
              
           
        </tbody>
    </table>
    <?php } ?>
 
</div>
</div>
<?php
include 'footer.php';
?>