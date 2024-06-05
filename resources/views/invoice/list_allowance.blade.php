@php
    $currentPage = $allowance->currentPage();
    $perPage = $allowance->perPage();
    $start = ($currentPage - 1) * $perPage;
@endphp
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->

<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Allowance List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Allowance List</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
                        <div class="widgetbar">
                            <a href="{{ route('allowance.add_page') }}" class="btn btn-primary-rgba"><i class="feather icon-plus mr-2"></i>Add Allowance</a>
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
                <h5 class="card-title">Allowance Table</h5>
                    <div class="table-responsive">
                        <table id="submission_list" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                   
                                    <th>Name</th>
                                    <th>Amount </th>
                                    <th>Reason</th>
                                    <th>Created By </th>
                                    <th>Action  </th>
                                    
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($allowance) && count($allowance)>0)
                                @foreach ($allowance as $index => $views)
                                <tr>
                                 <td>
                                 @php
                                    $start++;
                                 @endphp
                                 {{$start}}
                                 </td>
                               
                                    <td>{{$views->name}} </td>
                                    <td>{{$views->amount}}</td>
                                    <td>{{$views->reason}}</td>
                                    <td>{{$views->created_on}}</td>
                                    <td>
                                                    <div class="btn-group btn-group-sm" style="float: none;">
                                                    <!-- <a href="{{ route('tpfiles.edit_page', $views->id) }}"  class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a> -->
                                                    <!-- <form action="{{ route('tpfiles.destroy', $views->id) }}" class="m-0" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $views->id }}">
                                                            <button type="submit" class="tabledit-delete-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-trash"></span></button>
                                                    </form> -->
                                                    <a href="javascript:void(0)" id="show-tpfiles" data-url="{{ route('allowance.show', $views->id) }}" class="btn text-white bg-themes">Show</a>
                                                </div>
                                                </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
  
                        </table>
                        {{$allowance->links('pagination::bootstrap-4')}}
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
        <h5 class="modal-title" id="exampleModalLabel">Show Allowance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <p><strong>Name:</strong> <span id="user-name"></span></p>
        <p><strong>Amount:</strong> <span id="user-amount"></span></p>
        <p><strong>Reason:</strong> <span id="user-reason"></span></p>
        <!-- <p><strong>Created by:</strong> <span id="user-created-by"></span></p> -->
        
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
           updateField('#user-name', data.name);
           updateField('#user-amount', data.amount);
           updateField('#user-reason', data.reason);
         
           
    });
   
 });
});

    
  </script>
