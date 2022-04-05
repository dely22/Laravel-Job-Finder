

   @extends('layouts.master')

    @section('content')

         <!-- Jobs Details -->
    <section class="container mt-5 ">
        <div class="row  d-flex justify-content-center align-content-center">
            <!-- card -->
            <div class="col-lg-10  col-md-11">
                <div class="card p-3 mb-2">
                    <div class="text-center text-danger">Job Details</div>
                    <div class="text-start mt-2 p-3">
                        <img src="../assets/img/logos/ibm.svg" width="100" height="100" class="bg-dark rounded-circle"/>
                        <span class="d-block font-weight-bold ">IBM Company </span>
                        <hr class="text-danger">
                        <span>Locking for a  Programmer with Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odit unde quibusdam atque possimus. Obcaecati, officia! Eveniet sapiente inventore ea, soluta possimus, error doloremque voluptatem, quas molestiae placeat veniam veritatis.</span>
                        <div class="d-flex flex-row align-items-center justify-content-center"> <i class="fa fa-map-marker"></i>
                            <small class="ml-1 text-start">FreeLancer</small>
                        </div>
                        <div class="d-flex flex-column align-content-center mt-2"> <span>$100,000</span>
                            <a class="btn btn-sm btn-outline-danger mt-3">Apply Now</a>
                            <a href="#joobs" class="btn text-primary mt-3">Same Like this More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More -->
      <section class="container" id="joobs">

        <div class="row  d-flex justify-content-center align-content-center">
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

                            <a href="{{ route('details') }}" class="btn btn-sm text-danger btn-outline-dark mt-3">Read More</a>  </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    @stop




