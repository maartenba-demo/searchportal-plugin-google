<?php
namespace SearchPortal\Plugins;

class GoogleSearchEnginePlugin implements SearchEnginePluginInterface {
    /**
     * Gets the slug for the search engine.
     *
     * @return string
     */
    public function getSlug() {
        return 'google';
    }

    /**
     * Gets the display name of the search engine.
     *
     * @return string
     */
    function getDisplayName()
    {
        return 'Google';
    }

    /**
     * Constructs the search URL.
     *
     * @param $query string Query string to search for
     * @return string
     */
    function constructSearchUrl($query)
    {
        return 'http://www.google.com/#q=' . $query;
    }
}