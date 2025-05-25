<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | Ambulance Rental</title>
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
                <li class="active"><a href="reports.html"><i class="bi bi-graph-up"></i> Reports</a></li>
                <li><a href="requests.html"><i class="bi bi-clipboard-check"></i> Requests</a></li>
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
                <h1>Reports</h1>
                
                <!-- Report Filters -->
                <div class="section">
                    <div class="section-header">
                        <h2>Report Filters</h2>
                    </div>
                    <div class="report-filters">
                        <form class="filter-form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="report-type">Report Type</label>
                                        <select id="report-type" class="form-control">
                                            <option value="bookings">Bookings Report</option>
                                            <option value="revenue">Revenue Report</option>
                                            <option value="ambulance-usage">Ambulance Usage</option>
                                            <option value="client-activity">Client Activity</option>
                                            <option value="driver-performance">Driver Performance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date-range">Date Range</label>
                                        <select id="date-range" class="form-control">
                                            <option value="today">Today</option>
                                            <option value="yesterday">Yesterday</option>
                                            <option value="this-week">This Week</option>
                                            <option value="last-week">Last Week</option>
                                            <option value="this-month" selected>This Month</option>
                                            <option value="last-month">Last Month</option>
                                            <option value="custom">Custom Range</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="start-date">Start Date</label>
                                        <input type="date" id="start-date" class="form-control" value="2023-11-01">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="end-date">End Date</label>
                                        <input type="date" id="end-date" class="form-control" value="2023-11-30">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-primary">Generate Report</button>
                                    <button type="button" class="btn-outline">Reset Filters</button>
                                    <div class="float-end">
                                        <button type="button" class="btn-outline"><i class="bi bi-download"></i> Export PDF</button>
                                        <button type="button" class="btn-outline"><i class="bi bi-file-excel"></i> Export Excel</button>
                                        <button type="button" class="btn-outline"><i class="bi bi-printer"></i> Print</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Revenue Overview -->
                <div class="section">
                    <div class="section-header">
                        <h2>Revenue Overview</h2>
                        <span class="badge bg-primary">This Month</span>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="chart-container">
                                <canvas id="revenueChart" height="300"></canvas>
                                <div class="chart-placeholder">
                                    <div class="placeholder-text">Revenue Chart</div>
                                    <div class="placeholder-subtext">Daily revenue for November 2023</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stats-container">
                                <div class="stat-item">
                                    <div class="stat-title">Total Revenue</div>
                                    <div class="stat-value">$24,850</div>
                                    <div class="stat-change positive">+12.5% from last month</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-title">Average Daily Revenue</div>
                                    <div class="stat-value">$828</div>
                                    <div class="stat-change positive">+5.2% from last month</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-title">Total Bookings</div>
                                    <div class="stat-value">142</div>
                                    <div class="stat-change positive">+8.3% from last month</div>
                                </div>
                                <div class="stat-item">
                                    <div class="stat-title">Average Booking Value</div>
                                    <div class="stat-value">$175</div>
                                    <div class="stat-change positive">+3.8% from last month</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Booking Statistics -->
                <div class="section">
                    <div class="section-header">
                        <h2>Booking Statistics</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="chart-container">
                                <canvas id="bookingTypeChart" height="250"></canvas>
                                <div class="chart-placeholder">
                                    <div class="placeholder-text">Booking Types</div>
                                    <div class="placeholder-subtext">Distribution by ambulance type</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="chart-container">
                                <canvas id="bookingStatusChart" height="250"></canvas>
                                <div class="chart-placeholder">
                                    <div class="placeholder-text">Booking Status</div>
                                    <div class="placeholder-subtext">Distribution by status</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Top Performers -->
                <div class="section">
                    <div class="section-header">
                        <h2>Top Performers</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Top Ambulances</h3>
                                    <span class="badge bg-primary">By Revenue</span>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="data-table">
                                            <thead>
                                                <tr>
                                                    <th>Ambulance ID</th>
                                                    <th>Type</th>
                                                    <th>Bookings</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>AMB-1023</td>
                                                    <td>Advanced Life Support</td>
                                                    <td>28</td>
                                                    <td>$5,320</td>
                                                </tr>
                                                <tr>
                                                    <td>AMB-1045</td>
                                                    <td>Basic Life Support</td>
                                                    <td>32</td>
                                                    <td>$4,800</td>
                                                </tr>
                                                <tr>
                                                    <td>AMB-1012</td>
                                                    <td>Patient Transport</td>
                                                    <td>35</td>
                                                    <td>$3,850</td>
                                                </tr>
                                                <tr>
                                                    <td>AMB-1034</td>
                                                    <td>Advanced Life Support</td>
                                                    <td>18</td>
                                                    <td>$3,420</td>
                                                </tr>
                                                <tr>
                                                    <td>AMB-1056</td>
                                                    <td>Basic Life Support</td>
                                                    <td>22</td>
                                                    <td>$3,300</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Top Drivers</h3>
                                    <span class="badge bg-primary">By Bookings</span>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="data-table">
                                            <thead>
                                                <tr>
                                                    <th>Driver</th>
                                                    <th>Bookings</th>
                                                    <th>Rating</th>
                                                    <th>Revenue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>John Smith</td>
                                                    <td>24</td>
                                                    <td>4.9/5</td>
                                                    <td>$4,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Sarah Johnson</td>
                                                    <td>22</td>
                                                    <td>4.8/5</td>
                                                    <td>$4,180</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Brown</td>
                                                    <td>20</td>
                                                    <td>4.7/5</td>
                                                    <td>$3,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Emily Davis</td>
                                                    <td>18</td>
                                                    <td>4.9/5</td>
                                                    <td>$3,420</td>
                                                </tr>
                                                <tr>
                                                    <td>Robert Wilson</td>
                                                    <td>16</td>
                                                    <td>4.6/5</td>
                                                    <td>$3,040</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Detailed Report -->
                <div class="section">
                    <div class="section-header">
                        <h2>Detailed Booking Report</h2>
                        <a href="#" class="view-all">Export Full Report</a>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Date</th>
                                    <th>Client</th>
                                    <th>Ambulance Type</th>
                                    <th>Driver</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BK-10245</td>
                                    <td>Nov 28, 2023</td>
                                    <td>John Doe</td>
                                    <td>Advanced Life Support</td>
                                    <td>Sarah Johnson</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$190</td>
                                </tr>
                                <tr>
                                    <td>BK-10244</td>
                                    <td>Nov 27, 2023</td>
                                    <td>Jane Smith</td>
                                    <td>Basic Life Support</td>
                                    <td>Michael Brown</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>BK-10243</td>
                                    <td>Nov 27, 2023</td>
                                    <td>Robert Johnson</td>
                                    <td>Patient Transport</td>
                                    <td>Emily Davis</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$110</td>
                                </tr>
                                <tr>
                                    <td>BK-10242</td>
                                    <td>Nov 26, 2023</td>
                                    <td>Emily Wilson</td>
                                    <td>Advanced Life Support</td>
                                    <td>John Smith</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$190</td>
                                </tr>
                                <tr>
                                    <td>BK-10241</td>
                                    <td>Nov 26, 2023</td>
                                    <td>Michael Davis</td>
                                    <td>Basic Life Support</td>
                                    <td>Robert Wilson</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$150</td>
                                </tr>
                                <tr>
                                    <td>BK-10240</td>
                                    <td>Nov 25, 2023</td>
                                    <td>Sarah Brown</td>
                                    <td>Patient Transport</td>
                                    <td>Sarah Johnson</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$110</td>
                                </tr>
                                <tr>
                                    <td>BK-10239</td>
                                    <td>Nov 25, 2023</td>
                                    <td>David Miller</td>
                                    <td>Advanced Life Support</td>
                                    <td>Michael Brown</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$190</td>
                                </tr>
                                <tr>
                                    <td>BK-10238</td>
                                    <td>Nov 24, 2023</td>
                                    <td>Jennifer Lee</td>
                                    <td>Basic Life Support</td>
                                    <td>Emily Davis</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td>$150</td>
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