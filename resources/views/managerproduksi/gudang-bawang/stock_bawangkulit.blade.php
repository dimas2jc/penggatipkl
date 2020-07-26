@section('title') 
Stock Bawang Kulit
@endsection 
@extends('managerproduksi.layouts.main')
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
            <h4 class="page-title">Data Stock Bawang Kulit</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Data Produksi</a></li>
                    <li class="breadcrumb-item"><a href="#">Gudang Bawang</a></li>
                    <li class="breadcrumb-item"><a href="#">Stock</a></li>
                    <li class="breadcrumb-item"><a href="#">Bawang Kulit</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Stock Bawang Kulit</li>
                </ol>
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
                <div class="card-header">
                    <h5 class="card-title">Stock Bawang Kulit</h5>
                    
                </div>
                <div class="card-body">
                    <div class="form-row" style="margin-left: 4.5em;">
                            <div class="form-group col-md-4">
                                    <label for="date1">Awal</label>
                                    <div class="input-group" style="width: 90%"> 
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1"><i class="feather icon-calendar"></i></span>
                                          </div>                             
                                        <input type="text" id="date1" class="datepicker-here form-control" placeholder="Pilih Tanggal Awal" aria-describedby="basic-addon1" autocomplete="off"/>   
                                    </div>
                               
                            </div>

                            <div class="form-group col-md-4">
                                    <label for="date2">Akhir</label>
                                    <div class="input-group" style="width: 90%"> 
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"><i class="feather icon-calendar"></i></span>
                                          </div>                             
                                        <input type="text" id="date2" class="datepicker-here form-control" placeholder="Pilih Tanggal Akhir" aria-describedby="basic-addon2" autocomplete="off"/>  
                                    </div>
                            </div>


                            <div class="form-group col-md-4">
                                    <label for=""></label>
                                    <div class="input-group mt-2"> 
                                        <button id="terapkan_tgl" class="btn btn-primary">Terapkan</button>
                                    </div>
                            </div>

                           
                    </div>

                    <br>

                    <div class="table-responsive">
                        <table id="datatable1" class="display table table-bordered table-striped table-manpro-hover datatable" width="80%" >
                            <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Merk/Tanggal Terima</th>
                                        <th>Masuk <h5 style="font-size: 11px;">(Kg)</h5></th>
                                        <th>Keluar <h5 style="font-size: 11px;">(Kg)</h5></th>
                                        <th>Stock <h5 style="font-size: 11px;">(Kg)</h5></th>
                                        
                                    </tr>
                          
                            </thead>
                            <tbody>
                               
                               
                                
                            </tbody>
                        </table>
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
        var datatable1 = $('#datatable1').DataTable( {
            //"order": [[ 0, "asc" ]],
            "searching" : false,
            responsive: true
        });


    $(document).on('click', '#terapkan_tgl', function (e) {
    
    var awal = document.getElementById('date1').value;
    var tgl_awal = awal.split("/").reverse().join("-");

    var akhir = document.getElementById('date2').value;
    var tgl_akhir = akhir.split("/").reverse().join("-");


      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $.ajax({
            type:"POST",
            url:"/manpro-bawang/stock/bawangkulit/get_stock",
            data:{
              "tgl_awal":tgl_awal,
              "tgl_akhir":tgl_akhir,

              "_token": "{{ csrf_token() }}",//harus ada ini jika menggunakan metode POST
            },
            success : function(results) {
            // console.log(JSON.stringify(results)); //print_r
                 
              
              for(var i=0; i<results.stock_bawangkulit.length; i++){
                    
                    datatable1.row.add([

                    results.stock_bawangkulit[i].tanggal,
                    results.stock_bawangkulit[i].keterangan+" / "+results.stock_bawangkulit[i].tgl_terima,
                    results.stock_bawangkulit[i].masuk,
                    results.stock_bawangkulit[i].keluar,
                    results.stock_bawangkulit[i].stock
                       
                    ]).draw();
                 
                }
                 
  
    
             
            },
            error: function(data) {
                console.log(data);
            }
      });

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


    });

</script>

@endsection 