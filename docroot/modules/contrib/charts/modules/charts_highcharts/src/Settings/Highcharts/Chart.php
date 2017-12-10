<?php

namespace Drupal\charts_highcharts\Settings\Highcharts;

class Chart implements \JsonSerializable {
  private $type;
  private $width = NULL ;
  private $height = NULL ;
  
   /**
   * @return mixed
   */
  public function getType() {
    return $this->type;
  }

  /**
   * @param mixed $type
   */
  public function setType($type) {
    $this->type = $type;
  }
 /**
   * @return mixed 
   */
  public function getWidth() {
    return $this->width;
  }
  /**
   * @param mixed $width
   */
  public function setWidth($width) {
    if (empty($width)) {
     $this->width = NULL;
    } else {
    $this->width = (int)$width;
    }
  }

  /**
   * @return mixed 
   */
  public function getHeight() {
    return $this->height;
  }
  
  /**
   * @param mixed $height
   */
 
  public function setHeight($height) {
    if (empty($height)) {
     $this->height = NULL;
    } else {
     $this->height = (int)$height;
    }
  }
  
  /**
   * @return array
   */
  
  public function jsonSerialize() {
    $vars = get_object_vars($this);

    if ($vars['type'] == 'pie' || $vars['type'] == 'donut') {
      unset($vars['x']);
    }

    return $vars;
  }

}
