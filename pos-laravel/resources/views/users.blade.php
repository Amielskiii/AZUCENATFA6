@extends('layouts.app')

@section('title', 'Users')
@section('content')
    <div class="top">
        <h1>User Accounts</h1>
    </div>

    <p>Manage system users and their roles.</p>

    @if($users->isEmpty())
        <div class="no-users">
            No users found in the database.
        </div>
    @else
        <div class="users-grid">
            @foreach($users as $user)
                <div class="user-card">
                    <div class="avatar-container">
                        <div class="avatar placeholder">
                            <svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="40" r="20" fill="#cccccc"/>
                                <ellipse cx="50" cy="80" rx="30" ry="20" fill="#cccccc"/>
                            </svg>
                        </div>
                    </div>
                    <div class="user-info">
                        <h3>{{ $user->username }}</h3>
                        <p>{{ $user->full_name }}</p>
                        <p class="user-meta">{{ ucfirst($user->userlevel) }} · {{ $user->email }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    <style>
    .top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .top h1 {
        margin: 0;
        font-size: 28px;
        color: #1a1a2e;
        font-weight: 300;
        letter-spacing: 0.5px;
    }

    .users-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 30px;
    }

    .user-card {
        background: #ffffff;
        border: 1px solid #e0e0e0;
        padding: 30px;
        text-align: center;
        transition: border-color 0.3s ease;
    }

    .user-card:hover {
        border-color: #1a1a2e;
    }

    .avatar-container {
        margin-bottom: 20px;
    }

    .avatar {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #e0e0e0;
    }

    .avatar.placeholder {
        opacity: 0.5;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    .user-info h3 {
        margin: 0 0 10px 0;
        color: #1a1a2e;
        font-weight: 400;
        font-size: 18px;
        letter-spacing: 0.5px;
    }

    .user-info p {
        margin: 0 0 10px 0;
        color: #666666;
        font-weight: 300;
        font-size: 14px;
    }

    .user-meta {
        font-size: 12px;
        color: #999;
        margin-bottom: 0;
    }

    .no-users {
        text-align: center;
        padding: 60px;
        color: #666666;
        font-size: 16px;
        font-weight: 300;
    }

    @media (max-width: 768px) {
        .users-grid {
            grid-template-columns: 1fr;
        }

        .top {
            flex-direction: column;
            gap: 20px;
            text-align: center;
        }
    }
    </style>
@endsection
