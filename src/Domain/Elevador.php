<?php

namespace App\Domain;

use App\Core\FilaChamados;
use App\Core\ValidadorDeAndar;

class Elevador
{
  private FilaChamados $filaChamados;
  private int $andarAtual;
  private int $capacidade;

  public function __construct(int $capacidade)
  {
    $this->filaChamados = new FilaChamados();
    $this->andarAtual = 0;
    $this->capacidade = $capacidade;
  }

  public function chamar(int $andar): void
  {
    if (!ValidadorDeAndar::validar($andar)) {
      echo "Andar inválido! Digite um número maior ou igual a 0.\n";
      return;
    }

    $this->filaChamados->adicionar($andar);
    echo "Chamado para o andar $andar registrado.\n";
  }

  public function mover(): bool
  {
    if ($this->filaChamados->estaVazia()) {
      echo "Nenhum chamado pendente. Elevador parado no andar {$this->andarAtual}.\n";
      return false;
    }

    $proximo = $this->filaChamados->proximo();

    echo "Elevador saindo do andar {$this->andarAtual} em direção ao andar $proximo...\n";
    echo "Você pode chamar o elevador novamente, enquanto ele estiver em movimento.\n";

    $passo = $this->andarAtual < $proximo ? 1 : -1;

    while ($this->andarAtual !== $proximo) {
      $this->andarAtual += $passo;
      echo "Elevador no andar {$this->andarAtual}...\n";
      sleep(2);
    }

    echo "Elevador chegou ao destino: andar {$this->andarAtual}.\n";
    return true;
  }


  public function getAndarAtual(): int
  {
    return $this->andarAtual;
  }
}
