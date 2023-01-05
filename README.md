# BookACourse

## Purpose
Test Website with a simulated booking process including input field validation and booking confirmation.


## Links
https://www.figma.com/file/YWdFSIAIPEIHHFEDsPDgYC/Booking-Form-(mobile)?node-id=0%3A1&t=uQ4iOwGSjvt5uSQo-3

https://trello.com/invite/b/p23fgHQx/ATTIce3837aebb489f752a25e0ec9a5792700C62F399/book-a-course-prototype-website

## Features
The booking Form offers a pretty elaborate input validation, not only catching empty fields, but also enforcing e.g. letters only/digits only or a detailed email-address validation. Where applicable, validation is done with the help of REGEX matching.

Also, a confirmation page with form input data feedback is in the making. The page exists, but I've been running into problems with the feedback generation and it is unsure if I will be able to solve this problem in time.


## responsiveness
On mobile, except for one row, its a 1-column form, expanding into a 2-column layout on wider screens. To achieve this, bootsrap 5 was used with the flexbox "d-flex" class.