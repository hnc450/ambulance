<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile | Ambulance Rental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/dasboard.css">
    <style>
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--white-color);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .profile-info h2 {
            margin: 0 0 5px 0;
            font-size: 1.8rem;
        }
        
        .profile-info p {
            margin: 0;
            color: var(--text-muted);
        }
        
        .profile-status {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 5px;
        }
        
        .profile-status.online {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .profile-actions {
            margin-left: auto;
            display: flex;
            gap: 10px;
        }
        
        .profile-stats {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .profile-stat-item {
            flex: 1;
            min-width: 150px;
            background-color: var(--white-color);
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }
        
        .profile-stat-title {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 5px;
        }
        
        .profile-stat-value {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0;
        }
        
        .activity-item {
            display: flex;
            align-items: flex-start;
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .activity-icon.login {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .activity-icon.settings {
            background-color: rgba(108, 117, 125, 0.1);
            color: #6c757d;
        }
        
        .activity-icon.booking {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .activity-icon.user {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }
        
        .activity-content {
            flex-grow: 1;
        }
        
        .activity-content h4 {
            margin: 0;
            font-size: 1rem;
        }
        
        .activity-content p {
            margin: 5px 0 0 0;
            color: var(--text-muted);
            font-size: 0.9rem;
        }
        
        .activity-time {
            color: var(--text-muted);
            font-size: 0.8rem;
            white-space: nowrap;
            margin-left: 10px;
        }
        
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
            
            .profile-actions {
                margin-left: 0;
                margin-top: 15px;
                justify-content: center;
            }
            
            .profile-stat-item {
                min-width: calc(50% - 10px);
            }
        }
    </style>
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
                <li><a href="/dashboard"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li><a href="/ambulances"><i class="bi bi-truck"></i> Ambulances</a></li>
                <li><a href="/bookings"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li><a href="/clients"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="#"><i class="bi bi-person-badge"></i> Drivers</a></li>
                <li><a href="/center"><i class="bi bi-telephone"></i> Call Center</a></li>
                <li><a href="/reports"><i class="bi bi-graph-up"></i> Reports</a></li>
                <li><a href="/requests"><i class="bi bi-clipboard-check"></i> Requests</a></li>
                <li><a href="/hospitals"><i class="bi bi-hospital"></i> Hospitals</a></li>
                <li><a href="/settings"><i class="bi bi-gear"></i> Settings</a></li>
                <li class="active"><a href="/admin"><i class="bi bi-person-circle"></i>Admin Profile</a></li>
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
                <!-- Profile Header -->
                <div class="profile-header">
                    <img src="https://via.placeholder.com/120" alt="Admin" class="profile-avatar">
                    <div class="profile-info">
                        <h2> 
                            <?= $_SESSION['user'][0]['nom'] ?? '' ?>
                        </h2>
                        <p>System Administrator</p>
                        <span class="profile-status online">Online</span>
                    </div>
                    <div class="profile-actions">
                        <button class="btn-outline"><i class="bi bi-pencil"></i> Edit Profile</button>
                        <button class="btn-outline"><i class="bi bi-gear"></i> Settings</button>
                    </div>
                </div>
                
                <!-- Profile Stats -->
                <div class="profile-stats">
                    <div class="profile-stat-item">
                        <div class="profile-stat-title">Total Bookings</div>
                        <div class="profile-stat-value">1,248</div>
                    </div>
                    <div class="profile-stat-item">
                        <div class="profile-stat-title">Managed Ambulances</div>
                        <div class="profile-stat-value">32</div>
                    </div>
                    <div class="profile-stat-item">
                        <div class="profile-stat-title">Active Drivers</div>
                        <div class="profile-stat-value">18</div>
                    </div>
                    <div class="profile-stat-item">
                        <div class="profile-stat-title">Total Revenue</div>
                        <div class="profile-stat-value">$245,890</div>
                    </div>
                </div>
                
                <!-- Personal Information -->
                <div class="section">
                    <div class="section-header">
                        <h2>Personal Information</h2>
                        <button class="btn-outline btn-sm"><i class="bi bi-pencil"></i> Edit</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-group">
                                <label>Full Name</label>
                                <p>Admin User</p>
                            </div>
                            <div class="info-group">
                                <label>Email Address</label>
                                <p>admin@amburent.com</p>
                            </div>
                            <div class="info-group">
                                <label>Phone Number</label>
                                <p>+1 (234) 567-8901</p>
                            </div>
                            <div class="info-group">
                                <label>Date of Birth</label>
                                <p>January 15, 1985</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-group">
                                <label>Position</label>
                                <p>System Administrator</p>
                            </div>
                            <div class="info-group">
                                <label>Department</label>
                                <p>IT Administration</p>
                            </div>
                            <div class="info-group">
                                <label>Join Date</label>
                                <p>March 10, 2020</p>
                            </div>
                            <div class="info-group">
                                <label>Employee ID</label>
                                <p>EMP-2020-001</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Account Settings -->
                <div class="section">
                    <div class="section-header">
                        <h2>Account Settings</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Change Password</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="current-password">Current Password</label>
                                            <input type="password" id="current-password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-password">New Password</label>
                                            <input type="password" id="new-password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password">Confirm New Password</label>
                                            <input type="password" id="confirm-password" class="form-control">
                                        </div>
                                        <button type="submit" class="btn-primary">Update Password</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Two-Factor Authentication</h3>
                                </div>
                                <div class="card-body">
                                    <p>Enhance your account security by enabling two-factor authentication.</p>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="enable-2fa">
                                        <label for="enable-2fa">Enable Two-Factor Authentication</label>
                                    </div>
                                    <button class="btn-outline">Set Up Two-Factor Authentication</button>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3>Notification Preferences</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="email-notifications" checked>
                                        <label for="email-notifications">Email Notifications</label>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="sms-notifications" checked>
                                        <label for="sms-notifications">SMS Notifications</label>
                                    </div>
                                    <div class="form-group checkbox">
                                        <input type="checkbox" id="browser-notifications">
                                        <label for="browser-notifications">Browser Notifications</label>
                                    </div>
                                    <button class="btn-outline">Save Preferences</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="section">
                    <div class="section-header">
                        <h2>Recent Activity</h2>
                        <a href="#" class="view-all">View All Activity</a>
                    </div>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon login">
                                <i class="bi bi-box-arrow-in-right"></i>
                            </div>
                            <div class="activity-content">
                                <h4>System Login</h4>
                                <p>You logged in from IP address 192.168.1.1 using Chrome on Windows</p>
                            </div>
                            <div class="activity-time">Today, 9:30 AM</div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon settings">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Settings Updated</h4>
                                <p>You updated the system settings for booking cancellation policy</p>
                            </div>
                            <div class="activity-time">Today, 9:15 AM</div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon booking">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Booking Approved</h4>
                                <p>You approved booking #BK-10245 for client John Doe</p>
                            </div>
                            <div class="activity-time">Yesterday, 4:45 PM</div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon user">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div class="activity-content">
                                <h4>New Driver Added</h4>
                                <p>You added a new driver Michael Brown to the system</p>
                            </div>
                            <div class="activity-time">Yesterday, 2:30 PM</div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon settings">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div class="activity-content">
                                <h4>Password Changed</h4>
                                <p>You changed your account password</p>
                            </div>
                            <div class="activity-time">Nov 28, 2023, 10:15 AM</div>
                        </div>
                    </div>
                </div>
                
                <!-- API Access -->
                <div class="section">
                    <div class="section-header">
                        <h2>API Access</h2>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p>Use these API keys to access the AmbuRent API. Be careful with these keys and do not share them.</p>
                            <div class="form-group">
                                <label for="api-key">API Key</label>
                                <div class="input-with-button">
                                    <input type="text" id="api-key" class="form-control" value="sk_live_51NcgTRKjd8qKDJf7hgTR5JdH" readonly>
                                    <button class="btn-outline btn-sm"><i class="bi bi-clipboard"></i> Copy</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="api-secret">API Secret</label>
                                <div class="input-with-button">
                                    <input type="password" id="api-secret" class="form-control" value="••••••••••••••••••••••••••••••" readonly>
                                    <button class="btn-outline btn-sm"><i class="bi bi-eye"></i> Show</button>
                                    <button class="btn-outline btn-sm"><i class="bi bi-clipboard"></i> Copy</button>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button class="btn-outline text-warning"><i class="bi bi-arrow-repeat"></i> Regenerate Keys</button>
                                <a href="#" class="btn-link">View API Documentation</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Sessions -->
                <div class="section">
                    <div class="section-header">
                        <h2>Active Sessions</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Device</th>
                                    <th>Browser</th>
                                    <th>IP Address</th>
                                    <th>Location</th>
                                    <th>Last Activity</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Windows 10</td>
                                    <td>Chrome 118.0.5993.88</td>
                                    <td>192.168.1.1</td>
                                    <td>New York, USA</td>
                                    <td>Now (Current Session)</td>
                                    <td><span class="badge bg-success">Current</span></td>
                                </tr>
                                <tr>
                                    <td>iPhone 14</td>
                                    <td>Safari 16.5</td>
                                    <td>192.168.1.2</td>
                                    <td>New York, USA</td>
                                    <td>2 hours ago</td>
                                    <td><button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button></td>
                                </tr>
                                <tr>
                                    <td>MacBook Pro</td>
                                    <td>Firefox 118.0</td>
                                    <td>192.168.1.3</td>
                                    <td>New York, USA</td>
                                    <td>Yesterday, 5:30 PM</td>
                                    <td><button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="btn-outline text-danger mt-3"><i class="bi bi-shield-lock"></i> Log Out of All Other Devices</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>