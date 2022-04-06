<?php
     include_once "db/cont.php";
    $sql="SELECT IMG,Des from home LIMIT 5";
    $result=mysqli_query($link,$sql);
    $size=mysqli_num_rows($result);
    $dir="im/h/";
    $i=0;
    
     $first[$i]=mysqli_fetch_array($result);
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        
              
        
        
        
    </head>
    <body>
        
        <?php
            echo "<div style='width:inherit;height:inherit;position: fixed;z-index: 1;'><img style='position:fixed;z-index:1;height:32rem;' width='60%' id ='ph' src='".$dir.$first[0][0]."'></div>";
        echo "<div id ='sdes' style='color:grey;font-size:1.5em;width:60%;height: 6rem;position: fixed;top:30rem;z-index:2;opacity:0.9;'>".$first[0][1]."</div>";
                    
                echo "<div style='width: 60%;top:28rem;left:auto;right: auto;z-index: 3;position:fixed;display: inline-block;text-align: center;'>   sasdad
                </div>";
        ?>
        <script type="text/javascript">
            var counter=0;
            var max=<?php echo $size;?>;
            
            
            var p=
                <?php
               
                echo 'new Array('.$size.');';
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
                
                
                ?>;
            
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
    </body>
</html>
<!--
 echo "<div style='width:inherit;height:inherit;position: fixed;z-index: 1;'><img style='position:fixed;z-index:1;height:32rem;' width='60%' src='im/h/h3.jpg'></div>";
                
                echo "<div style='color:blue;width:inherit;height: 6rem;position: fixed;top:30rem;z-index:2;opacity:0.9;'>"."Welcome to SnJ Enterpirse."."</div>";
                    
                echo "<div style='width: 60%;top:28rem;left:auto;right: auto;z-index: 3;position:fixed;display: inline-block;text-align: center;'>
                    sasdad
                </div>";
mysqli_close($link);
-->