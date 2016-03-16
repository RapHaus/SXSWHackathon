<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Secure Login: Registration Success</title>
    <link rel="stylesheet" href="styles/main.css" />
</head>
<body onload="redirect();">
<script>
    function redirect(){
        alert("Registration Successful!");
        <?php header('Location: http://rap.haus/signin.php'); ?>
    }
</script>
<h1>Registration successful!</h1>
<p>You can now go back to the <a href="signin.php">login page</a> and log in</p>
</body>
</html>