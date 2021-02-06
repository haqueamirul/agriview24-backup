<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_options_framework';

    //
    // Create options
    CSF::createOptions( $prefix, array(
        'menu_title' => 'My Framework',
        'menu_slug'  => 'my-framework',
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Log & Header Ads',
        'fields' => array(

            //
            // A text field
            array(
              'id'           => 'site-logo',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Logo',
              'remove_title' => 'Remove Logo',
            ),
            array(
              'id'           => 'header-ads',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url',
                'type'  => 'text',
                'title' => 'Header Ads Link',
            ),
        )
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Below Menu Ads',
        'fields' => array(

            // A textarea field
            array(
              'id'           => 'below-ads1',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url1',
                'type'  => 'text',
                'title' => 'Ads Link one',
            ),
            array(
              'id'           => 'below-ads2',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url2',
                'type'  => 'text',
                'title' => 'Ads Link two',
            ),
            array(
              'id'           => 'below-ads3',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url3',
                'type'  => 'text',
                'title' => 'Ads Link three',
            ),
            array(
              'id'           => 'below-ads4',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url4',
                'type'  => 'text',
                'title' => 'Ads Link four',
            ),

            array(
              'id'           => 'highlight-below-ads',
              'type'         => 'upload',
              'title'        => 'Upload',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight',
                'type'  => 'text',
                'title' => 'Ads Link four',
            ),
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Category Section',
        'fields' => array(

            //
            // A text field
            array(
               'id'          => 'cat-select-1',
               'type'        => 'select',
               'title'       => 'Online category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),
           array(
               'id'          => 'cat-select-2',
               'type'        => 'select',
               'title'       => 'Slider category Select one',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),
           array(
               'id'          => 'cat-select-3',
               'type'        => 'select',
               'title'       => 'slider category Select two',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),
           array(
               'id'          => 'cat-select-4',
               'type'        => 'select',
               'title'       => 'slider category Select three',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),
           array(
               'id'          => 'cat-higlight',
               'type'        => 'select',
               'title'       => 'Highlight category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Category Options',
        'fields' => array(

            //
            // A text field
            array(
               'id'          => 'national-title',
               'type'        => 'text',
               'title'       => 'Left Title Here',
           ),
           array(
               'id'          => 'centerr-cat',
               'type'        => 'select',
               'title'       => 'Left Category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),

           array(
               'id'          => 'centerr-title',
               'type'        => 'text',
               'title'       => 'Center Title Here',
           ),
           array(
               'id'          => 'centerr-cat',
               'type'        => 'select',
               'title'       => 'Center Category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),

           array(
               'id'          => 'rights-title',
               'type'        => 'text',
               'title'       => 'Right Title Here',
           ),
           array(
               'id'          => 'rights-cat',
               'type'        => 'select',
               'title'       => 'Right Category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
           ),
          
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Highlight Section',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'highlight-title',
                'type'  => 'text',
                'title' => 'Highlight Title',
            ),
            array(
               'id'          => 'cat-higlight',
               'type'        => 'select',
               'title'       => 'Highlight category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section One',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg-one',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'titlesec-one',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-section-one',
               'type'        => 'select',
               'title'       => 'Section category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Two',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg-two',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'titlesec-two',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-section-two-left',
               'type'        => 'select',
               'title'       => 'Section category Select(left)',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),
            array(
               'id'          => 'cat-section-two-right',
               'type'        => 'select',
               'title'       => 'Section category Select(Right)',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
            array(
               'id'          => 'cat-section-two-center',
               'type'        => 'select',
               'title'       => 'Section category Select(Center)',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),  
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Three',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg-three',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'titlesec-three',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-section-three',
               'type'        => 'select',
               'title'       => 'Section category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Four',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg-four',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'titlesec-four',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-section-four',
               'type'        => 'select',
               'title'       => 'Section category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Five',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg-five',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'titlesec-five',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-section-five',
               'type'        => 'select',
               'title'       => 'Section category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Six',
        'fields' => array(

            //
            // A text field
             array(
              'id'           => 'highlight-bg-six',
              'type'         => 'upload',
              'title'        => 'Upload Background Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Image',
              'remove_title' => 'Remove Image',
            ),
            array(
                'id'    => 'titlesec-six',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-section-six',
               'type'        => 'select',
               'title'       => 'Section category Select',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

}
