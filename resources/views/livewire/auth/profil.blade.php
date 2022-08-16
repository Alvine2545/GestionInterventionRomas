<div class="col-xl-6 col-md-12 align-center">
    <div class="card user-card-full">
        <div class="row m-l-0 m-r-0">
            <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center text-white">
                    <div class="m-b-25">
                        <img src="..\files\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600">{{Auth::user()->name}}</h6>
                    <p>Administrateur</p>
                    <i class="feather icon-edit m-t-10 f-16 edit"></i>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card-block">
                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informations</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="m-b-10 f-w-600">Email</p>
                            <h6 class="text-muted f-w-400"><a href="" class="__cf_email__" data-cfemail="1e747b70675e79737f7772307d7173">{{Auth::user()->email}}</a></h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="m-b-10 f-w-600">Téléphone</p>
                            <h6 class="text-muted f-w-400">{{Auth::user()->tel}}</h6>
                        </div>
                    </div>
                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="m-b-10 f-w-600">Recent</p>
                            <h6 class="text-muted f-w-400">Guruable Admin</h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="m-b-10 f-w-600">Most Viewed</p>
                            <h6 class="text-muted f-w-400">Able Pro Admin</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>