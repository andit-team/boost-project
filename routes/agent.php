<?php

/***************
 * Registration
 ***************/
Route::get('become-an-agent','AgentController@becomeAnAgent');
Route::post('become-an-agent','AgentController@becomeAnAgentPost')->name('becomeAnAgentPost');

Route::get('agent-resubmit-token','AgentController@resubmitToken');
Route::post('agent-resubmit-token','AgentController@tokenUpdate')->name('resubmitToken');

Route::post('agent-varifey','AgentController@verifyToken')->name('tokenVerify');

Route::get('agent-registration','AgentController@agentRegistration');
Route::post('agent-registration','AgentController@registrationStepOne')->name('profileRegistration');

Route::post('signup-step-one','AgentController@registrationStepOneProcess')->name('merchantStepOne');
Route::get('terms-condition','AgentController@termsCondtion');


/***************
 * Login
 ***************/
Route::get('agent/login','AgentController@agentlogin');
Route::post('agent/login','AgentController@agentloginprocess')->name('agentloginprocess');