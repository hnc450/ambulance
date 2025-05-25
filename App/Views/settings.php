<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Ambulance Rental</title>
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
                <li><a href="#"><i class="bi bi-person-badge"></i> Drivers</a></li>
                <li><a href="call-center.html"><i class="bi bi-telephone"></i> Call Center</a></li>
                <li class="active"><a href="settings.html"><i class="bi bi-gear"></i> Settings</a></li>
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
                <h1>Settings</h1>
                
                <!-- Settings Tabs -->
                <div class="section">
                    <div class="settings-tabs">
                        <div class="settings-tab active" data-tab="general">General</div>
                        <div class="settings-tab" data-tab="profile">Profile</div>
                        <div class="settings-tab" data-tab="notifications">Notifications</div>
                        <div class="settings-tab" data-tab="security">Security</div>
                        <div class="settings-tab" data-tab="billing">Billing</div>
                        <div class="settings-tab" data-tab="system">System</div>
                    </div>
                    
                    <!-- General Settings -->
                    <div id="general-settings" class="settings-content active">
                        <h2>General Settings</h2>
                        <form class="settings-form">
                            <div class="form-group">
                                <label for="company-name">Company Name</label>
                                <input type="text" id="company-name" class="form-control" value="AmbuRent">
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="contact-email">Contact Email</label>
                                    <input type="email" id="contact-email" class="form-control" value="contact@amburent.com">
                                </div>
                                <div class="form-group">
                                    <label for="contact-phone">Contact Phone</label>
                                    <input type="tel" id="contact-phone" class="form-control" value="+1 234-567-8900">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company-address">Company Address</label>
                                <textarea id="company-address" class="form-control" rows="3">123 Ambulance Street, Medical District, City, State, 12345</textarea>
                            </div>
                            <div class="form-group">
                                <label for="timezone">Timezone</label>
                                <select id="timezone" class="form-control">
                                    <option value="utc-8">Pacific Time (UTC-8)</option>
                                    <option value="utc-7">Mountain Time (UTC-7)</option>
                                    <option value="utc-6">Central Time (UTC-6)</option>
                                    <option value="utc-5" selected>Eastern Time (UTC-5)</option>
                                    <option value="utc-0">UTC</option>
                                    <option value="utc+1">Central European Time (UTC+1)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date-format">Date Format</label>
                                <select id="date-format" class="form-control">
                                    <option value="mm/dd/yyyy" selected>MM/DD/YYYY</option>
                                    <option value="dd/mm/yyyy">DD/MM/YYYY</option>
                                    <option value="yyyy-mm-dd">YYYY-MM-DD</option>
                                </select>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="enable-dark-mode">
                                <label for="enable-dark-mode">Enable Dark Mode</label>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Save Changes</button>
                                <button type="reset" class="btn-outline">Reset</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Profile Settings -->
                    <div id="profile-settings" class="settings-content">
                        <h2>Profile Settings</h2>
                        <div class="profile-settings-container">
                            <div class="profile-image-upload">
                                <img src="https://via.placeholder.com/150" alt="Profile" class="profile-image">
                                <div class="profile-image-actions">
                                    <button class="btn-outline">Upload New Image</button>
                                    <button class="btn-outline text-danger">Remove Image</button>
                                </div>
                            </div>
                            <form class="settings-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="first-name">First Name</label>
                                        <input type="text" id="first-name" class="form-control" value="Admin">
                                    </div>
                                    <div class="form-group">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name" class="form-control" value="User">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" value="admin@amburent.com">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="tel" id="phone" class="form-control" value="+1 234-567-8901">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" id="role" class="form-control" value="Administrator" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="bio">Bio</label>
                                    <textarea id="bio" class="form-control" rows="3">System administrator for AmbuRent ambulance rental service.</textarea>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn-primary">Update Profile</button>
                                    <button type="reset" class="btn-outline">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Notification Settings -->
                    <div id="notifications-settings" class="settings-content">
                        <h2>Notification Settings</h2>
                        <form class="settings-form">
                            <div class="notification-group">
                                <h3>Email Notifications</h3>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="email-bookings" checked>
                                    <label for="email-bookings">New Booking Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="email-cancellations" checked>
                                    <label for="email-cancellations">Booking Cancellation Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="email-payments" checked>
                                    <label for="email-payments">Payment Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="email-system">
                                    <label for="email-system">System Updates</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="email-marketing">
                                    <label for="email-marketing">Marketing and Promotions</label>
                                </div>
                            </div>
                            
                            <div class="notification-group">
                                <h3>Push Notifications</h3>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="push-bookings" checked>
                                    <label for="push-bookings">New Booking Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="push-cancellations" checked>
                                    <label for="push-cancellations">Booking Cancellation Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="push-payments">
                                    <label for="push-payments">Payment Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="push-system" checked>
                                    <label for="push-system">System Updates</label>
                                </div>
                            </div>
                            
                            <div class="notification-group">
                                <h3>SMS Notifications</h3>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="sms-bookings">
                                    <label for="sms-bookings">New Booking Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="sms-cancellations">
                                    <label for="sms-cancellations">Booking Cancellation Notifications</label>
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="sms-emergencies" checked>
                                    <label for="sms-emergencies">Emergency Notifications</label>
                                </div>
                            </div>
                            
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Save Preferences</button>
                                <button type="reset" class="btn-outline">Reset to Default</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Security Settings -->
                    <div id="security-settings" class="settings-content">
                        <h2>Security Settings</h2>
                        <form class="settings-form">
                            <div class="security-group">
                                <h3>Change Password</h3>
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
                                <button type="button" class="btn-primary">Update Password</button>
                            </div>
                            
                            <div class="security-group">
                                <h3>Two-Factor Authentication</h3>
                                <p class="security-info">Two-factor authentication adds an extra layer of security to your account.</p>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="enable-2fa">
                                    <label for="enable-2fa">Enable Two-Factor Authentication</label>
                                </div>
                                <button type="button" class="btn-outline">Set Up Two-Factor Authentication</button>
                            </div>
                            
                            <div class="security-group">
                                <h3>Login Sessions</h3>
                                <p class="security-info">These are the devices that are currently logged into your account.</p>
                                <div class="table-responsive">
                                    <table class="data-table">
                                        <thead>
                                            <tr>
                                                <th>Device</th>
                                                <th>Location</th>
                                                <th>IP Address</th>
                                                <th>Last Activity</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Chrome on Windows</td>
                                                <td>New York, USA</td>
                                                <td>192.168.1.1</td>
                                                <td>Now (Current Session)</td>
                                                <td><button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td>Safari on iPhone</td>
                                                <td>New York, USA</td>
                                                <td>192.168.1.2</td>
                                                <td>2 hours ago</td>
                                                <td><button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn-outline text-danger">Log Out of All Devices</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Billing Settings -->
                    <div id="billing-settings" class="settings-content">
                        <h2>Billing Settings</h2>
                        <div class="billing-info">
                            <div class="billing-plan">
                                <h3>Current Plan</h3>
                                <p><strong>Enterprise Plan</strong></p>
                                <p>$499/month</p>
                                <p>Billed monthly</p>
                                <p>Next billing date: December 1, 2023</p>
                                <button class="btn-outline">Upgrade Plan</button>
                            </div>
                            <div class="payment-method">
                                <h3>Payment Method</h3>
                                <div class="card-info">
                                    <i class="bi bi-credit-card"></i>
                                    <div>
                                        <p><strong>Visa ending in 4242</strong></p>
                                        <p>Expires 12/2025</p>
                                    </div>
                                </div>
                                <button class="btn-outline">Update Payment Method</button>
                            </div>
                        </div>
                        
                        <h3>Billing History</h3>
                        <div class="table-responsive">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#INV-1234</td>
                                        <td>November 1, 2023</td>
                                        <td>$499.00</td>
                                        <td><span class="status-completed">Paid</span></td>
                                        <td><button class="btn-action"><i class="bi bi-download"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>#INV-1233</td>
                                        <td>October 1, 2023</td>
                                        <td>$499.00</td>
                                        <td><span class="status-completed">Paid</span></td>
                                        <td><button class="btn-action"><i class="bi bi-download"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td>#INV-1232</td>
                                        <td>September 1, 2023</td>
                                        <td>$499.00</td>
                                        <td><span class="status-completed">Paid</span></td>
                                        <td><button class="btn-action"><i class="bi bi-download"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <!-- System Settings -->
                    <div id="system-settings" class="settings-content">
                        <h2>System Settings</h2>
                        <form class="settings-form">
                            <div class="form-group">
                                <label for="booking-buffer">Booking Buffer Time (minutes)</label>
                                <input type="number" id="booking-buffer" class="form-control" value="30">
                                <small class="form-text text-muted">Minimum time between bookings for the same ambulance</small>
                            </div>
                            <div class="form-group">
                                <label for="maintenance-interval">Maintenance Interval (days)</label>
                                <input type="number" id="maintenance-interval" class="form-control" value="30">
                                <small class="form-text text-muted">How often ambulances should undergo routine maintenance</small>
                            </div>
                            <div class="form-group">
                                <label for="cancellation-policy">Cancellation Policy (hours)</label>
                                <input type="number" id="cancellation-policy" class="form-control" value="24">
                                <small class="form-text text-muted">How many hours before a booking can be cancelled without penalty</small>
                            </div>
                            <div class="form-group">
                                <label for="default-currency">Default Currency</label>
                                <select id="default-currency" class="form-control">
                                    <option value="usd" selected>USD ($)</option>
                                    <option value="eur">EUR (€)</option>
                                    <option value="gbp">GBP (£)</option>
                                    <option value="cad">CAD (C$)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tax-rate">Tax Rate (%)</label>
                                <input type="number" id="tax-rate" class="form-control" value="8.5">
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="enable-auto-assign" checked>
                                <label for="enable-auto-assign">Enable Auto-Assignment of Drivers</label>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="enable-sms" checked>
                                <label for="enable-sms">Enable SMS Notifications</label>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="enable-maintenance-alerts" checked>
                                <label for="enable-maintenance-alerts">Enable Maintenance Alerts</label>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn-primary">Save System Settings</button>
                                <button type="reset" class="btn-outline">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>