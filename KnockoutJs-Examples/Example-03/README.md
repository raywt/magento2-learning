# Example 03

This example shows loading HTML via Knockout.js templates.

This example fixes the main issue with Example 02, which was that the HTML was part of the script tag, making reusable libraries difficult.

Here, the Knockout template calls a URL instead of a script tag with an id which was used in Example 02. Calling a URL with Knockout templates is a Magento customisation to Knockout. This allows you to store templates as plain .html files and only load in the ones you need with template binding.

The line of code that achieves this is:

`<!-- ko template: 'Learning_KnockoutJs/knockout-template-example' --><!-- /ko -->`

The URN for the identifier corresponds to:

`app/code/Learning/KnockoutJs/view/frontend/web/template/knockout-template-example.html`

So `Learning_KnockoutJs` becomes `app/code/Learning/KnockoutJs` and the second portion, `knockout-template-example` becomes `view/frontend/web/template/knockout-template-example.html`. This second path indicates the filename from the base folder, appended with .html. 

Because the folder/file is in the web folder, the template file is also available as a URL from Magento's static content folder. This means that when you load the page, behind the scenes Magento loads the .html template file via AJAX, and then uses the loaded HTML as a Knockout.js template.

.html templates have the same functionality as Knockout.js templates loaded via a `<script>` tag. This allows you to use `data-bind` etc. In this example, because we load the `knockout-template-example.html` file within `<div data-bind="scope: 'learning_knockoutjs_js_viewmodel'">`, `knockout-template-example.html` uses that view model. If we had loaded the `knockout-template-example.html` inside a different scope, the template would use that other scope instead and use the view model tied to that scope.

The tradeoff of loading template files as .html files is that there are more network calls. You also have to dig through more files to understand what will be rendered from the code you are reading.

The main benefit is that it allows you to organize templates into files, and allows you to reduce the size of your initial page load.