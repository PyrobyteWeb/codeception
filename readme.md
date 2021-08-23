## [Офф. документация](https://codeception.com/docs/03-AcceptanceTests) ##

Копируем .env.example на .env и прописываем порты для Selenium и Chrome. 
Если мы работаем не через докер, то делаем это:
````
npm install selenium-standalone -g
selenium-standalone install
selenium-standalone start
````
и закомментировать в acceptance.suite.yml параметр ``host`` 

- Создание приемочного теста с произвольным названием ``php vendor/bin/codecept init acceptance``
- Создание приемочного теста с со своим названием ``php vendor/bin/codecept init acceptance MyTestName``
- Запуск всех тестов ``php vendor/bin/codecept run --steps``
- Запуск конкретного теста ``php vendor/bin/codecept run acceptance FirstCest ``

Тесты сгенерируются и пишутся в папке /src/tests/acceptance