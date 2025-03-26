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
        '320w' => ['width' => round(400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((2/3)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((2/3)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((2/3)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((2/3)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_66.666_fallback' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q],
        '400w' => ['width' => round(800*$s), 'quality' => $q],
        '800w' => ['width' => round((2/3)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((2/3)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((2/3)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((2/3)*4000*$s), 'quality' => $q]
      ],
      'image_50' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/2)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/2)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/2)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/2)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_50_fallback' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q],
        '400w' => ['width' => round(800*$s), 'quality' => $q],
        '800w' => ['width' => round((1/2)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((1/2)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((1/2)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((1/2)*4000*$s), 'quality' => $q]
      ],
      'image_33.333' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/3)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/3)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/3)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/3)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_33.333_fallback' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q],
        '400w' => ['width' => round(800*$s), 'quality' => $q],
        '800w' => ['width' => round((1/3)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((1/3)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((1/3)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((1/3)*4000*$s), 'quality' => $q]
      ],
      'image_25' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s), 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/4)*1200*$s), 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/4)*1600*$s), 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/4)*2000*$s), 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/4)*4000*$s), 'quality' => $q, 'format' => 'webp']
      ],
      'image_25_fallback' => [
        '320w' => ['width' => round(400*$s), 'quality' => $q],
        '400w' => ['width' => round(800*$s), 'quality' => $q],
        '800w' => ['width' => round((1/4)*1200*$s), 'quality' => $q],
        '1200w' => ['width' => round((1/4)*1600*$s), 'quality' => $q],
        '1600w' => ['width' => round((1/4)*2000*$s), 'quality' => $q],
        '2000w' => ['width' => round((1/4)*4000*$s), 'quality' => $q]
      ],
      'thumb_25' => [
        '320w' => ['width' => round(400*$s), 'height' => round((4/3)*400*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round(800*$s), 'height' => round((4/3)*800*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/4)*1200*$s), 'height' => round((1/4)*(4/3)*1200*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/4)*1600*$s), 'height' => round((1/4)*(4/3)*1600*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/4)*2000*$s), 'height' => round((1/4)*(4/3)*2000*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/4)*4000*$s), 'height' => round((1/4)*(4/3)*4000*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp']
      ],
      'thumb_25_fallback' => [
        '320w' => ['width' => round(400*$s), 'height' => round((4/3)*400*$s), 'crop' => true, 'quality' => $q],
        '400w' => ['width' => round(800*$s), 'height' => round((4/3)*800*$s), 'crop' => true, 'quality' => $q],
        '800w' => ['width' => round((1/4)*1200*$s), 'height' => round((1/4)*(4/3)*1200*$s), 'crop' => true, 'quality' => $q],
        '1200w' => ['width' => round((1/4)*1600*$s), 'height' => round((1/4)*(4/3)*1600*$s), 'crop' => true, 'quality' => $q],
        '1600w' => ['width' => round((1/4)*2000*$s), 'height' => round((1/4)*(4/3)*2000*$s), 'crop' => true, 'quality' => $q],
        '2000w' => ['width' => round((1/4)*4000*$s), 'height' => round((1/4)*(4/3)*4000*$s), 'crop' => true, 'quality' => $q]
      ],
      'thumb_20' => [
        '320w' => ['width' => round((2/3)*400*$s), 'height' => round((2/3)*(5/4)*400*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((2/3)*800*$s), 'height' => round((2/3)*(5/4)*800*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/5)*1200*$s), 'height' => round((1/5)*(5/4)*1200*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/5)*1600*$s), 'height' => round((1/5)*(5/4)*1600*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/5)*2000*$s), 'height' => round((1/5)*(5/4)*2000*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/5)*4000*$s), 'height' => round((1/5)*(5/4)*4000*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp']
      ],
      'thumb_20_fallback' => [
        '320w' => ['width' => round((2/3)*400*$s), 'height' => round((2/3)*(5/4)*400*$s), 'crop' => true, 'quality' => $q],
        '400w' => ['width' => round((2/3)*800*$s), 'height' => round((2/3)*(5/4)*800*$s), 'crop' => true, 'quality' => $q],
        '800w' => ['width' => round((1/5)*1200*$s), 'height' => round((1/5)*(5/4)*1200*$s), 'crop' => true, 'quality' => $q],
        '1200w' => ['width' => round((1/5)*1600*$s), 'height' => round((1/5)*(5/4)*1600*$s), 'crop' => true, 'quality' => $q],
        '1600w' => ['width' => round((1/5)*2000*$s), 'height' => round((1/5)*(5/4)*2000*$s), 'crop' => true, 'quality' => $q],
        '2000w' => ['width' => round((1/5)*4000*$s), 'height' => round((1/5)*(5/4)*4000*$s), 'crop' => true, 'quality' => $q]
      ],
      'thumb_16.666' => [
        '320w' => ['width' => round((1/6)*400*$s), 'height' => round((1/6)*400*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '400w' => ['width' => round((1/6)*800*$s), 'height' => round((1/6)*800*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round((1/6)*1200*$s), 'height' => round((1/6)*1200*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1200w' => ['width' => round((1/6)*1600*$s), 'height' => round((1/6)*1600*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round((1/6)*2000*$s), 'height' => round((1/6)*2000*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '2000w' => ['width' => round((1/6)*4000*$s), 'height' => round((1/6)*4000*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp']
      ],
      'thumb_16.666_fallback' => [
        '320w' => ['width' => round((1/6)*400*$s), 'height' => round((1/6)*400*$s), 'crop' => true, 'quality' => $q],
        '400w' => ['width' => round((1/6)*800*$s), 'height' => round((1/6)*800*$s), 'crop' => true, 'quality' => $q],
        '800w' => ['width' => round((1/6)*1200*$s), 'height' => round((1/6)*1200*$s), 'crop' => true, 'quality' => $q],
        '1200w' => ['width' => round((1/6)*1600*$s), 'height' => round((1/6)*1600*$s), 'crop' => true, 'quality' => $q],
        '1600w' => ['width' => round((1/6)*2000*$s), 'height' => round((1/6)*2000*$s), 'crop' => true, 'quality' => $q],
        '2000w' => ['width' => round((1/6)*4000*$s), 'height' => round((1/6)*4000*$s), 'crop' => true, 'quality' => $q]
      ],
      'thumb_icon' => [                                                                // TODO: checkout good sizing, add crop
        '320w' => ['width' => round(80*$s), 'height' => round(80*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '800w' => ['width' => round(120*$s), 'height' => round(120*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
        '1600w' => ['width' => round(240*$s), 'height' => round(240*$s), 'crop' => true, 'quality' => $q, 'format' => 'webp'],
      ],
      'thumb_icon_fallback' => [
        '320w' => ['width' => round(80*$s), 'height' => round(80*$s), 'crop' => true,  'quality' => $q],
        '800w' => ['width' => round(120*$s), 'height' => round(120*$s), 'crop' => true,  'quality' => $q],
        '1600w' => ['width' => round(240*$s), 'height' => round(240*$s), 'crop' => true,  'quality' => $q],
      ],
      'breakpoints' => [400, 800, 1200, 1600, 2000],
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
    'css' => 'custom-panel/custom-panel.css',
    'js' => 'custom-panel/custom-panel.js'
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
        $newPage->changeStatus('unlisted'); // unlisted does not move content/page/ to a seperate folder, so the page cannot get lost
        // remove from algolia here
        //deleteItemFromAlgoliaIndex($newPage->uuid()->toString())

        try {
          kirby()->email([
            'from' => $this->user()->email(),
            'to' => kirby()->users()->filterBy('role', 'admin'),
            'subject' => 'CMS newmediakassel.com: Your review is required',
            'body' => 'This is an automated email from newmediakassel.com. 
            
Please review content for "' . $newPage->title() . '" (' . $newPage->url() . '). 
            
Thank you!'
          ]);
          kirby()->email([
            'from' => kirby()->users()->filterBy('role', 'admin')->first(),
            'to' => $this->user()->email(),
            'subject' => 'CMS newmediakassel.com: Your changes will be reviewed',
            'body' => 'This is an automated email from newmediakassel.com.
            
Your changes for "' . $newPage->title() . '" (' . $newPage->url() . ') will be reviewed soon. 
            
Thank you!'
          ]);
        } catch (Exception $error) {
          echo $error;
        }
      }
    },
    'page.changeStatus:after' => function ($newPage, $oldPage) {
      if ($newPage->intendedTemplate()->name() == 'post' && $this->user()->role()->name() !== 'admin') {
        // if student or alumni tries to publish a post-page the page will be set to "unlisted"
        $newPage->changeStatus('unlisted');
        // remove from algolia here
        //deleteItemFromAlgoliaIndex($newPage->uuid()->toString())
      }
      // if old != public && new == public && is admin ==> send success email
    },


    'page.changeStatus:after' => function ($newPage, $oldPage) {
      if ($newPage->intendedTemplate()->name() == 'post') {
        if ($newPage->status() !== 'listed') {
        // deleteItemFromAlgoliaIndex($newPage->uuid()->id());
        } else {
        // addItemToAlgoliaIndex($newPage); // add also rewrites!!!
        }
      }
    },

    'page.update:after' => function ($newPage, $oldPage) {
      if ($newPage->intendedTemplate()->name() == 'post' && $newPage->status() == 'listed' && $this->user()->role()->name() == 'admin') {
      //  addItemToAlgoliaIndex($newPage); // add also rewrites!!!
      }
    },

    'page.delete:after' => function ($status, $page) {
      if ($page->intendedTemplate()->name() == 'post') {
      // deleteItemFromAlgoliaIndex($newPage->uuid()->id());
      }
    }
  ],
];
