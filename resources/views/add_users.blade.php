@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Users</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Users</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('company_info') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Users List</a>
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

                            <div class="form-group col-md-6">
                                <label for="internal-remarks">Name</label>
                                <input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="internal-remarks">Mail ID</label>
                                <input type="text" class="form-control" id="Mail ID" name="Mail ID"
                                    placeholder="Mail ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="internal-remarks">User ID</label>
                                <input type="text" class="form-control" id="User ID" name="User ID"
                                    placeholder="User ID">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="internal-remarks">Password</label>
                                <input type="password" class="form-control" id="Password" name="Password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="internal-remarks">Confirm Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="confirm password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="internal-remarks">Branch</label>
                                <select name="branchid" id="sel" class="form-control" onchange="ask(this)">
                                    <option selected="selected"></option>

                                    <option value="1">Bangalore</option>

                                    <option value="2">Chennai</option>

                                    <option value="3">Delhi</option>

                                    <option value="4">Mumbai</option>

                                    <option value="5">Hyderabad</option>
                                </select>
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
    $(document).ready(function () {
        $('#summernote').summernote();
    });

</script>

@endsection
