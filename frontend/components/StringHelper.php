<?php

namespace frontend\components;

use Yii;

/**
 * Description of StringHelper
 *
 * @author anna
 */
class StringHelper 
{

    private $limit;
    private $words;

    public function __construct() 
    {
        $this->limit = Yii::$app->params['shortTextSymbolsLimit'];
        $this->words = Yii::$app->params['shortTextWordsLimit'];
    }
    
    public function cutStringBySymbols($string, $limit = null) 
    {
        if ($limit === null) {
            $limit = $this->limit;
            if (strlen($string) > $limit) {
                $substr = substr($string, 0, $limit);
                for ($i = $limit; $i <= strlen($string); $i++) {
                    while (preg_match('~\w~', $string{$i})) {
                        $substr .= $string{$i};
                        $i++;
                    }
                    return $substr;
                }
            } else {
                return $string;
            }
        }
        return substr($string, 0, $limit);
    }

    public function cutStringByWords($string, $words = null) 
    {
        if ($words === null) {
            $words = $this->words;
        }
        $array = explode(' ', $string);
        if ($words < count($array)) {

            $substr = '';
            for ($i = 0; $i <= $words - 1; $i++) {
                $substr .= $array[$i] . ' ';
            }
            return trim($substr);
        } else {
            return $string;
        }
    }

}
