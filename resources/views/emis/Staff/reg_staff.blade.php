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

                <!-- Topbar -->
                @include('inc.emis_topbar')
                @include('inc.message')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Add Staff Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                        data-toggle="modal" data-target="#exampleModal">
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
                                <!-- Register staff form -->
                                     <form method="post" Action="/regStaff" enctype="mulipart/form-data">
                                     @csrf
                                     <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputSection">Section</label>
                                            <select id="inputSection" name="inputSection" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Education Secretary Office</option>
                                                <option>Primary Education</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputSurname">Surname</label>
                                            <input type="text" name="inputSurname" class="form-control" id="inputSurname">
                                            </div>                                          
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputFirstName">First Name</label>
                                            <input type="text" name="inputFirstName" class="form-control" id="inputFirstName">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputOtherName">Other Name (Optional)</label>
                                            <input type="text" name="inputOtherName" class="form-control" id="inputOtherName">
                                            </div>                                          
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputSex">Sex</label>
                                            <select id="inputSex" name="inputSex" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</ option>
                                            </select>
                                            </div> 
                                            <div class="form-group col-md-6">
                                            <label for="inputDateOfBirth">Date of Birth</label>
                                            <input type="date" name="inputDateOfBirth" class="form-control" id="inputDateOfBirth">
                                            </div>                                         
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" name="inputEmail" class="form-control" id="inputEmail">
                                            </div> 
                                            <div class="form-group col-md-6">
                                            <label for="inputPhoneNumber">Phone Number</label>
                                            <input type="text" name="inputPhoneNumber" class="form-control" id="inputPhoneNumber">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputFirstAppointment">Date of First Appointment</label>
                                            <input type="date" name="inputFirstAppointment" class="form-control" id="inputFirstAppointment">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputConfirmation">Date of Confirmation</label>
                                            <input type="date" name="inputConfirmation" class="form-control" id="inputConfirmation">
                                            </div>  
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="entryQualification">Entry Qualification</label>
                                            <input type="text" name="entryQualification" class="form-control" id="entryQualification">
                                            </div> 
                                            <div class="form-group col-md-6">
                                            <label for="highestQualification">Highest Qualification</label>
                                            <input type="text" name="highestQualification" class="form-control" id="highestQualification">
                                            </div>
                                        </div>      

                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="lastAppointment">Last Appointment</label>
                                            <input type="date" name="lastAppointment" class="form-control" id="lastAppointment">
                                            </div> 
                                            <div class="form-group col-md-6">
                                            <label for="inputState">State</label>
                                            <select id="inputState" name="inputState" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Plateau</option>
                                                <option>Bauchi</option>
                                            </select>
                                            </div>
                                        </div>                                    

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputLGA">LGA</label>
                                            <select id="inputLGA" name="inputLGA" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Jos South</option>
                                                <option>Jos North</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputHomeTown">Home Town</label>
                                          <input type="text" name="inputHomeTown" class="form-control" id="inputHomeTown">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                            <label for="inputGradeLevel">Grade level</label>
                                            <select id="inputGradeLevel" name="inputGradeLevel" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Jos South</option>
                                                <option>Jos North</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputStep">Step</label>
                                            <select id="inputStep" name="inputStep" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Jos South</option>
                                                <option>Jos North</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputPSN">PSN</label>
                                            <input type="text" name="inputPSN" class="form-control" id="inputPSN">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                            <label for="inputCity">Password</label>
                                            <input type="file" name="passport" id="image">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <div id="imagePreview">
                                                <img class="image-preview" src="" alt="Passport Preview"id="passportPreview" width="200px">
                                                
                                                </div>
                                            </div>                                          
                                        </div>
                                        
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                            <!-- End Register staff form -->
                        </div>
                        </div>
                    <!-- End of Add staff Modal -->
                    
                     

                     
                        <div class="pt-3"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registered Staff</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            @if (count($staff) > 0)
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>   
                                            <th>PSN</th>
                                            <th>NAME</th>
                                            <th>GENDER</th>
                                            <th>DOB</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>    
                                                                             
                                        <th>PSN</th>
                                            <th>NAME</th>
                                            <th>GENDER</th>
                                            <th>DOB</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($staff as $staff)
                                        <tr>
                                            <td>{{$staff->psn}}</td>
                                            <td>{{$staff->surName}}&nbsp;{{$staff->firstName}}&nbsp;{{$staff->otherName}}</td>
                                            <td>{{$staff->sex}}</td>
                                            <td>{{$staff->dob}}</td>
                                            <td>{{$staff->eMail}}</td>
                                            <td>{{$staff->phoneNumber}}</td>
                                            <th>

                            <!-- Add staff Documents Modal -->

                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addDocs{{$staff->id}}">
                                            Add Docs
                                        </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="addDocs{{$staff->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Staff Documents</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Edit staff form -->
                                                       <!-- Register staff form -->
                                     <form method="post" Action="/regStaff" enctype="mulipart/form-data">
                                     @csrf
                                         

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label>PSN:</label>
                                           <p>{{$staff->psn}}</p>
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label >Staff Name:</label>
                                            <p>{{$staff->surName}}&nbsp;{{$staff->firstName}}&nbsp;{{$staff->otherName}}</p>
                                            </div>
                                            
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                            <label for="inputCity">Select Document</label>
                                            <input type="file" name="passport" id="image">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <div id="imagePreview">
                                                <img class="image-preview" src="" alt="Passport Preview"id="passportPreview" width="200px">
                                                
                                                </div>
                                            </div>                                          
                                        </div>
                                        
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                                                <!-- End  Add staff Documents form -->
                                            </div>
                                            </div>
                                   <!-- End of Add Staff Documents Modal -->


                             <!-- Edit staff Modal -->

                                        <!-- Button trigger modal -->
                                            <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit{{$staff->id}}">
                                            Edit
                                            </button> -->
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit{{$staff->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit staff</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Edit staff form -->
                                                        <form method="post" Action="/staffRegistration">
                                                        @csrf
                                                        <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                <label for="surName">Surname</label>
                                                                <input type="text" name="surName" class="form-control" id="surName" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label for="firstName">First Name</label>
                                                                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="">
                                                                </div>                                          
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                <label for="inputCity">Other Name (Optional)</label>
                                                                <input type="text" name="otherName" class="form-control" id="inputCity" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label for="inputState">Gender</label>
                                                                <select id="inputState" name="gender" class="form-control">
                                                                    <option selected disabled>Choose...</option>
                                                                    <option>Male</option>
                                                                    <option>Female</option>
                                                                </select>
                                                                </div>                                         
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                <label for="dob">Date of Birth</label>
                                                                <input type="date" name="DOB" class="form-control" id="dob">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label for="disability">Disability</label>
                                                                <select id="disability" name="disability" class="form-control">
                                                                    <option selected disabled></option>
                                                                    <option Value='None'>None</option>
                                                                    <option Value='Blind'>Blind</option>
                                                                    <option Value='Physical Handicap'>Physical Handicap</option>

                                                                </select>
                                                                </div>  
                                                                <div class="form-group col-md-6">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="eMail" class="form-control" id="email" placeholder="{{$staff->eMail}}" disabled>
                                                                </div> 
                                                                <div class="form-group col-md-6">
                                                                <label for="phoneNumber">Phone Number</label>
                                                                <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="{{$staff->phoneNumber}}" disabled>
                                                                </div>
                                                            </div>

                                                            <div class="form-row">
                                                                
                                                                <div class="form-group col-md-4">
                                                                <label for="inputState">State</label>
                                                                <select id="inputState" name="state" class="form-control">
                                                                    <option selected disabled>{{$staff->state}}</option>
                                                                    <option>Plateau</option>
                                                                    <option>Bauchi</option>
                                                                </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                <label for="lga">LGA</label>
                                                                <select id="lga" name="lga" class="form-control">
                                                                    <option selected disabled>{{$staff->lga}}</option>
                                                                    <option>Jos South</option>
                                                                    <option>Jos North</option>
                                                                </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                <label for="homeTown">Home Town</label>
                                                            <input type="text" name="homeTown" class="form-control" id="homeTown" placeholder="{{$staff->homeTown}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-8">
                                                                    <label for="inputAddress">Select Passport</label>
                                                                    <input type="File" name="passport" class="form-control" id="inputAddress">
                                                                </div>
                                                                <div class="col-md-3">
                                                                
                                                                </div>
                                                            </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Record</button>
                                                </div>
                                                </div>
                                                </form>
                                                <!-- End Edit staff form -->
                                            </div>
                                            </div>
                                   <!-- End of Edit staff Modal -->
                                            </th>
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                                        @else
                                            <p>No Staff Registered yet!</p>
                                        @endif
                            </div>
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
    
    <script src="js/passportPreviewScripts.js"></script>
</body>

</html>