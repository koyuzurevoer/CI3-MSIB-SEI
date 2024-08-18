<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e;
            color: #eaeaea;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(90deg, #00d2ff, #3a7bd5);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand {
            font-size: 1.75rem;
            font-weight: bold;
            color: #fff;
        }
        .navbar-brand:hover {
            color: #ffcc00;
        }
        .navbar-nav .nav-link {
            color: #fff;
            font-size: 1.2rem;
        }
        .navbar-nav .nav-link:hover {
            color: #ffcc00;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            background-color: #162447;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }
        .sidebar a {
            padding: 15px 20px;
            text-decoration: none;
            font-size: 1.25rem;
            color: #eaeaea;
            display: block;
            transition: background-color 0.3s;
        }
        .sidebar a:hover {
            background-color: #3a7bd5;
            color: #fff;
        }
        .content {
            flex: 1;
            margin-left: 280px;
            padding: 30px;
            background-color: #1f4068;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }
        footer {
            background-color: #162447;
            color: #eaeaea;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-cog"></i> Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sidebar">
        <a href="<?= base_url('apicontroller/index') ?>"><i class="fas fa-home"></i> Home</a>
        <a href="<?= base_url('apicontroller/proyek_list') ?>"><i class="fas fa-project-diagram"></i> Proyek</a>
        <a href="<?= base_url('apicontroller/lokasi_list') ?>"><i class="fas fa-map-marker-alt"></i> Lokasi</a>
        <a href="<?= base_url('apicontroller/proyek_lokasi_list') ?>"><i class="fas fa-link"></i> Proyek-Lokasi</a>
    </div>

    <div class="content">
