<!-- header-area start -->
<div id="sticker" class="header-area hidden-xs">
    <div class="container">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-1 col-sm-1">
                <div class="logo">
                    <!-- Brand -->
                    <?php
                    echo $this->Html->link(
                            $this->Html->image('logo.png', array('alt' => 'logo')), '/', array('escape' => false)
                    );
                    ?>
                </div>
            </div>
            <!-- logo end -->
            <div class="col-md-11 col-sm-11">
                <div class="header-right-link">
                    <!-- search option start -->
                    <form action="#">
                        <div class="search-option">
                            <input type="text" placeholder="Search...">
                            <button class="button" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                    </form>
                    <!-- search option end -->
                </div>

                <?php
                $selvals = json_decode($current_user['Role']['roles'], true);
                ?>
                <!-- mainmenu start -->
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-example">
                        <div class="main-menu">
                            <?php if (!empty($current_user['id'])): ?>
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <?php echo $this->Html->link('<i class="fa fa-users"></i> Human', 'javascript:;', array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown")); ?>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($selvals["UsersController"]['index']) && !is_numeric($selvals["UsersController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> User', array('controller' => 'users', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["EmployeesController"]['index']) && !is_numeric($selvals["EmployeesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Employee', array('controller' => 'employees', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ContactsController"]['index']) && !is_numeric($selvals["ContactsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Contact', array('controller' => 'contacts', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ClientsController"]['index']) && !is_numeric($selvals["ClientsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Client', array('controller' => 'clients', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }

                                            echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Subscribers', array('controller' => 'subscribes', 'action' => 'index'), array('escape' => false)) . '</li>';

                                            if (isset($selvals["ContractorsController"]['index']) && !is_numeric($selvals["ContractorsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Contractor', array('controller' => 'contractors', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["BorrowersController"]['index']) && !is_numeric($selvals["BorrowersController"]['index'])) {
                                                echo "<li>" . $this->Html->link('<i class="fa fa-arrows-alt"></i> Borrower', array('controller' => 'borrowers', 'action' => 'index')) . "</li>";
                                            }
                                            if (isset($selvals["LendersController"]['index']) && !is_numeric($selvals["LendersController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Lender', array('controller' => 'lenders', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }

                                            
                                            ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('<i class="fa fa-cogs"></i> Management', 'javascript:;', array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown")); ?>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($selvals["ConfigsController"]['index']) && !is_numeric($selvals["ConfigsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-cog"></i> Config', array('controller' => 'configs', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["RolesController"]['index']) && !is_numeric($selvals["RolesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Role', array('controller' => 'roles', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["TestimonialsController"]['index']) && !is_numeric($selvals["TestimonialsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Testimonial', array('controller' => 'testimonials', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('<i class="fa fa-cogs"></i> CMS', 'javascript:;', array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown")); ?>
                                        <ul class="sub-menu">

                                            <?php
                                            if (isset($selvals["GalleriesController"]['index']) && !is_numeric($selvals["GalleriesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Gallery', array('controller' => 'galleries', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["PagesController"]['index']) && !is_numeric($selvals["PagesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Page', array('controller' => 'pages', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["MenusController"]['index']) && !is_numeric($selvals["MenusController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Menu', array('controller' => 'menus', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["SlidersController"]['index']) && !is_numeric($selvals["SlidersController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Slider', array('controller' => 'sliders', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["NoticesController"]['index']) && !is_numeric($selvals["NoticesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Notice', array('controller' => 'notices', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["QuicklinksController"]['index']) && !is_numeric($selvals["QuicklinksController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Quick Link', array('controller' => 'quicklinks', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('<i class="fa fa-cogs"></i> Business', 'javascript:;', array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown")); ?>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($selvals["CategoriesController"]['index']) && !is_numeric($selvals["CategoriesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Category', array('controller' => 'categories', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ProjectsController"]['index']) && !is_numeric($selvals["ProjectsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Product', array('controller' => 'products', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ProjectsController"]['index']) && !is_numeric($selvals["ProjectsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Project', array('controller' => 'projects', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ProjectModificationsController"]['index']) && !is_numeric($selvals["ProjectModificationsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Project Modification', array('controller' => 'project_modifications', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ServicesController"]['index']) && !is_numeric($selvals["ServicesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Service', array('controller' => 'services', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Blog', array('controller' => 'blogs', 'action' => 'index'), array('escape' => false)) . '</li>';

                                            if (isset($selvals["DomainsController"]['index']) && !is_numeric($selvals["DomainsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Domain', array('controller' => 'domains', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["DomainRenewalsController"]['index']) && !is_numeric($selvals["DomainRenewalsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Domain Renewal', array('controller' => 'domain_renewals', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["HostingsController"]['index']) && !is_numeric($selvals["HostingsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Hosting', array('controller' => 'hostings', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["HostingRenewalsController"]['index']) && !is_numeric($selvals["HostingRenewalsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Hosting Renewal', array('controller' => 'hosting_renewals', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('<i class="fa fa-cogs"></i> Account', 'javascript:;', array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown")); ?>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($selvals["ReceiptsController"]['index']) && !is_numeric($selvals["ReceiptsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Receipt', array('controller' => 'receipts', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ExpenseheadsController"]['index']) && !is_numeric($selvals["ExpenseheadsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Expense Head', array('controller' => 'expenseheads', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ExpensesController"]['index']) && !is_numeric($selvals["ExpensesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Expense', array('controller' => 'expenses', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["PaymentsController"]['index']) && !is_numeric($selvals["PaymentsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Payments', array('controller' => 'payments', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["LoansController"]['index']) && !is_numeric($selvals["LoansController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Loan', array('controller' => 'loans', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["LoanReturnsController"]['index']) && !is_numeric($selvals["LoanReturnsController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Loan Return', array('controller' => 'loan_returns', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["LendersController"]['top_loan']) && !is_numeric($selvals["LendersController"]['top_loan'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Loan Return', array('controller' => 'lenders', 'action' => 'top_loan'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["LendsController"]['index']) && !is_numeric($selvals["LendsController"]['index'])) {
                                                echo "<li>" . $this->Html->link('<i class="fa fa-arrows-alt"></i> Borrow', array('controller' => 'lends', 'action' => 'index')) . "</li><li class='divider'></li>";
                                            }
                                            if (isset($selvals["RepaymentsController"]['index']) && !is_numeric($selvals["RepaymentsController"]['index'])) {
                                                echo "<li>" . $this->Html->link('<i class="fa fa-arrows-alt"></i> Borrow Repayment', array('controller' => 'repayments', 'action' => 'index')) . "</li><li class='divider'></li>";
                                            }
                                            if (isset($selvals["BorrowersController"]['index']) && !is_numeric($selvals["BorrowersController"]['index'])) {
                                                echo "<li>" . $this->Html->link('<i class="fa fa-arrows-alt"></i> Borrow & Repayment Report', array('controller' => 'borrowers', 'action' => 'loan_repayment_report')) . "</li><li class='divider'></li>";
                                            }
                                            ?>

                                        </ul>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('<i class="fa fa-cogs"></i> HR', 'javascript:;', array('escape' => false, "class" => "dropdown-toggle", "data-toggle" => "dropdown")); ?>
                                        <ul class="sub-menu">
                                            <?php
                                            if (isset($selvals["HolidaysController"]['index']) && !is_numeric($selvals["HolidaysController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Holiday', array('controller' => 'holidays', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["ForsakesController"]['index']) && !is_numeric($selvals["ForsakesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Leave', array('controller' => 'forsakes', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["AttendancesController"]['index']) && !is_numeric($selvals["AttendancesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Attendance', array('controller' => 'attendances', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            if (isset($selvals["SalariesController"]['index']) && !is_numeric($selvals["SalariesController"]['index'])) {
                                                echo '<li>' . $this->Html->link('<i class="fa fa-arrows-alt"></i> Salary', array('controller' => 'salaries', 'action' => 'index'), array('escape' => false)) . '</li>';
                                            }
                                            ?>

                                        </ul>
                                    </li>

                                    <li><?php echo $this->Html->link('<i class="fa fa-sign-out"></i> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?></li>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>
</div>
<!-- header-area end -->
<!-- mobile-menu-area start -->
<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="index.html"></a>
                    </div>
                    <nav id="dropdown">
                        <ul>
                            <li><a class="pagess" href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">About us</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="review.html">Review</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="error.html">Error</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">All Services</a></li>
                                    <li><a href="single-service.html">Services Details</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="project-2.html">Project 2 Column</a></li>
                                    <li><a href="project-3.html">Project 3 Column</a></li>
                                    <li><a href="project-4.html">Project 4 Column</a></li>
                                    <li><a href="single-project.html">Single Project</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog grid</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
</header>

<script type="text/javascript">
    $.each($(".dropdown"), function (index, obj) {
        if ($(obj).find("li").length == 0) {
            $(obj).remove();
        }
    });
</script>