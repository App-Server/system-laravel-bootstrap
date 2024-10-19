<x-layout title="Dashboard">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Dashboard</h5></div>
            @if (Auth::check())
                <p>Hello 👋, {{ Auth::user()->name }}</p>
            @endif
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">            
                            <p class="card-text"><i class="bi bi-list-task"></i>Register Product</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-person-check"></i>Register Stock</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-ticket-detailed"></i>Delivery</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-people"></i>Customer</p>
                            <p class="card-text">--</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-mb-12">
                    <h5>Customer History</h5>
                    <div class="card">
                        <div class="card-body">
                            <div id="chartContainer" style="height: 420px; width: 100%;"></div>
                            <span id="timeToRender"></span>
                            <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>
        
        </div>
        <br>
        <script>
            window.onload = function () {
            
            var limit = 50000;
            var y = 100;    
            var data = [];
            var dataSeries = { type: "line" };
            var dataPoints = [];
            for (var i = 0; i < limit; i += 1) {
                y += Math.round(Math.random() * 10 - 5);
                dataPoints.push({
                    x: i,
                    y: y
                });
            }
            dataSeries.dataPoints = dataPoints;
            data.push(dataSeries);
            
            //Better to construct options first and then pass it as a parameter
            var options = {
                zoomEnabled: true,
                animationEnabled: true,
                
                axisY: {
                    lineThickness: 1
                },
                data: data  // random data
            };
            
            var chart = new CanvasJS.Chart("chartContainer", options);
            var startTime = new Date();
            chart.render();
            var endTime = new Date();
            //document.getElementById("timeToRender").innerHTML = "Time to Render: " + (endTime - startTime) + "ms";
            
            }
            </script>
            <style>
                #timeToRender {
                    position:absolute; 
                    top: 10px; 
                    font-size: 20px; 
                    font-weight: bold; 
                    background-color: #d85757;
                    padding: 0px 4px;
                    color: #ffffff;
                }
            </style>
    
    </div>    

</x-layout>