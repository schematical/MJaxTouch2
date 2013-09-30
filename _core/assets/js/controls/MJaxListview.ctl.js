
var MJaxListview = function(objData){

    var me = new MJax.ControlDefinitions.MJaxControlBase(objData);
    /*me.Pre_Render = function(){

        this.RenderData = [];
        for(var strKey in objToRender){
            if(typeof(objToRender[strKey]) != 'object'){
                var strText = objToRender[strKey];
            }else{
                var strText = typeof(objToRender[strKey]);
            }
            this.RenderData[this.RenderData.length] = {
                'name':strKey,
                'value':objToRender[strKey],
                'type':typeof(objToRender[strKey]),
                'text':strText
            };
        }
    }*/
    me._OrigAttach = me.Attach;
    me.Attach = function(){
        this._OrigAttach();
        this.jEle.find('a').click(function(objEvent){
            var jThis = $(this).closest(':jqmData(role=listview)');
            jThis.trigger('mjax-touch-listview-item-select');

        });
    };

    return me;
}
//MJaxLinkButton.prototype.type = 'MJaxLinkButton';
MJax.ControlDefinitions['MJaxListview'] = MJaxListview;
