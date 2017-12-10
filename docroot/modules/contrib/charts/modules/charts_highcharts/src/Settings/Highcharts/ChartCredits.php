<?php

namespace Drupal\charts_highcharts\Settings\Highcharts;

class ChartCredits implements \JsonSerializable {
  private $enabled = FALSE;

  /**
   * @return boolean
   */
  public function isEnabled() {
    return $this->enabled;
  }

  /**
   * @param boolean $enabled
   */
  public function setEnabled($enabled) {
    $this->enabled = $enabled;
  }

  /**
   * @return array
   */
  public function jsonSerialize() {
    $vars = get_object_vars($this);

    return $vars;
  }

}
