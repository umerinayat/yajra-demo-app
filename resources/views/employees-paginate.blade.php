@extends('layouts.master')


@section('main-content')
<div class="row">

    <div class="col-sm-12">
        <h1>Employees <span style="font-size:.4em"> (Total = {{ $employeesCount }}) </span> </h1>

        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Department</th>
                </tr>
            </thead>
            <tbody>

                <!-- List Employees -->
                @foreach( $employees as $employee )
                <tr>
                    <th scope="row">{{ $employee->id }}</th>
                    <td> {{ $employee->first_name }} </td>
                    <td> {{ $employee->last_name }} </td>
                    <td> {{ $employee->department }} </td>
                </tr>
                @endforeach


            </tbody>
        </table>

        <!-- Paginate Links -->
        {{ $employees->links() }}

    </div>

</div>

@endsection