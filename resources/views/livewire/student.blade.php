<div>
    {{-- Success is as dangerous as failure. --}}
    @include('livewire.create')
    <section>
        <div class="container col-md-10">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>All Students

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudent">
                            Add Student
                        </button>
                          
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->first_name }}</td>
                                    <td>{{ $student->last_name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
