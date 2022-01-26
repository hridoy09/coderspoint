<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminCategoryController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AdminSubCategoryController;
use App\Http\Controllers\Backend\AdminSubsubCategoryController;
use App\Http\Controllers\Backend\AdminProductController;
use App\Http\Controllers\Backend\AdminSiteSettingController;
use App\Http\Controllers\Backend\AdminSiteSeoController;
use App\Http\Controllers\Backend\AdminCustomercontactController;
use App\Http\Controllers\Backend\AdminBannerController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\blogController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\AdminProjectQueryController;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\SocialShareButtonsController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ProjectController;
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

Route::get('/', [HomeController::class, 'home'])->name('frontend.index');

Route::prefix('frontend/')->group(function(){
	Route::post('customer/message/store', [HomeController::class, 'customerMessageStore'])->name('frontend.customer.message.store');
	Route::get('contact', [ContactController::class, 'contact'])->name('frontend.contact');
	Route::get('project_details', [ProjectController::class, 'projectDetailsShow'])->name('frontend.project_details');
	Route::get('blog', [ProjectController::class, 'projectDomainHosting'])->name('frontend.blog');
	Route::get('portfolio', [ProjectController::class, 'portfolio'])->name('frontend.portfolio');
	Route::get('singleblog', [ProjectController::class, 'singleblog'])->name('frontend.singleblog');
	Route::get('video_gellary', [ProjectController::class, 'video'])->name('frontend.videogellary');
	Route::post('project_details/store', [ProjectController::class, 'projectDetailsStore'])->name('frontend.project.details.store');
});


//Admin Routes

Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/login', [AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::get('/admin/logout',[AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin/profile',[AdminProfileController::class, 'getAdminData'])->name('admin.profile');
Route::post('/admin/profile/update',[AdminProfileController::class, 'updateAdminData'])->name('admin.profile.update');
Route::get('/admin/password/reset',[AdminProfileController::class, 'resetAdminPassword'])->name('admin.password.reset');
Route::post('/admin/password/update',[AdminProfileController::class, 'updateAdminPassword'])->name('admin.password.update');


//Admin Category, subcategory, Sub-sub category

Route::prefix('admin/category/')->group(function(){

	//Category
	Route::get('show', [AdminCategoryController::class, 'showCategory'])->name('admin.category.show')->middleware('auth:admin');
	Route::get('insert', [AdminCategoryController::class, 'insertCategory'])->name('admin.category.insert');
	Route::post('store', [AdminCategoryController::class, 'storeCategory'])->name('admin.category.store');
	Route::get('delete/{id}', [AdminCategoryController::class, 'deleteCategory']);
	Route::get('edit/{id}', [AdminCategoryController::class, 'editCategory']);
	Route::post('update/{id}', [AdminCategoryController::class, 'updateCategory']);

	//Subcategory
	Route::get('subcategory/show', [AdminSubCategoryController::class, 'showSubCategory'])->name('admin.category.subcategory.show');
	Route::get('subcategory/insert', [AdminSubCategoryController::class, 'insertSubCategory'])->name('admin.category.subcategory.insert');
	Route::post('subcategory/store', [AdminSubCategoryController::class, 'storeSubCategory'])->name('admin.category.subcategory.store');
	Route::get('subcategory/delete/{id}', [AdminSubCategoryController::class, 'deleteSubCategory']);
	Route::get('subcategory/edit/{id}', [AdminSubCategoryController::class, 'editSubCategory']);
	Route::post('subcategory/update/{id}', [AdminSubCategoryController::class, 'updateSubCategory']);
	Route::get('subcategory/ajax/{category_id}', [AdminSubcategoryController::class, 'GetSubCategory']);
	Route::get('subsubcategory/ajax/{subcategory_id}', [AdminSubcategoryController::class, 'GetSubSubCategory']);

	//SubSubCategory
	Route::get('/subcategory/subsubcategory/show', [AdminSubsubCategoryController::class, 'showSubsubCategory'])->name('admin.category.subsubcategory.show');
	Route::get('subcategory/subsubcategory/insert', [AdminSubsubCategoryController::class, 'insertSubsubCategory'])->name('admin.category.subcategory.subsubcategory.insert');
	Route::post('subcategory/subsubcategory/store', [AdminSubsubCategoryController::class, 'storeSubsubCategory'])->name('admin.category.subcategory.subsubcategory.store');
	Route::get('subcategory/subsubcategory/delete/{id}', [AdminSubsubCategoryController::class, 'deleteSubsubCategory']);
	Route::get('subcategory/subsubcategory/edit/{id}', [AdminSubsubCategoryController::class, 'editSubsubCategory']);
	Route::post('subcategory/subsubcategory/update/{id}', [AdminSubsubCategoryController::class, 'updateSubsubCategory']);
});


//Admin Product Management

Route::prefix('admin/product/')->group(function(){
	Route::get('show', [AdminProductController::class, 'showProduct'])->name('admin.product.show');
	Route::get('insert', [AdminProductController::class, 'insertProduct'])->name('admin.product.insert');
	Route::post('store', [AdminProductController::class, 'storeProduct'])->name('admin.product.store');
	Route::get('change_status/{id}', [AdminProductController::class, 'changeStatus']);
	Route::get('view/{id}', [AdminProductController::class, 'viewProduct']);
	Route::get('delete/{id}', [AdminProductController::class, 'deleteProduct']);
	Route::get('edit/{id}', [AdminProductController::class, 'editProduct']);
	Route::post('update/{id}', [AdminProductController::class, 'updateProduct']);
	Route::post('product-thumbnail/update/{id}', [AdminProductController::class, 'updateProductThumbnail']);
	Route::get('multiimage/delete/{id}', [AdminProductController::class, 'deleteProductMultiImageById']);
	Route::post('multiimage/update', [AdminProductController::class, 'MultiimageUpdate'])->name('admin.product.multiimage.update');

});

//Admin Site Settings

Route::prefix('admin/sitesetting/')->group(function(){
	Route::get('manage', [AdminSiteSettingController::class, 'index'])->name('admin.sitesetting.manage');
	Route::post('update', [AdminSiteSettingController::class, 'update'])->name('admin.sitesetting.update');
});

//Admin Site SEO Settings

Route::prefix('admin/siteseo/')->group(function(){
	Route::get('settings', [AdminSiteSeoController::class, 'setting'])->name('admin.siteseo.settings');
	Route::post('update', [AdminSiteSeoController::class, 'updatesetting']);
});

//Admin Banner Settings

Route::prefix('admin/banner/')->group(function(){
	Route::get('add', [AdminBannerController::class, 'addBanner'])->name('admin.banner.add');
	Route::post('store', [AdminBannerController::class, 'storeBanner'])->name('admin.banner.store');
	Route::get('all-banners', [AdminBannerController::class, 'Bannerlist'])->name('admin.banner.list');
	Route::get('change_status/{id}', [AdminBannerController::class, 'changeStatus']);
	Route::get('delete/{id}', [AdminBannerController::class, 'deleteBanner']);
});

//admin client setting
Route::prefix('admin/client/')->group(function(){
	Route::get('add', [ClientController::class, 'addClient'])->name('admin.client.add');
	Route::post('store', [ClientController::class, 'storeClient'])->name('admin.client.store');
	Route::get('all-clients', [ClientController::class, 'clientlist'])->name('admin.client.list');
	Route::get('change_status/{id}', [ClientController::class, 'changeStatus']);
	Route::get('delete/{id}', [ClientController::class, 'deleteclient']);
});


//Admin Project Inquery Settings

Route::prefix('admin/project/')->group(function(){
	Route::get('inquery', [AdminProjectQueryController::class, 'showQuery'])->name('admin.customer.inquery.show');
	Route::get('view/{id}', [AdminProjectQueryController::class, 'viewQuery']);
});

//Admin Customer Message Settings

Route::prefix('admin/customer/contact/')->group(function(){
	Route::get('list', [AdminCustomercontactController::class, 'showMessage'])->name('admin.customer.contact.list');
	Route::get('message/{id}', [AdminCustomercontactController::class, 'readMessage']);
	Route::get('delete/{id}', [AdminCustomercontactController::class, 'deleteMsg']);
});

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');



Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//blog post route
Route::prefix('admin/blog/')->group(function(){
	Route::get('add', [blogController::class, 'addBlog'])->name('admin.blog.add');
	Route::post('store', [blogController::class, 'storeBlog'])->name('admin.blog.store');
	Route::get('all-blog', [blogController::class, 'Bloglist'])->name('admin.blog.list');
	Route::get('show/{id}', [blogController::class, 'show'])->name('admin.blog.show');
	Route::get('change_status/{id}', [blogController::class, 'changeStatus']);
	Route::get('edit/{id}', [blogController::class, 'editBlog'])->name('admin.blog.edit');
	Route::post('update/{id}', [blogController::class, 'update'])->name('admin.blog.update');
	Route::get('delete/{id}', [blogController::class, 'deleteBlog']);

});


Route::prefix('admin/portfoliocategory/')->group(function(){

	//portfolio Category
	Route::get('index', [CategoryController::class, 'Index'])->name('admin.portfoliocategory.index');
	Route::post('store', [CategoryController::class, 'storeCategory'])->name('admin.portfoliocategory.store');
	Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.portfoliocategory.delete');
	Route::get('edit/{id}', [CategoryController::class, 'editCategory']);
	Route::post('update/{id}', [CategoryController::class, 'updateCategory']);
});

Route::prefix('admin/portfolio/')->group(function(){

	//portfolio
	Route::get('add', [PortfolioController::class, 'Add'])->name('admin.portfolio.add');
	Route::post('store', [PortfolioController::class, 'storePortfolio'])->name('admin.portfolio.store');
	Route::get('delete/{id}', [PortfolioController::class, 'deletePortfolio'])->name('admin.portfolio.delete');
	Route::get('edit/{id}', [PortfolioController::class, 'editPortfolio']);
	Route::post('update/{id}', [PortfolioController::class, 'updateCategory']);
	Route::get('webshow/{id}', [PortfolioController::class, 'webshow'])->name('portfolio.webshow');
});


Route::prefix('admin/video/')->group(function(){

	//portfolio
	Route::post('add', [VideoController::class, 'videoadd'])->name('admin.video.add');
	Route::get('index', [VideoController::class, 'index'])->name('admin.video.index');
	Route::get('delete/{id}', [VideoController::class, 'deletevideo'])->name('admin.video.delete');

});
