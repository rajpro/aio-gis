<x-app-layout>
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom card-tabs d-flex flex-wrap align-items-center gap-2">
                        <div class="flex-grow-1">
                            <h4 class="header-title">Invoices</h4>
                        </div>

                        <div class="d-flex flex-wrap flex-lg-nowrap gap-2">
                            <div class="flex-shrink-0 d-flex align-items-center gap-2">
                                <div class="position-relative">
                                    <input type="text" class="form-control ps-4" placeholder="Search Here...">
                                    <i class="ri-search-line position-absolute top-50 translate-middle-y start-0 ms-2"></i>
                                </div>
                            </div>
                            <a href="#" class="btn btn-primary"><i class="ri-add-line me-1"></i>Add Invoice</a>
                        </div><!-- end d-flex -->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover text-nowrap mb-0">
                            <thead class="bg-light-subtle">
                                <tr>
                                    <th class="ps-3" style="width: 50px;">
                                        <input type="checkbox" class="form-check-input" id="customCheck1">
                                    </th>
                                    <th class="fs-12 text-uppercase text-muted">Invoice ID</th>
                                    <th class="fs-12 text-uppercase text-muted">Category </th>
                                    <th class="fs-12 text-uppercase text-muted">Created On</th>
                                    <th class="fs-12 text-uppercase text-muted">Invoice To</th>
                                    <th class="fs-12 text-uppercase text-muted">Amount</th>
                                    <th class="fs-12 text-uppercase text-muted">Due Date</th>
                                    <th class="fs-12 text-uppercase text-muted">Status</th>
                                    <th class="text-center fs-12 text-uppercase text-muted" style="width: 120px;">Action</th>
                                </tr>
                            </thead>
                            <!-- end table-head -->

                            <tbody>

                            </tbody>
                        </table><!-- end table -->
                    </div>

                    
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>

    </div>
</x-app-layout>