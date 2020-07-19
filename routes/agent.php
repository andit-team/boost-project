<?php

/***************
 * Registration
 ***************/
Route::get('agent-registration','MerchantController@agentRegistration');
Route::post('agent-registration','MerchantController@registrationStepOne')->name('profileRegistration');

/***************
 * Login
 ***************/
Route::get('agent/login','agentController@agentlogin');
Route::post('agent/login','agentController@agentloginprocess')->name('agentloginprocess');