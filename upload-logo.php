<?php
$title = 'Upload Logo';
require 'include/header.php';
?>
<h2> Upload Logo </h2>
<div class="upload-logo">
<form method="post" action="save-logo.php" enctype="multipart/form-data">
    <label for="logo"> Choose a logo: * </label>
    <input type="file" id="logo" name="logo" accept="image/"/>
    <button> Upload </button>
</form>
</div>
</main>
</body>

</html>