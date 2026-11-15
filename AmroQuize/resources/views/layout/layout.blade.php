
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel CRUD</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        body {
            margin: 0;
            background-color: #f8f9fa;
        }

        .sidebar {
            width: 280px;
            min-width: 280px;
            height: auto;
            background-color: #212529;
            color: white;
            padding: 20px 24px;
            display: flex;
            flex-direction: column;
        }

        /* Logo */
        .sidebar-brand {
            font-size: 36px;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
        }

        .brand-icon {
            background-color: white;
            color: #212529;
            font-weight: bold;
            border-radius: 8px;
            padding: 0px 10px;
        }

        /* Navigation */
        .sidebar-nav {
            border-top: 2px solid #555;
            padding-top: 24px;
        }

        .sidebar .nav-link {
            color: white;
            font-size: 20px;
            padding: 14px 20px;
            border-radius: 7px;
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 4px;
            transition: 0.2s;
        }

        .sidebar .nav-link:hover {
            background-color: #343a40;
            color: white;
        }

        .sidebar .nav-link.active {
            background-color: #0d6efd;
            color: white;
        }

        .sidebar .nav-link i {
            font-size: 20px;
            width: 24px;
        }

        /* User Profile */
        .sidebar-profile {
            margin-top: auto;
            border-top: 1px solid #555;
            padding-top: 24px;
        }

        .profile-link {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .profile-link img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Main Content */
        .main-content {
            flex-grow: 1;
            padding: 30px;
            min-width: 0;
        }
    </style>
</head>

<body>

    <div class="d-flex">

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Brand -->
            <a href="#" class="sidebar-brand">
                <span class="brand-icon">B</span>
                <span>Sidebar</span>
            </a>

            <!-- Navigation -->
            <nav class="sidebar-nav nav flex-column">


                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="fa-solid fa-circle-user"></i>
                    Users
                </a>

                <a href="{{ route('lecturers.index') }}" class="nav-link">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    Lecturers
                </a>

            </nav>

            <!-- User Profile -->
            <div class="sidebar-profile">

                <a href="#" class="profile-link">

                    <img src="https://i.pravatar.cc/100?img=12" alt="Profile">

                    <span>
                        mdo
                        <i class="fa-solid fa-caret-down"></i>
                    </span>

                </a>

            </div>

        </div>

        <!-- Main Content -->
        <main class="main-content">

            @yield('content')

        </main>

    </div>

</body>

</html>
