find
====

A website for help finding missing people

AIM:

To build a web application to help finding the missing people,alert the people about the possible emergency and to notify about the wanted criminals by using location specific data.

Deliverables:
		The application under consideration aims to provide all the basic functionalities needed.
	-> Authentication: 
The application implements different levels of authentication for different classes of users
	->login and registration:
		The users have to register with their email id,and the same will be used for login and related tasks.
	->Log complain:
		To add the info about the missing person.The details include the photo of the missing person,appearance,last found location,the possible locations the person be found.
	->Search :
		Try to find the details of the person based on customised search options
	->Most wanted:
		The most wanted criminals’ details are posted here.Since the data is sensitive,only authorized personnel can upload these information.
->Alerts:
The users of the Application gets alerts if the “possibly found at” locations of a missing person happens to be the users locality.

Work Description:
		This Application is going to be built within a time span of 3 months.The Application uses  HTML,HTML5,CSS,javascript,twitter-bootstrap for the front end design.
In the back end the application is powered by MySQL (v5.6) database.PHP is used to exchange data between front-end and back-end of the application.
		There will be two classes of the user.Admin and user.Admin has authorities to Approve the details of the person added to the website as missing.Once the details are approved then it appears on the web site.This eliminates the fake complaints.User can upload the missing persons data but have to wait for the approval.
Alerts are sent to the registered users’ email.Sending these alerts through email is not random but its location based.People in the localities of the missing person get the email alert about the missing person.
