<x-layout title="Home">
    <div class="main-content " >
        <div class="container-fluid" >
            <div class="titlebody"><h5>Home</h5></div>
            @if (Auth::check())
                <p>Hello 👋, {{ Auth::user()->name }}</p>
            @endif
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card ">
                        <div class="card-body">            
                            <p class="card-text"><i class="bi bi-people"></i>Total de Clientes</p>
                            <p class="card-text">{{ $customerCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-briefcase"></i>Total de Ordem de Serviços</p>
                            <p class="card-text">{{ $serviceOrderCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-boxes"></i>Total de Pedidos</p>
                            <p class="card-text">{{ $order }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-file-person"></i>Total de Usuários</p>
                            <p class="card-text">{{ $usersCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-mb-12">
                    <h5>Historico de Clientes</h5>
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
            var dataPoints = [];

            @foreach($dailyCustomerHistory as $data)
                dataPoints.push({ x: new Date("{{ $data->date }}"), y: {{ $data->count }} });
            @endforeach

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                axisX: {
                    valueFormatString: "DD MMM"
                },
                axisY: {
                   
                    includeZero: false
                },
                data: [{
                    type: "line",
                    xValueFormatString: "DD MMM",
                    yValueFormatString: "#,##0 Customers",
                    dataPoints: dataPoints
                }]
            });
            chart.render();
            }
        </script>
    </div>    
</x-layout>