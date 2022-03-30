<?php include 'header.php'; ?>
<div id="main-content">
    <h2>ADD STUDENT</h2>
    <form class="post-form" action="function/addstudentdata.php" method="post">
        <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Student Number</label>
            <input type="number" name="snumber" />
        </div>
        <div class="form-group">
            <label>Select Course</label>
            <select name="s_course">
                <option value=""selected disabled>Select Course</option>
                <option value="1">Advance Php </option>
                <option value="1" >Flutter</option>
                <option value="1"> React</option>
                <option value="1">Webdevelopment </option>
                <option value="" >App Development</option>
                
            </select>
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
<?php include 'footer.php'; ?>
 