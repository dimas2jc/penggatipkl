@section('title') 
Stock
@endsection 
@extends('gudangkacang.layouts.main')
@section('style')
<!-- DataTables css -->
<link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Datepicker css -->
<link href="{{ asset('assets/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

@endsection 
@section('rightbar-content')
<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Gudang Kacang</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Stock</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gudang Kacang</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <?php echo date("d-m-Y"); ?>
            </div>                        
        </div>
    </div>          
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->    
<div class="contentbar">                
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                
                    <ul class="nav nav-pills justify-content-center custom-tab-button header-tab" id="pills-tab-button" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab-button" data-toggle="pill" href="#pills-home-button" role="tab" aria-controls="pills-home-button" aria-selected="true"><span class="tab-btn-icon"><i class="feather icon-tag"></i></span>OB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab-button" data-toggle="pill" href="#pills-profile-button" role="tab" aria-controls="pills-profile-button" aria-selected="false"><span class="tab-btn-icon"><i class="feather icon-tag"></i></span>7ML</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-contact-tab-button" data-toggle="pill" href="#pills-contact-button" role="tab" aria-controls="pills-contact-button" aria-selected="false"><span class="tab-btn-icon"><i class="feather icon-tag"></i></span>8ML</a>
                        </li>
                    </ul>


                    <div class="tab-content" id="pills-tabContent-button">
                        <div class="tab-pane fade show active" id="pills-home-button" role="tabpanel" aria-labelledby="pills-home-tab-button">
                           <div class="card-header">
                                <h5 class="card-title" style=" padding-left: 5px;">Kacang OB</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group col-md-12">
                                    <div class="button-list">
                                        <a href="{{url('/stock_gudang_kacang_penerimaan_ob')}}"><button type="button" class="btn btn-warning btn-lg btn-block">Penerimaan</button></a>
                                    </div>
                                </div>
                                <div class="form-row" style="margin-left: 4.5em;">
                                    <div class="form-group col-md-4">
                                            <label for="date1">Awal</label>
                                            <div class="input-group" style="width: 90%"> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="feather icon-calendar"></i></span>
                                                  </div>                             
                                                <input type="text" id="date1" class="datepicker-here form-control" placeholder="Pilih Tanggal Awal" aria-describedby="basic-addon1"/>   
                                            </div>
                                       
                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="date2">Akhir</label>
                                            <div class="input-group" style="width: 90%"> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                                                  </div>                             
                                                <input type="text" id="date2" class="datepicker-here form-control" placeholder="Pilih Tanggal Akhir" aria-describedby="basic-addon2"/>  
                                            </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                            <label for=""></label>
                                            <div class="input-group mt-2"> 
                                                <button class="btn btn-primary">Terapkan</button>
                                            </div>
                                    </div>
                                </div>

                                <br>

                                <div class="table-responsive">
                                    <table id="datatable1" class="display table table-bordered table-striped table-manpro-hover datatable">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Tanggal Penerimaan Kacang</th>
                                                <th>Keterangan</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>Stock</th>
                                            </tr>
                                      
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>05/06/20</td>
                                                <td>10 Juni 2020</td>
                                                <td>Dari Coolstorage I</td>
                                                <td>50</td>
                                                <td>-</td>
                                                <td>50</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>05/06/20</td>
                                                <td>12 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>20</td>
                                                <td>10</td>
                                            </tr>

                                            <tr>
                                                <td>06/06/20</td>
                                                <td>10 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>20</td>
                                                <td>30</td>
                                            </tr>

                                            <tr>
                                                <td>06/06/20</td>
                                                <td>10 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>10</td>
                                                <td>20</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="pills-profile-button" role="tabpanel" aria-labelledby="pills-profile-tab-button">
                           <div class="card-header">
                                <h5 class="card-title" style=" padding-left: 5px;">Kacang 7ML</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group col-md-12">
                                    <div class="button-list">
                                        <a href="{{url('/stock_gudang_kacang_penerimaan_7ml')}}"><button type="button" class="btn btn-warning btn-lg btn-block">Penerimaan</button></a>
                                    </div>
                                </div>
                                <div class="form-row" style="margin-left: 4.5em;">
                                    <div class="form-group col-md-4">
                                            <label for="date3">Awal</label>
                                            <div class="input-group" style="width: 90%"> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="feather icon-calendar"></i></span>
                                                  </div>                             
                                                <input type="text" id="date3" class="datepicker-here form-control" placeholder="Pilih Tanggal Awal" aria-describedby="basic-addon1"/>   
                                            </div>
                                       
                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="date4">Akhir</label>
                                            <div class="input-group" style="width: 90%"> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                                                  </div>                             
                                                <input type="text" id="date4" class="datepicker-here form-control" placeholder="Pilih Tanggal Akhir" aria-describedby="basic-addon2"/>  
                                            </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                            <label for=""></label>
                                            <div class="input-group mt-2"> 
                                                <button class="btn btn-primary">Terapkan</button>
                                            </div>
                                    </div>
                                </div>

                                <br>
                                <div class="table-responsive">
                                    <table id="datatable2" class="display table table-bordered table-striped table-manpro-hover datatable">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Tanggal Penerimaan Kacang</th>
                                                <th>Keterangan</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>Stock</th>
                                            </tr>
                                      
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>06/06/20</td>
                                                <td>12 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>20</td>
                                                <td>10</td>
                                            </tr>

                                            <tr>
                                                <td>07/06/20</td>
                                                <td>10 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>10</td>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <td>07/06/20</td>
                                                <td>11 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>10</td>
                                                <td>40</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact-button" role="tabpanel" aria-labelledby="pills-contact-tab-button">
                            <div class="card-header">
                                <h5 class="card-title" style="padding-left: 5px;">Kacang 8ML</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group col-md-12">
                                    <div class="button-list">
                                        <a href="{{url('/stock_gudang_kacang_penerimaan_8ml')}}"><button type="button" class="btn btn-warning btn-lg btn-block">Penerimaan</button></a>
                                    </div>
                                </div>
                                <div class="form-row" style="margin-left: 4.5em;">
                                    <div class="form-group col-md-4">
                                            <label for="date5">Awal</label>
                                            <div class="input-group" style="width: 90%"> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon1"><i class="feather icon-calendar"></i></span>
                                                  </div>                             
                                                <input type="text" id="date5" class="datepicker-here form-control" placeholder="Pilih Tanggal Awal" aria-describedby="basic-addon1"/>   
                                            </div>
                                       
                                    </div>

                                    <div class="form-group col-md-4">
                                            <label for="date6">Akhir</label>
                                            <div class="input-group" style="width: 90%"> 
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                                                  </div>                             
                                                <input type="text" id="date6" class="datepicker-here form-control" placeholder="Pilih Tanggal Akhir" aria-describedby="basic-addon2"/>  
                                            </div>
                                    </div>


                                    <div class="form-group col-md-4">
                                            <label for=""></label>
                                            <div class="input-group mt-2"> 
                                                <button class="btn btn-primary">Terapkan</button>
                                            </div>
                                    </div>
                                </div>

                                <br>
                                <div class="table-responsive">
                                    <table id="datatable3" class="display table table-bordered table-striped table-manpro-hover datatable">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Tanggal Penerimaan Kacang</th>
                                                <th>Keterangan</th>
                                                <th>Masuk</th>
                                                <th>Keluar</th>
                                                <th>Stock</th>
                                            </tr>
                                      
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>07/06/20</td>
                                                <td>10 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>20</td>
                                                <td>30</td>
                                            </tr>

                                            <tr>
                                                <td>09/06/20</td>
                                                <td>10 Juni 2020</td>
                                                <td>Proses Sortir</td>
                                                <td>-</td>
                                                <td>10</td>
                                                <td>20</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                
            </div>
        </div>
        <!-- End col -->
        </div>
    <!-- End row -->

</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<!-- Datepicker JS -->
<script src="{{ asset('assets/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datepicker/i18n/datepicker.en.js') }}"></script>


<!-- Datatable js -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#datatable1').DataTable( {
            //"order": [[ 0, "asc" ]],
            "searching" : false,
            responsive: true
        });

        $('#datatable2').DataTable( {
            //"order": [[ 0, "asc" ]],
            "searching" : false,
            responsive: true
        });

         $('#datatable3').DataTable( {
            //"order": [[ 0, "asc" ]],
            "searching" : false,
            responsive: true
        });
    });


    $(document).ready(function(){
        $('#date1').datepicker({
            language: 'en',
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });

        $('#date2').datepicker({
            language: 'en',
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });

        $('#date3').datepicker({
            language: 'en',
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });

        $('#date4').datepicker({
            language: 'en',
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });

        $('#date5').datepicker({
            language: 'en',
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });

        $('#date6').datepicker({
            language: 'en',
            autoClose: true,
            dateFormat: 'dd/mm/yyyy',
        });


    });

  


</script>

@endsection 