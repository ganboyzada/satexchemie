<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/manifest.json' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laravelpwa.manifest',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/offline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'laravelpwa.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::96FP8nm5JdDVF7wv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/theme-switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'themeswitch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/infos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.infos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/infos/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.infos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.status',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/bulk_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.bulk_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/projects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/projects/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/projects/delete_photo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.delete_photo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/projects/bulk_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.bulk_upload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/projects/bulk_upload_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.bulk_upload_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/projects/bulk_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.bulk_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos/bulk_upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.bulk_upload',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos/bulk_upload_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.bulk_upload_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/photos/bulk_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.bulk_delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/services/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slides',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/slides/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slides.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalogues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalogues',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/catalogues/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalogues.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partners',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/partners/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/inquiries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inquiries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TPbiuhDFkAhbqVA8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZG3OdC62ndAIVKRM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6NCQfYnlDvCZ58qW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uCFH6rDKM2iInNdM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/getlist' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.getlist',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g2lDlLyKyKsAep8y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'cart.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/update-quantity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.update_quantity',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pg/orders/payment-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pg.order.success',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/my-account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k1fjXrxcRQH00TbU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LboZsafn7GInvmRT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1py7Fs0qZscLJsd7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/catalogues' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ylZnNLw6O0eZkY1j',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mail-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mail_us',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::obuU87l5yQ0i53wa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/lang/([^/]++)(*:21)|/theme/([^/]++)(*:43)|/admin/(?|in(?|fos/(?|update/([^/]++)(*:87)|delete/([^/]++)(*:109)|edit/([^/]++)(*:130))|quiries/(?|delete/([^/]++)(*:165)|edit/([^/]++)(*:186)))|cat(?|egories/(?|update/([^/]++)(*:228)|delete/([^/]++)(*:251)|edit/([^/]++)(*:272))|alogues/(?|update/([^/]++)(*:307)|delete/([^/]++)(*:330)|edit/([^/]++)(*:351)))|p(?|rojects/(?|update/([^/]++)(*:391)|delete/([^/]++)(*:414)|edit/([^/]++)(*:435))|hotos/(?|update/([^/]++)(*:468)|delete/([^/]++)(*:491)|edit/([^/]++)(*:512))|artners/(?|update/([^/]++)(*:547)|delete/([^/]++)(*:570)|edit/([^/]++)(*:591)))|s(?|ervices/(?|update/([^/]++)(*:631)|delete/([^/]++)(*:654)|edit/([^/]++)(*:675))|lides/(?|update/([^/]++)(*:708)|delete/([^/]++)(*:731)|edit/([^/]++)(*:752)))|order(?|s/(?|delete/([^/]++)(*:790)|update/([^/]++)(*:813))|_details/([^/]++)(*:839)))|/reset\\-password/([^/]++)(*:874)|/verify\\-email/([^/]++)/([^/]++)(*:914)|/p(?|g/orders/(?|create/([^/]++)(*:954)|([^/]++)/get\\-status(*:982))|roducts/([^/]++)(*:1007))|/([^/]++)(?|(*:1029)|/([^/]++)(*:1047)))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'langswitch',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front_themeswitch',
          ),
          1 => 
          array (
            0 => 'key',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      87 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.infos.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.infos.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.infos.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inquiries.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.inquiries.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalogues.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalogues.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.catalogues.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.projects.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      512 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.photos.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partners.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partners.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.partners.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      675 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slides.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slides.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      752 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slides.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order_details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pg.order.create',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      982 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pg.order.status',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vWBmLHvRaJdTpZgE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GqIOOjXSjiwxvtTI',
          ),
          1 => 
          array (
            0 => 'categ',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::USqdodiw5tjpZBYI',
          ),
          1 => 
          array (
            0 => 'categ',
            1 => 'subcateg',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'laravelpwa.manifest' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manifest.json',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@manifestJson',
        'controller' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@manifestJson',
        'as' => 'laravelpwa.manifest',
        'namespace' => 'LaravelPWA\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'laravelpwa.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'offline',
      'action' => 
      array (
        'middleware' => 'web',
        'uses' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@offline',
        'controller' => 'LaravelPWA\\Http\\Controllers\\LaravelPWAController@offline',
        'as' => 'laravelpwa.',
        'namespace' => 'LaravelPWA\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::96FP8nm5JdDVF7wv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@aCnhNVpcac6NeCpUikabevclkUNy8ZjKXJTxnCI2UhA=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542cedb60000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::96FP8nm5JdDVF7wv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'langswitch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":394:{@ucPIUuBwA/UeRDIWonp6OIbL6Y6xYGVLhpgLYtBNyGY=.a:5:{s:3:"use";a:0:{}s:8:"function";s:181:"function ($key) {
    if(\\in_array($key, [\'en\', \'az\', \'ru\', \'de\'])){
        \\session()->put(\'locale\', $key);
        return \\back();
    }
    else{
        return \\back();
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542cedb40000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'langswitch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'front_themeswitch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'theme/{key}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":390:{@P1/SyNazSjxyXYh96MuO/pgYtn3+hNp9GY2U/aFArjU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:177:"function ($key) {
    if(\\in_array($key, [\'dark\', \'light\'])){
        \\session()->put(\'sitetheme\', $key);
        return \\back();
    }
    else{
        return \\back();
    }
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542cedaa0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'front_themeswitch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'themeswitch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/theme-switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\Controller@changeTheme',
        'controller' => 'App\\Http\\Controllers\\Controller@changeTheme',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'themeswitch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":262:{@DsCzHGpl7xffo5XuWHl9xmCAYRgW6O1aMAhtb9AROfk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () { return \\view(\'admin.pages.index\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542cedae0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.infos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/infos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":261:{@RsRxvxiklrpIb/S2NIiqUMcKYYmIvqF+EQEPWbVMNV8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:49:"function () { return \\view(\'admin.pages.info\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542cedac0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.infos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.infos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/infos/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ContentController@store',
        'controller' => 'App\\Http\\Controllers\\ContentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.infos.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.infos.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/infos/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ContentController@update',
        'controller' => 'App\\Http\\Controllers\\ContentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.infos.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.infos.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/infos/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ContentController@destroy',
        'controller' => 'App\\Http\\Controllers\\ContentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.infos.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.infos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/infos/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ContentController@edit',
        'controller' => 'App\\Http\\Controllers\\ContentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.infos.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":267:{@VYPU2PJE6wY6CRsD7TZ26/HrvvkXrC60yiT4wfY8FGM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () { return \\view(\'admin.pages.categories\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ceda60000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/categories/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\CategoryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories.status' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@status',
        'controller' => 'App\\Http\\Controllers\\CategoryController@status',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.categories.bulk_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories/bulk_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@bulk_delete',
        'controller' => 'App\\Http\\Controllers\\CategoryController@bulk_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories.bulk_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/projects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":265:{@rVxZs29hrJoU99XWMWDlrPWenjXoy0RN4/KIPijkxOU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:53:"function () { return \\view(\'admin.pages.projects\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced5e0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/projects/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/projects/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@update',
        'controller' => 'App\\Http\\Controllers\\ProjectController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/projects/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProjectController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.delete_photo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/projects/delete_photo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@delete_photo',
        'controller' => 'App\\Http\\Controllers\\ProjectController@delete_photo',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.delete_photo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/projects/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@edit',
        'controller' => 'App\\Http\\Controllers\\ProjectController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.bulk_upload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/projects/bulk_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@bulk_upload',
        'controller' => 'App\\Http\\Controllers\\ProjectController@bulk_upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.bulk_upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.bulk_upload_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/projects/bulk_upload_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@bulk_upload_store',
        'controller' => 'App\\Http\\Controllers\\ProjectController@bulk_upload_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.bulk_upload_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.projects.bulk_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/projects/bulk_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ProjectController@bulk_delete',
        'controller' => 'App\\Http\\Controllers\\ProjectController@bulk_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.projects.bulk_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":263:{@9IQ4LiI25zur4oTT8CXoiwqBbetRsddKFEcchEPwU8w=.a:5:{s:3:"use";a:0:{}s:8:"function";s:51:"function () { return \\view(\'admin.pages.photos\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced540000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@store',
        'controller' => 'App\\Http\\Controllers\\PhotoController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@update',
        'controller' => 'App\\Http\\Controllers\\PhotoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/photos/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@destroy',
        'controller' => 'App\\Http\\Controllers\\PhotoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@edit',
        'controller' => 'App\\Http\\Controllers\\PhotoController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.bulk_upload' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/photos/bulk_upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@bulk_upload',
        'controller' => 'App\\Http\\Controllers\\PhotoController@bulk_upload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.bulk_upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.bulk_upload_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos/bulk_upload_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@bulk_upload_store',
        'controller' => 'App\\Http\\Controllers\\PhotoController@bulk_upload_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.bulk_upload_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.photos.bulk_delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/photos/bulk_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PhotoController@bulk_delete',
        'controller' => 'App\\Http\\Controllers\\PhotoController@bulk_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.photos.bulk_delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":265:{@nRLHyWOvnY26a667a2OIuqBdBWHb5iqOQLn4kDqwPnM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:53:"function () { return \\view(\'admin.pages.services\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced430000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.services.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/services/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\ServiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.services.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.services.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/services/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\ServiceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.services.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.services.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/services/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\ServiceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.services.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.services.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/services/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\ServiceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.services.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slides' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":263:{@xTLkzWHy6QWXfIPw9mHmODSVBs3H0alcivsgkq028IE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:51:"function () { return \\view(\'admin.pages.slides\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced450000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.slides',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slides.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slides/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\SlideController@store',
        'controller' => 'App\\Http\\Controllers\\SlideController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.slides.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slides.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slides/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\SlideController@update',
        'controller' => 'App\\Http\\Controllers\\SlideController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.slides.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slides.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/slides/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\SlideController@destroy',
        'controller' => 'App\\Http\\Controllers\\SlideController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.slides.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.slides.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slides/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\SlideController@edit',
        'controller' => 'App\\Http\\Controllers\\SlideController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.slides.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalogues' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalogues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":267:{@w9mmFaj5+pBkSIMuhNRoQZMn/JJCMcBZooMjvyIMrrU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () { return \\view(\'admin.pages.catalogues\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced7f0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.catalogues',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalogues.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalogues/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CatalogueController@store',
        'controller' => 'App\\Http\\Controllers\\CatalogueController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.catalogues.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalogues.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/catalogues/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CatalogueController@update',
        'controller' => 'App\\Http\\Controllers\\CatalogueController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.catalogues.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalogues.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/catalogues/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CatalogueController@destroy',
        'controller' => 'App\\Http\\Controllers\\CatalogueController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.catalogues.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.catalogues.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/catalogues/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\CatalogueController@edit',
        'controller' => 'App\\Http\\Controllers\\CatalogueController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.catalogues.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.partners' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":265:{@Eo0vZ53fqufhPZAkY7TSojC+gWnNeVHbDbiqTF7qTLE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:53:"function () { return \\view(\'admin.pages.partners\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced710000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partners',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.partners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PartnerController@store',
        'controller' => 'App\\Http\\Controllers\\PartnerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partners.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.partners.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/partners/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PartnerController@update',
        'controller' => 'App\\Http\\Controllers\\PartnerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partners.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.partners.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/partners/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PartnerController@destroy',
        'controller' => 'App\\Http\\Controllers\\PartnerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partners.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.partners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/partners/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\PartnerController@edit',
        'controller' => 'App\\Http\\Controllers\\PartnerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.partners.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inquiries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inquiries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":266:{@tN/hH64Apbm/J/i8/x+5KTJX9250KVuzUZ7g/QX02no=.a:5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () { return \\view(\'admin.pages.inquiries\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced6b0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inquiries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inquiries.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/inquiries/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\InquiryController@destroy',
        'controller' => 'App\\Http\\Controllers\\InquiryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inquiries.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.inquiries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/inquiries/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'App\\Http\\Controllers\\InquiryController@edit',
        'controller' => 'App\\Http\\Controllers\\InquiryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.inquiries.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":271:{@oiHWwTCARfqGlhgLzHB2QikQdqabolyjqFihWczHkbI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:59:"function () { return \\view(\'Amoshop.Views.admin.orders\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced6f0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.orders.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/orders/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\OrderController@destroy',
        'controller' => 'Modules\\Amoshop\\Controllers\\OrderController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.orders.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/orders/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\OrderController@update',
        'controller' => 'Modules\\Amoshop\\Controllers\\OrderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.orders.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.order_details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order_details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin_check',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":363:{@M8Z0Q1xRwrRxrT1qGpSdY1OKbMwWTtH2/ePUEMpe5gw=.a:5:{s:3:"use";a:0:{}s:8:"function";s:150:"function ($id) { 
    $order = \\Modules\\Amoshop\\Models\\Order::find($id);
    return \\view(\'Amoshop.Views.admin.order_details\', \\compact([\'order\']));
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced630000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.order_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":258:{@Hre+a8kRSIo1Np3VY9qcHiRPgQ9BCb4SwkXRBj02SIw=.a:5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ceda80000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TPbiuhDFkAhbqVA8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::TPbiuhDFkAhbqVA8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZG3OdC62ndAIVKRM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ZG3OdC62ndAIVKRM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6NCQfYnlDvCZ58qW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::6NCQfYnlDvCZ58qW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uCFH6rDKM2iInNdM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add_order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":586:{@F3rZ2/LrRTvFccHesEP4sCtnabhU6yWqSu2F3VdVGcY=.a:5:{s:3:"use";a:0:{}s:8:"function";s:373:"function (\\Illuminate\\Http\\Request $request) {
    $accessToken = \\App\\Http\\Controllers\\ApiController::getAccess();

    $response = \\Http::withHeaders([
        \'Accept\' => \'application/json\',
        \'Authorization\' => \'Bearer \'.$accessToken,
    ])->post(\'https://crm.amotech.tech/api/orders/store?order=\'.\\json_encode($request->item));

    return $response->json();

}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced120000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::uCFH6rDKM2iInNdM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.getlist' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/getlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\CartController@getlist',
        'controller' => 'Modules\\Amoshop\\Controllers\\CartController@getlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart.getlist',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g2lDlLyKyKsAep8y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":799:{@HYdTylPNvoJPotfUDUpH5PQkuN+gmUqaj/XgVfQgTo4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:586:"function () {
    if(\\Auth::check()){
        if(\\Auth::user()->role == \'customer\'){
            $cart_items = \\Modules\\Amoshop\\Models\\CartItem::where(\'customer_id\', \\Auth::id())->get();
            if(empty($cart_items)){
                return \\route(\'home\');
            }
            $session_retrieve = 0;
        }
    } else{
        $cart_items = \\session(\'cart_items\');
        if(empty($cart_items)){
            return \\route(\'home\');
        }
        $session_retrieve = 1;
    }
    return \\view(\'frontend.pages.checkout\', \\compact([\'cart_items\', \'session_retrieve\'])); 
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced170000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::g2lDlLyKyKsAep8y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\CartController@add',
        'controller' => 'Modules\\Amoshop\\Controllers\\CartController@add',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\CartController@checkout',
        'controller' => 'Modules\\Amoshop\\Controllers\\CartController@checkout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\CartController@delete',
        'controller' => 'Modules\\Amoshop\\Controllers\\CartController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'cart.update_quantity' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/update-quantity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\CartController@updateQuantity',
        'controller' => 'Modules\\Amoshop\\Controllers\\CartController@updateQuantity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'cart.update_quantity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pg.order.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pg/orders/create/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\KapitalPGController@createOrder',
        'controller' => 'Modules\\Amoshop\\Controllers\\KapitalPGController@createOrder',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'pg.order.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pg.order.success' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pg/orders/payment-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\KapitalPGController@paymentSuccess',
        'controller' => 'Modules\\Amoshop\\Controllers\\KapitalPGController@paymentSuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'pg.order.success',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'pg.order.status' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pg/orders/{order_id}/get-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\KapitalPGController@getOrderStatus',
        'controller' => 'Modules\\Amoshop\\Controllers\\KapitalPGController@getOrderStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'pg.order.status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Amoshop\\Controllers\\MainController@account',
        'controller' => 'Modules\\Amoshop\\Controllers\\MainController@account',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":288:{@kaIJrdmVjBgFabcbundoyj+dPMFyJawjtxgwpibkRZc=.a:5:{s:3:"use";a:0:{}s:8:"function";s:76:"function () { return \\view(\'frontend.pages.index\')->with(\'is_home\', true); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced0c0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k1fjXrxcRQH00TbU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":265:{@X6Ei0Zbd6iKHwV+QKiiCb58WSommeZ7WklK9M51aeNk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:53:"function () { return \\view(\'frontend.pages.about\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced020000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::k1fjXrxcRQH00TbU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LboZsafn7GInvmRT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":267:{@oZcA1wDzZDFsIzItgGC86HuAD+jfilL7did/mXLXpCM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () { return \\view(\'frontend.pages.contact\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced000000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::LboZsafn7GInvmRT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1py7Fs0qZscLJsd7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":267:{@EsCKOH09mkj3ZBI3IDIdLKoZaf1rex1FO0FTUGEi8Z4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:55:"function () { return \\view(\'frontend.pages.gallery\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced060000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::1py7Fs0qZscLJsd7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ylZnNLw6O0eZkY1j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'catalogues',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":270:{@aCp36BKdn0skAIY2M+zurzO3mG6T+IuS/JQyUen8zEE=.a:5:{s:3:"use";a:0:{}s:8:"function";s:58:"function () { return \\view(\'frontend.pages.catalogues\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced040000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::ylZnNLw6O0eZkY1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'mail_us' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mail-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'App\\Http\\Controllers\\InquiryController@send_inquiry',
        'controller' => 'App\\Http\\Controllers\\InquiryController@send_inquiry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'mail_us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::obuU87l5yQ0i53wa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":268:{@RjjsCgRHCLeKTfCDT8MKalJ5Opi+o8lvr9ihaJtRJi8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () { return \\view(\'frontend.pages.projects\'); }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced390000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::obuU87l5yQ0i53wa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vWBmLHvRaJdTpZgE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":591:{@vMfJn+Opcv9EfXLzrDwg6fnsyyL1J69s0ssd47ikqd4=.a:5:{s:3:"use";a:0:{}s:8:"function";s:378:"function ($id) {
        $project = \\App\\Models\\Project::where(\'id\', $id)->firstorfail();
        $category = \\App\\Models\\Navigation::where(\'id\', $project->categ_id)->first();
        $project_photos = \\App\\Models\\ProjectPhoto::where(\'project_id\', $project->id)->get();

        return \\view(\'frontend.pages.project\', \\compact([\'project_photos\', \'project\', \'category\'])); 
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced3f0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::vWBmLHvRaJdTpZgE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GqIOOjXSjiwxvtTI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{categ}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":503:{@//oXpN1YnrRsEy9XDRVLPNiHgaUHvHfYysrV9pIWpyk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:290:"function ($categ) {
        $category = \\App\\Models\\Navigation::where(\'route\', $categ)->first();
        $subcategories = \\App\\Models\\Navigation::where(\'parent_id\', $category->id)->get();
        return \\view(\'frontend.pages.projects_slider\', \\compact([\'category\', \'subcategories\']));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced3d0000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::GqIOOjXSjiwxvtTI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::USqdodiw5tjpZBYI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{categ}/{subcateg}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'lang_check',
          2 => 'reg_visit',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":538:{@KC/PdMGXMcd9bUBU3gtd2q6apxTAABXdIGTmc+Vq+8Q=.a:5:{s:3:"use";a:0:{}s:8:"function";s:325:"function ($categ, $subcateg) { 
        $category = \\App\\Models\\Navigation::where(\'route\', $subcateg)->where(\'parent_id\', \'!=\', null)->first();
        $projects = \\App\\Models\\Project::where(\'categ_id\', $category->id)->get();
        
        return \\view(\'frontend.pages.projects\', \\compact([\'projects\', \'category\']));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000542ced330000000050431835";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::USqdodiw5tjpZBYI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
