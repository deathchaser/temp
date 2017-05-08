Feature: Handle user login via RESTful API

  in order to allow secure access to the system
  as a client software developer
  i need to be able to let users log in and out

  Background:
    Given there are Users with the following details:
      | id | username | email          | password |
      | 1  | peter    | peter@test.com | testpass |
      | 2  | john     | john@test.org  | john     |


  Scenario: User can login with good credentials
    When I send a "POST" request to "/login" with body:
      """
      { "username": "peter", "password": "testpass" }
      """
    Then the response code should be 200
    And the response should contain "token"