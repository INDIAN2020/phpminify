<?php  final class WebDriverElement extends WebDriverContainer {  protected function fn0() {  return array(  'active' => 'POST',  'click' => 'POST',  'submit' => 'POST',  'text' => 'GET',  's18' => 'POST',  'p15' => 'GET',  'clear' => 'POST',  'selected' => 'GET',  'enabled' => 'GET',  'attribute' => 'GET',  'equals' => 'GET',  'displayed' => 'GET',  'location' => 'GET',  'location_in_view' => 'GET',  'size' => 'GET',  'css' => 'GET',  );  }  private $id;  public function __construct($q16, $id) {  $this->id = $id;  parent::__construct($q16);  }  public function fn9() {  return $this->id;  }  protected function fn23($fn8_id) {  return preg_replace(sprintf('/%s$/', $this->id), $fn8_id, $this->q16);  }  } 