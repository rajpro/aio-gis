<x-app-layout>
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                            <h4 class="header-title">Manage Tickets</h4>
                        </div>
                        <div class="d-flex flex-wrap gap-1">
                            <button type="button" class="btn btn-light btn-sm">
                                All
                            </button>
                            <button type="button" class="btn btn-light active btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                1Y
                            </button>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div>
                            <div class="row">
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card text-bg-secondary">
                                        <div class="card-body d-flex align-items-center gap-2">
                                            <iconify-icon icon="solar:ticket-sale-bold-duotone" class="display-5"></iconify-icon>
                                            <div>
                                                <h3 class="text-white fw-bold">1</h3>
                                                <p class="text-uppercase fs-13 fw-semibold mb-0">Total tickets
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card text-bg-success">
                                        <div class="card-body d-flex align-items-center gap-2">
                                            <iconify-icon icon="solar:ticket-sale-bold-duotone" class="display-5"></iconify-icon>
                                            <div>
                                                <h3 class="text-white fw-bold">1</h3>
                                                <p class="text-uppercase fs-13 fw-semibold mb-0">Pending tickets
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card text-bg-primary">
                                        <div class="card-body d-flex align-items-center gap-2">
                                            <iconify-icon icon="solar:ticket-sale-bold-duotone" class="display-5"></iconify-icon>
                                            <div>
                                                <h3 class="text-white fw-bold">0</h3>
                                                <p class="text-uppercase fs-13 fw-semibold mb-0">Closed tickets
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="card text-bg-danger">
                                        <div class="card-body d-flex align-items-center gap-2">
                                            <iconify-icon icon="solar:ticket-sale-bold-duotone" class="display-5"></iconify-icon>
                                            <div>
                                                <h3 class="text-white fw-bold">0</h3>
                                                <p class="text-uppercase fs-13 fw-semibold mb-0">Deleted tickets
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>


                        <div id="tickets-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="tickets-table_length"><label>Show <select name="tickets-table_length" aria-controls="tickets-table" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="tickets-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="tickets-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" id="tickets-table" aria-describedby="tickets-table_info" style="width: 1572px;">
                            <thead class="bg-light bg-opacity-25">
                                <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 54.4px;" aria-sort="ascending" aria-label="
                                        ID
                                    : activate to sort column descending">
                                        ID
                                    </th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 193.4px;" aria-label="Requested By: activate to sort column ascending">Requested By</th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 253.4px;" aria-label="Subject: activate to sort column ascending">Subject</th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 218.4px;" aria-label="Assignee: activate to sort column ascending">Assignee</th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 92.4px;" aria-label="Priority: activate to sort column ascending">Priority</th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 90.4px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 151.4px;" aria-label="Created Date: activate to sort column ascending">Created Date</th><th class="sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 120.4px;" aria-label="Due Date: activate to sort column ascending">Due Date</th><th class="hidden-sm sorting" tabindex="0" aria-controls="tickets-table" rowspan="1" colspan="1" style="width: 41.4px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                            </thead>

                            <tbody>
                            <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0"><b>#1256</b></td>
                                    <td>
                                        <a href="javascript: void(0);" class="text-reset">
                                            <span class="ms-1">George Llanes</span>
                                        </a>
                                    </td>

                                    <td> Support for theme </td>

                                    <td>
                                        <a href="javascript: void(0);" class="text-reset">
                                            <span class="ms-1">Lauren Deo</span>
                                        </a>
                                    </td>

                                    <td> <span class="badge bg-secondary-subtle text-secondary">Low</span> </td>

                                    <td> <span class="badge bg-success">Open</span> </td>

                                    <td> 23 Dec, 2024 </td>

                                    <td> 25 Dec, 2024 </td>

                                    <td style="width: 30px;">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle text-muted drop-arrow-none card-drop p-0" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" style="">
                                                <a href="javascript:void(0);" class="dropdown-item">Edit
                                                    Ticket</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Close</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Remove</a>
                                                <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                    Unread</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->

    </div>
</x-app-layout>