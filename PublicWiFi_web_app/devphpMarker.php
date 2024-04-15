<?php
header("Content-type:text/xml; charset=UTF-8");              
header("Cache-Control: no-store, no-cache, must-revalidate");             
header("Cache-Control: post-check=0, pre-check=0", false);   
mysql_connect("localhost","root","123456") or die("Cannot connect the Server");
mysql_select_db("project_db") or die("Cannot select database");
mysql_query("set character set utf8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<markers>
<?php
$q="SELECT * FROM location WHERE 1 ORDER BY user_id LIMIT 30 ";
$qr=mysql_query($q);
while($rs=mysql_fetch_array($qr)){
?>
   <marker id="<?=$rs['user_id']?>">      
        <latitude><?=$rs['user_latitude']?></latitude>
        <longitude><?=$rs['user_longitude']?></longitude>
		<zoom><?=$rs['user_zoom']?></zoom>
    </marker>
<?php } ?>
</markers>