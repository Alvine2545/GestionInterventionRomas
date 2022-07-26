@extends('layout1')
@section('content')
<div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!--h4>Ajouter une installation</h4>
                        <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span-->
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('admin/dashboard')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

        <!-- Page body start -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                   
                    <!-- Design Wizard card start -->
                    <div class="card">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <div class="d-inline text-center" >
                                    <h4 style="margin-top: 10%"></h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <!--div class="card-header">
                                <h5>Book Now</h5>
                                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                            </div-->
                            <div class="card-block">
                                <div class="j-wrapper j-wrapper-640">

{{-- CONTENU DU CARD --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Design Wizard card end -->
                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>
@endsection