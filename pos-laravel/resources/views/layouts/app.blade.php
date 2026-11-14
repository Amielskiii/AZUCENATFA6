<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home') - Azucena</title>
    <style>
        html{
            margin:0;
            padding:0;
            scroll-behavior: smooth;
        }

        body{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin:0;
            padding:0;
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }

        .header{
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color:#ffffff;
            padding:30px 50px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            border-bottom:2px solid #e94560;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header .logo{
            font-size:28px;
            font-weight:300;
            margin:0;
            letter-spacing:2px;
            text-transform: uppercase;
            background: linear-gradient(90deg, #ffffff, #e94560);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header .logo span{
            color:#e94560;
            font-weight:400;
            -webkit-text-fill-color: #e94560;
        }

        .header .nav{
            display:flex;
            gap:35px;
        }

        .header .nav a{
            color:#cccccc;
            text-decoration:none;
            font-size:14px;
            font-weight:400;
            letter-spacing:1px;
            transition:all 0.3s ease;
            position: relative;
            padding: 8px 12px;
            border-radius: 4px;
        }

        .header .nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: #e94560;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .header .nav a:hover{
            color:#ffffff;
            background: rgba(233, 69, 96, 0.1);
        }

        .header .nav a:hover::after {
            width: 80%;
        }

        .container{
            max-width:1200px;
            margin:0 auto;
            padding:50px 30px;
            flex:1;
            width:100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        table thead {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #ffffff;
        }

        table th {
            padding: 18px;
            text-align: left;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            font-size: 12px;
        }

        table td {
            padding: 16px 18px;
            text-align: left;
            border-bottom: 1px solid #f0f0f0;
            color: #333;
        }

        table tbody tr {
            transition: all 0.3s ease;
        }

        table tbody tr:hover {
            background: linear-gradient(90deg, #f8f9fa, #fff);
            transform: scale(1.01);
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        table tbody tr:last-child td {
            border-bottom: none;
        }

        h1 {
            color: #1a1a2e;
            margin-bottom: 15px;
            font-weight: 300;
            letter-spacing: 1px;
            text-transform: uppercase;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #e94560, #1a1a2e);
            bottom: -8px;
            left: 0;
        }

        p {
            color: #555;
            margin-bottom: 30px;
            font-weight: 300;
            line-height: 1.6;
        }

        .footer{
            text-align:center;
            padding:30px;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color:#cccccc;
            width:100%;
            box-sizing:border-box;
            margin-top:auto;
            font-size:13px;
            letter-spacing:1px;
            border-top: 2px solid #e94560;
        }

        @media (max-width: 768px) {
            .header{
                flex-direction:column;
                text-align:center;
                gap:15px;
                padding: 20px 30px;
            }
            .header .nav{
                gap:20px;
                flex-wrap: wrap;
                justify-content: center;
            }
            table {
                font-size: 14px;
            }
            table th, table td {
                padding: 12px;
            }
            .container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        Azucena <span>User Management</span>
    </div>
    <div class="nav">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers') }}">Customers</a>
        <a href="{{ route('users') }}">Users</a>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

<div class="footer">
    © Azucena User Management System
</div>

</body>
</html>
