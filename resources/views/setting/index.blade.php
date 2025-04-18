<x-layout title="Setting">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody">
                <h5><i class="bi bi-gear"></i>Configurações</h5>
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="card ">
                            <div class="card-body">            
                                <p class="card-text"><i class="bi bi-people"></i>Gerenciar usuários</p>
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/user') }}" class="btn btn-primary {{ Request::is('user') ? 'active' : '' }}"><i class="bi bi-people"></i>Lista de usuário</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="bi bi-briefcase"></i>Gerenciar serviços</p>
                                <div class="d-grid gap-2">
                                    <a href="{{ url('/service-registration') }}" class="btn btn-primary 
                                        {{ Request::is('service-registration') ? 'active' : '' }}
                                        {{ Request::is('service-registration/*') ? 'active' : '' }}">
                                        <i class="bi bi-briefcase"></i>Lista de serviços
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text"><i class="bi bi-x-octagon"></i>API (Em breve)</p>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-secondary"><i class="bi bi-x-octagon"></i>API</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>