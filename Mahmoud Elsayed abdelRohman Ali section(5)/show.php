<?php
include_once "database.php";
if($_SERVER['REQUEST_METHOD']=="POST")//after submitted is implemented
{
    $departure=$_POST['departure'];
    $arrival=$_POST['arrival'];
    $train_type=$_POST['type'];
    $q="select * from book where depar_station=? and arriv_station=? and train_type=?";
    $p=array($departure,$arrival,$train_type);
    $row=$db->getRows($q,$p);
    $count=$db->getCount($q,$p);
    
    if($count>0)
    {
        foreach($row as $r)
        {
            $id=$r['train_id'];
            $arrival_station=$r['arriv_station'];
            $arrival_time=$r['arriv_time'];
             $departure_station=$r['depar_station'];
            $departure_time=$r['depar_time'];
            $tr_type=$r['train_type'];
        }
       
   
        
    }
    
   
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Available trains</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="train001.css">
</head>
<body>
     <div class="container">
        <div class="train_img"></div>
        <div class="info">Search Information</div>
        <div class="table_container">
            <table>
                <tr>
                    <th>trian number</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departue Time</th>
                    <th>Arrival Time</th>
                    <th>Train Type</th>
                </tr>
                <?php
                
                for($i=0;$i<$count;$i++)
                {
                    echo"<tr>
                    <td>$id</td>
                    <td>$arrival_station</td>
                    <td>$arrival_time</td>
                    <td>$departure_station</td>
                    <td>$departure_time</td>
                    <td>$tr_type</td>
                </tr>";
                }
                ?>
                
                
            </table>
        </div>
        <div class='search_again'><a href="index.php">Search Again</a></div>
     </div>
</body>
</html>