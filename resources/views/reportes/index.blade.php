@extends ('layouts.admin')
@section ('contenido')
<html>

<head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', { 'packages': ['corechart'] });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {

            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'mes');
            data.addColumn('number', 'Slices');
            data.addRows([
            @foreach($ventas as $v)
            ['{{ $v->nombre }}', {{ $v->total}}],
            @endforeach          
            ]);

        // Set chart options
        var options = {
            'title': 'Ventas por clientes',
            'width': 380,
            'height': 300
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        // Load the Visualization API and the corechart package.
        google.charts.load('current', { 'packages': ['corechart'] });

        // Set a callback to run when the Google Visualization API is loaded.
        google.charts.setOnLoadCallback(drawChart);

        // Callback that creates and populates a data table,
        // instantiates the pie chart, passes in the data and
        // draws it.
        function drawChart() {
            
            // Create the data table.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'mes');
            data.addColumn('number', 'Slices');
            data.addRows([
            @foreach($ventaxfecha as $v)
            ['{{ $v->fecha }}', {{ $v->total}}],
            @endforeach          
            ]);

        // Set chart options
        var options = {
            'title': 'Ventas por Mes..',
            'width': 400,
            'height': 200
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }

      //
    </script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['line']});
  google.charts.setOnLoadCallback(drawChart);

function drawChart() {

  var data = new google.visualization.DataTable();
  data.addColumn('string', 'mes');
  data.addColumn('number', 'ventas');
  
  data.addRows([
    @foreach($ventaxfecha as $v)
            ['{{ $v->fecha }}', {{ $v->total}}],
            @endforeach
  ]);

  var options = {
    chart: {
      
      
    },
    width: 500,
    height: 300,
    axes: {
      x: {
        0: {side: 'top'}
      }
    }
  };

  var chart = new google.charts.Line(document.getElementById('line_top_x'));

  chart.draw(data, google.charts.Line.convertOptions(options));
}
</script>
</head>

<body>
        <div class="row">
                <div class="col-md-7">
                        <div class="card">
                                <div class="card-header">
                                        <h5>Ventas por mes</h5>
                                </div>
                            <div class="card-body">
                                <div class="sm" id="line_top_x">
                                    
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-md-5 ">
                        <div class="card">
                                <div class="card-header">
                                        <h5>ventas por cliente</h5>
                                </div>
                            <div class="card-body">
                                <div id="chart_div"></div>
                            </div>
                        </div>
                       </div>
           </div>
    <!--Div that will hold the pie chart-->
   <div class="row">
       
       <div class="col-md-6">
           
        
       </div>
   </div>
  
   
   
   

</body>

</html>
@endsection