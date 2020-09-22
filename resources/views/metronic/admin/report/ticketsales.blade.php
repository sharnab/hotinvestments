@extends('layouts.admin')
@section('extra_css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Ticket Sales Report</h1>
        </div>
        <!-- END PAGE TITLE -->

    <!-- END PAGE HEAD -->
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{ url('admin/ticket_sales_report') }}">Ticket Sales Report</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">List</a>
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green-haze">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Datatable with TableTools
                    </div>
                    <div class="tools">
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ url('template/metronic') }}/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ url('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<script type="text/javascript">
$(function () {

    $('form').on('submit', function (e) {

        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        jQuery('#assetinfo').DataTable().destroy();

        jQuery('#assetinfo').DataTable({
            ajax: {
                url:"{{route('report_by_id')}}",
                type:'POST',
                dataType: 'json',
                "dataSrc": "",
                "data": function ( d ) {
                    return $.extend( {}, d, {
                        "device_id"     : $('#device_id').val(),
                        "report_type"   : $('#report_type option:selected').val(),
                        "from_date"     : $('#from_date').val(),
                        "to_date"       : $('#to_date').val(),
                    } );
                },
                results: function (data) {
                    return { results: data };
                }
            },
            "columns": [
                { "data": "device_id" },
                { "data": "asset_short_name" },
                { "data": "water_time_interval" },
                { "data": "water_consumption" },
                { "data": "created_at" }
            ]
        });


        console.log($('form').serialize());


    });

});


</script>

@endsection
