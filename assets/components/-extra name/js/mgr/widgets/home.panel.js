-extra name.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('-extra name.management')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,items: [{
                title: _('-extra name')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+_('-extra name.management_desc')+'</p>'
                    ,border: false
                    ,bodyCssClass: 'panel-desc'
                },{
                    xtype: '-extra name-grid--extra name'
                    ,cls: 'main-wrapper'
                    ,preventRender: true
                }]
            }]
        }]
    });
    -extra name.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(-extra name.panel.Home,MODx.Panel);
Ext.reg('-extra name-panel-home',-extra name.panel.Home);
