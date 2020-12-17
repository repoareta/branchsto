@extends('layout.index')
@push('add-style')
<link href="{{url('assets/uppy/uppy.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <a href="" class="btn btn-back-page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="34" viewBox="0 0 63 34" fill="none">
                                    <rect opacity="0.25" width="63" height="34" rx="17" fill="#C4C4C4"/>
                                    <path d="M29 17H15" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22 24L15 17L22 10" stroke="#C4C4C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                            </a>
                            <div class="d-flex justify-content-start align-items-center">
                                <h4 class="title-text mb-0">
                                    ADD CLASS OR RIDES
                                </h4>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="">MANAGE STABLE</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="" class="text-muted">ADD CLASS OR RIDES</a>
                                    </li>
                                </ul>
                            </div>
                            <form action="">
                                <div class="card mt-10">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <input type="text" class="form-control" name="" placeholder="Name class or rides">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <input type="email" name="" id="" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <input type="number" class="form-control" name="" placeholder="Phone">
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <input type="text" class="form-control" name="" placeholder="Address">
                                            </div>												
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFileLogo">
                                                    <label class="custom-file-label" for="customFileLogo">Upload Logo</label>
                                                    </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-3">
                                                <div class="custom-file">
                                                    <input type="file" name="files[]" multiple class="custom-file-input form-control" id="customFileBanner">
                                                    <label class="custom-file-label" for="customFileBanner">Upload Banner Cover</label>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-sm-6 col-md-4 mb-3">
                                                <div id="drag-drop-area"></div>
                                            </div>
                                        </div>											
                                        </form>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="title-text">ADD PACKAGE</h5>
                                                    <button data-toggle="modal" data-target="#modalAddPackage" type="button" class="btn btn-add-new">ADD NEW +</button>
                                                </div>
                                                <table class="table table-striped" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Package Name</th>
                                                        <th scope="col">Start Date</th>
                                                        <th scope="col">End Date</th>
                                                        <th scope="col">Package</th>															
                                                        <th scope="col">Capacity</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <th scope="col">1</th>
                                                        <td>Example Package</td>
                                                        <td>23-12-20 13:00</td>
                                                        <td>23-12-20 16:00</td>
                                                        <td>3</td>
                                                        <td>3</td>
                                                        <td>Rp. 300.000</td>
                                                        <td>
                                                            <a href="#" class="mr-2">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="#" class="mr-2">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="#" class="mr-2">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                        </td>
                                                    </tbody>
                                                </table>													
                                            </div>
                                        </div>
                                        <div class="form-group mt-5">
                                            <button type="submit" class="btn btn-add-new mr-2">SAVE DATA</button>
                                            <button class="btn btn-secondary">RESET</button>
                                        </div>											
                                    </div>
                                </div>									
                            </form>
                </div>
                    <!--end::Container-->

                    <!-- Modal -->
                    <div class="modal fade" id="modalAddPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header justify-content-end">
                                    
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h2 class="title-text ">
                                        ADD PACKAGE
                                    </h2>
                                    <form>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label>Package Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Package Name">
                                            </div>
                                            <div class="col-6">
                                                <label>Day</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Day</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label>Coach</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Add Coach</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label>Start Date</label>
                                                <input type="date" class="form-control" name="name">
                                            </div>
                                        </div>											
                                        <div class="form-group row">
                                            <div class="col-6">
                                                <label>End Date</label>
                                                <input type="date" class="form-control" name="name">
                                            </div>												
                                            <div class="col-6">
                                                <label>Price</label>
                                                <input type="number" class="form-control" name="name" placeholder="Price">
                                            </div>																								
                                        </div>
                                        <div class="form-group row">											
                                            <div class="col-6">
                                                <label>Capacity Stable/Slot</label>
                                                <input type="number" class="form-control" name="name" placeholder="Capacitiy Stable/Slot">
                                            </div>																								
                                        </div>
                                    </div>
                                    <div class="modal-footer">											
                                        <button class="btn btn-secondary">RESET</button>
                                        <button type="submit" class="btn btn-add-new font-weight-bold">SAVE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--end::Entry-->
            </div>
        </div>
            <!--end::Content-->
            @include('partials._footer')
        </div>
    </div>

    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
@push('add-script')
<script src="{{url('assets/datatables/datatables.min.js')}}"></script>
<script src="{{url('assets/uppy/uppy.min.js')}}"></script>
<script>
    $(document).ready( function () {
        $('#dataTable').DataTable( {
            "paging":   false,
            "ordering": false,
            "info":     false,
            "searching": false
        } );
    } );

    var uppy = Uppy.Core()
        .use(Uppy.Dashboard, {
        inline: true,
        target: '#drag-drop-area',
        autoProceed: true,
        allowMultipleUploads: true,
        debug: false
        })
        .use(Uppy.Tus, {endpoint: 'https://master.tus.io/files/'})

    uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
    })
    
    
</script>
@endpush