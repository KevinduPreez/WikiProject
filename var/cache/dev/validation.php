<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'Symfony.Component.Form.Form' => 0,
'IteratorAggregate' => 1,
'Traversable' => 2,
'Symfony.Component.Form.FormInterface' => 3,
'Countable' => 4,
'ArrayAccess' => 5,
'Symfony.Component.Form.ClearableErrorsInterface' => 6,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (($f = &\Symfony\Component\VarExporter\Internal\Registry::$factories)['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
            ($f['Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\PropertyMetadata'))(),
            clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\Form',
                    'children',
                ],
                'defaultGroup' => [
                    'Form',
                ],
                'members' => [
                    [
                        'children' => [
                            $o[1],
                        ],
                    ],
                ],
                'properties' => [
                    [
                        'children' => $o[1],
                    ],
                ],
                'constraints' => [
                    [
                        $o[2],
                    ],
                ],
                'constraintsByGroup' => [
                    [
                        'Default' => [
                            $o[2],
                        ],
                        'Form' => [
                            $o[2],
                        ],
                    ],
                ],
                'class' => [
                    1 => 'Symfony\\Component\\Form\\Form',
                ],
                'property' => [
                    1 => 'children',
                ],
                'cascadingStrategy' => [
                    1 => 2,
                ],
                'traversalStrategy' => [
                    1 => 1,
                ],
                'groups' => [
                    2 => [
                        'Default',
                        'Form',
                    ],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'IteratorAggregate',
                ],
                'defaultGroup' => [
                    'IteratorAggregate',
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Traversable',
                ],
                'defaultGroup' => [
                    'Traversable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\FormInterface',
                ],
                'defaultGroup' => [
                    'FormInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Countable',
                ],
                'defaultGroup' => [
                    'Countable',
                ],
            ],
        ],
        $o[0],
        []
    );
},
5 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'ArrayAccess',
                ],
                'defaultGroup' => [
                    'ArrayAccess',
                ],
            ],
        ],
        $o[0],
        []
    );
},
6 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            (\Symfony\Component\VarExporter\Internal\Registry::$factories['Symfony\\Component\\Validator\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::f('Symfony\\Component\\Validator\\Mapping\\ClassMetadata'))(),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'Symfony\\Component\\Form\\ClearableErrorsInterface',
                ],
                'defaultGroup' => [
                    'ClearableErrorsInterface',
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
