define(['uiElement'], function (UiElement) {
    return UiElement.extend({
        defaults: {
            helloMsg: "Hello from custom-view-model.js",
            thisMsgWillBeOverridden: "Default message",
            thisMsgWillBeOverriddenTwice: "Default message"
        },
        getListOfNames: function () {
            return ['Toadie', 'Carl', 'Susan', 'Paul'];
        },
        getSomeValue: function () {
            // some logic goes here
            var $result;
            const PI = 3.14;
            $result = 20 * PI;
            return $result
        }
    });
});