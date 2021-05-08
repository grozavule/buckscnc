@component('mail::message')
<h2>A request for a quote has been submitted from the website.</h2>

<table width="100%" cellpadding="5" cellspacing="0" border="1">
<tr>
<td colspan="2">CONTACT INFORMATION</td>
</tr>
<tr>
<td>First Name</td>
<td>{{ $quote->first_name }}</td>
</tr>
<tr>
<td>Last Name</td>
<td>{{ $quote->last_name }}</td>
</tr>
<tr>
<td>Email Address</td>
<td>{{ $quote->email_address }}</td>
</tr>
<tr>
<td>Phone Number</td>
<td>{{ $quote->phone_number }}</td>
</tr>
<tr>
<td colspan="2">PROJECT INFORMATION</td>
</tr>
<tr>
<td>Quantity</td>
<td>{{ $quote->quantity }}</td>
</tr>
<tr>
<td>Material</td>
<td>{{ $quote->material }}</td>
</tr>
<tr>
<td>Due Date</td>
<td>{{ $quote->due_date }}</td>
</tr>
<tr>
<td>Company Name</td>
<td>{{ $quote->company_name }}</td>
</tr>
</table>

@component('mail::button', ['url' => route('quote.download', ['id' => $quote->id])])
Download Project Files
@endcomponent
