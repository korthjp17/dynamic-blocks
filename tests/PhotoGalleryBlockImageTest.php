<?php

class PhotoGalleryBlockImageTest extends SapphireTest
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
        $object = $this->objFromFixture('PhotoGalleryBlockImage', 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf('FieldList', $fields);
        $this->assertNull($fields->dataFieldByName('PhotoGalleryID'));
    }

    /**
     *
     */
    public function testCanView()
    {
        $object = $this->objFromFixture('PhotoGalleryBlockImage', 'one');
        $admin = $this->objFromFixture('Member', 'admin');
        $this->assertTrue($object->canView($admin));
        $member = $this->objFromFixture('Member', 'default');
        $this->assertTrue($object->canView($member));
    }

    /**
     *
     */
    public function testCanEdit()
    {
        $object = $this->objFromFixture('PhotoGalleryBlockImage', 'one');
        $admin = $this->objFromFixture('Member', 'admin');
        $this->assertTrue($object->canEdit($admin));
        $member = $this->objFromFixture('Member', 'default');
        $this->assertTrue($object->canEdit($member));
    }

    /**
     *
     */
    public function testCanDelete()
    {
        $object = $this->objFromFixture('PhotoGalleryBlockImage', 'one');
        $admin = $this->objFromFixture('Member', 'admin');
        $this->assertTrue($object->canDelete($admin));
        $member = $this->objFromFixture('Member', 'default');
        $this->assertTrue($object->canDelete($member));
    }

    /**
     *
     */
    public function testCanCreate()
    {
        $object = $this->objFromFixture('PhotoGalleryBlockImage', 'one');
        $admin = $this->objFromFixture('Member', 'admin');
        $this->assertTrue($object->canCreate($admin));
        $member = $this->objFromFixture('Member', 'default');
        $this->assertTrue($object->canCreate($member));
    }
}
