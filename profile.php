<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            padding-top: 60px;
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
            padding-top: 50px;
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
    </style>
</head>

<body>

    <div class="col-12 m-0" style="position: fixed; top: 0; left: 0; width: 100%; z-index: 9999;">
        <?php include 'header01.php'; ?>
    </div>

    <div class="sidebar">
        <div class="profile-card">
            <img src="resource/profilePic/pic1.jpg" class="profile-pic" alt="Profile Picture">
        </div>
        <h5 class="text-center">Nora Tsunoda</h5>
        <hr />
        <a href="#manage-accounts" class="menu-item active" onclick="showSection(event, 'manage-accounts')">
            <i class="bi bi-person"></i> Manage Accounts
        </a>
        <a href="#manage-recipes" class="menu-item" onclick="showSection(event, 'manage-recipes')">
            <i class="bi bi-book"></i> Manage Recipes
        </a>
        <a href="#settings" class="menu-item" onclick="showSection(event, 'settings')">
            <i class="bi bi-gear"></i> Settings
        </a>
    </div>

    <div class="main-content">
        <div id="manage-accounts" class="content-section active">
            <div class="profile-update-container">
                <h2 class="form-title">Update Profile</h2>
                <form>
                    <div class="mb-3">
                        <label for="fName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                    </div>

                    <div class="mb-3">
                        <label for="lName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter a new password">
                    </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                </form>
            </div>
        </div>

        <div id="manage-recipes" class="content-section">
            <div class="container-recipe">
                <h1>Recipe Management</h1>
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
                                <button class="btn-action btn-reply">Reply to Comments</button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Name">Chocolate Cake</td>
                            <td data-label="Rating">4.8</td>
                            <td data-label="Actions">
                                <button class="btn-action btn-view">View</button>
                                <button class="btn-action btn-inactive" onclick="toggleStatus(this, false)">Deactivate</button>
                                <button class="btn-action btn-reply">Reply to Comments</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div id="settings" class="content-section">
            <h2 style="padding-top: 30px;">Settings</h2>
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