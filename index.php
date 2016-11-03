<?php

require('dbconnect.php');




if ($_SERVER['REQUEST_METHOD']== 'POST' || $session ['login']==1)
{

    $uname =mysql_escape_string($_POST['namebox']);
    $password =mysql_escape_string($_POST['passwordbox']);

    $sql = mysql_query("SELECT * FROM users WHERE username= '$uname' AND password='$password' ");

    $numberrows = mysql_num_rows($sql);


    //--------------------------------------
    if($numberrows>0)
    {
        //login has been success disp sweets
        $sweets = "SELECT *FROM sweets";
        $result = mysql_query($sweets);
        
        while($row=mysql_fetch_assoc($result))
        {
          echo $row["name"];  
        }
    }
    else
    {
        echo'<p>you hav not logged in.</p>';
        echo '
        <form method="POST" action="index.php">
    
            Username <input type="text" name="namebox"><br/>
            password <input type="text" name="passwordbox"><br/>
            <input type="submit" name="submit" value="Log in">
         </form>';
    }
    //------------------------------------
}//closes intial if atatement

?>


