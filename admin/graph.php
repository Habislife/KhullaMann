<!-- <!DOCTYPE html>
<html>
<head>
    <title>graph</title>
    <script>
        function draw() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
             labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
               label: '# of Votes',
               data: [12, 19, 3, 5, 2, 3],
               backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
               ],
               borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
               ],
               borderWidth: 1
             }]
            },
            options: {
             scales: {
               yAxes: [{
                ticks: {
                    beginAtZero: true
                }
              }]
             }
            }
            });
        }
    </script> 

 


</head>
<body>

    <h1>My Web Page</h1>

    <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Work', 8],
    ['Friends', 2],
    ['Eat', 2],
    ['TV', 2]
    ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
    </script>


</body>
</html> -->

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: false, // change to true      
    title:{
        text: "Basic Column Chart"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "column",
        dataPoints: [
            { label: "donee",  y: 10  },
            { label: "donor", y: 15  },
            { label: "verify", y: 25  },
            { label: "feedback",  y: 28  }
        ]
    }
    ]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>