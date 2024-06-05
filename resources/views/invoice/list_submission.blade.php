@php
    $currentPage = $results->currentPage();
    $perPage = $results->perPage();
    $start = ($currentPage - 1) * $perPage;
@endphp
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<meta name="csrf-token" content="{{ csrf_token() }}">
@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->

<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Submission List</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Submission List</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
          
            <div class="widgetbar">
              
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
                <h5 class="card-title">Submission Table</h5>
                    <div class="table-responsive">
                        <table id="submission_list" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S. No</th>
                                    <th>Track Id</th>
                                    <th>Applicant</th>
                                    <th>Passport </th>
                                    <!-- <th>Location </th>
                                    <th>Agent</th> -->
                                    <th>Country </th>
                                    <th>Visa Fees </th>
                                    <th>VFS Charges  </th>
                                    <th>Payment method</th>
                                    <!-- <th>Service Charge</th>
                                    <th>GST Tax</th>
                                    <th>Round Off  </th>
                                    <th>Amount</th>
                                    <th>Billing Date </th> -->
                                    <th>Status</th>
                                    <th>Submission Date</th>
                                    <th>Action </th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($results) && count($results)>0)
                                @foreach ($results as $index => $views)
                                <tr>
                                 <td>
                                 @php
                                    $start++;
                                 @endphp
                                 {{$start}}
                                 </td>
                                 <td>{{$views->applicant_refid}}</td>
                                    <td>{{$views->applicant_name}} </td>

                                    <td>{{$views->passport_no}}</td>
                                    <!-- <td>{{$views->location}}</td>
                                    <td>{{$views->agent_name}} </td> -->
                                    <td>
                                      {{$views->country}}
                                    </td>
                                    <td>{{$views->visa_fees}}</td>
                                    <td>{{$views->vfs_charge}}</td>
                                    <td>{{$views->method}}</td>
                                    
                                
                                    <!-- <td>{{$views->service_charge}}</td>
                                    <td>{{$views->gst_tax}} </td>
                                    <td>{{$views->round_off}}</td>
                                    <td>
                                      {{$views->total_cal}}
                                    </td>
                                    <td>
                                       {{$views->billed_date}}
                                    </td> -->
                                    <td>{{$views->status}}</td>
                                    <td>{{$views->date}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                        {{ $results->links() }}
                    </div>
                        @else
                        <div class="alert alert-secondary" role="alert">No Records Found</div>
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
            text: '{{ session("success") }}',
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

<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>