<!-- Modal-->
<div class="modal fade" id="form-edit-stable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title-text" id="exampleModalLabel">EDIT STABLE</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="kt-form" id="formstable" action="{{route('stable.update')}}" method="POST">
                    @csrf @method('put')
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Stable Name</label>
                            <input type="hidden" name="stable_id" class="form-control" value="{{$data->id}}">
                            <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Stable Name">
                        </div>
                        <div class="col-6">
                            <label>Stable Owner</label>
                            <input type="hidden" name="user_id" class="form-control" value="{{$data->user_id}}">
                            <input type="text" name="owner" class="form-control" value="{{$data->owner}}" placeholder="Stable Owner">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Manager</label>
                            <input type="text" name="manager" class="form-control" value="{{$data->manager}}" placeholder="Manager">
                        </div>
                        <div class="col-6">
                            <label>Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" value="{{$data->contact_person}}" placeholder="Contact Person">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-6">
                            <label>Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" value="{{$data->contact_number}}" placeholder="Contact Number">
                        </div>
                        <div class="col-6">
                            <label>Capacity Of Stable</label>
                            <input type="text" name="capacity_of_stable" class="form-control" value="{{$data->capacity_of_stable}}" placeholder="Capacity Of Stable">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Capacity Of Arena</label>
                            <input type="text" name="capacity_of_arena" class="form-control" value="{{$data->capacity_of_arena}}" placeholder="Capacity Of Arena">
                        </div>
                        <div class="col-6">
                            <label>Number Of Coach</label>
                            <input type="text" name="number_of_coach" class="form-control"  value="{{$data->number_of_coach}}" placeholder="Number Of Coach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label>Address</label>
                            <textarea type="text" name="address" class="form-control" placeholder="Address">{{$data->address}}</textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-dark font-weight-bold" data-dismiss="modal">CENCEL</button>
                        <button type="submit" class="btn btn-dark font-weight-bold">SAVE</button>
                    </div>
                    <div class="form-group row">
                        <div class="col-4">
                            <div class="help">
                                <a href="#">
                                    Needed help?
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal-->