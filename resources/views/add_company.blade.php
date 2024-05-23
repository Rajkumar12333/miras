@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Company Info</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Company Info</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('company_info') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Company info</a>
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
                    <form method="POST" action="">
                        @csrf

                        <div class="form-row">
                            
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Company Name</label>
                                <input type="text" class="form-control" id="Subject" name="Subject"
                                    placeholder="Company Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Company Mail ID</label>
                                <input type="text" class="form-control" id="Company Mail ID" name="Company Mail ID"
                                    placeholder="Company Mail ID">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Username</label>
                                <input type="text" class="form-control" id="Username" name="Username"
                                    placeholder="Username">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Address</label>
                                <textarea class="form-control" id="summernote" name="editordata" col="5" rows="5"
                                    placeholder="Address"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="outStationName">Active</label>
                                <select id="outStationName" class="form-control" name="outstation_name">
                                    <option selected>Yes</option>
                                    <option>No</option>
                                </select>
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

@endsection
