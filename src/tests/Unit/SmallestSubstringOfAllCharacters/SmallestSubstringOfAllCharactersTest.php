<?php
declare(strict_types=1);

namespace Tests\Unit\SmallestSubstringOfAllCharacters;

use App\SmallestSubstringOfAllCharacters\SmallestSubstringOfAllCharacters;
use PHPUnit\Framework\TestCase;

class SmallestSubstringOfAllCharactersTest extends TestCase
{
    /**
     * @test
     */
    public function getShortestUniqueSubstring_whenSubstringNotExist_getEmptyString():void{
        //GIVEN
        $characters = ["x", "a", "b"];
        $full_string = "yyzyzu";

        $finder = new SmallestSubstringOfAllCharacters();

        $substring = $finder->run($characters, $full_string);

        $this->assertSame("", $substring);
    }


    /**
     * @test
     */
    public function getShortestUniqueSubstring_whenSubstringExist_getSubstring():void{

        //GIVEN
        $implote = "abcdefghi";
        $characters = [];
        for ($i=0;$i<strlen($implote);$i++){
            $characters[] = $implote[$i];
        }
        $full_string = "zyuwtsabcdefgeeehijklmnnbnmklyuefsdoabcdefghijklmnoprstwuyzprttrstwuyzerr";

        $finder = new SmallestSubstringOfAllCharacters();

        $substring = $finder->run($characters, $full_string);

        $this->assertSame("abcdefghi", $substring);

    }

}