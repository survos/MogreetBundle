MogreetBundle
=============

Symfony2 Bundle for SMS/MMS Service Mogreet (https://developer.mogreet.com/)

Installation
------------

Add to the composer.json:
```
"require": {
    "vresh/twilio-bundle": "dev-master",
}
```

temporary until mogreet bundle has own autoloader
```
"psr-0": {
    "":        "src/",
    "Mogreet": "vendor/mogreet/mogreet-php"
}
```

Add to your AppKernel.php
```
        $bundles = array(
            ...
            new Survos\MogreetBundle\SurvosMogreetBundle(),
        );
```

Add to config.yml
```
survos_mogreet:
  client_id: %mogreet_client_id%
  token: %mogreet_token%
```







