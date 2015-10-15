<h2>Edit job offers</h2>

<?php foreach ($jobs as $job) { ?>
    <form method="post" action="#<?php echo $job->jobID ?>" id="<?php echo $job->jobID; ?>">
        <input type="hidden" name="edit_id" value="<?php echo $job->jobID; ?>" />
        <label>Image URL :</label><input type="url" name="edit_image_url" value="<?php echo $job->jobImageUrl; ?>" /><br />
        <label>URL :</label><input type="url" name="edit_url" value="<?php echo $job->jobUrl; ?>" /><br />
        <label>Latitude :</label><input type="text" name="edit_latitude" value="<?php echo $job->jobLatitude; ?>" required /><br />
        <label>Longitude :</label><input type="text" name="edit_longitude" value="<?php echo $job->jobLongitude; ?>" required /><br />
        <label>Description :</label>
            <textarea cols="40" rows="10" name="edit_description" required /><?php echo $job->jobDescription; ?></textarea><br />
        <input type="submit" value="Modify" />
        <a href="?edit&amp;delete=<?php echo $job->jobID; ?>" /><input type="button" value="Delete" /></a>
    </form>
    <hr><br /><br />
<?php } ?>
