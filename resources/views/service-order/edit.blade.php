<x-layout title="Service Order Edit">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Service Order Edit</h5></div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate action="{{ route('service-order.update', $serviceordertable->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">Service</label>
                        <select type="name" name="service" class="form-select" id="validationCustom04" value="{{ $serviceordertable->service_name }}">
                            <option selected disabled value="">
                                {{ empty($serviceregistrationtable) ? 'No Service Available' : 'Select a Service' }}
                            </option>
                            
                            @if(isset($serviceregistrationtable) && is_iterable($serviceregistrationtable))
                                @foreach($serviceregistrationtable as $services)
                                    <option value="{{ $services->service_name }}">
                                        {{ $services->service_name }}
                                    </option>
                                @endforeach
                            @endif
                        </select>               
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Customer</label>
                        <select type="name" name="customer" class="form-select" id="validationCustom04">
                            <option selected disabled value="">
                                {{ empty($serviceordertable->customer) ? 'No Customers Available' : 'Select a Customer' }}
                            </option>
                            @if(isset($serviceordertable))
                                <option value="{{ $serviceordertable->customer }}">
                                    {{ $serviceordertable->customer }}
                                </option>
                            @endif
                        </select>               
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">price</label>
                        <input type="number" name="price" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp" value="{{ $serviceordertable->price }}">
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp" value="{{ $serviceordertable->date }}">
                    </div>

                    <div class="col-md-4">
                        <label for="validationCustom04" class="form-label">Time</label>
                        <input type="time" name="time" class="form-control" id="exampleInputDatetime1" aria-describedby="datetimeHelp" value="{{ $serviceordertable->time }}">
                    </div>

                    <div class="mb-3">
                        <label for="validationCustom04" class="form-label">Observations</label>
                        <div class="form-floating">                                        
                            <textarea type="name" name="observations" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" value="{{ $serviceordertable->observations }}"></textarea>
                            <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Observation (Optional)</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Update Service</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>