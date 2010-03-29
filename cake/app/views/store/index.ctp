<?php
	echo $javascript->link("jquery", false);
	echo $javascript->link("main", false);
	echo $javascript->link("swfobject.js", false);
?>

<div id="store_main_content">
  <div id="product_menu">
    <ul>
      <li><?php echo $html->link("All Items",
                        array('controller'=>'store','action'=>'show')); ?></li>
      <li><?php echo $html->link("Shirts",
                            array('controller'=>'store','action'=>'show')); ?></li>
      <li><?php echo $html->link("Coffee Mugs",
                            array('controller'=>'store','action'=>'show')); ?></li>
      <li><?php echo $html->link("Pens",
                            array('controller'=>'store','action'=>'show')); ?></li>
      <li><?php echo $html->link("Tote Bags",
                            array('controller'=>'store','action'=>'show')); ?></li>
    </ul>
  </div>
  
  <div id="item_display">
    dfb
  </div>
  
  <div id="shopping_cart">
    <table>
      <tr>
        <td class="item">
          blue pen
        </td>
        <td class="price">
          $2.99
        </td>
      </tr>
    </table>
  </div>
  
  <div class="clear"></div>
</div>