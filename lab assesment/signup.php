<?php require_once "signup_process.php"; ?>
<!DOCTYPE html>
<html lang="en">
 
 
<head>
    <meta charset="utf-8">
    <title> Portfolio</title>
    <link rel="stylesheet" href="contacts.css">
</head>
 
<body>
       
 
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
 
            <fieldset>
                <legend>Registration Form</legend>
                <table class="form-table">
 
                <tr>
                    <td> First Name <span class="required">*</span></td>
                    <td>
                        <input type="text" name="name" value="<?php echo $name; ?>" required>
                        <div class="error"><?php echo $nameErr; ?></div>
                    </td>
                </tr>
                 <tr>
                    <td> Last Name <span class="required">*</span></td>
                    <td>
                        <input type="text" name="lname" value="<?php echo $lname; ?>">
                        <div class="error"><?php echo $lnameErr; ?></div>
                    </td>
                </tr>
 
                 <tr>
                    <td> contact number <span class="required">*</span></td>
                    <td>
                        <input type="text" name="contact" value="<?php echo $contact; ?>">
                        <div class="error"><?php echo $contactErr; ?></div>
                    </td>
                </tr>
 
                <tr>
                    <td>Email <span class="required">*</span></td>
                    <td>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                        <div class="error"><?php echo $emailErr; ?></div>
                    </td>
                </tr>
 
             
 
 
                <tr>
                    <td></td>
                    <td><input type="submit" value="Register"></td>
                </tr>
 
                </table>
 
            </fieldset>
        </form>
 
   <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        !$nameErr &&  !$emailErr && !$lnameErr && !$contactErr): ?>
        <h3>Submitted values</h3>
        <table class="result-table">
            <tr><td>Name</td><td><?php echo $name; ?></td></tr>
            <tr><td>Email</td><td><?php echo $email; ?></td></tr>
            <tr><td>Last Name</td><td><?php echo $lname; ?></td></tr>
            <tr><td>Contact Number</td><td><?php echo $contact; ?></td></tr>
        </table>
    <?php endif; ?>
 
</body>
 
</html>
 
 