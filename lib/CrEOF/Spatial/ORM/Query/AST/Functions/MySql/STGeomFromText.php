<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\MySql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

/**
 * STDistanceSphere DQL function
 *
 * @author Adrien Blandin <adrien@lepermislibre.fr>
 * @license http://mit-license.org MIT
 */
class STGeomFromText extends AbstractSpatialDQLFunction
{
    protected $platforms = array('mysql');

    protected $functionName = 'ST_GeomFromText';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
