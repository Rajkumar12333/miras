@php
    $currentPage = $tp_files->currentPage();
    $perPage = $tp_files->perPage();
    $start = ($currentPage - 1) * $perPage;
@endphp
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css"> -->
<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->

<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Receipt Files List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Receipt files List</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('receipt_files.add_page') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Receipt files</a>
                        </div>                        
                    </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<!-- <div class="contentbar">
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
                        <label for="country">File Type:</label>
                        <select name="country" class="form-control" onchange="c(this)" style="">
                            <option value="">Select your Country</option>

                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="agentName">Agent Name</label>
                        <select name="agtid" class="form-control" onchange="t(this)">
                       
                            <option value="">Select your Agent name</option>
                          
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
<div class="infobar-settings-sidebar-overlay"></div> -->
    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                </div>
                <!-- <div class="card-header">
                   
                   <div class="d-flex">
                   <a href="javascript:void(0)" id="infobar-settings-open" style="display: flex; align-items: center;" >
                   <h5>Filter</h5> <img class="infobar-icon" src="assets/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
               </a>
               </div>
               </div> -->
                <div class="card-body">
                <h5 class="card-title">Receipt Files Table</h5>
                    <div class="table-responsive">
                        <table id="submission_list" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>Track Id</th>
                                    <th>Applicant</th>
                                    <th>Passport </th>
                                    <th>Uploaded by </th>
                                    <th>Date </th>
                                    <th>Action  </th>
                                    
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($tp_files) && count($tp_files)>0)
                                @foreach ($tp_files as $index => $views)
                                <tr>
                                 <td>
                                 @php
                                    $start++;
                                 @endphp
                                 {{$start}}
                                 </td>
                                 <td>{{$views->track_id}}</td>
                                    <td>{{$views->name}} </td>
                                    <td>{{$views->passportno}}</td>
                                    <td>{{$views->agtname}}</td>
                                    <td>{{$views->created_on}}</td>
                                    <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                    <!-- <a href="{{ route('tpfiles.edit_page', $views->id) }}"  class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a> -->
                                                    <form action="{{ route('receipt_files.destroy', $views->id) }}" class="m-0" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $views->id }}">
                                                            <button type="submit" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                    </form>
                                                    <a href="javascript:void(0)" id="show-tpfiles" data-url="{{ route('receipt_files.show', $views->id) }}" class="btn text-white bg-themes">Show</a>
                                                </div>
                                                </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                            {{$tp_files->links('pagination::bootstrap-4')}}
                        @else
                        <div class="alert alert-secondary" role="alert">No Receipt found</div>
                                @endif
                        </table>

 
                    </div>
                   
                </div>

            </div>
        </div>

    </div>
    <div class="modal fade" id="userShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Show Tp Files</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <p><strong>Track Id:</strong> <span id="user-track-id"></span></p>
        <p><strong>Applicant:</strong> <span id="user-applicant"></span></p>
        <p><strong>Passport:</strong> <span id="user-passport"></span></p>
        <p><strong>Uploaded by:</strong> <span id="user-uploaded-by"></span></p>
        <p><strong>Date:</strong> <span id="user-date"></span></p>
        <p><strong>Tp File:</strong> <span >
           <a id="user-file_name" href="" target="_blank"> <img src="/assets/images/tp-file.png"  height="100px" width="100px"alt=""></a>
        </span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
    $(document).ready(function () {
  /* When click show user */
  $('body').on('click', '#show-tpfiles', function () {
    var userURL = $(this).data('url');
    $.get(userURL, function (data) {
      $('#userShowModal').modal('show');

      // Helper function to show/hide element based on content
      function updateField(selector, value) {
        if (value) {
          $(selector).closest('p').show();
          $(selector).text(value);
        } else {
          $(selector).closest('p').hide();
        }
      }
           updateField('#user-track-id', data.track_id);
           updateField('#user-applicant', data.name);
           updateField('#user-passport', data.passportno);
           updateField('#user-uploaded-by', data.agtname);
           updateField('#user-date', data.created_on);
           if (data.file_name && data.file_name.trim() !== '') {
                $('#user-file_name').attr('href', '/androidapp/tp_files/'+data.file_name).show();
            } else {
                $('#user-file_name').hide();
            }
    });
   
 });
});

    
  </script>
