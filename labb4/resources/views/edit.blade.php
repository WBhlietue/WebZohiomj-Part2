<html>

<body>

    <form action='/users/1' method='post'>

        <input type="hidden" name="_method" value="put" />

        <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>

        <input type='submit' value='Edit user'>

    </form>

    <form action='/users/1/delete' method='post'>

        <input type="hidden" name="_method" value="delete" />

        <input type='hidden' name='_token' value='<?php echo csrf_token(); ?>'>

        <input type='submit' value='Delete user'>

    </form>

</body>

</html>