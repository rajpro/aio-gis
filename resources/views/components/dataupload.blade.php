<x-app-layout>
    <div class="page-container">
        <div class="card">
            <div class="card-header border-bottom border-dashed d-flex align-items-center">
                <h4 class="header-title">Household Data Upload</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post" enctype='multipart/form-data'>
                    @csrf
                    <div class="mb-3">
                        <label for="example-fileinput" class="form-label">Default file input</label>
                        <input type="file" id="example-fileinput" class="form-control" name="file">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
</x-app-layout>