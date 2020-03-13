<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" ></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
   
  <!-- Navbar -->
   <nav class="navbar navbar-expand-md navbar-light ">
     <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar" >
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="myNavbar">
      <div class="container-fluid">
          <div class="row align-atems-center">
              <!-- Side bar -->
              <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                  <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border ">codegod</a>
                  <div class="bottom-border pb-3">
                    <img src="../assets/images/Graphic1.jpg" alt="admin" width="50" class="rounded-circle">
                    <a href="#" class="text-white mr-3 title">Ewaoche</a>
                  </div>
                  <ul class="navbar-nav flex-column mt-4">
                    <li class="nav-item current ">
                      <a href="#" class="nav-link text-white p-3 mb-2 ">
                        <i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard
                      </a>
                    </li>
                    <li class="nav-item sidebar-link">
                      <a href="#" class="nav-link text-white p-3 mb-2">
                        <i class="fas fa-users text-light fa-lg mr-3"></i>Accounts
                      </a>
                    </li>
                    <li class="nav-item sidebar-link">
                      <a href="#" class="nav-link text-white p-3 mb-2">
                        <i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox
                      </a>
                    </li>
                    <li class="nav-item sidebar-link">
                      <a href="#" class="nav-link text-white p-3 mb-2">
                        <i class="fas fa-arrow-circle-down text-light fa-lg mr-3"></i>Members
                      </a>
                    </li>
                    <li class="nav-item sidebar-link">
                      <a href="#" class="nav-link text-white p-3 mb-2">
                        <i class="fas fa-user text-light fa-lg mr-3"></i>Profile
                      </a>
                    </li>
                    <li class="nav-item sidebar-link">
                      <a href="#" class="nav-link text-white p-3 mb-2">
                        <i class="fas fa-key text-light fa-lg mr-3"></i>In
                      </a>
                    </li>
                    <li class="nav-item sidebar-link">
                      <a href="#" class="nav-link text-white p-3 mb-2">
                        <i class="fas fa-lock text-light fa-lg mr-3"></i>Out
                      </a>
                    </li>
                  </ul>
              </div>
              <!-- Side bar end-->
              <!-- top navbar -->
              <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row">
                <div class="col-md-4 ">
                 <h4 class="text-light text-uppercase mb-0 mt-2 ">Dashboard</h4>
                </div>
                <div class="col-md-5">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search" >
                      <button type="button" class="btn btn-white search-button">
                        <i class="fas fa-search text-danger"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <div class="col-md-3">
                   <ul class="navbar-nav">
                     <li class="nav-item icon-parent">
                       <a href="#" class="nav-link icon-bullete">
                         <i class="fas fa-comments text-muted fa-lg"></i>
                       </a>
                     </li>
                     <li class="nav-item icon-parent">
                       <a href="#" class="nav-link icon-bullete">
                         <i class="fas fa-bell text-muted fa-lg"></i>
                       </a>
                     </li>
                     <li class="nav-item ml-md-auto ">
                       <a href="#" class="nav-link " data-toggle="modal" data-target="#sign-out">
                         <i class="fas fa-sign-out-alt text-danger fa-lg"></i>
                       </a>
                     </li>
                   </ul>
                </div>
              </div>
              </div>
              <!-- top navbar end-->
          </div>
      </div>
     </div>
   </nav>

  <!-- Navbar End-->

  <!-- modal -->
    <div class="modal fade" id="sign-out">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">want to leave?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            press logout to leave!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Don't leave</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
          </div>
        </div>
      </div>
    </div>
  <!-- modal End-->
  
  <!-- cards -->
  <section>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-xl-10 col-md-8 col-lg-9 ml-auto ">
        <div class="row  pt-md-5 mt-md-3 mb-5">
          <div class="col-xl-3 col-sm-6 p-2">
           <div class="card card-common">
              <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-key fa-3x text-success"></i>
                   <div class="text-right text-secondary">
                    <h5>payment</h5>
                    <h3>#5,000</h3>
                   </div>
                 </div>
              </div>
              <div class="card-footer text-secondary">
                <i class="fas fa-sync mr-3"></i>
                <span>Update Now</span>
              </div>
           </div>
          </div>
          <div class="col-xl-3 col-sm-6 p-2">
          <div class="card card-common">
              <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-users fa-3x text-primary"></i>
                   <div class="text-right text-secondary">
                    <h5>payment</h5>
                    <h3>#5,000</h3>
                   </div>
                 </div>
              </div>
              <div class="card-footer text-secondary">
                <i class="fas fa-sync mr-3"></i>
                <span>Update Now</span>
              </div>
           </div>
          </div>
          <div class="col-xl-3 col-sm-6 p-2">
          <div class="card card-common">
              <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-lock fa-3x text-danger"></i>
                   <div class="text-right text-secondary">
                    <h5>payment</h5>
                    <h3>$5,000</h3>
                   </div>
                 </div>
              </div>
              <div class="card-footer text-secondary">
                <i class="fas fa-sync mr-3"></i>
                <span>Update Now</span>
              </div>
           </div>
          </div>
          <div class="col-xl-3 col-sm-6 p-2">
          <div class="card card-common">
              <div class="card-body">
                 <div class="d-flex justify-content-between">
                   <i class="fas fa-shopping-cart fa-3x text-mute"></i>
                   <div class="text-right text-secondary">
                    <h5>payment</h5>
                    <h3>$5,000</h3>
                   </div>
                 </div>
              </div>
              <div class="card-footer text-secondary">
                <i class="fas fa-sync mr-3"></i>
                <span>Update Now</span>
              </div>
           </div>
          </div>
        </div>
      </div>
      </div>
  </div>
  </section>
  <!-- cards end-->

 <!-- tables -->
   <section>
     <div class="container-fluid ">
      <div class="row mb-5">
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="row align-items-center">
           <div class="col-12 col-xl-6 mb-4 mb-xl-0">
             <h3 class="text-muted text-center mb-3">Students Subscriptions</h3>
             <table class="table text-center bg-light table-striped">
               <thead>
                 <tr class="text-muted">
                   <th>S/N</th>
                   <th>Name</th>
                   <th>Date</th>
                   <th>Contact</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th>1</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><button class="btn btn-info btn-sm" type="button">Message</button></td>
                 </tr>
                 <tr>
                   <th>2</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><button class="btn btn-info btn-sm" type="button">Message</button></td>
                 </tr>
                 <tr>
                   <th>3</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><button class="btn btn-info btn-sm" type="button">Message</button></td>
                 </tr>
                 <tr>
                   <th>4</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><button class="btn btn-info btn-sm" type="button">Message</button></td>
                 </tr>
               </tbody>
             </table>

             <!-- pagination -->
             <nav>
               <ul class="pagination justify-content-center">
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  <span>&laquo;</span>
                  </a>
                 </li>
                 <li class="page-item active">
                  <a href="#" class="page-link py-2 px-3">
                      1
                  </a>
                 </li>
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  2
                  </a>
                 </li>
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  3
                  </a>
                 </li>
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  <span>&raquo;</span>
                  </a>
                 </li>
               </ul>
             </nav>
             <!-- pagination end -->
           </div>
           <div class="col-12 col-xl-6">
           <h3 class="text-muted text-center mb-3">Recent Subscriptions</h3>
           <table class="text-center table table-dark table-hover">
           <thead>
                 <tr class="text-muted">
                   <th>S/N</th>
                   <th>Name</th>
                   <th>Date</th>
                   <th>Approvals</th>
                 </tr>
               </thead>
               <tbody>
               
                 <tr>
                   <th>1</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><span class="badge badge-success w-75 py-2 hov">Approved</span></td>
                 </tr>
                 <tr>
                   <th>2</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                 </tr>
                 <tr>
                   <th>3</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                 </tr>
                 <tr>
                   <th>4</th>
                   <td>Emmy</td>
                   <td>02/20/20</td>
                   <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                 </tr>
                 <tr>
                
               </tbody>
           </table>
           <!-- pagination -->
           <nav>
               <ul class="pagination justify-content-center">
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  <span>Previous</span>
                  </a>
                 </li>
                 <li class="page-item active">
                  <a href="#" class="page-link py-2 px-3">
                      1
                  </a>
                 </li>
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  2
                  </a>
                 </li>
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  3
                  </a>
                 </li>
                 <li class="page-item">
                  <a href="#" class="page-link py-2 px-3">
                  <span>Next</span>
                  </a>
                 </li>
               </ul>
             </nav>
             <!-- pagination end -->
           <!-- <form action="add.php" method="post" id="add">
            <input type="text" name="first"> 
            <input type="text" name="second">
            <input type="submit" name="solve"> -->
           
         <!-- </form> -->
         
           </div>
         </div>
        </div>
      </div>
     </div>
   </section>

 <!-- tables end-->

 <!-- progress /task list -->
 <section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10  col-lg-9 col-md-8  ml-auto">
         <div class="row mb-4">
            <div class="col-12 col-xl-6 mb-4 mb-xl-0">
              <div class="bg-dark text-white p-4 rounded">
                 <h4 class="mb-5 text-success text-uppercase">Performance Rate</h4>
                  <h6 class="mb-3">marks</h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped  font-weight-bold bg-success" style="width:91%;">
                     91%
                    </div>
                  </div>
                  <h6 class="mb-3">marks</h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped  font-weight-bold bg-primary" style="width:81%;">
                     81%
                    </div>
                  </div>
                  <h6 class="mb-3">marks</h4>
                  <div class="progress mb-4">
                    <div class="progress-bar progress-bar-striped  font-weight-bold bg-danger" style="width:71%;">
                     71%
                    </div>
                  </div>
              </div>
               <!-- <div>
                  <h4 class="mb-5">Rate</h4>
                  <h6 class="mb-5">marks</h4>
              
               <div class="progress progress-bar-striped font-weight-bold">
                  <div class="progress-bar" style="width:91%;">
                  91%
                  </div>
               </div>
               </div> -->
            </div>
            <div class="col-12 col-xl-6 mygrid">
               <h4 class="p-3 mb-3 text-muted">tasks:</h4>
               <div class="container-fluid bg-white">
                  <div class="row py-3 mb-4">
                     <div class="col-1">
                       <input type="checkbox" checked>
                     </div>
                     <div class="col-sm-9 col-8 ">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                     </div>
                     <div class="col-1">
                       <a href="#"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    </div>
  </div>
 </section>
 <!-- progress /task list end -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
    <script src="script.js"></script>
  </body>
</html>






