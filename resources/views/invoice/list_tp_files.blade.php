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
            <h4 class="page-title">Tp files List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Tp files List</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('tpfiles.add_page') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Tp files</a>
                        </div>                        
                    </div>
    </div>
</div>
<!-- End Breadcrumbbar -->

    <!-- Start row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                </div>
                <div class="card-body">
                <h5 class="card-title">Tp Files Table</h5>
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
                                                    <form action="{{ route('tpfiles.destroy', $views->id) }}" class="m-0" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $views->id }}">
                                                            <button type="submit" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                    </form>
                                                    <a href="javascript:void(0)" id="show-tpfiles" data-url="{{ route('tpfiles.show', $views->id) }}" class="btn text-white bg-themes">Show</a>
                                                </div>
                                                </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
  
                        </table>
                        {{$tp_files->links('pagination::bootstrap-4')}}
                        @else
                                <p class="text-center">No Applicants found</p>
                                @endif
 
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
            text: '{{ session('
            success ') }}',
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
