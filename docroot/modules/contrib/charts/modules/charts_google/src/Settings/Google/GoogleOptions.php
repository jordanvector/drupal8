<?php

namespace Drupal\charts_google\Settings\Google;

/**
 * Class GoogleOptions.
 *
 * @package Drupal\charts_google\Settings\Google
 */
class GoogleOptions implements \JsonSerializable {

  /**
   * For Material Charts, this option specifies the title.
   */
  private $title;

  /**
   * For Material Charts, this option specifies the subtitle.
   */
  private $subTitle;

  /**
   * Where to place the chart title, compared to the chart area.
   */
  private $titlePosition;

  /**
   * Where to place the axis titles, compared to the chart area.
   */
  private $axisTitlesPosition;

  /**
   * An array with members to configure the placement and size of the chart
   * area.
   */
  private $chartArea;

  /**
   * Specifies properties for individual horizontal axes, if the chart has
   * multiple horizontal axes.
   */
  private $hAxes;

  /**
   * An array with members to configure various vertical axis elements.
   */
  private $vAxes;

  /**
   * The colors to use for the chart elements. An array of strings, where each
   * element is an HTML color string
   */
  private $colors;

  /**
   * An array with members to configure various aspects of the legend. Or string
   * for the position of the legend.
   */
  private $legend;

  /**
   * Width of the chart, in pixels.
   */
  private $width;

  /**
   * Height of the chart, in pixels.
   */
  private $height;

  /**
   * Gets the title of the Material Chart. Only Material Charts support titles.
   *
   * @return mixed
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * Sets the title of the Material Chart. Only Material Charts support titles.
   *
   * @param string $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * Gets the subtitle of the Material Chart. Only Material Charts support
   * subtitle.
   *
   * @return mixed
   */
  public function getSubTitle() {
    return $this->subTitle;
  }

  /**
   * Sets the subtitle of the Material Chart. Only Material Charts support
   * subtitle.
   *
   * @param string $title
   */
  public function setSubTitle($title) {
    $this->subTitle = $title;
  }

  /**
   * Gets the position of chart title.
   *
   * @return mixed
   */
  public function getTitlePosition() {
    return $this->titlePosition;
  }

  /**
   * Sets the position of chart title.
   *
   * Supported values:
   * - in: Draw the title inside the chart area.
   * - out: Draw the title outside the chart area.
   * - none: Omit the title.
   *
   * @param mixed $position
   */
  public function setTitlePosition($position) {
    $this->titlePosition = $position;
  }

  /**
   * Gets the position of the axis titles.
   *
   * @return mixed
   */
  public function getAxisTitlesPosition() {
    return $this->axisTitlesPosition;
  }

  /**
   * Sets the position of the axis titles.
   *
   * Supported values:
   * - in: Draw the axis titles inside the chart area.
   * - out: Draw the axis titles outside the chart area.
   * - none: Omit the axis titles.
   *
   * @param mixed $position
   */
  public function setAxisTitlesPosition($position) {
    $this->axisTitlesPosition = $position;
  }

  /**
   * Gets the chartArea property.
   *
   * @return mixed
   */
  public function getChartArea() {
    return $this->chartArea;
  }

  /**
   * Sets the chartArea property.
   *
   * @param mixed $chartArea
   */
  public function setChartArea($chartArea) {
    $this->chartArea = $chartArea;
  }

  /**
   * Gets the horizontal axes.
   *
   * @return mixed
   */
  public function getHAxes() {
    return $this->hAxes;
  }

  /**
   * Sets the horizontal axes.
   *
   * @param mixed $hAxes
   */
  public function setHAxes($hAxes) {
    $this->hAxes = $hAxes;
  }

  /**
   * Gets the vertical axes.
   *
   * @return mixed
   */
  public function getVAxes() {
    return $this->vAxes;
  }

  /**
   * Sets the vertical axes.
   *
   * @param mixed $vAxes
   */
  public function setVAxes($vAxes) {
    $this->vAxes = $vAxes;
  }

  /**
   * Gets the colors to use for the chart elements. An array of strings, where
   * each element is an HTML color string.
   *
   * @return mixed
   */
  public function getColors() {
    return $this->colors;
  }

  /**
   * Sets the colors to use for the chart elements. An array of strings, where
   * each element is an HTML color string.
   *
   * @param mixed $colors
   */
  public function setColors($colors) {
    $this->colors = $colors;
  }

  /**
   * Gets the Legend properties.
   *
   * @return mixed
   */
  public function getLegend() {
    return $this->legend;
  }

  /**
   * Sets the Legend properties.
   *
   * @param mixed $legend
   */
  public function setLegend($legend) {
    $this->legend = $legend;
  }

  /**
   * Gets a Legend property.
   *
   * @param $key
   *   Property key.
   *
   * @return mixed
   */
  public function getLegendProperty($key) {
    return isset($this->legend[$key]) ? $this->legend[$key] : NULL;
  }

  /**
   * Sets a Legend property.
   *
   * @param $key
   *   Property key.
   * @param $value
   *   Property value.
   */
  public function setLegendProperty($key, $value) {
    $this->legend[$key] = $value;
  }

  /**
   * Gets the width of the chart.
   *
   * @return mixed
   */
  public function getWidth() {
    return $this->width;
  }

  /**
   * Sets the width of the chart.
   *
   * @param mixed $width
   *   Width of the chart, in pixels.
   */
  public function setWidth($width) {
    $this->width = $width;
  }

  /**
   * Gets the height of the chart.
   *
   * @return mixed
   */
  public function getHeight() {
    return $this->height;
  }

  /**
   * Sets the height of the chart.
   *
   * @param mixed $height
   *   Height of the chart, in pixels.
   */
  public function setHeight($height) {
    $this->height = $height;
  }

  /**
   * @return array
   */
  public function jsonSerialize() {
    $vars = get_object_vars($this);

    return $vars;
  }

}
