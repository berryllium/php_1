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

function task2($a) {
  $str = '';
  switch ($a) {
    case 0: {
      $str .= $a++ . ', ';
    }
    case 1: {
      $str .= $a++ . ', ';
    }
    case 2: {
      $str .= $a++ . ', ';
    }
    case 3: {
      $str .= $a++ . ', ';
    }
    case 4: {
      $str .= $a++ . ', ';
    }
    case 5: {
      $str .= $a++ . ', ';
    }
    case 6: {
      $str .= $a++ . ', ';
    }
    case 7: {
      $str .= $a++ . ', ';
    }
    case 8: {
      $str .= $a++ . ', ';
    }
    case 9: {
      $str .= $a++ . ', ';
    }
    case 10: {
      $str .= $a++ . ', ';
    }
    case 11: {
      $str .= $a++ . ', ';
    }
    case 12: {
      $str .= $a++ . ', ';
    }
    case 13: {
      $str .= $a++ . ', ';
    }
    case 14: {
      $str .= $a++ . ', ';
    }
    case 15: {
      $str .= $a++ . ', ';
    }
  }
  return $str;
}


switch ($id) {
  case 1: {
    if (isset($_GET['a']) && isset($_GET['b'])) {
      $a = $_GET['a'];
      $b = $_GET['b'];
    }
    echo 'Результат: <b>' . sum($a, $b) . '<b>';
    break;
  }
  case 2: {
    if (isset($_GET['a'])) {
      $a = $_GET['a'];
    }
    echo 'Результат: <b>' . task2($a) . '<b>';
    break;
  }
  default: {
    echo 'error';
  }
}

