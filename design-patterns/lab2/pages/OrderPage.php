<?php

namespace pages;

use components\AnotherRecipient;
use components\Component;
use components\OrderDate;
use components\Pickup;
use interfaces\IMediator;

class OrderPage implements IMediator
{
    private string $title;
    private OrderDate $orderDate;
    private AnotherRecipient $anotherRecipient;
    private Pickup $pickup;

    public function notify(Component $component, string $event): void
    {
        if ($event === 'changed') {
            if ($component instanceof OrderDate && $component->value) {
                // Змінити список доступних проміжків часу
            } elseif ($component instanceof OrderDate && !$component->value) {
                // Повернути список доступних проміжків часу за замовченням
            }
        }

        if ($event === 'check') {
            if ($component instanceof AnotherRecipient && $component->value) {
                // Відобразити додаткові поля Ім'я та Телефон
            } elseif ($component instanceof AnotherRecipient && !$component->value) {
                // Сховати додаткові поля Ім'я та Телефон
            }

            if ($component instanceof Pickup && $component->value) {
                // Деактивувати пов'язані поля
            } elseif ($component instanceof Pickup && !$component->value) {
                // Активувати пов'язані поля
            }
        }
    }
}