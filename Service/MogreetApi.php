<?php
namespace Survos\MogreetBundle\Service;

/**
 * This file is part of the SurvosMogreetBundkle.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Peter Grochowski <piogrek@gmail.com>
 */
class MogreetApi extends \Mogreet
{
    /**
     * @param [type] $sid   [description]
     * @param [type] $token [description]
     */
    public function __construct($sid, $token)
    {
        parent::__construct($sid, $token);
    }
}
