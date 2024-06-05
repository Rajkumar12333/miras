@extends('include.master')
@section('content')
<style>
    #input-field-container-1,
#input-field-container-2 {
    display: none;
}
</style>
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">Add Payment Form</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Payment Form</a></li>

                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a href="{{ route('credit_payment.list_page') }}" class="btn btn-primary-rgba"><i
                        class="feather icon-plus mr-2"></i>Payment Form List</a>
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
                    <form method="POST" action="{{route('credit_payment.add')}}">
                        @csrf

                        <div class="form-row">

                        <div class="form-group col-md-6">
                        <label for="outStationName">From:</label>
                        <div class="form-check">
                                  <input class="form-check-input" type="radio" name="from" value="Bank" id="Bank">
                                  <label class="form-check-label" for="defaultCheck1">
                                    Bank
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="from" value="Agent" id="Agent">
                                  <label class="form-check-label" for="defaultCheck1">
                                    Agent
                                  </label>
                                </div>
                                
                            </div>
                        <div class="form-group col-md-6" id="input-field-container-1">
                                <label for="outStationName">Bank:</label>
                                <select id="outStationName" class="form-control" name="bank">
                                    <option value="">Select Method</option>
                                    @foreach($cards as $card)
                                    <option value="{{$card->card}}">{{$card->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6" id="input-field-container-2">
                                <label for="outStationName">Agent:</label>
                                <select id="outStationName" class="form-control" name="agent">
                                    <option value="">Select Method</option>
                                    @foreach($Agent as $agent)
                                    <option value="{{$agent->id}}">{{$agent->agtname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="outStationName">Payment As</label>
                                <select id="outStationName" class="form-control" name="payment_method">
                                    <option value="">Select Method</option>
                                    <option value="cash">Cash</option>
                                    <option value="dd">DD</option>
                                </select>
                            </div>
                          

                            <div class="form-group col-md-6">
                                <label for="taVaNumber">Amount:	</label>
                                <input type="text" class="form-control" id="DeskMail" name="amount"
                                    placeholder="Amount">
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
     const inputFieldContainer1 = document.getElementById('input-field-container-1');
      const inputFieldContainer2 = document.getElementById('input-field-container-2');
    document.getElementById('Bank').addEventListener('change', function() {
   
    if (this.checked) {
        inputFieldContainer1.style.display = 'block';
        inputFieldContainer2.style.display = 'none';
    } else {
        inputFieldContainer1.style.display = 'none';
        inputFieldContainer2.style.display = 'block';
    }
});

document.getElementById('Agent').addEventListener('change', function() {
  
    if (this.checked) {
        inputFieldContainer1.style.display = 'none';
        inputFieldContainer2.style.display = 'block';
    } else {
        inputFieldContainer1.style.display = 'block';
        inputFieldContainer2.style.display = 'none';
    }
});

</script>

@endsection
