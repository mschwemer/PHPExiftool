<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPCrd;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class GrayMixerBlue extends AbstractTag
{

    protected $Id = 'GrayMixerBlue';

    protected $Name = 'GrayMixerBlue';

    protected $FullName = 'XMP::crd';

    protected $GroupName = 'XMP-crd';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crd';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Gray Mixer Blue';

    protected $flag_Avoid = true;

}
