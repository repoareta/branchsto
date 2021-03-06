@extends('layout.index')
@push('addon-style')
<link rel="stylesheet" href="{{url('assets/datatables/datatables.min.css')}}" type="text/css">
@endpush
@section('content')
<!--begin::Main-->
@include('partials._header-mobile')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        @include('partials._aside')
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('partials._header')
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container-fluid stable">
                        <div class="stable-body">
                            <a href="{{route('stable.index')}}" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="title-text mb-0">
                                    UPDATE HORSE
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
										<a href="{{route('competitions.index')}}">HOME</a>
									</li>
									<li class="breadcrumb-item">
										<a href="{{route('stable.index')}}">MANAGE STABLE</a>
									</li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">UPDATE HORSE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card mt-10">
                                <div class="card-body">
                                    <form action="{{route('horse.update')}}" method="POST" id="formhorse">
                                        @csrf @method('put')
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Horse Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Horse name" autocomplete='off'>
                                                <input type="hidden" value="{{$data->id}}" class="form-control" name="horse_id">
                                                <input type="hidden" class="form-control" name="stable_id" value="{{$data->stable_id}}">
                                            </div>
                                            <div class="col-4">
                                                <label>Horse Owner</label>
                                                <input type="text" class="form-control" name="owner" value="{{$data->owner}}" placeholder="Horse Owner" autocomplete='off'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Sex</label>
                                                <select class="form-control" name="horse_sex_id">
                                                    @foreach ($horseSex as $item)
                                                        <option value="{{$item->id}}" <?php if($item->id == $data->horse_breed_id) echo 'selected';?>>{{$item->name}}</option>                                                      
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label>Birth Date</label>
                                                <input type="text" class="form-control" name="birth_date" value="{{$data->birth_date}}" id="date" required autocomplete="off" placeholder="Enter Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Passport Number</label>
                                                <input type="number" min="0" class="form-control" name="passport_number" value="{{$data->passport_number}}" placeholder="Passport Number" autocomplete='off'>
                                            </div>
                                            <div class="col-4">
                                                <label>Horse Breed</label>
                                                <select class="form-control" name="horse_breed_id">
                                                    @foreach ($horseBreed as $item)
                                                        <option value="{{$item->id}}"<?php if($item->id == $data->horse_breed_id) echo 'selected';?> >{{$item->name}}</option>                                                      
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-4">
                                                <label>Pedigree Male</label>
                                                <input type="text" class="form-control" name="pedigree_male" value="{{$data->pedigree_male}}" placeholder="Pedigree Male" autocomplete='off'>
                                            </div>
                                            <div class="col-4">
                                                <label>Pedigree Female</label>
                                                <input type="text" class="form-control" name="pedigree_female" value="{{$data->pedigree_female}}" placeholder="Pedigree Female" autocomplete='off'>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-add-new mr-2">SAVE DATA</button>
                                            <a href="{{route('horse.index')}}" class="btn btn-secondary">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            @include('partials._footer')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
<script>
    $('#date').datepicker({
            todayHighlight: true,
            orientation: "bottom left",
            autoclose: true,
            // language : 'id',
            format   : 'yyyy-mm-dd'
        });

    $(document).ready( function () {
        $('#dataTable').DataTable();
        $("#dataTable_filter").append("<button class='btn btn-add-new'>Add New +</button>")
    } );
</script>
@endpush