<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\InquiryController;

use App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

Route::get('/lang/{key}', function ($key) {
    if(in_array($key, ['en', 'az', 'ru', 'de'])){
        session()->put('locale', $key);
        return back();
    }
    else{
        return back();
    }
})->name('langswitch');

Route::get('/theme/{key}', function ($key) {
    if(in_array($key, ['dark', 'light'])){
        session()->put('sitetheme', $key);
        return back();
    }
    else{
        return back();
    }
})->name('front_themeswitch');

Route::group([
        'prefix' => 'admin',
        'middleware'=>['auth', 'admin_check']
    ], function () {

    Route::get('/theme-switch', [Controller::class, 'changeTheme'])->name('themeswitch');
    Route::get('/', function () { return view('admin.pages.index'); })->name('admin.home');
    
    Route::get('/infos', function () { return view('admin.pages.info'); })->name('admin.infos');
    Route::post('/infos/store', [ContentController::class, 'store'])->name('admin.infos.store');
    Route::post('/infos/update/{id}', [ContentController::class, 'update'])->name('admin.infos.update');
    Route::delete('/infos/delete/{id}', [ContentController::class, 'destroy'])->name('admin.infos.delete');
    Route::get('/infos/edit/{id}', [ContentController::class, 'edit'])->name('admin.infos.edit');

    Route::get('/categories', function () { return view('admin.pages.categories'); })->name('admin.categories');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('/categories/status', [CategoryController::class, 'status'])->name('admin.categories.status');
    Route::post('/categories/bulk_delete', [CategoryController::class, 'bulk_delete'])->name('admin.categories.bulk_delete');

    Route::get('/projects', function () { return view('admin.pages.projects'); })->name('admin.projects');
    Route::post('/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.delete');
    Route::post('/projects/delete_photo', [ProjectController::class, 'delete_photo'])->name('admin.projects.delete_photo');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::get('/projects/bulk_upload', [ProjectController::class, 'bulk_upload'])->name('admin.projects.bulk_upload');
    Route::post('/projects/bulk_upload_store', [ProjectController::class, 'bulk_upload_store'])->name('admin.projects.bulk_upload_store');
    Route::post('/projects/bulk_delete', [ProjectController::class, 'bulk_delete'])->name('admin.projects.bulk_delete');

    Route::get('/photos', function () { return view('admin.pages.photos'); })->name('admin.photos');
    Route::post('/photos/store', [PhotoController::class, 'store'])->name('admin.photos.store');
    Route::post('/photos/update/{id}', [PhotoController::class, 'update'])->name('admin.photos.update');
    Route::delete('/photos/delete/{id}', [PhotoController::class, 'destroy'])->name('admin.photos.delete');
    Route::get('/photos/edit/{id}', [PhotoController::class, 'edit'])->name('admin.photos.edit');
    Route::get('/photos/bulk_upload', [PhotoController::class, 'bulk_upload'])->name('admin.photos.bulk_upload');
    Route::post('/photos/bulk_upload_store', [PhotoController::class, 'bulk_upload_store'])->name('admin.photos.bulk_upload_store');
    Route::post('/photos/bulk_delete', [PhotoController::class, 'bulk_delete'])->name('admin.photos.bulk_delete');

    Route::get('/services', function () { return view('admin.pages.services'); })->name('admin.services');
    Route::post('/services/store', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::post('/services/update/{id}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('/services/delete/{id}', [ServiceController::class, 'destroy'])->name('admin.services.delete');
    Route::get('/services/edit/{id}', [ServiceController::class, 'edit'])->name('admin.services.edit');

    Route::get('/slides', function () { return view('admin.pages.slides'); })->name('admin.slides');
    Route::post('/slides/store', [SlideController::class, 'store'])->name('admin.slides.store');
    Route::post('/slides/update/{id}', [SlideController::class, 'update'])->name('admin.slides.update');
    Route::delete('/slides/delete/{id}', [SlideController::class, 'destroy'])->name('admin.slides.delete');
    Route::get('/slides/edit/{id}', [SlideController::class, 'edit'])->name('admin.slides.edit');

    Route::get('/catalogues', function () { return view('admin.pages.catalogues'); })->name('admin.catalogues');
    Route::post('/catalogues/store', [CatalogueController::class, 'store'])->name('admin.catalogues.store');
    Route::post('/catalogues/update/{id}', [CatalogueController::class, 'update'])->name('admin.catalogues.update');
    Route::delete('/catalogues/delete/{id}', [CatalogueController::class, 'destroy'])->name('admin.catalogues.delete');
    Route::get('/catalogues/edit/{id}', [CatalogueController::class, 'edit'])->name('admin.catalogues.edit');

    Route::get('/partners', function () { return view('admin.pages.partners'); })->name('admin.partners');
    Route::post('/partners/store', [PartnerController::class, 'store'])->name('admin.partners.store');
    Route::post('/partners/update/{id}', [PartnerController::class, 'update'])->name('admin.partners.update');
    Route::delete('/partners/delete/{id}', [PartnerController::class, 'destroy'])->name('admin.partners.delete');
    Route::get('/partners/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partners.edit');
    
    Route::get('/inquiries', function () { return view('admin.pages.inquiries'); })->name('admin.inquiries');
    Route::delete('/inquiries/delete/{id}', [InquiryController::class, 'destroy'])->name('admin.inquiries.delete');
    Route::get('/inquiries/edit/{id}', [InquiryController::class, 'edit'])->name('admin.inquiries.edit');

    require 'Modules/Amoshop/Routes/admin.php';
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/redirect', function (Request $request) {
//     $request->session()->put('state', $state = Str::random(40));

//     $query = http_build_query([
//         'client_id' => '3',
//         'redirect_uri' => 'https://satex.amotech.tech/callback',
//         'response_type' => 'code',
//         'scope' => '',
//         'state' => $state,
//     ]);

//     return redirect('https://crm.amotech.tech/oauth/authorize?'.$query);
// });

// 

Route::post('/add_order', function (Request $request) {
    $accessToken = ApiController::getAccess();

    $response = Http::withHeaders([
        'Accept' => 'application/json',
        'Authorization' => 'Bearer '.$accessToken,
    ])->post('https://crm.amotech.tech/api/orders/store?order='.json_encode($request->item));

    return $response->json();
});


require 'Modules/Amoshop/Routes/customer.php';

Route::group(['middleware' => ['lang_check', 'reg_visit']], function () {

    Route::get('/', function () { return view('frontend.pages.index')->with('is_home', true); })->name('home');
    Route::get('/about', function () { return view('frontend.pages.about'); });
    Route::get('/contact', function () { return view('frontend.pages.contact'); });
    Route::get('/gallery', function () { return view('frontend.pages.gallery'); });
    Route::get('/catalogues', function () { return view('frontend.pages.catalogues'); });
    Route::post('/mail-us', [InquiryController::class, 'send_inquiry'])->name('mail_us');
    Route::get('/products', function () { return view('frontend.pages.projects'); });
    Route::get('/products/{id}', function ($id) {
        $product = \App\Models\Project::where('id', $id)->firstorfail();
        $category = \App\Models\Navigation::where('id', $product->categ_id)->first();

        return view('frontend.pages.project', compact(['product', 'category'])); 
    });

    Route::get('/{categ}', function ($categ) {
        $category = \App\Models\Navigation::where('route', $categ)->first();
        $subcategories = \App\Models\Navigation::where('parent_id', $category->id)->get();
        return view('frontend.pages.projects_slider', compact(['category', 'subcategories']));
    });
    Route::get('/{categ}/{subcateg}', function ($categ, $subcateg) { 
        $category = \App\Models\Navigation::where('route', $subcateg)->where('parent_id', '!=', null)->first();
        $projects = \App\Models\Project::where('categ_id', $category->id)->get();
        
        return view('frontend.pages.projects', compact(['projects', 'category']));
    });
});


