<?php

namespace webignition\CssValidatorOutput\Model;

abstract class AbstractMessage
{
    const TYPE_ERROR = 'error';
    const TYPE_WARNING = 'warning';
    const TYPE_INFO = 'info';

    private $type;
    private $title;

    public function __construct(string $type, string $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isError(): bool
    {
        return self::TYPE_ERROR === $this->type;
    }

    public function isWarning(): bool
    {
        return self::TYPE_WARNING === $this->type;
    }

    public function isInfo(): bool
    {
        return self::TYPE_INFO === $this->type;
    }
}