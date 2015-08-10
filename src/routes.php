<?php

Route::get(trans("contactform::links.contact"), 'Lartificer\Contactform\Http\Controllers\ContactController@getContactForm');
Route::post('/sendmail', 'Lartificer\Contactform\Http\Controllers\ContactController@sendMail');