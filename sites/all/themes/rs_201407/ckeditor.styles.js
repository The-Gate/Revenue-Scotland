/*
 Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or http://ckeditor.com/license
 */

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if (typeof (CKEDITOR) !== 'undefined') {
  CKEDITOR.addStylesSet('drupal',
          [
            /* Object Styles */
            {
              name: 'Heading Underline',
              element: ['h1', 'h2', 'h3', 'h4', 'h5' ,'h6'],
              attributes:
                      {
                        'class': 'heading-underline'
                      }
            },
            {
              name: 'Paragraph Underline',
              element: 'p',
              attributes:
                      {
                        'class': 'paragraph-underline'
                      }
            },
            {
              name: 'Link Underline',
              element: 'p',
              attributes:
                      {
                        'class': 'link-underline'
                      }
            },
            {
              name: 'P HiLite - General',
              element: 'p',
              attributes:
                      {
                        'class': 'highlight-general'
                      }
            },
            {
              name: 'P HiLite - Red',
              element: 'p',
              attributes:
                      {
                        'class': 'highlight-red'
                      }
            },
            {
              name: 'P HiLite - Green',
              element: 'p',
              attributes:
                      {
                        'class': 'highlight-green'
                      }
            }
          ]);
}