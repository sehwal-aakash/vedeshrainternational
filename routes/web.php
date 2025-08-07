<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Forms\ContactFormController;
use App\Http\Controllers\Forms\NewsletterFormController;
use App\Http\Controllers\Forms\GetQuoteFormController;
use App\Http\Controllers\Forms\PopupFormController;

use App\Models\Services;
use App\Models\Industries;

use App\Http\Controllers\Admin\Services\ServicesController;
use App\Http\Controllers\Admin\MainPages\MainPagesController;
use App\Http\Controllers\Admin\Industries\IndustriesController;

Route::get('/', function () {
    return view('content.pages.mainpages.home');
});

Route::get('/services', [ServicesController::class, 'listservicesfrontend'])->name('admin.services.list');

Route::get('/services/{slug}', function ($slug) {
    $service = Services::where('slug', $slug)->firstOrFail();
    $view = 'content.pages.services.' . $slug;

    if (view()->exists($view)) {
        return view($view, compact('service'));
    }

    abort(404); // Return 404 if the view doesn't exist
})->name('services.dynamic');

Route::get('/industries', [IndustriesController::class, 'listindustriesfrontend'])->name('admin.industries.list');

Route::get('/industries/{slug}', function ($slug) {
    $industry = Industries::where('slug', $slug)->firstOrFail();
    $view = 'content.pages.industries.' . $slug;

    if (view()->exists($view)) {
        return view($view, compact('industry'));
    }

    abort(404); // Return 404 if the view doesn't exist
})->name('industries.dynamic');

Route::get('/about-us', function () {
    return view('content.pages.mainpages.about');
});

Route::get('/contact', function () {
    return view('content.pages.mainpages.contact');
})->name('contact');

Route::get('/get-quote', function () {
    return view('content.pages.mainpages.getquote');
});

Route::get('/terms-of-use', function () {
    return view('content.pages.mainpages.termsofuse');
});

Route::get('/privacy-policy', function () {
    return view('content.pages.mainpages.privacypolicy');
});

Route::get('/terms-and-conditions', function () {
    return view('content.pages.mainpages.termsconditions');
});

Route::get('/thank-you', function () {
    return view('content.pages.mainpages.thankyou');
})->name('thank-you');

Route::get('/testapi', function () {
    return view('api');
})->name('testapi');


// Services Page

// Route::get('/services/web-design-and-development/', function () {
//     return view('content.pages.services.web-design-development');
// })->name('Web Design and Development');

// Route::get('/services/seo-services/', function () {
//     return view('content.pages.services.search-engine-optimization');
// })->name('Search Engine Optimization');

// Route::get('/services/ppc-advertising/', function () {
//     return view('content.pages.services.pay-per-click-advertising');
// })->name('PPC Advertising');

// Route::get('/services/social-media-marketing/', function () {
//     return view('content.pages.services.social-media-marketing');
// })->name('Social Media Marketing');

// Route::get('/services/content-marketing/', function () {
//     return view('content.pages.services.content-marketing');
// })->name('Content Marketing');


// Form Submit Controller

Route::post('/contact-form-submit', [ContactFormController::class, 'store'])->name('contact.store');
Route::post('/newsletter-form-submit', [NewsletterFormController::class, 'store'])->name('newsletterform.store');
Route::post('/getquote-form-submit', [GetQuoteFormController::class, 'store'])->name('getquoteform.store');
Route::post('/popup-form-submit', [PopupFormController::class, 'store'])->name('popupform.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/nimdav/dashboard', function () {
        // return view('dashboard');
        return view('admin.dashboard.index');
    })->name('dashboard');

    // Contacts
    Route::get('/nimdav/contacts/listcontacts', function () {
        // return view('dashboard');
        return view('admin.contacts.contacts.listcontacts');
    })->name('List Contacts');

    // Invoice
    Route::get('/nimdav/invoice/listinvoice', function () {
        // return view('dashboard');
        return view('admin.invoice.listinvoice');
    })->name('List Invoice');

    // Pages

    // Main Pages
    // Route::get('/nimdav/pages/mainpages/listmainpages', function () {
    //     // return view('dashboard');
    //     return view('admin.pages.mainpages.listmainpages');
    // })->name('List Main Pages');

    // Industry Pages
    Route::get('/nimdav/pages/industries/listindustries', [IndustriesController::class, 'listindustries'])->name('admin.industries.list');
    Route::get('/nimdav/pages/industries/addindustry', [IndustriesController::class, 'addindustry'])->name('admin.industries.add');
    Route::post('/nimdav/pages/industries/addindustrypost', [IndustriesController::class, 'addindustryPost'])->name('admin.industries.add.post');
    Route::get('/nimdav/pages/industries/viewindustry/{id}', [IndustriesController::class, 'viewindustry'])->name('admin.industries.view');
    Route::get('/nimdav/pages/industries/editindustry/{id}', [IndustriesController::class, 'editindustry'])->name('admin.industries.edit');
    Route::post('/nimdav/pages/industries/updateindustry/{id}', [IndustriesController::class, 'updateindustry'])->name('admin.industries.update');
    Route::delete('/nimdav/pages/industries/deleteindustry/{id}', [IndustriesController::class, 'deleteindustry'])->name('admin.industries.delete');

    // Locations Pages
    Route::get('/nimdav/pages/locations/listlocations', function () {
        // return view('dashboard');
        return view('admin.pages.locations.listlocation');
    })->name('List Locations');

    // Services Pages
    Route::get('/nimdav/pages/services/listservices', [ServicesController::class, 'listservices'])->name('admin.services.list');
    Route::get('/nimdav/pages/services/addservice', [ServicesController::class, 'addservice'])->name('admin.services.add');
    Route::post('/nimdav/pages/services/addservicepost', [ServicesController::class, 'addservicePost'])->name('admin.services.add.post');
    Route::get('/nimdav/pages/services/viewservice/{id}', [ServicesController::class, 'viewservice'])->name('admin.services.view');
    Route::get('/nimdav/pages/services/editservice/{id}', [ServicesController::class, 'editservice'])->name('admin.services.edit');
    Route::post('/nimdav/pages/services/updateservice/{id}', [ServicesController::class, 'updateservice'])->name('admin.services.update');
    Route::delete('/nimdav/pages/services/deleteservice/{id}', [ServicesController::class, 'deleteservice'])->name('admin.services.delete');

    // Main Pages
    Route::get('/nimdav/pages/mainpages/listmainpages', [MainPagesController::class, 'listmainpages'])->name('admin.mainpages.list');
    Route::get('/nimdav/pages/mainpages/addmainpage', [MainPagesController::class, 'addmainpage'])->name('admin.mainpages.add');
    Route::post('/nimdav/pages/mainpages/addmainpagepost', [MainPagesController::class, 'addmainpagePost'])->name('admin.mainpages.add.post');
    Route::get('/nimdav/pages/mainpages/viewmainpage/{id}', [MainPagesController::class, 'viewmainpage'])->name('admin.mainpages.view');
    Route::get('/nimdav/pages/mainpages/editmainpage/{id}', [MainPagesController::class, 'editmainpage'])->name('admin.mainpages.edit');
    Route::post('/nimdav/pages/mainpages/updatemainpage/{id}', [MainPagesController::class, 'updatemainpage'])->name('admin.mainpages.update');
    Route::delete('/nimdav/pages/mainpages/deletemainpage/{id}', [MainPagesController::class, 'deletemainpage'])->name('admin.mainpages.delete');

    // Forms

    // Contact Forms
    Route::get('/nimdav/forms/contactform/listentries', [ContactFormController::class, 'view'])->name('admin.forms.contact.list');
    Route::get('/nimdav/forms/contactform/listentries/{id}', [ContactFormController::class, 'viewoneitem'])->name('admin.forms.contact.viewoneitem');
    Route::delete('/nimdav/forms/contactform/listentries/{id}', [ContactFormController::class, 'deleteentry'])->name('admin.forms.contact.delete');

    // Get Quote Form
    Route::get('/nimdav/forms/getquoteform/listentries', [GetQuoteFormController::class, 'view'])->name('admin.forms.getquote.list');
    Route::get('/nimdav/forms/getquoteform/listentries/{id}', [GetQuoteFormController::class, 'viewoneitem'])->name('admin.forms.getquote.viewoneitem');
    Route::delete('/nimdav/forms/getquoteform/listentries/{id}', [GetQuoteFormController::class, 'deleteentry'])->name('admin.forms.getquote.delete');

    // Popup Form
    Route::get('/nimdav/forms/popupform/listentries', [PopupFormController::class, 'view'])->name('admin.forms.popup.list');
    Route::get('/nimdav/forms/popupform/listentries/{id}', [PopupFormController::class, 'viewoneitem'])->name('admin.forms.popup.viewoneitem');
    Route::delete('/nimdav/forms/popupform/listentries/{id}', [PopupFormController::class, 'deleteentry'])->name('admin.forms.popup.delete');

    // Newsletter Form
    Route::get('/nimdav/forms/newsletterform/listentries', [NewsletterFormController::class, 'view'])->name('admin.forms.newsletter.list');
    Route::get('/nimdav/forms/newsletterform/listentries/{id}', [NewsletterFormController::class, 'viewoneitem'])->name('admin.forms.newsletter.viewoneitem');
    Route::delete('/nimdav/forms/newsletterform/listentries/{id}', [NewsletterFormController::class, 'deleteentry'])->name('admin.forms.newsletter.delete');


    // Technologies Pages
    Route::get('/nimdav/pages/technologies/listtechnologies', function () {
        // return view('dashboard');
        return view('admin.pages.technologies.listtechnologies');
    })->name('List Technologies');

    // Users Pages
    Route::get('/nimdav/users/listusers', function () {
        // return view('dashboard');
        return view('admin.users.listusers');
    })->name('List Users');

});


// 301 Redirections

Route::get('/cgi-bin', function () {
    return redirect('/', 301);
});

Route::get('/web-design-and-development', function () {
    return redirect('/services/web-design-and-development', 301);
});

Route::get('/locations.kml', function () {
    return redirect('/', 301);
});



// Admin URLs

