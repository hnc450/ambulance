<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requests | Ambulance Rental</title>
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
                <li><a href="clients.html"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="#"><i class="bi bi-person-badge"></i> Users</a></li>
                <li><a href="call-center.html"><i class="bi bi-telephone"></i> Call Center</a></li>
                <li><a href="reports.html"><i class="bi bi-graph-up"></i> Reports</a></li>
                <li class="active"><a href="requests.html"><i class="bi bi-clipboard-check"></i> Requests</a></li>
                <li><a href="hospitals.html"><i class="bi bi-hospital"></i> Hospitals</a></li>
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
                <h1>Ambulance Requests</h1>
                
                <!-- Request Stats -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">New Requests</div>
                                <div class="stat-card-value">12</div>
                                <div class="stat-card-desc">Awaiting review</div>
                            </div>
                            <div class="stat-card-icon bg-primary">
                                <i class="bi bi-clipboard-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">In Progress</div>
                                <div class="stat-card-value">8</div>
                                <div class="stat-card-desc">Being processed</div>
                            </div>
                            <div class="stat-card-icon bg-warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">Completed</div>
                                <div class="stat-card-value">24</div>
                                <div class="stat-card-desc">Last 7 days</div>
                            </div>
                            <div class="stat-card-icon bg-success">
                                <i class="bi bi-check-circle"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="stat-card">
                            <div class="stat-card-content">
                                <div class="stat-card-title">Cancelled</div>
                                <div class="stat-card-value">3</div>
                                <div class="stat-card-desc">Last 7 days</div>
                            </div>
                            <div class="stat-card-icon bg-danger">
                                <i class="bi bi-x-circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- New Requests -->
                <div class="section">
                    <div class="section-header">
                        <h2>New Requests</h2>
                        <div class="section-actions">
                            <button class="btn-outline"><i class="bi bi-check-all"></i> Approve All</button>
                            <button class="btn-outline text-danger"><i class="bi bi-x-lg"></i> Reject All</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Client</th>
                                    <th>Ambulance Type</th>
                                    <th>Pickup Location</th>
                                    <th>Destination</th>
                                    <th>Date & Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>REQ-1245</td>
                                    <td>John Doe</td>
                                    <td>Advanced Life Support</td>
                                    <td>123 Main St, New York</td>
                                    <td>Memorial Hospital</td>
                                    <td>Nov 30, 2023 - 10:30 AM</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REQ-1244</td>
                                    <td>Jane Smith</td>
                                    <td>Basic Life Support</td>
                                    <td>456 Oak Ave, Brooklyn</td>
                                    <td>City General Hospital</td>
                                    <td>Nov 30, 2023 - 11:45 AM</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REQ-1243</td>
                                    <td>Robert Johnson</td>
                                    <td>Patient Transport</td>
                                    <td>789 Pine St, Queens</td>
                                    <td>St. Luke's Medical Center</td>
                                    <td>Nov 30, 2023 - 2:15 PM</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REQ-1242</td>
                                    <td>Emily Wilson</td>
                                    <td>Advanced Life Support</td>
                                    <td>321 Elm St, Bronx</td>
                                    <td>Mercy Hospital</td>
                                    <td>Dec 1, 2023 - 9:00 AM</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REQ-1241</td>
                                    <td>Michael Davis</td>
                                    <td>Basic Life Support</td>
                                    <td>654 Maple Ave, Staten Island</td>
                                    <td>Community Medical Center</td>
                                    <td>Dec 1, 2023 - 10:30 AM</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                            <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- In Progress Requests -->
                <div class="section">
                    <div class="section-header">
                        <h2>In Progress Requests</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Client</th>
                                    <th>Ambulance Type</th>
                                    <th>Assigned To</th>
                                    <th>Pickup Location</th>
                                    <th>Destination</th>
                                    <th>Date & Time</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>REQ-1240</td>
                                    <td>Sarah Brown</td>
                                    <td>Advanced Life Support</td>
                                    <td>John Smith</td>
                                    <td>987 Cedar St, Manhattan</td>
                                    <td>NY Presbyterian Hospital</td>
                                    <td>Nov 29, 2023 - 3:15 PM</td>
                                    <td><span class="status-in-progress">In Progress</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REQ-1239</td>
                                    <td>David Miller</td>
                                    <td>Basic Life Support</td>
                                    <td>Sarah Johnson</td>
                                    <td>753 Birch St, Queens</td>
                                    <td>Queens Medical Center</td>
                                    <td>Nov 29, 2023 - 4:30 PM</td>
                                    <td><span class="status-in-progress">In Progress</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>REQ-1238</td>
                                    <td>Jennifer Lee</td>
                                    <td>Patient Transport</td>
                                    <td>Michael Brown</td>
                                    <td>159 Walnut St, Brooklyn</td>
                                    <td>Brooklyn General Hospital</td>
                                    <td>Nov 29, 2023 - 5:45 PM</td>
                                    <td><span class="status-in-progress">In Progress</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action"><i class="bi bi-eye"></i></button>
                                            <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                            <button class="btn-action text-success"><i class="bi bi-check-lg"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Request Form -->
                <div class="section">
                    <div class="section-header">
                        <h2>Create New Request</h2>
                    </div>
                    <form class="request-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="client">Client</label>
                                    <select id="client" class="form-control">
                                        <option value="">Select Client</option>
                                        <option value="1">John Doe</option>
                                        <option value="2">Jane Smith</option>
                                        <option value="3">Robert Johnson</option>
                                        <option value="4">Emily Wilson</option>
                                        <option value="5">Michael Davis</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="ambulance-type">Ambulance Type</label>
                                    <select id="ambulance-type" class="form-control">
                                        <option value="">Select Ambulance Type</option>
                                        <option value="als">Advanced Life Support</option>
                                        <option value="bls">Basic Life Support</option>
                                        <option value="pt">Patient Transport</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pickup-location">Pickup Location</label>
                                    <input type="text" id="pickup-location" class="form-control" placeholder="Enter pickup address">
                                </div>
                                <div class="form-group">
                                    <label for="destination">Destination</label>
                                    <input type="text" id="destination" class="form-control" placeholder="Enter destination address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pickup-date">Pickup Date</label>
                                    <input type="date" id="pickup-date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pickup-time">Pickup Time</label>
                                    <input type="time" id="pickup-time" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="special-instructions">Special Instructions</label>
                                    <textarea id="special-instructions" class="form-control" rows="4" placeholder="Enter any special instructions or requirements"></textarea>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="emergency">
                                    <label for="emergency">Emergency Request (Priority)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn-primary">Submit Request</button>
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