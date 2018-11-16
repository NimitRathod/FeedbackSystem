@extends('admin.layouts.app')

@section('title', 'Child')

@section('style')
<style>
#weatherWidget .currentDesc {
    color: #ffffff!important;
}
.traffic-chart { 
    min-height: 335px; 
}
#flotPie1  {
    height: 150px;
} 
#flotPie1 td {
    padding:3px;
}
#flotPie1 table {
    top: 20px!important;
    right: -10px!important;
}
.chart-container {
    display: table;
    min-width: 270px ;
    text-align: left;
    padding-top: 10px;
    padding-bottom: 10px;
}
#flotLine5  {
   height: 105px;
} 

#flotBarChart {
    height: 150px;
}
#cellPaiChart{
    height: 160px;
}

</style>
@endsection
@section('content')
<!-- Right Panel --> 
<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">  
        <div class="top-left">
            <div class="navbar-header"> 
                <a class="navbar-brand" href="./"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="{{ asset('assets/images/logo2.png') }}" alt="Logo"></a> 
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
            </div> 
        </div>
        <div class="top-right"> 
            <div class="header-menu"> 
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">3</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                            <span class="count bg-primary">4</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ asset('assets/images/avatar/1.jpg') }}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ asset('assets/images/avatar/2.jpg') }}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ asset('assets/images/avatar/3.jpg') }}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                    <p>Hello, this is an example msg</p>
                                </div>
                            </a>
                            <a class="dropdown-item media" href="#">
                                <span class="photo media-left"><img alt="avatar" src="{{ asset('assets/images/avatar/4.jpg') }}"></span>
                                <div class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{ asset('assets/images/admin.jpg') }}" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                </div> 
            </div>  
        </div>
    </header><!-- /header -->
    <!-- Header-->


    <div class="content pb-0">

        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7f-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib"> 
                                    <div class="stat-text">$<span class="count">23569</span></div>
                                    <div class="stat-heading">Revenue</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7f-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">3435</span></div>
                                    <div class="stat-heading">Sales</div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7f-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib"> 
                                    <div class="stat-text"><span class="count">349</span></div>
                                    <div class="stat-heading">Templates</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7f-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib"> 
                                    <div class="stat-text"><span class="count">2986</span></div>
                                    <div class="stat-heading">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Widgets End -->


        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">  
                    <div class="card-body">
                        <h4 class="box-title">Traffic </h4>
                    </div>
                    <div class="row"> 
                        <div class="col-lg-8">
                            <div class="card-body"> 
                                <!-- <canvas id="TrafficChart"></canvas>   -->
                                <div id="traffic-chart" class="traffic-chart"></div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body">
                                <div class="progress-box progress-1">
                                    <h4 class="por-title">Visits</h4>
                                    <div class="por-txt">96,930 Users (40%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Bounce Rate</h4>
                                    <div class="por-txt">3,220 Users (24%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-2" role="progressbar" style="width: 24%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Unique Visitors</h4>
                                    <div class="por-txt">29,658 Users (60%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-3" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title">Targeted  Visitors</h4>
                                    <div class="por-txt">99,658 Users (90%)</div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> <!-- /.card-body -->
                        </div>
                    </div> <!-- /.row --> 
                    <div class="card-body"></div>
                </div> 
            </div><!-- /# column -->
        </div>
        <!--  Traffic  End -->


        

        <div class="clearfix"></div>
        <div class="orders">
            <div class="row">
                <div class="col-xl-8"> 
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Orders </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">#</th>
                                            <th class="avatar">Avatar</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/1.jpg') }}" alt=""></a>
                                                </div>
                                            </td>
                                            <td> #5469 </td>
                                            <td>  <span class="name">Louis Stanley</span> </td> 
                                            <td> <span class="product">iMax</span> </td>
                                            <td><span class="count">231</span></td>
                                            <td> 
                                                <span class="badge badge-complete">Complete</span>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/2.jpg') }}" alt=""></a> 
                                                </div>
                                            </td> 
                                            <td> #5468 </td>
                                            <td>  <span class="name">Gregory Dixon</span> </td> 
                                            <td> <span class="product">iPad</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td> 
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">3.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/3.jpg') }}" alt=""></a> 
                                                </div>
                                            </td>
                                            <td> #5467 </td>
                                            <td>  <span class="name">Catherine Dixon</span> </td> 
                                            <td> <span class="product">SSD</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td> 
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">4.</td>
                                            <td class="avatar">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/4.jpg') }}" alt=""></a> 
                                                </div>
                                            </td>
                                            <td> #5466 </td>
                                            <td>  <span class="name">Mary Silva</span> </td> 
                                            <td> <span class="product">Magic Mouse</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td> 
                                                <span class="badge badge-pending">Pending</span>
                                            </td>
                                        </tr>
                                        <tr class=" pb-0">
                                            <td class="serial">5.</td>
                                            <td class="avatar pb-0">
                                                <div class="round-img">
                                                    <a href="#"><img class="rounded-circle" src="{{ asset('assets/images/avatar/6.jpg') }}" alt=""></a> 
                                                </div>
                                            </td>
                                            <td> #5465 </td>
                                            <td>  <span class="name">Johnny Stephens</span> </td> 
                                            <td> <span class="product">Monitor</span> </td>
                                            <td><span class="count">250</span></td>
                                            <td> 
                                                <span class="badge badge-complete">Complete</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div> <!-- /.card -->
                </div>  <!-- /.col-lg-8 -->

                <div class="col-xl-4">
                    <div class="row"> 
                        <div class="col-lg-6 col-xl-12">
                            <div class="card br-0"> 
                                <div class="card-body">
                                    <div class="chart-container ov-h">
                                        <div id="flotPie1" class="float-chart"></div>
                                    </div>
                                </div> 
                            </div><!-- /.card -->
                        </div>

                        <div class="col-lg-6 col-xl-12">
                            <div class="card bg-flat-color-3  ">
                                <div class="card-body">
                                    <h4 class="card-title m-0  white-color ">August 2018</h4>
                                </div>
                                <div class="card-body">
                                   <div id="flotLine5" class="flot-line"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div> <!-- /.col-md-4 -->
           </div> 
       </div> <!-- /.order -->





       <!-- To Do and Live Chat --> 
       <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title box-title">To Do List</h4>
                    <div class="card-content">
                        <div class="todo-list">
                            <div class="tdl-holder">
                                <div class="tdl-content">
                                    <ul>
                                        <li>
                                            <label>
                                                <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span> 
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>

                                        <li>
                                            <label>
                                                <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                <a href='#' class="fa fa-times"></a>
                                                <a href='#' class="fa fa-pencil"></a>
                                                <a href='#' class="fa fa-check"></a>
                                            </label>
                                        </li>
                                    </ul>
                                </div> 
                            </div>
                        </div> <!-- /.todo-list -->
                    </div>
                </div> <!-- /.card-body -->
            </div><!-- /.card -->
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title box-title">Live Chat</h4>
                    <div class="card-content">
                        <div class="messenger-box">
                            <ul>
                                <li>
                                    <div class="msg-received msg-container">
                                        <div class="avatar">
                                         <img src="{{ asset('assets/images/avatar/64-1.jpg') }}" alt="">
                                         <div class="send-time">11.11 am</div>
                                     </div> 
                                     <div class="msg-box">
                                        <div class="inner-box">
                                            <div class="name">
                                                John Doe
                                            </div>
                                            <div class="meg">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sunt placeat velit ad reiciendis ipsam   
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.msg-received -->
                            </li>
                            <li> 
                                <div class="msg-sent msg-container">
                                    <div class="avatar">
                                     <img src="{{ asset('assets/images/avatar/64-2.jpg') }}" alt="">
                                     <div class="send-time">11.11 am</div>
                                 </div> 
                                 <div class="msg-box">
                                    <div class="inner-box">
                                        <div class="name">
                                            John Doe
                                        </div>
                                        <div class="meg">
                                            Hay how are you doing?  
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.msg-sent -->
                        </li>
                    </ul>
                    <div class="send-mgs">
                        <div class="yourmsg">
                            <input class="form-control" type="text">
                        </div>
                        <button class="btn msg-send-btn">
                            <i class="pe-7f-paper-plane"></i>
                        </button>
                    </div>
                </div><!-- /.messenger-box -->
            </div>
        </div> <!-- /.card-body -->
    </div><!-- /.card -->
</div>

</div> <!-- /.row -->
<!-- To Do and Live Chat End --> 





<!-- Calender Chart Weather  -->
<div class="row">
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="card-body">  
                <!-- <h4 class="box-title">Chandler</h4> -->
                <div class="calender-cont widget-calender">
                    <div id="calendar"></div>
                </div>
            </div>
        </div><!-- /.card -->
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="card ov-h">
            <div class="card-body bg-flat-color-2"> 
                <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
            </div>
            <div id="cellPaiChart" class="float-chart"></div> 
        </div><!-- /.card -->
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card weather-box">
            <h4 class="weather-title box-title">Weather</h4>
            <div class="card-body">  
                <div class="weather-widget">
                    <div id="weather-one" class="weather-one"></div>
                </div> 
            </div>
        </div><!-- /.card -->
    </div>
</div><!-- /.row -->
<!-- Calender Chart Weather  End -->







<div class="modal fade none-border" id="event-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Add New Event</strong></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong>Add a category </strong></h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Category Name</label>
                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Category Color</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="pink">Pink</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->

















</div> <!-- .content -->



<div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
            </div>
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->
@endsection