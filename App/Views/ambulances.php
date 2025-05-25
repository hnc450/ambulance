<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulances | Ambulance Rental</title>
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
                <li class="active"><a href="ambulances.html"><i class="bi bi-truck"></i> Ambulances</a></li>
                <li><a href="bookings.html"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li><a href="clients.html"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="drivers.html"><i class="bi bi-person-badge"></i> Drivers</a></li>
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
                <h1>Ambulance Management</h1>
                
                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn-primary"><i class="bi bi-plus-lg"></i> Add New Ambulance</button>
                    <button class="btn-outline"><i class="bi bi-filter"></i> Filter</button>
                </div>
                
                <!-- Ambulance Filters -->
                <div class="section">
                    <div class="filter-container">
                        <div class="filter-group">
                            <label>Type:</label>
                            <select class="filter-select">
                                <option value="">All Types</option>
                                <option value="type-a">Type A - Emergency</option>
                                <option value="type-b">Type B - Basic</option>
                                <option value="type-c">Type C - Mobile ICU</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Status:</label>
                            <select class="filter-select">
                                <option value="">All Status</option>
                                <option value="available">Available</option>
                                <option value="in-use">In Use</option>
                                <option value="maintenance">Maintenance</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Search:</label>
                            <input type="text" placeholder="License plate or ID...">
                        </div>
                        <button class="btn-primary">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Ambulance List -->
                <div class="section">
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Type</th>
                                    <th>License Plate</th>
                                    <th>Status</th>
                                    <th>Last Maintenance</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#AMB001</td>
                                    <td><img src="https://via.placeholder.com/50" alt="Ambulance" class="table-img"></td>
                                    <td>Type A - Emergency</td>
                                    <td>AMB-1234</td>
                                    <td><span class="status-active">Available</span></td>
                                    <td>2023-10-15</td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#AMB002</td>
                                    <td><img src="https://via.placeholder.com/50" alt="Ambulance" class="table-img"></td>
                                    <td>Type B - Basic</td>
                                    <td>AMB-1235</td>
                                    <td><span class="status-active">Available</span></td>
                                    <td>2023-10-20</td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#AMB003</td>
                                    <td><img src="https://via.placeholder.com/50" alt="Ambulance" class="table-img"></td>
                                    <td>Type C - Mobile ICU</td>
                                    <td>AMB-1236</td>
                                    <td><span class="status-active">Available</span></td>
                                    <td>2023-11-01</td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#AMB004</td>
                                    <td><img src="https://via.placeholder.com/50" alt="Ambulance" class="table-img"></td>
                                    <td>Type A - Emergency</td>
                                    <td>AMB-1237</td>
                                    <td><span class="status-pending">Maintenance</span></td>
                                    <td>2023-11-10</td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#AMB005</td>
                                    <td><img src="https://via.placeholder.com/50" alt="Ambulance" class="table-img"></td>
                                    <td>Type B - Basic</td>
                                    <td>AMB-1238</td>
                                    <td><span class="status-cancelled">In Use</span></td>
                                    <td>2023-10-25</td>
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
                
                <!-- Maintenance Schedule -->
                <div class="section">
                    <div class="section-header">
                        <h2>Maintenance Schedule</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Ambulance ID</th>
                                    <th>Type</th>
                                    <th>Scheduled Date</th>
                                    <th>Maintenance Type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#AMB004</td>
                                    <td>Type A - Emergency</td>
                                    <td>2023-11-15</td>
                                    <td>Regular Check</td>
                                    <td><span class="status-pending">Scheduled</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-check-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#AMB002</td>
                                    <td>Type B - Basic</td>
                                    <td>2023-11-20</td>
                                    <td>Engine Service</td>
                                    <td><span class="status-pending">Scheduled</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-check-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#AMB001</td>
                                    <td>Type A - Emergency</td>
                                    <td>2023-12-05</td>
                                    <td>Full Service</td>
                                    <td><span class="status-pending">Scheduled</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-check-lg"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>