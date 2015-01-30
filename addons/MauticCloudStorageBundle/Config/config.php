<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

return array(
    'name'        => 'Cloud Storage Integrations',
    'description' => 'Enables integrations with Mautic supported cloud storage services.',
    'version'     => '1.0',
    'author'      => 'Mautic',

    'services'    => array(
        'events' => array(
            'mautic.cloudstorage.remoteassetbrowse.subscriber' => array(
                'class' => 'MauticAddon\MauticCloudStorageBundle\EventListener\RemoteAssetBrowseSubscriber'
            )
        ),
        'forms'  => array(
            'mautic.form.type.cloudstorage.amazons3' => array(
                'class' => 'MauticAddon\MauticCloudStorageBundle\Form\Type\AmazonS3Type',
                'alias' => 'cloudstorage_amazons3'
            )
        )
    ),
);
