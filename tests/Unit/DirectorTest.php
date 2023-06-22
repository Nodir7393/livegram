<?php

namespace Tests\Unit;

use App\Telegram\Design\Button\AddBotKeyboard;
use App\Telegram\Design\Button\AddBotKeyboardBuilder;
use App\Telegram\Design\Button\Director;
use App\Telegram\Design\Button\StartKeyboard;
use App\Telegram\Design\Button\StartKeyboardBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function test_can_build_start(): void
    {
        $newVehicle = (new Director())->build(new StartKeyboardBuilder());
        $this->assertInstanceOf(StartKeyboard::class, $newVehicle);
    }

    public function test_can_build_add_bot(): void
    {
        $newVehicle = (new Director())->build(new AddBotKeyboardBuilder());
        $this->assertInstanceOf(AddBotKeyboard::class, $newVehicle);
    }
}
