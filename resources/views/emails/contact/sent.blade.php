<h3>The following message was sent via the contact form:</h3>

<p>First Name: {{ $contact->getFirstName() }}
<p>Last Name: {{ $contact->getLastName() }}
<p>Email Address: <a href="mailto:{{ $contact->getEmailAddress() }}" target="_blank">{{ $contact->getEmailAddress() }}</a>
<p>Message:</p>
{{ nl2br($contact->getMessage()) }}
