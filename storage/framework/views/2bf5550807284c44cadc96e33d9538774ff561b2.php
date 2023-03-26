<h1> User login</h1>


<form action="users" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo e(method_field('DELETE')); ?>

    <input type="text" name="user" placeholder="enter user name" /><br><br>
    <input type="password" name="password" placeholder="Enter user password">
<br><br>
    <button>Login</button>



</form>
<?php /**PATH /var/www/html/httpreq/resources/views/users.blade.php ENDPATH**/ ?>