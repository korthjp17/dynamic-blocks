<?php

class PromoObjectTest extends SapphireTest
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
        $object = $this->objFromFixture('PromoObject', 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf('FieldList', $fields);
        $this->assertNotNull($fields->dataFieldByName('BlockLinkID'));
    }

    /**
     *
     */
    public function testValidateName()
    {
        $object = $this->objFromFixture('PromoObject', 'one');
        $object->Name = '';
        $this->setExpectedException('ValidationException');
        $object->write();
    }

    /**
     *
     */
    public function testCanView()
    {
        $object = $this->objFromFixture('PromoObject', 'one');
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
        $object = $this->objFromFixture('PromoObject', 'one');
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
        $object = $this->objFromFixture('PromoObject', 'one');
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
        $object = $this->objFromFixture('PromoObject', 'one');
        $admin = $this->objFromFixture('Member', 'admin');
        $this->assertTrue($object->canCreate($admin));
        $member = $this->objFromFixture('Member', 'default');
        $this->assertTrue($object->canCreate($member));
    }
}