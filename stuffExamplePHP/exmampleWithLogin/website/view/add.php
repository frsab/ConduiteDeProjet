<h2>Add new job offer</h2>

<form method="post" action="">
    <label>Image URL :</label><input type="url" name="add_image_url" /><br />
    <label>URL :</label><input type="url" name="add_url" /><br />
    <label>Latitude* :</label><input type="text" name="add_latitude" required /><br />
    <label>Longitude* :</label><input type="text" name="add_longitude" required /><br />
    <label>Description* :</label><textarea cols="40" rows="10" name="add_description" required /></textarea><br />
    * required<br />
    <input type="submit" value="Add">
</form>
