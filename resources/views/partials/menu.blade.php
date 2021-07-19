<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("home") }}" class="nav-link">
                     <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    <strong>{{ trans('global.dashboard') }}</strong>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("tests-performed") }}" class="nav-link">
                 <span class="nav-icon"><i class="fas fa-file-medical-alt"></i></span>
                    <strong>Tests Performed</strong>
                </a>
                <a style="margin-left:15px" href="{{ route("create") }}" class="nav-link">
                    - Perform New Test
                </a>
                <a style="margin-left:15px" href="{{ route("tests-performed") }}" class="nav-link">
                    - List of Tests
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route("available-tests") }}" class="nav-link">
                 <span class="nav-icon"><i class="fas fa-file-medical"></i></span>                    
                    <strong>Available Tests</strong>
                </a>
                <a style="margin-left:15px" href="{{ route("available-test-create") }}" class="nav-link">                 
                    - Add New Test
                </a>
                <a style="margin-left:15px" href="{{ route("available-tests") }}" class="nav-link">
                    - List Of Available Tests
                </a>
                <a style="margin-left:15px" href="{{ route("category") }}" class="nav-link">                   
                    - Test Categories
                </a>
                <a type="hidden" style="" href="{{ route("catagory-list") }}" class="">                   
                    
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('patient-list') }}" class="nav-link">
                 <span class="nav-icon mr-1"><i class="fas fa-procedures" style='font-size:16px;margin-right:5px;'></i></span>                 
                    <strong>Patients</strong>
                </a>
                <a style="margin-left:15px" href="{{ route("patient-create") }}" class="nav-link">
                    - Add New Patient
                </a>
                <a style="margin-left:15px" href="{{ route("patient-list") }}" class="nav-link"> 
                    - List of patients
                </a>
                <a style="margin-left:15px" href="{{ route("patient-category") }}" class="nav-link">                
                    - Patient Categories
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route('inventory-list') }}" class="nav-link">
                 <span class="nav-icon mr-1"><i class='fas fa-chart-bar' style='font-size:18px;margin-right:5px;'></i></span>                 
                    <strong> Inventory</strong>
                </a>
                <a style="margin-left:15px" href="{{ route("inventory-create") }}" class="nav-link">
                    - Add new Item
                </a>
                <a style="margin-left:15px" href="{{ route("inventory-list") }}" class="nav-link"> 
                    - List of products
                </a>
            </li>
            <li class="nav-item">
                    <a href="{{ route("sales") }}" class="nav-link">
                         <i class="nav-icon fas fa-fw fa-tachometer-alt">
                        </i> 
                        <strong>Sales</strong>
                    </a>
                </li>

                <!-- <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Tests
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route("catagory-list") }}" class="nav-link {{ request()->is('')  ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    Tests Category
                                </a>
                            </li>
                 
                   
                    </ul>




                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route("tests-performed") }}" class="nav-link {{ request()->is('')  ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    Tests Performed
                                </a>
                            </li>
                     
                            <li class="nav-item">
                                <a href="{{ route("available-tests") }}" class="nav-link {{ request()->is('')  ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    Available Tests
                                </a>
                            </li>
                   
                    </ul>
                 </li>
















                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Patients
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route("patient-list") }}" class="nav-link {{ request()->is('')  ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    Patients List
                                </a>
                            </li>
                          
                  





                            <li class="nav-item">
                                <a href="{{ route("patient-category") }}" class="nav-link {{ request()->is('')  ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    Patients Category
                                </a>
                            </li>
                
                    </ul>
                </li>





                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Inventory
                    </a>
                    <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="{{ route("inventory-list") }}" class="nav-link {{ request()->is('')  ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    Inventory Section
                                </a>
                            </li>
                    </ul>
                </li> -->

           




            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <!-- <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i> -->
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
