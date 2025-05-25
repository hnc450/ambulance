<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings | Ambulance Rental</title>
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
                <li class="active"><a href="bookings.html"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li><a href="clients.html"><i class="bi bi-people"></i> Clients</a></li>
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
                <h1>Booking Management</h1>
                
                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn-primary"><i class="bi bi-plus-lg"></i> Create New Booking</button>
                    <button class="btn-outline"><i class="bi bi-filter"></i> Filter</button>
                </div>
                
                <!-- Booking Filters -->
                <div class="section">
                    <div class="filter-container">
                        <div class="filter-group">
                            <label>Status:</label>
                            <select class="filter-select">
                                <option value="">All Status</option>
                                <option value="active">Active</option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancelled</option>
                            </select>
                        </div>
                        <div class="filter-group">
                            <label>Date Range:</label>
                            <input type="date" class="filter-date">
                            <span>to</span>
                            <input type="date" class="filter-date">
                        </div>
                        <div class="filter-group">
                            <label>Search:</label>
                            <input type="text" placeholder="Booking ID or client name...">
                        </div>
                        <button class="btn-primary">Apply Filters</button>
                    </div>
                </div>
                
                <!-- Booking List -->
                <div class="section">
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Client</th>
                                    <th>Ambulance</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Payment</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#BK1234</td>
                                    <td>John Smith</td>
                                    <td>Type A - Emergency</td>
                                    <td>City Hospital</td>
                                    <td>St. Mary's Hospital</td>
                                    <td>2023-11-15</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td><span class="status-completed">Paid</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1235</td>
                                    <td>Sarah Johnson</td>
                                    <td>Type B - Basic</td>
                                    <td>Home</td>
                                    <td>General Hospital</td>
                                    <td>2023-11-14</td>
                                    <td><span class="status-completed">Completed</span></td>
                                    <td><span class="status-completed">Paid</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1236</td>
                                    <td>Michael Brown</td>
                                    <td>Type C - Mobile ICU</td>
                                    <td>Memorial Hospital</td>
                                    <td>Specialized Care Center</td>
                                    <td>2023-11-16</td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td><span class="status-pending">Pending</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1237</td>
                                    <td>Emily Davis</td>
                                    <td>Type A - Emergency</td>
                                    <td>Accident Site</td>
                                    <td>Emergency Room</td>
                                    <td>2023-11-17</td>
                                    <td><span class="status-cancelled">Cancelled</span></td>
                                    <td><span class="status-cancelled">Refunded</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#BK1238</td>
                                    <td>Robert Wilson</td>
                                    <td>Type B - Basic</td>
                                    <td>Nursing Home</td>
                                    <td>Medical Center</td>
                                    <td>2023-11-18</td>
                                    <td><span class="status-active">Active</span></td>
                                    <td><span class="status-completed">Paid</span></td>
                                    <td>
                                        <button class="btn-action"><i class="bi bi-eye"></i></button>
                                        <button class="btn-action"><i class="bi bi-pencil"></i></button>
                                        <button class="btn-action"><i class="bi bi-x-lg"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Calendar View -->
                <div class="section">
                    <div class="section-header">
                        <h2>Booking Calendar</h2>
                        <div class="calendar-controls">
                            <button class="btn-outline btn-sm"><i class="bi bi-chevron-left"></i></button>
                            <span>November 2023</span>
                            <button class="btn-outline btn-sm"><i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="calendar-container">
                        <div class="calendar-header">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <div class="calendar-body">
                            <div class="calendar-day disabled">29</div>
                            <div class="calendar-day disabled">30</div>
                            <div class="calendar-day disabled">31</div>
                            <div class="calendar-day">1</div>
                            <div class="calendar-day">2</div>
                            <div class="calendar-day">3</div>
                            <div class="calendar-day">4</div>
                            <div class="calendar-day">5</div>
                            <div class="calendar-day">6</div>
                            <div class="calendar-day">7</div>
                            <div class="calendar-day">8</div>
                            <div class="calendar-day">9</div>
                            <div class="calendar-day">10</div>
                            <div class="calendar-day">11</div>
                            <div class="calendar-day">12</div>
                            <div class="calendar-day">13</div>
                            <div class="calendar-day has-event">14
                                <div class="event-indicator">1</div>
                            </div>
                            <div class="calendar-day has-event">15
                                <div class="event-indicator">1</div>
                            </div>
                            <div class="calendar-day has-event">16
                                <div class="event-indicator">1</div>
                            </div>
                            <div class="calendar-day has-event">17
                                <div class="event-indicator">1</div>
                            </div>
                            <div class="calendar-day has-event">18
                                <div class="event-indicator">1</div>
                            </div>
                            <div class="calendar-day">19</div>
                            <div class="calendar-day">20</div>
                            <div class="calendar-day">21</div>
                            <div class="calendar-day">22</div>
                            <div class="calendar-day">23</div>
                            <div class="calendar-day">24</div>
                            <div class="calendar-day">25</div>
                            <div class="calendar-day">26</div>
                            <div class="calendar-day">27</div>
                            <div class="calendar-day">28</div>
                            <div class="calendar-day">29</div>
                            <div class="calendar-day">30</div>
                            <div class="calendar-day disabled">1</div>
                            <div class="calendar-day disabled">2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>