<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\DocumentRequest;
use App\Models\Applicant;

class DocumentController extends Controller
{
    public function add_page(Request $request){
        return view('add_applicant');
    }
    public function store(Request $request)
    {
        // Validated data will be available in the $validatedData variable
        // $validatedData = $request->validated();
        
        // // Insert data into the database
        //  Applicant::create($validatedData);
dd($request->all());
        $user = new Applicant([
            'total_document' => $request->total_document,
            'applicant_name'  => $request->applicant_name,
            'passport_number'  => $request->passport_number,
            'applicant_email'  => $request->applicant_email,
            'employee_number'  => $request->employee_number,
            'ta_va_number'  => $request->ta_va_number,
            'agent_name'  => $request->agent_name,
            'tp_form_upload'  => $request->tp_form_upload,
            'outstation_name'  => $request->outstation_name,
            'dob'  => $request->dob,
            'location'  => $request->location,
            'company_name'  => $request->company_name,
            'country'  => $request->country,
            'appointment_date'  => $request->appointment_date,
            'category'  => $request->category,
            'rec_date'  => $request->rec_date,
            'sub_date'  => $request->sub_date,
            'coll_date'  => $request->coll_date,
            'sent_date'  => $request->sent_date,
            'referer'  => $request->referer,
            'dd_received1'  => $request->dd_received1,
            'dd_received2'  => $request->dd_received2,
            'mobile_number'  => $request->mobile_number,
            'status'  => $request->status,
            'Outstation'  => $request->Outstation,
            'passportCheck'  => $request->passportCheck,
            'photoCount'  => $request->photoCount,
            'visaFormCheck'  => $request->visaFormCheck,
            'declarationCheck'  => $request->declarationCheck,
            'healthDeclarationCheck'  => $request->healthDeclarationCheck,
            'vfsDeclarationCheck'  => $request->vfsDeclarationCheck,
            'coveringLetterCheck'  => $request->coveringLetterCheck,
            'coveringLetterFromDate'  => $request->coveringLetterFromDate,
            'coveringLetterToDate'  => $request->coveringLetterToDate,
            'invitationLetterCheck'  => $request->invitationLetterCheck,
            'invitationLetterFromDate'  => $request->invitationLetterFromDate,
            'invitationLetterToDate'  => $request->invitationLetterToDate,
            'personalBankStatementCheck'  => $request->personalBankStatementCheck,
            'personalBankStatementDate'  => $request->personalBankStatementDate,
            'personalITReturnsCheck'  => $request->personalITReturnsCheck,
            'personalITReturnsDate'  => $request->personalITReturnsDate,
            'companyBankStatementCheck'  => $request->companyBankStatementCheck,
            'companyBankStatementDate'  => $request->companyBankStatementDate,
            'companyITReturnsCheck'  => $request->companyITReturnsCheck,
            'companyITReturnsDate'  => $request->companyITReturnsDate,
            'payslipCheck'  => $request->payslipCheck,
            'payslipOption'  => $request->payslipOption,
            'ticketReservationCheck'  => $request->ticketReservationCheck,
            'ticketReservationFromDate'  => $request->ticketReservationFromDate,
            'ticketReservationToDate'  => $request->ticketReservationToDate,
            'insuranceForTravelCheck'  => $request->insuranceForTravelCheck,
            'insuranceForTravelFromDate'  => $request->insuranceForTravelFromDate,
            'insuranceForTravelToDate'  => $request->insuranceForTravelToDate,
            'hotelBookingCheck'  => $request->hotelBookingCheck,
            'hotelBookingFromDate'  => $request->hotelBookingFromDate,
            'hotelBookingToDate'  => $request->hotelBookingToDate,
            'yellowFeverCardCheck'  => $request->yellowFeverCardCheck,
            'chamberOfCommerceCheck'  => $request->chamberOfCommerceCheck,
            'forexReceiptCheck'  => $request->forexReceiptCheck,
            'ddCheck'  => $request->ddCheck,
            'ddDate'  => $request->ddDate,
            'ddNumber'  => $request->ddNumber,
            'addressProofCheck'  => $request->addressProofCheck,
            'remarks'  => $request->remarks,
            'internal_remarks'  => $request->internal_remarks,
            'send_sms'  => $request->send_sms,
           



        ]);
        $user->save();
        // Redirect back with success message
        return redirect()->back()->with('success', 'Document created successfully.');
    }
}
