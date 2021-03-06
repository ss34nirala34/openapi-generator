<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\EnumTest;

/**
 * EnumTestTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\EnumTest
 */
class EnumTestTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "EnumTest"
     */
    public function testEnumTest()
    {
        $testEnumTest = new EnumTest();
        $this->markTestIncomplete(
            'Test of "EnumTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "enumString"
     */
    public function testPropertyEnumString()
    {
        $this->markTestIncomplete(
            'Test of "enumString" property in "EnumTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "enumStringRequired"
     */
    public function testPropertyEnumStringRequired()
    {
        $this->markTestIncomplete(
            'Test of "enumStringRequired" property in "EnumTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "enumInteger"
     */
    public function testPropertyEnumInteger()
    {
        $this->markTestIncomplete(
            'Test of "enumInteger" property in "EnumTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "enumNumber"
     */
    public function testPropertyEnumNumber()
    {
        $this->markTestIncomplete(
            'Test of "enumNumber" property in "EnumTest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "outerEnum"
     */
    public function testPropertyOuterEnum()
    {
        $this->markTestIncomplete(
            'Test of "outerEnum" property in "EnumTest" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaObject = EnumTest::getOpenApiSchema();
        $schemaArr = EnumTest::getOpenApiSchema(true);
        $this->assertIsObject($schemaObject);
        $this->assertIsArray($schemaArr);
    }
}
