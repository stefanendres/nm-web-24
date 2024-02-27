<?php
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

date_default_timezone_set('Europe/Berlin');

$q = 100;
$s = 1;

return [
  'debug' => true,
  'thumbs' => [
    #'driver' => 'im',
    'srcsets' => [
      'image_100' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round(1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round(1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round(2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round(4000*$s), 'quality' => $q, 'format' => 'webp'] 
      ],
      'image_100_fallback' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q],
        '400w' => ['width' => round(600*$s), 'quality' => $q],
        '800w' => ['width' => round(1200*$s), 'quality' => $q],
        '1200w' => ['width' => round(1600*$s), 'quality' => $q],
        '1600w' => ['width' => round(2000*$s), 'quality' => $q],
        '2000w' => ['width' => round(4000*$s), 'quality' => $q]
      ],
      'image_66.666' => [
        '320w' => ['width' => round((2/3)*400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((2/3)*800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((2/3)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((2/3)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((2/3)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((2/3)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_66.666_fallback' => [
        '320w' => ['width' => round((2/3)*400*$s), 'quality' => $q],
        '400w' => ['width' => round((2/3)*800*$s), 'quality' => $q],
        '800w' => ['width' => round((2/3)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((2/3)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((2/3)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((2/3)*4000*$s), 'quality' => $q]
      ],
      'image_50' => [
        '320w' => ['width' => round((1/2)*400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((1/2)*800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/2)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/2)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/2)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/2)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_50_fallback' => [
        '320w' => ['width' => round((1/2)*400*$s), 'quality' => $q],
        '400w' => ['width' => round((1/2)*800*$s), 'quality' => $q],
        '800w' => ['width' => round((1/2)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((1/2)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((1/2)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((1/2)*4000*$s), 'quality' => $q]
      ],
      'image_33.333' => [
        '320w' => ['width' => round((1/3)*400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((1/3)*800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/3)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/3)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/3)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/3)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_33.333_fallback' => [
        '320w' => ['width' => round((1/3)*400*$s), 'quality' => $q],
        '400w' => ['width' => round((1/3)*800*$s), 'quality' => $q],
        '800w' => ['width' => round((1/3)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((1/3)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((1/3)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((1/3)*4000*$s), 'quality' => $q]
      ],
      'breakpoints' => [320, 400, 800, 1200, 1600, 2000],
    ],
  ],
  'cache' => [
    'pages' => [
      'active' => false,
      'ignore' => function ($page) {
        return $page->title()->value() === 'Do not cache';
      }
    ],
  ],
  'panel' => [
    'css' => 'assets/styles/panel/custom-panel.css',
    'js' => 'assets/scripts/panel/custom-panel.js'
  ],
  'hooks' => [
    'page.create:after' => function ($page) {
      if ($page->intendedTemplate()->name() == 'post' && $this->user()) {
        // autofill author data
        $page->update([
          'author_id' => $this->user()->id(),
          'author_name' => $this->user()->name()
        ]);
      }
    },
    'page.update:after' => function ($newPage, $oldPage) {
      if ($newPage->intendedTemplate()->name() == 'post' && $this->user()->role()->name() !== 'admin') {
        // if student or alumni is editing a post-page the page will be set to "unlisted"
        $newPage->update([
          'author_name' => $this->user()->name(), // only assigned author can call this hook, so we can take $this->user() here
          'update_time' => $newPage->modified('d.m.Y H:i'),
        ]);
        $newPage->changeStatus('unlisted'); // unlisted does not move content/page/ to a seperate folder, so the page cannot be lost
      }
    },
    'page.changeStatus:after' => function ($newPage, $oldPage) {
      if ($newPage->intendedTemplate()->name() == 'post' && $this->user()->role()->name() !== 'admin') {
        // if student or alumni tries to publish a post-page the page will be set to "unlisted"
        $newPage->changeStatus('unlisted');
      }
    }
  ]
];
