{{-- Layout --}}
@extends('managerproduksi/layout')

{{-- Judul --}}
@section('title', 'Manager Produksi | Data Produksi | Gudang Tepung Tapioka | Stock')

{{-- CSS Tambahan --}}
@section('extra-css')
<!-- DataTables css -->
<link href="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('/assets/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
{{-- Custom CSS --}}
<link rel="stylesheet" href="{{ asset('/managerproduksi/css/gudangtapioka.css') }}">
@endsection

{{-- Judul Halaman --}}
@section('page-title', 'Stock Tepung Tapioka')

{{-- Breadcrumbbar --}}
@section('breadcrumb')
<li class="breadcrumb-item"><a href="">Data Produksi</a></li>
<li class="breadcrumb-item"><a href="{{ url('/manager-produksi/gudang-tapioka') }}">Gudang Tapioka</a></li>
<li class="breadcrumb-item active" aria-current="page">Stock</li>
@endsection


{{-- Konten Utama --}}
@section('content')
 <!-- Start row -->
 <div class="row">
     <!-- Start col -->
     <div class="col-lg-12">

        {{-- Start Karung 25 Kg --}}
         <div class="card m-b-30">
             <div class="card-header">
                <h5 class="card-title">Karung 25 Kg</h5>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table id="default-datatable" class="display table table-striped table-bordered">
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
                                 <td>05/06/20</td>
                                 <td>Terima dari Supplier</td>
                                 <td>500</td>
                                 <td>-</td>
                                 <td>550</td>
                             </tr>
                             <tr>
                                 <td>05/06/20</td>
                                 <td>Pembagian ke Plastik Masakan</td>
                                 <td>-</td>
                                 <td>100</td>
                                 <td>450</td>
                             </tr>
                             <tr>
                                 <td>07/06/20</td>
                                 <td>Pembagian ke Plastik Masakan</td>
                                 <td>-</td>
                                 <td>100</td>
                                 <td>350</td>
                             </tr>
                             <tr>
                                 <td>09/06/20</td>
                                 <td>Pembagian ke Plastik Masakan</td>
                                 <td>-</td>
                                 <td>150</td>
                                 <td>200</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>

             </div>
         </div>
         {{-- End Karung 25 Kg --}}

         {{-- Start Masakan --}}
         <div class="card m-b-30">
             <div class="card-header">
                <h5 class="card-title">Masakan</h5>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table id="default-datatable-2" class="display table table-striped table-bordered multi-datatable">
                         <thead>
                             <tr>
                                 <th>Tanggal</th>
                                 <th>Masuk (Plastik)</th>
                                 <th>Keluar (Plastik)</th>
                                 <th>Stock (Plastik)</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>08/06/20</td>
                                 <td>-</td>
                                 <td>100</td>
                                 <td>190</td>
                             </tr>
                             <tr>
                                 <td>08/06/20</td>
                                 <td>110</td>
                                 <td>-</td>
                                 <td>300</td>
                             </tr>
                             <tr>
                                 <td>09/06/20</td>
                                 <td>-</td>
                                 <td>100</td>
                                 <td>200</td>
                             </tr>
                         </tbody>
                     </table>
                 </div>

             </div>
         </div>
         {{-- End Stock Gudang --}}

     </div>
     <!-- End col -->
 </div>
 <!-- End row -->

@endsection


{{-- Script Tambahan --}}
@section('extra-script')
<!-- Datatable js -->
<script src="{{ asset('/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables/buttons.colVis.min.js') }}"></script>
{{-- <script src="{{ asset('/assets/plugins/datatables/dataTables.responsive.min.js') }}"></script> --}}
{{-- <script src="{{ asset('/assets/plugins/datatables/responsive.bootstrap4.min.js') }}"></script> --}}
<script src="{{ asset('/assets/js/custom/custom-table-datatable.js') }}"></script>

{{-- Modal Script --}}
<script src="{{ asset('/managerproduksi/js/gudangtapioka.js') }}"></script>
<script src="{{ asset('/managerproduksi/js/multi-datatable.js') }}"></script>
@endsection
