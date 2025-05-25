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
                <li><a href="index.php"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
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
                <h1>Client Management</h1>
                
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
                                    <th>Type</th>
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
                                <h3>87</h3>
                                <p>Total Clients</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-person"></i></div>
                            <div class="stat-info">
                                <h3>65</h3>
                                <p>Male  Clients</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-hospital"></i></div>
                            <div class="stat-info">
                                <h3>12</h3>
                                <p>Female Clients</p>
                            </div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon"><i class="bi bi-building"></i></div>
                            <div class="stat-info">
                                <h3>10</h3>
                                <p>Active Clients</p>
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