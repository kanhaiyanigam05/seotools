<?php

namespace Kanhaiyanigam05\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * JsonLd is a facade for the `JsonLd` implementation access.
 *
 * @see \Kanhaiyanigam05\SEOTools\Contracts\JsonLd
 * @method static string generate(bool $minify = false)
 * @method static bool isEmpty()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd addValue(string $key, string|array $value)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd addValues(array $values)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd setType(string $type)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd setTitle(string $title)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd setSite(string $site)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd setDescription(string $description)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd setUrl(string|null|bool $url)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd addImage(string|array $image)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLd setImages(string|array $images)
 */
class JsonLd extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.json-ld';
    }
}
