<?php

function displayHeader($date, $file, $title)
{
  echo '<!DOCTYPE html>';
  echo '<!--';
  echo 'Author: 	Nick Simpson';
  echo 'Date:			. $date . ';
  echo 'File:			. $file . ';
  echo 'Purpose:	MySQL Exercise';
  echo '-->';
  echo '<html>';
  echo '<head>';
  echo '<title>' . $title . '</title>';
  echo '<link rel ="stylesheet" type="text/css" href="../css/style.css">';
  echo '</head>';
  echo '<body>';
}

function displayFooter()
{
  echo '</body>';
  echo '</html>';
}