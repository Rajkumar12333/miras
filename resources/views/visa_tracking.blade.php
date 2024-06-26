
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->

<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Visa Tracking</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Visa Tracking</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <!-- <div class="widgetbar">
                <button class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Actions</button>
            </div> -->
            <div class="widgetbar">
                <a href="{{ route('applicant.add_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Add Applicant</a>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
<div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
    <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
        <h4>Filter By</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img
                src="{{asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close"></a>
    </div>
    <div class="infobar-settings-sidebar-body">
        <div class="custom-mode-setting">
            <form method="POST" action="{{route('visa_tracking.filter')}}">
                @csrf

                <div class="form-row p-3">

                    <div class="form-group col-md-12">
                        <label for="agentName">Agent Name</label>
                        <select name="agtid" class="form-control" onchange="t(this)">
                            <!-- <option ></option> -->
                            <option value="">Select your Agent name</option>
                            @foreach($Agent as $agent)
                                    <option value="{{$agent->id}}">{{$agent->agtname}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="country">Country</label>
                        <select name="country" class="form-control" onchange="c(this)" style="">
                            <option value="">Select your Country</option>

                            @foreach($Country as $con)
                                <option value="{{$con->country}}">{{$con->country}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="internal-remarks">Refrence Id</label>
                        <input type="text" class="form-control" id="Refrence" name="id" placeholder="Refrence Id">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="internal-remarks">PassPort No</label>
                        <input type="text" class="form-control" id="PassPort" name="passportno" placeholder="PassPort No">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="internal-remarks">Applicant Name:</label>
                        <input type="text" class="form-control" id="Applicant" name="name"
                            placeholder="Applicant Name">
                    </div>
                    <div class="form-group col-md-12" style="display: flex; align-items: flex-end;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="infobar-settings-sidebar-overlay"></div>
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
               

                <div class="card-header">
                   
                    <div class="d-flex">
                    <a href="javascript:void(0)" id="infobar-settings-open" style="display: flex; align-items: center;" >
                    <h5>Filter</h5> <img class="infobar-icon" src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                </a>
                </div>
                </div>
                <div class="card-body">
                <h5 class="card-title">Applicant Table</h5>
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Tracking Id</th>
                                    <th>Passport No</th>
                                    <th>PAX Name</th>
                                    <th>Company </th>
                                    <th>Country</th>
                                    <th>Agent Name</th>
                                    <th>Received</th>
                                    <th>Submit </th>
                                    <th>Collection</th>
                                    <th>Send On</th>
                                    <th>Total </th>
                                    <th>Status</th>
                                    <th>DD</th>
                                    <th>Actions</th>
                                    <th>Bill</th>
                                    <th>Qr Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($view) && count($view)>0)
                                @foreach ($view as $index => $views)
                                <tr>
                                    <td>
                                        @php
                                        try {
                                        $short_name = \App\Models\Branch::findOrFail($views->branchid);
                                        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                                        $short_name = null;
                                        }
                                        @endphp

                                        {{$short_name->shortname}}-{{$views->id}}</td>
                                    <td>{{$views->passportno}} </td>
                                    <td>{{$views->name}}</td>
                                    <td>{{$views->company}}</td>
                                    <td>{{$views->country}}</td>
                                    <td>
                                        @php
                                        try {
                                        $agent_name = \App\Models\Agent::findOrFail($views->agtid);
                                        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
                                        $agent_name = null;
                                        }
                                        @endphp
                                        @if(!empty($agent_name))
                                        {{$agent_name->agtname}}
                                        @endif
                                    </td>
                                    <td>{{$views->rcddate}}</td>
                                    
                                    <input type="hidden" id="id-{{ $index }}" name="id" value="{{$views->id}}">
                                    <td><input class="txtbox datepicker" type="text" name="startdate" id="datepicker1-{{ $index }}" value="{{ $views->subdate }}"  onchange="change_send(this, {{ $index }})"></td>
            <td><input class="txtbox datepicker" type="text" name="enddate" id="datepicker2-{{ $index }}" value="{{ $views->collectdate }}"  onchange="change_send(this, {{ $index }})"></td>
            <td>{{$views->senton}}</td>
                                    <td>{{$views->doc}}</td>
                                    <td>{{$views->appt_status}} </td>
                                    <td>{{$views->dd}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" style="float: none;">

                                            <a href="{{ route('visa_tracking.edit_page', $views->id) }}"
                                                class="tabledit-edit-button btn btn-sm btn-info"
                                                style="float: none; margin: 5px;"><span class="ti-pencil"></span> </a>
                                            <form action="{{ route('visa_tracking.destroy', $views->id) }}" class="m-0"
                                                method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $views->id }}">
                                                <button type="submit" class="tabledit-delete-button btn btn-sm btn-info"
                                                    style="float: none; margin: 5px;"><span
                                                        class="ti-trash"></span></button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        @if($views->bill==1)
                                        <h4 style=color:#093; font-size:16px font-weight:bold; > BILLED </h4>
                                        @else
                                        <h4 style=color:#F00; font-size:16px font-weight:bold;> NO </h4>
                                        @endif
                                    </td>
                                    <td><img src="{{asset($views->barcode)}}" alt=""></td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                        @else
                                <p class="text-center">No Records Found</p>
                                @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        });

    </script>

    @endif
    @endsection

    <script>
       $(document).ready(function() {
    $(".datepicker").datepicker({
        dateFormat: 'yy/mm/dd',
        onSelect: function(dateText, inst) {
            let index = $(this).attr('id').split('-')[1]; // Get the index from the ID
            console.log("Date selected: " + dateText + " for index: " + index);
            alert("Date selected: " + dateText + " for index: " + index);
            change_send(index);
        }
    });
});

function change_send(element, index) {
    function formatDate(dateString) {
    // Split the date string by "/"
    var parts = dateString.split("/");
    // Rearrange the parts to match the "Y-m-d" format
    return parts[2] + "-" + parts[0] + "-" + parts[1];
}
            alert('Date changed for index: ' + index);

            // Get the current values from the date pickers using the index
            var id = $('#id-' + index).val();
            var startDate = $('#datepicker1-' + index).val();
            var endDate = $('#datepicker2-' + index).val();
            var formattedEndDate = formatDate(endDate);

            // Debugging: Check the values
            console.log("ID:", id);
            console.log("Start Date:", startDate);
            console.log("End Date:", endDate);

            // Make an AJAX request to update the dates
            $.ajax({
                url: '{{ route("updateDate") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    startdate: startDate,
                    enddate: formattedEndDate
                },
                success: function(response) {
                    alert('Dates updated successfully');
                },
                error: function(response) {
                    alert('An error occurred');
                }
            });
        }
    </script>