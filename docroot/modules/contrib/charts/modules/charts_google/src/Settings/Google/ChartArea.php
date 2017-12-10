<?php

namespace Drupal\charts_google\Settings\Google;

/**
 * Class ChartArea.
 *
 * @package Drupal\charts_google\Settings\Google
 */
class ChartArea implements \JsonSerializable {

  /**
   * Chart area width.
   */
  private $width;

  /**
   * Chart area height.
   */
  private $height;

  /**
   * How far to draw the chart from the top border.
   */
  private $top;

  /**
   * How far to draw the chart from the left border.
   */
  private $left;

  /**
   * Gets the chart area width.
   *
   * @return mixed
   */
  public function getWidth() {
    return $this->width;
  }

  /**
   * Sets the chart area width.
   *
   * @param mixed $width
   */
  public function setWidth($width) {
    $this->width = $width;
  }

  /**
   * Gets the chart area height.
   *
   * @return mixed
   */
  public function getHeight() {
    return $this->height;
  }

  /**
   * Sets the chart area height.
   *
   * @param mixed $height
   */
  public function setHeight($height) {
    $this->height = $height;
  }

  /**
   * Gets how far to draw the chart from the top border.
   *
   * @return mixed
   */
  public function getPaddingTop() {
    return $this->top;
  }

  /**
   * Sets how far to draw the chart from the top border.
   *
   * @param mixed $top
   */
  public function setPaddingTop($top) {
    $this->top = $top;
  }

  /**
   * Gets how far to draw the chart from the left border.
   *
   * @return mixed
   */
  public function getPaddingLeft() {
    return $this->left;
  }

  /**
   * Sets how far to draw the chart from the left border.
   *
   * @param mixed $left
   */
  public function setPaddingLeft($left) {
    $this->left = $left;
  }

  /**
   * @return array
   */
  public function jsonSerialize() {
    $vars = get_object_vars($this);

    return $vars;
  }

}
