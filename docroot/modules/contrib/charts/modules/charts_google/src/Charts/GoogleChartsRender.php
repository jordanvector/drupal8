<?php

namespace Drupal\charts_google\Charts;

use Drupal\charts\Charts\ChartsRenderInterface;
use Drupal\charts\Util\Util;
use Drupal\charts_google\Settings\Google\GoogleOptions;
use Drupal\charts_google\Settings\Google\ChartType;
use Drupal\charts_google\Settings\Google\ChartArea;
use Drupal\charts_google\Settings\Google\HorizontalAxis;
use Drupal\charts_google\Settings\Google\VerticalAxis;

class GoogleChartsRender implements ChartsRenderInterface {

  public function __construct() {
    Util::checkMissingLibrary('charts_google', '/vendor/google/loader.js');
  }

  /**
   * Creates a JSON Object formatted for Google charts to use
   * @param array $categories
   * @param array $seriesData
   *
   * @return json|string
   */
  public function charts_render_charts($options, $categories = [], $seriesData = [], $attachmentDisplayOptions = [], &$variables, $chartId) {

    $categoriesCount = count($categories);
    $seriesCount = count($seriesData);

    // Creates an array of the length of the series data.
    $dataCount = [];
    for ($x = 0; $x < $seriesCount; $x++) {
      $dataCountTemp = count($seriesData[$x]['data']);
      array_push($dataCount, $dataCountTemp);
    }

    $dataTable = [];
    for ($j = 0; $j < $categoriesCount; $j++) {
      $rowDataTable = [];
      for ($i = 0; $i < $seriesCount; $i++) {
        $rowDataTabletemp = $seriesData[$i]['data'][$j];
        array_push($rowDataTable, $rowDataTabletemp);
      }
      array_unshift($rowDataTable, $categories[$j]);
      array_push($dataTable, $rowDataTable);
    }

    $dataTableHeader = [];
    for ($r = 0; $r < $seriesCount; $r++) {
      array_push($dataTableHeader, $seriesData[$r]['name']);
    }
    array_unshift($dataTableHeader, 'label');
    array_unshift($dataTable, $dataTableHeader);

    $googleOptions = $this->charts_google_create_charts_options($options, $seriesData, $attachmentDisplayOptions);
    $googleChartType = $this->charts_google_create_chart_type($options);
    $variables['chart_type'] = 'google';
    $variables['attributes']['class'][0] = 'charts-google';
    $variables['attributes']['id'][0] = $chartId;
    $variables['content_attributes']['data-chart'][] = json_encode($dataTable);
    $variables['attributes']['google-options'][1] = json_encode($googleOptions);
    $variables['attributes']['google-chart-type'][2] = json_encode($googleChartType);
  }

  /**
   * @param $options
   * @param array $seriesData
   * @param array $attachmentDisplayOptions
   * @return GoogleOptions object with chart options or settings to be used by google visualization framework
   */
  private function charts_google_create_charts_options($options, $seriesData = [], $attachmentDisplayOptions = []) {
    $noAttachmentDisplays = count($attachmentDisplayOptions) === 0;

    $chartSelected = [];
    $seriesTypes = [];

    $firstVaxis = new VerticalAxis();

    if (isset($options['yaxis_min'])) {
      $firstVaxis->setMinValue($options['yaxis_min']);
    }

    if (isset($options['yaxis_view_min'])) {
      $firstVaxis->setViewWindowValue('min', $options['yaxis_view_min']);
    }

    if (isset($options['yaxis_view_max'])) {
      $firstVaxis->setViewWindowValue('max', $options['yaxis_view_max']);
    }

    if (isset($options['yaxis_max'])) {
      $firstVaxis->setMaxValue($options['yaxis_max']);
    }

    // A format string for numeric or date axis labels.
    if (isset($options['yaxis_title'])) {
      $firstVaxis->setTitle($options['yaxis_title']);
    }

    if (isset($options['yaxis_title_color'])) {
      $firstVaxis->setTitleTextStyleValue('color', $options['yaxis_title_color']);
    }

    if (isset($options['yaxis_title_font'])) {
      $firstVaxis->setTitleTextStyleValue('fontName', $options['yaxis_title_font']);
    }

    if (isset($options['yaxis_title_size'])) {
      $firstVaxis->setTitleTextStyleValue('fontSize', $options['yaxis_title_size']);
    }

    if (isset($options['yaxis_title_bold'])) {
      $firstVaxis->setTitleTextStyleValue('bold', $options['yaxis_title_bold']);
    }

    if (isset($options['yaxis_title_italic'])) {
      $firstVaxis->setTitleTextStyleValue('italic', $options['yaxis_title_italic']);
    }

    // Axis title position.
    if (isset($options['yaxis_title_position'])) {
      $firstVaxis->setTextPosition($options['yaxis_title_position']);
    }

    if (isset($options['yaxis_baseline'])) {
      $firstVaxis->setBaseline($options['yaxis_baseline']);
    }

    if (isset($options['yaxis_baseline_color'])) {
      $firstVaxis->setBaselineColor($options['yaxis_baseline_color']);
    }

    if (isset($options['yaxis_direction'])) {
      $firstVaxis->setDirection($options['yaxis_direction']);
    }

    // A format string for numeric or date axis labels.
    if (isset($options['yaxis_format'])) {
      $firstVaxis->setFormat($options['yaxis_format']);
    }

    if (isset($options['yaxis_view_window_mode'])) {
      $firstVaxis->setViewWindowMode($options['yaxis_view_window_mode']);
    }

    $firstHaxis = new HorizontalAxis();

    if (isset($options['xaxis_min'])) {
      $firstHaxis->setMinValue($options['xaxis_min']);
    }

    if (isset($options['xaxis_view_min'])) {
      $firstHaxis->setViewWindowValue('min', $options['xaxis_view_min']);
    }

    if (isset($options['xaxis_view_max'])) {
      $firstHaxis->setViewWindowValue('max', $options['xaxis_view_max']);
    }

    if (isset($options['xaxis_max'])) {
      $firstHaxis->setMaxValue($options['xaxis_max']);
    }

    // A format string for numeric or date axis labels.
    if (isset($options['xaxis_title'])) {
      $firstHaxis->setTitle($options['xaxis_title']);
    }

    if (isset($options['xaxis_title_color'])) {
      $firstHaxis->setTitleTextStyleValue('color', $options['xaxis_title_color']);
    }

    if (isset($options['xaxis_title_font'])) {
      $firstHaxis->setTitleTextStyleValue('fontName', $options['xaxis_title_font']);
    }

    if (isset($options['xaxis_title_size'])) {
      $firstHaxis->setTitleTextStyleValue('fontSize', $options['xaxis_title_size']);
    }

    if (isset($options['xaxis_title_bold'])) {
      $firstHaxis->setTitleTextStyleValue('bold', $options['xaxis_title_bold']);
    }

    if (isset($options['xaxis_title_italic'])) {
      $firstHaxis->setTitleTextStyleValue('italic', $options['xaxis_title_italic']);
    }

    // Axis title position.
    if (isset($options['xaxis_title_position'])) {
      $firstHaxis->setTextPosition($options['xaxis_title_position']);
    }

    if (isset($options['xaxis_baseline'])) {
      $firstHaxis->setBaseline($options['xaxis_baseline']);
    }

    if (isset($options['xaxis_baseline_color'])) {
      $firstHaxis->setBaselineColor($options['xaxis_baseline_color']);
    }

    if (isset($options['xaxis_direction'])) {
      $firstHaxis->setDirection($options['xaxis_direction']);
    }

    // A format string for numeric or date axis labels.
    if (isset($options['xaxis_format'])) {
      $firstHaxis->setFormat($options['xaxis_format']);
    }

    if (isset($options['xaxis_view_window_mode'])) {
      $firstHaxis->setViewWindowMode($options['xaxis_view_window_mode']);
    }

    $vAxes = [];
    $hAxes = [];

    array_push($vAxes, $firstVaxis);
    array_push($hAxes, $firstHaxis);

    // Sets secondary axis from the first attachment only.
    if (!$noAttachmentDisplays && $attachmentDisplayOptions[0]['inherit_yaxis'] == 0) {
      $secondVaxis = new VerticalAxis();
      $secondVaxis->setTitle($attachmentDisplayOptions[0]['style']['options']['yaxis_title']);
      array_push($vAxes, $secondVaxis);
    }

    array_push($chartSelected, $options['type']);

    // @todo: make sure this works for more than one attachment.
    for ($i = 0; $i < count($attachmentDisplayOptions); $i++) {
      $attachmentChartType = $attachmentDisplayOptions[$i]['style']['options']['type'];

      if ($attachmentChartType == 'column') {
        $attachmentChartType = 'bars';
      }

      if ($attachmentDisplayOptions[$i]['inherit_yaxis'] == 0 && $i == 0) {
        $seriesTypes[$i + 1] = [
          'type'            => $attachmentChartType,
          'targetAxisIndex' => 1
        ];
      }
      else {
        $seriesTypes[$i + 1] = ['type' => $attachmentChartType];
      }

      array_push($chartSelected, $attachmentChartType);
    }

    $chartSelected = array_unique($chartSelected);
    $googleOptions = new GoogleOptions();

    if (count($chartSelected) > 1) {
      $parentChartType = $options['type'];

      if ($parentChartType == 'column') {
        $parentChartType = 'bars';
      }

      $googleOptions->seriesType = $parentChartType;
      $googleOptions->series = $seriesTypes;
    }

    $googleOptions->setTitle($options['title']);

    if (isset($options['subtitle'])) {
      $googleOptions->setSubTitle($options['subtitle']);
    }

    $googleOptions->setVAxes($vAxes);
    $googleOptions->setHAxes($hAxes);

    if (in_array('donut', $chartSelected)) {
      $googleOptions->pieHole = '0.5';
    }

    $chartArea = new ChartArea();

    // Chart Area width.
    if (isset($options['chart_area']['width'])) {
      $chartArea->setWidth($options['chart_area']['width']);
    }

    // Chart Area height.
    if (isset($options['chart_area']['height'])) {
      $chartArea->setHeight($options['chart_area']['height']);
    }

    // Chart Area padding top.
    if (isset($options['chart_area']['top'])) {
      $chartArea->setPaddingTop($options['chart_area']['top']);
    }

    // Chart Area padding left.
    if (isset($options['chart_area']['left'])) {
      $chartArea->setPaddingLeft($options['chart_area']['left']);
    }

    $seriesColors = [];
    for ($i = 0; $i < count($seriesData); $i++) {
      $seriesColor = $seriesData[$i]['color'];
      array_push($seriesColors, $seriesColor);
    }
    $googleOptions->setColors($seriesColors);

    // Width of the chart, in pixels.
    if (isset($options['width'])) {
      $googleOptions->setWidth($options['width']);
    }

    // Height of the chart, in pixels.
    if (isset($options['height'])) {
      $googleOptions->setHeight($options['height']);
    }

    // 'legend' can be a string (for position) or an array with legend
    // properties: [position: 'top', textStyle: [color: 'blue', fontSize: 16]]
    if (isset($options['legend'])) {
      $googleOptions->setLegend($options['legend']);
    }

    // Set legend position.
    if (isset($options['legend_position'])) {
      if(empty($options['legend_position'])) {
        $options['legend_position'] = 'none';
        $googleOptions->setLegend($options['legend_position']);
      } else {
        $googleOptions->setLegend($options['legend_position']);
      }
    }

    // Where to place the chart title, compared to the chart area.
    if (isset($options['title_position'])) {
      $googleOptions->setTitlePosition($options['title_position']);
    }

    // Where to place the axis titles, compared to the chart area
    if (isset($options['axis_titles_position'])) {
      $googleOptions->setAxisTitlesPosition($options['axis_titles_position']);
    }

    return $googleOptions;
  }

  /**
   * @param $options
   * @return ChartType
   */
  private function charts_google_create_chart_type($options) {
    $googleChartType = new ChartType();
    $googleChartType->setChartType($options['type']);

    return $googleChartType;
  }
}
