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
$s_p = 1;
$s_l = 1;

return [
  'debug' => true,
  'thumbs' => [
    #'driver' => 'im',
    'srcsets' => [
      'thumb_100' => [
        '320w' => ['width' => round(400*$s_p), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s_p), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round(1200*(1/2)*$s_p), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round(1600*(1/3)*$s_l), 'quality' => $q, 'format' => 'webp'], // TODO 1/3 into styles: layout, font-sizes,...
        '1600w' => ['width' => round(2000*(1/4)*$s_l), 'quality' => $q, 'format' => 'webp'], // TODO 1/4 into styles: layout, font-sizes,...
        '2000w' => ['width' => round(4000*(1/5)*$s_l), 'quality' => $q, 'format' => 'webp']  // TODO 1/5 into styles: layout, font-sizes,...
      ],
      'thumb_100_fallback' => [
        '320w' => ['width' => round(400*$s_p), 'quality' => $q],
        '400w' => ['width' => round(600*$s_p), 'quality' => $q],
        '800w' => ['width' => round(1200*(1/2)*$s_p), 'quality' => $q],
        '1200w' => ['width' => round(1600*(1/3)*$s_l), 'quality' => $q],
        '1600w' => ['width' => round(2000*(1/4)*$s_l), 'quality' => $q],
        '2000w' => ['width' => round(4000*(1/5)*$s_l), 'quality' => $q]
      ],
      'thumb_50' => [
        '320w' => ['width' => round((1/2)*400*$s_p), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((1/2)*800*$s_p), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/2)*1200*(1/2)*$s_p), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/2)*1600*(1/3)*$s_l), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/2)*2000*(1/4)*$s_l), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/2)*4000*(1/5)*$s_l), 'quality' => $q, 'format' => 'webp']
      ],
      'thumb_50_fallback' => [
        '320w' => ['width' => round((1/2)*400*$s_p), 'quality' => $q],
        '400w' => ['width' => round((1/2)*800*$s_p), 'quality' => $q],
        '800w' => ['width' => round((1/2)*1200*(1/2)*$s_p), 'quality' => $q],
        '1200w' => ['width' => round((1/2)*1600*(1/3)*$s_l), 'quality' => $q],
        '1600w' => ['width' => round((1/2)*2000*(1/4)*$s_l), 'quality' => $q],
        '2000w' => ['width' => round((1/2)*4000*(1/5)*$s_l), 'quality' => $q]
      ],
      'thumb_33' => [
        '320w' => ['width' => round((1/3)*400*$s_p), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((1/3)*800*$s_p), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/3)*1200*(1/2)*$s_p), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/3)*1600*(1/3)*$s_l), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/3)*2000*(1/4)*$s_l), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/3)*4000*(1/5)*$s_l), 'quality' => $q, 'format' => 'webp']
      ],
      'thumb_33_fallback' => [
        '320w' => ['width' => round((1/3)*400*$s_p), 'quality' => $q],
        '400w' => ['width' => round((1/3)*800*$s_p), 'quality' => $q],
        '800w' => ['width' => round((1/3)*1200*(1/2)*$s_p), 'quality' => $q],
        '1200w' => ['width' => round((1/3)*1600*(1/3)*$s_l), 'quality' => $q],
        '1600w' => ['width' => round((1/3)*2000*(1/4)*$s_l), 'quality' => $q],
        '2000w' => ['width' => round((1/3)*4000*(1/5)*$s_l), 'quality' => $q]
      ],
      'zoom_1' => [
        '320w' => ['width' => round(400*$s_p), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s_p), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round(1200*$s_p), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['height' => round(1600*(9/16)*$s_l), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['height' => round(2000*(9/16)*$s_l), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['height' => round(4000*(9/16)*$s_l), 'quality' => $q, 'format' => 'webp']
      ],
      'zoom_1_fallback' => [
        '320w' => ['width' => round(400*$s_p), 'quality' => $q],
        '400w' => ['width' => round(800*$s_p), 'quality' => $q],
        '800w' => ['width' => round(1200*$s_p), 'quality' => $q],
        '1200w' => ['height' => round(1600*(9/16)*$s_l), 'quality' => $q],
        '1600w' => ['height' => round(2000*(9/16)*$s_l), 'quality' => $q],
        '2000w' => ['height' => round(4000*(9/16)*$s_l), 'quality' => $q]
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
      if ($this->user()) {
        // autofill author data
        $page->update([
          'author_id' => $this->user()->id()
        ]);
      }
    },
    'page.update:after' => function ($newPage, $oldPage) {
      if ($newPage->intendedTemplate()->name() == 'post' && $this->user()->role()->name() !== 'admin') {
        // if student or alumni is editing a post-page the page will be set to "unlisted"
        $newPage->update([
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
