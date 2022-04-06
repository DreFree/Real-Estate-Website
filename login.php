<?php
    include_once "db/cont.php";
    $Username=$_POST["un"];
    $Password=$_POST["pw"];
    $URL="in.php";
    $sql="SELECT COUNT(Username) FROM credentials WHERE Username='".$Username."' AND PWord='".$Password."' LIMIT 0, 1";
    $query=mysqli_query($link,$sql);
    $result=mysqli_fetch_array($query);
    if ($result[0]==1)
    {
        $sql="SELECT Fname,Lname FROM credentials WHERE Username='$Username'";
        echo $sql;
        $query=mysqli_query($link,$sql);
        $row=mysqli_fetch_array($query);
        
        $URL.="?fname=$row[0]&lname=$row[1]";
        header("Location: $URL");//Login in sucessful
    }
    else
        header('Location: .../loginfail.html');//Login fail
        
?>