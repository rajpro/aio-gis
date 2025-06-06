<x-app-layout>
    <div class="page-container">

        <div class="row">
            <div class="col-12">
                <div class="card position-relative">
                    <form>
                        <div class="card-body">
                            <!-- Invoice Logo-->
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="overflow-hidden position-relative border rounded d-flex align-items-center justify-content-start px-2" style="height: 60px; width: 260px;">
                                    <label for="imageInput" class="position-absolute top-0 start-0 end-0 bottom-0"></label>
                                    <input class="d-none" type="file" id="imageInput">
                                    <img id="preview" src="{{asset('logo.png')}}" alt="Preview Image" height="28">
                                </div>

                                <div class="text-end">
                                    <div class="row g-1 align-items-center">
                                        <div class="col-auto">
                                            <label for="invoiceNo" class="col-form-label fs-16 fw-bold">#INV</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="number" id="invoiceNo" class="form-control" placeholder="00001234">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-3">
                                    <div class="mb-2">
                                        <label class="form-label">Invoice Date :</label>
                                        <input type="text" data-provider="flatpickr" data-date-format="d M, Y" data-deafult-date="today" class="form-control flatpickr-input" placeholder="Select Date" readonly="readonly">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">Due Date :</label>
                                        <input type="hidden" data-provider="flatpickr" data-altformat="F j, Y" class="form-control flatpickr-input" placeholder="Select Date"><input class="form-control form-control input" placeholder="Select Date" tabindex="0" type="text" readonly="readonly">
                                    </div>

                                    <div class="mb-2">
                                        <label for="InvoicePaymentStatus" class="form-label">Payment
                                            Status</label>
                                        <select class="form-select" id="InvoicePaymentStatus">
                                            <option value="">Select Status</option>
                                            <option value="Choice 1">Paid</option>
                                            <option value="Choice 2">Unpaid</option>
                                            <option value="Choice 3">Cancelled</option>
                                            <option value="Choice 4">Refunded</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="InvoicePaymentMethod" class="form-label">Payment
                                            Method</label>
                                        <select class="form-select" id="InvoicePaymentMethod">
                                            <option value="">Select Method</option>
                                            <option value="Choice 1">Credit / Debit Card</option>
                                            <option value="Choice 2">Bank Transfer</option>
                                            <option value="Choice 3">PayPal</option>
                                            <option value="Choice 4">Payoneer</option>
                                            <option value="Choice 5">Cash On Delivery</option>
                                            <option value="Choice 6">Wallet</option>
                                            <option value="Choice 7">UPI (Gpay)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="mb-4">
                                        <label class="form-label">Billing Address :</label>
                                        <div class="mb-2 pb-1">
                                            <input type="text" id="BName" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <textarea type="text" id="BAddress" rows="3" class="form-control" placeholder="Address"></textarea>
                                        </div>
                                        <div>
                                            <input type="text" id="BNumber" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mt-sm-0 mt-3">
                                    <div class="mb-4">
                                        <label class="form-label">Shipping Address :</label>
                                        <div class="mb-2 pb-1">
                                            <input type="text" id="SName" class="form-control" placeholder="Full Name">
                                        </div>
                                        <div class="mb-2 pb-1">
                                            <textarea type="text" id="SAddress" rows="3" class="form-control" placeholder="Address"></textarea>
                                        </div>
                                        <div>
                                            <input type="text" id="SNumber" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="table text-center table-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="bg-light bg-opacity-50">
                                                <th scope="col" class="border-0" style="width: 70px;">#</th>
                                                <th scope="col" class="border-0 text-start">Product Details</th>
                                                <th scope="col" class="border-0" style="width: 140px">Quantity
                                                </th>
                                                <th scope="col" class="border-0" style="width: 140px;">Unit
                                                    price</th>
                                                <th scope="col" class="border-0" style="width: 240px">Amount
                                                </th>
                                                <th scope="col" class="border-0" style="width: 50px;">•••</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">01</th>
                                                <td class="text-start">
                                                    <input type="text" id="product-detail-one" class="form-control mb-1" placeholder="Product One">
                                                    <input type="text" id="product-desc-one" class="form-control" placeholder="Item description">
                                                </td>
                                                <td>
                                                    <input type="number" id="product-category-one" class="form-control" placeholder="Quantity">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Price">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control  w-auto" placeholder="₹0.00">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn flex-shrink-0 rounded-circle btn-icon btn-ghost-danger"><iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="fs-20"></iconify-icon></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">02</th>
                                                <td class="text-start">
                                                    <input type="text" id="product-detail-two" class="form-control mb-1" placeholder="Product Two">
                                                    <input type="text" id="product-desc-two" class="form-control" placeholder="Item description">
                                                </td>
                                                <td>
                                                    <input type="number" id="product-category-two" class="form-control" placeholder="Quantity">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" placeholder="Price">
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control  w-auto" placeholder="₹0.00">
                                                </td>
                                                <td>
                                                    <button type="button" class="btn flex-shrink-0 rounded-circle btn-icon btn-ghost-danger">
                                                        <iconify-icon icon="solar:trash-bin-trash-bold-duotone" class="fs-20"></iconify-icon>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table><!--end table-->

                                    <div class="p-2">
                                        <button type="button" class="btn btn-primary">
                                            <i class="ri-add-circle-line me-1"></i>
                                            Add Products
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <table class="table table-sm table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:300px">
                                        <tbody>
                                            <tr>
                                                <td class="fw-medium">Subtotal</td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productSubtotal" class="form-control" placeholder="₹0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Shipping</td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productShipping" class="form-control" placeholder="₹0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Discount <small class="text-muted">(10%)</small></td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productDiscount" class="form-control" placeholder="₹0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-medium">Tax <small class="text-muted">(18%)</small></td>
                                                <td class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productTaxes" class="form-control" placeholder="₹0.00">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="fs-15">
                                                <th scope="row" class="fw-bold">Total Amount</th>
                                                <th class="text-end">
                                                    <div class="ms-auto" style="width: 160px;">
                                                        <input type="number" id="productTotalAmount" disabled="" class="form-control" placeholder="₹0.00">
                                                    </div>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!--end table-->
                                </div>
                            </div>

                            <div>
                                <label class="form-label" for="InvoiceNote"> Note : </label>
                                <textarea class="form-control" id="InvoiceNote" placeholder="Thanks for your business " rows="3"></textarea>
                            </div>
                        </div> <!-- end card-body-->
                    </form>
                </div><!-- end card -->
                <div class="mb-5">
                    <div class="d-flex justify-content-center gap-2">
                        <a href="javascript:window.print()" class="btn btn-primary gap-1"><i class="ri-eye-line fs-16"></i> Preview</a>
                        <a href="javascript: void(0);" class="btn btn-success gap-1"><i class="ri-save-line fs-16"></i> Save</a>
                        <a href="javascript: void(0);" class="btn btn-info gap-1"><i class="ri-send-plane-fill fs-16"></i> Send Invoice</a>
                    </div>
                </div>
                <!-- end buttons -->
            </div>
        </div>

    </div>
</x-app-layout>