<?php

declare(strict_types=1);

namespace Kiboko\Component\State;

trigger_deprecation('php-etl/console-state', '0.3', 'The "%s" class is deprecated, use "%s" instead.', 'Kiboko\\Component\\State\\MemoryState', 'Kiboko\\Component\\Runtime\\Pipeline\\Step\\MemoryState');

/*
 * @deprecated since Satellite 0.2, use Kiboko\Component\Runtime\Pipeline\Step\MemoryState instead.
 */
class_alias('Kiboko\\Component\\Runtime\\Pipeline\\Step\\MemoryState', 'Kiboko\\Component\\State\\MemoryState');

