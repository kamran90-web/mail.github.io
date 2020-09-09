<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Restaurant</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-green bg-white">
        <a class = "navbar-brand"><img src="{{ asset('assets/img/quiz.png') }}" 
        alt="" class="loginlogo" width="209" height= "60" padding:100>
        </a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <a class="font-weight-bold my-2 my-sm-0 mr-2 logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        </form>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <a class="nav-link" style = "margin-top:20px;" href="index"
                                ><div class="sb-nav-link-icon"><icon class="fa fa-home fb-btn"></i></div>
                                {{ Auth::user()->name }}
                                <i class='fas fa-angle-left' style='font-size:20px; position:absolute; right:12px;'></i></a>
                        </a>
                        
                        <a class="nav-link" style = "margin-top:20px;" href="orderlist"
                                ><div class="sb-nav-link-icon"><icon class="fa fa-home fb-btn"></i></div>
                                @if(Auth::user()->user_type == 'Restaurant')
                                View Orders
                                <i class='fas fa-angle-left' style='font-size:20px; position:absolute; right:12px;'></i></a>
                                @endif
                        </a>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
            
            <hr style="width:100%;text-align:left;margin-left:0; margin-top:2px;padding-top:25px;">
                <main>
                    <div class="container-fluid">
                       <div class = "abc"></div>
                            <div class="card mb-4">
                                <div class="card-header"><i class="fa fa-cogs mr-1" style = "color:white"></i>Menu
                                 @if(Auth::user()->user_type == 'Restaurant') 
                                <a href = "/create"><button type="button" class="buttonn button4" style = "float:right; width:70px;margin-right:20px;">Add New</button></a>
                                @endif
                                @if(Auth::user()->user_type == 'Customer') 
                                <a href = "/"><button type="button" class="buttonn button4" style = "float:right; width:70px;margin-right:20px;">Order</button></a>
                                @endif
                           </div>
                    </div>
                        
        <div class="col-lg-12 card">
            <table class="table mb-0">
                    <thead class="bg-light">
                        <th>#</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Category</th>
                        
                    </thead>
                    @foreach($items as  $key=>$item)
                    <tbody>
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->category}}</td>
                        </tr>
                    </tbody>
                    @endforeach
            </table>
        </div>
            </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script type = "text/javascript">

</script>

<style type="text/css">
    .card-header {
        border-radius: .625rem !important;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,.1), 
                    0 0.9375rem 1.40625rem rgba(90,97,105,.1), 
                    0 0.25rem 0.53125rem rgba(90,97,105,.12), 
                    0 0.125rem 0.1875rem rgba(90,97,105,.1);
    }
</style>
@
    </body>
</html>
<script type = "text/javascript">



</script>

