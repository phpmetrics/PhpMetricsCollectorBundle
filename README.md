# PhpMetricsCollectorBundle

Integrates [PhpMetrics](http://www.phpmetrics.org) in Symfony debug toolbar.

![License](https://poser.pugx.org/halleck45/phpmetrics/license.svg)
[![Build Status](https://secure.travis-ci.org/Halleck45/PhpMetricsCollectorBundle.svg)](http://travis-ci.org/Halleck45/PhpMetricsCollectorBundle) 

## Overview 

![Overview of PhpMetricsCollectorBundle](doc/images/overview.png)

# Support
* Support Symfony >= 4.3. For older versions of Symfony, use older versions of PHPMetrics.
* Tested on the following versions:
    * Symfony 5.0.4
    * Symfony 4.3.11 with API Platform

# Installation

Install it via composer

**Symfony 4 & 5:**

    composer require --dev phpmetrics/symfony-bundle

**Symfony 2 & 3:**

    composer require --dev halleck45/phpmetrics-collector-bundle:0.0.2
    
# Contribute

Please run unit tests:

    phpunit -c phpunit.xml

# Authors

+ Jean-François LÉPINE <[www.lepine.pro](http://www.lepine.pro)>
+ Eric COURTIAL

# License

See the LICENSE file.
