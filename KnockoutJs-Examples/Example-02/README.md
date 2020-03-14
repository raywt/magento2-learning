# Example 02

This example shows Knockout.js templates.

Similar to Example 01, we have a data-bind scoped to our viewmodel:

`<div data-bind="scope: 'scope: 'learning_knockoutjs_js_viewmodel'">`

However, this time we have a ko template instead of the scope-binded div tags

`<!-- ko template: "exampleKoTemplateId"--><!-- /ko -->`

The name given in the template binding, `exampleKoTemplateId`, is used to tell Knockout to render the template with that name. This template is defined in a script tag:

    <script type="text/html" id="exampleKoTemplateId">
        <h2>Content rendered from a Knockout.js Template</h2>
        <p data-bind="text:helloMessage"></p>
        <p data-bind="text:goodbyeMessage"></p>
    </script>

The problem with the template system is that you need to render the template you want to use as separate HTML DOM nodes, making it difficult to build a library that can be reused. 
