# Example 03

This example shows rendering multiple templates/view models.

`uiCollection` is an alias for `Magento_Ui/js/lib/core/collection`. The `uiCollection` module collects together child view models.

To pass in the templates that you want to use in your collection, add a `children` key and add each child. Each key (`child1`, `child2`) is the name of your child view model, and each object is another scoped view model configuration, the same as your top level configuration.

Giving the top level element a fairly unique name of `learning_knockoutjs_js_viewmodel` helps guarantee that no one else will attempt to create a component with the same name. Using the module name as a prefix helps with this.

However, not that `child` and `child2` are generic names. This is ok because the actual full namespace for these are `learning_knockoutjs_js_viewmodel.child1` and `learning_knockoutjs_js_viewmodel.child2`. This is because they are children on `learning_knockoutjs_js_viewmodel`. 