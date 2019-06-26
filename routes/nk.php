<?php
/**
 * THese routes are for the NK-JTB Docs and can be remove completly
 * allon with the jk-jtb directory in the views folder.
 */
Route::get('/nk', function () {return view('nk.index');});

Route::get('/nk-jtb/components/boxes', function () {
    return view('nk.jtb-docs.components.boxes')->with('title', 'Panels and Boxes');
});

Route::get('/nk-jtb/components/drawer', function () {
    return view('nk.jtb-docs.components.drawer')->with('title', 'Side Drawer');
});

Route::get('/nk-jtb/components/forms', function () {
    return view('nk.jtb-docs.components.forms')->with('title', 'Forms');
});

Route::get('/nk-jtb/components/nav', function () {
    return view('nk.jtb-docs.components.nav')->with('title', 'Nav');
});

Route::get('/nk-jtb/components/navbar', function () {
    return view('nk.jtb-docs.components.navbar')->with('title', 'Navbar');
});


//

Route::get('/nk-jtb/page-structures/grid', function () {
    return view('nk.jtb-docs.page-structures.grid')->with('title', 'Grid');
});


//
Route::get('/nk-jtb/utilities/colour-schemes', function () {
    return view('nk.jtb-docs.utilities.colour-schemes')->with('title', 'Colour Schemes');
});

Route::get('/nk-jtb/utilities/display', function () {
    return view('nk.jtb-docs.utilities.display')->with('title', 'Display');
});

Route::get('/nk-jtb/utilities/flexbox', function () {
    return view('nk.jtb-docs.utilities.flexbox')->with('title', 'Flexbox');
});

Route::get('/nk-jtb/utilities', function () {
    return view('nk.jtb-docs.utilities.utilities')->with('title', 'Utility Classes');
});

Route::get('/nk-jtb/utilities/styles-overview', function () {
    return view('nk.jtb-docs.utilities.styles-overview')->with('title', 'Styles Overview');
});


Route::get('/nk-jtb/examples/hero', function () {
    return view('nk.jtb-docs.examples.hero')->with('title', 'Hero');
});
