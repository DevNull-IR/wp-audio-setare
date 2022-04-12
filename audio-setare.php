<?php

/**
 *
 *
 * @wordpress-plugin
 * Plugin Name:       wp audio setare
 * Plugin URI:        https://t.me/setare509
 * Description:       plugin play audio coding PreCode-DevNull
 * Version:           1.0
 * Author:            Ali CEO at PreCode, f1r.ir
 * Author URI:        https://devnull-ali.ir
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-audio-setare
 * Domain Path:       /languages
 */
function wp_audio_setare($atter = []){
    extract(shortcode_atts(array(
        'fileurl' => '',
        'class' => '',
        'loop' => '',
        'align'=>''
                    ), $atter));
                    $loop = $loop ? 'loop' : false;
                    $class = $class ? 'class' : false;
                    $align = $align ?? 'right';
                    if (empty($fileurl)) {
                        return '<div style="color:red;font-weight:bold;">Compact Audio Player Error! You must enter the mp3 file URL via the "fileurl" parameter in this shortcode. Please check the documentation and correct the mistake.</div>';
                    } else {
                        return "
                        <p style='text-align:$align;'><audio controls $loop class=\" $class \">
                        <source src=\"" . $fileurl . "\" type=\"audio/mpeg\" >
                        Your browser does not support the audio element.
                    </audio></p>";
                    }
}
