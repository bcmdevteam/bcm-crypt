#BcmCrypt

###Installation

Pull the project by running: `composer require bcmdevteam/bcm-crypt`

Add in your `config/app.php`:
<pre>
'providers' => [
    ...
    BcmDevTeam\BcmCrypt\Provider\BcmCryptProvider::class,
    ...
],

'aliases' => [
    ...
    'BcmCrypt'  => BcmDevTeam\BcmCrypt\Facade\BcmCryptFacade::class,
    ...
]
</pre>
