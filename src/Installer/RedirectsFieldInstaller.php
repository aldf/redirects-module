<?php namespace Anomaly\RedirectsModule\Installer;

use Anomaly\Streams\Platform\Field\FieldInstaller;

class RedirectsFieldInstaller extends FieldInstaller
{

    /**
     * Stream fields to install.
     *
     * @var array
     */
    protected $fields = [
        'type' => [
            'type'   => 'select',
            'config' => [
                'options' => [
                    '301' => '301',
                    '302' => '302',
                ],
            ]
        ],
        'from' => 'text',
        'to'   => 'text',
    ];
}
 