# Example 01

This example is a basic knockout.js example showing a scoped view model.

The code uses the `x-magento-init` mechanism to run the program in the `Magento_Ui/js/core/app` RequireJS module.  The `Magento_Ui/js/core/app` RequireJS module is responsible for registering scoped knockout.js view models based on the configuration passed in. 

`{`
`    "components": {`
`        //`
`    }`
`}`

The JSON object passed to `Magento_Ui/js/core/app` has a single key named `components`. This is Magento's internal name for scoped Knockout.js view models. 

Inside the component key is another JSON object `"learning_knockoutjs_js_viewmodel"`. The key is the name of the view model you want to register. 

The values
`"component": "uiElement",`
`"helloMessage": "Hello from the ViewModel",`
`"goodbyeMessage": "Goodbye from the ViewModel"`
is the configuration for the specific RequireJS module that Magento will load and use as a constructor function for the view model. The component key is the name of the RequireJS module. This module is Magento's base constructor function for view models. 

Magento uses the other keys at this level (`helloMessage`,`goodbyeMessage`) as data properties for the view model object. The names of these match the variable names in the data-bind in the HTML template, e.g. `<p data-bind="text:helloMessage"></p>`

The full Magento path for `uiElement` is `Magento_Ui/js/lib/core/element/element`. Magento has aliased this using the RequireJS map feature. When Magento instantiates the view model, it does so with code similar to this:

`requirejs(['uiElement], function(UiElement) {`
`    var viewModel = new UiElement;`
`    viewModel.helloMessage = "Hello from the ViewModel";`
`    return viewModel;`
`});`

Magento uses the function returned by the module as a JS constructor function. Magento then assigns each data key in `config` to the object as a value.