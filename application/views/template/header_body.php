<body>
    <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="<?=base_url('assets/');?>vendors/images/jamkrida.png" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div>

    <div class="header">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
            <div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
        </div>
        <div class="header-right">
        <div class="user-notification">
        <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
       <a href="#" id="dropdown-toggleID" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-copy dw dw-notification"></i><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu" id="dropdown-menuID"></ul>
      </li>
     </ul>
			</div>


            <div class="dashboard-setting user-notification">
                <div class="dropdown">
                    <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                        <i class="dw dw-settings2"></i>
                    </a>
                </div>
            </div>
            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a  class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <img src="<?=base_url('assets/img/profile/') . $user['image'];?>" alt="">
                        </span>
                        <span class="user-name"><?=$user['nama'];?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                        <a class="dropdown-item" href="<?=base_url('user/index');?>"><i class="dw dw-user1"></i>
                            Profile</a>
                        <a class="dropdown-item" href="<?=base_url('auth/logout');?>"><i class="dw dw-logout"></i> Log
                            Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>