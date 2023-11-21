<?php

declare(strict_types=1);

namespace Kiboko\Component\State\StateOutput;

trigger_deprecation('php-etl/console-state', '0.3', 'The "%s" class is deprecated, use "%s" instead.', 'Kiboko\\Component\\State\\StateOutput\\Pipeline', \Kiboko\Component\Runtime\Pipeline\Step\Step::class);

/*
 * @deprecated since Satellite 0.2, use Kiboko\Component\Runtime\Pipeline\Step\Step instead.
 */
class_alias(\Kiboko\Component\Runtime\Pipeline\Step\Step::class, 'Kiboko\\Component\\State\\StateOutput\\Pipeline');
