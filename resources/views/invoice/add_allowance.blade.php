@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Allowance</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Allowance</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('allowance.list_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Allowance List</a>
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
                    <form method="POST" action="{{route('allowance.add')}}">
                        @csrf

                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label for="applicantEmail"> Name :</label>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" id="AgentName" name="name"
                                    placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="employeeNumber">Amount:	</label>
                                @error('amount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" id="Admin-Mail" name="amount"
                                    placeholder="Amount">
                            </div>

                            <div class="form-group col-md-6">
                                @error('reason')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="taVaNumber">Reason:	</label>
                                <input type="text" class="form-control" id="DeskMail" name="reason"
                                    placeholder="Reason">
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
