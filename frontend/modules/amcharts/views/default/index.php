<?php
use speixoto\amcharts\AmChartAsset;
AmChartAsset::register($this);

$css = <<<CSS
        
#chartbar {
	width		: 100%;
	height		: 500px;
	font-size	: 11px;  
}								
#chartpie {
	width		: 100%;
	height		: 500px;
	font-size	: 11px;
}

CSS;
$this->registerCss($css);

?>
<div id="chartbar"></div>
<div id="chartpie"></div>
<?php
$js1 = <<<JS

var chart = AmCharts.makeChart("chartbar", {
  "type": "serial",
  "theme": "light",
  "marginRight": 70,
  "dataProvider": [{
    "country": "USA",
    "visits": 3025,
    "color": "#FF0F00"
  }, {
    "country": "China",
    "visits": 1882,
    "color": "#FF6600"
  }, {
    "country": "Japan",
    "visits": 1809,
    "color": "#FF9E01"
  }, {
    "country": "Germany",
    "visits": 1322,
    "color": "#FCD202"
  }, {
    "country": "UK",
    "visits": 1122,
    "color": "#F8FF01"
  }, {
    "country": "France",
    "visits": 1114,
    "color": "#B0DE09"
  }, {
    "country": "India",
    "visits": 984,
    "color": "#04D215"
  }, {
    "country": "Spain",
    "visits": 711,
    "color": "#0D8ECF"
  }, {
    "country": "Netherlands",
    "visits": 665,
    "color": "#0D52D1"
  }, {
    "country": "Russia",
    "visits": 580,
    "color": "#2A0CD0"
  }, {
    "country": "South Korea",
    "visits": 443,
    "color": "#8A0CCF"
  }, {
    "country": "Canada",
    "visits": 441,
    "color": "#CD0D74"
  }],
  "valueAxes": [{
    "axisAlpha": 0,
    "position": "left",
    "title": "Visitors from country"
  }],
  "startDuration": 1,
  "graphs": [{
    "balloonText": "<b>[[category]]: [[value]]</b>",
    "fillColorsField": "color",
    "fillAlphas": 0.9,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  }],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "labelRotation": 45
  },
  "export": {
    "enabled": true
  }

});
        
JS;

$pie_data=[];
$pie_data[]=[
    'item'=>'TYPE 1',
    'value'=>200
];
$pie_data[]=[
    'item'=>'TYPE 2',
    'value'=>100,
    'color'=>'#CD0D74'
];
$pie_data[]=[
    'item'=>'TYPE 3',
    'value'=>100,
    'color'=>'#CD0D74'
];
$pie_data[]=[
    'item'=>'TYPE 4',
    'value'=>100,
    'color'=>'#CD0D74'
];

$pie_data[]=[
    'item'=>'TYPE 5',
    'value'=>100,
    'color'=>'#CD0D74'
];
$pie_data = json_encode($pie_data);

$js2 = <<<JS
        
 var chart = AmCharts.makeChart( "chartpie", {
  "type": "pie",
  "theme": "light",
  "dataProvider": $pie_data,
  "valueField": "value",
  "titleField": "item",
  "graphs": [{
        "fillColorsField": "color",
   }],
   "balloon":{
   "fixedPosition":true
  },
  "export": {
    "enabled": true
  }
} );
  
JS;

$this->registerJs($js1);
$this->registerJs($js2);

?>

