	<footer id="footer" class="midnight-blue">
		<div class="container">
			<div class="row">
                <div class="col-sm-6">
                	<ul>
                        
                    </ul>
                </div>
                <div class="col-sm-6">
					<p class="pull-right"> &copy; Redes evang&eacute;licas - Todos los derechos reservados.<br></p>
				</div>
			</div>
		</div>
	</footer>
		<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyD3v08DqpB_oPV6UYljRryuk7ZEKR9yOF4&libraries=places"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url('')."/assets/js/maps.js"?>"></script>
		<script type="text/javascript" src="<?=base_url('')."/assets/js/api.js"?>"></script>
		<script type="text/javascript">
		  (function(){

      var host2widgetBaseUrl = {
        "wt.soundcloud.dev" : "wt.soundcloud.dev:9200/",
        "wt.soundcloud.com" : "wt.soundcloud.com/player/",
        "w.soundcloud.com"  : "w.soundcloud.com/player/"
      };

      var consoleBox = document.querySelector('.console');

      var forEach = Array.prototype.forEach;

      function addEvent(element, eventName, callback) {
        if (element.addEventListener) {
          element.addEventListener(eventName, callback, false);
        } else {
          element.attachEvent(eventName, callback, false);
        }
      }

      function clearConsole() {
        consoleBox.value = '';
      }

      function updateConsole(value) {
        consoleBox.value = value +"\n" + consoleBox.value;
      }

      var widgetUrl = "https://api.soundcloud.com/playlists/206551065";


      var iframe = document.querySelector('.sc-widget');
      iframe.src = location.protocol + "//" + "wt.soundcloud.com/player/" + "?url=" + widgetUrl;
      var widget = SC.Widget(iframe);

      var eventKey, eventName;
      for (eventKey in SC.Widget.Events) {
        (function(eventName, eventKey) {
          eventName = SC.Widget.Events[eventKey];
          widget.bind(eventName, function(eventData) {
            updateConsole("SC.Widget.Events." + eventKey +  " " + JSON.stringify(eventData || {}));
          });
        }(eventName, eventKey))
      }

      var actionButtons = document.querySelectorAll('.actionButtons button');
      forEach.call(actionButtons, function(button) {
        addEvent(button, 'click', function(e) {
          if (e.target !== this) {
            e.stopPropagation();
            return false;
          }
          var input = this.querySelector('input');
          var value = input && input.value;
          widget[this.className](value);
        });
      });

      var getterButtons = document.querySelectorAll('.getterButtons button');
      forEach.call(getterButtons, function(button){
        addEvent(button, 'click', function(e) {
          widget[this.className](function(value){
            updateConsole(button.getAttribute('caption') + " " + JSON.stringify(value));
          });
        });
      });

      var widgetLinks = document.querySelectorAll('.widgetLinks a');
      var widgetUrlInput = document.querySelector('.urlInput');
      forEach.call(widgetLinks, function(link) {
        addEvent(link, 'click', function(e) {
          widgetUrlInput.value = this.getAttribute("href");
          e.preventDefault();
        });
      });

      var reloadButton = document.querySelector('.reload');
      addEvent(reloadButton, 'click', function() {
        clearConsole();
        var widgetOptions = getWidgetOptions();
        widgetOptions.callback = function(){
          updateConsole('Widget is reloaded.')
        };
        widget.load(widgetUrlInput.value, widgetOptions);
      });

      function getWidgetOptions() {
        var optionInputs = document.querySelectorAll('.widgetOptions input');
        var widgetOptions = {};
        forEach.call(optionInputs, function(option){
          widgetOptions[option.id] = option.type === 'text' ? option.value : option.checked;
        });
        return widgetOptions;
      }

    }());
		</script>
		</script>
	    <script type="text/javascript">
	        google.load("feeds", "1") //Load Google Ajax Feed API (version 1)
	    </script>
	    <script type="text/javascript">
            var feedcontainer=document.getElementById("news")
            var feedurl="http://www.noticiacristiana.com/feed"
            var feedlimit=5
            var rssoutput=""

            function rssfeedsetup(){
                var feedpointer=new google.feeds.Feed(feedurl) //Google Feed API method
                feedpointer.setNumEntries(feedlimit) //Google Feed API method
                feedpointer.load(displayfeed) //Google Feed API method
            }

            function displayfeed(result){
                if (!result.error){
	                var thefeeds=result.feed.entries
	                for (var i=0; i<thefeeds.length; i++)
	                rssoutput+="<p><a onclick='window.open(this.href); return false;' onkeypress='window.open(this.href); return false;' href='" + thefeeds[i].link + "'>" + thefeeds[i].title + ";</a><br></p>"
	                feedcontainer.innerHTML=rssoutput
            	}
            else
                alert("Error fetching feeds!")
            }

            window.onload=function(){
                rssfeedsetup()
                $(function () {
				    Map.options.scrollwheel = false; // Esto desaciva el zoom cuando se hace scroll
					Map.coords = {
						lat: 19.5424616,
						lng: -96.9093856,
					};
					Map.init( $$('#mapa'), function (map) {
						// Do something here whe your maps its loaded
					});
				});
            }

        </script>
		
		<script src="<?=base_url('')."assets/js/bootstrap.min.js"?>"></script>
	</body>
</html>