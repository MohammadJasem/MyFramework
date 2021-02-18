<nav class="navbar navbar-expand-lg navbar-dark custom-blue fixed-top" id="mainNav">
    <a class="navbar-brand" href=""><img class="logo" width="180px" height="38px" src="{{url('img/banner.png')}}" /></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="">
                    <i class="fa fa-fw fa-dashboard text-white"></i>
                    <span class="nav-link-text text-white">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCustomers" data-parent="#exampleAccordion">
                    <i class="fa fa-user text-white"></i>
                    <span class="nav-link-text text-white">Customers</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseCustomers">
                    <li>
                        <a href="" class="text-white">All Customers</a>
                    </li>
                    <li>
                        <a href="" class="text-white">New Customers</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Orders">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseOrders" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-shopping-cart text-white"></i>
                    <span class="nav-link-text text-white">Orders</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseOrders">
                    <li>
                        <a href="" class="text-white">All Orders</a>
                    </li>
                    <li>
                        <a href="" class="text-white">New Orders</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <div class="nav-item">
            <form class="form-inline my-2 my-lg-0 mr-lg-2">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for...">
                    <span class="input-group-append">
                <button class="btn custom-green" type="button">
                  <i class="fa fa-search text-white"></i>
                </button>
              </span>
                </div>
            </form>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>