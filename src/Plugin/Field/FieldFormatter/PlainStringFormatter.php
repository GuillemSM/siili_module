<?php

namespace Drupal\youtubeformatter\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;


/**
 * Plugin implementation of the 'YoutubeFormatter' formatter.
 *
 * @FieldFormatter(
 *   id = "YoutubeFormatter",
 *   label = @Translation("Youtube Formatter"),
 *   field_types = {
 *     "string",
 *   },
 *   edit = {
 *     "editor" = "form"
 *   },
 *   quickedit = {
 *     "editor" = "plain_text"
 *   }
 * )
 */
class PlainStringFormatter extends FormatterBase {

    /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items, $langcode) {
        $elements = parent::viewElements($items);
        foreach ($elements as &$element) {
            $element['#theme'] = 'youtube_formatter';
        }

        return $elements;
    }

}
