<?php
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("location : login.php");
    }
?>

<!DOCTYPE html >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
    <link rel="Stylesheet" href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/themes/dark-hive/jquery-ui.css" />
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.17/jquery-ui.js"></script>

    <style type="text/css"> 
        #navigationMenu{ width: 400px; }
        .single-menu-item .ui-icon {display: none !important;}
        .single-menu-container {display: none !important;}
        body{
         margin: 0;
         padding: 0;
         background: url(image.jpg) ; 
         background-size: cover;
         background-position: top;
         font-family: sans-serif;
        }
    </style>
    <script type="text/javascript">
        $(function () {
            $('#navigationMenu').accordion({
                collapsible: true,
                navigation: true,
                clearStyle: true
            });

            $('.single-menu-item').unbind('click');
        });
    </script>

</head>

<body>
    <div id="navigationMenu">
        <h3 class="single-menu-item">
            <a href="#">Home </a>
        </h3>
        <div class="single-menu-container">
        </div>
        <h3>
            <a href="#">Dashboard</a></h3>
        <div>
            <ul>
                <li><a href="#1">Employee Details</a> </li>
                <li><a href="#2">Deductions and Increaments</a></li>
                <li><a href="#3">Salary Details</a></li>
                <li><a href="#3">Transaction Details</a></li>
            </ul>
        </div>
        <h3 class="single-menu-item">
            <a href="#">About us</a></h3>
        <div class="single-menu-container">
        </div>
    </div>
    <div style="float:right">
<form align="right" name="form1" method="post" action="log_out.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</div>

<style>
    .logoutLblPos
    {
        position: absolute;
        right: 10px;
        top: 5px;
    }

</style>
</body>

</html>