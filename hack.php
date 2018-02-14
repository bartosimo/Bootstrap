<html>
<br/>
<br/>
<body> <?php if (isset($_REQUEST['submitted']) && $_REQUEST['submitted'] == '1') {
    echo "Form submitted!";
} ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="submitted" value="1"/>
    <input type="submit" value="Submit!"/>
</form>


</body>
