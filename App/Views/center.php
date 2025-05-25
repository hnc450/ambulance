<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Center | Ambulance Rental</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .call-status {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .call-status.online {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .call-status.offline {
            background-color: rgba(108, 117, 125, 0.1);
            color: #6c757d;
        }
        
        .call-status .status-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
        
        .call-status.online .status-indicator {
            background-color: var(--success-color);
        }
        
        .call-status.offline .status-indicator {
            background-color: #6c757d;
        }
        
        .call-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .call-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            border-radius: 10px;
            background-color: var(--white-color);
            border: 1px solid var(--border-color);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .call-button:hover {
            background-color: var(--light-gray);
        }
        
        .call-button i {
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        
        .call-button.answer {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .call-button.answer:hover {
            background-color: rgba(40, 167, 69, 0.2);
        }
        
        .call-button.end {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }
        
        .call-button.end:hover {
            background-color: rgba(220, 53, 69, 0.2);
        }
        
        .call-button.hold {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }
        
        .call-button.hold:hover {
            background-color: rgba(255, 193, 7, 0.2);
        }
        
        .call-button.transfer {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .call-button.transfer:hover {
            background-color: rgba(13, 110, 253, 0.2);
        }
        
        .call-log-entry {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .call-log-entry:last-child {
            border-bottom: none;
        }
        
        .call-type-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .call-type-icon.incoming {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .call-type-icon.outgoing {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .call-type-icon.missed {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger-color);
        }
        
        .call-info {
            flex-grow: 1;
        }
        
        .call-info h4 {
            margin: 0;
            font-size: 1rem;
        }
        
        .call-info p {
            margin: 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .call-actions {
            display: flex;
            gap: 5px;
        }
        
        .call-queue-item {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .call-queue-item:last-child {
            border-bottom: none;
        }
        
        .queue-position {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: var(--white-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
            flex-shrink: 0;
        }
        
        .queue-info {
            flex-grow: 1;
        }
        
        .queue-info h4 {
            margin: 0;
            font-size: 1rem;
        }
        
        .queue-info p {
            margin: 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .queue-timer {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-left: 10px;
        }
        
        .agent-status {
            display: flex;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid var(--border-color);
        }
        
        .agent-status:last-child {
            border-bottom: none;
        }
        
        .agent-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .agent-info {
            flex-grow: 1;
        }
        
        .agent-info h4 {
            margin: 0;
            font-size: 1rem;
        }
        
        .agent-info p {
            margin: 0;
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .agent-status-indicator {
            padding: 3px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-left: 10px;
        }
        
        .agent-status-indicator.available {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success-color);
        }
        
        .agent-status-indicator.on-call {
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .agent-status-indicator.break {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning-color);
        }
        
        .agent-status-indicator.offline {
            background-color: rgba(108, 117, 125, 0.1);
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="dashboard-117,125,0.1);
            color: #6c757d;
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
                <li><a href="index.html"><i class="bi bi-speedometer2"></i> Dashboard</a></li>
                <li><a href="ambulances.html"><i class="bi bi-truck"></i> Ambulances</a></li>
                <li><a href="bookings.html"><i class="bi bi-calendar-check"></i> Bookings</a></li>
                <li><a href="clients.html"><i class="bi bi-people"></i> Clients</a></li>
                <li><a href="drivers.html"><i class="bi bi-person-badge"></i> Drivers</a></li>
                <li class="active"><a href="call-center.html"><i class="bi bi-telephone"></i> Call Center</a></li>
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
                <h1>Call Center</h1>
                
                <!-- Call Center Status -->
                <div class="call-status online">
                    <div class="status-indicator"></div>
                    <span>Call Center Online - Ready to Receive Calls</span>
                </div>
                
                <!-- Current Call Section -->
                <div class="section">
                    <div class="section-header">
                        <h2>Current Call</h2>
                    </div>
                    <div class="current-call">
                        <div class="call-info-display">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>No Active Call</h3>
                                    <p>Waiting for incoming calls...</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="call-timer">00:00:00</div>
                                </div>
                            </div>
                        </div>
                        <div class="call-controls">
                            <div class="call-button answer">
                                <i class="bi bi-telephone-inbound"></i>
                                <span>Answer</span>
                            </div>
                            <div class="call-button end">
                                <i class="bi bi-telephone-x"></i>
                                <span>End</span>
                            </div>
                            <div class="call-button hold">
                                <i class="bi bi-pause-circle"></i>
                                <span>Hold</span>
                            </div>
                            <div class="call-button transfer">
                                <i class="bi bi-arrow-left-right"></i>
                                <span>Transfer</span>
                            </div>
                            <div class="call-button">
                                <i class="bi bi-mic-mute"></i>
                                <span>Mute</span>
                            </div>
                            <div class="call-button">
                                <i class="bi bi-keyboard"></i>
                                <span>Keypad</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Call Queue -->
                <div class="section">
                    <div class="section-header">
                        <h2>Call Queue</h2>
                        <span class="badge bg-primary">3 Calls Waiting</span>
                    </div>
                    <div class="call-queue">
                        <div class="call-queue-item">
                            <div class="queue-position">1</div>
                            <div class="queue-info">
                                <h4>John Smith</h4>
                                <p>+1 234-567-8901</p>
                            </div>
                            <div class="queue-timer">Waiting: 2:45</div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                        <div class="call-queue-item">
                            <div class="queue-position">2</div>
                            <div class="queue-info">
                                <h4>Sarah Johnson</h4>
                                <p>+1 234-567-8902</p>
                            </div>
                            <div class="queue-timer">Waiting: 1:30</div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                        <div class="call-queue-item">
                            <div class="queue-position">3</div>
                            <div class="queue-info">
                                <h4>Michael Brown</h4>
                                <p>+1 234-567-8903</p>
                            </div>
                            <div class="queue-timer">Waiting: 0:45</div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call Urgence -->
                  <div class="section">
                    <div class="section-header">
                        <h2>Call Urgence</h2>
                        <span class="badge bg-primary">3 Calls Waiting</span>
                    </div>
                    <div class="call-queue">
                        <?php
                            echo "etat" ." ".$_GET['but'] ?? ''." ".$_GET['longitude']??''." ".$_GET['latitude']??'';
                        ?>
                        <div class="call-queue-item">
                            <div class="queue-position">1</div>
                            <div class="queue-info">
                                <h4>John Smith</h4>
                                <p>+1 234-567-8901</p>
                            </div>
                            <div class="queue-timer">Waiting: 2:45</div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                        <div class="call-queue-item">
                            <div class="queue-position">2</div>
                            <div class="queue-info">
                                <h4>Sarah Johnson</h4>
                                <p>+1 234-567-8902</p>
                            </div>
                            <div class="queue-timer">Waiting: 1:30</div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                        <div class="call-queue-item">
                            <div class="queue-position">3</div>
                            <div class="queue-info">
                                <h4>Michael Brown</h4>
                                <p>+1 234-567-8903</p>
                            </div>
                            <div class="queue-timer">Waiting: 0:45</div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action text-danger"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Call Logs -->
                <div class="section">
                    <div class="section-header">
                        <h2>Recent Call Logs</h2>
                        <a href="#" class="view-all">View All</a>
                    </div>
                    <div class="call-logs">
                        <div class="call-log-entry">
                            <div class="call-type-icon incoming">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                            <div class="call-info">
                                <h4>Emily Davis</h4>
                                <p>+1 234-567-8904 • Today, 10:15 AM • 5:23</p>
                            </div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action"><i class="bi bi-info-circle"></i></button>
                            </div>
                        </div>
                        <div class="call-log-entry">
                            <div class="call-type-icon outgoing">
                                <i class="bi bi-telephone-outbound"></i>
                            </div>
                            <div class="call-info">
                                <h4>Robert Wilson</h4>
                                <p>+1 234-567-8905 • Today, 9:45 AM • 3:12</p>
                            </div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action"><i class="bi bi-info-circle"></i></button>
                            </div>
                        </div>
                        <div class="call-log-entry">
                            <div class="call-type-icon missed">
                                <i class="bi bi-telephone-x"></i>
                            </div>
                            <div class="call-info">
                                <h4>Jennifer Lee</h4>
                                <p>+1 234-567-8906 • Today, 9:30 AM • Missed</p>
                            </div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action"><i class="bi bi-info-circle"></i></button>
                            </div>
                        </div>
                        <div class="call-log-entry">
                            <div class="call-type-icon incoming">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                            <div class="call-info">
                                <h4>David Miller</h4>
                                <p>+1 234-567-8907 • Today, 9:15 AM • 8:45</p>
                            </div>
                            <div class="call-actions">
                                <button class="btn-action"><i class="bi bi-telephone"></i></button>
                                <button class="btn-action"><i class="bi bi-info-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Agent Status -->
                <div class="section">
                    <div class="section-header">
                        <h2>Agent Status</h2>
                    </div>
                    <div class="agent-statuses">
                        <div class="agent-status">
                            <img src="https://via.placeholder.com/40" alt="Agent" class="agent-avatar">
                            <div class="agent-info">
                                <h4>John Operator</h4>
                                <p>Call Center Agent</p>
                            </div>
                            <div class="agent-status-indicator available">Available</div>
                        </div>
                        <div class="agent-status">
                            <img src="https://via.placeholder.com/40" alt="Agent" class="agent-avatar">
                            <div class="agent-info">
                                <h4>Sarah Handler</h4>
                                <p>Call Center Agent</p>
                            </div>
                            <div class="agent-status-indicator on-call">On Call (5:23)</div>
                        </div>
                        <div class="agent-status">
                            <img src="https://via.placeholder.com/40" alt="Agent" class="agent-avatar">
                            <div class="agent-info">
                                <h4>Michael Support</h4>
                                <p>Call Center Agent</p>
                            </div>
                            <div class="agent-status-indicator break">On Break</div>
                        </div>
                        <div class="agent-status">
                            <img src="https://via.placeholder.com/40" alt="Agent" class="agent-avatar">
                            <div class="agent-info">
                                <h4>Emily Responder</h4>
                                <p>Call Center Agent</p>
                            </div>
                            <div class="agent-status-indicator offline">Offline</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>