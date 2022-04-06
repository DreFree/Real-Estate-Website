<?php
    include_once "db/cont.php";
    $sql="SELECT IMG,Des from home LIMIT 5";
    $result=mysqli_query($link,$sql);
    $size=mysqli_num_rows($result);
    $dir="im/h/";
    $i=0;
    $j=0;
    
     $first[$i]=mysqli_fetch_array($result);
?>

<!DOCTYPE html>

<html>
    <head>
        <title>DnJ Real Estate</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="st/style.css">
        <script>
            var counter=0;
            var max=<?=$size;?>; 
            var p=<?php
                echo 'new Array('.$size.');';
                echo 'var q= new Array('.$size.');';
                echo 'for (var i=0;i<'.$size.'; i++)';
                echo '{ p[i]=new Array (2);}';
                
                echo 'p['.$i.'][0]="'.$dir.$first[$i][0].'";';
                echo 'p['.$i.'][1]="'.$first[$i][1].'";';
                
                while ($row=mysqli_fetch_array($result))
                {
               
                    $i++;
                    $first[$i]=$row;
                     echo 'p['.$i.'][0]="'.$dir.$first[$i][0].'";';
                    echo 'p['.$i.'][1]="'.$first[$i][1].'";';
                }
            ?>
                
            function ss(num)
            {
                var pic=document.getElementById("ph");
                var des=document.getElementById("sdes");
                if(num==-1)
                {
                    counter++;
                    if (counter>=max)
                        counter=0;
                }else
                    counter=num;

                pic.src=p[counter][0];
                des.textContent=p[counter][1];
                switch(counter)
                {
                    case 0:
                        <?php $target=0;
                            for ($m=0;$m<$size;$m++)
                            {
                                if ($m==$target)
                                    echo 'document.getElementById("b'.$m.'").src="im/button1.png";';
                                else
                                    echo 'document.getElementById("b'.$m.'").src="im/button2.png";';
                            }
                        ?>
                        break;
                    case 1:
                        <?php $target=1;
                            for ($m=0;$m<$size;$m++)
                            {
                                if ($m==$target)
                                    echo 'document.getElementById("b'.$m.'").src="im/button1.png";';
                                else
                                    echo 'document.getElementById("b'.$m.'").src="im/button2.png";';
                            }
                        ?>
                        break;
                    case 2:
                         <?php $target=2;
                            for ($m=0;$m<$size;$m++)
                            {
                                if ($m==$target)
                                    echo 'document.getElementById("b'.$m.'").src="im/button1.png";';
                                else
                                    echo 'document.getElementById("b'.$m.'").src="im/button2.png";';
                            }
                        ?>
                        break;
                    case 3:
                        <?php $target=3;
                            for ($m=0;$m<$size;$m++)
                            {
                                if ($m==$target)
                                    echo 'document.getElementById("b'.$m.'").src="im/button1.png";';
                                else
                                    echo 'document.getElementById("b'.$m.'").src="im/button2.png";';
                            }
                        ?>
                        break;
                    case 4:
                        <?php $target=4;
                            for ($m=0;$m<$size;$m++)
                            {
                                if ($m==$target)
                                    echo 'document.getElementById("b'.$m.'").src="im/button1.png";';
                                else
                                    echo 'document.getElementById("b'.$m.'").src="im/button2.png";';
                            }
                        ?>
                        break;   
                }
              
            }      
            
            var imer= setInterval(function(){
                        ss(-1);
                    },5000);
            
            function showLG()
            {
                var x=document.getElementById("LogIn");
                var y=document.getElementById("wind");
                y.style.zIndex="3";
                y.style.opacity="0.5";
                x.style.display="block";
                
            }
            function hideLG()
            {
                var x=document.getElementById("LogIn");
                var y=document.getElementById("wind");
                x.style.display="none";
                y.style.opacity="0";
                y.style.zIndex="-1";
            }
        
        
        </script>
    </head>
    <body>
        <div id="wind"></div>
        
        <div id="LogIn"> <!--LOGIN IN WINDOW-->
            <form id="login" method="POST" action="/REstate/login.php">
                LOGIN<br><br>
                Username:&nbsp;<input type="text" name="un" required><br>
                Password:&nbsp;<input type="password" name="pw" required style="margin-left:3px;"><br><br>
                    <input type="submit"><button type="button" onclick="hideLG()">Cancel</button>
            </form>
        </div>
        <div class="row">
            <div class="header"> <!--Header MEnu Bar-->
                <ul id="menu">
                    <li id="logo"><img src="im/logo.png"></li>
                    <li class="sep"><a>&nbsp;</a></li>
                    <li><a href="">Sales</a></li>
                    <li><a href="">Rent</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li> 
                    
                    <li id="LG" onclick="showLG()">Login</li>
                </ul>
                
            </div>
            
        </div>
        <div class="row">
            
            <div class="col1"><!--SLideShow-- THE BODY MIDDLE SECTION--> 
                <?php
                        echo "<div style='width:100%;height:inherit;position: relaive;z-index: 1;'><img style='position:relative;z-index:1;height:inherit; width:inherit;' id ='ph' src='".$dir.$first[0][0]."'></div>";
                
                    echo "<div id ='sdes' style='color:grey;font-size:1.5em;width:59%;height: 6rem;position: absolute;top:30rem;z-index:2;opacity:0.9;padding:0% 0.5% 0% 0.5%'>".$first[0][1]."</div>";

                            echo "<div style='width: 60%;top:28rem;left:auto;right: auto;z-index: 3;position:absolute;display: inline-block;text-align: center;'>";
                            echo '<span><img id="b0" onclick="ss(0)" src="im/button1.png" width="20px" height="20px"></span>';
                            for ($a=1;$a<$size;$a++)
                            { 
                                echo '<span><img id="b'.$a.'"src="im/button2.png" width="20px" height="20px" onclick="ss('.$a.')"></span>';
                            }
                            echo "</div>";
                ?>
            </div>
            
        
                <div class="row">
                    <div class="col3" style="margin-bottom: 1%" onclick="showLG()"><img src="im/login.png" alt="Login"></div>
                    <div class="col3" id="haha"><a href="#"><img src="" alt="Personal Experiences"></a></div>
                </div>
            
        </div>
        <div id="footer"> <!--FOOTER SECTION-->
            <strong>DnJ Real Estate brought to you by DnJ Corporation LTD. Bring home closer to owner. </strong><br>Telephone: 1(800) 000 0000 Fax: 1 (800) 000 0000.<br> Email: DnJhomes@gmail.com.
        </div>
    </body>
</html>