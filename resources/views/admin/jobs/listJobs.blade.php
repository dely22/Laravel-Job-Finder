@extends('layouts.masterAdmin')
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-2"> List Jobs </h4>
        <!-- Show Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row mx-1">
                        <div class="col-sm-12 col-md-9">
                            <div
                                class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center flex-wrap me-1">
                                <div class="me-3">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search<input
                                                type="search" class="form-control" placeholder="Search.."
                                                aria-controls="DataTables_Table_0"></label></div>
                                </div>
                                {{--  --}}
                                <div class="dt-buttons"><a href='{{ route('newJob') }}' class="dt-button add-new btn btn-primary mb-3 mb-md-0"
                                    tabindex="0" aria-controls="DataTables_Table_0" data-bs-target="#addPermissionModal"><span>Add
                                        New Job</span></a> </div>
                            </div>
                        </div>

                    </div>
                    <table class="datatables-permissions table border-top dataTable no-footer dtr-column"
                        id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info"
                        style="width: 1227px;">
                        <thead>
                            <tr role="row">
                                <th class="control sorting_disabled" rowspan="1" colspan="1"
                                    style="width: 68px; display: none;" aria-label=""></th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    Position</th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    Image</th>

                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    is_active</th>

                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    CompanyName</th>

                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    Location</th>

                                 <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 168px;" aria-label="Name: activate to sort column ascending">
                                    Salary</th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 280px;"
                                    aria-label="Detailes ">Detailes</th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 197px;"
                                    aria-label="Actions">Actions</th>
                            </tr>
                        </thead>

                        </tr>
                        </tbody>
                    </table>
                    <div class="row mx-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                Showing 0 to 0 of 0 Entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0"
                                            data-dt-idx="0" tabindex="0" class="page-link"><</a>
                                    </li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                            href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0"
                                            class="page-link">></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Permission Table -->

    </div>
    <!-- / Content -->
    <div class="content-backdrop fade"></div>

@endsection
