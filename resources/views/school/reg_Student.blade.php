@extends('layouts.school_app')

@section('content')
<div id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('inc.school_sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                @include('inc.school_topbar')
                @include('inc.message')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- Add Student Modal -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                        data-toggle="modal" data-target="#registerStudent">
                        Register Student
                        </button>

                            <!-- Modal -->
                        <div class="modal fade" id="registerStudent" tabindex="-1" role="dialog" aria-labelledby="registerStudentLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="registerStudentLabel">Register Student</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Register Student form -->
                                     <form method="post" Action="/regStudent" enctype="multipart/form-data">
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
                                            <label for="inputState">Gender</label>
                                            <select id="inputState" name="gender" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            </div>                                         
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Date of Birth</label>
                                            <input type="date" name="DOB" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Disability</label>
                                            <select id="inputState" name="disability" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option Value='None'>None</option>
                                                <option Value='Blind'>Blind</option>
                                                <option Value='Physical Handicap'>Physical Handicap</option>

                                            </select>
                                            </div>  
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Email</label>
                                            <input type="email" name="eMail" class="form-control" id="inputCity">
                                            </div> 
                                            <div class="form-group col-md-6">
                                            <label for="inputCity">Phone Number</label>
                                            <input type="text" name="phoneNumber" class="form-control" id="inputCity">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            
                                            <div class="form-group col-md-4">
                                            <label for="inputState">State</label>
                                            <select id="inputState" name="state" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Plateau</option>
                                                <option>Bauchi</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputState">LGA</label>
                                            <select id="inputState" name="lga" class="form-control">
                                                <option selected disabled>Choose...</option>
                                                <option>Jos South</option>
                                                <option>Jos North</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="inputCity">Home Town</label>
                                          <input type="text" name="homeTown" class="form-control" id="inputCity">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-7">
                                            <label for="inputCity">Passport</label>
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
                                <button type="submit" class="btn btn-primary">Save Student</button>
                            </div>
                            </div>
                            </form>
                            <!-- End Register student form -->
                        </div>
                        </div>
                    <!-- End of Add student Modal -->
                    
                     

                     
                        <div class="pt-3"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Registered Students</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            @if (count($students) > 0)
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        
                                            <th>STUDENT NUMBER</th>
                                            <th>NAME</th>
                                            <th>GENDER</th>
                                            <th>DOB</th>
                                            <th>DISABILITY</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>    
                                                                             
                                        <th>STUDENT NUMBER</th>
                                            <th>NAME</th>
                                            <th>GENDER</th>
                                            <th>DOB</th>
                                            <th>DISABILITY</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NUMBER</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{$student->id}}</td>
                                            <td>{{$student->surName}}&nbsp;{{$student->firstName}}&nbsp;{{$student->otherName}}</td>
                                            <td>{{$student->gender}}</td>
                                            <td>{{$student->DOB}}</td>
                                            <td>{{$student->disability}}</td>
                                            <td>{{$student->eMail}}</td>
                                            <td>{{$student->phoneNumber}}</td>
                                            <td></td>
                                            <th>
                                                                                        <!-- Edit Student Modal -->
                                            <!-- Button trigger modal -->
                                            <div class="pt-1">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{$student->id}}">
                                                <i class="fas fa-edit"></i>
                                                </button>
                                            </div>
                                            <div class="pt-1">
                                                <button data-toggle="modal" data-target="#delete{{$student->id}}" class="btn btn-danger ">
                                                <i class="fas fa-eject "></i>
                                                </button>
                                            </div>
                                            
                                        
                                            <!-- Edit Student Modal -->
                                            <div class="modal fade" id="edit{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- Edit Student form -->
                                                    <form method="post" Action="/update-student" enctype="multipart/form-data">
                                                        
                                                        @csrf
                                                        <input type="hidden" name="student_ID" class="form-control" id="inputCity" Value="{{$student->id}}">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">Surname</label>
                                                            <input type="text" name="surName" class="form-control" id="inputCity" Value="{{$student->surName}}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">First Name</label>
                                                            <input type="text" name="firstName" class="form-control" id="inputCity" Value="{{$student->firstName}}">
                                                            </div>                                          
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">Other Name (Optional)</label>
                                                            <input type="text" name="otherName" class="form-control" id="inputCity" Value="{{$student->otherName}}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="inputState">Gender</label>
                                                            <select id="inputState" Value="{{$student->gender}}" name="gender" class="form-control">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                            </div>                                         
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">Date of Birth</label>
                                                            <input type="date" name="DOB" class="form-control" id="dob" Value="{{$student->DOB}}">
                                                            
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">Disability</label>
                                                            <select id="inputState" Value="{{$student->disability}}" name="disability" class="form-control">
                                                                <option Value='None'>None</option>
                                                                <option Value='Blind'>Blind</option>
                                                                <option Value='Physical Handicap'>Physical Handicap</option>

                                                            </select>
                                                            </div>  
                                                            <div class="form-group col-md-6">
                                                            <label for="inputCity">Email</label>
                                                            <input type="email" name="eMail" class="form-control" id="email" Value="{{$student->eMail}}">
                                                            </div> 
                                                            <div class="form-group col-md-6">
                                                            <label for="phoneNumber">Phone Number</label>
                                                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" Value="{{$student->phoneNumber}}">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                                <div class="form-group col-md-4">
                                                                <label for="inputState">State</label>
                                                                <select id="inputState" value="{{$student->state}}"name="state" class="form-control">
                                                                    <option>Plateau</option>
                                                                    <option>Bauchi</option>
                                                                </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                <label for="inputState">LGA</label>
                                                                <select id="inputState" Value="{{$student->lga}}" name="lga" class="form-control">
                                                                    <option>Jos South</option>
                                                                    <option>Jos North</option>
                                                                </select>
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                <label for="homeTown">Home Town</label>
                                                            <input type="text" name="homeTown" class="form-control" id="homeTown" Value="{{$student->homeTown}}">
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-7">
                                                                <label for="inputCity">Passport</label>
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
                                                    <button type="submit" class="btn btn-primary">Update Student</button>
                                                </div>
                                                </div>
                                                </form>
                                                <!-- End Edit student form -->
                                            </div>
                                            </div>
                                        <!-- End of Edit student Modal -->


                                        <!-- Delete student modal-->
                      <div class="modal fade" id="delete{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                      aria-hidden="true">

                      <!-- Change class .modal-sm to change the size of the modal -->
                      <div class="modal-dialog modal-sm" role="document">


                        <div class="modal-content">
                          <div class="modal-body">
                          <!-- Delete student form -->
                              <form action="{{ route('students.destroy',$student->id) }}" method="POST" id="deleteUser">
                                @csrf
                                @method('DELETE')
                              <input name="studentId" id="id" type="hidden" value="{{$student->id}}">
                              <h5>Are you sure you want to delete the student named {{$student->surName}} {{$student->firstName}}?</h5>
                              <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger btn-sm pull-right">Yes</button>
                              </form>
                            <!-- End Delete studen form -->
                          </div> 
                        </div>
                      </div>
                    </div>
                    <!-- End Delete student modal -->

                                        </th>
                                        
                                        </tr>
                                        @endforeach
                                    
                                    </tbody>
                                </table>
                                        @else
                                            <p>No Student Registered yet!</p>
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