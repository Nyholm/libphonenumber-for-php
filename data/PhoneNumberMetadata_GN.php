<?php
return array (
  'generalDesc' =>
  array (
    'NationalNumberPattern' => '[367]\\d{7,8}',
    'PossibleNumberPattern' => '\\d{8,9}',
    'ExampleNumber' => '',
  ),
  'fixedLine' =>
  array (
    'NationalNumberPattern' => '
          30(?:
            24|
            3[12]|
            4[1-35-7]|
            5[13]|
            6[189]|
            [78]1|
            9[1478]
          )\\d{4}
        ',
    'PossibleNumberPattern' => '\\d{8}',
    'ExampleNumber' => '30241234',
  ),
  'mobile' =>
  array (
    'NationalNumberPattern' => '
          6(?:
            [03]1|
            2[128]|
            5[57]|
            6[2469]
          )\\d{6}
        ',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '601123456',
  ),
  'tollFree' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'premiumRate' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'sharedCost' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'noInternationalDialling' =>
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'GN',
  'countryCode' => 224,
  'internationalPrefix' => '00',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' =>
  array (
    0 =>
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '3',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
    1 =>
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' =>
      array (
        0 => '[67]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '',
    ),
  ),
  'intlNumberFormat' =>
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);