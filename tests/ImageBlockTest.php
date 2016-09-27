<?php

class ImageBlockTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = 'dynamic-blocks/tests/Fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = singleton('ImageBlock');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf('FieldList', $fields);
        $this->assertNotNull($fields->dataFieldByName('Image'));
    }
}