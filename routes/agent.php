<?php

/**
 * Registration
 */
Route::get('agent/login','agentController@agentlogin');
Route::post('agent/login','agentController@agentloginprocess')->name('agentloginprocess');

/**
 * Login
 */
Route::get('agent/login','agentController@agentlogin');
Route::post('agent/login','agentController@agentloginprocess')->name('agentloginprocess');