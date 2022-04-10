
   @extends('layouts.master')

    @section('content')
    @include('includes.search')
     <!-- Jobs -->
     <section class="container mb-2">
        <div class="text-center">
            <h2 class="section-heading justify-content-center text-uppercase text-center text-danger">last jobs</h2>
        </div>
        <div class="row">
            <!-- card -->
            <div class="col-lg-4 col-md-10 mb-2">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger"> Hurry Up </div>
                    <div class="text-center mt-2 p-3">
                        <img src="../assets/img/logos/ibm.svg" width="100" />
                        <span class="d-block font-weight-bold ">Programmer</span>
                        <hr class="text-danger">
                        <span>IBM Inc</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-primary">FreeLancer</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>
                                <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
            <div class="col-lg-4 col-md-11">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger"> Hurry Up </div>
                    <div class="text-center mt-2 p-3">
                        <img src="../assets/img/logos/ibm.svg" width="100" />
                        <span class="d-block font-weight-bold ">Programmer</span>
                        <hr class="text-danger">
                        <span>IBM Inc</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-primary">FreeLancer</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>

                                <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
            <div class="col-lg-4 col-md-11">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger"> Hurry Up </div>
                    <div class="text-center mt-2 p-3">
                        <img src="../assets/img/logos/ibm.svg" width="100" />
                        <span class="d-block font-weight-bold ">Programmer</span>
                        <hr class="text-danger">
                        <span>IBM Inc</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-primary">FreeLancer</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>
                             <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- card -->
            <div class="col-lg-4 col-md-10 mb-2">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger"> Hurry Up </div>
                    <div class="text-center mt-2 p-3">
                        <img src="../assets/img/logos/ibm.svg" width="100" />
                        <span class="d-block font-weight-bold ">Programmer</span>
                        <hr class="text-danger">
                        <span>IBM Inc</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-primary">FreeLancer</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>
                                <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
            <div class="col-lg-4 col-md-11">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger"> Hurry Up </div>
                    <div class="text-center mt-2 p-3">
                        <img src="../assets/img/logos/ibm.svg" width="100" />
                        <span class="d-block font-weight-bold ">Programmer</span>
                        <hr class="text-danger">
                        <span>IBM Inc</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-primary">FreeLancer</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>
                                <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card -->
            <div class="col-lg-4 col-md-11">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger"> Hurry Up </div>
                    <div class="text-center mt-2 p-3">
                        <img src="../assets/img/logos/google-2x1-1.svg" width="100" />
                        <span class="d-block font-weight-bold ">Programmer</span>
                        <hr class="text-danger">
                        <span>google</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-primary">Taiz</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>
                                <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @stop










