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
              'title'        => 'Ads Image',
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
              'title'        => 'Ads Image',
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
              'title'        => 'Ads Image',
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
              'title'        => 'Ads Image',
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
              'title'        => 'Highlight Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight',
                'type'  => 'text',
                'title' => 'Ads Link highlight',
            ),

            array(
              'id'           => 'cqat-secon-ads',
              'type'         => 'upload',
              'title'        => 'Second Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight2',
                'type'  => 'text',
                'title' => 'Ads Link second',
            ),

            array(
              'id'           => 'cqat-secon-ads3',
              'type'         => 'upload',
              'title'        => 'Section three Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight3',
                'type'  => 'text',
                'title' => 'Ads Link three',
            ),

            array(
              'id'           => 'cqat-secon-ads4',
              'type'         => 'upload',
              'title'        => 'Section Four Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight4',
                'type'  => 'text',
                'title' => 'Ads Link Four',
            ),

            array(
              'id'           => 'cqat-secon-ads5',
              'type'         => 'upload',
              'title'        => 'Section Five Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight5',
                'type'  => 'text',
                'title' => 'Ads Link Five',
            ),

            array(
              'id'           => 'cqat-secon-ads6',
              'type'         => 'upload',
              'title'        => 'Section Six Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight6',
                'type'  => 'text',
                'title' => 'Ads Link Six',
            ),

            array(
              'id'           => 'cqat-secon-ads7',
              'type'         => 'upload',
              'title'        => 'Section Seven Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight7',
                'type'  => 'text',
                'title' => 'Ads Link Seven',
            ),

            array(
              'id'           => 'cqat-secon-ads8',
              'type'         => 'upload',
              'title'        => 'Section Eight Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight8',
                'type'  => 'text',
                'title' => 'Ads Link Eight',
            ),

            array(
              'id'           => 'cqat-secon-ads9',
              'type'         => 'upload',
              'title'        => 'Section Nine Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight9',
                'type'  => 'text',
                'title' => 'Ads Link Nine',
            ),

            array(
              'id'           => 'cqat-secon-ads10',
              'type'         => 'upload',
              'title'        => 'Footer Ads Image',
              'library'      => 'image',
              'placeholder'  => 'http://',
              'button_title' => 'Add Ads',
              'remove_title' => 'Remove Ads',
            ),
            array(
                'id'    => 'ads-url-highlight10',
                'type'  => 'text',
                'title' => 'Ads Link Footer',
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


            array(
                'id'    => 'titleSec1',
                'type'  => 'text',
                'title' => 'Section Title Left',
            ),
            array(
               'id'          => 'cat-onesection',
               'type'        => 'select',
               'title'       => 'Section category Select Left',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),
            array(
                'id'    => 'titleSec2',
                'type'  => 'text',
                'title' => 'Section Title Center',
            ), 
            array(
               'id'          => 'cat-onesection2',
               'type'        => 'select',
               'title'       => 'Section category Select Center',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
            array(
                'id'    => 'titleSec3',
                'type'  => 'text',
                'title' => 'Section Title Right',
            ),
            array(
               'id'          => 'cat-onesectionimg',
               'type'        => 'upload',
               'title'       => 'Upload Image for E-paper',
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
        'title'  => 'Homepage Section Five',
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
        'title'  => 'Homepage Section Six',
        'fields' => array(

            //
            // A text field
            
            array(
                'id'    => 'titlesecnew',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'catsect-catleft',
               'type'        => 'select',
               'title'       => 'category Select left',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
            array(
                'id'    => 'titlesecnew1',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'catsect-catright',
               'type'        => 'select',
               'title'       => 'category Select right',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Seven',
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
        'title'  => 'Homepage Section Eight',
        'fields' => array(

            //
            // A text field
            array(
                'id'    => 'titleany1',
                'type'  => 'text',
                'title' => 'Section Left Title',
            ),
            array(
               'id'          => 'catsectionany1',
               'type'        => 'select',
               'title'       => 'Category Select Left',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
            array(
                'id'    => 'titleany2',
                'type'  => 'text',
                'title' => 'Section Left Title',
            ),
            array(
               'id'          => 'catsectionany2',
               'type'        => 'select',
               'title'       => 'Category Select Center',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),
            array(
                'id'    => 'titleany3',
                'type'  => 'text',
                'title' => 'Section Left Title',
            ),
            array(
               'id'          => 'catsectionany2',
               'type'        => 'select',
               'title'       => 'Category Select Right',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),
        )
    ) );

    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Nine',
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


    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Section Ten',
        'fields' => array(

            //
            array(
                'id'    => 'title-ten-slider',
                'type'  => 'text',
                'title' => 'Section Title',
            ),
            array(
               'id'          => 'cat-footer-ten',
               'type'        => 'select',
               'title'       => 'Category Select Slider footer',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ), 
        )
    ) );


    CSF::createSection( $prefix, array(
        'title'  => 'Homepage Sidebar',
        'fields' => array(

            //
            array(
                'id'    => 'homepage-ads-sidebar1',
                'type'  => 'upload',
                'title' => 'Upload Ads Image Sidebar One',
            ),
            array(
                'id'    => 'homepage-ads-sidebar1-link',
                'type'  => 'text',
                'title' => 'Ads Link',
            ), 


            array(
               'id'          => 'homepage-sidebar-fb',
               'type'        => 'select',
               'title'       => 'Category Select For Facebook Corner',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),

            array(
                'id'    => 'homepage-ads-sidebar2',
                'type'  => 'upload',
                'title' => 'Upload Ads Image Sidebar Two',
            ),
            array(
                'id'    => 'homepage-ads-sidebar2-link',
                'type'  => 'text',
                'title' => 'Ads Link',
            ), 

            array(
                'id'    => 'homepage-ads-sidebar3',
                'type'  => 'upload',
                'title' => 'Upload Ads Image Sidebar Three',
            ),
            array(
                'id'    => 'homepage-ads-sidebar3-link',
                'type'  => 'text',
                'title' => 'Ads Link',
            ),

            array(
                'id'    => 'homepage-ads-sidebar2-video',
                'type'  => 'text',
                'title' => 'Sidebar Ads Video',
            ),

            array(
                'id'    => 'homepage-ads-sidebar4',
                'type'  => 'upload',
                'title' => 'Upload Ads Image Sidebar Four',
            ),
            array(
                'id'    => 'homepage-ads-sidebar4-link',
                'type'  => 'text',
                'title' => 'Ads Link',
            ),

            array(
                'id'    => 'homepage-ads-title',
                'type'  => 'text',
                'title' => 'Ads Title',
            ), 
            array(
               'id'          => 'homepage-sidebar-news',
               'type'        => 'select',
               'title'       => 'Category Select For Sidebar Category',
               'placeholder' => 'Select an option',
               'options'     => 'categories',
            ),

             array(
                'id'    => 'homepage-ads-sidebar5',
                'type'  => 'upload',
                'title' => 'Upload Ads Image Sidebar Five',
            ),
            array(
                'id'    => 'homepage-ads-sidebar5-link',
                'type'  => 'text',
                'title' => 'Ads Link',
            ),
        )
    ) );

    CSF::createSection( $prefix, array(
        'title'  => 'Footer Section',
        'fields' => array(

            //
            array(
                'id'    => 'footer-logo',
                'type'  => 'upload',
                'title' => 'Upload Footer Logo',
            ),
            array(
               'id'          => 'footer-text',
               'type'        => 'wp_editor',
               'title'       => 'Footer Content',
            ),
            array(
               'id'          => 'footer-email1',
               'type'        => 'text',
               'title'       => 'Footer email one',
            ),
            array(
               'id'          => 'footer-email2',
               'type'        => 'text',
               'title'       => 'Footer email two',
            ), 
        )
    ) );

}


