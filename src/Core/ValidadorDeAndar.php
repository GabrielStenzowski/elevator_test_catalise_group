<?php

namespace App\Core;

class ValidadorDeAndar
{
  public static function validar(int $andar): bool
  {
    return $andar >= 0;
  }
}
