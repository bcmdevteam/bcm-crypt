<?php
namespace BcmDevTeam\BcmCrypt;

/**
 * Class BcmCrypter
 * @package BcmDevTeam\BcmCrypt
 */
class BcmCrypter
{
    /**
     * The encryption key.
     *
     * @var string
     */
    protected $key;

    public function __construct($key = "") {
        if (!empty($key)) {
            $this->key = $key;
        } else {
            $this->key = env('APP_KEY');
        }
    }

    /**
     * Encrypt a string.
     *
     * @param $str
     * @return string
     */
    public function encrypt($str){
        $block = mcrypt_get_block_size('rijndael_128', 'ecb');
        $pad = $block - (strlen($str) % $block);
        $str .= str_repeat(chr($pad), $pad);

        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $this->key, $str, MCRYPT_MODE_ECB));
    }

    /**
     * Decrypt a string.
     * 
     * @param $str
     * @return string
     */
    public function decrypt($str){
        $str = base64_decode($str);
        $str = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $this->key, $str, MCRYPT_MODE_ECB);
        $block = mcrypt_get_block_size('rijndael_128', 'ecb');
        $pad = ord($str[($len = strlen($str)) - 1]);
        $len = strlen($str);
        $pad = ord($str[$len-1]);

        return substr($str, 0, strlen($str) - $pad);
    }

}