<?php

namespace App\Core;

use SplQueue;

class FilaChamados
{
  private SplQueue $fila;

  public function __construct()
  {
    $this->fila = new SplQueue();
  }

  public function adicionar(int $andar): void
  {
    $this->fila->enqueue($andar);
  }

  public function proximo(): ?int
  {
    return $this->fila->isEmpty() ? null : $this->fila->dequeue();
  }

  public function estaVazia(): bool
  {
    return $this->fila->isEmpty();
  }

  public function getFila(): SplQueue
  {
    return clone $this->fila;
  }
}
