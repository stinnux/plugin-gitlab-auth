<?php

namespace Kanboard\Plugin\GitlabAuth\User;

use Kanboard\User\OAuthUserProvider;

/**
 * Gitlab OAuth User Provider
 *
 * @package  user
 * @author   Frederic Guillot
 */
class GitlabUserProvider extends OAuthUserProvider
{
    /**
     * Get external id column name
     *
     * @access public
     * @return string
     */
    public function getExternalIdColumn()
    {
        return 'gitlab_id';
    }
}
