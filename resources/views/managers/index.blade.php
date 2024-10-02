@extends('layouts.app')

@section('title', 'Managers')

@section('content')

<section class="h-100 mt-5">
        <div class="card w-100 bg-transparent text-light text-center border border-light">
            <div class="card-title text-start p-3 d-flex justify-content-between" style="align-items: baseline;">
                <h1>Managers</h1>
            </div>
            <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <tr class="table-light">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Picture</th>
                            <th>Manager ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmed</td>
                            <td><a href="mailto:"></a>ahmed@gmail.com</td>
                            <td><a href="tel:"></a>01010101010</td>
                            <td><img src="" width="50" height="50"
                                    alt="profile image"></td>
                            <td>1</td>
                            <td>
                                <a href="employeesEdit.php?id" class="btn btn-primary"><i
                                        class="fa fa-edit"></i></a>
                                <a href="employees.php?id" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

@endsection