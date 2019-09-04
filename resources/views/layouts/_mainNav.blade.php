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
                              <a class="sidenav-item-link" href="{{route('session.create')}}">
                                <span class="nav-text">Create New Session</span>

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
                              <a class="sidenav-item-link" href="{{route('test.index')}}">
                                <span class="nav-text">Result</span>
                                
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
                          <a class="sidenav-item-link" href="{{route('notice.index')}}">
                            <span class="nav-text">Show Notice</span>

                          </a>
                        </li>
                            <li >
                              <a class="sidenav-item-link" href="{{route('notice.create')}}">
                                <span class="nav-text">Add Notice</span>
                                
                              </a>
                            </li>
                          
                        

                        
                      </div>
                    </ul>
                  </li>
              </ul>

            </div>




          </div>
        </aside>
