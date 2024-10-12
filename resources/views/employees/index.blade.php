<x-layout title="Employees">
    <div class="main-content ">
        <div class="container-fluid">
            <div class="titlebody"><h5>Employees</h5></div>
            
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New Employees
            </button>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Employees</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                            <form class="row g-3 needs-validation" novalidate action="{{ route('employees.store') }}" method="post">
                                @csrf
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">employee_name</label>
                                    <input type="name" name="employee_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">salary</label>
                                    <select type="name" name="salary" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value=""></option>
                                        <option>personal</option>
                                        <option>company</option>
                                        
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">admission</label>
                                    <input type="number" name="admission" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">cpf</label>
                                    <input type="number" name="cpf" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">pis_pasep</label>
                                    <input type="name" name="pis_pasep" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-6">
                                    <label for="validationCustom04" class="form-label">place_of_birth</label>
                                    <input type="name" name="place_of_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">ctps</label>
                                    <input type="number" name="ctps" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">date_of_birth</label>
                                    <input type="number" name="date_of_birth" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">marital_status</label>
                                    <input type="number" name="marital_status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">sex</label>
                                    <input type="number" name="sex" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">job</label>
                                    <input type="number" name="job" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>

                                <div class="col-md-4">
                                    <label for="validationCustom04" class="form-label">sector</label>
                                    <input type="number" name="sector" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                        
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <x-validation-alert />

            <div class="container-fluid">
                <br>
                <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        @foreach ($employees_table as $employeesTable)
                            <li class="list-group-item">
                                <div class="row g-3 needs-validation" >
                                    <div class="row">
                                        <div class="col">
                                            <div class="col">
                                                <br>
                                                <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong> employee_name: </strong></label>
                                                <label for="validationCustomUsername" class="form-label">
                                                    {{ $employeesTable->employee_name }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>salary:</strong>{{ $employeesTable->salary }}</label>
                                            <br>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>admission:</strong>{{ $employeesTable->admission }}</label>
                                            <br>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>cpf:</strong>{{ $employeesTable->cpf }}</label>
                                            <br>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>pis_pasep:</strong>{{ $employeesTable->pis_pasep }}</label>
                                            <br>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>ctps:</strong>{{ $employeesTable->ctps }}</label>
                                            <br>                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="validationCustomUsername" class="form-label"><i class="bi bi-border-all"></i><strong>date_of_birth:</strong>{{ $employeesTable->date_of_birth }}</label>
                                            <br>                                            
                                        </div>
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