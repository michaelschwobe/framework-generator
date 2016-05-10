<?php
error_reporting( E_ALL | E_STRICT ); ini_set( 'display_errors', 1 );

$lorem_xs = 'Lorem ipsum dolor sit amet';

$lorem_sm = 'Lorem ipsum dolor sit amet consectetur adipisicing elit';

$lorem_md = 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';

$lorem_lg = 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.';

$elements = [
  'img'    => '<img src="http://placehold.it/16x16?text=1:1" width="16" height="16" alt="1:1 square" />',
  'a'      => '<a href="#">link</a>',
  'strong' => '<strong>strong</strong>',
  'b'      => '<b>bold</b>',
  'em'     => '<em>emphasis</em>',
  'i'      => '<i>italic</i>',
  'q'      => '<q cite="#">quote</q>',
  'cite'   => '<cite>cite</cite>',
  'dfn'    => '<dfn title="definition">definition</dfn>',
  'abbr'   => '<abbr title="abbreviation">abbreviation</abbr>',
  'u'      => '<u>underline</u>',
  'ins'    => '<ins datetime="2014-11-01">insert</ins>',
  'mark'   => '<mark>mark</mark>',
  'del'    => '<del>delete</del>',
  's'      => '<s>strike</s>',
  'sub'    => '<sub>subscript</sub>',
  'sup'    => '<sup>superscript</sup>',
  'small'  => '<small>small</small>',
  'span'   => '<span>span</span>',
  'time'   => '<time datetime="2014-11-01T06:00+00:00">time</time>',
  'data'   => '<data value="3967381398">data</data>',
  'var'    => '<var>variable</var>',
  'code'   => '<code>code</code>',
  'kbd'    => '<kbd>keyboard</kbd>',
  'samp'   => '<samp>sample</samp>',
  'bdi'    => '<span dir="ltr"><bdi>bdi</bdi></span>',
  'bdo'    => '<bdo dir="rtl">bdo</bdo>',
  'wbr'    => 'http://this<wbr>.is<wbr>.a<wbr>.wbr<wbr>.element<wbr>.example<wbr>.com/With<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages<wbr>/deeper<wbr>/level<wbr>/pages',
];

$inline_elements = '';
foreach ($elements as $key => $value) {
  $inline_elements .= $value . ' ';
}
