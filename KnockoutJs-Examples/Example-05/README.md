# Example 05

JavaScript objects and custom view models.

    function AppViewModel() {
        this.firstname = "Bert";
        this.surname = "Bertington";
    }

    // Activates knockout.js
    ko.applyBindings(new AppViewModel());

The above as knockout.js's default example, showing that they use 'constructor functions' for creating objects. Magento has followed this practice.

To create our own view model:
1. Create a new RequireJS module that returns a `uiElement` constructor function.
2. Add our view variables to the object created by the above constructor function.
3. Configure x-magento-init script to use the new component/view model.

In this example, we have created our own RequireJS module at `Learning/KnockoutJS/view/frontend/web/custom-view-model.js`. We then created `Learning/KnockoutJs/view/frontend/web/template/custom.html` as our template. Lastly, we updated `example.phtml` to call our custom component.

    <script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                    "learning_knockoutjs_js_viewmodel": {
                        "component": "Learning_KnockoutJs/custom-view-model",
                        "template": "Learning_KnockoutJs/custom"
                    }
                }
            }
        }
    }
    </script>

In our view model `custom-view-model.js` we have 3 examples of returning data. One is `default` which can list values that can then be called in our template. By default, this means that an instantiated view model will have a `helloMsg` property with a value of "Hello from custom-view-model.js". However, it is possible to override default values in the `x-magento-init` script. This is shown with `thisMsgWillBeOverridden`. There is also another way to override values using the `config` object, but it is recommended not to use it. This is displayed with `thisMsgWillBeOverriddenTwice`

The other two are functions. `getListOfNames` returns an array of names that is looped over and output in our template. The other, `getSomeValue` is an example of a function that performs some logic before returning a value.

In our template `custom.html` the values are output via `data-bind`. The interesting one is the list. 

    <ul data-bind="foreach:getListOfNames()">
        <li data-bind="text:$data"></li>
    </ul>

Here, `getListOfNames` is called in foreach, and a name is output in each loop via `data-bind="text:$data"`. The `$data` variable contains the current value of the loop.

Lastly, we show an example of an observable data value. In `example.phtml` we added

    <div data-bind="scope: 'observableExample'">
        <!-- ko template: getTemplate() --><!-- /ko -->
    </div>

and

    <script type="text/x-magento-init">
    {
        "*": {
            "Magento_Ui/js/core/app": {
                "components": {
                    "observableExample": {
                        "component": "Learning_KnockoutJs/observable-example",
                        "template": "Learning_KnockoutJs/observable"
                    }
                }
            }
        }
    }
    </script>

to set up the components. `observable.html` is a simple `<p>` with a `<span>` calling the time value from `observable-example.js`

    <p>The current time is: <span data-bind="text: time"></span></p>

The view model `observable-example.js` defines a new `uiComponent`. Within this, `time` is created as a variable and then set as observable. Using setInterval, time is updated every 1000ms, and the new value is 'bound' to time. 