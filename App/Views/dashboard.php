<?php
  //require './App/Models/Database/Database.php';
  //connexion à la base de données
  //$connexion = new Database('mysql:host','3306','ambulance','root','');

 if(!isset($_SESSION['user']))
 {
    header("Location: /login");
    exit();
 }

 if($_SESSION['user'][0]['role'] !== 'admin')
 {
    header("Location: /");
    exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Ambulance Rental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
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
                <li class="active"><a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li><a href="/ambulances"><i class="bi bi-truck"></i> Ambulances</a></li>
                <li><a href="/bookings"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li><a href="/clients"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="/users"><i class="bi bi-person-badge"></i>Users</a></li>
                <li><a href="/reports"><i class="bi bi-file-earmark-bar-graph"></i> Reports</a></li>
                <li><a href="/settings"><i class="bi bi-gear"></i> Settings</a></li>
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
                        <a href="/admin">
                          <img src="https://via.placeholder.com/40" alt="User">
                        </a>
                        <span class="d-none d-md-inline">Admin User</span>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <h1>Dashboard Overview</h1>
                
                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-truck"></i></div>
                        <div class="stat-info">
                            <h3>24</h3>
                            <p>Total Ambulances</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-calendar-check"></i></div>
                        <div class="stat-info">
                            <h3>156</h3>
                            <p>Active Bookings</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-people"></i></div>
                        <div class="stat-info">
                            <h3>87</h3>
                            <p>Registered Clients</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon"><i class="bi bi-currency-dollar"></i></div>
                        <div class="stat-info">
                            <h3>$12,450</h3>
                            <p>Monthly Revenue</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Bookings -->
                <div class="section">
                    <div class="section-header">
                        <h2>Recent Bookings</h2>
                        <a href="bookings.html" class="view-all">View All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Ambulance</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#BK1234</td>
                                    <td>John Smith</td>
                                    <td>Type A - Emergency</td>
                                    <td>2023-11-15</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1235</td>
                                    <td>Sarah Johnson</td>
                                    <td>Type B - Basic</td>
                                    <td>2023-11-14</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1236</td>
                                    <td>Michael Brown</td>
                                    <td>Type C - Mobile ICU</td>
                                    <td>2023-11-16</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1237</td>
                                    <td>Emily Davis</td>
                                    <td>Type A - Emergency</td>
                                    <td>2023-11-17</td>
                                    <td><span class="status-cancelled">Cancelled</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Available Ambulances -->
                <div class="section">
                    <div class="section-header">
                        <h2>Available Ambulances</h2>
                        <a href="ambulances.html" class="view-all">View All</a>
                    </div>
                    <div class="ambulance-cards">
                        <div class="ambulance-card">
                            <div class="ambulance-img">
                                <img src="https://via.placeholder.com/150" alt="Ambulance">
                            </div>
                            <div class="ambulance-info">
                                <h3>Type A - Emergency</h3>
                                <p>License: AMB-1234</p>
                                <p>Status: <span class="status-active">Available</span></p>
                                <button class="btn-primary">Book Now</button>
                            </div>
                        </div>
                        <div class="ambulance-card">
                            <div class="ambulance-img">
                                <img src="https://via.placeholder.com/150" alt="Ambulance">
                            </div>
                            <div class="ambulance-info">
                                <h3>Type B - Basic</h3>
                                <p>License: AMB-1235</p>
                                <p>Status: <span class="status-active">Available</span></p>
                                <button class="btn-primary">Book Now</button>
                            </div>
                        </div>
                        <div class="ambulance-card">
                            <div class="ambulance-img">
                                <img src="https://via.placeholder.com/150" alt="Ambulance">
                            </div>
                            <div class="ambulance-info">
                                <h3>Type C - Mobile ICU</h3>
                                <p>License: AMB-1236</p>
                                <p>Status: <span class="status-active">Available</span></p>
                                <button class="btn-primary">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>