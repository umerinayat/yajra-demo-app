@extends('layouts.master')


@section('main-content')
<div class="row">

    <div class="col-sm-12">
        <h1> Employees  </h1>

        <table class="table mt-4" id="employees-table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <!-- List Employees -->



            </tbody>
        </table>



    </div>

</div>

@endsection

@push('scripts')

<script>
    
    // document ready
    $(document).ready(function() {
       

        // init Employees DataTable
        $('#employees-table').DataTable({

                processing: true,

                serverSide: true,

                ajax: {
                    url: "{{ route('employees.DataTable') }}",
                },

                columns: [{
                        name: 'id',
                        data: 'id',
                    },
                    {
                        name: 'first_name',
                        data: 'first_name',
                    },
                    {

                        name: 'last_name',
                        data: 'last_name',
                    },
                    {

                        name: 'department',
                        data: 'department',
                    },
                    {

                        name: 'action',
                        data: 'action',
                    },
                
                ]

        });

    });
</script>


@endpush