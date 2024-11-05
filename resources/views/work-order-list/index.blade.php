<x-layout title="Lista de serviços">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Lista de ordem de serviços</h5></div>
            <div class="row">
                @foreach ($serviceordertable as $serviceorder)
                    <div class="col-sm-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label"><strong>Cliente:</strong> {{ $serviceorder->customer }}</label>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationCustom04" class="form-label"><strong>Serviço:</strong> {{ $serviceorder->service }}</label>
                                    </div>
                                    <div class="col-md-1 text-end">
                                        <a href="{{ route('service-order-comments.index', $serviceorder->id) }}" style="color: black">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="py-4">
                {{ $serviceordertable->links() }}
            </div>
        </div>
    </div>
</x-layout>