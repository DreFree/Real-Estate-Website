<?php
    include_once "db/cont.php";
    $sql="SELECT IMG,Des from home LIMIT 5";
    $result=mysqli_query($link,@sql);
    $counter=0;
    mysqli_close($link);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>DnJ Real Estate</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="st/style.css">
        <script>
            function showslide()
            {
                var xmlhttp=new XMLHttpRequest();
                xmlhttp.onreadystatechange=function()
                {
                    if (this.readyState==4 && this.status==200)
                        {
                            document.getElementById("ss").innerHTML=this.responseText;
                            
                        }
                    
                };
                xmlhttp.open("POST","slideshow.php",true);
                xmlhttp.send();
                
            }
            var imer= setInterval(function(){
                var pic=document.getElementById("ph");
                var des=document.getElementById("sdes");
                counter++;
                if (counter>=max)
                    counter=0;
                pic.src=p[counter][0];
                des.textContent=p[counter][1];
              
            },5000);
            
        
        
        
        </script>
    </head>
    <body onload="showslide()">
        <div class="row">
            <div class="header">
                <ul id="menu">
                    <li id="logo"><a href="#"><img src="im/logo.png"></a></li>
                    
                    <li><a href="">Sales</a></li>
                    
                    <li><a href="">Rent</a></li>
                    
                    <li><a href="">About Us</a></li>
                    
                    <li><a href="">Contact Us</a></li>
                   
                    <li id="search"><a href="">Search &nbsp;<img src="im/search.png"></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col5"></div>
            
            <div class="col1" id="ss" ><!--SLideShow-->
                
            </div>
                <div class="row">
                    <div class="col3"><a href=""><img src="im/login.png"></a></div>
                    <div class="col3">DeezNuts</div>
                </div>
            
        </div>
        <div class="footer">
            habla
        </div>
    </body>
</html>