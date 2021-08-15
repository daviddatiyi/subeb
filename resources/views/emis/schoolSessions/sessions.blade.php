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



<!-- Class Streams Modal temp -->
 
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" 
                        data-toggle="modal" data-target="#addSession">
                        Add School Session
                        </button>

                            <!-- Modal -->
                        <div class="modal fade" id="addSession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add School Session</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Add Sessions form -->
                                     <form method="post" Action="/addSchoolSession">
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
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                            </div>
                            </form>
                            <!-- End Add Sessions form -->
                        </div>
                        </div>
                    
<!-- End Student Class temp -->
                     

                     
                        <div class="pt-3"></div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Streams</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            @if (count($session) > 0)
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        
                                            <th>SESSION ID</th>
                                            <th>START YEAR</th>
                                            <th>END YEAR</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    @foreach ($session as $session)
                                        <tr>
                                            
                                            <td>{{$session->id}}</td>
                                            <td>{{$session->startYear}}</td>
                                            <td>{{$session->endYear}}</td>
                                            <th>
                            
                            <!-- Edit Session Modal -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit{{$session->id}}">
                                            Edit
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="edit{{$session->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Session</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Edit streams form -->
                                                        <form method="post" Action="/regstreams">
                                                        @csrf
                                                        <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                <label for="inputCity">Class</label>
                                                                <input type="text" name="class" class="form-control" id="inputCity" placeholder="">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label for="stream">First Name</label>
                                                                <input type="text" name="stream" class="form-control" id="stream" placeholder="">
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
                                            <p>No Session Registered yet!</p>
                                        @endif
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- include Footer -->
            @include('inc.footer')


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