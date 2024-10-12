<x-layout title="Customer">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Customer</h5></div>
            
            <x-validation-alert />

            <div class="container-fluid">
                <br>
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        @foreach ($customerTable as $customer)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >                                    
                                    <div class="col-md-5">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-person-vcard"></i>{{ $customer->customer }}</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label"><i class="bi bi-headset"></i>{{ $customer->telephone }}</label>
                                    </div>
                                    <div class="col-md-1">
                                        <label for="validationCustom04" class="form-label"><a href="{{ route('customer.details', $customer->id) }}" ><i class="bi bi-arrow-right-circle"></i></a></label>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{--  --}}
        </div>  
    </div>  
</x-layout>