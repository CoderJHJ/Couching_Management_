
<?php include 'header.php'; ?>
<div id="main-content">
    <h2>ADD NEW COURSE</h2>
    <form class="post-form" action="function/addcoursedata.php" method="post">
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="cname" />
        </div>
        <div class="form-group">
            <label>Course Trainer</label>
            <select name="course_trainer">
                <option value=""selected disabled>Select Trainer</option>
                <?php 
                
                $db = mysqli_connect("localhost","root","","coaching") or die("Ops! Wrong");
                $fetch_query = "SELECT * FROM trainer";
                $result= mysqli_query($db,$fetch_query) or die ("Off Jaa");
                while ($trainer = mysqli_fetch_assoc($result)){

                
                ?>
                <option value="<?php echo$trainer['t_id'] ?>"><?php echo$trainer['t_name'] ?></option>
                <?php  } ?> 
      
                
            </select>
        </div>
        <div class="form-group">
            <label>Course Price</label>
            <input type="number" name="cprice" />
        </div>
          
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>