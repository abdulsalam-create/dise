<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeVidController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Models\Blog;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\About;
use App\Models\Calendly;
use App\Models\Collection;
use App\Models\Consult;
use App\Models\HomeVid;
use App\Models\Resource;
use App\Models\services;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $h_banner = services::all();
    $w_next = HomeVid::where('id', 1)->get();
    $w_next2= HomeVid::where('id', 2)->get();
    $w_next3 = HomeVid::where('id', 3)->get();
    $m_banner = Collection::all();

    $allBlog = Blog::latest()->take(5)->get();
    return view('welcome', compact('allBlog', 'h_banner', 'w_next','w_next2','w_next3', 'm_banner'));
})->name('home');
Route::get('/about', function () {
    $about = About::latest()->get();

    return view('about', compact('about'));
})->name('about');
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');
Route::get('/shop', function () {
    $consult = Consult::latest()->get();

    return view('shop', compact('consult'));
})->name('shop');

Route::controller(MailController::class)->group(function () {
    Route::post('/store/mail', 'mail')->name('mailing');
    Route::post('/contact/mail', 'submitForm')->name('fmail');

});

Route::get('/resource', function () {
    $resource = Resource::latest()->get();

    return view('resource', compact('resource'));
})->name('resource');


Route::controller(ResourceController::class)->group(function () {
    Route::get('/download/{resource}', 'download')->name('download');
});


Route::get('/calendly/show', function () {
    $calend = Calendly::latest()->get();
    return view('calendly', compact('calend'));
})->name('calendly');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'Blog')->name('blog');
    Route::get('/view/blog/{id}', 'ViewBlog')->name('blog.view');
    
    
});
//  mail
Route::controller(ContactController::class)->group(function () {
    Route::post('/contactsend', 'sendContactForm');
    
});
Route::controller(TestimonialController::class)->group(function () {
    Route::post('/testimonial/save', 'UpdateTestimonial')->name('testimonial.save');
    // Route::get('/add/collection', 'AddCollection')->name('add.collection');
    // Route::post('/collection/store', 'StoreCollection')->name('collection.store');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/all/service', 'AllServices')->name('all.service');
        Route::get('/edit/service/{id}', 'EditServices')->name('edit.service');
        Route::get('/edit/main/{id}', 'EditMain')->name('edit.main');
        Route::post('/service/submit/{id}', 'ServiceSubmit')->name('service.submit');

    });


    Route::controller(HomeVidController::class)->group(function () {
        Route::get('/all/vid', 'AllVid')->name('all.vid');
        Route::post('/add/store', 'Store')->name('add.store');
        Route::get('/edit/vid/{id}', 'EditVid')->name('edit.vid');
        Route::post('/homevid/update/{id}', 'HomevidUpdate')->name('homevid.update');

    });

    Route::controller(ShopController::class)->group(function () {
        Route::get('/shop/all', 'AllShop')->name('all.shop');
        Route::get('/shop/add', 'AddShop')->name('add.shop');
        Route::post('/send/mail', 'send')->name('send.mail');
        Route::get('/edit/shop/{id}', 'EditShop')->name('edit.shop');
        Route::post('/shop/update/{id}', 'UpdateShop')->name('shop.update');


    });

    Route::controller(CollectionController::class)->group(function () {
        Route::get('/all/collection', 'AllCollection')->name('all.collection');
        Route::get('/edit/collection/{id}', 'EditCollection')->name('edit.collection');
        Route::post('/collection/update/{id}', 'UpdateCollection')->name('collection.update');

    });



    Route::controller(ResourceController::class)->group(function () {
        Route::get('/all/resource', 'all')->name('all.resource');
        Route::get('/add/resource', 'add')->name('add.resource');
        Route::post('/resource/store', 'store')->name('resource.store');
        Route::get('/edit/resource/{resource}', 'edit')->name('edit.resource');
        Route::post('/resource/update/{resource}', 'update')->name('resource.update');
        Route::post('/resource/destroy/{resource}', 'destroy')->name('resource.destroy');

    });

    Route::controller(AboutController::class)->group(function () {
        Route::get('/about/all', 'About')->name('admin.about');
        Route::get('/consult/all', 'Consult')->name('admin.consult');
        Route::get('/edit/consult/{id}', 'EditConsult')->name('edit.consult');
        Route::post('/store/consult/{id}', 'StoreConsult')->name('consult.store');
        Route::get('/add/about/', 'AddAbout')->name('add.about');
        Route::post('/store/about', 'StoreAbout')->name('about.store');
        Route::get('/edit/about/{id}', 'EditAbout')->name('edit.about');
        Route::post('/about/update/{id}', 'UpdateAbout')->name('update.about');
        Route::get('/logout-user', 'perform')->name('logout.user');
        // Route::get('/add/collection', 'AddCollection')->name('add.collection');

    });

    Route::controller(BlogController::class)->group(function () {
        Route::get('/all/blog', 'Allblog')->name('all.blog');
        Route::get('/add/blog', 'Addblog')->name('add.blog');
        Route::post('/blog/store', 'Storeblog')->name('blog.store');
        Route::get('/edit/blog/{id}', 'Editblog')->name('blog.edit');
        Route::post('/blog/update/{id}', 'Updateblog')->name('blog.update');
        Route::get('/delete/blog/{id}', 'Deleteblog')->name('blog.delete');

    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/categories', 'AllCat')->name('all.cat');
        Route::get('/calendly', 'AllCal')->name('all.cal');
        Route::get('/edit/calendly/{id}', 'EditCal')->name('edit.cal');
        Route::post('/calendly/update/{id}', 'UpdateCal')->name('cal.update');
        Route::get('/add/category', 'AddCat')->name('add.cat');
        Route::post('/category/store', 'StoreCat')->name('cat.store');
        Route::get('/edit/category/{id}', 'EditCat')->name('cat.edit');
        Route::post('/category/update/{id}', 'UpdateCat')->name('cat.update');


    });


    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
