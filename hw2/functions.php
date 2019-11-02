<?php
if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
}
// задача 1
function sum($a, $b)
{
  if ($a >= 0 && $b >= 0) {
    return $a - $b;
  } elseif ($a < 0 && $b < 0) {
    return $a * $b;
  } elseif (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    return $a + $b;
  } else {
    return 'операнды должны быть числами';
  }
}


switch ($id) {
  case 1: {
    if (isset($_GET['a']) && isset($_GET['b'])) {
      $a = $_GET['a'];
      $b = $_GET['b'];
    }
    echo "Результат: <b>" . sum($a, $b) . '<b>';
    break;
  }
  default: {
    echo 'nothing';
  }
}

