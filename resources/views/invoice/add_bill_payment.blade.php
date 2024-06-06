@extends('include.master')
@section('content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Payment Form</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Payment Form</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <!-- <a href="{{ route('tpfiles.view_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Payment Form</a> -->
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
                    <form method="POST" action="{{route('bill_payment.add')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-row">                 

                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Applicant Id</label>
                                <input type="text" class="form-control" id="app_id" name="track_id"
                                    placeholder="Enter Applicant Id">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Passport no</label>
                                <input type="text" class="form-control" id="pass_number" name="passport_no"
                                    placeholder="Passport no">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="internal-remarks">Country</label>
                                <select id="country" class="form-control" name="country">
                                    <option value="" selected>No Country Available</option>   
                                </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="internal-remarks">(If card Payment):</label>
                                     <input class="form-check-input" type="checkbox" onclick="handleCheckboxClick()" name="method" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Card
                                    </label>
                                    <select id="card" class="form-control" disabled name="status">
                                    <option value="" selected>Select Card</option>  
                                    @foreach($cards as $card)
                                    <option value="{{$card->card}}">{{$card->name}}</option>  
                                    @endforeach
                                </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="internal-remarks">Visa Fees</label>
                                        <input type="text" class="form-control" id="" name="visa_fees"
                                            placeholder="Visa Fees">
                                            <input class="form-check-input" type="radio" name="visa_method" value="cash" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            Cash
                                            </label>
                                            <input class="form-check-input" type="radio" name="visa_method" value="dd" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            DD
                                           
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="internal-remarks">VFS/OSC/TT Charges:</label>
                                        <input type="text" class="form-control" id="" name="vfs_charge"
                                            placeholder="VFS/OSC/TT Charges">
                                            <input class="form-check-input" type="radio" name="vfs_method" value="cash" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            Cash
                                            </label>
                                            <input class="form-check-input" type="radio" name="vfs_method" value="dd" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                            DD
                                           
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="internal-remarks">Submission Date</label>
                                        <input type="text" class="form-control" id="" name="date"
                                            placeholder="Submission Date">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="internal-remarks">VFS Receipt No:</label>
                                        <input type="text" class="form-control" id="" name="recepno"
                                            placeholder="VFS Receipt No">
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
function fetchDataForPass(pass) {
    fetch('{{ route('bill_payment.fetch_country') }}?pass=' + pass)
        .then(response => response.text()) // Parse response as text
        .then(html => { 
            var sanitizedHtml = html.replace(/\\/g, '');
            document.getElementById('country').innerHTML = sanitizedHtml;
        })
        .catch(error => console.error('Error:', error));
}
     document.getElementById('app_id').addEventListener('input', function() {
        var id = this.value;

        fetch('{{ route('bill_payment.featch_pass') }}?id=' + id)
            .then(response => response.json())
            .then(data => {
                document.getElementById('pass_number').value = data.passportno; 
                var pass=data.passportno;
                fetchDataForPass(pass) 
            })

            .catch(error => console.error('Error:', error));
            
    });
    function handleCheckboxClick() {
            const checkbox = document.getElementById('card');
            
            // Toggle the disabled state
            checkbox.disabled = !checkbox.disabled;
        }
</script>
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
