<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />
    <link type="text/css" rel="stylesheet" href="dashcss.css" />
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">


</head>

<body>
    <section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop"></i> <span>Thrift Mania</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="#"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Customers</span></a></li>
                <li><a href="#"><i class="fa fa-file"></i> <span>Projects</span></a></li>
                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i><span>Orders</span></a></li>
                <li><a href="#"><i class="fa-solid fa-sack-dollar"></i> <span>Income</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i> <span>Account</span></a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            </ul>
        </div>
    </section>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <i class="fa fa-bars"></i> Dashboard
                </h2>
            </div>
            <div class="header-left header-serach">
                <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div>
            </div>
            <div class="header-left header-profile">
                <img src="images/sam.jpg" class="img-responsive" />
                <h3>Thrift Mania</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content-info container">
            <div class="card">
                <h2 class="cus-num cus-h">130</h2>
                <p>Customers</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-pro">250</h2>
                <p>Projects</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-ord">155</h2>
                <p>Order</p>
            </div>
            <div class="card">
                <h2 class="cus-num cus-inc">100k</h2>
                <p>Income</p>
            </div>
            <div class="clear"></div>
        </div>
        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Recent Project</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <table style="width:100%">
                    <tr>
                        <th>Project Title</th>
                        <th>Department</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Web Development</td>
                        <td>Development Team</td>
                        <td><span class="rev-span"></span>Review</td>
                    </tr>
                    
                   
                </table>
            </div>
            <div class="pro-cus">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Form</h2>
                    </div>
                    <div class="clear"></div>
                </div>
                <form id="form" action="" method="post"style="width:100%" class="form">
                    
                        <input type="text" name="title" placeholder="Title" required><br><br>
                        <input type="password" name="description" placeholder="Description" required><br><br>
                        <button type="submit" name="image" class="btn">Upload Image</button>
                        <button type="submit" name="add" class="btn">Add Items</button>
                        
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </Section>
    <div class="clear"></div>




    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/external.js"></script>
</body>

</html>