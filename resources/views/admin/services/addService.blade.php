@extends('layouts.masterAdmin')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-2">Add new Service </h4>
        <div class="card mb-4">
            <form class="card-body" action="{{ route('store_service') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label" for="multicol-username">Service </label>
                  <input name="name" type="text" id="multicol-username" class="form-control" placeholder="Service Name" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="multicol-email">Service Icon</label>
                  <div class="input-group input-group-merge">
                    <input name="icon" type="file" class="form-control" aria-describedby="multicol-email2" />
                  </div>
                </div>

                <div class="col-md-6">
                <div class="row">
                    <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">is active</label>
                    <div class="col-sm-9">
                    <select  name="is_active" id="formtabs-country" class="select2 form-select" data-allow-clear="true">

                        <option value="1">On</option>
                        <option value="-1">Off</option>
                    </select>
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
