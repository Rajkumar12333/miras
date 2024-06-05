@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Tp Files</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Tp Files</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('tpfiles.view_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Tp Files</a>
            </div>
        </div>
    </div>
</div>

<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <!-- <h5 class="card-title">Form row</h5> -->
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('tpfiles.add')}}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="employeeNumber">Country:</label>
                                <select id="country" class="form-control" name="countryid" class="mail-inp">
                                    <option value=""> Select Country </option>
                                    @foreach($add_country as $con)
                                    <option value="{{$con->id}}">{{$con->country}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Country Info</label>
                                <textarea class="form-control" id="summernote" name="countryinfo" col="5" rows="5"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Embassy Info</label>
                                <textarea class="form-control" id="summernote1" name="embassyinfo" col="5" rows="5"
                                    placeholder="Description"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Understand</label>
                                <textarea class="form-control" id="Understand" name="understanding"  rows="5"
                                    placeholder="Understand"></textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
