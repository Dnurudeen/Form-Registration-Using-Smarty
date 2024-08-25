<?php
/* Smarty version 5.4.0, created on 2024-08-25 02:09:56
  from 'file:register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.0',
  'unifunc' => 'content_66ca76547289c4_48193734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25892bfd72611b822a1c63a301f6bba719e16a55' => 
    array (
      0 => 'register.tpl',
      1 => 1724544595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ca76547289c4_48193734 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/AdvancePHP/yip-project/templates';
?><!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
<div class="container p-5 w-50 mt-5">
    <?php if ((null !== ($_smarty_tpl->getValue('error') ?? null))) {?>
        <div style="color:red;"><?php echo $_smarty_tpl->getValue('error');?>
</div>
    <?php }?>

    <?php if ((null !== ($_smarty_tpl->getValue('success') ?? null))) {?>
        <p><b>Username:</b> <?php echo $_smarty_tpl->getValue('username');?>
</p>
        <p><b>Email:</b> <?php echo $_smarty_tpl->getValue('email');?>
</p>
        <div class="p-2 bg-success text-light"><?php echo $_smarty_tpl->getValue('success');?>
</div>
    <?php }?>

    <form action="register.php" class="mx-auto my-3" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" type="text" id="username" name="username" required><br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" id="email" name="email" required><br>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" type="password" id="password" name="password" required><br>
        </div>

        <input type="submit" class="btn btn-danger" value="Register">
    </form>
</div>
</body>
</html>
<?php }
}
