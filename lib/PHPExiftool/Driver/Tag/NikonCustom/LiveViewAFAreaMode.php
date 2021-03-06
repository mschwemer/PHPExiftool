<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class LiveViewAFAreaMode extends AbstractTag
{

    protected $Id = '34.1';

    protected $Name = 'LiveViewAFAreaMode';

    protected $FullName = 'NikonCustom::SettingsD7000';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Live View AF Area Mode';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Face-Priority',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'NormalArea',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'WideArea',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'SubjectTracking',
        ),
    );

}
