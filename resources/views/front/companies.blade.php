   @extends('layouts.master')

    @section('content')

     <!-- companies & Partners -->
     <section class="container d-flex align-items-center justify-content-start py-5 my-5">
            <div class="row">
                <div class="col-lg-4 border-dark"
                    style=" display: flex; justify-content: center; align-items: center;  flex-direction: column; gap: 10px;">
                    <img src="../assets/img/logos/google-2x1-1.svg"
                        alt="Generic placeholder image" width="140" height="140" class="rounded-circle bg-light"/>
                    <span>{{ __('content.Google') }}</span>
                    <p class="text-center" class="text-center">
                        A Greate Company that .. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dolore?
                    </p>
                    </div>

                    <div class="col-lg-4"
                    style=" display: flex; justify-content: center; align-items: center;  flex-direction: column; gap: 10px;">
                    <img src="../assets/img/logos/ibm.svg"
                        alt="Generic placeholder image" width="150" height="150" class="rounded-circle bg-light"  />
                    <span>IBM</span>
                    <p class="text-center" class="text-center">
                        A Greate Company that .. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dolore?
                    </p>
                    </div>

                    <div class="col-lg-4"
                    style=" display: flex; justify-content: center; align-items: center;  flex-direction: column; gap: 10px;">
                    <img src="../assets/img/logos/github-2x1-1.svg"
                        alt="Generic placeholder image" width="140" height="140" class="rounded-circle bg-light"  />
                    <span>GitHub</span>
                    <p class="text-center" class="text-center">
                        A Greate Company that .. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dolore?
                    </p>
                </div>

            </div>
        </section>



    @stop
