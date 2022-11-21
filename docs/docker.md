---
layout: default
---

# Docker

A [Dockerfile](../Dockerfile) included in this project allows you to run example script in html page or cli console and run unit tests.

## Initialization

### Build container
First you need to build the container.
```bash
docker build -t colormind .
```
You must launch **again** this command each time you make changes in Dockerfile.

### Fetch libraries with composer
And you need to fetch all needed libraries describe in [composer.json](../composer.json) file.
```bash
docker run -it --rm --name colormind -v "$(pwd)":/application colormind composer install
```
You must launch **again** this command each time you make changes in composer.json file.

## Run unit test
```bash
docker run -it --rm --name colormind -v "$(pwd)":/application colormind composer run-script test
```
