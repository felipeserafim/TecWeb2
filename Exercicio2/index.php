<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
      
       
 <?php
      
            echo "<table width='0' border='1'> 
                <tr>
                    <td><b>ID</td>   
                    <td><b>NOME</td> 
                    <td><b>DESC</td>
                </tr>";
                    
            for($i = 1; $i<7; $i = $i + 1){ 
                if ($i % 2 == 0){
                    echo "<tr > 
                            <td><b>id</td>   
                            <td><b>nome</td> 
                            <td><b>desc</td> 
                        </tr>";
                }            
                else {    
                    echo "<tr> 
                        <td>id</td>   
                        <td>nome</td> 
                        <td>desc</td> 
                    </tr>";
                }
                    
                } 
            echo "</table>";
        ?>
 
        
    </body>
</html>
