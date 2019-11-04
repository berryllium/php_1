<?php

if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
}
// задание 1
function task1($a, $b)
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

// задание 2

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
      $str .= $a++;
      break;
    }
    default: {
      $str = 'Число должно быть в диапазоне от 0 до 15!';
    }
  }
  return $str;
}

// задания 3 и 4

function sum($a,$b) {return $a + $b;}
function sub($a,$b) {return $a - $b;}
function mult($a,$b) {return $a * $b;}
function div($a,$b) {return $a / $b;}

function task3($a,$op,$b) {
  switch ($op) {
    case 'plus': {
      return sum($a,$b);
      break;
    }
    case 'sub': {
      return sub($a,$b);
      break;
    }
    case 'mult': {
      return mult($a,$b);
      break;
    }
    case 'div': {
      return div($a,$b);
      break;
    }
    default: {
      return 'Оператор не получен';
      break;
    }
  }
}


switch ($id) {
  case 1: {
    if (isset($_GET['a']) && isset($_GET['b'])) {
      $a = $_GET['a'];
      $b = $_GET['b'];
      echo 'Результат: <b>' . task1($a, $b) . '<b>';
      break;
    }
  }
  case 2: {
    if (isset($_GET['a'])) {
      $a = $_GET['a'];
      echo 'Результат: <b>' . task2($a) . '<b>';
      break;
    }
  }
  case 3: {
    if (isset($_GET['a']) && isset($_GET['op']) && isset($_GET['b'])) {
      $a = $_GET['a'];
      $op = $_GET['op'];
      $b = $_GET['b'];
      echo 'Результат: <b>' . task3($a,$op,$b) . '<b>';
      break;
    }
  }
  default: {
    echo 'error';
  }
}

