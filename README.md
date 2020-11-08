# What is this?

Just a quick demo how to use [Doctrine Behavioral Extensions](https://github.com/Atlantic18/DoctrineExtensions)
with Symfony

## Question

Someone asked help on #general channel of Symfony Slack workspace

https://symfony-devs.slack.com/archives/C3EQ7S3MJ/p1604819666382300

So this repository contains simple example about that.

## Usage

Just clone this repository and start the application with `symfony serve` command.

Also you need to create database with `./bin/console doctrine:schema:create` command.

After that just open your browser `http://localhost:8000/example` on each page refresh
new entity is created and you can inspect all the entities from debug bar.

## Authors

* [Tarmo Leppänen](https://github.com/tarlepp)

## License

[The MIT License (MIT)](LICENSE)

Copyright © 2020 Tarmo Leppänen
