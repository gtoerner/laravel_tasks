@extends('layouts.app')

@section('title', 'Users')

@section('content')

        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <tr>
                        <th>ID</th>
                        <th>Users</th>
                        <th>Email</th>
                    </tr>

                    <!-- Table Body -->
                    <tbody>
                    @foreach ($users as $user)
                        <tr class="table-text">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection