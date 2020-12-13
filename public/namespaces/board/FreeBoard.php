<?php

namespace Board;

class FreeBoard
{
    private $title;

    private $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getBoard()
    {
        echo "게시물을 등록합니다. 제목은 " .$this->title. "이며  내용은 " . $this->content . "\n";
    }
}