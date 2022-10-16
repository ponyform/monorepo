<?php

namespace PonyForm\SelectionQuestionPlugin;

use PonyForm\PluginContract\QuestionPluginInterface;

class SelectionQuestionPlugin implements QuestionPluginInterface
{
    public function getType(): string
    {
        return 'selection';
    }

    public function getTemplateDirectory(): string
    {
        return __DIR__ . DIRECTORY_SEPARATOR . 'templates';
    }

    public function getTemplateFilename(): string
    {
        return 'selection.twig';
    }

    public function getStyleSheet(): string
    {
        return 'selection.css';
    }
}