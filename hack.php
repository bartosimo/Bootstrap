<html>
<br/>
<br/>
<body> <?php if (isset($_REQUEST['submitted']) && $_REQUEST['submitted'] == '100') {
    echo "Form submitted!";
} ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="reset" value="1"/>
    <input type="submit" value="Submit!"/>
</form>


</body>
</html>