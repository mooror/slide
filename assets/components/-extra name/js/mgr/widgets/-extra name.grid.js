-extra name.grid.-extra name = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: '-extra name-grid--extra name'
        ,url: -extra name.config.connectorUrl
        ,baseParams: { action: 'mgr/doodle/getList' }
        ,save_action: 'mgr/doodle/updateFromGrid'
        ,fields: ['id','name','description']
        ,paging: true
        ,autosave: true
        ,remoteSort: true
        ,anchor: '97%'
        ,autoExpandColumn: 'name'
        ,columns: [{
            header: _('id')
            ,dataIndex: 'id'
            ,sortable: true
            ,width: 60
        },{
            header: _('-extra name.name')
            ,dataIndex: 'name'
            ,sortable: true
            ,width: 100
            ,editor: { xtype: 'textfield' }
        },{
            header: _('-extra name.description')
            ,dataIndex: 'description'
            ,sortable: false
            ,width: 350
            ,editor: { xtype: 'textfield' }
        }]
        ,tbar: [{
            text: _('-extra name.doodle_create')
            ,handler: { xtype: '-extra name-window-doodle-create' ,blankValues: true }
        },'->',{
            xtype: 'textfield'
            ,id: '-extra name-search-filter'
            ,emptyText: _('-extra name.search...')
            ,listeners: {
                'change': {fn:this.search,scope:this}
                ,'render': {fn: function(cmp) {
                    new Ext.KeyMap(cmp.getEl(), {
                        key: Ext.EventObject.ENTER
                        ,fn: function() {
                            this.fireEvent('change',this);
                            this.blur();
                            return true;
                        }
                        ,scope: cmp
                    });
                },scope:this}
            }
        }]
    });
    -extra name.grid.-extra name.superclass.constructor.call(this,config)
};
Ext.extend(-extra name.grid.-extra name,MODx.grid.Grid,{
    search: function(tf,nv,ov) {
        var s = this.getStore();
        s.baseParams.query = tf.getValue();
        this.getBottomToolbar().changePage(1);
        this.refresh();
    }
    ,getMenu: function() {
        return [{
            text: _('-extra name.doodle_update')
            ,handler: this.updateDoodle
        },'-',{
            text: _('-extra name.doodle_remove')
            ,handler: this.removeDoodle
        }];
    }
    ,updateDoodle: function(btn,e) {
        if (!this.updateDoodleWindow) {
            this.updateDoodleWindow = MODx.load({
                xtype: '-extra name-window-doodle-update'
                ,record: this.menu.record
                ,listeners: {
                    'success': {fn:this.refresh,scope:this}
                }
            });
        }
        this.updateDoodleWindow.setValues(this.menu.record);
        this.updateDoodleWindow.show(e.target);
    }

    ,removeDoodle: function() {
        MODx.msg.confirm({
            title: _('-extra name.doodle_remove')
            ,text: _('-extra name.doodle_remove_confirm')
            ,url: this.config.url
            ,params: {
                action: 'mgr/doodle/remove'
                ,id: this.menu.record.id
            }
            ,listeners: {
                'success': {fn:this.refresh,scope:this}
            }
        });
    }
});
Ext.reg('-extra name-grid--extra name',-extra name.grid.-extra name);


-extra name.window.CreateDoodle = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('-extra name.doodle_create')
        ,url: -extra name.config.connectorUrl
        ,baseParams: {
            action: 'mgr/doodle/create'
        }
        ,fields: [{
            xtype: 'textfield'
            ,fieldLabel: _('-extra name.name')
            ,name: 'name'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('-extra name.description')
            ,name: 'description'
            ,anchor: '100%'
        }]
    });
    -extra name.window.CreateDoodle.superclass.constructor.call(this,config);
};
Ext.extend(-extra name.window.CreateDoodle,MODx.Window);
Ext.reg('-extra name-window-doodle-create',-extra name.window.CreateDoodle);


-extra name.window.UpdateDoodle = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        title: _('-extra name.doodle_update')
        ,url: -extra name.config.connectorUrl
        ,baseParams: {
            action: 'mgr/doodle/update'
        }
        ,fields: [{
            xtype: 'hidden'
            ,name: 'id'
        },{
            xtype: 'textfield'
            ,fieldLabel: _('-extra name.name')
            ,name: 'name'
            ,anchor: '100%'
        },{
            xtype: 'textarea'
            ,fieldLabel: _('-extra name.description')
            ,name: 'description'
            ,anchor: '100%'
        }]
    });
    -extra name.window.UpdateDoodle.superclass.constructor.call(this,config);
};
Ext.extend(-extra name.window.UpdateDoodle,MODx.Window);
Ext.reg('-extra name-window-doodle-update',-extra name.window.UpdateDoodle);