# Laravel DKW Models

## Installation

Require it in your Laravel project using Composer:

```bash
composer require makkinga/laravel-dkw-models
```

## Usage

This package gives you the global helper function `dkw()` containing all model names and model name additions.

Optionally you can get a specific array using one of these methods:

```php
dkw()->getModels('car')
dkw()->getModels('motorcycle')
dkw()->getModels('moped')
dkw()->getModels('misc')

dkw()->getModelAdditions('car')
dkw()->getModelAdditions('motorcycle')
dkw()->getModelAdditions('moped')
dkw()->getModelAdditions('misc')

dkw()->getAllModels()
dkw()->getAllModelAdditions()
```

## Licence

Copyright 2019 Gydo Makkinga <gydo@makkinga.online>

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.