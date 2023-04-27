<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssetPicturesController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CountdownController;
use App\Http\Controllers\DrowbackController;
use App\Http\Controllers\DrowbackPicturesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MagicLinkController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NewsletterEmailController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('dealer', function(){return view('main.dealer.dealer');});
Route::get('forsale', function(){return view('main.forsale.forsale');});
Route::get('faq', function(){return view('main.faq.faq');});
Route::get('privacy', function(){return view('main.privacypolicy.privacypolicy');});

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

// Route::get('/linkstorage', function () {
//     Artisan::call('storage:link');
// });

Route::get('/create-symlink', function (){
    symlink(storage_path('/app/public'), public_path('storage'));
    echo "Symlink Created. Thanks";
});

Route::get('/error', function () {
    return view('errors/403');
});
Route::get('/blocked', function () {
    return view('errors/blocked');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource("/", HomeController::class);
Route::resource("admin/user", UserController::class)->middleware(['auth', 'adminVerification']);
Route::resource("admin/seller", SellerController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/car", CarController::class);
Route::resource("admin/picture", PictureController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/asset", AssetController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/drowback", DrowbackController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/assetPicture", AssetPicturesController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/drowbackPicture", DrowbackPicturesController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/offer", OfferController::class)->middleware(['auth', 'buyerVerification']);
Route::resource("admin/newsletter", NewsletterController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/archive", ArchiveController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/countdown", CountdownController::class)->middleware(['auth', 'workerVerification']);
Route::resource("admin/form", FormController::class);
Route::resource("admin/newsmail", NewsletterEmailController::class);

Route::get('/realoffers/{id}', [OfferController::class, 'realoffers'])->name('realoffers')->middleware(['auth', 'workerVerification']);
Route::get('/changePrice/{id}', [CarController::class, 'changePrice'])->name('changePrice')->middleware(['auth', 'workerVerification']);

Route::post('/send-magic-link', [MagicLinkController::class, 'sendMagicLink'])->name('send.magic.link');
Route::get('/login/{token}', [MagicLinkController::class, 'loginWithMagicLink'])->name('login.with.magic.link');
Route::get('/login/{token}/{car}', [MagicLinkController::class, 'loginForOffer'])->name('login.for.offer');

Route::get('/admin/assetpics/{id}', [PictureController::class, 'asset'])->name('asset.picture');
Route::get('/admin/drowbackpics/{id}', [PictureController::class, 'drowback'])->name('drowback.picture');


require __DIR__.'/auth.php';