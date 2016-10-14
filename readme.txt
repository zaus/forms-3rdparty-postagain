=== Forms: 3rd-Party Post Again ===
Contributors: zaus
Donate link: http://drzaus.com/donate
Tags: contact form, form, CRM, mapping, 3rd-party service, services, remote request, forms-3rdparty
Requires at least: 3.0
Tested up to: 4.6.1
Stable tag: trunk
License: GPLv2 or later

Make a secondary Forms: 3rdparty submission to another service, or chain services.

== Description ==

Allows you to chain [Forms 3rdparty Integration](http://wordpress.org/plugins/forms-3rdparty-integration/) services, including the "flattened" response from the previous service request as part of the mappable submission.

== Installation ==

1. Unzip, upload plugin folder to your plugins directory (`/wp-content/plugins/`)
2. Make sure [Forms 3rdparty Integration](http://wordpress.org/plugins/forms-3rdparty-integration/) is installed and settings have been saved at least once.
3. Activate plugin
4. In the newly available section "Secondary Post" in the '3rdparty services' admin, choose one or more services to perform afterwards.
5. In that service, include flattened service response values like `Response/Body/SomeKey`.


== Frequently Asked Questions ==

= How does it add the response values? =

Using the provided endpoint examples `test-json-response.php` and `test-xml-response.php`, it will automatically nest XML/JSON and merge it to the original form submission like:

*XML*

	[env:Envelope/env:Body/ns1:Response/ns1:Resultstatus] => foo
	[env:Envelope/env:Body/ns1:Response/ns1:Result] => bar
	[env:Envelope/env:Body/ns1:Response/ns1:Description] => baz

*JSON*

	[Body/Response/ResultStatus] => foo
	[Body/Response/Result] => bar
	[Body/Response/Description] => baz

	
Note that XML responses will include the namespace prefixes.  You may then reference them in the other service using the keys.

= It doesn't work right... =

Drop an issue at https://github.com/zaus/forms-3rdparty-postagain

== Screenshots ==

N/A.

== Changelog ==

= 0.1 =

IT HAS BEGUN

== Upgrade Notice ==

N/A.