<?php

class WriterJsonMapTest extends \PHPUnit_Framework_TestCase
{
    function test1()
    {
        $tiled = new \TiledTmx\Parser();
        $map = $tiled->parseFile(__DIR__.'/data/desert.tmx');

        $this->assertEquals(
            '{'
                .'"orientation":"orthogonal",'
                .'"renderorder":"right-down",'
                .'"width":"40",'
                .'"height":"40",'
                .'"tilewidth":"32",'
                .'"tileheight":"32",'
                .'"tileset":['
                    .'{'
                        .'"firstgid":"1",'
                        .'"name":null,'
                        .'"tilewidth":null,'
                        .'"tileheight":null,'
                        .'"tileoffset":null,'
                        .'"image":[],'
                        .'"terraintypes":[],'
                        .'"tile":[],'
                        .'"source":"desert.tsx"'
                    .'}'
                .'],'
                .'"layer":['
                    .'{'
                        .'"name":"Ground",'
                        .'"width":"40",'
                        .'"height":"40",'
                        .'"properties":null,'
                        .'"data":['
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,14,15,16,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,46,14,15,16,30,31,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,14,15,16,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,31,22,23,24,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,1,2,3,30,30,31,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'25,26,26,26,26,26,26,26,26,26,26,26,27,9,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,33,34,34,34,34,34,34,34,34,34,34,34,35,9,10,11,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,40,30,30,30,30,33,34,36,42,37,34,34,34,34,34,'
                            .'34,34,35,9,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'33,34,35,30,33,34,34,34,34,34,34,34,35,9,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,38,30,30,33,34,35,30,33,34,34,34,34,34,34,34,35,9,10,11,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,48,38,30,30,30,30,33,34,44,26,45,34,34,34,34,34,'
                            .'34,34,35,9,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,40,30,30,30,40,30,30,30,33,'
                            .'34,34,34,34,34,34,34,36,42,37,34,35,9,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,40,30,30,'
                            .'30,30,40,38,30,30,38,30,33,34,34,34,34,34,34,34,44,26,45,34,35,9,10,11,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,39,30,30,30,38,30,40,30,30,30,33,34,34,34,34,34,34,34,34,34,34,34,35,9,'
                            .'10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,39,30,30,30,30,30,30,30,41,42,42,42,42,'
                            .'42,42,42,42,42,42,42,43,9,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,7,7,8,1,2,2,2,2,2,2,2,'
                            .'2,3,1,2,2,2,2,2,2,2,2,2,2,29,10,11,30,30,30,30,30,30,30,30,30,30,30,30,30,15,15,16,9,10,10,10,'
                            .'10,10,10,10,10,11,9,10,10,10,10,10,10,10,10,10,10,10,10,11,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,23,23,24,17,18,18,18,18,18,18,18,18,19,17,18,18,18,18,18,18,18,18,18,18,18,18,19,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,39,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,32,31,30,30,30,30,39,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,32,39,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,25,26,26,26,26,26,26,26,26,26,26,26,27,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,46,30,33,34,34,34,34,'
                            .'34,34,34,34,36,42,37,35,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,33,34,34,34,34,34,34,34,34,35,48,33,35,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,47,33,34,34,34,34,34,34,34,34,35,48,33,35,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,39,30,30,30,33,34,34,34,34,34,34,34,34,35,48,33,35,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,33,34,34,34,34,'
                            .'34,34,34,34,44,26,45,35,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,47,30,33,34,34,34,34,34,34,34,34,34,34,34,35,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,33,34,34,34,34,34,34,34,34,34,34,34,35,48,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,33,34,34,34,34,34,34,34,34,34,34,34,35,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,41,42,42,42,42,'
                            .'42,42,42,42,42,42,42,43,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,32,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'32,30,30,30,31,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,32,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,'
                            .'30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30,30'
                        .']'
                    .'}'
                .']'
            .'}',
            \TiledTmx\JsonMapWriter::render($map)
        );
    }
}
