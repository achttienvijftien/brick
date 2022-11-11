# Brick

Brick is a WordPress starter plugin that makes for easy and fast plugin creation.

## Prerequisites

### Basic installation

- PHP >= 8.0
- [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

### Testing

- Docker
- [nvm](https://github.com/nvm-sh/nvm#install--update-script)
- [Yarn](https://yarnpkg.com/getting-started/install)

## Installation

1. Create a new project using Composer:
   ```sh
   composer create-project achttienvijftien/brick {{name-of-your-plugin}}
   ```
2. Follow the steps in INITIAL-SETUP.md.
3. Good to go!

## Testing

### Setup

1. Install Composer packages: `composer install`
2. Install the correct Node.js version: `nvm install`
3. Install NPM packages: `yarn`
4. Start wp-env `yarn wp-env start`
5. Check if test suite is ready: `yarn test`
6. When test result is OK you're ready to start writing tests in test/php
