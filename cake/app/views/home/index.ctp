<div id='wrap'>
  <div id='main-title'>
    The Niche Line Builders
  </div>

  <div id='main-menu'>
    <ul>
      <li style="border:none;"><img src="img/end.png" alt="Menu"/></li>
      <li><?php echo $html->link(
                        $html->image("home.png", array('alt' => 'Home')),
                        array('controller'=>'home','action'=>'index'),
                        array('escape' => false)); ?></li>
      <li><?php echo $html->link(
                        $html->image("about.png", array('alt' => 'About Us')),
                        array('controller'=>'home','action'=>'about'),
                        array('escape' => false)); ?></a></li>
      <li><?php echo $html->link(
                        $html->image("photos.png", array('alt' => 'Photos')),
                        array('controller'=>'photos','action'=>'photos'),
                        array('escape' => false)); ?></li>
      <li><?php echo $html->link(
                        $html->image("builders.png", array('alt' => 'Builders')),
                        array('controller'=>'home','action'=>'builders'),
                        array('escape' => false)); ?></li>
      <li><?php echo $html->link(
                        $html->image("contact.png", array('alt' => 'Contact')),
                        array('controller'=>'home','action'=>'contact'),
                        array('escape' => false)); ?></li>
      <li><?php echo $html->link(
                        $html->image("store.png", array('alt' => 'Store')),
                        array('controller'=>'store','action'=>'index'),
                        array('escape' => false)); ?></li>
      <li style="border:none;"><img src="img/end_reverse.png" alt="Menu"/></li>
    </ul>
  </div>

  <div class='clear'></div>

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

  <div id='charity-info'>
    100% of your <a href='purchases'>PURCHASES</a> go to Local Charity <br/><br/>
    Tax Deductable
  </div>
  
  <div class='clear'></div>
  
</div><!-- end wrap-->