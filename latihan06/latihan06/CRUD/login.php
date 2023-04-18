<?php
if(isset($_POST['txNAMA'])){


}

#tugas 6 membuat form login dan scriptnya
#dan kirim juga file database(tabel)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<table border="1px solid black">
<form method="post" action="login.php">
    <tr>
        <td>
            <h1>Login</h1>
        </td>
        <td>
        </td>
    </tr>

    <tr>
        <td>
            <label>Username :</label>
        </td>
        <td>
            <input type="text" name="txNAMA">
        </td>
    </tr>

    <tr>
        <td>
            <label>Password :</label>
        </td>
        <td>
            <input type="password" name="txPASS">
        </td>
    </tr>

    <tr>
        <td>
            <button type="submit" name="txLOGIN" id="login">Login</button>
        </td>
        <td>
            <button type="submit" name="txREGISTER" id="register">Register</button>
        </td>

    </tr>
</form>
</table>
    
</body>
</html>