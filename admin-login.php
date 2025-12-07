<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
body{font-family:Arial;background:#e9e9e9;}
form{
    width:350px;margin:80px auto;background:white;
    padding:20px;border-radius:10px;box-shadow:0 0 10px #aaa;
}
input{width:100%;padding:10px;margin:10px 0;}
button{padding:10px;width:100%;background:#111;color:white;border:none;}
</style>
</head>
<body>

<form action="admin-check.php" method="POST">
    <h2>Admin Login</h2>
    <input type="text" name="username" placeholder="Admin Username" required>
    <input type="password" name="password" placeholder="Admin Password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>