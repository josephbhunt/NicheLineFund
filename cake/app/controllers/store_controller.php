<?php
class StoreController extends AppController{
  
  var $name = "Store";
  var $uses = array();
  var $helpers = array('Html','Javascript');
  
  function index(){
    $this->layout = 'main';
    //$items = $this->Item->query("select * from items;")
  }
  
  function show() {
    $this->layout = 'main';
    $this->render('/show/index');
  }
}
?>