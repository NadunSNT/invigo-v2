<x-layout>
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Create A New Company</h4>
        </div>
        <div class="card-body">
            <form novalidate class="row g3 needs-validation">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="companyName" class="form-label">Company Name</label>
                            <input type="text" class="form-control" placeholder="Enter company name" id="companyName" name="company_name" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="companyContact" class="form-label">Company Contact</label>
                            <input type="text" class="form-control" placeholder="Enter company contact" id="companyContact" name="company_contact">
                        </div>
                    </div><!--end col-->
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="companyAddress" class="form-label">Company Address</label>
                            <textarea class="form-control" placeholder="Enter company address" id="companyAddress" name="company_address"></textarea>
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="companyEmail" class="form-label">Company Email</label>
                            <input type="email" class="form-control" placeholder="Enter company email" id="companyEmail" name="company_email">
                        </div>
                    </div><!--end col-->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="companyLogo" class="form-label">Company Logo</label>
                            <input type="file" class="form-control" placeholder="Select company logo" id="companyLogo" name="company_logo">
                        </div>
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </form>
        </div>
    </div>
</x-layout>

<script>
    $(document).ready(function(){
        /* const toast = Toastify({
            text: '<p>Contact is required.</p><p>Company is required.</p>',
            duration: -1,
            close: true,
            className: "bg-danger",
            escapeMarkup: true,
            style: {
                fontSize: 'var(--vz-body-font-size)'
            }
        }).showToast(); */

        createToast('<i class="fa-solid fa-arrows-rotate fa-spin"></i> <strong>Waiting for response...</strong>.', {
            title: 'Invigo',
            headerClass: 'bg-primary text-white',
            showCloseButton: false,
            delay: -1,
            imageUrl: '/assets/images/logo-sm.png'
        });

    })

</script>
