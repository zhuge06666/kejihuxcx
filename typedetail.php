<!DOCTYPE html>
<html>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<head>
<script src="jquery-1.8.3.min.js" type="text/javascript"></script>
    <title></title>
</head>
<body style="background-color:#F2F2F2;">
<div style="width:100%;margin:0 auto;text-align: center">

<?php
include 'conn.php';
$sectype=$_GET['type'];
$title="";
  switch ($sectype) {
      case 1:
          $title="游戏";
          break;
       case 2:
          $title="视频";
          break;
          case 3:
          $title="社交";
          break;
          case 4:
          $title="旅游";
          break;
          case 5:
          $title="出行";
          break;
          case 6:
          $title="生活";
          break;
           case 7:
          $title="购物";
          break;
          case 8:
          $title="教育";
          break;
          case 9:
          $title="办公";
          break;
          case 10:
          $title="音乐";
          break;
          case 11:
          $title="工具";
          break;
          case 12:
          $title="阅读";
          break;
      default:
          break;
  }
?>
<h1><?=$title?></h1>
</div>
<div style="text-align: center;">
  输入关键词:<input id="inputsosuo">
</div>
<div style="width: 100%;" id='items'>
<?php

$sql="select * from tb_xcx where type=1 and secoundtype=".$sectype;
$query=mysql_query($sql);
while ($row=mysql_fetch_array($query)) {

?>
    <div style="width:100%;margin:0 auto;text-align: center">
    <input id="sectype" hidden="true" value="<?=$sectype?>" />
    <a href="detail.php?id=<?=$row['id']?>"><div class="item" style="float:left;width:50%; margin:0.5em auto;">
       <div style="width:100%;">
          <img src="../kejihuhoutai/images/<?=$row['img']?>" alt="" style="width:8em;height:8em;" />
       </div>
    <text style="text-align: center"><?=$row['title']?></text>
</div>
</a>
</div>
<?php
}
?>
</div>
<script type="text/javascript">
var values="";
var sectype=$("#sectype").val();
  $("#inputsosuo").on("change", function(){
       values=$("#inputsosuo").val();
        ajaxsousuo(values,sectype);
});
function ajaxsousuo(v,s){
 $.ajax({
  type:'GET',
  url:"sousuo.php?key="+v+"&&sectype="+s,
   success:function(res){
      $("#items").replaceWith(res);
     }
     })
}
</script>
</body>
</html>
