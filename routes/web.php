<?php           

// use App\Http\Controllers\TodoListController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;      

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

Route::get('/clear',function(){
    //\Artisan::call('key:generate');
    \Artisan::call('route:clear');
    \Artisan::call('cache:clear');
});

Route::get('/', function () {
    return view('home');      
})->name('home');

Route::get('about', function () {
    return view('about');      
})->name('about');

Route::get('gallery', function () {
   return view('gallery');      
})->name('gallery');

Route::get('media', function () {
   return view('media');      
})->name('media');

Route::get('video', function () {
   return view('video');       
})->name('video');

Route::get('contact', function () {
   return view('contact');      
})->name('contact');

Route::get('book-appointment', function () {
   return view('book-appointment');      
})->name('book-appointment');

// gallery grouping
//Route::group(['prefix' => "gallery"], function () {

    //Route::get('/images', function () {
       // return view('gallery.images'); 
    //})->name('images');   

//});    

// Services  
Route::get('brain-surgery/brain-tumor-surgery-open-and-endoscopic', function () {
    return view('brain-tumor-surgery-open-and-endoscopic'); 
 })->name('brain-tumor-surgery-open-and-endoscopic');        

 Route::get('brain-surgery/minimal-invasive-surgery', function () {
    return view('minimal-invasive-surgery'); 
 })->name('minimal-invasive-surgery');   

 Route::get('brain-surgery/hydrocephalus', function () {
    return view('hydrocephalus'); 
 })->name('hydrocephalus');  

 Route::get('brain-surgery/hydrocephalus', function () {
    return view('hydrocephalus'); 
 })->name('hydrocephalus');  

 Route::get('brain-surgery/vascular-disease-stroke-paralysis-avm-aneurysm', function () {
    return view('vascular-disease-stroke-paralysis-avm-aneurysm'); 
 })->name('vascular-disease-stroke-paralysis-avm-aneurysm');  

 Route::get('brain-surgery/epilepsy-surgery', function () {
   return view('epilepsy-surgery'); 
})->name('epilepsy-surgery');  

Route::get('brain-surgery/traumatic-brain-injury', function () {
   return view('traumatic-brain-injury'); 
})->name('traumatic-brain-injury'); 

Route::get('spine-surgery/disc-prolapse', function () {
   return view('disc-prolapse'); 
})->name('disc-prolapse'); 

Route::get('spine-surgery/spinal-cord-tumor', function () {
   return view('spinal-cord-tumor'); 
})->name('spinal-cord-tumor'); 

Route::get('spine-surgery/spinal-trauma', function () {
   return view('spinal-trauma'); 
})->name('spinal-trauma'); 

Route::get('spine-surgery/spondylosis', function () {
   return view('spondylosis'); 
})->name('spondylosis'); 

Route::get('spine-surgery/nerve-repair', function () {
   return view('nerve-repair'); 
})->name('nerve-repair'); 

Route::get('spine-surgery/nerve-entrapment-surgery', function () {
   return view('nerve-entrapment-surgery'); 
})->name('nerve-entrapment-surgery'); 

Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');     
Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');          





