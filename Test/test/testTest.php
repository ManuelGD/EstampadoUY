<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;

final class testTest extends TestCase{
    #[DataProvider('datos')]
    #[Test]
    public function sumar(int $expected, int $a, int $b): void{
        $this->assertSame($expected, $a + $b);
    }

    public static function datos(){
        return [
            "data set 1" => [0,0,0],
            "data set 2" => [3,1,2],
            "data set 3" => [3,2,1],
            "data set 4" => [1,1,1],
            "data set 5" => [3,3,0],
        ];
    }
}