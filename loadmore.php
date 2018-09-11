<?php
include("conn.php");
//获取页数回调主页
$page=$_GET['page'];
$offset=$page*5;
$sql="select * from tb_xcx where type=0 order by id desc limit {$offset},5";
$r=mysql_query($sql);
while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}