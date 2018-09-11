<?php
include("conn.php");
$key=$_GET['key'];
$sectype=$_GET['sectype'];
$sql="select * from tb_xcx where type=1 and secoundtype=".$sectype." and title like '%".$key."%'";
$r=mysql_query($sql);
echo "<div style='width: 100%;' id='items'>";
while($rs=mysql_fetch_array($r)){
    echo "<div style='width:100%;margin:0 auto;text-align: center'>
      <input id='sectype' hidden='true' value='".$sectype."'/>
        <a href='detail.php?id=".$rs['id']."'><div class='item' style='float:left;width:50%; margin:0.5em auto;'>
           <div style='width:100%;'>
              <img src='../kejihuhoutai/images/".$rs['img']."' alt='' style='width:8em;height:8em;' />
           </div>
        <text style='text-align: center'>".$rs['title']."</text>
    </div>
    </a>
    </div>";
}
    echo "</div>";
