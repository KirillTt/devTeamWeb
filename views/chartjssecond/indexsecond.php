<?php
	$this -> title = 'My first chart';

$script = <<< JS
   var densityCanvas = document.getElementById("densityChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var densityData = {
  label: 'Количество отчисленных студентов',
  data: [329, 308, 206, 149, 137, 285, 4442, 544, 166, 101, 126, 128],
  backgroundColor: [
    'rgba(0, 99, 132, 0.6)',
    'rgba(30, 99, 132, 0.6)',
    'rgba(60, 99, 132, 0.6)',
    'rgba(90, 99, 132, 0.6)',
    'rgba(120, 99, 132, 0.6)',
    'rgba(150, 99, 132, 0.6)',
    'rgba(180, 99, 132, 0.6)',
    'rgba(210, 99, 132, 0.6)',
    'rgba(240, 99, 132, 0.6)',
    'rgba(270, 99, 132, 0.6)',
    'rgba(300, 99, 132, 0.6)',
    'rgba(330, 99, 132, 0.6)',
  ],
  borderColor: [
    'rgba(0, 99, 132, 1)',
    'rgba(30, 99, 132, 1)',
    'rgba(60, 99, 132, 1)',
    'rgba(90, 99, 132, 1)',
    'rgba(120, 99, 132, 1)',
    'rgba(150, 99, 132, 1)',
    'rgba(180, 99, 132, 1)',
    'rgba(210, 99, 132, 1)',
    'rgba(240, 99, 132, 1)',
    'rgba(270, 99, 132, 1)',
    'rgba(300, 99, 132, 1)',
    'rgba(330, 99, 132, 1)',
  ],
  borderWidth: 1,
  hoverBorderWidth: 2
};

var chartOptions = {
  scales: {
    yAxes: [{
      barPercentage: 0.5
    }]
  },
  elements: {
    rectangle: {
      borderSkipped: 'left',
    }
  }
};

var barChart = new Chart(densityCanvas, {
  type: 'horizontalBar',
  data: {
    labels: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
    datasets: [densityData],
  },
  options: chartOptions
});
JS;
$this->registerJs($script, yii\web\View::POS_READY);
?>


<div id="my-chart">
		<h1><?= $this->title ?></h1>
		<canvas id="densityChart" width="600" height="400"></canvas>
	</div>