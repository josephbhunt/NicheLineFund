<?php
class PhotosController extends AppController{
  
  var $name = "Photos";
  var $uses = array();
  var $helpers = array('Html', 'Javascript');
  
  function index(){
    $this->layout = 'main';
  }
}
?>