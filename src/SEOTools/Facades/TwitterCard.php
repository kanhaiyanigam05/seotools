<?php

namespace Kanhaiyanigam05\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * TwitterCard is a facade for the `TwitterCards` implementation access.
 *
 * @see \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards
 *
 * @method static string generate(bool $minify = false)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards addValue(string $key, string|array $value)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setType(string $type)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setTitle(string $title)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setSite(string $site)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setDescription(string $description)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setUrl(string $url)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards addImage(string|array $image)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setImages(string|array $images)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\TwitterCards setImage(string|array $images)
 */
class TwitterCard extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.twitter';
    }
}
