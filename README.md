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





