<?php

namespace Kanhaiyanigam05\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * JsonLd is a facade for the `JsonLd` implementation access.
 *
 * @see \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti
 * @method static string generate(bool $minify = false)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti newJsonLd()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti isEmpty()
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti select(int $index)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti addValue(string $key, string|array $value)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti addValues(array $values)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti setType(string $type)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti setTitle(string $title)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti setSite(string $site)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti setDescription(string $description)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti setUrl(string|null|bool $url)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti addImage(array|string $image)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\JsonLdMulti setImages(string|array $images)
 */
class JsonLdMulti extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.json-ld-multi';
    }
}
