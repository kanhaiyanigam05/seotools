<?php

namespace Kanhaiyanigam05\SEOTools\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * OpenGraph is a facade for the `OpenGraph` implementation access.
 *
 * @see \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph
 *
 * @method static string generate(bool $minify = false)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph addProperty(string $key, string|array $value)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph removeProperty(string $key)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph addImage(string $url, array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph addImages(array $urls)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setTitle(string $title)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setDescription(string $description)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setUrl(string $url)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setSiteName(string $name)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setType(string|null $type = null)
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setArticle(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setProfile(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setMusicSong(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setMusicAlbum(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setMusicPlaylist(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setMusicRadioStation(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setVideoMovie(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setVideoEpisode(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setVideoOther(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setVideoTVShow(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph setBook(array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph addVideo(string|null $source = null, array $attributes = [])
 * @method static \Kanhaiyanigam05\SEOTools\Contracts\OpenGraph addAudio(string|null $source = null, array $attributes = [])
 */
class OpenGraph extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'seotools.opengraph';
    }
}
