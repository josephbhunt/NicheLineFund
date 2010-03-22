<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
		echo $html->meta('icon');
		echo $html->css('stylesheet');
		echo $scripts_for_layout;
	?>
  <title>Niche Line Builders</title>
</head>
<body>
  
  <div id="container">
    <div id='wrap'>
      <div id='main-title'>
        The Niche Line Builders
      </div>

      <div id='main-menu'>
        <ul>
          <li style="border:none;"><?php echo $html->image("end.png", array('alt' => 'menu')) ?></li>
          <li><?php echo $html->link(
                            $html->image("home_bright.png", array('alt' => 'Home')),
                            array('controller'=>'home','action'=>'index'),
                            array('escape' => false)); ?></li>
          <li><?php echo $html->link(
                            $html->image("about_bright.png", array('alt' => 'About Us')),
                            array('controller'=>'home','action'=>'about'),
                            array('escape' => false)); ?></a></li>
          <li><?php echo $html->link(
                            $html->image("photos_bright.png", array('alt' => 'Photos')),
                            array('controller'=>'photos','action'=>'photos'),
                            array('escape' => false)); ?></li>
          <li><?php echo $html->link(
                            $html->image("builders_bright.png", array('alt' => 'Builders')),
                            array('controller'=>'home','action'=>'builders'),
                            array('escape' => false)); ?></li>
          <li><?php echo $html->link(
                            $html->image("contact_bright.png", array('alt' => 'Contact')),
                            array('controller'=>'home','action'=>'contact'),
                            array('escape' => false)); ?></li>
          <li><?php echo $html->link(
                            $html->image("store.png", array('alt' => 'Store')),
                            array('controller'=>'store','action'=>'index'),
                            array('escape' => false)); ?></li>
          <li style="border:none;"><?php echo $html->image("end_reverse.png", array('alt' => 'menu')) ?></li>
        </ul>
      </div>

      <div class='clear'></div>
      <?php echo $content_for_layout; ?>
    </div><!-- end wrap-->
  </div><!-- end container -->

  <div id='footer'>
    Created by the 481 Group
  </div>
</body>
</html>