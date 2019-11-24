<?php declare(strict_types = 1);

namespace Mhujer\ConsistencePhpunit;

use Mhujer\ConsistencePhpunit\Fixtures\CardColor;

final class EnumAssertTest extends \PHPUnit\Framework\TestCase
{

    public function testComparingTwoSimilarEnumValuesWork(): void
    {
        EnumAssert::assertSameEnumValues(CardColor::get(CardColor::RED), CardColor::get(CardColor::RED));
    }

    public function testAssertSameEnumFailsIfActualValueIsNotAnEnum(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Failed asserting that \'foobar\' is an instance of class "Consistence\Enum\Enum".');

        EnumAssert::assertSameEnumValues(CardColor::get(CardColor::RED), 'foobar');
    }

    public function testAssertSameEnumFailsIfExpectedValueIsNotAnEnum(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Failed asserting that \'foobar2\' is an instance of class "Consistence\Enum\Enum".');

        EnumAssert::assertSameEnumValues('foobar2', CardColor::get(CardColor::BLACK));
    }

    public function testAssertSameEnumFailsIfTheEnumsAreNotSame(): void
    {
        $this->expectException(\PHPUnit\Framework\ExpectationFailedException::class);
        $this->expectExceptionMessage('Expected "Mhujer\ConsistencePhpunit\Fixtures\CardColor:red", but got "Mhujer\ConsistencePhpunit\Fixtures\CardColor:black"');

        EnumAssert::assertSameEnumValues(CardColor::get(CardColor::RED), CardColor::get(CardColor::BLACK));
    }

}
