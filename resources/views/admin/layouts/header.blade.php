<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Modal Profil</title>
    <style>
        .modal-dialog {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            width: 80%;
            justify-content: center;
        }

        .modal-header {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-header .profile-icon {
            margin-right: 10px;
        }

        .modal-footer {
            text-align: center;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .large-icon {
            font-size: 5em;
        }

        /* Navbar color */
        .main-header.navbar {
            background-color: #6777EF; /* Gray */
            color: #ffffff; /* White text for contrast */
        }

        .navbar-light .navbar-nav .nav-link {
            color: #ffffff; /* White text for links */
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #f8f9fa; /* Brighter color on hover */
        }
    </style>
</head>
<body>

<nav class="main-header navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="contact.php" class="nav-link">Kontak</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#profileModal" href="#" role="button">
                <i class="nav-icon bi bi-person-circle"></i>
            </a>
        </li>
    </ul>
</nav>

<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <i class="nav-icon bi bi-person-circle profile-icon"></i>
                <h5 class="modal-title w-100" id="profileModalLabel">Profil Anda</h5>
            </div>
            <div class="modal-body text-center">
                <div class="profile-info">
                    <i class="nav-icon bi bi-person-circle large-icon"></i>
                </div>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="logoutproses.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
