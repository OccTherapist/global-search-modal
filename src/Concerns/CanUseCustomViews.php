<?php

namespace CharrafiMed\GlobalSearchModal\Concerns;

use Closure;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Blade;

// use function CharrafiMed\GlobalSearchModal\format_styles;

trait CanUseCustomViews
{
    public  ?View $emptyQueryView = null;
    public  ?View $footerView = null;
    public  ?View $notFoundResultsView = null;
    public bool $hasFooterView = true;


    public  function emptyQueryView($view): self
    {
        $this->emptyQueryView = $view;
        return $this;
    }
    public  function footerView($view): self
    {
        $this->footerView = $view;
        return $this;
    }
    public  function notFoundResultsView($view): self
    {
        $this->notFoundResultsView = $view;
        return $this;
    }

    public function hasFooterView()
    {
        return $this->hasFooterView;
    }

    public  function hasNotFoundView()
    {
        return $this->notFoundResultsView;
    }

    public  function hasEmptyQueryView()
    {
        return $this->hasEmptyQueryView;
    }

    public function keepFooterView(bool $condition = true)
    {
        $this->hasFooterView = $condition;
        return $this;
    }
    public function getFooterView()
    {
        return $this->footerView;
    }
}
