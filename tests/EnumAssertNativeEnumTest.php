<?php declare(strict_types = 1);

namespace Mhujer\ConsistencePhpunit;

use Mhujer\ConsistencePhpunit\Fixtures\CardColor;
use Mhujer\ConsistencePhpunit\Fixtures\CardColorNative;

final class EnumAssertNativeEnumTest extends \PHPUnit\Framework\TestCase
{

    public function testComparingTwoSimilarEnumValuesWork(): void
    {
        EnumAssert::assertSame(CardColorNative::RED, CardColorNative::RED);
    }

    public function testAssertSameEnumFailsIfActualValueIsNotAnEnum(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Failed asserting that \'foobar\' is an instance of interface BackedEnum.');

        EnumAssert::assertSame(CardColorNative::RED, 'foobar');
    }

    public function testAssertSameEnumFailsIfExpectedValueIsNotAnEnum(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Failed asserting that \'foobar2\' is an instance of interface BackedEnum.');

        EnumAssert::assertSame('foobar2', CardColorNative::BLACK);
    }

    public function testAssertSameEnumFailsIfTheEnumsAreNotSame(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Expected "Mhujer\ConsistencePhpunit\Fixtures\CardColorNative:red", but got "Mhujer\ConsistencePhpunit\Fixtures\CardColorNative:black"');

        EnumAssert::assertSame(CardColorNative::RED, CardColorNative::BLACK);
    }


    public function testComparingNativeEnumWithConsistenceEnum(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Failed asserting that Mhujer\ConsistencePhpunit\Fixtures\CardColorNative Enum (RED, \'red\') is an instance of class Consistence\Enum\Enum.');

        EnumAssert::assertSame(CardColorNative::RED, CardColor::get(CardColor::BLACK));
    }

}
