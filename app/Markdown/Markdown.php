<?php
/**
 * Created by PhpStorm.
 * User: terence
 * Date: 2017/12/5
 * Time: 下午4:09
 */

namespace App\Markdown;


class Markdown
{
    protected $parser;

    public function __construct(Parser $parser)
    {
        $this->parser =$parser;
    }

    public function markdown($text)
    {
        $html = $this->parser->makeHtml($text);
        return $html;
    }
}