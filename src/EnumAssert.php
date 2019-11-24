<?php declare(strict_types = 1);

namespace Mhujer\ConsistencePhpunit;

use Consistence\Enum\Enum;
use PHPUnit\Framework\Assert;

final class EnumAssert
{

    /**
     * @param \Consistence\Enum\Enum|mixed $expectedEnum
     * @param \Consistence\Enum\Enum|mixed $actualEnum
     */
    public static function assertSameEnumValues($expectedEnum, $actualEnum): void
    {
        Assert::assertInstanceOf(Enum::class, $expectedEnum);
        Assert::assertInstanceOf(Enum::class, $actualEnum);

        Assert::assertSame($expectedEnum, $actualEnum, sprintf(
            'Expected "%s:%s", but got "%s:%s"',
            get_class($expectedEnum),
            $expectedEnum->getValue(),
            get_class($actualEnum),
            $actualEnum->getValue()
        ));
    }

}
