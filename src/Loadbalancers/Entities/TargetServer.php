<?php

namespace UKFast\SDK\Loadbalancers\Entities;

use UKFast\SDK\Entity;

/**
 * @property string $id
 * @property string $backendId
 * @property string $ip
 * @property integer $port
 * @property integer $weight
 * @property boolean $backup
 * @property integer $checkInterval
 * @property boolean $checkSsl
 * @property integer $checkRise
 * @property integer $checkFall
 * @property boolean $disableHttp2
 * @property boolean $http2Only
 * @property boolean $sendProxy
 * @property boolean $sendProxyV2
 */
class TargetServer extends Entity
{
}
