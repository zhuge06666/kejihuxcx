<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>科技狐</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="index.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="all">
<div id="loading" class="loader">
</div>
<div class="header">
	<div class="container">
    </div>
</div>
<div class="main-title">
                <text class="main-title-left">
                    &nbsp;&nbsp;测评小程序&nbsp;&nbsp;
                </text>
                <text class="main-title-right">
                    &nbsp;&nbsp;其他小程序&nbsp;&nbsp;
                </text>
    </div>
<div class="main-iframe">
     <div class="main-iframe-first">
 <!-- 取出数据循环遍历数组显示 -->

<?php
include("conn.php");
$sql="select * from tb_xcx where type=0 order by id desc limit 0,5";
$r=mysql_query($sql);
while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<div class="main-iframe-second" hidden="true">
      <div class="classify-1 btn-classify"  onclick="show('1')">
          <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-1">游戏
          <div style="float:right;font-size: 0.3em;" onclick="godetail('1')">
        查看更多>
      </div>
      </div>

      <div class="classify-detail-1" id="classify-detail-1">
      <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=1 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
 </div>
 <hr>
 <div class="classify-2 btn-classify" onclick="show('2')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-2">视频
               <div style="float:right;font-size: 0.3em;" onclick="godetail('2')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-2" id="classify-detail-2">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=2 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-3 btn-classify" onclick="show('3')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-3">社交
               <div style="float:right;font-size: 0.3em;" onclick="godetail('3')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-3" id="classify-detail-3">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=3 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-4 btn-classify" onclick="show('4')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-4">旅游
               <div style="float:right;font-size: 0.3em;" onclick="godetail('4')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-4" id="classify-detail-4">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=4 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-5 btn-classify" onclick="show('5')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-5">出行
               <div style="float:right;font-size: 0.3em;" onclick="godetail('5')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-5" id="classify-detail-5">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=5 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-6 btn-classify" onclick="show('6')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-6">生活
               <div style="float:right;font-size: 0.3em;" onclick="godetail('6')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-6" id="classify-detail-6">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=6 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-7 btn-classify" onclick="show('7')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-7">购物
               <div style="float:right;font-size: 0.3em;" onclick="godetail('7')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-7" id="classify-detail-7">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=7 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-8 btn-classify" onclick="show('8')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-8">教育
               <div style="float:right;font-size: 0.3em;" onclick="godetail('8')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-8" id="classify-detail-8">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=8 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-9 btn-classify" onclick="show('9')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-9">办公
               <div style="float:right;font-size: 0.3em;" onclick="godetail('9')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-9" id="classify-detail-9">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=9 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-10 btn-classify" onclick="show('10')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-10">音乐
               <div style="float:right;font-size: 0.3em;" onclick="godetail('10')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-10" id="classify-detail-10">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=10 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-11 btn-classify" onclick="show('11')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-11">工具
               <div style="float:right;font-size: 0.3em;" onclick="godetail('11')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-11" id="classify-detail-11">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=11 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
<div class="classify-12 btn-classify" onclick="show('12')">
              <img src="images/arrow-down.jpg" alt="" style="width: 0.5em;height:0.5em;line-height:0.5em;margin:0.2em;" id="img-classify-12">阅读
               <div style="float:right;font-size: 0.3em;" onclick="godetail('12')">
        查看更多>
      </div>
      </div>
      <div class="classify-detail-12" id="classify-detail-12">
            <?php
      $sql="select * from tb_xcx where type=1 and secoundtype=12 limit 0,3";
      $r=mysql_query($sql);
      while ($rs=mysql_fetch_array($r)) {
    echo '<a href="detail.php?id='.$rs['id'].'"> <div class="item">
    <img src="../kejihuhoutai/images/'.$rs['img'].'" alt="" class="img" />
    <text>'.$rs['title'].'</text>
</div>
</a>';
}
?>
</div>
<hr>
</div>
<div class="load_more">
    ----点击加载更多----
</div>
</div>
</div>
<!-- 加载更多的实现方式 -->
<script type="text/javascript">
var page=0;


 $(".load_more").click(function(event) {
$("#loading").css('display','block');
page++;
$.ajax({
  type:'GET',
  url:"loadmore.php?page="+page,
   success:function(res){
    if(res==""){
     $(".load_more").html("没有更多数据了");
       $(".load_more").unbind('click');
      $("#loading").fadeOut(800);
      }else{
       $(".main-iframe-first").append(res);
       $("#loading").fadeOut(800);
   }
     }
     })
        });

     function godetail(n){
         event.stopPropagation();
         window.location.href='typedetail.php?type='+n;
     }
//其他小程序分类显示
     function show(n){

     var cls=".classify-detail-"+n;
     var ims="#img-classify-"+n;
     if($(cls).css('display')=='none'){
        $(cls).css('display','block');
        $(ims).attr('src',"images/arrow-down.jpg");
     }else{
        $(cls).css('display','none');
        $(ims).attr('src',"images/arrow-right.jpg");
     }
}
</script>
</body>
</html>
