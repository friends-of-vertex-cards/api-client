<?php

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude('var')
    ->exclude('vendor');

return (new PhpCsFixer\Config())
    ->setRules([
        '@PhpCsFixer' => true,
        '@PhpCsFixer:risky' => true,
        '@DoctrineAnnotation' => true,
        #'declare_strict_types' => true,
        'blank_line_before_statement' => [
            'statements' => ['return'],
        ],
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'none',
                'method' => 'one',
                'property' => 'one',
                'trait_import' => 'none',
                'case' => 'none',
            ]
        ],
        'concat_space' => [
            'spacing' => 'one'
        ],
        'doctrine_annotation_spaces' => [
            'after_argument_assignments' => true,
            'before_argument_assignments' => true
        ],
        'final_class' => false,
        'global_namespace_import' => [
            'import_classes' => false,
            'import_constants' => false,
            'import_functions' => false
        ],
        'header_comment' => [
            'header' => ''
        ],
        'list_syntax' => [
            'syntax' => 'short'
        ],
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'phpdoc_types' => [
            'groups' => ['simple', 'alias']
        ],
        'phpdoc_to_comment' => [
            'ignored_tags' => ['var', 'todo', 'psalm-suppress']
        ],
        'phpdoc_line_span' => [
            'const' => 'single',
            'method' => 'multi',
            'property' => 'single',
        ],
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
            'sort_algorithm' => 'none',
        ],
        'php_unit_internal_class' => false,
        'php_unit_test_case_static_method_calls' => [
            'call_type' => 'this'
        ],
        'return_assignment' => false,
        'self_static_accessor' => false,
        'static_lambda' => false,
        'single_line_comment_style' => false,
        'trailing_comma_in_multiline' => [
            'after_heredoc' => true,
            'elements' => [
                'arrays',
                'arguments',
                'parameters',
                'match'
            ],
        ],
        'yoda_style' => [
            'equal' => false,
            'identical' => false,
            'less_and_greater' => false
        ],
        'strict_param' => false,
    ])
    ->setFinder($finder);
