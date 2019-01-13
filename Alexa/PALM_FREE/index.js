/* eslint-disable  func-names */
/* eslint quote-props: ["error", "consistent"]*/

// 1. Text strings =====================================================================================================

let speechOutput;
let reprompt;
let welcomeOutput = "Welcome to Palm Free. To know about palm oil free products, you can say like palm oil free then product name. Please say the product name";
let welcomeReprompt = "";
// 2. Skill Code =======================================================================================================
"use strict";
const Alexa = require('alexa-sdk');
const APP_ID = undefined;  // TODO replace with your app ID (OPTIONAL).
speechOutput = '';
const handlers = {
	'LaunchRequest': function () {
		this.emit(':ask', welcomeOutput, welcomeReprompt);
	},
	'AMAZON.HelpIntent': function () {
		speechOutput = 'To know about palm oil free products, you can say like palm oil free then product name';
		reprompt = '';
		this.emit(':ask', speechOutput, reprompt);
	},
   'AMAZON.CancelIntent': function () {
		speechOutput = 'Cancelling';
		this.emit(':tell', speechOutput);
	},
   'AMAZON.StopIntent': function () {
		speechOutput = 'Exiting Palm Free';
		this.emit(':tell', speechOutput);
   },
   'SessionEndedRequest': function () {
		speechOutput = '';
		this.emit(':tell', speechOutput);
   },
	'AMAZON.NavigateHomeIntent': function () {
		speechOutput = '';

		//any intent slot variables are listed here for convenience


		//Your custom intent handling goes here
		speechOutput = "This is a place holder response for the intent named AMAZON.NavigateHomeIntent. This intent has no slots. Anything else?";
		this.emit(":ask", speechOutput, speechOutput);
    },
	'PalmFreeIntent': function () {
		const Category=['chocolate',
                'mayonise',
                'peanut butter',
                'hazelnut spread',
                'chocolate cake',
                'chips',
                'snacks',
                'chocolate powder',
                'cereals',
                'soap',
                'beauty products',
                'shampoo'];
                
const products=[['Snickers chocolate','Kitkat chocolate','Mars miniatures chocolates','Twix home breads chocolate bar','Lindt excellence cocoa chocolate','Lindt Swiss Classic Milk Chocolate','Toblerone Tiny Swiss Milk Chocolate','Toblerone Swiss Milk Chocolate'],
                ['Urban Platter Vegan Premium Mayo','Urban Platter Vegan Chipotle Mayo','Urban Platter Vegan Tandoori Mayo'],
                ['All Over Nuts Jaggery Peanut Butter'],
                ['Pintola Hazelnut Cocoa Spread'],
                ['Pillsbury Pastry Cake'],
                ['Too Yumm! Multigrain Chips'],
                ['TooYumm! Veggie Stix, Cheese and Herbs'],
                ['Nestle Milo Active Go'],
                ['Bagrry\'s Crunchy Muesli Crunchy Oat'],
                ['Khadi Assorted Soap'],
                ['Khadi Herbal pure rose and honey Moisturiser'],
                ['Khadi Herbal Amla and Bhringraj Shampoo','Khadi Mauri Herbals Anti Dandruff Herbal Shampoo']];

		let categorySlotRaw = this.event.request.intent.slots.category.value;
         let index=Category.indexOf(`${categorySlotRaw}`);
         
		//Your custom intent handling goes here
		speechOutput = `${products[index]} are palm free products.`;
		this.emit(":ask", speechOutput,"Should I tell you again?");
    },	
	'Unhandled': function () {
        speechOutput = "The skill didn't quite understand what you wanted.  Do you want to try something else?";
        this.emit(':ask', speechOutput, speechOutput);
    }
};

exports.handler = (event, context) => {
    const alexa = Alexa.handler(event, context);
    alexa.appId = APP_ID;
    alexa.registerHandlers(handlers);
    alexa.execute();
};

//    END of Intent Handlers {} ========================================================================================