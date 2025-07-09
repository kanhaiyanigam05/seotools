<?php

namespace Kanhaiyanigam05\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * SEOTools is a facade for the `SEOTools` implementation access.
 *
 * @see \Kanhaiyanigam05\SEOTools\Contracts\SEOTools
 *
 * @method static string generate(bool $minify = false)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\MetaTags metatags()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph opengraph()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards twitter()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd jsonLd()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti jsonLdMulti()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\SEOTools setTitle(string $title, bool $appendDefault = true)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\SEOTools setDescription(string $description)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\SEOTools setCanonical(string $url)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\SEOTools addImages(array|string $urls)
 * @method static string getTitle(bool $session = false)
 */
class SEOTools extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools';
    }
}
