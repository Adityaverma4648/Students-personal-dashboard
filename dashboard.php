<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard:php code</title>

    <!-- icons-------------------------------------------------- -->

                  <script src="https://kit.fontawesome.com/8dc03a4776.js" crossorigin="anonymous"></script>

    
    <!-- Google fonts-------------------------------------------- -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Bootstrap import-------------------------------------------- -->
<!-- Latest compiled and minified CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- SCSS -------------------------------------------- -->
   <link rel="stylesheet" href="style.css">      

</head>
<body>
    <section class="row dashboard p-2 bg-dark d-flex justify-content-center align-items-center">
          <div class="dashboard-menu bg-dark">
              <div class="container py-2 border-bottom">
                  <strong class="h3 text-white">
                      LOGO
                  </strong>
              </div>
              <div class="container py-3 row greet-username">
                <img src="./img/profile.png" alt="profile" class="col-sm-4 rounded-circle bg-muted" style="height: 42px; width:
                                    auto;">
                <p class="col-sm-7 text-light small">Welcome!
                      <br>
                     <span class="h5 text-white">UserName</span>
                </p>
              </div>
               <!-- college----------------------------------------------------------------------------------------- -->

              <div class="container-fluid menu-section  px-0 py-2 border-top">
                  <span class="text-white-50 px-3 my-3">
                      COLLEGE
                  </span>
                         <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo">
                            <span class="float-start">
                                <img src="./img/home.png" alt="home-icon">     
                                <strong>Home</strong>
                            </span>
                            <i class="fa fa-chevron-down float-end"></i>
                         </button>
                         <ul class="list-group active " id="demo">
                            <li class="list-group-item list-group-item-success"><a href="#" class="btn px-0">Update info</a></li>
                            <li class="list-group-item list-group-item-secondary"><a href="#" class="btn px-0">asdf</a></li>
                            <li class="list-group-item list-group-item-info">Info item</li>
                            <li class="list-group-item list-group-item-warning">Warning item</li>
                            <li class="list-group-item list-group-item-danger">Danger item</li>
                          </ul>

                          <!-- second btn -->
                          <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo1">
                            <span>
                                <img src="./img/check.png" alt="attendance-icon">     
                                <strong>Attedance</strong>
                            </span>
                              <i class="fa fa-chevron-down float-end"></i>
                         </button>
                         <ul class="list-group collapse" id="demo1">
                            <li class="list-group-item list-group-item-success"><a href="#" class="btn px-0">Current Session</a></li>
                            <li class="list-group-item list-group-item-secondary">Secondary item</li>
                            <li class="list-group-item list-group-item-info">Info item</li>
                            <li class="list-group-item list-group-item-warning">Warning item</li>
                            <li class="list-group-item list-group-item-danger">Danger item</li>
                            <li class="list-group-item list-group-item-primary">Primary item</li>
                            <li class="list-group-item list-group-item-dark">Dark item</li>
                            <li class="list-group-item list-group-item-light">Light item</li>
                          </ul>

                           <!-- third btn -->
                           <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo2">
                            <span>
                                <img src="./img/money.png" alt="fee-icon">     
                                <strong>Fees-info</strong>
                            </span>
                              <i class="fa fa-chevron-down float-end"></i>
                         </button>
                         <ul class="list-group collapse" id="demo2">
                            <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                            <li class="list-group-item list-group-item-secondary">Secondary item</li>
                            <li class="list-group-item list-group-item-info">Info item</li>
                            <li class="list-group-item list-group-item-warning">Warning item</li>
                            <li class="list-group-item list-group-item-danger">Danger item</li>
                            <li class="list-group-item list-group-item-primary">Primary item</li>
                            <li class="list-group-item list-group-item-dark">Dark item</li>
                            <li class="list-group-item list-group-item-light">Light item</li>
                          </ul>
                            <!-- fourth btn -->
                            <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo3">
                                <span>
                                    <img src="./img/mortarboard.png" alt="Faculty info-icon">     
                                    <strong>Faculty info</strong>
                                </span>
                                  <i class="fa fa-chevron-down float-end"></i>
                             </button>
                             <ul class="list-group collapse" id="demo3">
                                <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                <li class="list-group-item list-group-item-info">Info item</li>
                                <li class="list-group-item list-group-item-warning">Warning item</li>
                                <li class="list-group-item list-group-item-danger">Danger item</li>
                                <li class="list-group-item list-group-item-primary">Primary item</li>
                                <li class="list-group-item list-group-item-dark">Dark item</li>
                                <li class="list-group-item list-group-item-light">Light item</li>
                              </ul>
                                                        <!-- fifth btn -->

                             <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo4">
                                <span>
                                    <img src="./img/book.png" alt="E library-icon">     
                                    <strong>E library</strong>
                                </span>
                                  <i class="fa fa-chevron-down float-end"></i>
                             </button>
                             <ul class="list-group collapse" id="demo4">
                                <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                <li class="list-group-item list-group-item-info">Info item</li>
                                <li class="list-group-item list-group-item-warning">Warning item</li>
                                <li class="list-group-item list-group-item-danger">Danger item</li>
                                <li class="list-group-item list-group-item-primary">Primary item</li>
                                <li class="list-group-item list-group-item-dark">Dark item</li>
                                <li class="list-group-item list-group-item-light">Light item</li>
                              </ul>

                            <!-- sixth btn -->
                            <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo5">
                                <span>
                                    <img src="./img/mortarboard.png" alt="assignment-icon">     
                                    <strong>Asignments</strong>
                                </span>
                                  <i class="fa fa-chevron-down float-end"></i>
                             </button>
                             <ul class="list-group collapse" id="demo5">
                                <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                <li class="list-group-item list-group-item-info">Info item</li>
                                <li class="list-group-item list-group-item-warning">Warning item</li>
                                <li class="list-group-item list-group-item-danger">Danger item</li>
                                <li class="list-group-item list-group-item-primary">Primary item</li>
                                <li class="list-group-item list-group-item-dark">Dark item</li>
                                <li class="list-group-item list-group-item-light">Light item</li>
                              </ul>

                              <!-- seventh btn -->
                              <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo6">
                                <span>
                                    <img src="./img/feedback.png" alt="Feedback-icon">     
                                    <strong>Feedback</strong>
                                </span>
                                  <i class="fa fa-chevron-down float-end"></i>
                             </button>
                             <ul class="list-group collapse" id="demo6">
                                <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                <li class="list-group-item list-group-item-info">Info item</li>
                                <li class="list-group-item list-group-item-warning">Warning item</li>
                                <li class="list-group-item list-group-item-danger">Danger item</li>
                                <li class="list-group-item list-group-item-primary">Primary item</li>
                                <li class="list-group-item list-group-item-dark">Dark item</li>
                                <li class="list-group-item list-group-item-light">Light item</li>
                              </ul>
                              
              </div>
               <!-- personal----------------------------------------------------------------------------------------- -->
                <div class="container-fluid menu-section  px-0 py-2 border-top">
                    <span class="text-white-50 px-3 my-3">
                        PERSONAL
                    </span>
                           <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo11">
                              <span class="float-start">
                                  <img src="./img/home.png" alt="home-icon">     
                                  <strong>Home</strong>
                              </span>
                              <i class="fa fa-chevron-down float-end"></i>
                           </button>
                           <ul class="list-group collapse" id="demo11">
                              <li class="list-group-item list-group-item-success">Success item</li>
                              <li class="list-group-item list-group-item-secondary">Secondary item</li>
                              <li class="list-group-item list-group-item-info">Info item</li>
                              <li class="list-group-item list-group-item-warning">Warning item</li>
                              <li class="list-group-item list-group-item-danger">Danger item</li>
                              <li class="list-group-item list-group-item-primary">Primary item</li>
                              <li class="list-group-item list-group-item-dark">Dark item</li>
                              <li class="list-group-item list-group-item-light">Light item</li>
                            </ul>
  
                            <!-- second btn -->
                            <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo12">
                              <span>
                                  <img src="./img/to-do.png" alt="To Do-icon">     
                                  <strong>To Do</strong>
                              </span>
                                <i class="fa fa-chevron-down float-end"></i>
                           </button>
                           <ul class="list-group collapse" id="demo12">
                              <li class="list-group-item list-group-item-success"><a href="#" class="btn px-0">Current Session</a></li>
                              <li class="list-group-item list-group-item-secondary">Secondary item</li>
                              <li class="list-group-item list-group-item-info">Info item</li>
                              <li class="list-group-item list-group-item-warning">Warning item</li>
                              <li class="list-group-item list-group-item-danger">Danger item</li>
                              <li class="list-group-item list-group-item-primary">Primary item</li>
                              <li class="list-group-item list-group-item-dark">Dark item</li>
                              <li class="list-group-item list-group-item-light">Light item</li>
                            </ul>
  
                             <!-- third btn -->
                             <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo13">
                              <span>
                                  <img src="./img/employee.png" alt="Internships-icon">     
                                  <strong>Internships</strong>
                              </span>
                                <i class="fa fa-chevron-down float-end"></i>
                           </button>
                           <ul class="list-group collapse" id="demo13">
                              <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                              <li class="list-group-item list-group-item-secondary">Secondary item</li>
                              <li class="list-group-item list-group-item-info">Info item</li>
                              <li class="list-group-item list-group-item-warning">Warning item</li>
                              <li class="list-group-item list-group-item-danger">Danger item</li>
                              <li class="list-group-item list-group-item-primary">Primary item</li>
                              <li class="list-group-item list-group-item-dark">Dark item</li>
                              <li class="list-group-item list-group-item-light">Light item</li>
                            </ul>
                              <!-- fourth btn -->
                              <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo14">
                                  <span>
                                      <img src="./img/friends.png" alt="My friends-icon">     
                                      <strong>My friends</strong>
                                  </span>
                                    <i class="fa fa-chevron-down float-end"></i>
                               </button>
                               <ul class="list-group collapse" id="demo14">
                                  <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                  <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                  <li class="list-group-item list-group-item-info">Info item</li>
                                  <li class="list-group-item list-group-item-warning">Warning item</li>
                                  <li class="list-group-item list-group-item-danger">Danger item</li>
                                  <li class="list-group-item list-group-item-primary">Primary item</li>
                                  <li class="list-group-item list-group-item-dark">Dark item</li>
                                  <li class="list-group-item list-group-item-light">Light item</li>
                                </ul>
                                                          <!-- fifth btn -->
  
                               <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo15">
                                  <span>
                                      <img src="./img/multiple-users-silhouette.png" alt="Community-icon">     
                                      <strong>Community</strong>
                                  </span>
                                    <i class="fa fa-chevron-down float-end"></i>
                               </button>
                               <ul class="list-group collapse" id="demo15">
                                  <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                  <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                  <li class="list-group-item list-group-item-info">Info item</li>
                                  <li class="list-group-item list-group-item-warning">Warning item</li>
                                  <li class="list-group-item list-group-item-danger">Danger item</li>
                                  <li class="list-group-item list-group-item-primary">Primary item</li>
                                  <li class="list-group-item list-group-item-dark">Dark item</li>
                                  <li class="list-group-item list-group-item-light">Light item</li>
                                </ul>
  
                              <!-- sixth btn -->
                              <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo16">
                                  <span>
                                      <img src="./img/messenger.png" alt="Messages-icon">     
                                      <strong>Messages</strong>
                                  </span>
                                    <i class="fa fa-chevron-down float-end"></i>
                               </button>
                               <ul class="list-group collapse" id="demo16">
                                  <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                  <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                  <li class="list-group-item list-group-item-info">Info item</li>
                                  <li class="list-group-item list-group-item-warning">Warning item</li>
                                  <li class="list-group-item list-group-item-danger">Danger item</li>
                                  <li class="list-group-item list-group-item-primary">Primary item</li>
                                  <li class="list-group-item list-group-item-dark">Dark item</li>
                                  <li class="list-group-item list-group-item-light">Light item</li>
                                </ul>
  
                                <!-- seventh btn -->
                                <button type="button" class="bg-dark bg-opacity-0 py-3 text-white px-0 border-0" data-bs-toggle="collapse" data-bs-target="#demo17">
                                  <span>
                                      <img src="./img/layers.png" alt="Projects-icon">     
                                      <strong>Projects</strong>
                                  </span>
                                    <i class="fa fa-chevron-down float-end"></i>
                               </button>
                               <ul class="list-group collapse" id="demo17">
                                  <li class="list-group-item list-group-item-success"><a href="#" class="btn text-success px-0">Current Session</a></li>
                                  <li class="list-group-item list-group-item-secondary">Secondary item</li>
                                  <li class="list-group-item list-group-item-info">Info item</li>
                                  <li class="list-group-item list-group-item-warning">Warning item</li>
                                  <li class="list-group-item list-group-item-danger">Danger item</li>
                                  <li class="list-group-item list-group-item-primary">Primary item</li>
                                  <li class="list-group-item list-group-item-dark">Dark item</li>
                                  <li class="list-group-item list-group-item-light">Light item</li>
                                </ul>
                                
                </div>

                <!-- footer-menu -->
                <div class="container-fluid row d-flex bg-black py-4 footer-menu">
                    <div class="col">
                         <a href="#">
                          <img src="./img/gear.png" alt="settings">
                         </a>
                    </div>
                    <div class="col">
                      <a href="#">
                        <img src="./img/email.png" alt="email">
                      </a>
                 </div>
                    <div class="col">
                      <a href="index.php">
                        <img src="./img/log-out.png" alt="logout">
                      </a>
                 </div>
              
                  </div>
            </div>
         
          <div class="dashboard-content bg-danger text-white">
                  <nav class="navbar navbar-expand-lg navbar-dark .fixed-top" style="display:none;">
                      <a href="#" class="float-start"><img src="./img/menu.png" alt="toggle" onclick="toggle_dashboard_menu()"></a>
                      <button class="navbar-toggler d-lg-none " type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                          aria-expanded="false" aria-label="Toggle navigation"><img src="./img/menu.png" alt="toggle-navbar"></button>
                      <div class="collapse navbar-collapse bg-info " id="collapsibleNavId" style="width:15vw;">
                             <div class="d-flex flex-row-reverse bg-secondary" style="width: 10%;">
                                    <div class="container d-flex bg-danger">
                                    <img src="./img/profile.png" alt="profile" class="col-sm-4 rounded-circle bg-muted" style="height: 24px; width:
                                    auto;">
                                          <span class="small text-white">UserName</span>
                                    </div>

                                  <div class="dropdown px-0 py-0" style="width:10%;">
                                      <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                                                      <img src="./img/messenger.png" alt="messages" style="height: 21px;" class="px-2">
                                      </button>
                                              <ul class="dropdown-menu bg-primary p-5">
                                                <li><div class="dropdown-item text-info small" href="#" >Lorem ipsum dolor sit amet consectetur adipisicing elit. A delectus est mollitia esse inventore modi.</div></li>
                                                <li><div class="dropdown-item text-info small" href="#" >Link 2</div></li>
                                                <li><div class="dropdown-item text-info small" href="#" >Link 3</div></li>
                                              </ul>
                                   </div>      
                                
                                   
                             </div>
                      </div>
                  </nav>  
                  
                  <div style="width:100%;">
                    <div class="container-fluid d-flex bg-success" style="width: 100vw;">
                      <span class="h3 bg-info" style="width: 80%;">
                      Our Perks and Achivements
                      </span>
                      <span> 
                         <button type="button" class="btn" data-bs-toggle="collapse" data-bs-target="#perks">
                         <img src="./img/down-filled-triangular-arrow.png" alt="dwn" style="height: 21px;">
                         </button> 
                      </span>
                    </div>
                    <div  class="row bg-success py-2" id="perks">
                              <!-- NUmbers--------------------------------------------------------------------------------- -->
                              <div class="col border-end border-white text-center"> 
                                    <span class="small">
                                      Placements
                                    </span>
                                    <br>
                                    <h3>
                                      89% 
                                    </h3>
                                    <br>
                                    <span>
                                      Students
                                    </span>
                              </div>
                              <div class="col border-end border-white text-center"> 
                                    <span class="small">
                                       Total Student
                                    </span>
                                    <h3>
                                      1600
                                    </h3>
                                    <span>Last session</span>
                              </div>
                              <div class="col border-end border-white text-center"> 
                                    <span class="small">
                                       Employement Rates
                                    </span>
                                    <h3>
                                      89%
                                    </h3>
                                    <span>
                                      highest amongst all and improving
                                    </span>
                              </div>
                              <div class="col border-end border-white text-center"> 
                                    <span class="small">
                                      Learning
                                    </span>
                                    <h3>
                                       35+ 
                                    </h3>
                                    <span>Carree fields</span>
                              </div>
                              <div class="col border-end border-white text-center"> 
                                    <span class="small">
                                      Avgerage Package
                                    </span>
                                    <h3>
                                      35LPA
                                    </h3>
                                    <span>
                                      60LPA
                                    </span>
                              </div>
                        </div>
                  </div> 
                  
                  <div class="container">

                  </div>
          </div>
                      
    </section>

</body>
</html>