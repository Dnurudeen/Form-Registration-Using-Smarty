<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
<div class="container p-5 w-50 mt-5">
    {if isset($error)}
        <div style="color:red;">{$error}</div>
    {/if}

    {if isset($success)}
        <p><b>Username:</b> {$username}</p>
        <p><b>Email:</b> {$email}</p>
        <div class="p-2 bg-success text-light">{$success}</div>
    {/if}

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
