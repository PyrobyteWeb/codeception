<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnUrl('https://yandex.ru/');
        $I->see('Сейчас в СМИ');
    }
}
