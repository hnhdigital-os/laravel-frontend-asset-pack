<?php

namespace HnhDigital\LaravelFrontendAssetPack;

use HnhDigital\LaravelFrontendAssetLoader\PackageAbstract;

/**
 * TuiEditor.
 *
 * @link
 */
class TuiEditor extends PackageAbstract
{
    /**
     * Load before.
     *
     * @return void
     */
    public function before()
    {
        $this->package('Jquery');
        $this->package('Highlight', 'github');
        $this->package('CodeMirror');
        $this->package('SquireRte');
        $this->package('MarkdownIt');
        $this->package('Raphael');
        $this->package('ToMark');
    }

    /**
     * Load CDN.
     *
     * @return void
     */
    public function cdn()
    {
        $this->add('https://uicdn.toast.com/tui-editor/v'.$this->version().'/tui-editor.min.css');
        $this->add('https://uicdn.toast.com/tui-editor/v'.$this->version().'/tui-editor-contents.min.css');
        $this->add('vendor/plantuml-encoder.js');
        $this->add('https://uicdn.toast.com/tui.code-snippet/v'.$this->info('plugins.CodeSnippet').'/tui-code-snippet.min.js');
        $this->add('https://uicdn.toast.com/tui-color-picker/v'.$this->info('plugins.ColorPicker').'/tui-color-picker.min.js');
        $this->add('https://uicdn.toast.com/tui-editor/v'.$this->version().'/tui-editor-Editor-all.min.js');
    }

    /**
     * Load local.
     *
     * @return void
     */
    public function local()
    {
        $this->add('vendor/popper.js');
        $this->add('vendor/tui-editor/tui-editor.css');
        $this->add('vendor/tui-editor/tui-editor-contents.css');
        $this->add('vendor/plantuml-encoder.js');
        $this->add('vendor/tui-code-snippet.js');
        $this->add('vendor/tui-color-picker.js');
        $this->add('vendor/tui-editor/tui-editor-Editor-all.js');
    }
}
