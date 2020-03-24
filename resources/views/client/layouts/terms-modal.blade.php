{{-- Terms Modal --}}
<div class="modal fade bd-example-modal-xl" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModal"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalTitle">Terms and Conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    @include('client.layouts.pps-tcs.terms-html')
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal"
                data-toggle="modal" data-target="#loginModal">Login</button>
                <button type="button" class="btn btn-dark rounded-0" data-dismiss="modal"
                data-toggle="modal" data-target="#registerModal">Register</button>
            </div>
        </div>
    </div>
</div>
