<div class="page-body">
    <div class="row">
        <div class="col-md-12">
            <!-- Product detail page start -->
            <div class="card product-detail-page">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-5 col-xs-12">
                            <div class="port_details_all_img row">
                                <div class="col-lg-12 m-b-15">
                                    <div id="big_banner">
                                        <div class="port_big_img">
                                            <img class="img img-fluid" src="..\files\assets\images\product-detail\pro-d-l-1.jpg" alt="Big_ Details">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                            <div class="row">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="txt-muted d-inline-block">Code: <a href="#!"> {{$info->code}} </a> </span>
                                        <span class="txt-muted d-inline-block">Référence: <a href="#!"> {{$info->reference}} </a> </span>
                                        <span class="f-right">Etat de paiement : <a href="#!">
                                            @if ($info->payer)
                                                Solder
                                            @else
                                                Non payer
                                            @endif    
                                        </a> </span>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5 class="pro-desc"> Type intervention : {{$info->typeintervention->nom}}</h5>
                                        <h4 class="pro-desc">Pannes: </h4>
                                        <div>
                                            @php
                                                $inter = DB::table('pannes_plannings')
                                                ->join('pannes', 'pannes_plannings.panne_id', '=', 'pannes.id')
                                                ->join('plannings', 'pannes_plannings.planning_id', '=', 'plannings.id')
                                                ->where('plannings.id', '=', $info->planning->id)
                                                ->select('pannes.*')
                                                ->get();
                                            @endphp
                                            <li>
                                                @foreach ($inter as $item)
                                                    <ol>
                                                        {{$item->nom}}
                                                    </ol>
                                                @endforeach
                                            </li>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <span class="txt-muted"> Lieu : {{$info->lieu}} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product detail page end -->
        </div>
    </div>
    <!-- Nav tabs start-->
    <div class="card product-detail-page">
        <ul class="nav nav-tabs md-tabs tab-timeline row" role="tablist">
            <li class="nav-item col-md-6">
                <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Description installation</a>
                <div class="slide col-md-6"></div>
            </li>
            <li class="nav-item ">
                <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#review" role="tab">Solution de la panne</a>
                <div class="slide col-md-6"></div>
            </li>
        </ul>
    </div>
    <!-- Nav tabs start-->

    <!-- Nav tabs card start-->
    <div class="card">
        <div class="card-block">
            <!-- Tab panes -->
            <div class="tab-content bg-white">
                <div class="tab-pane active" id="description" role="tabpanel">
                    <p>{{$info->details}}</p>
                    {{-- <table class="table">
                        <tbody>
                            <tr>
                                <td class="col-lg-2">Fabric</td>
                                <td class="col-lg-10">Midi</td>
                            </tr>
                        </tbody>
                    </table> --}}
                </div>
                <div class="tab-pane" id="review" role="tabpanel">
                    <p>{{$info->solution}}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav tabs card end-->
</div>

<div>
    <!-- Invoice card start -->
    <div class="card">
        <div class="row invoice-contact">
            <div class="col-md-8">
                <div class="invoice-box row">
                    <div class="col-sm-12">
                        <table class="table table-responsive invoice-table table-borderless">
                            <tbody>
                                <tr>
                                    <td><img src="{{asset('files\assets\images\logo_romas2.png')}}" class="m-b-10" alt=""><H2>ROMAS</H2></td>
                                    <td>IYTFGHJ</td>
                                    <td>123 6th St. Melbourne, FL 32904 West Chicago, IL 60185</td>
                                    <td><h2>Fiche d'interention</h2></td>
                                </tr>
                                <tr>
                                    <td>Compney Name</td>
                                </tr>
                                <tr>
                                    <td>123 6th St. Melbourne, FL 32904 West Chicago, IL 60185</td>
                                </tr>
                                <tr>
                                    <td><a href="..\..\..\cdn-cgi\l\email-protection.htm#99fdfcf4f6d9fef4f8f0f5b7faf6f4" target="_top"><span class="__cf_email__" data-cfemail="690d0c0406290e04080005470a0604">[email&#160;protected]</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>+91 919-91-91-919</td>
                                </tr>
                                <!-- <tr>
                <td><a href="#" target="_blank">www.demo.com</a>
                </td>
            </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
        <div class="card-block">
            <div class="row invoive-info">
                <div class="col-md-4 col-xs-12 invoice-client-info">
                    <h6>Client Information :</h6>
                    <h6 class="m-0">Josephin Villa</h6>
                    <p class="m-0 m-t-10">123 6th St. Melbourne, FL 32904 West Chicago, IL 60185</p>
                    <p class="m-0">(1234) - 567891</p>
                    <p><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="eb8f8e8684ab939291c5888486">[email&#160;protected]</a></p>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h6>Order Information :</h6>
                    <table class="table table-responsive invoice-table invoice-order table-borderless">
                        <tbody>
                            <tr>
                                <th>Date :</th>
                                <td>November 14</td>
                            </tr>
                            <tr>
                                <th>Status :</th>
                                <td>
                                    <span class="label label-warning">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Id :</th>
                                <td>
                                    #145698
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h6 class="m-b-20">Invoice Number <span>#12398521473</span></h6>
                    <h6 class="text-uppercase text-primary">Total Due :
                        <span>$900.00</span>
                    </h6>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table  invoice-detail-table">
                            <thead>
                                <tr class="thead-default">
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Amount</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6>Logo Design</h6>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                    </td>
                                    <td>6</td>
                                    <td>$200.00</td>
                                    <td>$1200.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Logo Design</h6>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                    </td>
                                    <td>7</td>
                                    <td>$100.00</td>
                                    <td>$700.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Logo Design</h6>
                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                    </td>
                                    <td>5</td>
                                    <td>$150.00</td>
                                    <td>$750.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-responsive invoice-table invoice-total">
                        <tbody>
                            <tr>
                                <th>Sub Total :</th>
                                <td>$4725.00</td>
                            </tr>
                            <tr>
                                <th>Taxes (10%) :</th>
                                <td>$57.00</td>
                            </tr>
                            <tr>
                                <th>Discount (5%) :</th>
                                <td>$45.00</td>
                            </tr>
                            <tr class="text-info">
                                <td>
                                    <hr>
                                    <h5 class="text-primary">Total :</h5>
                                </td>
                                <td>
                                    <hr>
                                    <h5 class="text-primary">$4827.00</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6>Terms And Condition :</h6>
                    <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice card end -->
    <div class="row text-center">
        <div class="col-sm-12 invoice-btn-group text-center">
            <button type="button" class="btn btn-primary btn-print-invoice m-b-10 btn-sm waves-effect waves-light m-r-20">Print</button>
            <button type="button" class="btn btn-danger waves-effect m-b-10 btn-sm waves-light">Cancel</button>
        </div>
    </div>
</div>