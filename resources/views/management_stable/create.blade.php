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
                        <label>Province</label>
                        <select name="province_id" id="province" class="form-control">
                            @foreach ($province as $item)                            
                                <option value={{$item->id}}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <select name="city_id" id="city" class="form-control">                                                                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <select name="district_id" id="district" class="form-control">              
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Village</label>
                        <select name="village_id" id="village" class="form-control">    
                        </select>
                    </div>
                    <p>* Please fill from the Province</p>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" id="" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Contact Person</label>
                        <input type="stable" name="contact_person" id="" class="form-control">
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
                            $("#city").append('<option value='+key+'>'+value+'</option>');
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
                            $("#district").append('<option value='+key+'>'+value+'</option>');
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
                            $("#village").append('<option value='+key+'>'+value+'</option>');
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