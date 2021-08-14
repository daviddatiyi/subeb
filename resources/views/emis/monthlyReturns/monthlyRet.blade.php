@extends('layouts.emis_app')

@section('content')
<div id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('inc.emis_sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('inc.emis_topbar')
                @include('inc.message')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<!-- Session Modal temp -->
 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                        data-toggle="modal" data-target="#addSession">
                        Add Session
                        </button>

                            <!-- Modal -->
                        <div class="modal fade" id="addSession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Session</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add Sessions form -->
                                     <form method="post" Action="/addSession">
                                     @csrf
                                     <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="startYear">Start Year</label>
                                            <input type="text" name="startYear" class="form-control" id="startYear">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="endYear">End Year</label>
                                            <input type="text" name="endYear" class="form-control" id="endYear">
                                            </div>                                          
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                            <!-- End Add Sessions form -->
                        </div>
                        </div>
                    
<!-- End Session Modal temp -->

                    <!-- Add Staff Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Register Staff
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Register Staff</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Register Staff form -->
                                     <form method="post" Action="/regStaff">
                                     @csrf
                                     <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Surname</label>
                                            <input type="text" name="surName" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">First Name</label>
                                            <input type="text" name="firstName" class="form-control" id="inputCity">
                                            </div>                                          
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Other Name (Optional)</label>
                                            <input type="text" name="otherName" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Email</label>
                                            <input type="email" name="eMail" class="form-control" id="inputCity">
                                            </div>                                          
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                            <label for="inputCity">Date of Birth</label>
                                            <input type="date" name="DOB" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputCity">Appointment</label>
                                            <input type="date" name="firstAppointment" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputCity">Qualification</label>
                                            <select id="inputState" name="qualification" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>NCE</option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                            <label for="inputCity">Phone Number</label>
                                            <input type="text" name="phoneNumber" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputState">State</label>
                                            <select id="inputState" name="state" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Plateau</option>
                                                <option>Bauchi</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputState">LGA</label>
                                            <select id="inputState" name="lga" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Jos South</option>
                                                <option>Jos North</option>
                                            </select>
                                            </div>
                                        </div>                                 
                                    
                                <!-- End Register Staff form -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                        </div>
                        </div>
                    <!-- End of Add Staff Modal -->
                    
                     <!-- Monthly Returns Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#monthlyReturn">
                        Monthly Return
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="monthlyReturn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Monthly Return</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- monthly returns form -->
                                
                                <form Action="/monthlyReturns" method="post">
                               
                                @csrf
                                     <div class="form-row">
                                            
                                            <label for="inputCity">Year</label>
                                            <select name="year" id="inputState" class="form-control" >
                                                <option  disabled>Choose...</option>
                                                <!-- <option value="2020">2020</option> -->
                                                <option selected value="2021">2021</option>
                                            </select>
                                            
                                            <label for="month">Month</label>
                                            <select name="month" id="inputState" class="form-control" >
                                                <option disabled>Choose...</option>
                                                <option value ="january">January</option>
                                                <option selected value ="february">February</option>
                                                <option value ="march">March</option>
                                                <option value ="April">April</option>
                                                <option value ="may">May</option>
                                                <option value ="june">June</option>
                                                <option value ="july">July</option>
                                                <option value ="august">August</option>
                                                <option value ="january">September</option>
                                                <option value ="october">October</option>
                                                <option value ="november">November</option>
                                                <option value ="december">December</option>
                                            </select>

                                            <label for="school">School</label>
                                            <select name="school" id="inputState" class="form-control" >
                                                <option disabled >Choose...</option>
                                                <option value ="LEA Hwol Nabor"  >LEA Hwol Nabor</option>
                                                <option value ="Kunga Nomadic">Kunga Nomadic</option>
                                                <option value ="Ansar-ud Deen">Ansar-ud Deen</option>
                                                <option value ="LEA Kunga Rhigizah">LEA Kunga Rhigizah</option>
                                                <option value ="LEA Babale">LEA Babale</option>
                                                <option value ="LEA Prim Sch S/Layi"selected>LEA Prim Sch S/Layi</option>
                                                <option value ="Nawair-Ud-Deen">Nawair-Ud-Deen</option>
                                                <option value ="LEA Gwash" >LEA Gwash</option>
                                                <option value ="Nurudeen Township" >Nurudeen Township</option>
                                                <option value ="St Paul's Township" selected>St Paul's Township</option>
                                            </select>
                                           
                                            <label for="name">Name</label>
                                            <input name="name" type="text" class="form-control" id="name">

                                            <label for="sex">Sex</label>
                                            <select name="sex" id="inputState" class="form-control">
                                                <option disabled selected>Choose...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                           
                                            <label for="dateOfBirth">Date of Birth</label>
                                            <input name="dob" type="date" class="form-control" id="dateOfBirth">
                                            
                                            <label for="firstAppt">First Appt</label>
                                            <input name="firstAppointment" type="date" class="form-control" id="firstAppt">
                                           
                                            <label for="highestQualification">Highest Qual.</label>
                                                <select name="highestQualification" id="highestQualification" class="form-control">
                                                <option disabled selected>Choose...</option>
                                                <option value="B. Ed">B. Ed</option>
                                                <option value="NCE">NCE</option>
                                                <option value="Dip">Dip</option>
                                                <option value="SSCE">SSCE</option>
                                                <option value="CNA">CNA</option>
                                                <option value="FSLC">FSLC</option>
                                                <option value="JSCE">JSCE</option>
                                                <option value="PGDE">PGDE</option>
                                                <option value="M.Ed">M.Ed</option>
                                                <option value="GR II">GR II</option>
                                                <option value="None">None</option>
                                                
                                            </select>
                                            
                                            <label for="dateOfLastAppt">Date of Last Appt</label>
                                            <input name="dateOfLastAppt" type="date" class="form-control" id="dateOfLastAppt">

                                            <label for="rank">Rank</label>
                                            <select name="rank" id="rank" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="Director">Director</option>
                                                <option value="D.D">D.D</option>
                                                <option value="CEAO">CEAO</option>
                                                <option value="CEO">CEO</option>
                                                <option value="EDI">EDI</option>
                                                <option value="PEAO1">PEAO1</option>
                                                <option value="PEO">PEO</option>
                                                <option value="AEO">AEO</option>
                                                <option value="SAEO">SAEO</option>
                                                <option value="SEO">SEO</option>
                                                <option value="HM2">HM2</option>
                                                <option value="EO1">EO1</option>
                                                <option value="W/M">W/M</option>
                                                <option value ="Cleaner">Cleaner</option>
                                                <option value ="Lib Asst">Lib Asst</option>
                                                <option value ="Helper">Helper</option>
                                                <option value="EMIS">EMIS</option>
                                                <option value="Asst. EMIS">Asst. EMIS</option>
                                            </select>

                                            <label for="classTaught">Class Taught</label>
                                            <select name="classTaught" id="classTaught" class="form-control">
                                                <option disabled selected>Choose...</option>
                                                <option value ="Head Master">Head Master</option>
                                                <option value ="Asst Head Master">Asst Head Master</option>
                                                <option value ="Play Class">Play Class</option>
                                                <option value ="Nursery 1">Nursery 1</option>
                                                <option value ="Nursery 2">Nursery 2</option>
                                                <option value ="Nursery 3">Nursery 3</option>
                                                <option value ="Primary 1">Primary 1</option>
                                                <option value ="Primary 2">Primary 2</option>
                                                <option value ="Primary 3">Primary 3</option>
                                                <option value ="Primary 4">Primary 4</option>
                                                <option value ="Primary 5">Primary 5</option>
                                                <option value ="Primary 6">Primary 6</option>
                                                <option value ="ICT">ICT</option>
                                                <option value ="G/C">G/C</option>
                                                <option value ="CRK">CRK</option>
                                                <option value ="IRK">IRK</option>
                                                <option value ="W/M">W/M</option>
                                                <option value ="Lib">Lib</option>
                                                <option value ="Cleaner">Cleaner</option>
                                            </select>

                                            <label for="lga">LGA of Origin</label>
                                            <select name="lga" id="lga" class="form-control">
                                                <option disabled selected>Choose...</option>
                                                <option value ="Bassa">Bassa</option>
                                                <option value ="Barkin Ladi">Barkin Ladi</option>
                                                <option value ="Bauchi">Bauchi</option>
                                                <option value ="Bokkos">Bokkos</option>
                                                <option value ="Jos North">Jos North</option>
                                                <option value ="Jos South">Jos South</option>
                                                <option value ="Jos East">Jos East</option>
                                                <option value ="Kanke">Kanke</option>
                                                <option value ="Kanam">Kanam</option>
                                                <option value ="Pankshin">Pankshin</option>
                                                <option value ="Ajikota">Ajikota</option>
                                                <option value ="Langtang North">Langtang North</option>
                                                <option value ="Wase">Wase</option>
                                                <option value ="Mikang">Mikang</option>
                                                <option value ="Mangu">Mangu</option>
                                                <option value ="Quan Pan">Quan Pan</option>
                                                <option value ="Wukari">Wukari</option>
                                                <option value ="Oju">Oju</option>
                                                <option value ="Njekoka">Njekoka</option>
                                                <option value ="Awka South">Awka South</option>
                                                <option value ="Nneni">Nneni</option>
                                                <option value ="Ahaizu">Ahaizu</option>
                                                <option value ="Eziagu">Eziagu</option>
                                                <option value ="Toro">Toro</option>
                                                <option value ="Lafiya">Lafiya</option>
                                                <option value ="Yola South">Yola South</option>
                                                <option value ="Ideato">Ideato</option>
                                                <option value ="Dunukofia">Dunukofia</option>
                                                <option value ="Gwer">Gwer</option>
                                                <option value ="Orumba">Orumba</option>
                                                <option value ="Angu">Angu</option>
                                                <option value ="Nsuka">Nsuka</option>
                                                <option value ="Demsa">Demsa</option>
                                                <option value ="Edemila North">Edemila North</option>
                                                <option value ="Nass Eggo">Nass Eggo</option>
                                                <option value ="Shendam">Shendam</option>
                                                <option value ="Sumaila">Sumaila</option>
                                                <option value ="Aniocha">Aniocha</option>
                                                <option value ="Baone">Baone</option>
                                                
                                            </select>

                                            
                                            <label for="State">State of Origin</label>
                                            <select name="state" id="State" class="form-control">
                                                <option disabled selected>Choose...</option>
                                                <option value ="Plateau">Plateau</option>
                                                <option value ="Bauchi">Bauchi</option>
                                                <option value ="Anambra">Anambra</option>
                                                <option value ="Enugu">Enugu</option>
                                                <option value ="Nasarawa">Nasarawa</option>
                                                <option value ="Adamawa">Adamawa</option>
                                                <option value ="Imo">Imo</option>
                                                <option value ="Taraba">Taraba</option>
                                                <option value ="Benue">Benue</option>
                                                <option value ="Kano">Kano</option>
                                                <option value ="Abia">Abia</option>

                                            </select>
                                            
                                            <label for="gl">GL</label>
                                            <input name="gl" type="text" class="form-control" id="gl">
                                            
                                            <label for="yrsInPresentStation">Yrs in Present Station</label>
                                                <input name="yrsInPresentStation" type="text" class="form-control" id="yrsInPresentStation">

                                                <label for="yrsInService">Yrs in Service</label>
                                                <input name="yrsInService" type="text" class="form-control" id="yrsInService">

                                                <label for="psn">PSN</label>
                                                <input name="psn" type="text" class="form-control" id="psn">

                                                
                                           </div>                           
                                    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            
                            
                            </form>
                                <!-- End Monthly returns form -->
                        </div>
                        </div>
                    <!-- End of Monthly returns Modal -->

                        <div class="pt-3"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Monthly Return</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            @if (count($monthlyReturns) > 0)
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S/No</th> 
                                            <th>SCHOOL</th>
                                            <th>NAME</th>
                                            <th>SEX</th>
                                            <th>DOB</th>
                                            <th>1ST APP</th>
                                            <th>QUAL</th>
                                            <th>LAST APPT</th>
                                            
                                            <th>G/L/STP</th>
                                            <th>PSN</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>  
                                            <th>S/No</th> 
                                            <th>SCHOOL</th>                                      
                                            <th>NAME</th>
                                            <th>SEX</th>
                                            <th>DOB</th>
                                            <th>1ST APP</th>
                                            <th>QUAL</th>
                                            <th>LAST APPT</th>
                                            
                                            <th>G/L/STP</th>
                                            <th>PSN</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($monthlyReturns as $monthlyReturns)
                                        <tr>
                                            <td>{{$monthlyReturns->id}}</td>
                                            <td>{{$monthlyReturns->school}}</td>
                                            <td>{{$monthlyReturns->name}}</td>  
                                            <td>{{$monthlyReturns->sex}}</td>
                                            <td>{{$monthlyReturns->dob}}</td>
                                            <td>{{$monthlyReturns->firstAppointment}}</td>
                                            <td>{{$monthlyReturns->highestQualification}}</td>
                                            <td>{{$monthlyReturns->dateOfLastAppointment}}</td>
                                            <td>{{$monthlyReturns->gl}}</td>                                       
                                            
                                            <th>{{$monthlyReturns->psn}}</th>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                                <p>No Monthly Returns Entered!</p>
                            @endif
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dayepsoft ltd 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>