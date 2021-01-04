<?php include 'inc/header.php'; ?>

    <h2 class="page-header">Post Event</h2>
    <form method="post" action="create.php">
        <!-- <div class="form-group">
            <label>Club</label>
            <input type="text" class="form-control" name="club">
        </div> -->

        <div class="form-group">
            <label>Category Name</label>
            <select  class="form-control" name="category">
            <option value ="0">Choose Category
            </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        

        <div class="form-group">
            <label>Event Title</label>
            <input type="text" class="form-control" name="event_title">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" name="description"> </textarea>
        </div>
        <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-group">
            <label>Registration Fee</label>
            <input type="text" class="form-control" name="fee">
        </div>
        <div class="form-group">
            <label>Event Co-ordinator</label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div class="form-group">
            <label>Contact Email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>

        <div class="form-group">
            <label>Category Name</label>
            <select  class="form-control" name="club">
            <option value ="0">Choose Category
            </option>
                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type ="submit" class="btn btn-default" value="Submit" name="submit">
    </form>

<?php include 'inc/footer.php'; ?>
