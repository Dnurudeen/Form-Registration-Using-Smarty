<?php
    use Smarty\Smarty;
    require_once "layout/app.php";   
    
    require('libs/Smarty.class.php');
    require('User.php');

    $smarty = new Smarty;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Create a User object with the form data
        $user = new User($_POST['username'], $_POST['email'], $_POST['password']);
    
        // Validate the input data
        if (!$user->validateUsername()) {
            $smarty->assign('error', 'Invalid username. It must be alphanumeric and 3-20 characters long.');
        } elseif (!$user->validateEmail()) {
            $smarty->assign('error', 'Invalid email format.');
        } elseif (!$user->validatePassword()) {
            $smarty->assign('error', 'Password must be at least 8 characters long and include both letters and numbers.');
        } else {
            // If validation passes, create the user and display a success message
            $user->createUser();
            $smarty->assign('success', 'Registration successful!');
            // Use getter methods to access user data
            $smarty->assign('username', $user->getUsername());
            $smarty->assign('email', $user->getEmail());
        }
    }
    
    // Display the form (with any errors or success messages)
    $smarty->display('register.tpl');
?>
