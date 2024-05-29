<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Applicant;
class DateController extends Controller
{
    public function updateDate(Request $request)
    {
        $blog = Applicant::findOrFail($request->id);
        $blog->update([
            'subdate' => $request->startdate,
            'collectdate' => $request->enddate,
           
        ]);
        return response()->json(['message' => 'Dates updated successfully']);
    }
}
