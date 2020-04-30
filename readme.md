# Mikofb MTN SMS CLOUD
Lavarel package for performing sms campaigns using the MTN SMS CLOUD service.

## Download
Type the following command in your terminal.
```
composer require mikofb/mtn-sms-cloud
```

## Register the Service Provider
Update the providers array in `config/app.php`.

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */


        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        Mikofb\MtnSmsCloud\MtnSmsCloudServiceProvider::class,
    ],
```

## How to use it
```php
use Mikofb\MtnSmsCloud\Core\MtnSmsCloud;

/**
 * Create a new Instance
 * 
 * @param string $sender_id = The desired sender_id
 * @param string $token = $token associated with $sender_id 
 */
$msa = new MtnSmsCloud($sender_id, $token);

/**
 * Send a new Campaign
 * 
 * @param array $recipients {Ex: ["225xxxxxxxx", "233xxxxxxxx"]}
 * @param string $message
 */
return $msa->newCampaign($recipients, $message);

/**
 * Retrieves on created Campaign
 * 
 * @param string $campaign_id
 * @param string $message
 */
return $msa->getCampaign($campaign_id, $message);

```

> Made with :heart: by Mikofb.