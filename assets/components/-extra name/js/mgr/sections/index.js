Ext.onReady(function() {
    MODx.load({ xtype: '-extra name-page-home'});
});

-extra name.page.Home = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        components: [{
            xtype: '-extra name-panel-home'
            ,renderTo: '-extra name-panel-home-div'
        }]
    });
    -extra name.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(-extra name.page.Home,MODx.Component);
Ext.reg('-extra name-page-home',-extra name.page.Home);