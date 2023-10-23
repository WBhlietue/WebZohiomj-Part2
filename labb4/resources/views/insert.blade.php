<html>

<body>
    <form action='/users' method='post'>
        <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>
        <input type='submit' value='Add user'>
    </form>
</body>

</html>