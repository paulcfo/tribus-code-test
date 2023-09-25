## INTRODUCTION

The Tribus Module was created as part of a coding challenge. It has 2 services, a simple `Adder` that adds 2 numbers and a `StringFormatter` that formats the result. The module also has a controller that displays the results on a simple page. 

## TOOLS USED 

1. Drupal/PHP
2. Composer
3. Git
4. Drush
5. DDEV/Docker
6. VSCode
7. Internet Resources: Drupal Docs, Github Co-pilot. 

## SOLUTION

1. **Service Definition**: Created 2 services, `Adder` and `StringFormatter`. Defined these services in the `tribus_module.services.yml` file to make them available for use in the module.

2. **Dependency Injection**: Utilized Drupal’s dependency injection to inject the `Adder` service into the `StringFormatter` service and then to inject the `StringFormatter` service into the controller.

3. **Controller & Route Definition**: Created a controller `TribusController` with a `display` method to handle the output, then defined a custom route in `tribus_module.routing.yml` to map the URL path to the controller.

4. **Error Handling**: Added some input validation and error handling to ensure that only numbers are computed by the `Adder` service.

5. **Testing**: Visit the custom path `/tribus/display/{num1}/{num2}` to view the correctly formatted output.


## REQUIREMENTS

- None 
There are no external dependencies for this module.


## INSTALLATION

1. Download the Module `src` files
2. Create a new folder within `modules` named `tribus_module`
3. Move `src` folders with all it's files inside the new module
4. Enable the custom module using drush or by visiting `/admin/modules` and searching for `Tribus Module`
5. Verify the installation by visiting the custom path `/tribus/display/{num1}/{num2}` 

Install as you would normally install a contributed Drupal module.
See: https://www.drupal.org/node/895232 for further information.

## TESTING

1. Visit path `/tribus/display/{num1}/{num2}` to test that the module works.
2. If the module is working correctly, you should see the following output:
`The sum of 1 and 2 is 3.`, if non integers or floats are used as params, you will see `page not found - The requested page could not be found`. 

