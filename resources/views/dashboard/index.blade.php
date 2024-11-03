<x-layout title="Home">
    <div class="main-content " >
        <div class="container-fluid" >
            <div class="titlebody"><h5>Home</h5></div>
            @if (Auth::check())
                <p>Olá 👋, {{ Auth::user()->name }}</p>
            @endif
            <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                    <div class="card ">
                        <div class="card-body">            
                            <p class="card-text">Total de Clientes</p>
                            <p class="card-text">{{ $customerCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Total de Serviços</p>
                            <p class="card-text">{{ $serviceOrderCount }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Total de Pedidos</p>
                            <p class="card-text">{{ $order }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Total de Usuários</p>
                            <p class="card-text">{{ $usersCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <canvas id="myChart" height="500px" ></canvas>
            </div>
        </div>
        <br>
        
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
              label: '# of Votes',
              data: [0, 0, 0, 0, 0, 0],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
    </script>   
</x-layout>