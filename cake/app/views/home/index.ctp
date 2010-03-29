<?php
	echo $javascript->link("jquery", false);
	echo $javascript->link("main", false);
	echo $javascript->link("swfobject.js", false);
?>

<div id="home_main_content">
  <div id='main-page-video'>
  
    <object type="application/x-shockwave-flash" 
            style="width:640px; height:385px;"
            data='http://www.youtube.com/v/tq5Q5ETQ_2o&hl=en_US&fs=1&color1=0x3a3a3a&color2=0x999999'>
          
      <param name="movie" value="http://www.youtube.com/v/tq5Q5ETQ_2o&hl=en_US&fs=1&color1=0x3a3a3a&color2=0x999999"></param>
      <param name="allowFullScreen" value="true"></param>
      <param name="allowscriptaccess" value="always"></param>
      <param name="autostart" value="true"></param>
    </object>
  </div>
  
  <div id="flashvideo">
    
  </div>
  
  <script type="text/javascript">
    var swfo = new SWFObject("http://www.youtube.com/v/tq5Q5ETQ_2o&hl=en_US&fs=1&color1=0x3a3a3a&color2=0x999999", "movie", 385, 640, "#000000")
  </script>

  <div id='charity-info'>
    100% of your <a href='purchases'>PURCHASES</a> go to Local Charity <br/><br/>
    Tax Deductable!
  </div>
  
  <div class='clear'></div>
</div>