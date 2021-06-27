<?php

use JetBrains\PhpStorm\Pure;


/**
 * PHP tem um conjunto de interfaces relacionados ao padrão Observer.
 *
 * Aqui está o que o Subject significa:
 *
 * @link http://php.net/manual/en/class.splsubject.php
 *
 *     interface SplSubject
 *     {
 *         // Adicione um observer ao subject.
 *         public function attach(SplObserver $observer);
 *
 *         // Destacar um observer do subject.
 *         public function detach(SplObserver $observer);
 *
 *         // Notificar todos os observers sobre um evento.
 *         public function notify();
 *     }
 *
 * Há também um conjunto de interfaces para os Observers:
 *
 * @link https://www.php.net/manual/pt_BR/class.splobserver.php
 *
 *     interface SplObserver
 *     {
 *         public function update(SplSubject $subject);
 *     }
 */
class Subject implements \SplSubject
{
    /**
     * @var mixed
     *
     * Para o objetivo simples, o estado do subject, essencial para todos os subscritos,
     * isso é salvo nessa variável.
     */
    public mixed $state;

    /**
     * @var SplObjectStorage
     *
     * Lista de subscribers podem ser salvos mais compreensivamente
     * (Categorizado, por evento, tipo, etc...).
     */
    public \SplObjectStorage $observers;

    #[Pure] public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     *
     * Metodos de administração de subscription.
     */
    public function attach(\SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    /**
     * Acionando a atualização em cada subscriber.
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            if (!($observer instanceof \SplObserver)) {
                continue;
            }

            $observer->update($this);
        }
    }
}
