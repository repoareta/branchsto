{{-- Registrasi pertama --}}
<div class="modal fade" id="modalStableRegist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-end">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2 class="title-text ">
                    Stable Registration Form
                </h2>
                <form class="kt-form" id="formstable" action="{{route('stable.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Stable Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                      <label></label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" id="" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Contact Person</label>
                        <input type="text" name="contact_person" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="contact_number" id="" class="form-control">
                    </div>
                    <h3>Statement</h3>
                    <p>"We hereby submit an online ticket sales collaboration with the agreed terms and conditions"</p>
                </div>
                <div class="modal-footer">											
                    <button class="btn btn-secondary" data-dismiss="modal">Back</button>
                    <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</div>