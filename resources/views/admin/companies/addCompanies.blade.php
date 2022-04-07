@extends('layouts.masterAdmin')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-2">Add new Compenie </h4>
        <div class="card mb-4">
            {{-- <h5 class="card-header">Add new skill</h5> --}}
            <form class="card-body" action="/save_company" method="POST" enctype="multipart/form-data">

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="multicol-username">Name </label>
                  <input name="company_Name" type="text" id="multicol-username" class="form-control" placeholder="Compani Name" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="multicol-email">Companie Logo</label>
                  <div class="input-group input-group-merge">
                    <input name="company_Img" type="file" class="form-control" aria-describedby="multicol-email2" />
                  </div>
                </div>
                 <div class="col-md-6">
                  <label class="form-label" for="multicol-username">Detailes </label>
                  <input name="company_Detailes" type="text" id="multicol-username" class="form-control" placeholder="Compani Detailes" />
                </div>

                <div class="col-md-6">
                  <div class="form-password-toggle">
                    <label class="form-label" for="multicol-confirm-password">Statuse</label>
                    <div class="input-group input-group-merge">
                      <label class="switch">
                        <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
                        <span class="switch-toggle-slider">
                          <span class="switch-on"></span>
                          <span class="switch-off"></span>
                        </span>
                        <span class="switch-label">is active</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>


              <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Add</button>
                <button type="reset" class="btn btn-label-secondary">Cancele</button>
              </div>
            </form>

        </div>
    </div>
@endsection
