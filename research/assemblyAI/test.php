<?php


$string = '[
        {
            "speaker": "A",
            "text": "This is Janice."
        },
        {
            "speaker": "B",
            "text": "Hi, misses Janice, it\'s Mario."
        },
        {
            "speaker": "A",
            "text": "I am so sorry, I couldn\'t hear you because we were sitting outside eating and there were cars and I couldn\'t hear you."
        },
        {
            "speaker": "B",
            "text": "All good. No worries."
        },
        {
            "speaker": "A",
            "text": "So tell me what you found."
        },
        {
            "speaker": "B",
            "text": "I have sent all the deals to you via email. Can you please make sure you got them? If you cannot find, I\'ll make surn."
        },
        {
            "speaker": "A",
            "text": "Okay, let me just look real quick. Ah, there we go. All right, let\'s see."
        },
        {
            "speaker": "B",
            "text": "So the email quote must be TBC flight code or something similar to that."
        },
        {
            "speaker": "A",
            "text": "Yeah, no, I found it. So that there\'s a few different options here. There is Lufthansa, Turkish Airlines and another Lufthansa and. Oh, you got them out of Missoula too. And this is business class."
        },
        {
            "speaker": "B",
            "text": "Yes. So you can click on view deal. You see there is a bottom view deal."
        },
        {
            "speaker": "A",
            "text": "I see that. Yes."
        },
        {
            "speaker": "B",
            "start": 88132,
            "text": "Click on that one and you\'ll see the full itinerary where you have the stops. So on two of them, the one with Turkish and Lufthansa, there will be a separate ticket in economy. Not sure. So it\'s going to, if I\'m not wrong, because right now I don\'t have the computer in front of me."
        },
        {
            "confidence": 0.9355791176470587,
       
            "speaker": "A",
            "start": 109196,
            "text": "The first one is going to Denver. Economy, which that\'s like an hour and a half flight. It\'s not a big deal. And then it goes through Munich and then to Rome and then coming home out of Naples. It\'s economy from Naples to Munich and that\'s a short flight as well. And then business class from Munich to Denver and then coach home. That\'s not too bad."
        },
        {
            "confidence": 0.9028936842105262,
       
            "speaker": "B",
            "start": 139890,
            "text": "The only issue about this economy flights in us, the one from in Europe, it\'s going as a package deal in Kansas. So you have exactly the same luggage. The one for the local in us, the luggage is not included in one of them. I\'m not sure about which one is for the going or for the return or maybe even for the both. I have to double check, but I know it\'s not included."
        },
        {
            "confidence": 0.8752124137931034,
       
            "speaker": "A",
            "start": 171980,
            "text": "Oh, I see. You\'re talking about the domestic flights to in and out luggage. We have to pay for luggage, which isn\'t ridiculous. We\'re not traveling with huge amount."
        },
        {
            "confidence": 0.7896974999999999,
       
            "speaker": "B",
            "start": 183588,
            "text": "Yeah, it\'s $40 up to 50 per luggage."
        },
        {
            "confidence": 0.9267020588235294,
       
            "speaker": "A",
            "start": 189560,
            "text": "Now what do you know about Turkish Airlines? Are they, are they. I flown Lufthansa before. It\'s been years ago. Though. I don\'t know much about turkish airlines. What do you know about them?"
        },
        {
            "confidence": 0.9085142307692308,
       
            "speaker": "B",
            "start": 202720,
            "text": "Basically both of them are very good. Turkish is more love to because of the food for the flights in Europe, we have more european food. And most of the customers likes the european food more than the one they provide companies. In regards of the aircraft you have in the code. Exactly. The aircraft is going to be used. But Iscreenshots of how does it look? Because they have two types of aircraft. One is going seats arrangement. It\'s one to one and they have another one, two, two. Which is not as good as one to one."
        },
        {
            "confidence": 0.9239311538461538,
       
            "speaker": "A",
            "start": 252400,
            "text": "Right. Right. Okay. All right. So these are really good options. Let me. I\'ve got your email. Let me go over this with my husband and see what he thinks. And I want to check one other thing. So Friday, October 11. Gets back in here late. Okay. All right. Let me check with my husband and I can go over this with him and give you a call back probably tonight. What time do you work tomorrow?"
        },
        {
            "confidence": 0.9331554255319152,
       
            "speaker": "B",
            "start": 286890,
            "text": "So Miami time from three to eight. But you can contact me anytime because I am available pretty much 27 four. So if I am not available via the phone, this phone number I\'m using right now is my direct line because you called before general line and my colleagues had to forward the call to me, but I was not available at that time. So if I will not be available via the phone, you can leave me a voice message or  and I\'ll get back to you."
        },
        {
            "confidence": 0.91613,
       
            "speaker": "A",
            "start": 325480,
            "text": "Okay, beautiful. All right. Give me, like. Give me a little time and I\'ll get back to you."
        },
        {
            "confidence": 0.8686507142857144,
       
            "speaker": "B",
            "start": 329600,
            "text": "Yeah, sure, sure. You have time because the seats availability there, it\'s pretty good. Like five or four seats for. For this fare. Okay, I will check regarding the aircraft type because if it\'s the 1121 is definitely worth it. If it\'s the 1221, sorry, 222, it\'s worth it too. But I\'m not sure how big is the difference between Lufthansa and Turkish in the code I sent to you."
        },
        {
            "confidence": 0.8807444,
       
            "speaker": "A",
            "start": 362690,
            "text": "Gotcha. Okay. All right. Well, thank you so much for everything. And I\'ll go over this with my husband, get back to. Yeah, sure. Okay."
        },
        {
            "confidence": 0.9041566666666667,
       
            "speaker": "B",
            "start": 371330,
            "text": "With your call."
        },
        {
            "confidence": 0.7404983333333334,
       
            "speaker": "A",
            "start": 371810,
            "text": "All right, appreciate it. Bye bye."
        },
        {
            "confidence": 0.8882549999999999,
       
            "speaker": "B",
            "start": 373442,
            "text": "A nice day. Bye."
        }
    ]';

$data = json_decode($string,true);

foreach ($data as $item){
    echo "[SPEAKER {$item['speaker']} ]: {$item['text']}\n";
}