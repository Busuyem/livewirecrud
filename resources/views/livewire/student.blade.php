<div>
    {{-- Success is as dangerous as failure. --}}
    <style>

        nav svg{
            height: 1em;
        }

    </style>

    @include('livewire.create')
    @include('livewire.edit')
    <section>
        <div class="container col-md-10">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">

                            <h4>All Students

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudent">
                                    Add Student
                                </button>
                                  
                            </h4>

                        </div>

                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Search..." wire:model = "searchItem">
                        </div>
                        
                    </div>
                   
                 
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
                                <th>Action</th>
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
                                    <td>
                                        <button type="submit" class="btn btn-info" data-toggle = "modal" data-target="#updatedStudent" wire:click.prevent = "edit({{ $student->id }})">Edit</button>
                                        <button class="btn btn-danger" type="button" wire:click.prevent = "destroy({{ $student->id }})">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                </div>
            </div>
        </div>
    </section>
</div>
