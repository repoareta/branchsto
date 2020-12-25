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
                <form class="kt-form" id="formstable" action="{{route('stable.update')}}" method="POST" enctype="multipart/form-data">
                    @csrf @method('put')
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Stable Name</label>
                            <input type="hidden" name="stable_id" class="form-control" value="{{$data->id}}">
                            <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Stable Name">
                        </div>
                        <div class="col-sm-6">
                            <label>Stable Owner</label>
                            <input type="hidden" name="user_id" class="form-control" value="{{$data->user_id}}">
                            <input type="text" name="owner" class="form-control" value="{{$data->owner}}" placeholder="Stable Owner">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Manager</label>
                            <input type="text" name="manager" class="form-control" value="{{$data->manager}}" placeholder="Manager">
                        </div>
                        <div class="col-sm-6">
                            <label>Contact Person</label>
                            <input type="text" name="contact_person" class="form-control" value="{{$data->contact_person}}" placeholder="Contact Person">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Contact Number</label>
                            <input type="number" name="contact_number" class="form-control" value="{{$data->contact_number}}" placeholder="Contact Number">
                        </div>
                        <div class="col-sm-6">
                            <label>Capacity Of Stable</label>
                            <input type="number" name="capacity_of_stable" class="form-control" value="{{$data->capacity_of_stable}}" placeholder="Capacity Of Stable">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Capacity Of Arena</label>
                            <input type="number" name="capacity_of_arena" class="form-control" value="{{$data->capacity_of_arena}}" placeholder="Capacity Of Arena">
                        </div>
                        <div class="col-sm-6">
                            <label>Number Of Coach</label>
                            <input type="number" name="number_of_coach" class="form-control"  value="{{$data->number_of_coach}}" placeholder="Number Of Coach">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Address</label>
                            <textarea type="text" name="address" class="form-control" placeholder="Address">{{$data->address}}</textarea>
                        </div>                        
                        <div class="col-sm-6">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                        </div>                        
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Province</label>                            
                            <select name="province_id" id="province" class="form-control">
                                @foreach ($province as $item)                                                                       
                                    <option value="{{$item->id}}" {{$data->province_id == $item->id  ? 'selected' : ''}}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>City</label>
                            <select name="city_id" id="city" class="form-control">
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>District</label>
                            <select name="district_id" id="district" class="form-control">              
                                <option value="{{$district->id}}">{{$district->name}}</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Village</label>
                            <select name="village_id" id="village" class="form-control">  
                                <option value="{{$village->id}}">{{$village->name}}</option>  
                            </select>
                        </div>
                    </div>
                    <p>* Please fill from the Province</p>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Bank Account Number</label>
                            <input type="number" name="account_number" class="form-control" value="{{$data->account_number}}" placeholder="Bank Account Number">
                        </div>
                        <div class="col-sm-6">
                            <label>Bank Account Name</label>
                            <input type="text" name="account_name" class="form-control"  value="{{$data->account_name}}" placeholder="Bank Account Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label>Bank Branch</label>
                            <input type="text" name="branch" class="form-control"  value="{{$data->branch}}" placeholder="Bank Branch">
                        </div>
                    </div>                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-dark font-weight-bold" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-dark font-weight-bold">SAVE</button>
                    </div>
                    {{-- <div class="form-group row">
                        <div class="col-4">
                            <div class="help">
                                <a href="#">
                                    Needed help?
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
</div>
<!--Modal-->
@push('add-script')
<script>
        $('#province').change(function(){
            var provinceID = $(this).val();  
            if(provinceID){
                $.ajax({
                type:"GET",
                url:"{{url('profile/city')}}?province_id="+provinceID,
                success:function(res){        
                    if(res){
                        $("#city").empty();
                        $("#city").append('<option>Select</option>');
                        $.each(res,function(key,value){
                            $("#city").append('<option value="'+key+'">'+value+'</option>');
                        });
                    
                        }else{
                            $("#city").empty();
                            }
                        }
                    });
            }else{
                $("#city").empty();
                $("#district").empty();
                $("#village").empty();
            }   
        });
        $('#city').change(function(){
            var cityID = $(this).val();  
            if(cityID){
                $.ajax({
                type:"GET",
                url:"{{url('profile/district')}}?city_id="+cityID,
                success:function(res){        
                    if(res){
                        $("#district").empty();
                        $("#district").append('<option>Select</option>');
                        $.each(res,function(key,value){
                            $("#district").append('<option value="'+key+'">'+value+'</option>');
                        });
                    
                        }else{
                            $("#district").empty();
                            }
                        }
                    });
            }else{
                $("#district").empty();
                $("#village").empty();
            }   
        });
        $('#district').change(function(){
            var districtID = $(this).val();  
            if(districtID){
                $.ajax({
                type:"GET",
                url:"{{url('profile/village')}}?district_id="+districtID,
                success:function(res){        
                    if(res){
                        $("#village").empty();
                        $("#village").append('<option>Select</option>');
                        $.each(res,function(key,value){
                            $("#village").append('<option value="'+key+'">'+value+'</option>');
                        });
                    
                        }else{
                            $("#village").empty();
                            }
                        }
                    });
            }else{
                $("#village").empty();
            }   
        });
</script>
@endpush