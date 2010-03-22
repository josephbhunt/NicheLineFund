<?php
class HomeController extends AppController {
  
  var $name = "Home";
  var $uses = array();
  var $helpers = array('Html','Javascript');
  
  function index(){
    $this->layout = 'main';
  }
  
  function about(){
    $this->layout = 'main';
  }
  
  function contact(){
    $this->layout = 'main';
  }
  
  function builders(){
    $this->layout = 'main';
  }
}
?>