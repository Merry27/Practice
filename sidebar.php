<!DOCTYPE html>
<html>

<!-- <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
  <title>Scheduler</title>
  <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>

  <link href="css/style.css" rel="stylesheet">
  <link href="plugins/animate-css/animate.css" rel="stylesheet" />
  <link href="css/confirm.css" rel="stylesheet">
  <link href="css/responsive.dataTables.min.css" rel="stylesheet">

  <link href="plugins/bootstrap/css/font.css" rel="stylesheet">

  <!-- Bootstrap Core Css -->
  <!-- <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> -->

  <!-- Waves Effect Css -->
  <link href="plugins/node-waves/waves.css" rel="stylesheet" />

  <!-- Animation Css -->
  <link href="plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- JQuery DataTable Css -->

  <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
  <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

  <link href="plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet"/>
  <link href="css/confirm.css" rel="stylesheet"/>
  <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
  <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <script src="plugins/tinymce/tinymce.min.js"></script>
  
  <link href='plugins/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
  <link href='plugins/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
  <script src='plugins/fullcalendar/lib/moment.min.js'></script>
  <script src='plugins/fullcalendar/lib/jquery.min.js'></script>
  <link  href="plugins/light-gallery/css/lightgallery.css" rel="stylesheet">


  <!--  <script type="text/javascript" src="js/dataTables.responsive.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.1/js/dataTables.fixedColumns.min.js"></script> -->

  <link  href='plugins/select2/css/select2.css' rel='stylesheet' />
  <link  href='plugins/select2/css/select2.min.css' rel='stylesheet' />
  <script src='plugins/select2/js/select2.js'></script>
  <script src="plugins/select2/js/select2.min.js" defer></script>

</head>
<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>

  <script type="text/javascript">window.addEventListener('load', () => {
    const loader = document.getElementById('loader');
    setTimeout(() => {
      loader.classList.add('fadeOut');
    }, 300);
  });</script>
  
  <div>
    <div class="sidebar">
      <div class="sidebar-inner">
        <div class="sidebar-logo">
          <div class="peers ai-c fxw-nw">
            <div class="peer peer-greed">
              <a class="sidebar-link td-n" href="index.html" class="td-n">
                <div class="peers ai-c fxw-nw">
                  <div class="peer">
                    <div class="logo">
                      <img src="images/logo.png" alt="">
                    </div>
                  </div>
                  <div class="peer peer-greed">
                    <h5 class="lh-1 mB-0 logo-text">Scheduler</h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="peer">
              <div class="mobile-toggle sidebar-toggle">
                <a href="#" class="td-n">
                  <i class="ti-arrow-circle-left"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <ul class="sidebar-menu scrollable pos-r">

          <li class="nav-item dropdown open">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span>
              <span class="title">Master List</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="sidebar-link pagex" href="Member_list">Household Member List</a> 
                <a class="sidebar-link pagex" href="Service_masterlist">Service Caravan List</a> 
              </li> 
            </ul>
          </li>
          <li class="nav-item dropdown open">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span>
              <span class="title">Transaction</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="sidebar-link pagex" href="Concern_slip">Concern Slip</a>
                <a class="sidebar-link pagex" href="Service_caravan">Service Caravan</a>
                <a class="sidebar-link pagex" href="Service_beneficiary">Service Beneficiaries</a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown open">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-orange-500 ti-layout-list-thumb"></i>
              </span>
              <span class="title">Others</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="sidebar-link pagex" href="profiling">Heritage Setup</a> 
              </li>
            </ul>
          </li>

        <li class="nav-item dropdown open">
            <a class="dropdown-toggle" href="javascript:void(0);">
              
              
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="sidebar-link pagex" href="tourist_Profiling">Tourist Setup</a> 
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </div>
    <div class="page-container">
      <div class="header navbar">
        <div class="header-container">
          <ul class="nav-left">
            <li>
              <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                <i class="ti-menu"></i>
              </a>
            </li>

          </ul>
          <ul class="nav-right">
            <li class="notifications dropdown">
              <span class="counter bgc-red">3</span>
              <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown">
                <i class="ti-bell"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="pX-20 pY-15 bdB">
                  <i class="ti-bell pR-10"></i>
                  <span class="fsz-sm fw-600 c-grey-900">Notifications</span>
                </li>
                <li>
                  <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                    <li>
                      <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                        <div class="peer mR-15">
                          
                        </div>
                        <div class="peer peer-greed">
                          <span>
                            <span class="fw-500"><?php echo $full_name?></span>
                            <span class="c-grey-600">liked your 
                              <span class="text-dark">post</span>
                            </span>
                          </span>
                          <p class="m-0">
                            <small class="fsz-xs">5 mins ago</small>
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                        <div class="peer mR-15">
                          <!--  <img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""> -->
                        </div>
                        <div class="peer peer-greed">
                          <span>
                            <span class="fw-500">Moo Doe</span>
                            <span class="c-grey-600">liked your 
                              <span class="text-dark">cover image</span>
                            </span>
                          </span>
                          <p class="m-0">
                            <small class="fsz-xs">7 mins ago</small>
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                        <div class="peer mR-15">
                          <!--  <img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""> -->
                        </div>
                        <div class="peer peer-greed">
                          <span>
                            <span class="fw-500">Lee Doe</span>
                            <span class="c-grey-600">commented on your 
                              <span class="text-dark">video</span>
                            </span>
                          </span>
                          <p class="m-0">
                            <small class="fsz-xs">10 mins ago</small>
                          </p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="pX-20 pY-15 ta-c bdT">
                  <span>
                    <a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications 
                      <i class="ti-angle-right fsz-xs mL-10"></i>
                    </a>
                  </span>
                </li>
              </ul>
            </li>
            <li class="notifications dropdown">
              <span class="counter bgc-blue">3</span>
              <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown">
                <i class="ti-email"></i>
              </a>
              <ul class="dropdown-menu">
                <li class="pX-20 pY-15 bdB">
                  <i class="ti-email pR-10"></i>
                  <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                </li>
                <li>
                  <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                    <li>
                      <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                        <div class="peer mR-15">
                          <!-- <img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""> -->
                        </div>
                        <div class="peer peer-greed">
                          <div>
                            <div class="peers jc-sb fxw-nw mB-5">
                              <div class="peer">
                                <p class="fw-500 mB-0">John Doe</p>
                              </div>
                              <div class="peer">
                                <small class="fsz-xs">5 mins ago</small>
                              </div>
                            </div>
                            <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                        <div class="peer mR-15">
                          <!-- <img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""> -->
                        </div>
                        <div class="peer peer-greed">
                          <div>
                            <div class="peers jc-sb fxw-nw mB-5">
                              <div class="peer">
                                <p class="fw-500 mB-0">Moo Doe</p>
                              </div>
                              <div class="peer">
                                <small class="fsz-xs">15 mins ago</small>
                              </div>
                            </div>
                            <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                        <div class="peer mR-15">
                          <!-- <img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""> -->
                        </div>
                        <div class="peer peer-greed">
                          <div>
                            <div class="peers jc-sb fxw-nw mB-5">
                              <div class="peer">
                                <p class="fw-500 mB-0">Lee Doe</p>
                              </div>
                              <div class="peer">
                                <small class="fsz-xs">25 mins ago</small>
                              </div>
                            </div>
                            <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="pX-20 pY-15 ta-c bdT">
                  <span>
                    <a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Email 
                      <i class="fs-xs ti-angle-right mL-10"></i>
                    </a>
                  </span>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                <div class="peer mR-10">
                  <?php
                  echo '<img class="w-2r bdrs-50p" src="data:image/jpeg;base64,'.base64_encode( $login_image ).'" alt="User" />';
                  ?>
                </div>
                <div class="peer">
                  <span class="fsz-sm c-grey-900"><?php echo $full_name?></span>
                </div>
              </a>
              <ul class="dropdown-menu fsz-sm">
                <li>
                  <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-settings mR-10"></i>
                    <span>Setting</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-user mR-10"></i>
                    <span>Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-email mR-10"></i>
                    <span>Messages</span>
                  </a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="login/logout" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-power-off mR-10"></i>
                    <span >Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <script type="text/javascript">

        function format_date(date) {
          var d = new Date(date);

          var month = d.getMonth() + 1;
          var day = d.getDate();
          var hour = d.getHours();
          var min = d.getMinutes();
          var sec = d.getSeconds();

          month = (month < 10 ? "0" : "") + month;
          day = (day < 10 ? "0" : "") + day;
          hour = (hour < 10 ? "0" : "") + hour;
          min = (min < 10 ? "0" : "") + min;
          sec = (sec < 10 ? "0" : "") + sec;

          var str = d.getFullYear(date) + "-" + month + "-" + day ;

          return str;
        }
      </script>
