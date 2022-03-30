<?php
include "header.php";
?>
<div id="main-content">
    <h2>All TRAINER DATA</h2>
    <?php
    $db = mysqli_connect("localhost","root","","coaching") or die("Ops! Wrong");
    $fetch_query = "SELECT * FROM trainer";
    $result= mysqli_query($db,$fetch_query) or die ("Off Jaa");
    if (mysqli_num_rows($result) >0) {
        # funtion er addtrainerdata file theke first akhane kaj kora hoyece
        #jehethu table er agey uporer kaj korce,,tai baki second braket table er por colse kora hoyece php diye
        #then while loop chalano hoyece
        #then tr er bitor data gulo input korar method submit kora hoyece table onusare
    
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
         <th>Number</th>
        <th>Address</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($eachdata = mysqli_fetch_assoc($result)){

            

            ?>
             
            <tr>
                <td><?php echo $eachdata['t_id'] ?> </td>
                <td> <?php echo $eachdata['t_name'] ?>  </td>
                <td><?php echo $eachdata['t_number'] ?> </td>
                <td><?php echo $eachdata['t_address'] ?> </td>
                <td>
                    <a href="edit.php ">Edit</a>
                    <a href=" delete-inline.php ">Delete</a>
                </td>
            </tr>
            <?php } ?>
         
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>