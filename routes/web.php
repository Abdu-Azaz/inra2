<?php

use App\Http\Controllers\RoutesController;
use App\Models\Contract;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/images', function () {
    $imageExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $images = Storage::allFiles('public');

    $absoluteImages = array_map(function ($image) use ($imageExtensions) {
        $extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        if (in_array($extension, $imageExtensions)) {
            return [
                'url' => asset(Storage::url($image)),
                'thumb' => asset(Storage::url($image)), // Set the thumbnail URL if available, or use the same URL as the original image
                'tag' => 'image' // Set the tag for the image
            ];
        }
    }, $images);

    // Filter out any null values and reindex the array
    $absoluteImages = array_values(array_filter($absoluteImages));

    // Return the list of images as a JSON response
    return response()->json($absoluteImages);
})->name('images');


Route::delete('/image/{image}', function($image){
    if(Storage::delete($image)){
        return response()->json(['message' => 'Image deleted successfully'.$image]);
    }
    return response()->json(['message' => 'failed']);
    
    // Return a response indicating the success or failure of the deletion
})->name('image.delete');

Route::get('/', function () {
    return view('main');
});

Route::get('/contrat', function () {
    return view('contrat', ['data'=>Contract::first()]);
})->name('contrat');

Route::get('/gallery', function () {
    return view('gallery', ['gallery'=>Gallery::all()]);
})->name('gallery');


Route::prefix("management")->group(function () {
    Route::get('/reunions/date_et_CR', [RoutesController::class, 'getReunions'])->name('reunions');
    Route::get('/equipes/{type}', [RoutesController::class, 'getEquipes'])->name('equipes');
    Route::get('/stagiaires/{type}', [RoutesController::class, 'getStagiaires'])->name('thesard');
    Route::get('/budget', [RoutesController::class, 'getBudgets'])->name('budget');
});


Route::prefix('methodologies')->group(function () {
    Route::get('axe/{axe}', [RoutesController::class, 'methAxemanager'])->name('methodologies.axe');
    
    Route::get('site/{site}', [RoutesController::class, 'sitemanager'] )->name('methodologies.site');
    
});

Route::prefix('resultats')->group(function () {
    Route::get('axe/{axe}', [RoutesController::class, 'resAxemanager'])->name('resultats.axe');
});

Route::prefix('outputs/axe')->group(function () {
    Route::get('{axe}/publication', [RoutesController::class, 'getPublications'])->name('outputs.publications');
    Route::get('{axe}/theses', [RoutesController::class, 'getTheses'])->name('outputs.theses');
    Route::get('{axe}/fiches_techniques', [RoutesController::class, 'getFiches'])->name('outputs.fiches');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
