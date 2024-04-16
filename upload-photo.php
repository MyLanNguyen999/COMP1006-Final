<?php
$title = 'Upload Photo';
require 'include/header.php';
?>
<h2>Upload Photo</h2>
<form method="post" action="save-logo.php" enctype="multipart/form-data">
<fieldset>
    <label for="photo">Photo:</label>
    <input type="file" id="photo" name="photo" accept="image/"/>
    </fieldset>
<button> Submit </button>
</form>
</body>

</html>