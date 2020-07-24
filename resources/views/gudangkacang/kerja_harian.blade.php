@section('title') 
Kerja Harian
@endsection 
@extends('gudangkacang.layouts.main')
@section('style')
<!-- Apex css -->
<link href="{{ asset('assets/plugins/apexcharts/apexcharts.css') }}" rel="stylesheet" type="text/css" />
<!-- jvectormap css -->
<link href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css" />
<!-- Slick css -->
<link href="{{ asset('assets/plugins/slick/slick.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />
@endsection 
@section('rightbar-content')

<!-- Start Breadcrumbbar -->                    
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Kerja Hari Ini</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Kerja Harian</a></li>
                    <li class="breadcrumb-item"><a href="{{url('/hari_ini')}}">Hari Ini</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kerja Hari Ini</li>
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
        <div class="col-lg-12 col-xl-12">
            <!-- Start row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card m-b-30">
                        <div class="card-body" style="padding-top: 0px;">
                            <ul class="nav nav-tabs nav-justified mb-3" id="defaultTabJustified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-justified" role="tab" aria-controls="home" aria-selected="true" style="font-size: 14px">Proses Sortir</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-justified" role="tab" aria-controls="profile" aria-selected="false" style="font-size: 14px">Pengambilan Inter</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="defaultTabJustifiedContent">
                                <div class="tab-pane fade show active text-center" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                                    <button type="button" class="btn btn-primary" style="margin-right: 10px;" onclick="show()">Tambah Grup</button>
                                    <a href="{{url('/tutup')}}"><button type="button" class="btn btn-warning" style="margin-left: 10px;">Tutup Hari</button></a>
                                    <div class="row" style="margin-top: 20px;">
                                    <div class="col-sm-12">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 100px; text-align: center" aria-sort="ascending" aria-label="Hasil: activate to sort column descending">Hasil</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px; text-align: center" aria-label="GS: activate to sort column ascending">GS</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px; text-align: center" aria-label="SP: activate to sort column ascending">SP</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px; text-align: center" aria-label="HC: activate to sort column ascending">HC</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 50px; text-align: center" aria-label="Telor: activate to sort column ascending">Telor</th>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>Karung Full</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr role="row">
                                                    <td>Tidak Full (Kg)</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr role="row">
                                                    <td>Total (Kg)</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr role="row">
                                                    <td>BS (Kg)</td>
                                                    <td colspan="4"><input type="number" class="form-control" id="inputmask-card-number" name="BS" min="0"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <div class="row" id="addgrup" style="visibility: hidden; display: none;">
                                        <div class="col-sm-12">
                                            <table class="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th>Grup I<br>Penerimaan</th>
                                                        <th>Berisi <input type="number" id="inputmask-card-number" name="org_dlm_grup" style="width: 25%"> Orang</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Tambah Penerimaan</button></td>
                                                        <td>
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead class="thead-light">
                                                                    <tr>
                                                                        <th>Jenis Kacang</th>
                                                                        <th>Jumlah Karung</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>          
                                                        </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="table-responsive m-b-30">
                                                <table class="table table-borderless">
                                                    <!-- <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                        </tr>
                                                    </thead> -->
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row"><button type="button" class="btn btn-info">+</button><br>
                                                            <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                            </th>
                                                            <td><input type="text" class="form-control" id="inputmask-card-number" style="height: 64px"></td>
                                                            <td>Jumlah (Kg)<br><input type="number" class="form-control" id="inputmask-card-number" name="GS"></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><button type="button" class="btn btn-info">+</button><br>
                                                            <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                            </th>
                                                            <td><input type="text" class="form-control" id="inputmask-card-number" style="height: 64px"></td>
                                                            <td>Jumlah (Kg)<br><input type="number" class="form-control" id="inputmask-card-number" name="SP"></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><button type="button" class="btn btn-info">+</button><br>
                                                            <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                            </th>
                                                            <td><input type="text" class="form-control" id="inputmask-card-number" style="height: 64px"></td>
                                                            <td>Jumlah (Kg)<br><input type="number" class="form-control" id="inputmask-card-number" name="HC"></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row"><button type="button" class="btn btn-info">+</button><br>
                                                            <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                            </th>
                                                            <td><input type="text" class="form-control" id="inputmask-card-number" style="height: 64px"></td>
                                                            <td>Jumlah (Kg)<br><input type="number" class="form-control" id="inputmask-card-number" name="Telor"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <h5>Tambah Penerimaan</h5>
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Jenis Kacang<br>
                                                                            <select name="jenis_kc">
                                                                                <option>OB</option>
                                                                                <option>HC</option>
                                                                                <option>8ML</option>
                                                                            </select>
                                                                        </th>
                                                                        <th scope="col">Jumlah Karung<br><input type="number" class="form-control" id="jml_karung" name="jml_karung"></th>
                                                                    </tr>
                                                                </thead>
                                                            </table>  
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade item-center" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                                    <div class="col-lg-12">
                                        <div class="card m-b-30">
                                            <div class="card-header">
                                                <h5 class="card-title">Pengeluaran Gudang Kacang Sortir</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive m-b-30">
                                                    <table class="table table-borderless">
                                                        <!-- <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">First</th>
                                                            </tr>
                                                        </thead> -->
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">GS<br><button type="button" class="btn btn-info">+</button><br>
                                                                <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                                </th>
                                                                <td>Jumlah Karung<br><input type="number" class="form-control" id="inputmask-card-number" name="GS"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">SP<br><button type="button" class="btn btn-info">+</button><br>
                                                                <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                                </th>
                                                                <td>Jumlah Karung<br><input type="number" class="form-control" id="inputmask-card-number" name="SP"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">HC<br><button type="button" class="btn btn-info">+</button><br>
                                                                <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                                </th>
                                                                <td>Jumlah Karung<br><input type="number" class="form-control" id="inputmask-card-number" name="HC"></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Telor<br><button type="button" class="btn btn-info">+</button><br>
                                                                <button type="button" class="btn btn-danger" style="margin-top: 5px; height: 19px; padding-top: 0px; padding-bottom: 0px; width: 46px; margin-bottom: 0px;">-</button>
                                                                </th>
                                                                <td>Jumlah Karung<br><input type="number" class="form-control" id="inputmask-card-number" name="Telor"></td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection 
@section('script')
<script>
    function show() {
        var table = document.getElementById("addgrup");
        table.setAttribute("style", "display: table; visibility: visible")
    }
</script>
<!-- Apex js -->
<script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/plugins/apexcharts/irregular-data-series.js') }}"></script>
<!-- jVector Maps js -->
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Slick js -->
<script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
<!-- Custom Dashboard js -->  
<script src="{{ asset('assets/js/custom/custom-dashboard.js') }}"></script>
@endsection 