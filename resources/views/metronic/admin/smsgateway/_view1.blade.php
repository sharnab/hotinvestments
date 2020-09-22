@extends('layouts.admin')
@section('extra_css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<style>
.line {
  border-bottom: 1px #333 dotted;
  display: inline-block;
  width: 80%;
}
.dotted {
  border-bottom: 1px #333 dotted;
  padding-top: 15px;
  width: 92%;
}
.dottedUnderline {
    text-decoration: underline dotted;
    /*1px #333 ;*/
}
.title-tag{
    padding-right: 10px;
}
.table-data{
    padding: 5px;
}
.font-size{
    font-size: 20px;
}
</style>
@endsection
@section('content')

    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>SMS Gateway <small>List</small></h1>
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
            <a href="{{ url('admin/sms_gateway') }}">SMS Gateway</a>
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
            <div class="portlet box blue-hoki">
                <div class="portlet-title">
                    <div class="caption">
                        View 1
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="">
                        @include('layouts.alert')
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <img src="{{ url('template/metronic/assets/admin/layout4/img/logo-ams.png') }}" class="logo-default" style="margin: 2px 0 0 -5px;width: 50%;margin-top: 4px;" />
                            </div>
                            <div class="col-md-6">
                                <img src="{{ url('template/metronic/assets/admin/layout4/img/govt_seal.png') }}" class="logo-default" style="width:20%; margin: 2px 0 0 40%; margin-top: 4px;" />
                                <div style="text-align: center; margin-top: 4px;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</div>
                                <div style="text-align: center; margin-top: 4px;">Govt. of the People's Republic of Bangladesh</div>
                                <div style="text-align: center; margin-top: 4px;">(বহির্গমন কার্ড/Departure Card)</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                1.
                            </div>
                            <div class="col-md-11">
                                <div style="margin-top: 4px;">নাম </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Name</span>
                                    <span class="dottedUnderline">Test Name</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="padding-top: 4px;">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                2.
                            </div>
                            <div class="col-md-1">
                                <div class="title-tag" style="margin-top: 4px;">সেক্স </div>
                                <div class="title-tag" style="margin-top: 4px;">Sex</div>
                            </div>
                            <div class="col-md-4">
                                <table border=1>
                                    <tr>
                                        <td class="table-data">পুরুষ<br/>Male</td>
                                        <td style="padding:0 10px 0 10px" class="table-data font-size">&#10004;</td>
                                    </tr>
                                    <tr>
                                        <td class="table-data">মহিলা<br/>Female</td>
                                        <td style="padding:0 10px 0 10px" class="table-data">&nbsp;</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                3.
                            </div>
                            <div class="col-md-2">
                                <div class="title-tag" style="margin-top: 4px;">জন্ম তারিখ </div>
                                <div class="title-tag" style="margin-top: 4px;">Date of Birth</div>
                            </div>
                            <div class="col-md-2">
                                <table border=1>
                                    <tr>
                                        <td class="table-data">Day</td>
                                        <td class="table-data">Month</td>
                                        <td class="table-data">Year</td>
                                    </tr>
                                    <tr>
                                        <td class="table-data" style="text-align: center;">27</td>
                                        <td class="table-data" style="text-align: center;">05</td>
                                        <td class="table-data" style="text-align: center;">1999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                4.
                            </div>
                            <div class="col-md-11">
                                <div class="title-tag" style="margin-top: 4px;">জাতীয়তা </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Nationality</span>
                                    <span class="dottedUnderline">Bangladeshi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                5.
                            </div>
                            <div class="col-md-5">
                                <div class="title-tag" style="margin-top: 4px;">পাসপোর্ট নম্বর </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Passport Number</span>
                                    <span class="dottedUnderline">BW0178291782</span>
                                </div>
                            </div>
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                6.
                            </div>
                            <div class="col-md-2">
                                <div class="title-tag" style="margin-top: 4px;">মেয়াদ উত্তীর্ণের তারিখ </div>
                                <div class="title-tag" style="margin-top: 4px;">Date of Expiry</div>
                            </div>
                            <div class="col-md-2" style="padding-bottom: 5px">
                                <table border=1>
                                    <tr>
                                        <td class="table-data">Day</td>
                                        <td class="table-data">Month</td>
                                        <td class="table-data">Year</td>
                                    </tr>
                                    <tr>
                                        <td class="table-data" style="text-align: center;">27</td>
                                        <td class="table-data" style="text-align: center;">05</td>
                                        <td class="table-data" style="text-align: center;">1999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                7.
                            </div>
                            <div class="col-md-5">
                                <div class="title-tag" style="margin-top: 4px;">ফ্লাইট নম্বর </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Flight Number</span>
                                    <span class="dottedUnderline">A173281</span>
                                </div>
                            </div>
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                8.
                            </div>
                            <div class="col-md-2">
                                <div class="title-tag" style="margin-top: 4px;">প্রস্থানের তারিখ </div>
                                <div class="title-tag" style="margin-top: 4px;">Date of Departure</div>
                            </div>
                            <div class="col-md-2">
                                <table border=1>
                                    <tr>
                                        <td class="table-data">Day</td>
                                        <td class="table-data">Month</td>
                                        <td class="table-data">Year</td>
                                    </tr>
                                    <tr>
                                        <td class="table-data" style="text-align: center;">27</td>
                                        <td class="table-data" style="text-align: center;">05</td>
                                        <td class="table-data" style="text-align: center;">1999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                9.
                            </div>
                            <div class="col-md-5">
                                <div style="margin-top: 4px;">বাংলাদেশে অবস্থানকালীন ঠিকানা </div>
                                <div style="margin-top: 4px;">(বিদেশী নাগরিকের জন্য)</div>
                                <div style="margin-top: 4px;">Address in Bangladesh </div>
                                <div style="margin-top: 4px;">(For Foreigner)</div>
                            </div>
                            <div class="col-md-5">
                                <div style="margin-top: 4px;" >&nbsp;</div>
                                <div style="margin-top: 4px;" class="dottedUnderline">
                                        Dami ng gustong kumuha
                                        Dyan na lang sa may bangketa
                                        Para di masyadong kita
                                        Ng mabeta kong paninda ko ohhhh
                                        Ano ba to ohhhh
                                        Binebenta ko ohhhh
                                </div>
                                {{-- <div style="margin-top: 4px;" class="dotted"></div>
                                <div style="margin-top: 4px;" class="dotted"></div> --}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                10.
                            </div>
                            <div class="col-md-5">
                                <div style="margin-top: 4px;">বাংলাদেশী নাগরিকের জন্য </div>
                                <div style="margin-top: 4px;">For Bangladeshi Citizen</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                a.
                            </div>
                            <div class="col-md-5">
                                <div class="title-tag" style="margin-top: 4px;"> ভিসা নম্বর </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Visa Number</span>
                                    <span class="dottedUnderline">878127</span>
                                </div>
                            </div>
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                b.
                            </div>
                            <div class="col-md-2">
                                <div class="title-tag" style="margin-top: 4px;">মেয়াদ উত্তীর্ণের তারিখ </div>
                                <div class="title-tag" style="margin-top: 4px;">Date of Expiry</div>
                            </div>
                            <div class="col-md-2">
                                <table border=1>
                                    <tr>
                                        <td class="table-data">Day</td>
                                        <td class="table-data">Month</td>
                                        <td class="table-data">Year</td>
                                    </tr>
                                    <tr>
                                        <td class="table-data" style="text-align: center;">27</td>
                                        <td class="table-data" style="text-align: center;">05</td>
                                        <td class="table-data" style="text-align: center;">1999</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                c.
                            </div>
                            <div class="col-md-5">
                                <div class="title-tag" style="margin-top: 4px;"> ভিসা ধরণ </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Type of Visa</span>
                                    <span class="dottedUnderline">&nbsp;</span>
                                </div>
                            </div>
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                d.
                            </div>
                            <div class="col-md-5">
                                <div class="title-tag" style="margin-top: 4px;"> ভ্রমণের উদ্দেশ্য </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Purpose of Visit</span>
                                    <span class="dottedUnderline">Tour</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                e.
                            </div>
                            <div class="col-md-5">
                                <div class="title-tag" style="margin-top: 4px;"> &nbsp; </div>
                                <div style="margin-top: 4px;">
                                    <span class="title-tag">Mobile No. in Bangladesh</span>
                                    <span>018728712</span>
                                </div>
                            </div>
                            <div class="col-md-6" style="text-align: center; margin-top: 4px;">
                                &nbsp;
                            </div>
                        </div>

                        <div class="col-md-12" style="padding-top: 8%">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <div style="margin-top: 4px;" class="line">&nbsp;</div>
                                <div style="margin-top: 4px;">
                                    <div style="text-align: center; width:80%">যাত্রীর স্বাক্ষর</div>
                                    <div style="text-align: center; width:80%">Signature of Passenger</div>
                                </div>
                            </div>
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">
                                &nbsp;
                            </div>
                            <div class="col-md-5">
                                <div style="margin-top: 4px;" class="line">&nbsp;</div>
                                <div style="margin-top: 4px;">
                                    <div style="text-align: center; width:80%">সীল</div>
                                    <div style="text-align: center; width:80%">Seal</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12" style="padding-top: 15px;">
                            <div class="col-md-1" style="text-align: center; margin-top: 4px;">&nbsp;</div>
                            <div class="col-md-1">
                                <div class="title-tag" style="margin-top: 4px;">তারিখ </div>
                                <div class="title-tag" style="margin-top: 4px;">Date</div>
                            </div>
                            <div class="col-md-2">
                                <table border=1>
                                    <tr>
                                        <td class="table-data">Day</td>
                                        <td class="table-data">Month</td>
                                        <td class="table-data">Year</td>
                                    </tr>
                                    <tr>
                                        <td class="table-data" style="text-align: center;">27</td>
                                        <td class="table-data" style="text-align: center;">05</td>
                                        <td class="table-data" style="text-align: center;">1999</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-8">&nbsp;</div>
                        </div>
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script type="text/javascript" src="{{ url('template/metronic') }}/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{ url('template/metronic') }}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#sms_gateway').DataTable();
    });
</script>

@endsection
