
$(document).ready(function(){
  // 切换Tab
  $(".main-title-left").click(function(){
    $(".main-title-left").css({'background-color':'orange','font-weight': 'bold'});
    $(".main-title-right").css({'background-color':'gray','font-weight': 'normal'});
$(".load_more").show();
    // $(".main-iframe-first").show();
    // $(".main-iframe-second").hide();
$(".main-iframe-first").removeAttr('hidden');
        $(".main-iframe-second").attr("hidden","true");
  });

     $(".main-title-right").click(function(){
    $(".main-title-right").css({'background-color': 'orange','font-weight': 'bold'});
   $(".main-title-left").css({'background-color':'gray','font-weight':'normal'});
        // $(".main-iframe-first").hide();
        // $(".main-iframe-second").show();
        $(".load_more").hide();
        $(".main-iframe-second").removeAttr('hidden');
        $(".main-iframe-first").attr("hidden","true");

});
   });




