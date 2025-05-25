<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospitals | Ambulance Rental</title>
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
                <li><a href="/"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li><a href="/ambulances"><i class="bi bi-truck"></i> Ambulances</a></li>
                <li><a href="/bookings"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li><a href="/clients"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="/drivers"><i class="bi bi-person-badge"></i> Drivers</a></li>
                <li><a href="/center"><i class="bi bi-telephone"></i> Call Center</a></li>
                <li><a href="/reports"><i class="bi bi-graph-up"></i> Reports</a></li>
                <li><a href="requests.html"><i class="bi bi-clipboard-check"></i> Requests</a></li>
                <li class="active"><a href="hospitals.html"><i class="bi bi-hospital"></i> Hospitals</a></li>
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
                <h1>Hospital Management</h1>
                
                <!-- Hospital Stats -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">Total Hospitals</div>
                                <div class="stat-card-value">24</div>
                                <div class="stat-card-desc">In network</div>
                            </div>
                            <div class="stat-card-icon bg-primary">
                                <i class="bi bi-hospital"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">Active Partnerships</div>
                                <div class="stat-card-value">18</div>
                                <div class="stat-card-desc">Contracted hospitals</div>
                            </div>
                            <div class="stat-card-icon bg-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">Pending Approvals</div>
                                <div class="stat-card-value">3</div>
                                <div class="stat-card-desc">Awaiting verification</div>
                            </div>
                            <div class="stat-card-icon bg-warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">Monthly Transfers</div>
                                <div class="stat-card-value">142</div>
                                <div class="stat-card-desc">This month</div>
                            </div>
                            <div class="stat-card-icon bg-info">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Hospital Map -->
                <div class="section">
                    <div class="section-header">
                        <h2>Hospital Network Map</h2>
                        <div class="section-actions">
                            <button class="btn-outline"><i class="bi bi-geo-alt"></i> View Full Map</button>
                        </div>
                    </div>
                    <div class="hospital-map">
                        <!-- Placeholder for map -->
                        <div class="map-placeholder">
                            <div class="placeholder-text">Interactive Hospital Map</div>
                            <div class="placeholder-subtext">Showing all 24 hospitals in network</div>
                        </div>
                    </div>
                </div>
                
                <!-- Hospital List -->
                <div class="section">
                    <div class="section-header">
                        <h2>Hospital Directory</h2>
                        <div class="section-actions">
                            <button class="btn-primary"><i class="bi bi-plus-lg"></i> Add New Hospital</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Hospital ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th>Partnership Status</th>
                                    <th>Monthly Transfers</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>HOSP-001</td>
                                    <td>Memorial Hospital</td>
                                    <td>General</td>
                                    <td>123 Main St, New York, NY</td>
                                    <td>212-555-1234</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>32</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-002</td>
                                    <td>City General Hospital</td>
                                    <td>General</td>
                                    <td>456 Oak Ave, Brooklyn, NY</td>
                                    <td>718-555-2345</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>28</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-003</td>
                                    <td>St. Luke's Medical Center</td>
                                    <td>Specialized</td>
                                    <td>789 Pine St, Queens, NY</td>
                                    <td>718-555-3456</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>24</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-004</td>
                                    <td>Mercy Hospital</td>
                                    <td>General</td>
                                    <td>321 Elm St, Bronx, NY</td>
                                    <td>718-555-4567</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>18</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-005</td>
                                    <td>Community Medical Center</td>
                                    <td>Community</td>
                                    <td>654 Maple Ave, Staten Island, NY</td>
                                    <td>718-555-5678</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>15</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-006</td>
                                    <td>NY Presbyterian Hospital</td>
                                    <td>General</td>
                                    <td>987 Cedar St, Manhattan, NY</td>
                                    <td>212-555-6789</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td>25</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-007</td>
                                    <td>Queens Medical Center</td>
                                    <td>General</td>
                                    <td>753 Birch St, Queens, NY</td>
                                    <td>718-555-7890</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>0</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>HOSP-008</td>
                                    <td>Brooklyn General Hospital</td>
                                    <td>General</td>
                                    <td>159 Walnut St, Brooklyn, NY</td>
                                    <td>718-555-8901</td>
                                    <td><span class="status-inactive">Inactive</span></td>
                                    <td>0</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Hospital Form -->
                <div class="section">
                    <div class="section-header">
                        <h2>Add New Hospital</h2>
                    </div>
                    <form class="hospital-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hospital-name">Hospital Name</label>
                                    <input type="text" id="hospital-name" class="form-control" placeholder="Enter hospital name">
                                </div>
                                <div class="form-group">
                                    <label for="hospital-type">Hospital Type</label>
                                    <select id="hospital-type" class="form-control">
                                        <option value="">Select Hospital Type</option>
                                        <option value="general">General</option>
                                        <option value="specialized">Specialized</option>
                                        <option value="community">Community</option>
                                        <option value="teaching">Teaching</option>
                                        <option value="rehabilitation">Rehabilitation</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="hospital-address">Address</label>
                                    <input type="text" id="hospital-address" class="form-control" placeholder="Enter street address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="hospital-city">City</label>
                                        <input type="text" id="hospital-city" class="form-control" placeholder="Enter city">
                                    </div>
                                    <div class="form-group">
                                        <label for="hospital-state">State</label>
                                        <input type="text" id="hospital-state" class="form-control" placeholder="Enter state">
                                    </div>
                                    <div class="form-group">
                                        <label for="hospital-zip">ZIP Code</label>
                                        <input type="text" id="hospital-zip" class="form-control" placeholder="Enter ZIP code">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hospital-phone">Phone Number</label>
                                    <input type="tel" id="hospital-phone" class="form-control" placeholder="Enter phone number">
                                </div>
                                <div class="form-group">
                                    <label for="hospital-email">Email</label>
                                    <input type="email" id="hospital-email" class="form-control" placeholder="Enter email address">
                                </div>
                                <div class="form-group">
                                    <label for="contact-person">Primary Contact Person</label>
                                    <input type="text" id="contact-person" class="form-control" placeholder="Enter contact person name">
                                </div>
                                <div class="form-group">
                                    <label for="contact-position">Contact Position</label>
                                    <input type="text" id="contact-position" class="form-control" placeholder="Enter contact person position">
                                </div>
                                <div class="form-group">
                                    <label for="partnership-status">Partnership Status</label>
                                    <select id="partnership-status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="pending">Pending</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="hospital-notes">Notes</label>
                                    <textarea id="hospital-notes" class="form-control" rows="3" placeholder="Enter additional notes"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-primary">Add Hospital</button>
                            <button type="reset" class="btn-outline">Clear Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>