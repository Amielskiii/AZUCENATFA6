@extends('layouts.app')

@section('title', 'Customers')
@section('content')
    <div class="top">
        <h1>Customer Accounts</h1>
    </div>

    <p>Manage your customer information and accounts.</p>

    @if($customers->isEmpty())
        <div class="no-users">
            <div class="no-users-icon">📋</div>
            <h3>No Customers Found</h3>
            <p>Get started by adding your first customer account.</p>
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone ?? 'N/A' }}</td>
                        <td>{{ $customer->created_at?->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <style>
    .top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .top h1 {
        margin: 0;
        font-size: 32px;
        color: #1a1a2e;
        font-weight: 300;
        letter-spacing: 1px;
    }

    .no-users {
        text-align: center;
        padding: 80px 40px;
        color: #666;
        background: rgba(255,255,255,0.8);
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .no-users-icon {
        font-size: 64px;
        margin-bottom: 20px;
    }

    .no-users h3 {
        color: #1a1a2e;
        font-weight: 400;
        margin: 0 0 10px 0;
        font-size: 24px;
    }

    .no-users p {
        color: #666;
        font-weight: 300;
        margin: 0;
    }

    @media (max-width: 768px) {
        .top {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }
    }
    </style>
@endsection
