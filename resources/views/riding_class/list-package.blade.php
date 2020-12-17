@extends('layout.index')
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
                    <div class="container-fluid package-page stable">
                        <div class="stable-body">
                            <div class="d-flex justify-content-start align-items-center">
                                <h5 class="title-text mb-0">
                                    LIST PACKAGE
                                </h5>
                                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 font-size-lg mb-0">
                                    <li class="breadcrumb-item">
                                        <a href="">HOME</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="">LIST PACKAGE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-3">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <h2 class="title-text">
                                                FILTER
                                            </h2>
                                            <form>
                                                <div class="form-group">
                                                    <input type="number" name="" class="form-control" placeholder="Price">
                                                </div>
                                                <div class="form-group">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Slot</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Session</option>
                                                        <option value="">1</option>
                                                        <option value="">2</option>
                                                        <option value="">4</option>
                                                        <option value="">5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <label class="custom-control-label" for="frequentlyVisited">Frequesntly Visited</label>
                                                        <input type="radio" id="frequentlyVisited" name="customRadio" class="custom-control-input">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                        <label class="custom-control-label" for="nearestLocation">Nearest Location</label>
                                                        <input type="radio" id="nearestLocation" name="customRadio" class="custom-control-input">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control" readonly="readonly" placeholder="Select date">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="la la-calendar-check-o"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-self-end">
                                                    <button class="btn btn-secondary">RESET</button>
                                                    <button class="btn btn-add-new">FILTER</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        @foreach ($data as $row)
                                        <div class="col-lg-4 col-md-6 col-12 my-5">
                                            <div class="competition-card package">
                                                <div class="image">					
                                                    <div class="register">
                                                        <a href="{{route('riding_class.booking_class', ['id' => Crypt::encryptString($row['id'])])}}">
                                                            REGISTER NOW
                                                            <img src="{{url('assets/media/branchsto/double-arrow.svg')}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="live">Priority</div>
                                                    <img src="{{url('assets/media/branchsto/Rectangle 140.png')}}" alt="">
                                                    <div class="overlay"></div>
                                                </div>
                                                <div class="title">
                                                    {{strtoupper($row['name'])}}
                                                </div>
                                                <div class="subtitle">
                                                    
                                                </div>
                                                <table class="table package">
                                                    <tr>
                                                        <td>
                                                            Rp. {{number_format($row['price'],0,'.','.')}}
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="">
                                                                <i class="fas fa-share-alt"></i>
                                                            </a>
                                                            <a href="">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                                                    <path d="M14 10L11 14V28C11 28.5304 11.2107 29.0391 11.5858 29.4142C11.9609 29.7893 12.4696 30 13 30H27C27.5304 30 28.0391 29.7893 28.4142 29.4142C28.7893 29.0391 29 28.5304 29 28V14L26 10H14Z" stroke="#2A4158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M11 14H29" stroke="#2A4158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    <path d="M24 18C24 19.0609 23.5786 20.0783 22.8284 20.8284C22.0783 21.5786 21.0609 22 20 22C18.9391 22 17.9217 21.5786 17.1716 20.8284C16.4214 20.0783 16 19.0609 16 18" stroke="#2A4158" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
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
@endpush