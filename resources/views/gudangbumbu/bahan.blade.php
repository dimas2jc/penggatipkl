@section('title') 
Soyuz - Datatable
@endsection 
@extends('gudangbumbu.layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar"></div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start col -->
        <div class="col-md-12 col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">                        
                    <ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-justified" role="tab" aria-controls="home-justified" aria-selected="true">Gula</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-justified" role="tab" aria-controls="profile-justified" aria-selected="false">Garam 50 kg</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile1-tab-justified" data-toggle="tab" href="#profile1-justified" role="tab" aria-controls="profile1-justified" aria-selected="false">Garam 25 kg</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile2-tab-justified" data-toggle="tab" href="#profile2-justified" role="tab" aria-controls="profile2-justified" aria-selected="false">Bumbu</a>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="defaultTabJustifiedContent">
                        <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title text-left">Stock Gula</h3>
                                </div>
                            </div>
                            
                            <!-- Start row3 -->
                
                <!-- End row3 -->

                            <div class="row">
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Awal</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Akhir</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <button type="button" class="status btn btn-primary" style="width: 30% ; height:50px;margin: 5px 0px"> Terapkan </button>
                                </div>
                                <!-- End col -->
                            </div>
                            <div class="table-responsive">
                        <table id="default-datatable1" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Masuk (Kg)</th>
                                    <th>Keluar (Kg)</th>
                                    <th>Stock (Kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2020/06/07</td>
                                    <td>Sisa dari packing</td>
                                    <td>10</td>
                                    <td>-</td>
                                    <td>60[10]</td>
                                </tr>
                                <tr>
                                    <td>2020/06/08</td>
                                    <td>Proses packing</td>
                                    <td>-</td>
                                    <td>15[10]</td>
                                    <td>45</td>
                                </tr>
                                <tr>
                                    <td>2020/06/09</td>
                                    <td>Proses packing</td>
                                    <td>-</td>
                                    <td>14</td>
                                    <td>31</td>
                                </tr>
                                <tr>
                                    <td>2020/06/09</td>
                                    <td>Prive dari stock</td>
                                    <td>30</td>
                                    <td>-</td>
                                    <td>30[20]</td>
                                </tr>
                                                               
                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title text-left">Stock Garam</h3>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="page-title text-left">Karung 50 Kg</h4>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Awal</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Akhir</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <button type="button" class="status btn btn-primary" style="width: 30% ; height:50px;margin: 5px 0px"> Terapkan </button>
                                </div>
                                <!-- End col -->
                            </div>
                            <div class="table-responsive">
                        <table id="default-datatable1" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Masuk (Kg)</th>
                                    <th>Keluar (Kg)</th>
                                    <th>Stock (Kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Terima dari supplier</td>
                                    <td>500</td>
                                    <td>-</td>
                                    <td>650</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>60</td>
                                    <td>350</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>20</td>
                                    <td>450</td>
                                </tr>                                
                            </tbody>
                        </table>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="profile1-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title text-left">Stock Garam</h3>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="page-title text-left">Karung 25 Kg</h4>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Awal</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Akhir</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <button type="button" class="status btn btn-primary" style="width: 30% ; height:50px;margin: 5px 0px"> Terapkan </button>
                                </div>
                                <!-- End col -->
                            </div>
                            <div class="table-responsive">
                        <table id="default-datatable1" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Masuk (Kg)</th>
                                    <th>Keluar (Kg)</th>
                                    <th>Stock (Kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Terima dari supplier</td>
                                    <td>500</td>
                                    <td>-</td>
                                    <td>650</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>60</td>
                                    <td>350</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>20</td>
                                    <td>450</td>
                                </tr>                                
                            </tbody>
                        </table>
                        </div>
                        </div>
                        </div>
                        <div class="tab-pane fade" id="profile2-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title text-left">Stock Bumbu</h3>
                                </div>
                            </div>
                            <div class="row align-items-center">
                            </div>
                            <div class="row">
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Awal</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <h5>Akhir</h5>
                                            <div class="form-group mb-0">
                                                <input type="date" class="form-control" name="inputDate" id="inputDate">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End col -->
                                <!-- Start col -->
                                <div class="col-md-4">
                                    <button type="button" class="status btn btn-primary" style="width: 30% ; height:50px;margin: 5px 0px"> Terapkan </button>
                                </div>
                                <!-- End col -->
                            </div>
                            <div class="table-responsive">
                        <table id="default-datatable1" class="display table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                    <th>Masuk (Kg)</th>
                                    <th>Keluar (Kg)</th>
                                    <th>Stock (Kg)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Terima dari supplier</td>
                                    <td>500</td>
                                    <td>-</td>
                                    <td>650</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>500</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>100</td>
                                    <td>450</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>60</td>
                                    <td>350</td>
                                </tr>
                                <tr>
                                    <td>2011/04/25</td>
                                    <td>Pembagian ke plastik masakan</td>
                                    <td>-</td>
                                    <td>20</td>
                                    <td>450</td>
                                </tr>                                
                            </tbody>
                        </table>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End col -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script>
    "use strict";
    $(document).ready(function() {
        /* -- Table - Datatable -- */
        $('#default-datatable2').DataTable( {
            "order": [[ 0, "asc" ]],
            responsive: true
        });
    });

    "use strict";
    $(document).ready(function() {
        /* -- Table - Datatable -- */
        $('#default-datatable').DataTable( {
            "order": [[ 0, "asc" ]],
            responsive: true
        });
    });
</script>
@endsection 