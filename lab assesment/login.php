<?php require_once "login_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
</head>
<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Email (Username) *</td>
                    <td>
                        <input type="email" name="email" value="<?php echo $email; ?>" required>
                        <div style="color:red;"><?php echo $emailErr; ?></div>
                    </td>
                </tr>

                <tr>
                    <td>Password *</td>
                    <td>
                        <input type="password" name="password" required>
                        <div style="color:red;"><?php echo $passErr; ?></div>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !$emailErr && !$passErr) {
        echo "<h3>Login Attempt Details:</h3>";
        echo "Email: " . $email . "<br>";
        echo "Status: Validation Successful!";
    }
    ?>

</body>
</html>