Your applicant {{$details['name']}}'s visa status has been updated. Please find the details below:"."<br><br>";	
 <table width='100%' border='1' cellpadding='0' cellspacing='0' style='margin-top:0'>
		<tr style='font:15px arial; padding:10px 10px 10px 0px;align:left;'>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >&nbsp;&nbsp;S.no.</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'>{{$details['branch_code']}}-{{$details['id']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Applicant name</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['name']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Passport No / Old Passport No</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['passportno']}} </td>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Date Of Birth</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'>{{$details['dob']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Country</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['country']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Corporate</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['company']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Visa Reference No.</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['visaref']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Category</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['category']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' > Receive Date</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['rcddate']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Submission Date</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['subdate']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Collection Check On Date</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['collectdate']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Total Docs</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['doc']}} </td></tr>
		<tr><td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;' >Status</td>
		<td width='6%' align='left' valign='middle' style='font:15px arial; padding-left:10px;'> {{$details['appt_status']}} </td></tr>
		</tr></table>
        <br>Please do not respond to this message. It is automatically generated and is for information purposes only. <br><br> 		
		Sincerely,<br>	
		Admin Team<br>	
		Mirasvisa Pvt.Ltd.