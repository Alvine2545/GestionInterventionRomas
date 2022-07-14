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
<<<<<<< HEAD
            '_route' => 'generated::THZ8QknoJiBxgXPj',
=======
            '_route' => 'generated::bvlurHf0uVoiGP79',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
<<<<<<< HEAD
            '_route' => 'generated::ORFlwIQ068bNESdx',
=======
            '_route' => 'generated::jQqSlRZeHCW8Hogu',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7SqUr9rYZ5hM5ZSZ',
=======
            '_route' => 'generated::3f4dZsuoRc2Sc0vS',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
            '_route' => 'password.confirm',
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
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
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
      '/two-factor-challenge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login',
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
<<<<<<< HEAD
            '_route' => 'generated::7YLrobOiEImfv5F9',
=======
            '_route' => 'generated::UKnSlmv4X9FKPI1M',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/user/two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.enable',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.confirm',
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
      '/user/two-factor-qr-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.qr-code',
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
      '/user/two-factor-secret-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.secret-key',
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
      '/user/two-factor-recovery-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.recovery-codes',
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
<<<<<<< HEAD
            '_route' => 'generated::t8Pan8QO42WRGeoY',
=======
            '_route' => 'generated::yiuP9mDELqmBsEjI',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.show',
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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::OTjkLsvViCajAPSB',
=======
            '_route' => 'generated::S8kColpHPoRG78xZ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
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
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::03MJDEVU5FVnvtxj',
=======
            '_route' => 'generated::N1z9kVRgR2a4ZjDN',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::wjd0XLR3Z1QVmWi7',
=======
            '_route' => 'generated::tKSGF5ZApp1NpNNW',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
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
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
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
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::x72gQ1Ky8nQwqcJ8',
=======
            '_route' => 'generated::OcpChaY6kf4kdm2F',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oL3ZZbs0ZCpt74KZ',
=======
            '_route' => 'generated::1UIYY8XZbx0HqLaO',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/in' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::c2KswdzSTub5XEC5',
=======
            '_route' => 'generated::B4FiXE9ezDCSNkji',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
<<<<<<< HEAD
            '_route' => 'generated::oUhh3maCqABvignI',
=======
            '_route' => 'generated::RcROT9K4xkafa9l4',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/connexion' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::oyjHTnMuc97b2KZs',
=======
            '_route' => 'generated::5x8CL0qAUaNO7ueY',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/client/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8u2uu6oLGO12pP5q',
=======
            '_route' => 'generated::Waqm6O5uQCDLKqNq',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/client/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RA90WTR9Qa7DU2Ri',
=======
            '_route' => 'generated::rWqZMIozSyUnaCj9',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
<<<<<<< HEAD
      '/admin/planning' => 
=======
      '/admin/panne' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LZqLKUBzuLBbQdvS',
=======
            '_route' => 'generated::lMPWmHo6EoYWIOkr',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/client/liste' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::joRoWiDIBat7aR1X',
=======
            '_route' => 'generated::lcFloZGuDrulWwD8',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/client/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::zhzRAin2K7ElXCXd',
=======
            '_route' => 'generated::V1uk544IiesGAzZz',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/client/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::JHtQa2TQnlOr3qYW',
=======
            '_route' => 'generated::fGLzzyXHRnOAd7kJ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/produit/liste' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Q6HTYXWUGVAJHVVJ',
=======
            '_route' => 'generated::bxrqVQvsX6jgFuyj',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/produit/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dvRyIzy4jdAh7afD',
=======
            '_route' => 'generated::NkezLm0pdMjFoEgE',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/produit/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::U3zuzmguHn8z6qPW',
=======
            '_route' => 'generated::6EA7ndzh2lISlFXk',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/typedevis/liste' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::iNWzm7Mp0je6dy7d',
=======
            '_route' => 'generated::9l8WxGeNCPGtQ6hr',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/typedevis/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::e85ijz401rDGhY5R',
=======
            '_route' => 'generated::5DvpKv8ZPqDVDWnf',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/typedevis/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ZPeGIgTz7GHfWOBn',
=======
            '_route' => 'generated::Jnmtb6Ow08m8U36k',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/typeintervention/liste' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IxGbE2C7Oz0jaEoQ',
=======
            '_route' => 'generated::l8iB5fb1t23aG8M4',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/typeintervention/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::s0DdFjMrBfVFl1ql',
=======
            '_route' => 'generated::4h5t1YUa9DYa8laC',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/typeintervention/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::abyKSdHwTVBTSR4O',
=======
            '_route' => 'generated::fA0zrRRupIGJttTy',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/installation/liste' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ShD73bWO3Q94aq1R',
=======
            '_route' => 'generated::y4MUHtknIyC8qCHq',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/installation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::k1PJK5vdAPV2C9RV',
=======
            '_route' => 'generated::erPg3U8h0Ay6ORys',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/admin/installation/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::IFB8CvVtr7KCzKTe',
=======
            '_route' => 'generated::tyGSIW0r0T4y4bUZ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/instore' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::boSxmWbLqgWedqtf',
=======
            '_route' => 'generated::aN9KMLCaAPoW2q1n',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/technicien/in' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xJp1ysVS4fx6trxX',
=======
            '_route' => 'generated::m01bBxcRM4IRsVVq',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/pannes/liste' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::RUBY1WNk1OBgaX4f',
=======
            '_route' => 'generated::XUcxAFpkVaY1cUgF',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/pannes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::6QMH3halYlJeKokK',
=======
            '_route' => 'generated::JZBzrj0eLvmuE6VN',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/pannes/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vavWeKxlPlpzmVqN',
=======
            '_route' => 'generated::qBfFS1HLvJIH7ejW',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      '/plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TdelOi6EJbzvHBTj',
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
      0 => '{^(?|/reset\\-password/([^/]++)(*:32)|/livewire/(?|message/([^/]++)(*:68)|preview\\-file/([^/]++)(*:97))|/admin/(?|client/(?|show/([^/]++)(*:138)|([^/]++)/edit(*:159)|update/([^/]++)(*:182)|destroy/([^/]++)(*:206))|produit/(?|show/([^/]++)(*:239)|edit/([^/]++)(*:260)|update/([^/]++)(*:283)|destroy/([^/]++)(*:307))|type(?|devis/(?|show/([^/]++)(*:345)|edit/([^/]++)(*:366)|update/([^/]++)(*:389)|destroy/([^/]++)(*:413))|intervention/(?|show/([^/]++)(*:451)|edit/([^/]++)(*:472)|update/([^/]++)(*:495)|destroy/([^/]++)(*:519)))|installation/(?|show/([^/]++)(*:558)|([^/]++)/edit(*:579)|update/([^/]++)(*:602)|destroy/([^/]++)(*:626)))|/pannes/(?|show/([^/]++)(*:660)|edit/([^/]++)(*:681)|update/([^/]++)(*:704)|destroy/([^/]++)(*:728)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
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
      68 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
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
      97 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
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
      138 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::7kvF9DHQVHxacF48',
=======
            '_route' => 'generated::5ZvX9zdUJSa4Hjo9',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      159 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::vfRPNuBWe0ClP5Qz',
=======
            '_route' => 'generated::suMUMzN9DDZbFN3j',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
          5 => false,
          6 => NULL,
        ),
      ),
      182 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::R4Eo3DmSUUA2zDcD',
=======
            '_route' => 'generated::CikQy9PlJOzIengJ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      206 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::xZgjPXcUjfL89V6S',
=======
            '_route' => 'generated::IKYK8DJcUvjm9Fl3',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::5uDvnC9VuyxRr3ZU',
=======
            '_route' => 'generated::4Mz0ZD0SHOCT6yTl',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      260 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::dGB2MDlhafb2Nusz',
=======
            '_route' => 'generated::SrIRabBagnTYCjk2',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      283 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::ElWCG6vjXND8sZq7',
=======
            '_route' => 'generated::rAZ9DZEQhjZB0YDn',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
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
<<<<<<< HEAD
            '_route' => 'generated::TdleMl9IC76GlTsc',
=======
            '_route' => 'generated::3EqVT9EP4Tbxic3b',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::QpdW5j8txwXt5dSq',
=======
            '_route' => 'generated::6qQMpIJ0I0Demyux',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8qc3U7jpOXlszls5',
=======
            '_route' => 'generated::iEBlSgItab50nQZ7',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      389 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::cXCDvOxiUNoEESuE',
=======
            '_route' => 'generated::dra0t6XPZEUFw5xT',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      413 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::4PEhdoJXvR04qEEo',
=======
            '_route' => 'generated::8nhH4ezGXwpAMkMB',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      451 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::or2P7BKPtSPTkfiB',
=======
            '_route' => 'generated::o6DRUuRaReUNRyr0',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      472 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::Pz51uNLspqvFszdy',
=======
            '_route' => 'generated::Jd4gb04lyjOdLOKX',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      495 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::GTAZSWdrY6DGxgGy',
=======
            '_route' => 'generated::7Yb9XWerlchAXj9j',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      519 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::1AkEc7gEcP25Yni8',
=======
            '_route' => 'generated::EsgeggCf7xqQDyk5',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::uGEvL5EETn7wmccF',
=======
            '_route' => 'generated::n7Q6dMJSaDNe2hDC',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      579 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::YQ4XOFrdiJRfXNf2',
=======
            '_route' => 'generated::yrrf7vVbh0QfSbZJ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
          5 => false,
          6 => NULL,
        ),
      ),
      602 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::LvQ9uu6gK0iRT3JG',
=======
            '_route' => 'generated::FDXAw0BdvUN95xmW',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      626 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::9G8Ue5puTpHF4HTm',
=======
            '_route' => 'generated::JJEj0lF4F57x3LdA',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      660 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::J25gz0C97HEH510f',
=======
            '_route' => 'generated::e2ywGBDblI4d1PUD',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      681 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bLFqMU3BFslFbxai',
=======
            '_route' => 'generated::iB2nGnDY19HLN2Fu',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      704 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::bflnwvGvDfhkMeRd',
=======
            '_route' => 'generated::cf3ZLHzFAQGdiiQk',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< HEAD
            '_route' => 'generated::8qqPK7BsHnUDp1Ee',
=======
            '_route' => 'generated::a8zuz49W07b6T3vp',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::THZ8QknoJiBxgXPj' => 
=======
    'generated::bvlurHf0uVoiGP79' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::THZ8QknoJiBxgXPj',
=======
        'as' => 'generated::bvlurHf0uVoiGP79',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
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
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ORFlwIQ068bNESdx' => 
=======
    'generated::jQqSlRZeHCW8Hogu' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ORFlwIQ068bNESdx',
=======
        'as' => 'generated::jQqSlRZeHCW8Hogu',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
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
      'withTrashed' => false,
    ),
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7SqUr9rYZ5hM5ZSZ' => 
=======
    'generated::3f4dZsuoRc2Sc0vS' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7SqUr9rYZ5hM5ZSZ',
=======
        'as' => 'generated::3f4dZsuoRc2Sc0vS',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
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
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
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
      'withTrashed' => false,
    ),
    'two-factor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7YLrobOiEImfv5F9' => 
=======
    'generated::UKnSlmv4X9FKPI1M' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:two-factor',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7YLrobOiEImfv5F9',
=======
        'as' => 'generated::UKnSlmv4X9FKPI1M',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
    'two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.enable',
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
      'withTrashed' => false,
    ),
    'two-factor.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirmed-two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.confirm',
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
      'withTrashed' => false,
    ),
    'two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.disable',
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
      'withTrashed' => false,
    ),
    'two-factor.qr-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-qr-code',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.qr-code',
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
      'withTrashed' => false,
    ),
    'two-factor.secret-key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-secret-key',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.secret-key',
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
      'withTrashed' => false,
    ),
    'two-factor.recovery-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.recovery-codes',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::t8Pan8QO42WRGeoY' => 
=======
    'generated::yiuP9mDELqmBsEjI' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::t8Pan8QO42WRGeoY',
=======
        'as' => 'generated::yiuP9mDELqmBsEjI',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
    'profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.show',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::OTjkLsvViCajAPSB' => 
=======
    'generated::S8kColpHPoRG78xZ' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
<<<<<<< HEAD
        'as' => 'generated::OTjkLsvViCajAPSB',
=======
        'as' => 'generated::S8kColpHPoRG78xZ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::03MJDEVU5FVnvtxj' => 
=======
    'generated::N1z9kVRgR2a4ZjDN' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
<<<<<<< HEAD
        'as' => 'generated::03MJDEVU5FVnvtxj',
=======
        'as' => 'generated::N1z9kVRgR2a4ZjDN',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::wjd0XLR3Z1QVmWi7' => 
=======
    'generated::tKSGF5ZApp1NpNNW' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
<<<<<<< HEAD
        'as' => 'generated::wjd0XLR3Z1QVmWi7',
=======
        'as' => 'generated::tKSGF5ZApp1NpNNW',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::x72gQ1Ky8nQwqcJ8' => 
=======
    'generated::OcpChaY6kf4kdm2F' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006290000000000000000";}";s:4:"hash";s:44:"J86q70zYbUN4guWC+tNC5Hz6r71ip9dp9ky32nhDnfY=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::x72gQ1Ky8nQwqcJ8',
=======
        'as' => 'generated::OcpChaY6kf4kdm2F',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oL3ZZbs0ZCpt74KZ' => 
=======
    'generated::1UIYY8XZbx0HqLaO' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:267:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:49:"function () {
    return \\view(\'homeClient\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000062b0000000000000000";}";s:4:"hash";s:44:"u5pmsYs4EwwfSlqShqQYv0TjeZZvqkWuUMkcOZpucBg=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oL3ZZbs0ZCpt74KZ',
=======
        'as' => 'generated::1UIYY8XZbx0HqLaO',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::c2KswdzSTub5XEC5' => 
=======
    'generated::B4FiXE9ezDCSNkji' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:290:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:72:"function () {
    return \\view(\'Installation/create_installations\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000062d0000000000000000";}";s:4:"hash";s:44:"i755Uy+5F8u4pc21IaOvu4G5xAVle7WMl91p2/mBix8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::c2KswdzSTub5XEC5',
=======
        'as' => 'generated::B4FiXE9ezDCSNkji',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oUhh3maCqABvignI' => 
=======
    'generated::RcROT9K4xkafa9l4' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:264:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:46:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000062f0000000000000000";}";s:4:"hash";s:44:"NinvbaDNhbyzTbVAuPY786s8H8doaCtVcgyg13WhcuI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oUhh3maCqABvignI',
=======
        'as' => 'generated::RcROT9K4xkafa9l4',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::oyjHTnMuc97b2KZs' => 
=======
    'generated::5x8CL0qAUaNO7ueY' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'connexion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:266:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:48:"function () {
    return \\view(\'connexion\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006310000000000000000";}";s:4:"hash";s:44:"idcLmKkdOOiGlojuklYHSwFDlkrL3E5i+gZPQcalVr8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::oyjHTnMuc97b2KZs',
=======
        'as' => 'generated::5x8CL0qAUaNO7ueY',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8u2uu6oLGO12pP5q' => 
=======
    'generated::Waqm6O5uQCDLKqNq' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@verifyclient',
        'controller' => 'App\\Http\\Controllers\\ClientController@verifyclient',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8u2uu6oLGO12pP5q',
=======
        'as' => 'generated::Waqm6O5uQCDLKqNq',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RA90WTR9Qa7DU2Ri' => 
=======
    'generated::rWqZMIozSyUnaCj9' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'client/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@connexion',
        'controller' => 'App\\Http\\Controllers\\ClientController@connexion',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RA90WTR9Qa7DU2Ri',
=======
        'as' => 'generated::rWqZMIozSyUnaCj9',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
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
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:274:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () {
        return \\view(\'dashboard\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006370000000000000000";}";s:4:"hash";s:44:"3o9kgmCreTNqElT9stIGPW2tcpFVP7g20o3nwkLDBjk=";}}',
        'namespace' => NULL,
        'prefix' => '',
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LZqLKUBzuLBbQdvS' => 
=======
    'generated::lMPWmHo6EoYWIOkr' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
<<<<<<< HEAD
      'uri' => 'admin/planning',
=======
      'uri' => 'admin/panne',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
<<<<<<< HEAD
        'uses' => 'App\\Http\\Livewire\\Planification\\PlanningComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\Planification\\PlanningComponent',
=======
        'uses' => 'App\\Http\\Livewire\\Adminpanne@__invoke',
        'controller' => 'App\\Http\\Livewire\\Adminpanne',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LZqLKUBzuLBbQdvS',
=======
        'as' => 'generated::lMPWmHo6EoYWIOkr',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::joRoWiDIBat7aR1X' => 
=======
    'generated::lcFloZGuDrulWwD8' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/liste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@index',
        'controller' => 'App\\Http\\Controllers\\ClientController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::joRoWiDIBat7aR1X',
=======
        'as' => 'generated::lcFloZGuDrulWwD8',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::zhzRAin2K7ElXCXd' => 
=======
    'generated::V1uk544IiesGAzZz' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@create',
        'controller' => 'App\\Http\\Controllers\\ClientController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::zhzRAin2K7ElXCXd',
=======
        'as' => 'generated::V1uk544IiesGAzZz',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::7kvF9DHQVHxacF48' => 
=======
    'generated::5ZvX9zdUJSa4Hjo9' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@show',
        'controller' => 'App\\Http\\Controllers\\ClientController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::7kvF9DHQVHxacF48',
=======
        'as' => 'generated::5ZvX9zdUJSa4Hjo9',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::JHtQa2TQnlOr3qYW' => 
=======
    'generated::fGLzzyXHRnOAd7kJ' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/client/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@store',
        'controller' => 'App\\Http\\Controllers\\ClientController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::JHtQa2TQnlOr3qYW',
=======
        'as' => 'generated::fGLzzyXHRnOAd7kJ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vfRPNuBWe0ClP5Qz' => 
=======
    'generated::suMUMzN9DDZbFN3j' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/client/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@edit',
        'controller' => 'App\\Http\\Controllers\\ClientController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vfRPNuBWe0ClP5Qz',
=======
        'as' => 'generated::suMUMzN9DDZbFN3j',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::R4Eo3DmSUUA2zDcD' => 
=======
    'generated::CikQy9PlJOzIengJ' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/client/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@update',
        'controller' => 'App\\Http\\Controllers\\ClientController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::R4Eo3DmSUUA2zDcD',
=======
        'as' => 'generated::CikQy9PlJOzIengJ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xZgjPXcUjfL89V6S' => 
=======
    'generated::IKYK8DJcUvjm9Fl3' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/client/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'App\\Http\\Controllers\\ClientController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xZgjPXcUjfL89V6S',
=======
        'as' => 'generated::IKYK8DJcUvjm9Fl3',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Q6HTYXWUGVAJHVVJ' => 
=======
    'generated::bxrqVQvsX6jgFuyj' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/produit/liste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@index',
        'controller' => 'App\\Http\\Controllers\\ProduitController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Q6HTYXWUGVAJHVVJ',
=======
        'as' => 'generated::bxrqVQvsX6jgFuyj',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dvRyIzy4jdAh7afD' => 
=======
    'generated::NkezLm0pdMjFoEgE' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/produit/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@create',
        'controller' => 'App\\Http\\Controllers\\ProduitController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dvRyIzy4jdAh7afD',
=======
        'as' => 'generated::NkezLm0pdMjFoEgE',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::5uDvnC9VuyxRr3ZU' => 
=======
    'generated::4Mz0ZD0SHOCT6yTl' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/produit/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@show',
        'controller' => 'App\\Http\\Controllers\\ProduitController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::5uDvnC9VuyxRr3ZU',
=======
        'as' => 'generated::4Mz0ZD0SHOCT6yTl',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::U3zuzmguHn8z6qPW' => 
=======
    'generated::6EA7ndzh2lISlFXk' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/produit/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@store',
        'controller' => 'App\\Http\\Controllers\\ProduitController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::U3zuzmguHn8z6qPW',
=======
        'as' => 'generated::6EA7ndzh2lISlFXk',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::dGB2MDlhafb2Nusz' => 
=======
    'generated::SrIRabBagnTYCjk2' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/produit/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@edit',
        'controller' => 'App\\Http\\Controllers\\ProduitController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::dGB2MDlhafb2Nusz',
=======
        'as' => 'generated::SrIRabBagnTYCjk2',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ElWCG6vjXND8sZq7' => 
=======
    'generated::rAZ9DZEQhjZB0YDn' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/produit/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@update',
        'controller' => 'App\\Http\\Controllers\\ProduitController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ElWCG6vjXND8sZq7',
=======
        'as' => 'generated::rAZ9DZEQhjZB0YDn',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::TdleMl9IC76GlTsc' => 
=======
    'generated::3EqVT9EP4Tbxic3b' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/produit/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProduitController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProduitController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::TdleMl9IC76GlTsc',
=======
        'as' => 'generated::3EqVT9EP4Tbxic3b',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::iNWzm7Mp0je6dy7d' => 
=======
    'generated::9l8WxGeNCPGtQ6hr' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typedevis/liste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@index',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::iNWzm7Mp0je6dy7d',
=======
        'as' => 'generated::9l8WxGeNCPGtQ6hr',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::e85ijz401rDGhY5R' => 
=======
    'generated::5DvpKv8ZPqDVDWnf' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typedevis/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@create',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::e85ijz401rDGhY5R',
=======
        'as' => 'generated::5DvpKv8ZPqDVDWnf',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::QpdW5j8txwXt5dSq' => 
=======
    'generated::6qQMpIJ0I0Demyux' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typedevis/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@show',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::QpdW5j8txwXt5dSq',
=======
        'as' => 'generated::6qQMpIJ0I0Demyux',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ZPeGIgTz7GHfWOBn' => 
=======
    'generated::Jnmtb6Ow08m8U36k' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/typedevis/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@store',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ZPeGIgTz7GHfWOBn',
=======
        'as' => 'generated::Jnmtb6Ow08m8U36k',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8qc3U7jpOXlszls5' => 
=======
    'generated::iEBlSgItab50nQZ7' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typedevis/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@edit',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8qc3U7jpOXlszls5',
=======
        'as' => 'generated::iEBlSgItab50nQZ7',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::cXCDvOxiUNoEESuE' => 
=======
    'generated::dra0t6XPZEUFw5xT' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/typedevis/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@update',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::cXCDvOxiUNoEESuE',
=======
        'as' => 'generated::dra0t6XPZEUFw5xT',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::4PEhdoJXvR04qEEo' => 
=======
    'generated::8nhH4ezGXwpAMkMB' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/typedevis/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Type_devisController@destroy',
        'controller' => 'App\\Http\\Controllers\\Type_devisController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::4PEhdoJXvR04qEEo',
=======
        'as' => 'generated::8nhH4ezGXwpAMkMB',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IxGbE2C7Oz0jaEoQ' => 
=======
    'generated::l8iB5fb1t23aG8M4' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typeintervention/liste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@index',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IxGbE2C7Oz0jaEoQ',
=======
        'as' => 'generated::l8iB5fb1t23aG8M4',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::s0DdFjMrBfVFl1ql' => 
=======
    'generated::4h5t1YUa9DYa8laC' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typeintervention/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@create',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::s0DdFjMrBfVFl1ql',
=======
        'as' => 'generated::4h5t1YUa9DYa8laC',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::or2P7BKPtSPTkfiB' => 
=======
    'generated::o6DRUuRaReUNRyr0' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typeintervention/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@show',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::or2P7BKPtSPTkfiB',
=======
        'as' => 'generated::o6DRUuRaReUNRyr0',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::abyKSdHwTVBTSR4O' => 
=======
    'generated::fA0zrRRupIGJttTy' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/typeintervention/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@store',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::abyKSdHwTVBTSR4O',
=======
        'as' => 'generated::fA0zrRRupIGJttTy',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::Pz51uNLspqvFszdy' => 
=======
    'generated::Jd4gb04lyjOdLOKX' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/typeintervention/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@edit',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::Pz51uNLspqvFszdy',
=======
        'as' => 'generated::Jd4gb04lyjOdLOKX',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::GTAZSWdrY6DGxgGy' => 
=======
    'generated::7Yb9XWerlchAXj9j' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/typeintervention/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@update',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::GTAZSWdrY6DGxgGy',
=======
        'as' => 'generated::7Yb9XWerlchAXj9j',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::1AkEc7gEcP25Yni8' => 
=======
    'generated::EsgeggCf7xqQDyk5' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/typeintervention/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TypeinverventionController@destroy',
        'controller' => 'App\\Http\\Controllers\\TypeinverventionController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::1AkEc7gEcP25Yni8',
=======
        'as' => 'generated::EsgeggCf7xqQDyk5',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::ShD73bWO3Q94aq1R' => 
=======
    'generated::y4MUHtknIyC8qCHq' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/installation/liste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@index',
        'controller' => 'App\\Http\\Controllers\\InstallationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::ShD73bWO3Q94aq1R',
=======
        'as' => 'generated::y4MUHtknIyC8qCHq',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::k1PJK5vdAPV2C9RV' => 
=======
    'generated::erPg3U8h0Ay6ORys' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/installation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@create',
        'controller' => 'App\\Http\\Controllers\\InstallationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::k1PJK5vdAPV2C9RV',
=======
        'as' => 'generated::erPg3U8h0Ay6ORys',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::uGEvL5EETn7wmccF' => 
=======
    'generated::n7Q6dMJSaDNe2hDC' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/installation/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@show',
        'controller' => 'App\\Http\\Controllers\\InstallationController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::uGEvL5EETn7wmccF',
=======
        'as' => 'generated::n7Q6dMJSaDNe2hDC',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::IFB8CvVtr7KCzKTe' => 
=======
    'generated::tyGSIW0r0T4y4bUZ' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/installation/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@store',
        'controller' => 'App\\Http\\Controllers\\InstallationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::IFB8CvVtr7KCzKTe',
=======
        'as' => 'generated::tyGSIW0r0T4y4bUZ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::YQ4XOFrdiJRfXNf2' => 
=======
    'generated::yrrf7vVbh0QfSbZJ' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/installation/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@edit',
        'controller' => 'App\\Http\\Controllers\\InstallationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::YQ4XOFrdiJRfXNf2',
=======
        'as' => 'generated::yrrf7vVbh0QfSbZJ',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::LvQ9uu6gK0iRT3JG' => 
=======
    'generated::FDXAw0BdvUN95xmW' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/installation/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@update',
        'controller' => 'App\\Http\\Controllers\\InstallationController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::LvQ9uu6gK0iRT3JG',
=======
        'as' => 'generated::FDXAw0BdvUN95xmW',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::9G8Ue5puTpHF4HTm' => 
=======
    'generated::JJEj0lF4F57x3LdA' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/installation/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\InstallationController@destroy',
        'controller' => 'App\\Http\\Controllers\\InstallationController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::9G8Ue5puTpHF4HTm',
=======
        'as' => 'generated::JJEj0lF4F57x3LdA',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::boSxmWbLqgWedqtf' => 
=======
    'generated::aN9KMLCaAPoW2q1n' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\CreateClient@__invoke',
        'controller' => 'App\\Http\\Livewire\\CreateClient',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::boSxmWbLqgWedqtf',
=======
        'as' => 'generated::aN9KMLCaAPoW2q1n',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::xJp1ysVS4fx6trxX' => 
=======
    'generated::m01bBxcRM4IRsVVq' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'technicien/in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\InstallationComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\InstallationComponent',
        'namespace' => NULL,
        'prefix' => '/technicien',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::xJp1ysVS4fx6trxX',
=======
        'as' => 'generated::m01bBxcRM4IRsVVq',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::RUBY1WNk1OBgaX4f' => 
=======
    'generated::XUcxAFpkVaY1cUgF' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pannes/liste',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@index',
        'controller' => 'App\\Http\\Controllers\\PanneController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::RUBY1WNk1OBgaX4f',
=======
        'as' => 'generated::XUcxAFpkVaY1cUgF',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::6QMH3halYlJeKokK' => 
=======
    'generated::JZBzrj0eLvmuE6VN' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pannes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@create',
        'controller' => 'App\\Http\\Controllers\\PanneController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::6QMH3halYlJeKokK',
=======
        'as' => 'generated::JZBzrj0eLvmuE6VN',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::J25gz0C97HEH510f' => 
=======
    'generated::e2ywGBDblI4d1PUD' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pannes/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@show',
        'controller' => 'App\\Http\\Controllers\\PanneController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::J25gz0C97HEH510f',
=======
        'as' => 'generated::e2ywGBDblI4d1PUD',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::vavWeKxlPlpzmVqN' => 
=======
    'generated::qBfFS1HLvJIH7ejW' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pannes/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@store',
        'controller' => 'App\\Http\\Controllers\\PanneController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::vavWeKxlPlpzmVqN',
=======
        'as' => 'generated::qBfFS1HLvJIH7ejW',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bLFqMU3BFslFbxai' => 
=======
    'generated::iB2nGnDY19HLN2Fu' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pannes/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@edit',
        'controller' => 'App\\Http\\Controllers\\PanneController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bLFqMU3BFslFbxai',
=======
        'as' => 'generated::iB2nGnDY19HLN2Fu',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::bflnwvGvDfhkMeRd' => 
=======
    'generated::cf3ZLHzFAQGdiiQk' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'pannes/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@update',
        'controller' => 'App\\Http\\Controllers\\PanneController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::bflnwvGvDfhkMeRd',
=======
        'as' => 'generated::cf3ZLHzFAQGdiiQk',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
<<<<<<< HEAD
    'generated::8qqPK7BsHnUDp1Ee' => 
=======
    'generated::a8zuz49W07b6T3vp' => 
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'pannes/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PanneController@destroy',
        'controller' => 'App\\Http\\Controllers\\PanneController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
<<<<<<< HEAD
        'as' => 'generated::8qqPK7BsHnUDp1Ee',
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
      'withTrashed' => false,
    ),
    'generated::TdelOi6EJbzvHBTj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\PlanningComponent@__invoke',
        'controller' => 'App\\Http\\Livewire\\PlanningComponent',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TdelOi6EJbzvHBTj',
=======
        'as' => 'generated::a8zuz49W07b6T3vp',
>>>>>>> eef9e7fbf8e1d94c897b9f19435447f270598e7f
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
      'withTrashed' => false,
    ),
  ),
)
);
