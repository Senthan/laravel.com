<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Set the default documentation version...
 */
define('DEFAULT_VERSION', '5.0');
define('DEFAULT_LANGUAGE', 'ta');

/**
 * Convert some text to Markdown...
 */
function markdown($text) {
    return (new ParsedownExtra)->text($text);
}

get('/', function() {
    return view('marketing');
});

get('docs', 'DocsController@showRootPage');
get('docs/{language}/{version}/{page?}', 'DocsController@show');
