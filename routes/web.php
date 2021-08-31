<?php

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
// $sms = resolve(Notification::class);
// $user = User::find(1);
// $sms->sendSms($user,2222);
// return auth()->user()->activeCode()->create([
//     'code' => 23,
//     'expired_at' => now()->addMinutes(1)
// ]);
//   return view('index');
//dd(auth()->user()->can('add user'));
//dd(auth()->user()->hasRole('teacher'));
// auth()->user()->refreshRoles();


// Route::get('/', function () {
//     dd(Product::find(1)->category->validCoupons());
// });
Route::namespace('Auth')->group(function () {
    Route::get('logout/', 'LoginController@logout')->name('logout');
    Route::get('login/', 'LoginController@showLoginForm');
    Route::post('login/', 'LoginController@login')->name('login');
    Route::post('register/', 'RegisterController@register')->name('register');
    Route::get('register/', 'RegisterController@showRegistrationForm');
});
Route::namespace('Auth\AuthCode')->group(function () {
    Route::get('loginwithcode/', 'LoginWithCodeController@showLoginForm')->name('login.with.code.form');
    Route::post('register/withcode/', 'LoginWithCodeController@register')->name('register.with.code');
    Route::post('loginwithcode/', 'LoginWithCodeController@login')->name('login_with_code');
    Route::get('verify', 'LoginWithCodeController@verifyForm')->name('verify_login_code');
    Route::post('verify', 'LoginWithCodeController@codeValidator')->name('validate_code');
});
Route::get('/', 'homecontroller@index')->name('index');
Route::get('search/', 'homecontroller@search')->name('index.search');
Route::get('rules/', 'homecontroller@rules')->name('rules');
// can:add post (for example)
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('users/', 'UserController@index')->name('users.index');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::post('users/{user}/edit', 'UserController@update')->name('users.update');

    Route::get('roles', 'RoleController@index')->name('roles.index');
    Route::post('roles', 'RoleController@store')->name('roles.store');
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
    Route::post('roles/{role}/edit', 'RoleController@update')->name('roles.update');
});

Route::group(['namespace' => 'Product'], function () {
    Route::get('products', 'ProductController@index')->name('product.index');
    Route::get('basket/add/{product}', 'BasketController@add')->name('basket.add');
    Route::get('basket/clear/', 'BasketController@clear');
    Route::get('basket/', 'BasketController@index')->name('basket.index');
    Route::post('basket/update/{product}', 'BasketController@update')->name('basket.update');
    Route::get('basket/checkout', 'BasketController@checkoutForm')->name('basket.checkout.form');
    Route::post('basket/checkout', 'BasketController@checkout')->name('basket.checkout');
    Route::get('product/{option}', 'ProductController@product')->name('product.single');
    Route::get('selller/products/{user}', 'ProductBySellerController@index')->name('product.by.seller');
    Route::get('product/attribute/{attribute}', 'AttributeController@index')->name('get.attribute.values');
});
Route::group(['namespace' => 'Product\Payment'], function () {

    Route::post('payment/{gateway}/callback', 'PaymentController@verify')->name('payment.verify');
    Route::get('payment/{gateway}/callback', 'PaymentController@verify')->name('payment.verify.get');
});

Route::group(['namespace' => 'Coupons'], function () {
    Route::post('coupons', 'CouponsController@store')->name('coupons.store');
    Route::get('coupons/remove', 'CouponsController@remove')->name('coupons.remove');
});
// Route::middleware(['cors'])->group(function () {
// });

//index
// TODO fix closure eror 24 jun
Route::group(['namespace' => 'Category'], function () {
    Route::get('productByCategory/{category}', 'CategoryController@byProduct')->name('product.by.category');
    Route::get('productByCategory', function () {
        return view('Shoping');
    });
});
Route::group(['namespace' => 'ShopingCenter'], function () {
    Route::get('shopingcenter/{center}', 'ShopingCenterController@sellers')->name('sellers.by.centers');
});
// , 'middleware' => 'role:admin'
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('settings', 'ProductSettingsController@showForm')->name('show.admin.settings.form');
    Route::get('brand/delete/{brand}', 'BrandController@delete')->name('delete.brand');
    Route::post('brand', 'BrandController@createBrand')->name('create.brand');
    Route::get('brand', 'BrandController@showForm')->name('show.brand.form');
    Route::get('brand/{brand}', 'BrandController@showEditForm')->name('show.brand.edit.form');
    Route::post('brand/{brand}', 'BrandController@edit')->name('edit.brand');

    Route::get('waranty', 'WarantyController@showForm')->name('show.waranty.form');
    Route::post('waranty', 'WarantyController@createWaranty')->name('create.waranty');
    Route::get('waranty/{waranty}', 'WarantyController@showEditForm')->name('show.waranty.edit.form');
    Route::post('waranty/{waranty}', 'WarantyController@edit')->name('edit.waranty');
    Route::get('waranty/delete/{waranty}', 'WarantyController@delete')->name('delete.waranty');

    Route::get('type', 'TypeController@showForm')->name('show.type.form');
    Route::post('type', 'TypeController@createOption')->name('create.option');
    Route::get('type/{option}', 'TypeController@showEditForm')->name('show.option.edit.form');
    Route::post('type/{option}', 'TypeController@edit')->name('edit.option');

    Route::post('settype', 'SetTypeController@createSetType')->name('create.settype');
    Route::get('settype/{value}', 'SetTypeController@showEditForm')->name('show.settype.edit.form');
    Route::post('settype/{value}', 'SetTypeController@edit')->name('edit.settype');

    Route::get('category', 'CategoryController@showForm')->name('show.form.category');
    Route::post('category', 'CategoryController@createCategory')->name('create.categroy');
    Route::get('category/{cat}', 'CategoryController@showEditForm')->name('show.category.edit.form');
    Route::put('category/{cat}', 'CategoryController@edit')->name('edit.categroy');

    Route::get('product', 'ProductController@showForm')->name('show.form.product');
    Route::post('product', 'ProductController@createProduct')->name('create.product');
    Route::get('product/{pure}', 'ProductController@editForm')->name('edit.form.product');
    Route::post('product/{pure}', 'ProductController@edit')->name('edit.product');

    Route::get('shopingcenter', 'ShopingCenterController@showForm')->name('show.form.shop');
    Route::post('shopingcenter', 'ShopingCenterController@createShop')->name('create.shop');
    Route::get('shopingcenter/{shop}', 'ShopingCenterController@showEditForm')->name('show.shop.edit.form');
    Route::post('shopingcenter/{shop}', 'ShopingCenterController@edit')->name('edit.shop');
    Route::get('shopingcenter/delete/{shop}', 'ShopingCenterController@delete')->name('delete.shop');

    Route::get('agent', 'AgentController@showForm')->name('show.agent.form');
    Route::post('agent', 'AgentController@createAgent')->name('create.agent');
    Route::get('agent/{agent}', 'AgentController@showEditForm')->name('show.agent.edit.form');
    Route::post('agent/{agent}', 'AgentController@edit')->name('edit.agent');
    Route::get('agent/delete/{agent}', 'AgentController@delete')->name('delete.agent');

    Route::get('/', 'TypeController@showDashboardForm')->name('admin.dashboard');



    Route::get('market', 'MarketController@showForm')->name('show.market.form');
    Route::post('market', 'MarketController@createMarket')->name('create.market');
    Route::get('market/{market}', 'MarketController@showEditForm')->name('show.market.edit.form');
    Route::post('market/{market}', 'MarketController@edit')->name('edit.market');
    Route::get('market/delete/{market}', 'MarketController@delete')->name('delete.market');

    Route::get('users', 'UserController@showForm')->name('show.user.form.admin');
    Route::post('users', 'UserController@createUser')->name('user.create.admin');
    Route::get('user/{user}', 'UserController@editForm')->name('show.user.edit.form.admin');
    Route::post('user/{user}', 'UserController@edit')->name('user.edit.admin');


    Route::get('market/category/{market}', 'MarketController@categoryForm')->name('show.market.category.form');
    Route::post('market/category/{market}', 'MarketController@editCategory')->name('edit.market.category');
});
Route::get('admin/settings/market', 'Admin\Market\MarketManagementController@showForm');
Route::get('admin/settings/market/{market}', 'Admin\Market\MarketManagementController@productsForm')->name('admin.market.settings');
Route::post('admin/settings/market/{market}/status', 'Admin\Market\MarketManagementController@marketStatus')->name('admin.market.status');

Route::get('admin/orders', 'Admin\OrderController@index')->name('admin.order.index');
Route::post('admin/orders', 'Admin\OrderController@changeStatus')->name('order.change.status');
Route::get('admin/orders/details/{payment}', 'Admin\OrderController@details')->name('admin.order.details');

Route::get('admin/login/', 'Admin\Auth\LoginController@showForm')->name('show.admin.login.form');
Route::post('admin/login/', 'Admin\Auth\LoginController@login')->name('admin.login');

Route::get('market/{seller}', 'Market\MarketController@index')->name('show.market');

Route::get('admin/market/setcategory/{market}', 'Admin\MarketController@setProfitForm')->name('show.setprofit.form');
Route::post('admin/market/setcategory/{market}/{category}', 'Admin\MarketController@setProfit')->name('market.setprofit');

// TODO closuer error
Route::get('filter', function () {
    return view('mousavi');
});
Route::get('etesal', function () {
    return view('etesal');
});

Route::group(['namespace' => 'Market', 'prefix' => 'market', 'middleware' => 'is.market'], function () {
    Route::get('/', 'ProductController@index')->name('market.index');
    // Route::get('variety', 'ProductController@vareityForm')->name('aaaaaa'); // TODO search this error
    Route::post('/', 'ProductController@add')->name('market.add.product');
    Route::get('variety/add/', 'ProductController@vareityFinalForm')->name('market.variety.add.form');
    Route::post('variety/add/', 'ProductController@vareityAdd')->name('market.variety.add');
    Route::get('variety/index/{product}', 'ProductController@varietyIndex')->name('market.variety.index');
    Route::get('variety/edit/{full}', 'ProductController@editFinalVarietyForm')->name('market.variety.edit.form');
    Route::post('variety/edit/{full}', 'ProductController@editFinalVariety')->name('market.variety.edit');
});
Route::get('search/Product', 'Market\ProductController@search')->name('market.index.search');
Route::get('owner/addtest', 'Market\ProductController@vareityForm')->name('market.add.product.form');
Route::get('owner/financial', 'Market\MarketController@financalForm')->name('financial.index');
Route::get('owner/orders', 'Market\MarketController@ordersForm')->name('orders.index');
Route::get('owner/product/submit', 'Market\MarketController@ProdcutRegistraitionForm')->name('Prodcut.registraition.form');
Route::post('owner/product/submit', 'Market\MarketController@ProdcutRegistraition')->name('Prodcut.registraition');
Route::get('owner/dashboard', 'Market\MarketController@dashboardForm')->name('dashboard.form');
Route::get('owner/customers', 'Market\MarketController@customers')->name('owner.customers');
Route::get('owner/product/{product}', 'Market\MarketController@showProduct')->name('owner.product');
Route::post('owner/create/brand', 'Market\BrandController@create')->name('owner.create.brand');
Route::group(['namespace' => 'File',], function () {
    Route::get('file/create', 'FileController@create')->name('file.create');
    Route::post('file', 'FileController@new')->name('file.new');
    Route::get('files', 'FileController@index')->name('files');
    Route::get('file/{file}', 'FileController@show')->name('file.show');
    Route::get('file/delete/{file}', 'FileController@delete')->name('file.delete');
});
Route::get('failed', 'homecontroller@failed')->name('response.failed');
Route::get('success', 'homecontroller@success')->name('response.success');
// use Spatie\Sitemap\SitemapGenerator;
// Route::get('sitemappp', function () {
//     $a = SitemapGenerator::create('https://iranturan.com/')
//     ->writeToFile(public_path('sitemap.xml'));
// });
Route::get('pre_registration', 'PreController@index')->name('pre.registration.form');
Route::post('pre_registration', 'PreController@create')->name('pre.registration');

Route::prefix('profile')->namespace('User')->group(function () {
    Route::get('orders/', 'OrderController@index')->name('user.orders.index');
    Route::get('orders/details/{order}', 'OrderController@details')->name('user.orders.details.form');
    Route::get('/', 'UserController@showProfile')->name('show.profile');
    Route::get('edit/', 'UserController@editForm')->name('edit.profile.form');
    Route::post('edit/', 'UserController@edit')->name('edit.profile');
});
Route::prefix('mobile')->namespace('mobile')->group(function () {
        Route::get('market/{seller}', 'MarketController@index')->name('mobile.show.market');
        Route::get('market/{market}/login/a', 'LoginController@showLoginForm')->name('mobile.login');
        Route::get('market/{market}/logout/a', 'LoginController@logout')->name('mobile.logout');
        Route::post('market/{market}/register/withcode/a', 'LoginController@register')->name('mobile.register.with.code');
        Route::post('market/{market}/loginwithcode/a', 'LoginController@login')->name('mobile.login_with_code');
        Route::get('market/{market}/verify/a', 'LoginController@verifyForm')->name('mobile.verify_login_code');
        Route::post('market/{market}/verify/a/', 'LoginController@codeValidator')->name('mobile.validate_code');
        Route::get('market/{market}/product/{option}/a', 'ProductController@product')->name('mobile.product.single');
        Route::get('market/{market}/basket/checkout/a', 'BasketController@checkoutForm')->name('mobile.basket.checkout.form');
        Route::post('market/{market}/basket/checkout/a', 'BasketController@checkout')->name('mobile.basket.checkout');
        Route::get('market/{market}/basket/a', 'BasketController@index')->name('mobile.basket.index');

        Route::post('payment/{gateway}/callback/market/{market}/', 'PaymentController@verify')->name('mobile.payment.verify');
        Route::get('payment/{gateway}/callback/market/{market}/', 'PaymentController@verify')->name('mobile.payment.verify.get');
        
        Route::get('market/{market}/failed', 'PaymentController@failed')->name('mobile.response.failed');
        Route::get('market/{market}/success', 'PaymentController@success')->name('mobile.response.success');
        
        Route::namespace('user')->group(function () {
            Route::get('market/{market}/orders/a', 'OrderController@index')->name('mobile.user.orders.index');
            Route::get('market/{market}/orders/details/{order}/a', 'OrderController@details')->name('mobile.user.orders.details.form');
            Route::get('market/{market}/a', 'UserController@showProfile')->name('mobile.show.profile');
            Route::get('market/{market}/edit/a', 'UserController@editForm')->name('mobile.edit.profile.form');
            Route::post('market/{market}/edit/a', 'UserController@edit')->name('mobile.edit.profile');
        });

    Route::get('market/{market}/category/list', 'CategoryController@list')->name('mobile.category.list');

});
