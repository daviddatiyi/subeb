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


<!-- Student Group Modal temp -->
 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                        data-toggle="modal" data-target="#studentGroup">
                        Student Group
                        </button>

                            <!-- Modal -->
                        <div class="modal fade" id="studentGroup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Student Group</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add group form -->
                                     <form method="post" Action="/studentGroup">
                                     @csrf
                                     <div class="form-row">
                                            <div class="form-group col-md">
                                            <label for="studentGroup">Group</label>
                                            <input type="text" name="studentGroup" class="form-control" id="studentGroup">
                                            </div>
                                                                                   
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                            </form>
                            <!-- End Add group form -->
                        </div>
                        </div>
                    
<!-- End Student group temp -->

                     

                     
                        <div class="pt-3"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Student Group</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            @if (count($student_group) > 0)
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        
                                            <th>Group ID</th>
                                            <th>Group Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @foreach ($student_group as $student_group)
                                        <tr>
                                            
                                            <td>{{$student_group->id}}</td>
                                            <td>{{$student_group->studentGroup}}</td>
                                            <th>
                                            <!-- Edit groups Modal -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit{{$student_group->id}}">
                                            Edit
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="edit{{$student_group->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Group</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Edit streams form -->
                                                        <form method="post" Action="student_groups">
                                                        @csrf
                                                        <input type="hidden" name="student_group_ID" class="form-control" id="inputCity" Value="{{$student_group->id}}">
                                                        <div class="form-row">
                                                                <div class="form-group col-md">
                                                                <label for="studentClass">Student Group</label>
                                                                <input type="text" name="studentGroup" class="form-control" id="studentClass" Value="{{$student_group->studentGroup}}">
                                                                </div>                                         
                                                            </div>
                                                            
                                                           
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Record</button>
                                                </div>
                                                </div>
                                                </form>
                                                <!-- End Edit streams form -->
                                            </div>
                                            </div>
                                        <!-- End of Edit streams Modal -->
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