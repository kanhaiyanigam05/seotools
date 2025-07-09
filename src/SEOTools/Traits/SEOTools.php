<?php

namespace Kanhaiyanigam05\SEOTools\Traits;

use Kanhaiyanigam05\SEOTools\Contracts\SEOFriendly;

trait SEOTools
{
    /**
     * @return \Kanhaiyanigam05\SEOTools\Contracts\SEOTools
     */
    protected function seo()
    {
        return app('seotools');
    }

    /**
     * @param SEOFriendly $friendly
     *
     * @return \Kanhaiyanigam05\SEOTools\Contracts\SEOTools
     */
    protected function loadSEO(SEOFriendly $friendly)
    {
        $SEO = $this->seo();

        $friendly->loadSEO($SEO);

        return $SEO;
    }
}
