<?php
//   require './Database.php';
  //connexion à la base de données
  $connexion = new Database('mysql:host','3306','ambulance','root','');
  $users = $connexion->QueryRequest('SELECT * FROM users',2);
  $calcul = [
    'total_users' => $connexion->QueryRequest('SELECT COUNT(id) as user_total FROM users',2),
    'total_male' => $connexion->QueryRequest("SELECT COUNT(id) as male FROM users WHERE genre = 'Masculin'",2),
    'total_female' => $connexion->QueryRequest("SELECT COUNT(id) as female FROM users WHERE genre = 'Feminin'",2),
    'active_users' => $connexion->QueryRequest("SELECT COUNT(id) as actif FROM users WHERE status = 1",2),
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients | Ambulance Rental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3>AmbuRent</h3>
                <button class="btn-close-sidebar d-md-none" id="closeSidebar"><i class="bi bi-x-lg"></i></button>
            </div>
            <ul class="sidebar-menu">
                <li><a href="index.html"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li><a href="ambulances.html"><i class="bi bi-truck"></i> Ambulances</a></li>
                <li><a href="bookings.html"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li class="active"><a href="clients.html"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="#"><i class="bi bi-person-badge"></i>Users</a></li>
                <li><a href="reports.html"><i class="bi bi-file-earmark-bar-graph"></i> Reports</a></li>
                <li><a href="settings.html"><i class="bi bi-gear"></i> Settings</a></li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" id="logout-btn"><i class="bi bi-box-arrow-left"></i> Logout</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <header class="dashboard-header">
                <button class="btn-toggle-sidebar d-md-none" id="toggleSidebar">
                    <i class="bi bi-list"></i>
                </button>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                    <button><i class="bi bi-search"></i></button>
                </div>
                <div class="header-right">
                    <div class="notifications">
                        <i class="bi bi-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <img src="https://via.placeholder.com/40" alt="User">
                        <span class="d-none d-md-inline">Admin User</span>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <h1>Users Management</h1>
                
                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn-primary"><i class="bi bi-plus-lg"></i> Add New Client</button>
                    <button class="btn-outline"><i class="bi bi-filter"></i> Filter</button>
                </div>
                
                <!-- Client Filters -->
                <div class="section">
                    <div class="filter-container">
                        <div class="filter-group">
                            <label>Status:</label>
                            <select class="filter-select">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Type:</label>
                            <select class="filter-select">
                                <option value="">All Types</option>
                                <option value="individual">Individual</option>
                                <option value="hospital">Hospital</option>
                                <option value="corporate">Corporate</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Search:</label>
                            <input type="text" placeholder="Name, email or phone...">
                        </div>
                        <button class="btn-primary">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Client List -->
                <div class="section">
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#CL001</td>
                                    <td>John Smith</td>
                                    <td>Individual</td>
                                    <td>john.smith@email.com</td>
                                    <td>+1 234-567-8901</td>
                                    <td>123 Main St, Anytown</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#CL002</td>
                                    <td>Sarah Johnson</td>
                                    <td>Individual</td>
                                    <td>sarah.j@email.com</td>
                                    <td>+1 234-567-8902</td>
                                    <td>456 Oak Ave, Somewhere</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#CL003</td>
                                    <td>City Hospital</td>
                                    <td>Hospital</td>
                                    <td>admin@cityhospital.com</td>
                                    <td>+1 234-567-8903</td>
                                    <td>789 Hospital Blvd, Cityville</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#CL004</td>
                                    <td>ABC Corporation</td>
                                    <td>Corporate</td>
                                    <td>contact@abccorp.com</td>
                                    <td>+1 234-567-8904</td>
                                    <td>101 Business Park, Metropolis</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#CL005</td>
                                    <td>Michael Brown</td>
                                    <td>Individual</td>
                                    <td>michael.b@email.com</td>
                                    <td>+1 234-567-8905</td>
                                    <td>202 Pine St, Elsewhere</td>
                                    <td><span class="status-cancelled">Inactive</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td>#<?= $user['id'] ?></td>
                                        <td><?= $user['nom'] ?></td>
                                        <td><?= $user['role'] ?></td>
                                        <td><?= $user['email'] ?></td>
                                        <td><?= $user['phone'] ?></td>
                                        <td><?= $user['addresses'] ?></td>
                                        <td><span class="<?= $user['status']?'status-active':'status-cancelled'?>">Active</span></td>

                                        <td>
                                            <a href="#?id=<?=$user['id']?>" class="btn-action"><i class="bi bi-eye"></i></a>
                                            <a href="#?id=<?=$user['id']?>" class="btn-action"> <i class="bi bi-pencil"></i></a>
                                            <a href="#?id=<?=$user['id']?>" class="btn-action"><i class="bi bi-trash"></i></a>                             
                                        </td>

                                    </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Client Statistics -->
                <div class="section">
                    <div class="section-header">
                        <h2>Client Statistics</h2>
                    </div>
                    <div class="stats-container">
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-people"></i></div>
                            <div class="stat-info">
                                <h3><?=(int)$calcul['total_users'][0]['user_total']?></h3>
                                <p>Total Users</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-person"></i></div>
                            <div class="stat-info">
                                <h3><?=(int)$calcul['total_male'][0]['male'] ?></h3>
                                <p>Male Users</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-hospital"></i></div>
                            <div class="stat-info">
                                <h3><?=(int) $calcul['total_female'][0]['female'] ?></h3>
                                <p>Female Users</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-building"></i></div>
                            <div class="stat-info">
                                <h3><?=(int) $calcul['active_users'][0]['actif']?></h3>
                                <p>Actif Users</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>