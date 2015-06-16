<!doctype html>

<html>
<head>
  <meta charset="utf-8">

  <!--
From https://github.com/seigler/one-file-php-presentation

The MIT License (MIT)

Copyright (c) 2015 Joshua Seigler

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
  -->

  <title>Presentation</title>
  <meta name="description" content="Presentation">

  <style>
    * {
      margin: 0;
      padding: 0;
    }
    .presentation {
      width: 100%;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: black;
    }
    .presentation>label {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      opacity: 0;
      visibility: hidden;
      background-size: contain;
      background-position: 50% 50%;
      background-repeat: no-repeat;
      background-color: black;
      transition: opacity 0.5s ease 0.5s, visibility 1s step-end;
      cursor: none;
    }
    .presentation>input[type=radio]:checked + label {
      opacity: 1;
      visibility: visible;
      transition: opacity 0.5s ease;
    }
  </style>

  <body class="presentation">
<?php

  $images = glob("*.{jpg,jpeg,png,gif,svg}",GLOB_BRACE);
  $count = count($images);
  for ($i = 0; $i < $count; $i++) {
    echo "    <input type='radio' name='slides' id='slide".$i."'".($i == 0 ? " checked autofocus" : "").">\n";
    echo "    <label for='slide".($i + 1)."' style='background-image:url(\"".$images[$i]."\")'></label>\n";
  }

  echo "    <input type='radio' name='slides' id='slide".$count."'>\n";
  echo "    <label for='slide0' style='background:black'></label>\n";

?>
  </body>

</html>
