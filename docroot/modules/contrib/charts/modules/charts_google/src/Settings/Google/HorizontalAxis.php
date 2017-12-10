<?php

namespace Drupal\charts_google\Settings\Google;

/**
 * Class HorizontalAxis.
 *
 * @package Drupal\charts_google\Settings\Google
 *
 * hAxis options are described here:
 * @see https://developers.google.com/chart/interactive/docs/gallery/columnchart#configuration-options
 */
class HorizontalAxis implements \JsonSerializable {

  /**
   * hAxis property that specifies a title for the horizontal axis.
   */
  private $title;

  /**
   * An array that specifies the horizontal axis title text style.
   */
  private $titleTextStyle;

  /**
   * hAxis property that specifies the baseline for the horizontal axis. If the
   * baseline is larger than the highest grid line or smaller than the lowest
   * grid line, it will be rounded to the closest gridline.
   */
  private $baseline;

  /**
   * Specifies the color of the baseline for the horizontal axis. Can be any HTML
   * color string, for example: 'red' or '#00cc00'.
   */
  private $baselineColor;

  /**
   * The direction in which the values along the horizontal axis grow. Specify -1
   * to reverse the order of the values.
   */
  private $direction;

  /**
   * A format string for numeric axis labels.
   */
  private $format;

  /**
   * Position of the horizontal axis text, relative to the chart area.
   * Supported values: 'out', 'in', 'none'.
   */
  private $textPosition;

  /**
   * An array that specifies the horizontal axis text style.
   */
  private $textStyle;

  /**
   * Moves the max value of the horizontal axis to the specified value; this will
   * be upward in most charts. Ignored if this is set to a value smaller than
   * the maximum y-value of the data.
   */
  private $maxValue;

  /**
   * Moves the min value of the horizontal axis to the specified value; this will
   * be downward in most charts. Ignored if this is set to a value greater than
   * the minimum y-value of the data.
   */
  private $minValue = 0;

  /**
   * Specifies how to scale the horizontal axis to render the values within the
   * chart area.
   */
  private $viewWindowMode;

  /**
   * Specifies the cropping range of the horizontal axis.
   */
  private $viewWindow;

  /**
   * Get hAxis property that specifies a title for the horizontal axis.
   *
   * @return mixed
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Set hAxis property that specifies a title for the horizontal axis.
   *
   * @param $value
   */
  public function setTitle($value) {
    $this->title = $value;
  }

  /**
   * Get an array that specifies the horizontal axis title text style.
   *
   * @return mixed
   */
  public function getTitleTextStyle() {
    return $this->titleTextStyle;
  }

  /**
   * Set an array that specifies the horizontal axis title text style.
   *
   * @param mixed $value
   */
  public function setTitleTextStyle($value) {
    $this->titleTextStyle = $value;
  }

  /**
   * Get an array property that specifies the horizontal axis title text style.
   *
   * @param string $key
   *   Machine name of the text style property.
   *
   * @return mixed
   */
  public function getTitleTextStyleValue($key) {
    return isset($this->titleTextStyle[$key]) ? $this->titleTextStyle[$key] : NULL;
  }

  /**
   * Set an array property that specifies the horizontal axis title text style.
   *
   * @param string $key
   *   Machine name of the text style property.
   * @param mixed $value
   *   Value of the text style property.
   */
  public function setTitleTextStyleValue($key, $value) {
    $this->titleTextStyle[$key] = $value;
  }

  /**
   * Get hAxis property that specifies the baseline for the horizontal axis.
   *
   * @return mixed
   */
  public function getBaseline() {
    return $this->baseline;
  }

  /**
   * Set hAxis property that specifies the baseline for the horizontal axis.
   *
   * @param mixed $value
   */
  public function setBaseline($value) {
    $this->baseline = $value;
  }

  /**
   * Get the color of the baseline for the horizontal axis.
   *
   * @return mixed
   */
  public function getBaselineColor() {
    return $this->baselineColor;
  }

  /**
   * Set the color of the baseline for the horizontal axis.
   *
   * @param mixed $value
   */
  public function setBaselineColor($value) {
    $this->baselineColor = $value;
  }

  /**
   * Get the direction in which the values along the horizontal axis grow.
   *
   * @return mixed
   */
  public function getDirection() {
    return $this->direction;
  }

  /**
   * Set the direction in which the values along the horizontal axis grow.
   *
   * @param mixed $value
   */
  public function setDirection($value) {
    $this->direction = $value;
  }

  /**
   * Get the format string for numeric axis labels
   *
   * @return mixed
   */
  public function getFormat() {
    return $this->format;
  }

  /**
   * Set a format string for numeric axis labels
   *
   * @param mixed $value
   */
  public function setFormat($value) {
    $this->format = $value;
  }

  /**
   * Get the position of the horizontal axis text, relative to the chart area.
   *
   * @return mixed
   */
  public function getTextPosition() {
    return $this->textPosition;
  }

  /**
   * Set the position of the horizontal axis text, relative to the chart area.
   *
   * @param mixed $value
   */
  public function setTextPosition($value) {
    $this->textPosition = $value;
  }

  /**
   * Get an array that specifies the horizontal axis text style.
   *
   * @return mixed
   */
  public function getTextStyle() {
    return $this->textStyle;
  }

  /**
   * Set an array that specifies the horizontal axis text style.
   *
   * @param mixed $value
   */
  public function setTextStyle($value) {
    $this->textStyle = $value;
  }

  /**
   * Get an array property that specifies the horizontal axis text style.
   *
   * @param string $key
   *   Machine name of the text style property.
   *
   * @return mixed
   */
  public function getTextStyleValue($key) {
    return isset($this->textStyle[$key]) ? $this->textStyle[$key] : NULL;
  }

  /**
   * Set an array property that specifies the horizontal axis text style.
   *
   * @param string $key
   *   Machine name of the text style property.
   * @param mixed $value
   *   Value of the text style property.
   */
  public function setTextStyleValue($key, $value) {
    $this->textStyle[$key] = $value;
  }

  /**
   * Get the max value of the horizontal axis.
   *
   * @return mixed
   */
  public function getMaxValue() {
    return $this->maxValue;
  }

  /**
   * Set the max value of the horizontal axis.
   *
   * @param mixed $value
   */
  public function setMaxValue($value) {
    $this->maxValue = $value;
  }

  /**
   * Get the min value of the horizontal axis.
   *
   * @return mixed
   */
  public function getMinValue() {
    return $this->minValue;
  }

  /**
   * Set the min value of the horizontal axis.
   *
   * @param mixed $value
   */
  public function setMinValue($value) {
    $this->minValue = $value;
  }

  /**
   * Get the value that specifies how to scale the horizontal axis to render the
   * values within the chart area.
   *
   * @return mixed
   */
  public function getViewWindowMode() {
    return $this->viewWindowMode;
  }

  /**
   * Set the value that specifies how to scale the horizontal axis to render the
   * values within the chart area.
   *
   * @param mixed $value
   */
  public function setViewWindowMode($value) {
    $this->viewWindowMode = $value;
  }

  /**
   * Get an array that specifies the cropping range of the horizontal axis.
   *
   * @return mixed
   */
  public function getViewWindow() {
    return $this->viewWindow;
  }

  /**
   * Set an array that specifies the cropping range of the horizontal axis.
   *
   * @param mixed $value
   */
  public function setViewWindow($value) {
    $this->viewWindow = $value;
  }

  /**
   * Get an array property that specifies the the cropping range of the
   * horizontal axis.
   *
   * @param string $key
   *   Property key.
   *
   * @return mixed
   */
  public function getViewWindowValue($key) {
    return isset($this->viewWindow[$key]) ? $this->viewWindow[$key] : NULL;
  }

  /**
   * Set an array property that specifies the cropping range of the horizontal
   * axis.
   *
   * @param string $key
   *   Property key.
   * @param mixed $value
   *   Property value.
   */
  public function setViewWindowValue($key, $value) {
    $this->viewWindow[$key] = $value;
  }

  /**
   * @return array
   */
  public function jsonSerialize() {
    $vars = get_object_vars($this);
    return $vars;
  }

}
