@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Edit Country Info</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Country Info</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('country_info.view_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Country info</a>
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
                    <form method="POST" action="{{ route('country_info.update', ['id' => $edit->id]) }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="employeeNumber">Country:</label>
                                <select id="country" class="form-control" name="countryid" class="mail-inp">
                                    <option value=""> Select Country </option>
                                    @foreach($add_country as $con)
                                    <option value="{{$con->id}}"
                                    @if($con->id==$edit->countryid) selected @endif
                                    >{{$con->country}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Country Info</label>
                                <textarea class="form-control" id="summernote" name="countryinfo" col="5" rows="5"
                                    placeholder="Description">{{$edit->countryinfo}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Embassy Info</label>
                                <textarea class="form-control" id="summernote1" name="embassyinfo" col="5" rows="5"
                                    placeholder="Description">{{$edit->embassyinfo}}</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Understand</label>
                                <textarea class="form-control" id="Understand" name="understanding"  rows="5"
                                    placeholder="Understand">{{$edit->understanding}}</textarea>
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


<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<script>
    $(document).ready(function() {
  $('#summernote1').summernote();
});
</script>
@endsection
