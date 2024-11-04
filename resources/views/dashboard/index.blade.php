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
            <div class="shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <h5>Seja Bem vindo ao sistema</h5>
                <li>Manual de uso</li>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque magni accusantium sequi voluptatibus autem quae ratione quos ducimus nostrum natus commodi iste perferendis, error quod doloribus eos nam nemo. Possimus?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
        <br>
        
    </div> 

</x-layout>