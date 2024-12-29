<!-- ============= COMPONENT ============== -->
<nav class="navbar navbar-expand-lg ">

    <div class="container-fluid" style="padding-left: 120px ; background-color:rgb(94, 181, 184)">

        <a class="navbar-brand  text-black" href="{{ url('/')}}">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
                <!-- <li class="nav-item  dropdown"> <a class="nav-link" href="#">Home </a> </li>-->


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> About </a>
                    <ul class="dropdown-menu " style="background-color:rgb(94, 181, 184)">

                        <li><a href="/about">History and development</a></li>

                        <li>
                             <a href="{{ url('/about')}}">Vision and mission</a></li>
            
                        <li >
                             <a href="{{ url('/about')}}">Aims and objectives</a></li>
            
                        <li >
                             <a href="{{ url('/about')}}">Facts and numbers</a></li>
            
                        <li>
                             <a href="{{ url('/about')}}">University Councils</a></li>
            
                        <li >
                             <a href="{{ url('/about')}}">Contact Us</a></li>
            
                        <li >
                             <a href="{{ url('/about')}}">The University Logo</a></li>
            

                    </ul>
                </li>

                {{-- <li class="nav-item"><a class="nav-link" href="#"> Administrations </a></li> --}}
                <!-- administrations -->
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        Administrations/Deanships/Secretariats </a>
                    <div class="dropdown-menu megamenu badge-light text-light " style="background-color:rgb(94, 181, 184)" role="menu">
                        <div class="row g-3">
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center"> <b>Senior Administrations</b></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Vice Chancellor</a></li>
                                        <li><a href="#">Deputy of Vice Chancellor</a></li>
                                        <li><a href="#">Principl of University</a></li>
                                        <li><a href="#">Former Vice Chancellors</a></li>
                                        <li><a href="#">Former Deputies Vice Chancellor</a></li>
                                        <li><a href="#">Former Principles</a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-4 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Special Administrations</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Administration of Environment</a></li>
                                        <li><a href="#">Health Services Administration</a></li>
                                        <li><a href="#">Administration of Affiliation and Distance Education</a>
                                        </li>
                                        <li><a href="#">Administration of Arabicization Authorship and
                                                Publication</a></li>
                                        <li><a href="#">Administration of University Guard </a></li>
                                        <li><a href="#">University of Gezira Consultancy House</a></li>
                                        <li><a href="#">Administration of Information and Public Relation</a></li>


                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Central Administrations</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Human Resource Administration</a></li>
                                        <li><a href="#">Administration of Engineering</a></li>
                                        <li><a href="#">Administration Services</a></li>
                                        <li><a href="#">Administration of Financial and Accounting</a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>

                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Deanships</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Deanship of Scientific Research &amp; Innovation</a></li>
                                        <li><a href="#">Deanship of Students affairs</a></li>
                                        <li><a href="#">Deanship of Libraries</a></li>
                                        <li><a href="#">Deanship of Quality Assurance and Accreditation</a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>

                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Secretariats</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Secretary of Academic Affairs</a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>
                        </div><!-- end row -->
                    </div> <!-- dropdown-mega-menu.// -->
                </li>
                {{-- end of administrations --}}



                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Faculties </a>
                    <div class="dropdown-menu megamenu badge-light text-light "  style="background-color:rgb(94, 181, 184)" role="menu">
                        <div class="row g-3">
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center"> <b>Helth Sector</b></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Faculty of Medicine</a></li>
                                        <li><a href="#">Faculty of Dentistry Medicine</a></li>
                                        <li><a href="#">Faculty of Pharmacy</a></li>
                                        <li><a href="#">Faculty of Applied Medical Sciences</a></li>
                                        <li><a href="#">Faculty of Medical Laboroteries Science</a></li>
                                        <li><a href="#">Faculty of Health and Environmental Sciences</a></li>

                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Engineering and, Pure and Applied Sciences</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Faculty of Engineering and Technology</a></li>
                                        <li><a href="#">Faculty of Industries Engineering and Technology</a></li>
                                        <li><a href="#">Faculty of Science</a></li>
                                        <li><a href="#">Faculty of Mathematical and Computer Sciences</a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Educational Sector</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Faculty of Education -Hantoup</a></li>
                                        <li><a href="#">Faculty of Education -Hasahesa</a></li>

                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Humanitarian Sector</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Faculty of Arts and Humanties Sciences</a></li>
                                        <li><a href="#">Faculty of languages</a></li>
                                        <li><a href="#">Faculty of Law</a></li>
                                        <li><a href="#">Faculty of Media</a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Agricultural Sector</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Faculty of Agricultural Sciences</a></li>
                                        <li><a href="#">Faculty of Forest Science and Technology</a></li>
                                        <li><a href="#">Faculty of Animal Production</a></li>

                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                            <div class="col-lg-2 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Economics</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Faculty of Economics and Rural Development</a></li>
                                        <li><a href="#">Faculty of Developmental Studies</a></li>
                                        <li><a href="#">Faculty of Commercial studies</a></li>
                                        <li><a href="#">Community College</a></li>

                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->
                        </div><!-- end row -->
                    </div> <!-- dropdown-mega-menu.// -->
                </li>
                <!-- Institutes and centers -->
                <li class="nav-item dropdown has-megamenu">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Institutes, Centers
                        and Colleges </a>
                    <div class="dropdown-menu megamenu badge-light text-light "  style="background-color:rgb(94, 181, 184)" role="menu">
                        <div class="row g-3">
                            <div class="col-lg-5 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center"> <b>Institutes</b></h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">National Cancer Institute</a></li>
                                        <li><a href="#">National Oilseeds Processing Research Institute</a></li>
                                        <li><a href="#">The National Institute for Promotion of horticultural
                                                exports</a></li>
                                        <li><a href="#">Sugar Institute</a></li>
                                        <li><a href="#">Water Management and Irrigation Institute</a></li>
                                        <li><a href="#">The nomads Research Institute</a></li>
                                        <li><a href="#">National Institute for Desert Studies</a></li>
                                        <li><a href="https://bnnicd.org">Blue Nile National Institute for Communicable
                                                Diseases</a></li>
                                        <li><a href="#">Institute of Islamic Studies and Islamization of
                                                Knowledge</a></li>

                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div><!-- end col-3 -->

                            <div class="col-lg-4 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Centers</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">Education Development and Reasearch Center</a></li>
                                        <li><a href="#">University Education Development Center</a></li>
                                        <li><a href="#">Computer and Information Technology Center</a></li>

                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="col-megamenu">
                                    <h6 class="title text-center">Colleges</h6>
                                    <ul class="list-unstyled">
                                        <li><a href="#">College of Postgraduate Studies </a></li>
                                    </ul>
                                </div> <!-- col-megamenu.// -->
                            </div>

                        </div><!-- end row -->
                    </div> <!-- dropdown-mega-menu.// -->
                </li>
                {{-- end of institutes and ceneters  Colleges --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Admission </a>
                    <ul class="dropdown-menu " style="background-color:rgb(94, 181, 184)">

                        <li><a href="admission.aspx?page=27">Undergraduate</a></li>

                        <li>
                            <a href="https://web.archive.org/web/20220516054657/http://uofg.edu.sd/emde/home/about">Distance
                                Education Admission</a>
                        </li>

                        <li>
                            <a href="graduate.aspx">Postgraduate Studies</a>
                        </li>


                    </ul>
                </li>

                <!-- end of navbar-->
            </ul>
            <!--
    <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> English </a>
            <ul class="dropdown-menu dropdown-menu-end bg-dark">
              <li><a class="dropdown-item bg-dark text-left" href="#"> English</a></li>
              <li><a class="dropdown-item bg-dark text-left" href="#"> Arabis </a></li>
            </ul>
        </li>
    </ul>
    -->
        </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
</nav>
<!-- ============= COMPONENT END// ============== -->
