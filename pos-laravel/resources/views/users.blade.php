@extends('layouts.app')

@section('content')
    <h1>User Accounts</h1>
    <p>Manage system users and their roles.</p>
    
    <div style="margin-top: 2rem;">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td>{{ $user['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection