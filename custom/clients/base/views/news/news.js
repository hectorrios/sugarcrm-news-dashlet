({
    /* File: ./custom/clients/base/views/news/news.js
     *
     * Date:        July 27, 2016
     *
     * Author:      Angel Magaña
     *
     * Description: Adjustment to News dashlet to use RSS instead of retired Google API
     *
     */

    extendsFrom: 'NewsView',

    loadData: function (options) {
        var self = this;

        if(_.isUndefined(this.model)){
            return;
        }

        var name = this.model.get("account_name") || this.model.get('name') || this.model.get('full_name'),
            limit = parseInt(this.settings.get('limit') || 5, 10);

        if (_.isEmpty(name)) {
            return;
        }

        //Need to clean up spaces
        name = name.replace(/ /g, '+');

        var url = encodeURIComponent('https://news.google.com/news/section?q=' + name + '&output=rss');

        app.api.call('GET', app.api.buildURL('rssfeed?feed_url=' + url), {}, {
            success: function(data){
                _.extend(self, data);
                self.render();
            }
        });

    }

})
