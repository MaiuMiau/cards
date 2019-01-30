<html>
 <head>
 <meta charset="UTF-8">
 <title>
 Sign-in form
 </title>
 </head>
 <body>
 <h1>Sign in to Cards application</h1>
 <table>
 <form action="list.php" method="post">
 <tr>
 <td>Username
 </td>
 <td><input name="username" type="text">
 </td>
 </tr>
 <tr>
 <td>Password
 </td>
 <td><input name="password" type="password">
 </td>
 <tr>
 <td>
 </td>
 <td><input type="submit" name="login" value="Login">
 </td>
 </tr>
 </form>
 </table>
<?php
 if($_POST['password'] == 'password' && $_POST['username'] == 'username') {
 session_start();
 $_SESSION['username']='username';
 redirect("list.php");
 } else {
 echo 'Login failed';
 }
 function redirect($url) {
 ob_start();
 header('Location: '.$url);
 ob_end_flush();
 die();
 }
?>
 </body>
</html>
