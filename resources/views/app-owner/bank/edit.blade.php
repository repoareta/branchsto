<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-end">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="title-text ">
                    Edit Bank Payment
                </h2>
                <form action="{{ route('owner.bank.update')}}" method="POST" id="formBank" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <input type="hidden" name="id" id="idData">
                    <div class="form-group row">
                        <div class="col-md-6 mb-3">
                            <label>Account Number</label>
                            <input type="number" class="form-control" name="account_number" id="account_number" placeholder="Account Number">
                        </div>												
                        <div class="col-md-6 mb-3">
                            <label>Account Name</label>
                            <input type="text" class="form-control" name="account_name" id="account_name" placeholder="Account Name">
                        </div>												
                        <div class="col-md-6 mb-3">
                            <label>Branch</label>
                            <input type="text" class="form-control" name="branch" id="branch" placeholder="Branch">
                        </div>								
                        <div class="col-md-6 mb-3">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>								
                    </div>
                    <div class="modal-footer">											
                        <button class="btn btn-secondary">RESET</button>
                        <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

