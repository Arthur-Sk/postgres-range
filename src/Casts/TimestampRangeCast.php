<?php

namespace Belamov\PostgresRange\Casts;

use Belamov\PostgresRange\Ranges\TimestampRange;

class TimestampRangeCast extends RangeCast
{
    /**
     * @param  array  $matches
     * @return TimestampRange
     */
    public function getRangeInstance(array $matches): TimestampRange
    {
        return new TimestampRange($matches[2], $matches[3], $matches[1], $matches[4]);
    }

}
