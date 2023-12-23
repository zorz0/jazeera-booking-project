(function (win) {

    function create_UUID(){
        var dt = new Date().getTime();
        var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
            var r = (dt + Math.random()*16)%16 | 0;
            dt = Math.floor(dt/16);
            return (c=='x' ? r :(r&0x3|0x8)).toString(16);
        });
        return uuid;
    }
    var maxHeight = 600;
    var minHeight = 100;
    var maxWidth = 450;
    var minWidth = 100;
    var UNIQUEID = '3ix5ju9kqbtr2W';
    var OPTIONS = {};
    var EVENTS = {};
    var VISIT_ID = create_UUID();

    var myChat = {
        init : function (options) {
            options = Object.assign({
                entity : "api", // After which chat is expired
            },options);
            OPTIONS = options;
            //options.domain =  'socnect.local.com';
            options.domain =  options.domain || [options.entity,".mehery.com"].join("");
            options.path = ["https://", options.domain ,"/postman/ext/plugin/customer/app/chat/"].join("");

            if(options.local){
                options.path = [options.local, "/ext/plugin/customer/app/chat/"].join("");
            }

            let VISITOR_ID = localStorage.getItem(`${options.domain}-visitor`) || VISIT_ID;
            localStorage.setItem(`${options.domain}-visitor`,VISITOR_ID);

            //local-kwt.amxremit.com:8083/agent/app/home
            options.query = [
               // "CDN_URL=http://127.0.0.1:8080&CDN_DEBUG=true",
               `channelId=${options.channelId}`,
               `visitorId=${VISITOR_ID}`,
               `visitId=${VISIT_ID}`
            ].join('&')
            console.log("init",options);
            var div = document.createElement("div");
            document.getElementsByTagName('body')[0].appendChild(div);
            div.outerHTML = `
            <div id='myChatDiv' class="myChatDivClose ${options.config["launcher.position"]}">
                <div id='myChatTitleBar' 
                     style='height: ${minHeight}px; width: ${minWidth}px; position:fixed; cursor: pointer;'></div>
                <div id='myChatFrame' style='margin: 0px 0px 0px 0px;'>
                    <iframe id="myChatIFrame-${UNIQUEID}"
                        allow="camera https://${options.domain}; microphone https://${options.domain}; geolocation https://${options.domain}"
                            src=${options.path}?${options.query}></iframe>
                <div>
            </div>
            <style>
                #myChatDiv {
                    height: ${minHeight+2}px; width: ${minWidth+2}px; 
                    position: fixed; z-index:1000000; 
                    background-color: transparent; 
                    padding:0px!important; 
                    margin:0px!important
                }
                #myChatDiv.myChatDivOpen, #myChatDiv.myChatDivClose{
                    bottom: 0px; right:0px;
                }
                #myChatDiv.myChatDivOpen.left-bottom, #myChatDiv.myChatDivOpen.left-sticky{
                    bottom: 0px; left:0px; right:auto;
                }
                #myChatDiv.myChatDivClose.right-bottom{
                    bottom: 0px; right:0px;
                }
                #myChatDiv.myChatDivClose.left-bottom{
                    bottom: 0px; left:0px;
                }
                #myChatDiv.myChatDivClose.right-sticky{
                    bottom: calc(50% - 20px); right:0px;
                }

                #myChatDiv.myChatDivClose.left-sticky{
                    bottom: calc(50% - 20px); left:0px;
                }
                
                #myChatDiv #myChatFrame {
                    maring: 0px 0px 0px 0px; 
                    position:relative;
                    bottom:0;
                    width:100%;
                    height:100%;
                }
                #myChatDiv #myChatFrame #myChatIFrame-${UNIQUEID} {
                    border-width: 0px; 
                    margin: 1px 1px 1px 1px;
                    height: ${minHeight}px; width: ${minWidth}px; 
                }
                .myChatDivOpen#myChatDiv {
                    border-radius: 10px!important;
                    height: ${maxHeight}px; width: ${maxWidth}px; 
                    height: calc(100vh - 55px);
                    max-height: ${maxHeight}px;
                }
                .myChatDivOpen#myChatDiv #myChatFrame {
                    maring: 0px 0px 0px 0px; 
                }
                .myChatDivOpen#myChatDiv #myChatTitleBar {
                    display : none;
                }
                .myChatDivOpen#myChatDiv #myChatFrame #myChatIFrame-${UNIQUEID} {
                    margin: 0px 0px 0px 0px;
                    height: ${maxHeight}px; width: ${maxWidth}px; 
                    height: calc(100vh - 55px);
                    max-height: ${maxHeight}px;
                }
                @media (max-width: 450px) {
                    .myChatDivOpen#myChatDiv,
                    .myChatDivOpen#myChatDiv #myChatFrame #myChatIFrame-${UNIQUEID} {
                        width: 100%;
                        height: 100%;
                        max-height: 100%;
                        right: 0;
                        bottom: 0;
                        border-radius: 0px!important;
                        transition: .1s ease-in-out;
                        z-index:100000;
                    }
                }

            </style>
            `;
            this.$myChatIFrame = document.getElementById(`myChatIFrame-${UNIQUEID}`);
            this.$myChatDiv = document.querySelector('#myChatDiv');
            this.$myChatFrame = document.querySelector('#myChatFrame');

            var THAT = this;
            document.querySelector('body').addEventListener('click', function (e) {
                e.target.matches = e.target.matches || e.target.msMatchesSelector;
                if (e.target.matches('#myChatTitleBar')) { 
                    THAT.postMessage( { event : "CHAT_TOGGLE" });
                };
            });



        },
        open : function(){
            this.postMessage( { event : "CHAT_TOGGLE" });
        },
        close : function(){
            this.postMessage( { event : "CHAT_TOGGLE" });
        },
        ON_CHAT_LOAD : function () {
           this.postMessage({event : "SET_OPTIONS", options : OPTIONS });
           if(EVENTS.load)  EVENTS.load(OPTIONS);
        },
        chatOnClose : function (argument) {
            if(EVENTS.close)  EVENTS.close(argument);
            this.$myChatDiv.className = this.$myChatDiv.className.replace("myChatDivOpen",'myChatDivClose');
        },
        chatOnOpen : function (argument) {
            this.$myChatDiv.className = this.$myChatDiv.className.replace("myChatDivClose",'myChatDivOpen');
            if(EVENTS.open)  EVENTS.open(argument);
        },
        postMessage : function (obj) {
            var msg = JSON.stringify({myChatEvent : obj});
            console.log("PARENT:sendPostMessage",msg);
            this.$myChatIFrame.contentWindow.postMessage(msg, '*');
        },
        bindEvent : function(element, eventName, eventHandler) {
            if (element.addEventListener){
                element.addEventListener(eventName, eventHandler, false);
            } else if (element.attachEvent) {
                element.attachEvent('on' + eventName, eventHandler);
            }
        },
        on : function(event,callback){
            EVENTS[event] = callback;
            return this;
        }
    };

    myChat.bindEvent(win,'message',function (e) {
        if(!e || !e.data || typeof e.data != 'string' || e.data.trim().indexOf("{")!=0){
            return;
        }
        var data = JSON.parse(e.data);
        if(!data.myChatEvent){
            return;
        }
        var myChatEvent = data.myChatEvent;
        if(myChatEvent.event == "ON_CHAT_TOGGLE"){
            if(myChatEvent.isChatOpen) myChat.chatOnOpen(); else myChat.chatOnClose();
        } else if(typeof myChat[myChatEvent.event] == 'function'){
            myChat[myChatEvent.event](myChatEvent);
        }
    });

    var scripts = document.getElementsByTagName('script');    
    try {
        // let config = {
        //     "domain" : "demo.mehery.xyz",
        //     "channelId" : "web:mainsite",
        //     "channelKey" : "1g8kjp23sj8qxQE8QY2T89U",
        //     "config":{
        //        "header.bg.color":"#ffffff",
        //        "header.text.color":"#000000",
        //        "header.close.color":"#000ffffff000",
        //        "header.icon.url":"https://stg-cms.jazeeraairways.com/getattachment/781c850b-47d3-4e0a-a73b-5e6dcfa2b776/jazeera-logo.svg",
        //        "header.title.text":"Need Help?",
        //        "launcher.bg.color":"#0072bc",
        //        "messageList.bg.color":"#ffffff",
        //        "sentMessage.bg.color":"#0167aa",
        //        "sentMessage.text.color":"#ffffff",
        //        "receivedMessage.bg.color":"#009bde",
        //        "receivedMessage.text.color":"#ffffff",
        //        "userInput.bg.color":"#183a8d",
        //        "userInput.text.color":"#ffffff",
        //        "userInput.button.color":"#ffffff",
        //        "launcher.disabled":false,
        //        "launcher.position":"left-sticky",
        //        "externalcss.url":"https://unpkg.com/bootstrap/dist/css/bootstrap.min.css"
        //     }
        //  }
        // myChat.init(config);
        let configString = null;
        if(!configString){
            for(var i in scripts){
                if(scripts[i].id == 'mychatscript'){
                    configString = scripts[i].innerHTML.trim();
                    break;
                }
            }
        }
        if(!configString){
            var index = scripts.length - 1;
            var myScript = scripts[index];
            configString = myScript.innerHTML.trim();
        }
        if(configString){
            // myChat.init(JSON.parse(configString));
        }
        // win.myChat = myChat;


    } catch(e){
        console.error(e);
    }
    
}(this));