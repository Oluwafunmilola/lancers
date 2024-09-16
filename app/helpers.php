<?php

use App\Country;
use App\State;
use App\Currency;


function countries(){
	return Country::select('id', 'name')->get();
}

function getStates($country)
{
	return State::where('country_id', $country)->select('id', 'name')->get();
}

function getCountry($id){
	return Country::find($id)->name;
}

function getState($id){
	return State::find($id)->name;
}

function getCurrency($id){
	return Currency::where('id', $id)->select('code', 'symbol')->first();
}

function dateSlash($date){
	$date = date_create($date);
	return $date->format('d/m/Y');
}


function prettyDate($date)
{
	return $date->format('jS F Y h:i:s A');
}