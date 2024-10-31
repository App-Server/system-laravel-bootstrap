<x-layout title="Edit Service Record">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Edit Service Record</h5></div>
            <div class="card">
                <div class="card-body">
                    <form class="row g-3 needs-validation" novalidate action="{{ route('service-registration.update', $serviceregistrationtable->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Service Name</label>
                        <input type="name" name="service_name" class="form-control" id="validationCustom01" value="{{ $serviceregistrationtable->service_name }}" required>
                        </div>               
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea type="name" name="description" class="form-control" id="comments" id="floatingTextarea2" style="height: 150px" value="{{ $serviceregistrationtable->description }}" ></textarea>
                                <label for="floatingTextarea2"><i class="bi bi-card-text"></i>Description</label>
                            </div>
                        </div>
                        <div class="col-12">
                        <button class="btn btn-dark" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>