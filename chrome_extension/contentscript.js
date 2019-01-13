var head = document.querySelector('#titleSection')
var head2 = head.querySelector('h1')
var head3 = head2.querySelector('span')
var span_Text = document.getElementById("productTitle").innerText;
if(span_Text.includes("Cadbury")){

      console.log("hello")

    chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("Heinz")){
   
  console.log("hello")

chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("Heinz")){
   
    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    

if(span_Text.includes("Bingo")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    

if(span_Text.includes("Be Natural")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("Kellogs")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    

if(span_Text.includes("Special K")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    

if(span_Text.includes("Fanta")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("Mountain Dew")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("Coca-Cola")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    

if(span_Text.includes("Mountain Dew")){

    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("7Up")){
    console.log("hello")

  chrome.runtime.sendMessage({type: "notification" });
}    
if(span_Text.includes("Maggi")){

    console.log("hello")
  
  chrome.runtime.sendMessage({type: "notification" });
}  



chrome.runtime.sendMessage({callCopyFunc: "callstart"}, function(response) {
  console.log(response.callCopyFunc);
}); 
