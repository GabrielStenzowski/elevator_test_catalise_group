<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Domain\Elevador;

$elevador = new Elevador(8);

echo "=== SIMULAÇÃO DO ELEVADOR ===\n";
echo "Digite o andar desejado ou 'sair' para encerrar:\n";

while (true) {
  echo "\nAndar atual: {$elevador->getAndarAtual()}\n";
  echo "Informe o andar (ou 'sair' para encerrar): ";
  $input = trim(fgets(STDIN));

  if (strtolower($input) === 'sair') {
    echo "Encerrando simulação.\n";
    break;
  }

  if (!is_numeric($input)) {
    echo "Entrada inválida. Digite um número inteiro ou 'sair'.\n";
    continue;
  }

  $elevador->chamar((int)$input);

  while (true) {

    $houveMovimento = $elevador->mover();

    if ($elevador->getAndarAtual() === (int)$input) {
      echo "Elevador chegou ao andar desejado: $input.\n";
      break;
    }
    if (!$houveMovimento) {
      break;
    }
  }
}
