chrome.runtime.onMessage.addListener(function(request, sender, sendResponse) { 

    var options = {
    type: "basic", 
    title: "palm free",
    message: "hey, you are killing an orangutan by buying this product",
    iconUrl: "icon.png" ,
};

chrome.notifications.create(options, callback);{
    setTimeout(function(){
        chrome.notifications.clear(notificationId, function(){});
      }, 2000);
}

function callback() {
    console.log("hello")
}
    sendResponse();
});
url: "https://google.com"
chrome.notifications.onClicked.addListener(function(notificationId, byUser) {
chrome.tabs.create({url :"https://google.com"}) })