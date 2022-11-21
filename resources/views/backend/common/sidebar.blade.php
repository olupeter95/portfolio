<div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{ route('admin.dashboard') }}">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                  
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-information-outline"></i>
                      <span class="nav-text">About</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                         <li >
                              <a class="sidenav-item-link" href="{{ route('about.view') }}">
                                <span class="nav-text">All About</span>
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                </li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#contact"
                      aria-expanded="false" aria-controls="contact">
                      <i class="mdi mdi-information-outline"></i>
                      <span class="nav-text">Contact</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="contact"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                         <li >
                              <a class="sidenav-item-link" href="{{ route('contact.view') }}">
                                <span class="nav-text">All Contact</span>
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                </li>
                
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#setting"
                      aria-expanded="false" aria-controls="setting">
                      <i class="mdi mdi-information-outline"></i>
                      <span class="nav-text">Skills</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="setting"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                         <li >
                              <a class="sidenav-item-link" href="{{ route('skill.view') }}">
                                <span class="nav-text">All Skills</span>
                              </a>
                            </li>
                          
                      </div>
                    </ul>
                </li>

              </ul>

            </div>

            

            
          </div>