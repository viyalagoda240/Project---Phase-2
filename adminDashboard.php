<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            overflow-y: auto;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #495057;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: relative;
                width: 100%;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }

            .sidebar a {
                padding: 10px;
                text-align: center;
            }
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .profile-card {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
            justify-content: center;
        }

        .profile-pic {
            width: 160px;
            height: 160px;
            border-radius: 50%;
        }

        .profile-update-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .container-recipe {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        .btn-action {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
        }

        .btn-view {
            background-color: #007bff;
        }

        .btn-active {
            background-color: #28a745;
        }

        .btn-inactive {
            background-color: #dc3545;
        }

        .btn-reply {
            background-color: #ffc107;
        }

        .btn-action:hover {
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            table {
                display: block;
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            th,
            td {
                display: block;
                text-align: center;
            }

            th {
                display: none;
            }

            tr {
                margin-bottom: 15px;
                display: block;
            }

            td {
                border: none;
                border-bottom: 1px solid #ddd;
                padding: 12px;
                text-align: left;
                border: 1px solid #ddd;
            }
        }

        .admin-header {
            background-color: #343a40;
            color: white;
        }
    </style>
</head>

<body>

    <header class="admin-header py-3">
        <div class="col-12">
            <div class="row m-2">
                <div class="col-8 col-md-4">
                    <p class="m-0">Admin Name: Dilshan Udesh</p>
                    <p class="m-0">Email: dilshan@gmail.com</p>
                </div>
                <div class="col-md-4 d-none d-md-block text-center">
                    <h2 class="m-0">Admin Dashboard</h2>
                </div>
                <div class="col-4 col-md-4 text-end">
                    <button class="btn btn-danger">Logout</button>
                </div>
            </div>
        </div>
    </header>

    <div class="sidebar">
        <a href="#manage-accounts" class="menu-item active" onclick="showSection(event, 'manage-accounts')">
            <i class="bi bi-person"></i> Manage Accounts
        </a>
        <a href="#manage-recipes" class="menu-item" onclick="showSection(event, 'manage-recipes')">
            <i class="bi bi-book"></i> Manage Recipes
        </a>
        <a href="#reply" class="menu-item" onclick="showSection(event, 'reply')">
            <i class="bi bi-gear"></i> Reply Area
        </a>
        <a href="#settings" class="menu-item" onclick="showSection(event, 'settings')">
            <i class="bi bi-gear"></i> Settings
        </a>
    </div>

    <div class="main-content">
        <div id="manage-accounts" class="content-section active">
            <div class="container-recipe">
                <h1>Users Management</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Username or Email">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">Search</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Name">Dilshan Udesh</td>
                            <td data-label="Rating">dilshan@gmail.com</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">Recipies</button>
                                <button class="btn-action btn-active" onclick="toggleStatus(this, true)">Activate</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Name">Hashan Rangana</td>
                            <td data-label="Rating">hashan@gmail.com</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">Recipies</button>
                                <button class="btn-action btn-inactive" onclick="toggleStatus(this, false)">Deactivate</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="manage-recipes" class="content-section">
            <div class="container-recipe">
                <h1>Recipe Management</h1>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search recipe name or recipe owner name">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Name">Spaghetti Carbonara</td>
                            <td data-label="Rating">4.5</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                                <button class="btn-action btn-active" onclick="toggleStatus(this, true)">Activate</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Name">Chocolate Cake</td>
                            <td data-label="Rating">4.8</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                                <button class="btn-action btn-inactive" onclick="toggleStatus(this, false)">Deactivate</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="reply" class="content-section">
            <div class="container-recipe">
                <h1>Reply Area</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Email">dilshan@gmail.com</td>
                            <td data-label="status">Not Viewed</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Email">hashan@gmail.com</td>
                            <td data-label="status">Not viewed</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr class="mt-3 mb-3 fs-2">
                <table>
                    <tbody>
                        <tr>
                            <td data-label="Email">dilshan@gmail.com</td>
                            <td data-label="status">Viewed</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Email">hashan@gmail.com</td>
                            <td data-label="status">Viewed</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="settings" class="content-section">
            <h2>Settings</h2>
            <p>Customize your application settings here.</p>
            <button class="btn btn-secondary">Change Password</button>
            <a href="signInUp.php" class="btn btn-secondary">Sign Out</a>
        </div>

    </div>

    <div class="d-block d-md-none">
        <?php include "footer01.php" ?>
    </div>

    <script>
        function showSection(event, sectionId) {
            event.preventDefault();

            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });

            document.getElementById(sectionId).classList.add('active');

            document.querySelectorAll('.menu-item').forEach(item => {
                item.classList.remove('active');
            });
            event.currentTarget.classList.add('active');
        }
    </script>
</body>

</html>