<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ContentController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Backend\PolicyController;
use App\Http\Controllers\Backend\IndController;
use App\Http\Controllers\Backend\basicsettingController;
use App\Http\Controllers\Backend\slideController;
use App\Http\Controllers\Frontend\searchController;
use App\Http\Controllers\Frontend\questionController;



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

/*-------------Admin route--------*/

Route::get('/', function()
{
    return view('frontend.index');
});

Route::prefix('admin')->group(function (){

    Route::get('/login',[AdminController::class, 'Index'])->name('login_form');

    Route::post('/login/owner',[AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard',[AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    Route::get('/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/profile',[AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

    Route::get('/profile/edit', [AdminProfileController::class, 'AdminProfileEdit'])->name('admin.profile.edit');

    Route::post('/profile/store', [AdminProfileController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/change/password', [AdminProfileController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');



});

//frontend category

Route::get('/frontend/category/{frontCat_id}', [CategoryController::class, 'frontCategory'])->name('front_category');




/*-------------End Admin route--------*/

// Admin Category All Routes

Route::prefix('category')->group(function(){

    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('all.category');

    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');

    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');

    Route::post('/update/{id}', [CategoryController::class, 'CategoryUpdate'])->name('category.update');

    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');




// all Sub Category

Route::get('/sub/view', [SubCategoryController::class, 'SubCategoryView'])->name('all.subcategory');

Route::post('/sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');

Route::get('/sub/edit/{id}', [SubCategoryController::class, 'SubCategoryEdit'])->name('subcategory.edit');

Route::get('/subcategory/ajax/{category_id}', [SubCategoryController::class, 'GetSubCategory']);

Route::post('/sub/update', [SubCategoryController::class, 'SubCategoryUpdate'])->name('subcategory.update');

Route::get('/sub/delete/{id}', [SubCategoryController::class, 'SubCategoryDelete'])->name('subcategory.delete');


// all child Category

Route::get('/child/view', [SubCategoryController::class, 'ChildCategoryView'])->name('all.childcategory');

Route::post('/child/store', [SubCategoryController::class, 'ChildCategoryStore'])->name('childcategory.store');

Route::get('/child/edit/{id}', [SubCategoryController::class, 'ChildCategoryEdit'])->name('childcategory.edit');

Route::get('/childcategory/ajax/{category_id}', [SubCategoryController::class, 'GetChildCategory']);

Route::post('/child/update', [SubCategoryController::class, 'CategoryChildUpdate'])->name('childcategory.update');

Route::get('/child/delete/{id}', [SubCategoryController::class, 'ChildCategoryDelete'])->name('childcategory.delete');



    });




// Admin Content All Routes

Route::prefix('content')->group(function(){

    Route::get('/add', [ContentController::class, 'AddContent'])->name('add-content');

    Route::post('/store', [ContentController::class, 'StoreContent'])->name('content-store');

    Route::get('/manage', [ContentController::class, 'ManageContent'])->name('manage-content');

    Route::get('/edit/{id}', [ContentController::class, 'EditContent'])->name('content.edit');

    Route::post('/data/update', [ContentController::class, 'ContentDataUpdate'])->name('content-update');

    // Route::post('/thamble/update', [ContentController::class, 'ThambleImageUpdate'])->name('update-services-thamble');

    Route::get('/inactive/{id}', [ContentController::class, 'ServicesInactive'])->name('services.inactive');

    Route::get('/active/{id}', [ContentController::class, 'ServicesActive'])->name('services.active');

    Route::get('/delete/{id}', [ContentController::class, 'ServicesDelete'])->name('services.delete');

});

// Admin gallery All Routes

Route::prefix('gallery')->group(function(){

    Route::get('/add', [GalleryController::class, 'AddGallery'])->name('add-gallery');

    Route::post('/store', [GalleryController::class, 'StoreGallery'])->name('gallery-store');

    Route::get('/manage', [GalleryController::class, 'ManageGallery'])->name('manage-gallery');

    Route::get('/edit/{id}', [GalleryController::class, 'EditGallery'])->name('gallery-edit');

    Route::post('/update', [GalleryController::class, 'GalleryUpdate'])->name('gallery-update');

    Route::get('/inactive/{id}', [GalleryController::class, 'GalleryInactive'])->name('gallery.inactive');

    Route::get('/active/{id}', [GalleryController::class, 'GalleryActive'])->name('gallery.active');

    Route::get('/delete/{id}', [GalleryController::class, 'GalleryDelete'])->name('gallery.delete');

});

// Admin Portfolio All Routes

Route::prefix('portfolio')->group(function(){

    Route::get('/add', [PortfolioController::class, 'AddPortfolio'])->name('add-portfolio');

    Route::post('/store', [PortfolioController::class, 'StorePortfolio'])->name('portfolio-store');

    Route::get('/manage', [PortfolioController::class, 'ManagePortfolio'])->name('manage-portfolio');

    Route::get('/edit/{id}', [PortfolioController::class, 'EditPortfolio'])->name('portfolio-edit');

    Route::post('/update', [PortfolioController::class, 'PortfolioUpdate'])->name('portfolio-update');

    Route::post('/thamble/update', [ContentController::class, 'ThambleImageUpdate'])->name('update-services-thamble');

    Route::get('/inactive/{id}', [PortfolioController::class, 'PortfolioInactive'])->name('portfolio.inactive');

    Route::get('/active/{id}', [PortfolioController::class, 'PortfolioActive'])->name('portfolio.active');

    Route::get('/delete/{id}', [PortfolioController::class, 'PortfolioDelete'])->name('portfolio-delete');

});

// Admin Client All Routes

Route::prefix('client')->group(function(){

    Route::get('/add', [ClientController::class, 'Addclient'])->name('add-client');

    Route::post('/store', [ClientController::class, 'StoreClient'])->name('client-store');

    Route::get('/manage', [ClientController::class, 'ManageClient'])->name('manage-client');

    Route::get('/edit/{id}', [ClientController::class, 'EditClient'])->name('client.edit');

    Route::post('/update', [ClientController::class, 'ClientUpdate'])->name('client-update');

    Route::get('/delete/{id}', [ClientController::class, 'clientDelete'])->name('client.delete');

});

//Frontend search
Route::get('/search', [searchController::class, 'search'])->name('search');
Route::get('/search/input', [searchController::class, 'searchInput'])->name('search-input');


// Frontend Product Details Page url
Route::get('/services/details/{id}', [IndexController::class, 'ServicesDetails'])->name('serviceDetails');

// Frontend SubCategory wise Data
Route::get('/services/subcategory/{subcat_id}/{slug}', [IndexController::class, 'SubCatWiseServices']);

// Frontend Sub-SubCategory wise Data
Route::get('/childcategory/services/{childcat_id}/{slug}', [IndexController::class, 'ChildCatWiseServices']);


// contact
Route::get('contact/page', [ContactController::class, 'Contact'])->name('contact-page');
Route::post('contact/form', [ContactController::class, 'ContactForm'])->name('contact-form');
Route::get('admin/all/message', [ContactController::class, 'AdminAllMessage'])->name('all-message');

// contact us
Route::get('contact/us', [ContactUsController::class, 'ContactUs'])->name('contact-us');

 // view all main cat
Route::get('all/client', [ContactUsController::class, 'AllClients'])->name('all-clients');
Route::get('all/portfolios', [ContactUsController::class, 'AllPortfolios'])->name('all-portfolios');
Route::get('all/services', [ContactUsController::class, 'AllServices'])->name('all-services');
Route::get('all/creative', [ContactUsController::class, 'AllCreative'])->name('all-creative');

// blog index
Route::get('all/blog', [ContactUsController::class, 'AllBlog'])->name('all-blog');
Route::get('view/blog{id}', [IndexController::class, 'ViewBlog'])->name('view-blog');

// about us
Route::get('about/us', [ContactUsController::class, 'AboutUs'])->name('about-us');

// Career
Route::get('technoval/career', [ContactUsController::class, 'TechnovalCareer'])->name('technoval-career');

// digital marketing
Route::get('digital/marketing', [ContactUsController::class, 'DigitalMarketing'])->name('digital-marketing');

//privacy
Route::get('privacy/view', [ContactUsController::class, 'PrivacyView'])->name('privacy-view');
Route::get('terms/view', [ContactUsController::class, 'TermsView'])->name('terms-view');

// blog
Route::get('blog/add', [BlogController::class, 'BlogAdd'])->name('blog-add');

Route::post('blog/store', [BlogController::class, 'BlogStore'])->name('blog-store');

Route::get('blog/manage', [BlogController::class, 'BlogManage'])->name('blog-manage');

Route::get('blog/edit/{id}', [BlogController::class, 'BlogEdit'])->name('blog-edit');

Route::post('blog/update/', [BlogController::class, 'BlogUpdate'])->name('blog-update');

Route::get('blog/delete/{id}', [BlogController::class, 'BlogDelete'])->name('blog-delete');

Route::get('blog/inactive/{id}', [BlogController::class, 'BlogInactive'])->name('blog.inactive');

Route::get('blog/active/{id}', [BlogController::class, 'BlogActive'])->name('blog.active');




// policy
Route::get('policy/add', [PolicyController::class, 'PolicyAdd'])->name('policy-add');

Route::post('policy/store', [PolicyController::class, 'PolicyStore'])->name('policy-store');

Route::get('policy/manage', [PolicyController::class, 'PolicyManage'])->name('policy-manage');

Route::get('policy/edit/{id}', [PolicyController::class, 'PolicyEdit'])->name('policy-edit');

Route::post('policy/update/', [PolicyController::class, 'PolicyUpdate'])->name('policy-update');

Route::get('policy/delete/{id}', [PolicyController::class, 'PolicyDelete'])->name('policy-delete');


// terms
Route::get('terms/add', [PolicyController::class, 'TermsAdd'])->name('terms-add');

Route::post('terms/store', [PolicyController::class, 'TermsStore'])->name('terms-store');

Route::get('terms/manage', [PolicyController::class, 'TermsManage'])->name('terms-manage');

Route::get('terms/edit/{id}', [PolicyController::class, 'TermsEdit'])->name('terms-edit');

Route::post('terms/update/', [PolicyController::class, 'TermsUpdate'])->name('terms-update');

Route::get('terms/delete/{id}', [PolicyController::class, 'termsDelete'])->name('terms-delete');


// Admin Client All Routes

Route::prefix('ind')->group(function(){

    Route::get('/add', [IndController::class, 'AddInd'])->name('add-ind');

    Route::post('/store', [IndController::class, 'StoreInd'])->name('store-ind');

    Route::get('/manage', [IndController::class, 'ManageInd'])->name('manage-ind');

    Route::get('/edit/{id}', [IndController::class, 'EditInd'])->name('edit-ind');

    Route::post('/update', [IndController::class, 'IndUpdate'])->name('update-ind');

    Route::get('/delete/{id}', [IndController::class, 'DeleteInd'])->name('delete-ind');


});

//question section
Route::prefix('question')->group(function(){

    Route::post('/add', [questionController::class, 'AddQuestion'])->name('question-store');
    Route::get('/information', [questionController::class, 'Userinfo'])->name('add-user');
    Route::get('/user/delete/{id}', [questionController::class, 'UserDelete'])->name('client.delete');
    Route::get('/user/user/{id}', [questionController::class, 'adminPdf'])->name('admin.pdf');




});


//basic setting
Route::get('/setting', [basicsettingController::class, 'setting'])->name('add.setting');
Route::post('/setting/update', [basicsettingController::class, 'settingUpdate'])->name('setting.update');


//admin slider

Route::prefix('slide')->group(function(){

    Route::get('/add', [slideController::class, 'AddSlide'])->name('create-add');

     Route::post('/store', [slideController::class, 'StoreSlide'])->name('slide-store');

     Route::get('/manage', [slideController::class, 'ManageSlide'])->name('slide-manage');

     Route::get('/edit/{id}', [slideController::class, 'Edit'])->name('slide_edit');

     Route::post('/update', [slideController::class, 'SlideUpdate'])->name('slide-update');

     Route::get('/delete/{id}', [slideController::class, 'DeleteSlide'])->name('slide_delete');

     Route::get('/inactive/{id}', [slideController::class, 'InActiveSlide'])->name('slide_inactive');

     Route::get('/active/{id}', [slideController::class, 'ActiveSlide'])->name('slide_active');
     Route::get('/details/{id}', [slideController::class, 'slideDetails'])->name('slide_details');


});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
