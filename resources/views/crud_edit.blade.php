@extends('include.master')
@section('content')

    <!-- Start Breadcrumbbar -->                    
    <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-8 col-lg-8">
                        <h4 class="page-title">Validations</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Validations</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <!-- <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>List</button> -->
                            <a href="{{ route('crud.view_page') }}" class="btn btn-primary-rgba"> <i class="feather icon-plus mr-2"></i>List</a>
                        </div>                        
                    </div>
                </div>          
            </div>
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            <div class="contentbar">
                <!-- Start row -->
                <div class="row">
                   
                </div>   
                <!-- End row -->
                <!-- Start row -->
                <div class="row justify-content-center">
                    <!-- Start col -->
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Form Validation</h5>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle">Basic form validation.</h6>
                                <form class="form-validate" action="#" method="post">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-username">User ID <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-username" value="{{$crud_edit->title}}" ame="val-username" placeholder="Enter User ID">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label" for="val-suggestions">Description <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions"  name="val-suggestions" rows="5" placeholder="Enter Your Details.">{{$crud_edit->content}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label"></label>
                                        <div class="col-lg-8">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>                                  
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
@endsection