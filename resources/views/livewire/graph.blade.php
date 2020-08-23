<div class="w-100">


<!-- <div class="row">
<div class="col-sm-6"><canvas id="myChart"  height="300"></canvas></div>
<div class="col-sm-6"><canvas id="myChart2"  height="300"></canvas></div>
</div> -->
@php
 $shoes=20;
 $cloth=15;
 $accessories=28;
 $electronics=16;
$sports=10;
$totalproduct= $shoes+$cloth+$accessories+$electronics+$sports;


$jan=20;
$fab=30;
$march=35;
$april=37;
$may=67;
$june=97;
$july=125;
$agust=145;
$sept=112;
$oct;
$nov;
$desc;
$totalshop=$jan+$fab+$march+$april+$may+$june+$july+$agust+$sept+$oct+$nov+$desc;
@endphp

<div class="graphcover">
<h5 class="text-center p-2">हामी सँग राखिएका समानहरु <i class="fas fa-long-arrow-alt-right"></i> {{$totalproduct}} </h5>
<canvas id="myChart"  height="130" ></canvas>
</div>
<br><hr><br>
<div class="graphcover">
<h5 class="text-center p-2">हामी सँग जोडिएका पसलहरु <i class="fas fa-long-arrow-alt-right"></i> {{$totalshop}}</h5>
<canvas id="myChart2"  height="130" ></canvas>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['cloth', 'shoes', 'Accessories', 'Electronics', 'sports', 'Others'],
        datasets: [{
            label: 'Items',
            data: [{{$cloth}}, {{$shoes}}, {{$accessories}}, {{$electronics}}, {{$sports}}, 25], 
            backgroundColor:['red','blue','yellow','pink','black','lime'],
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
</script>
<script>
var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['बैसाक', 'जेठ', 'आसार', 'साउन ', 'भाद्र ', 'आसोज', 'कार्तिक', 'मंसिर', 'पुष', 'माग', 'फागुन', 'चैत्र'],
        datasets: [{
			borderColor: 'red',
            label: 'shops',
            data: [
                  @if($jan) {{$jan}} @endif,
                   @if($fab) {{$fab}} @endif, 
                   @if($march) {{$march}} @endif, 
                   @if($april) {{$april}} @endif, 
                   @if($may) {{$may}} @endif,
                   @if($june) {{$june}} @endif,
                   @if($july) {{$july}} @endif,
                   @if($agust) {{$agust}} @endif,
                   @if($sept) {{$sept}} @endif,
                    @if($oct) {{$oct}} @endif ,
                    @if($nov) {{$nov}}  @endif ,
                    @if($desc) {{$desc}} @endif
                    ], 
           
            backgroundColor:['red','blue','yellow','pink','black','lime'],
            fill: false,
           
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
</script>
</div>
