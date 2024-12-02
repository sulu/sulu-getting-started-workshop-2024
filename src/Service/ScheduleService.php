<?php

declare(strict_types=1);

namespace App\Service;

class ScheduleService
{
    public function getSchedule(): array
    {
        return [
            [
                'name' => 'Check-in and welcome light breakfast ☕ 🥐',
                'from' => '08:00',
                'to' => '09:00',
                'speaker' => null,
            ],
            [
                'name' => '🎉 Opening / Welcome session 👋',
                'from' => '09:00',
                'to' => '09:15',
                'speaker' => null,
            ],
            [
                'name' => 'Keynote',
                'from' => '09:15',
                'to' => '09:55',
                'speaker' => 'Fabien Potencier',
            ],
            [
                'name' => 'HTTP compression in Symfony apps',
                'from' => '10:05',
                'to' => '10:40',
                'speaker' => 'Kévin Dunglas',
            ],
            [
                'name' => 'Break ☕ 🥐',
                'from' => '10:40',
                'to' => '11:10',
                'speaker' => null,
            ],
            [
                'name' => 'Symfony Form - Practical use cases',
                'from' => '11:10',
                'to' => '11:45',
                'speaker' => 'Alexandre Salomé',
            ],
            [
                'name' => 'A brand-new way to serialize data in Symfony',
                'from' => '11:55',
                'to' => '12:30',
                'speaker' => 'Mathias Arlaud',
            ],
            [
                'name' => 'Lunch 🍽',
                'from' => '12:30',
                'to' => '14:30',
                'speaker' => null,
            ],
        ];
    }
}
