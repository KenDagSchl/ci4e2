<form method="post" action="<?= site_url('UserController/register') ?>">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    <input type="text" name="user_type" placeholder="User Type"> <!-- Replace with a select field if there are specific values -->
    <input type="text" name="user_level" placeholder="User Level"> <!-- Replace with a select field if there are specific values -->
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="first_name" placeholder="First Name">
    <input type="text" name="last_name" placeholder="Last Name">
    <input type="submit" value="Register">
</form>