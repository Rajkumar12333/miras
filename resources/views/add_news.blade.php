@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Fees Mail</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Fees Mail</a></li>

                </ol>
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
                                <label for="employeeNumber">Date:</label>
                                <input type="date" class="form-control" id="Date" name="Date"
                                    placeholder="Subject">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Title:</label>
                                <input type="text" class="form-control" id="Title" name="Title"
                                    placeholder="Title">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="taVaNumber">Article:</label>
                                <textarea class="form-control" name="message" id="messagen" rows="4"
                                    placeholder="Message"></textarea>
                            </div>
                           
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
