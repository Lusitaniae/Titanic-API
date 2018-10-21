<?php

class ApiHttpTest extends TestCase
{

    /*
    * Verify that the Home route is accessible.
    */
    public function testHome()
    {
      $response = $this->json('GET', '/api/v1/')
                      ->seeJson(["Welcome to the Titanic Passenger API."]);
    }

    /*
    * Verify that the database has been fully seeded and we're able to find a passenger.
    */
    public function testIndex()
    {
      $response = $this->json('GET', '/api/v1/passengers')
                      ->seeJson([
                          "name" => "Mr. Patrick Dooley"
                        ]);
    }

    /*
    * Verify we can read a specific passenger.
    */
    public function testGetPassenger()
    {
      $response = $this->json('GET', '/api/v1/passenger/3')
                      ->seeJson([
                          "name" => "Miss. Laina Heikkinen"
                        ]);
    }

    /*
    * Verify we can create a new passenger.
    */
    public function testPostPassenger()
    {
      $passenger = [
          'survived' => 1,
          'pclass' => 1,
          'age' => 12,
          'name' => 'dummy',
          'sex' => 'male',
          'siblings_spouses_aboard' => 1,
          'parents_children_aboard' => 1,
          'fare' => '120,4215'
      ];
      $response = $this->json('POST', '/api/v1/passenger', $passenger)
                      ->seeJson($passenger);
    }

    /*
    * Verify we can update an existing passenger.
    */
    public function testPutPassenger()
    {
      $passenger = [
          'survived' => 1,
          'pclass' => 1,
          'age' => 12,
          'name' => 'modified',
          'sex' => 'male',
          'siblings_spouses_aboard' => 1,
          'parents_children_aboard' => 1,
          'fare' => '120,4215'
      ];
      $response = $this->json('PUT', '/api/v1/passenger/3', $passenger)
                      ->seeJson($passenger);
    }

    /*
    * Verify we can remove an existing passenger.
    */
    public function testDeletePassenger()
    {
      $response = $this->json('DELETE', '/api/v1/passenger/6')
                      ->seeJson(['passanger removed successfully']);
    }
}
