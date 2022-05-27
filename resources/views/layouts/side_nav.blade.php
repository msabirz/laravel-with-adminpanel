@php
    $role_id = Auth::user()->role_id;
@endphp
<section>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{url('assets/images/user.png')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  {{ Auth::user()->name}} </div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                      <li><a href="{{url('/profile')}}"><i class="material-icons">person</i>Profile  </a></li>
                      <!-- <li role="seperator" class="divider"></li> -->
                        <!-- <li><a href="{{url('/changePassword')}}"><i class="material-icons">person</i>Change Password  </a></li> -->
                        <li role="seperator" class="divider"></li>
                        <li><a href="{{url('/logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <!--<li class="header">MAIN NAVIGATION</li>-->
                <li>
                    @if($role_id!=2)
                    <a href="{{url('/dashboard')}}">
                        <i class="material-icons">home</i>
                        <span> @if($role_id==1) Overview @else Home @endif</span>
                    </a>
                    @endif
                </li>


                @if($role_id==2)
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Print Form with Barcode</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Track Payment History</span>
                </a>
                <!-- <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">text_fields</i>
                        <span>Event Category</span>
                    </a>
                    <ul class="ml-menu">
                      <li>
                          <a href="{{url('/eventcategory')}}">Event Category</a>
                      </li>
                        <li>
                            <a href="{{url('/eventcategory/create')}}">Add Event Category</a>
                        </li>
                        <li>
                            <a href="{{url('/import_category_question')}}">Import Category with  Question</a>
                        </li>
                    </ul>
                </li> -->
                @elseif($role_id==1)
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">list</i>
                        <span>View Entries</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">lock_outline</i>
                        <span>Audit Page</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">print</i>
                        <span>Print Sanctions</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">payment</i>
                        <span>Payment File</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">plus_one</i>
                        <span>View Unlock Request</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">question_answer</i>
                        <span>Tracking for queries</span>
                </a>
                <a href="{{url('/dashboard')}}">
                        <i class="material-icons">home</i>
                        <span>Reports</span>
                </a>
                @endif


            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <!-- <div class="copyright">
                 &copy; 2017 <a href="javascript:void(0);">Admin - Magnus</a>.
             </div> -->
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>
