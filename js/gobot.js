
<script type="text/javascript">
    var UserDate        = new Date();
    var UserHour        = UserDate.getHours();
    var UserDay         = UserDate.getDay();
    var StartTime       = 19;
    var EndTime         = 7;

    if (UserDay != 0 && UserDay != 6) {
        if (UserHour >= StartTime || UserHour < EndTime) {

            (function(){
                window['gobot'] = window['gobot'] || function(){(window['gobot'].queue = window['gobot'].queue || []).push(arguments)}
                var script = document.createElement('script')
                script.async = 1
                script.src = 'https://www.getgobot.com/app/v1/gobot-client.js'
                var insert = document.getElementsByTagName('script')[0]
                insert.parentNode.insertBefore(script, insert)
            })()
            gobot('create', '-Lc_KFfvX5Ry0hk7CvZj')
            gobot('pageview')

        }
    }else{
        (function(){
            window['gobot'] = window['gobot'] || function(){(window['gobot'].queue = window['gobot'].queue || []).push(arguments)}
            var script = document.createElement('script')
            script.async = 1
            script.src = 'https://www.getgobot.com/app/v1/gobot-client.js'
            var insert = document.getElementsByTagName('script')[0]
            insert.parentNode.insertBefore(script, insert)
        })()
        gobot('create', '-Lc_KFfvX5Ry0hk7CvZj')
        gobot('pageview')
    }
</script>
