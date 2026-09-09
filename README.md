# alathazal/starforged-data

![Static Badge](https://img.shields.io/badge/version-1.0.2-blue)

## Usage

To install the **starforged-data** package using composer, run the following at the command line in your project folder.

```
composer require alathazal/starforged-data
```

You can get the paths to the data files using the `getDataPath()` method, used in conjuction with the `DataTypes` enumerator to select which data file you're looking for:

```php
use Alathazal\StarforgedData\StarforgedData;
use Alathazal\StarforgedData\DataTypes;

$starforgedData = new StarforgedData();

$data_path = $starforged->getDataPath(DataTypes::TRUTHS);
```

The `DataTypes` enumerator supports the following options:

- `DataTypes::ASSETS`
- `DataTypes::ASSET_TYPES`
- `DataTypes::ENCOUNTERS`
- `DataTypes::MOVES`
- `DataTypes::MOVE_CATEGORIES`
- `DataTypes::ORACLES`
- `DataTypes::TRUTHS`

## License

This work is based on _Ironsworn: Starforged_, created by Shawn Tomkin, and licensed for our use under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International license (https://spdx.org/licenses/CC-BY-NC-SA-4.0.html). For specific licensing information regarding the bundled images, please refer to the [LICENSE.md](LICENSE.md) for details.

## Thanks and Attribution

The **starforged-data** composer package was based off the [rsek/dataforged](https://github.com/rsek/dataforged/) node package, to provide the same game resources for PHP projects. Even though the data files have been reorganised, a huge thanks has to be given to **rsek** for all their hard work creating the original repository.
