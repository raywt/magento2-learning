define(['uiComponent'], function(Component) {
 
    return Component.extend({
        initialize: function () {
            this._super();
            this.time = Date();
            this.observe(['time']);
            setInterval(this.checkTime.bind(this), 1000);
        },
        checkTime: function(){
            this.time(Date());
        }
    });
});