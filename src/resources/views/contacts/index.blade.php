<!DOCTYPE html>
<html>
	<head>
		<title>Contacts</title>
	</head>
	<body>
		<h2>Add Contact</h2>
			@if(session('success'))
			<p>{{ session('success') }}</p>
			@endif

		<form method="POST" action="{{ route('contacts.store') }}">
			@csrf
			<input type="text" name="name" placeholder="Name" required><br>
			<input type="text" name="mobile" placeholder="Mobile" required><br>
			<input type="email" name="email" placeholder="Email" required><br>
			<button type="submit">Save</button>
		</form>

		<h2>All Contacts</h2>
		<table border="1">
			<tr>
				<th>Name</th><th>Mobile</th><th>Email</th>
			</tr>
			@foreach($contacts as $contact)
				<tr>
					<td>{{ $contact->name }}</td>
					<td>{{ $contact->mobile }}</td>
					<td>{{ $contact->email }}</td>
				</tr>
			@endforeach
		</table>
		<h3>Thank you all, this is a test to sync the changes between team </h3>
	</body>
</html>
