<!DOCTYPE html>
<html>
<head>
    <title>Online Library</title>
    <link rel="stylesheet" href="stylesLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="name-container"><h1>M&N Library</h1></div>
    </header>
    
    <div class="form-container">
        <h1>Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
            <label for="uname">Username</label>
            <input type="text" id="uname" name="uname" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        
            <input type="submit" value="Log in">
        </form>
        <?php
        require 'connect.php';
        $conn = oci_connect('LibraryAdmin', 'admin', 'localhost/xe');
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $myusername = isset($_POST['uname']) ? $_POST['uname'] : "";
            $mypassword = isset($_POST['password']) ? $_POST['password'] : "";

            $query = "SELECT * FROM Login WHERE USERNAME='".$myusername."' and PASSWORD='".$mypassword."' ";
            $r = oci_parse($conn, $query);
            oci_execute($re);

            if ($row = oci_fetch_array($r)) {
            header("Location: library.php");
            exit;
            } else {
                echo '<script>alert("Invalid credentials");</script>';
            }
            oci_close($conn);
        }
        ?>
    </div>
</body>
</html>
