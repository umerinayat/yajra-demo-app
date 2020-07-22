<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Employees - DataTables</title>

</head>

<body>

    <div class="container mt-4">

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


    </div>




</body>

</html>