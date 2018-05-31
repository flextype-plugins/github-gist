<?php

/**
 *
 * Flextype Github Gist Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\Event\Event;

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [github-gist source="https://gist.github.com/Awilum/5589742"]
    Content::shortcode()->addHandler('github-gist', function(ShortcodeInterface $s) {
        return '<script src="'.$s->getParameter('source').'.js"></script>';
    });
});
