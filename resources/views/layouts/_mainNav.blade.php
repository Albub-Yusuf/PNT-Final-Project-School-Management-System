 <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{route('dashboard')}}">
           
                <span class="brand-name"><h6>Unknown's School Management System</h6></span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="{{route('dashboard')}}">
                    <i class="mdi mdi-view-dashboard-outline"></i>
                    <span class="nav-text">Dashboard</span> <b class="caret"></b>
                  </a>
                </li>
                  <!--Admin-->

                    <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Admin"
                      aria-expanded="false" aria-controls="Admin">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Admin</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Admin"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{route('user.index')}}">
                                <span class="nav-text">Admin List</span>
                              </a>
                            </li>
                              <li >
                              <a class="sidenav-item-link" href="{{route('user.create')}}">
                                <span class="nav-text">Add Admin</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{route('exam.create')}}">
                                 <span class="nav-text">Create Exam</span>
                              </a>
                            </li>
                             <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Send Notice</span>

                              </a>
                            </li>

                             <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Send Invitation</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>

                  <!--Students-->
                <li  class="has-sub" >
                  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#students"
                     aria-expanded="false" aria-controls="students">
                    <i class="mdi mdi-chart-pie"></i>
                    <span class="nav-text">Students</span> <b class="caret"></b>
                  </a>
                  <ul  class="collapse"  id="students"
                       data-parent="#sidebar-menu">
                    <div class="sub-menu">



                      <li >
                        <a class="sidenav-item-link" href="{{route('student.list')}}">
                          <span class="nav-text">Student List</span>
                        </a>
                      </li>

                      <li >
                        <a class="sidenav-item-link" href="{{route('student.request')}}">
                          <span class="nav-text">Addmission Request</span>
                        </a>
                      </li>
                      <li >
                        <a class="sidenav-item-link" href="{{route('student.create')}}">
                          <span class="nav-text">Add Student</span>
                        </a>
                      </li>
                    </div>
                  </ul>
                </li>
                

                
                  <!--Teachers-->
                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#teachers"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Teachers</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="teachers"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">


                        <li >
                          <a class="sidenav-item-link" href="{{route('teacher.index')}}">
                            <span class="nav-text">Teacher's List</span>
                          </a>
                        </li>

                        <li >
                          <a class="sidenav-item-link" href="{{route('teacher.create')}}">
                            <span class="nav-text">Add Teacher</span>
                          </a>
                        </li>

                        

                        
                      </div>
                    </ul>
                  </li>

                  <!--Guardian's-->


                      <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#guardian"
                      aria-expanded="false" aria-controls="guardian">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">guardian</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="guardian"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Add Guardian</span>
                                
                              </a>
                            </li>

                             <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Send Notice</span>
                                
                              </a>
                            </li>

                             <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Send Invitation</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                
                  <!--Fee's-->

                      <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#fee"
                      aria-expanded="false" aria-controls="fee">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">fee</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="fee"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{route('collect.fee')}}">
                                <span class="nav-text">Collect Fee</span>
                                
                              </a>
                            </li>

                          
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                
                <!--Subjects-->
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Subject"
                      aria-expanded="false" aria-controls="Subject">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Subject</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Subject"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="{{route('subject.create')}}">
                                <span class="nav-text">Add Subject</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                  <!--Result-->
                      <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Result"
                      aria-expanded="false" aria-controls="Result">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Result</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Result"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Result</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                 
                <!--Payroll-->
                    <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Payroll"
                      aria-expanded="false" aria-controls="Payroll">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Payroll</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Payroll"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Give Salary</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                
                

                  <!--Booklist-->
                      <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Booklist"
                      aria-expanded="false" aria-controls="Booklist">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Booklist</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Booklist"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Add Book</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                
                
                
                <!--Notice-->
                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Notice"
                      aria-expanded="false" aria-controls="Notice">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Notice</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="Notice"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">Add Notice</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sign-in.html">Sign In</a>
                              </li>
                              
                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Others</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="invoice.html">invoice</a>
                              </li>
                              
                              <li >
                                <a href="error.html">Error</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                      </div>
                    </ul>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Documentation</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="documentation"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li class="section-title">
                              Getting Started
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="introduction.html">
                                <span class="nav-text">Introduction</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="setup.html">
                                <span class="nav-text">Setup</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="customization.html">
                                <span class="nav-text">Customization</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li class="section-title">
                              Layouts
                            </li>
                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                            aria-expanded="false" aria-controls="headers">
                            <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="headers">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="header-fixed.html">Header Fixed</a>
                              </li>
                              
                              <li >
                                <a href="header-static.html">Header Static</a>
                              </li>
                              
                              <li >
                                <a href="header-light.html">Header Light</a>
                              </li>
                              
                              <li >
                                <a href="header-dark.html">Header Dark</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                            aria-expanded="false" aria-controls="sidebar-navs">
                            <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="sidebar-navs">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sidebar-open.html">Sidebar Open</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-minimized.html">Sidebar Minimized</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                              </li>
                              
                              <li >
                                <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                              </li>
                              
                              <li >
                                <a href="right-sidebar.html">Right Sidebar</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="rtl.html">
                                <span class="nav-text">RTL Direction</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
                

                
              </ul>

            </div>

            <hr class="separator" />

            <div class="sidebar-footer">
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>
