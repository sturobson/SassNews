<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-b27da374e7678189c1c5f0480fa4ff7b');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
c::set('routes', array(
  array(
    'pattern' => '(:any)',
    'action'  => function($uid) {

      $page = page($uid);

      if(!$page) $page = page('sassnews/' . $uid);
      if(!$page) $page = site()->errorPage();

      return site()->visit($page);

    }
  ),
  array(
    'pattern' => 'sassnews/(:any)',
    'action'  => function($uid) {
      go($uid);
    }
  )
));

c::set('url', false);


c::set('subfolder', false);
// c::set('routes', array(
//   array(
//     'pattern' => 'sassnews',
//     'action'  => function() {
//
//       // search for the article
// //      return page('archives');
//
//       // redirect to the article or the error page
//
//
//     }
//   )
// ));
c::set('languages', array(
    array(
        'code'    => 'en',
        'name'    => 'English',
        'locale'  => 'en_US',
        'default' => true,
        'url'     => '/'
    )
));
