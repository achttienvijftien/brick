# Initial setup

Follow the following steps to set up this plugin.

## 1. Find & replace:

* `AchttienVijftien\\Plugin\\Brick\\` in composer.json to a more suitable namespace
* `AchttienVijftien\Plugin\Brick` in the whole plugin to whatever namespace you set in the previous step

## 2. WordPress plugin information
Update the information in the first comment in `brick.php`.

## 3. Rename plugin file
1. Rename the plugin file in project root named `brick.php` to whatever your plugin is named (should be the same as the folder).
2. Replace the filename in the following files:
   - `tests/bootstrap.php` line 20
   - `phpcs.xml.dist` line 14
3. Update the plugin path in `package.json` line 12

## 4. Finalize
Remove this file (INITIAL-SETUP.md), commit and push
