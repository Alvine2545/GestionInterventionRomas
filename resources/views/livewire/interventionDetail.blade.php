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
                                <div>
                                    <div class="col-lg-12">
                                        <span class="txt-muted d-inline-block">Code: <a href="#!"> {{$info->code}} </a> </span>
                                        <span class="txt-muted d-inline-block">Code: <a href="#!"> {{$info->reference}} </a> </span>
                                        {{-- <span class="f-right">Etat de paiement : <a href="#!">
                                            @if ($info->payer)
                                                Solder
                                            @else
                                                Non payer
                                            @endif    
                                        </a> </span> --}}
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="pro-desc">Pannes: </h4>
                                        <div>

                                        </div>
                                        <h5 class="pro-desc"> Type intervention : {{$info->typeintervention->nom}}</h5>
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
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="col-lg-2">Fabric</td>
                                <td class="col-lg-10">Midi</td>
                            </tr>
                            <tr>
                                <td class="col-lg-2">Color</td>
                                <td class="col-lg-10">Polyester</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane" id="review" role="tabpanel">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav tabs card end-->
</div>